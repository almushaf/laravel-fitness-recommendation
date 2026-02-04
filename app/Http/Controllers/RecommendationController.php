<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Support\Facades\Auth;

class RecommendationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $profile = $user->profile;

        // ⛔ Cek profil hanya jika bukan admin
        if (!$profile && $user->role !== 'admin') {
            return redirect()->route('profile.create')->with('warning', 'Lengkapi profil Anda terlebih dahulu.');
        }

        // Ambil semua program yang cocok berdasarkan goal, dan eager load details + logsToday
        $programs = Program::with(['details.logsToday'])->get();

        if ($programs->isEmpty()) {
            return view('recommendation.index', [
                'recommended' => null,
                'programs' => [],
                'weights' => [],
            ]);
        }

        // Bobot SAW 6 kriteria
        $weights = [
            'goal' => 0.30,
            'frequency' => 0.20,
            'experience_level' => 0.20,
            'duration' => 0.10,
            'avg_exercise' => 0.10,
            'muscle_variety' => 0.10,
        ];

        // Hitung atribut tambahan: avg_exercise dan muscle_variety
        foreach ($programs as $program) {
            $grouped = $program->details->groupBy('day');
            $program->avg_exercise = $grouped->map->count()->avg() ?: 0;
            $program->muscle_variety = $program->details->pluck('muscle_focus')->unique()->count();
        }

        // Max untuk normalisasi
        $maxDuration = $programs->max('duration') ?: 1;
        $maxExercise = $programs->max('avg_exercise') ?: 1;
        $maxVariety = $programs->max('muscle_variety') ?: 1;

        // Konversi level ke angka
        $levelMap = ['pemula' => 1, 'menengah' => 2, 'lanjutan' => 3];
        $userLevel = $levelMap[$profile->experience_level] ?? 1;

        foreach ($programs as $program) {
            // C1 - Goal
            $goalScore = $profile && $program->goal === $profile->goal ? 1 : 0.5;

            // C2 - Frekuensi
            $freqDiff = abs($program->frequency - $profile->frequency);
            if ($freqDiff === 0) {
                $freqScore = 1;
            } elseif ($freqDiff === 1) {
                $freqScore = 0.75;
            } elseif ($freqDiff === 2) {
                $freqScore = 0.5;
            } else {
                $freqScore = 0.25;
            }

            // C4 - Level pengalaman
            $progLevel = $levelMap[$program->experience_level] ?? 1;
            $levelDiff = abs($userLevel - $progLevel);
            if ($levelDiff === 0) {
                $levelScore = 1;
            } elseif ($levelDiff === 1) {
                $levelScore = 2/3;
            } else {
                $levelScore = 1/3;
            }

            // C3 - Durasi (normalisasi selisih relatif)
            $programDuration = $program->duration ?: 1;
            $preferredDuration = $profile?->duration ?: 1;
            $durationScore = 1 - abs($programDuration - $preferredDuration) / max($programDuration, $preferredDuration);

            // C5 - Rata-rata latihan per hari
            $avgExerciseScore = $program->avg_exercise / $maxExercise;

            // C6 - Variasi otot
            $muscleVarietyScore = $program->muscle_variety / $maxVariety;

            // Hitung skor total SAW
            $program->score = (
                $weights['goal'] * $goalScore +
                $weights['frequency'] * $freqScore +
                $weights['experience_level'] * $levelScore +
                $weights['duration'] * $durationScore +
                $weights['avg_exercise'] * $avgExerciseScore +
                $weights['muscle_variety'] * $muscleVarietyScore
            );
        }

        $sortedPrograms = $programs->sortByDesc('score')->values();
        $recommended = $sortedPrograms->first();
        $recommended->loadMissing('details.logsToday');

        // ✅ Simpan program rekomendasi ke profile
        if ($profile && $recommended) {
            $profile->update(['program_id' => $recommended->id]);
        }

        $alternatives = $sortedPrograms->filter(fn($p) => $p->id !== $recommended->id);

        return view('recommendation.index', [
            'recommended' => $recommended,
            'programs' => $alternatives,
            'weights' => $weights,
        ]);
    }
}
