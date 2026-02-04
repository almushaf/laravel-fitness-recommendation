<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkoutLog;
use Illuminate\Support\Facades\Auth;

class WorkoutLogController extends Controller
{
    /**
     * Simpan atau perbarui log latihan.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'program_detail_id' => 'required|exists:program_details,id',
            'log_date' => 'required|date',
            'actual_sets' => 'nullable|integer|min:1',
            'actual_reps' => 'nullable|integer|min:1',
            'actual_weight' => 'nullable|integer|min:0',
            'actual_duration' => 'nullable|integer|min:1',
        ]);

        WorkoutLog::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'program_detail_id' => $validated['program_detail_id'],
                'log_date' => $validated['log_date'],
            ],
            [
                'actual_sets' => $validated['actual_sets'] ?? null,
                'actual_reps' => $validated['actual_reps'] ?? null,
                'actual_weight' => $validated['actual_weight'] ?? null,
                'actual_duration' => $validated['actual_duration'] ?? null,
            ]
        );

        return back()->with('success', 'Log latihan berhasil disimpan.');
    }

    /**
     * Tampilkan riwayat log latihan user.
     */
    public function history()
    {
        $logs = WorkoutLog::with('programDetail')
            ->where('user_id', Auth::id())
            ->orderByDesc('log_date')
            ->get()
            ->groupBy(function ($log) {
                return $log->log_date;
            });

        // Ambil 1 log terbaru per nama latihan per hari
        $filteredLogs = $logs->map(function ($logsPerDay) {
            return $logsPerDay
                ->sortByDesc('updated_at')
                ->unique(fn($log) => $log->programDetail->exercise_name);
        });

        return view('workout.history', ['logs' => $filteredLogs]);
    }

    /**
     * Tampilkan grafik progres latihan berdasarkan nama latihan.
     */
    public function progress($exerciseName)
{
    $logs = WorkoutLog::with('programDetail')
        ->where('user_id', Auth::id())
        ->whereHas('programDetail', fn($q) => $q->where('exercise_name', $exerciseName))
        ->orderBy('log_date')
        ->get()
        ->groupBy('log_date') // Ambil 1 log per hari
        ->map(function ($logsPerDay) {
            $latest = $logsPerDay->sortByDesc('updated_at')->first(); // ambil log terbaru di hari itu

            return [
                'date' => $latest->log_date,
                'label' => $latest->programDetail->exercise_name,
                'volume' => $latest->actual_sets && $latest->actual_reps && $latest->actual_weight
                    ? $latest->actual_sets * $latest->actual_reps * $latest->actual_weight
                    : ($latest->actual_duration ?? 0),
            ];
        })
        ->values(); // reset key agar chart.js bisa baca sebagai array numerik

    return view('workout.progress', [
        'exercise' => $exerciseName,
        'data' => $logs,
    ]);
}

}
