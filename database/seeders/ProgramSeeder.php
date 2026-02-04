<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        Program::insert([
            // 🟦 WEIGHT LOSS (12)
            ['name' => 'BurnLite 3',          'goal' => 'weight_loss', 'frequency' => 3, 'duration' => null, 'experience_level' => 'pemula',   'description' => 'HIIT ringan + beban tubuh'],
            ['name' => 'Slim & Tone 3',       'goal' => 'weight_loss', 'frequency' => 3, 'duration' => null, 'experience_level' => 'pemula',   'description' => 'Treadmill + core + squat ringan'],
            ['name' => 'Fat Burn Express',    'goal' => 'weight_loss', 'frequency' => 3, 'duration' => null, 'experience_level' => 'menengah', 'description' => 'Intens cardio + bodyweight mix'],
            ['name' => 'Cutting Kickoff 4',   'goal' => 'weight_loss', 'frequency' => 4, 'duration' => null, 'experience_level' => 'menengah', 'description' => 'HIIT intens + dumbbell ringan'],
            ['name' => 'Lean Build 4',        'goal' => 'weight_loss', 'frequency' => 4, 'duration' => null, 'experience_level' => 'menengah', 'description' => 'Circuit cardio + full body beban'],
            ['name' => 'Tactical Lean 4',     'goal' => 'weight_loss', 'frequency' => 4, 'duration' => null, 'experience_level' => 'lanjutan', 'description' => 'Sprint + interval + resistance'],
            ['name' => 'Lean Fit Starter',    'goal' => 'weight_loss', 'frequency' => 4, 'duration' => null, 'experience_level' => 'pemula',   'description' => 'Cardio ringan + beban ringan'],
            ['name' => 'Slim Starter 4',      'goal' => 'weight_loss', 'frequency' => 4, 'duration' => null, 'experience_level' => 'pemula',   'description' => 'Bodyweight circuit + low impact cardio'],
            ['name' => 'Shred Burn 5',        'goal' => 'weight_loss', 'frequency' => 5, 'duration' => null, 'experience_level' => 'lanjutan', 'description' => 'Cardio interval + resistance mix'],
            ['name' => 'Metabolic Max 5',     'goal' => 'weight_loss', 'frequency' => 5, 'duration' => null, 'experience_level' => 'lanjutan', 'description' => 'HIIT + sprint + dumbbell fusion'],
            ['name' => 'Burn Circuit 5',      'goal' => 'weight_loss', 'frequency' => 5, 'duration' => null, 'experience_level' => 'pemula',   'description' => 'Tabata + beban tubuh + core'],

            // 🟥 MUSCLE GAIN (10)
            ['name' => 'Mass Builder 3',         'goal' => 'muscle_gain', 'frequency' => 3, 'duration' => null, 'experience_level' => 'pemula',   'description' => 'Full body dumbbell hypertrophy'],
            ['name' => 'Hypertrophy Plan B',     'goal' => 'muscle_gain', 'frequency' => 3, 'duration' => null, 'experience_level' => 'pemula',   'description' => 'Push pull legs pemula'],
            ['name' => 'Build Phase 3',          'goal' => 'muscle_gain', 'frequency' => 3, 'duration' => null, 'experience_level' => 'menengah', 'description' => 'Compound + isolation strategy'],
            ['name' => 'Advanced Bulk 3',        'goal' => 'muscle_gain', 'frequency' => 3, 'duration' => null, 'experience_level' => 'lanjutan', 'description' => 'Split + volume optimisasi'],
            ['name' => 'Muscle Gain A',          'goal' => 'muscle_gain', 'frequency' => 4, 'duration' => null, 'experience_level' => 'menengah', 'description' => 'Upper/lower volume 4 hari'],
            ['name' => 'Size Up Plan B',         'goal' => 'muscle_gain', 'frequency' => 4, 'duration' => null, 'experience_level' => 'menengah', 'description' => 'Split bench, squat, pull-up'],
            ['name' => 'Growth Starter 4',       'goal' => 'muscle_gain', 'frequency' => 4, 'duration' => null, 'experience_level' => 'pemula',   'description' => 'Hypertrophy upper-lower split'],
            ['name' => 'Muscle Elite 4',         'goal' => 'muscle_gain', 'frequency' => 4, 'duration' => null, 'experience_level' => 'lanjutan', 'description' => 'Intensity + power builder'],
            ['name' => 'Advanced Hypertrophy A', 'goal' => 'muscle_gain', 'frequency' => 5, 'duration' => null, 'experience_level' => 'lanjutan', 'description' => 'Push/pull/legs + isolation'],
            ['name' => 'Muscle Max B',           'goal' => 'muscle_gain', 'frequency' => 5, 'duration' => null, 'experience_level' => 'lanjutan', 'description' => 'Upper/lower + intensity builder'],

            // 🟩 STRENGTH (11)
            ['name' => 'Strength Base A',         'goal' => 'strength', 'frequency' => 3, 'duration' => null, 'experience_level' => 'pemula',   'description' => 'Squat, Press, Row pemula'],
            ['name' => 'Foundational Strength B', 'goal' => 'strength', 'frequency' => 3, 'duration' => null, 'experience_level' => 'pemula',   'description' => 'Compound basics: SBD'],
            ['name' => 'Base Strength 3',         'goal' => 'strength', 'frequency' => 3, 'duration' => null, 'experience_level' => 'menengah', 'description' => 'Progressive overload compound'],
            ['name' => 'Strength Advanced 3',     'goal' => 'strength', 'frequency' => 3, 'duration' => null, 'experience_level' => 'lanjutan', 'description' => 'Heavy low-rep SBD focus'],
            ['name' => 'Strength Lite 4',         'goal' => 'strength', 'frequency' => 4, 'duration' => null, 'experience_level' => 'pemula',   'description' => 'Beginner SBD volume'],
            ['name' => 'Form Builder 5',          'goal' => 'strength', 'frequency' => 5, 'duration' => null, 'experience_level' => 'pemula',   'description' => 'Basic compound builder'],
            ['name' => 'Power Routine A',         'goal' => 'strength', 'frequency' => 4, 'duration' => null, 'experience_level' => 'menengah', 'description' => 'Heavy barbell + press'],
            ['name' => 'Strength Builder B',      'goal' => 'strength', 'frequency' => 4, 'duration' => null, 'experience_level' => 'menengah', 'description' => 'Squat deadlift focus + support'],
            ['name' => 'PowerMax 4',              'goal' => 'strength', 'frequency' => 4, 'duration' => null, 'experience_level' => 'lanjutan', 'description' => 'Powerlifting + assistance'],
            ['name' => 'Elite Strength A',        'goal' => 'strength', 'frequency' => 5, 'duration' => null, 'experience_level' => 'lanjutan', 'description' => 'Powerlifting + volume'],
            ['name' => 'Max Force B',             'goal' => 'strength', 'frequency' => 5, 'duration' => null, 'experience_level' => 'lanjutan', 'description' => 'Olympic lift + core + force'],
        ]);
    }
}