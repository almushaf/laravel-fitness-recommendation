<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramDetail;
use Illuminate\Http\Request;

class AdminProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.programs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'goal' => 'required|in:weight_loss,muscle_gain,strength',
            'experience_level' => 'required|in:pemula,menengah,lanjutan',
            'frequency' => 'required|integer|min:1|max:7',
            'description' => 'nullable|string',
            'days' => 'nullable|array',
        ]);

        $program = Program::create(array_merge($validated, ['duration' => 0]));

        $this->syncProgramDetails($program, $request->days);
        $this->calculateProgramDuration($program);

        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil ditambahkan.');
    }

    public function show(Program $program)
    {
        $program->load(['details' => fn ($query) => $query->orderBy('day')]);
        $grouped = $program->details->groupBy('day');
        return view('admin.programs.show', compact('program', 'grouped'));
    }

    public function edit(Program $program)
    {
        $program->load('details');

        // Transformasi untuk frontend
        $groupedDetails = $program->details->groupBy('day')->map(function ($items) {
            return $items->map(function ($i) {
                return [
                    'name'     => $i->exercise_name,
                    'muscle'   => $i->muscle_focus,
                    'sets'     => $i->sets,
                    'reps'     => $i->reps,
                    'duration' => $i->duration,
                ];
            })->values();
        })->toArray();

        return view('admin.programs.edit', compact('program', 'groupedDetails'));
    }

    public function update(Request $request, Program $program)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'goal' => 'required|in:weight_loss,muscle_gain,strength',
            'experience_level' => 'required|in:pemula,menengah,lanjutan',
            'frequency' => 'required|integer|min:1|max:7',
            'description' => 'nullable|string',
            'days' => 'nullable|array',
        ]);

        $program->update(array_merge($validated, ['duration' => 0]));

        $this->syncProgramDetails($program, $request->days);
        $this->calculateProgramDuration($program);

        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil diperbarui.');
    }

    public function destroy(Program $program)
    {
        $program->details()->delete();
        $program->delete();

        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil dihapus.');
    }

    private function syncProgramDetails(Program $program, $days)
    {
        $existing = $program->details()->get();
        $existingMap = [];

        foreach ($existing as $detail) {
            $key = $detail->day . '|' . $detail->exercise_name;
            $existingMap[$key] = $detail;
        }

        $incomingKeys = [];

        foreach ($days ?? [] as $dayData) {
            $day = $dayData['day'];
            foreach ($dayData['exercises'] ?? [] as $exercise) {
                // Lewati jika nama latihan kosong (baris kosong di form)
                if (empty($exercise['name'])) continue;
                $key = $day . '|' . $exercise['name'];
                $incomingKeys[] = $key;

                if (isset($existingMap[$key])) {
                    $existingMap[$key]->update([
                        'muscle_focus' => $exercise['muscle'],
                        'sets' => $exercise['sets'] ?? null,
                        'reps' => $exercise['reps'] ?? null,
                        'duration' => $exercise['duration'] ?? null,
                    ]);
                } else {
                    ProgramDetail::create([
                        'program_id' => $program->id,
                        'day' => $day,
                        'exercise_name' => $exercise['name'],
                        'muscle_focus' => $exercise['muscle'],
                        'sets' => $exercise['sets'] ?? null,
                        'reps' => $exercise['reps'] ?? null,
                        'duration' => $exercise['duration'] ?? null,
                    ]);
                }
            }
        }

        foreach ($existing as $detail) {
            $key = $detail->day . '|' . $detail->exercise_name;
            if (!in_array($key, $incomingKeys)) {
                $detail->delete();
            }
        }
    }

    private function calculateProgramDuration(Program $program)
    {
        $durasiPerGerakan = [
            'weight_loss' => 5.5,
            'muscle_gain' => 6,
            'strength'    => 7,
        ];

        $grouped = $program->details->groupBy('day');
        $totalDurasi = $program->details->sum(function ($detail) use ($durasiPerGerakan, $program) {
            return $detail->duration ?? ($durasiPerGerakan[$program->goal] ?? 5);
        });

        $jumlahHari = $grouped->count() ?: 1;
        $avgPerHari = $totalDurasi / $jumlahHari;

        $program->duration = round($avgPerHari, 1);
        $program->save();
    }
}