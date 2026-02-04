<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;
use App\Models\ProgramDetail;

class ProgramDetailSeeder extends Seeder
{
    public function run(): void
    {
        $programs = [
             // ✅ 1–12: WEIGHT LOSS (semua 6 latihan/hari)
'BurnLite 3' => [
    'goal' => 'weight_loss',
    'sets' => null, 'reps' => null,
    'days' => [
        'Senin' => [
            ['HIIT Run', 'cardio'],
            ['Dumbbell Squat', 'legs'],
            ['Dumbbell Row', 'back'],
            ['Plank', 'core'],
            ['Wall Push-up', 'upper_body'],
            ['Calf Raise', 'legs'],
        ],
        'Rabu' => [
            ['Treadmill', 'cardio'],
            ['Push-up', 'upper_body'],
            ['Lunges', 'legs'],
            ['Russian Twist', 'core'],
            ['Superman', 'back'],
            ['Crunches', 'core'],
        ],
        'Jumat' => [
            ['Elliptical', 'cardio'],
            ['Kettlebell Swing', 'glutes'],
            ['Step-up', 'legs'],
            ['Sit-up', 'core'],
            ['Front Raise', 'shoulders'],
            ['Side Plank', 'core'],
        ],
    ]
],
'Slim & Tone 3' => [
    'goal' => 'weight_loss',
    'sets' => null, 'reps' => null,
    'days' => [
        'Senin' => [
            ['Treadmill', 'cardio'],
            ['Bodyweight Squat', 'legs'],
            ['Inverted Row', 'back'],
            ['Sit-up', 'core'],
            ['Wall Push-up', 'upper_body'],
            ['Standing Calf Raise', 'legs'],
        ],
        'Rabu' => [
            ['Bike', 'cardio'],
            ['Chair Dip', 'triceps'],
            ['Step-up', 'legs'],
            ['Plank', 'core'],
            ['Biceps Curl', 'arms'],
            ['Side Plank', 'core'],
        ],
        'Jumat' => [
            ['Jump Rope', 'cardio'],
            ['Glute Bridge', 'glutes'],
            ['Push-up', 'upper_body'],
            ['Bicycle Crunch', 'core'],
            ['Front Raise', 'shoulders'],
            ['Leg Raise', 'core'],
        ],
    ]
],
'Cutting Kickoff 4' => [
    'goal' => 'weight_loss',
    'sets' => null, 'reps' => null,
    'days' => [
        'Senin' => [
            ['HIIT Circuit', 'full_body'],
            ['Goblet Squat', 'legs'],
            ['Renegade Row', 'back'],
            ['V-up', 'core'],
            ['Dumbbell Curl', 'arms'],
            ['Side Plank', 'core'],
        ],
        'Selasa' => [
            ['Treadmill', 'cardio'],
            ['Dumbbell Lunge', 'legs'],
            ['Banded Row', 'back'],
            ['Side Plank', 'core'],
            ['Push-up', 'upper_body'],
            ['Mountain Climbers', 'core'],
        ],
        'Kamis' => [
            ['Tabata Bike', 'cardio'],
            ['Push-up', 'upper_body'],
            ['Kettlebell Swing', 'glutes'],
            ['Jump Squat', 'legs'],
            ['Shoulder Press', 'shoulders'],
            ['Crunches', 'core'],
        ],
        'Jumat' => [
            ['Jump Rope', 'cardio'],
            ['DB Shoulder Press', 'shoulders'],
            ['Deadlift (light)', 'back'],
            ['Russian Twist', 'core'],
            ['Chest Fly', 'chest'],
            ['Triceps Dip', 'triceps'],
        ],
    ]
],
'Lean Build 4' => [
    'goal' => 'weight_loss',
    'sets' => null, 'reps' => null,
    'days' => [
        'Senin' => [
            ['HIIT Run', 'cardio'],
            ['Bench Press (light)', 'chest'],
            ['Cable Row', 'back'],
            ['Plank', 'core'],
            ['Dumbbell Curl', 'arms'],
            ['Step-up', 'legs'],
        ],
        'Selasa' => [
            ['Bike', 'cardio'],
            ['Front Squat', 'legs'],
            ['Push-up', 'upper_body'],
            ['Sit-up', 'core'],
            ['Lateral Raise', 'shoulders'],
            ['Glute Bridge', 'glutes'],
        ],
        'Kamis' => [
            ['Jumping Circuit', 'full_body'],
            ['Dumbbell Deadlift', 'back'],
            ['Air Squat', 'legs'],
            ['Side Plank', 'core'],
            ['Hammer Curl', 'biceps'],
            ['Chest Fly', 'chest'],
        ],
        'Jumat' => [
            ['Elliptical', 'cardio'],
            ['DB Shoulder Press', 'shoulders'],
            ['Glute Bridge', 'glutes'],
            ['V-up', 'core'],
            ['Triceps Kickback', 'triceps'],
            ['Bicycle Crunch', 'core'],
        ],
    ]
],
'Shred Burn 5' => [
    'goal' => 'weight_loss',
    'sets' => null, 'reps' => null,
    'days' => [
        'Senin' => [
            ['Jump Rope', 'cardio'],
            ['Air Squat', 'legs'],
            ['Push-up', 'upper_body'],
            ['Crunches', 'core'],
            ['Step-up', 'legs'],
            ['Wall Sit', 'legs'],
        ],
        'Selasa' => [
            ['Treadmill', 'cardio'],
            ['Kettlebell Swing', 'glutes'],
            ['Renegade Row', 'back'],
            ['Plank', 'core'],
            ['Overhead Press', 'shoulders'],
            ['Calf Raise', 'legs'],
        ],
        'Rabu' => [
            ['Jumping Jacks', 'cardio'],
            ['Step-up', 'legs'],
            ['Push-up', 'upper_body'],
            ['Side Plank', 'core'],
            ['Russian Twist', 'core'],
            ['Biceps Curl', 'arms'],
        ],
        'Kamis' => [
            ['Elliptical', 'cardio'],
            ['Dumbbell Lunge', 'legs'],
            ['Lat Pulldown (light)', 'back'],
            ['Crunches', 'core'],
            ['Triceps Dip', 'triceps'],
            ['Front Raise', 'shoulders'],
        ],
        'Jumat' => [
            ['Burpees', 'full_body'],
            ['Chair Dip', 'triceps'],
            ['Mountain Climbers', 'core'],
            ['Bicycle Crunch', 'core'],
            ['Incline Push-up', 'chest'],
            ['DB Row', 'back'],
        ],
    ]
],
'Metabolic Max 5' => [
    'goal' => 'weight_loss',
    'sets' => null, 'reps' => null,
    'days' => [
        'Senin' => [
            ['HIIT Sprint', 'cardio'],
            ['Air Squat', 'legs'],
            ['Deadlift (light)', 'back'],
            ['Plank', 'core'],
            ['Push-up', 'upper_body'],
            ['Jumping Jack', 'cardio'],
        ],
        'Selasa' => [
            ['Bike Sprint', 'cardio'],
            ['Push-up', 'upper_body'],
            ['Kettlebell Swing', 'glutes'],
            ['Crunches', 'core'],
            ['Biceps Curl', 'arms'],
            ['Lunge Jump', 'legs'],
        ],
        'Rabu' => [
            ['Burpees', 'full_body'],
            ['Step-up', 'legs'],
            ['Renegade Row', 'back'],
            ['Side Plank', 'core'],
            ['Shoulder Press', 'shoulders'],
            ['Treadmill Walk', 'cardio'],
        ],
        'Kamis' => [
            ['Treadmill Incline', 'cardio'],
            ['DB Shoulder Press', 'shoulders'],
            ['Glute Bridge', 'glutes'],
            ['Sit-up', 'core'],
            ['Wall Push-up', 'upper_body'],
            ['Leg Raise', 'core'],
        ],
        'Jumat' => [
            ['Jump Rope', 'cardio'],
            ['Front Squat', 'legs'],
            ['Push-up', 'upper_body'],
            ['Bicycle Crunch', 'core'],
            ['Chest Fly', 'chest'],
            ['Side Plank', 'core'],
        ],
    ]
],
'Fat Burn Express' => [
    'goal' => 'weight_loss',
    'sets' => null, 'reps' => null,
    'days' => [
        'Senin' => [
            ['HIIT Circuit', 'full_body'],
            ['Air Squat', 'legs'],
            ['Push-up', 'upper_body'],
            ['Crunches', 'core'],
            ['Renegade Row', 'back'],
            ['Plank', 'core'],
        ],
        'Rabu' => [
            ['Jump Rope', 'cardio'],
            ['Step-up', 'legs'],
            ['Push-up', 'upper_body'],
            ['Side Plank', 'core'],
            ['Mountain Climbers', 'core'],
            ['Dumbbell Curl', 'arms'],
        ],
        'Jumat' => [
            ['Burpees', 'full_body'],
            ['Treadmill', 'cardio'],
            ['Glute Bridge', 'glutes'],
            ['Sit-up', 'core'],
            ['Kettlebell Swing', 'glutes'],
            ['Front Raise', 'shoulders'],
        ],
    ]
],
'Tactical Lean 4' => [
    'goal' => 'weight_loss',
    'sets' => null, 'reps' => null,
    'days' => [
        'Senin' => [
            ['Sprint Intervals', 'cardio'],
            ['Goblet Squat', 'legs'],
            ['Push-up', 'upper_body'],
            ['Side Plank', 'core'],
            ['Kettlebell Swing', 'glutes'],
            ['Dumbbell Row', 'back'],
        ],
        'Selasa' => [
            ['Bike Sprints', 'cardio'],
            ['Step-up', 'legs'],
            ['Renegade Row', 'back'],
            ['Crunches', 'core'],
            ['Push Press', 'shoulders'],
            ['Lunge', 'legs'],
        ],
        'Kamis' => [
            ['HIIT Ladder', 'full_body'],
            ['Front Squat', 'legs'],
            ['Push-up', 'upper_body'],
            ['Mountain Climbers', 'core'],
            ['Chest Fly', 'chest'],
            ['Triceps Dip', 'triceps'],
        ],
        'Jumat' => [
            ['Jump Rope', 'cardio'],
            ['DB Shoulder Press', 'shoulders'],
            ['Deadlift (light)', 'back'],
            ['V-up', 'core'],
            ['Biceps Curl', 'arms'],
            ['Glute Bridge', 'glutes'],
        ],
    ]
],
'Lean Fit Starter' => [
    'goal' => 'weight_loss',
    'sets' => null, 'reps' => null,
    'days' => [
        'Senin' => [
            ['Walk Treadmill', 'cardio'],
            ['Bodyweight Squat', 'legs'],
            ['Push-up (knee)', 'upper_body'],
            ['Crunches', 'core'],
            ['Front Raise', 'shoulders'],
            ['Step-up', 'legs'],
        ],
        'Selasa' => [
            ['Bike (easy)', 'cardio'],
            ['Glute Bridge', 'glutes'],
            ['Banded Row', 'back'],
            ['Plank', 'core'],
            ['Wall Push-up', 'upper_body'],
            ['Leg Raise', 'core'],
        ],
        'Kamis' => [
            ['Jumping Jacks', 'cardio'],
            ['Lunge (bodyweight)', 'legs'],
            ['Chair Dip', 'triceps'],
            ['Side Plank', 'core'],
            ['Biceps Curl', 'arms'],
            ['Crunches', 'core'],
        ],
        'Jumat' => [
            ['Elliptical', 'cardio'],
            ['Step-up', 'legs'],
            ['Push-up', 'upper_body'],
            ['Sit-up', 'core'],
            ['Lateral Raise', 'shoulders'],
            ['Glute Bridge', 'glutes'],
        ],
    ]
],
'Slim Starter 4' => [
    'goal' => 'weight_loss',
    'sets' => null, 'reps' => null,
    'days' => [
        'Senin' => [
            ['March in Place', 'cardio'],
            ['Bodyweight Squat', 'legs'],
            ['Wall Push-up', 'upper_body'],
            ['Crunches', 'core'],
            ['Step-up', 'legs'],
            ['Front Raise', 'shoulders'],
        ],
        'Selasa' => [
            ['Bike (easy)', 'cardio'],
            ['Chair Dip', 'triceps'],
            ['Side Plank', 'core'],
            ['Glute Bridge', 'glutes'],
            ['Banded Row', 'back'],
            ['Leg Raise', 'core'],
        ],
        'Kamis' => [
            ['Walk Treadmill', 'cardio'],
            ['Push-up (knee)', 'upper_body'],
            ['Step-up', 'legs'],
            ['Plank', 'core'],
            ['Biceps Curl', 'arms'],
            ['Crunches', 'core'],
        ],
        'Jumat' => [
            ['Jumping Jacks', 'cardio'],
            ['Bodyweight Lunge', 'legs'],
            ['Wall Sit', 'legs'],
            ['Sit-up', 'core'],
            ['Lateral Raise', 'shoulders'],
            ['Calf Raise', 'legs'],
        ],
    ]
],

'Burn Circuit 5' => [
    'goal' => 'weight_loss',
    'sets' => null, 'reps' => null,
    'days' => [
        'Senin' => [
            ['Tabata Circuit', 'full_body'],
            ['Air Squat', 'legs'],
            ['Push-up', 'upper_body'],
            ['Plank', 'core'],
            ['Jumping Jack', 'cardio'],
            ['Front Raise', 'shoulders'],
        ],
        'Selasa' => [
            ['Bike (interval)', 'cardio'],
            ['Step-up', 'legs'],
            ['Renegade Row', 'back'],
            ['Crunches', 'core'],
            ['Chair Dip', 'triceps'],
            ['Lateral Raise', 'shoulders'],
        ],
        'Rabu' => [
            ['HIIT Light', 'full_body'],
            ['Bodyweight Lunge', 'legs'],
            ['Wall Push-up', 'upper_body'],
            ['Sit-up', 'core'],
            ['Biceps Curl', 'arms'],
            ['Glute Bridge', 'glutes'],
        ],
        'Kamis' => [
            ['Jump Rope', 'cardio'],
            ['Kettlebell Swing', 'glutes'],
            ['Push-up', 'upper_body'],
            ['Mountain Climbers', 'core'],
            ['Dumbbell Fly', 'chest'],
            ['Triceps Kickback', 'triceps'],
        ],
        'Jumat' => [
            ['Sprint in Place', 'cardio'],
            ['Step-up', 'legs'],
            ['Cable Row', 'back'],
            ['Russian Twist', 'core'],
            ['Overhead Press', 'shoulders'],
            ['Leg Raise', 'core'],
        ],
    ]
],

                           // ✅ 13–23: MUSCLE GAIN
'Mass Builder 3' => [
    'goal' => 'muscle_gain',
    'sets' => '3–4', 'reps' => '10–12',
    'days' => [
        'Senin' => [
            ['Barbell Bench Press', 'chest'],
            ['Dumbbell Row', 'back'],
            ['Leg Press', 'legs'],
            ['Plank', 'core'],
            ['Overhead Press', 'shoulders'],
            ['Triceps Pushdown', 'triceps'],
        ],
        'Rabu' => [
            ['Incline DB Press', 'chest'],
            ['Lat Pulldown', 'back'],
            ['Goblet Squat', 'legs'],
            ['Crunches', 'core'],
            ['Side Lateral Raise', 'shoulders'],
            ['Triceps Dip', 'triceps'],
        ],
        'Jumat' => [
            ['Leg Curl', 'hamstrings'],
            ['Lateral Raise', 'shoulders'],
            ['Cable Chest Fly', 'chest'],
            ['Sit-up', 'core'],
            ['Dumbbell Curl', 'biceps'],
            ['Barbell Shrug', 'traps'],
        ],
    ]
],
'Hypertrophy Plan B' => [
    'goal' => 'muscle_gain',
    'sets' => '3–4', 'reps' => '10–12',
    'days' => [
        'Senin' => [
            ['Push-up', 'chest'],
            ['Dumbbell Shoulder Press', 'shoulders'],
            ['Squat', 'legs'],
            ['Plank', 'core'],
            ['Cable Fly', 'chest'],
            ['Calf Raise', 'calves'],
        ],
        'Rabu' => [
            ['Barbell Curl', 'biceps'],
            ['Triceps Pushdown', 'triceps'],
            ['Leg Extension', 'quads'],
            ['Crunches', 'core'],
            ['Lunges', 'legs'],
            ['Hammer Curl', 'biceps'],
        ],
        'Jumat' => [
            ['Romanian Deadlift', 'hamstrings'],
            ['Cable Row', 'back'],
            ['Overhead DB Triceps', 'triceps'],
            ['Side Plank', 'core'],
            ['Incline Press', 'chest'],
            ['Face Pull', 'shoulders'],
        ],
    ]
],
'Muscle Gain A' => [
    'goal' => 'muscle_gain',
    'sets' => '3–4', 'reps' => '10–12',
    'days' => [
        'Senin' => [
            ['Bench Press', 'chest'],
            ['Triceps Dip', 'triceps'],
            ['Lateral Raise', 'shoulders'],
            ['Plank', 'core'],
            ['Chest Fly', 'chest'],
            ['Calf Raise', 'calves'],
        ],
        'Selasa' => [
            ['Deadlift', 'back'],
            ['Barbell Curl', 'biceps'],
            ['Leg Curl', 'hamstrings'],
            ['Crunches', 'core'],
            ['T-Bar Row', 'back'],
            ['Preacher Curl', 'biceps'],
        ],
        'Kamis' => [
            ['Squat', 'legs'],
            ['Glute Bridge', 'glutes'],
            ['Calf Raise', 'calves'],
            ['Sit-up', 'core'],
            ['Step-up', 'legs'],
            ['Romanian Deadlift', 'hamstrings'],
        ],
        'Jumat' => [
            ['Military Press', 'shoulders'],
            ['Pull-up', 'back'],
            ['Triceps Extension', 'triceps'],
            ['Side Plank', 'core'],
            ['Cable Lateral Raise', 'shoulders'],
            ['Incline DB Press', 'chest'],
        ],
    ]
],
'Size Up Plan B' => [
    'goal' => 'muscle_gain',
    'sets' => '3–4', 'reps' => '10–12',
    'days' => [
        'Senin' => [
            ['Barbell Squat', 'legs'],
            ['Dumbbell Lunge', 'legs'],
            ['Step-up', 'legs'],
            ['Plank', 'core'],
            ['Glute Bridge', 'glutes'],
        ],
        'Selasa' => [
            ['Incline Press', 'chest'],
            ['Cable Fly', 'chest'],
            ['Triceps Pushdown', 'triceps'],
            ['Plank', 'core'],
            ['Overhead Press', 'shoulders'],
            ['Hammer Curl', 'biceps'],
        ],
        'Kamis' => [
            ['Bent Over Row', 'back'],
            ['Hammer Curl', 'biceps'],
            ['Shrug', 'traps'],
            ['Crunches', 'core'],
            ['Chest Fly', 'chest'],
            ['DB Pullover', 'back'],
        ],
        'Jumat' => [
            ['Overhead Press', 'shoulders'],
            ['Lateral Raise', 'shoulders'],
            ['Side Plank', 'core'],
            ['Front Raise', 'shoulders'],
            ['Incline DB Curl', 'biceps'],
            ['Triceps Dip', 'triceps'],
        ],
    ]
],
'Advanced Hypertrophy A' => [
    'goal' => 'muscle_gain',
    'sets' => '3–4', 'reps' => '8–12',
    'days' => [
        'Senin' => [
            ['Bench Press', 'chest'],
            ['Incline DB Press', 'chest'],
            ['Cable Fly', 'chest'],
            ['Crunches', 'core'],
            ['Push-up', 'chest'],
            ['Chest Dip', 'chest'],
        ],
        'Selasa' => [
            ['Deadlift', 'back'],
            ['Barbell Row', 'back'],
            ['Lat Pulldown', 'back'],
            ['Plank', 'core'],
            ['Pull-up', 'back'],
            ['T-Bar Row', 'back'],
        ],
        'Kamis' => [
            ['Squat', 'legs'],
            ['Leg Press', 'legs'],
            ['Calf Raise', 'calves'],
            ['Sit-up', 'core'],
            ['Lunges', 'legs'],
            ['Glute Bridge', 'glutes'],
        ],
        'Jumat' => [
            ['Overhead Press', 'shoulders'],
            ['Lateral Raise', 'shoulders'],
            ['Triceps Pushdown', 'triceps'],
            ['Side Plank', 'core'],
            ['Front Raise', 'shoulders'],
            ['Cable Lateral Raise', 'shoulders'],
        ],
        'Sabtu' => [
            ['Barbell Curl', 'biceps'],
            ['Hammer Curl', 'biceps'],
            ['Rear Delt Fly', 'shoulders'],
            ['Crunches', 'core'],
            ['Incline Curl', 'biceps'],
            ['Triceps Kickback', 'triceps'],
        ],
    ]
],
'Muscle Max B' => [
    'goal' => 'muscle_gain',
    'sets' => '3–4', 'reps' => '8–12',
    'days' => [
        'Senin' => [
            ['Barbell Squat', 'legs'],
            ['Leg Curl', 'hamstrings'],
            ['Calf Raise', 'calves'],
            ['Crunches', 'core'],
            ['Lunge', 'legs'],
            ['Glute Bridge', 'glutes'],
        ],
        'Selasa' => [
            ['Bench Press', 'chest'],
            ['Dumbbell Fly', 'chest'],
            ['Overhead Triceps Ext', 'triceps'],
            ['Plank', 'core'],
            ['Incline Press', 'chest'],
            ['Dips', 'triceps'],
        ],
        'Kamis' => [
            ['Pull-up', 'back'],
            ['Barbell Row', 'back'],
            ['Face Pull', 'shoulders'],
            ['Sit-up', 'core'],
            ['Lat Pulldown', 'back'],
            ['Cable Row', 'back'],
        ],
        'Jumat' => [
            ['Overhead Press', 'shoulders'],
            ['Lateral Raise', 'shoulders'],
            ['Hammer Curl', 'biceps'],
            ['Side Plank', 'core'],
            ['Concentration Curl', 'biceps'],
            ['Reverse Curl', 'biceps'],
        ],
        'Sabtu' => [
            ['Deadlift', 'back'],
            ['Good Morning', 'hamstrings'],
            ['Farmer’s Walk', 'grip'],
            ['Crunches', 'core'],
            ['Step-up', 'legs'],
            ['Chest Fly', 'chest'],
        ],
    ]
],
'Build Phase 3' => [
    'goal' => 'muscle_gain',
    'sets' => '3–4', 'reps' => '10–12',
    'days' => [
        'Senin' => [
            ['Bench Press', 'chest'],
            ['Incline DB Press', 'chest'],
            ['Triceps Pushdown', 'triceps'],
            ['Crunches', 'core'],
            ['Overhead Press', 'shoulders'],
            ['Calf Raise', 'calves'],
        ],
        'Rabu' => [
            ['Deadlift', 'back'],
            ['Barbell Row', 'back'],
            ['Hammer Curl', 'biceps'],
            ['Sit-up', 'core'],
            ['Pull-up', 'back'],
            ['Face Pull', 'shoulders'],
        ],
        'Jumat' => [
            ['Squat', 'legs'],
            ['Leg Press', 'legs'],
            ['Glute Bridge', 'glutes'],
            ['Side Plank', 'core'],
            ['Step-up', 'legs'],
            ['Lunge', 'legs'],
        ],
    ]
],
'Advanced Bulk 3' => [
    'goal' => 'muscle_gain',
    'sets' => '3–5', 'reps' => '8–12',
    'days' => [
        'Senin' => [
            ['Incline Press', 'chest'],
            ['Cable Fly', 'chest'],
            ['Triceps Dip', 'triceps'],
            ['Crunches', 'core'],
            ['Front Raise', 'shoulders'],
            ['Chest Dip', 'chest'],
        ],
        'Rabu' => [
            ['Barbell Row', 'back'],
            ['Lat Pulldown', 'back'],
            ['Hammer Curl', 'biceps'],
            ['Side Plank', 'core'],
            ['Shrug', 'traps'],
            ['T-Bar Row', 'back'],
        ],
        'Jumat' => [
            ['Barbell Squat', 'legs'],
            ['Leg Curl', 'hamstrings'],
            ['Calf Raise', 'calves'],
            ['Sit-up', 'core'],
            ['Dumbbell Lunge', 'legs'],
            ['Step-up', 'legs'],
        ],
    ]
],
'Growth Starter 4' => [
    'goal' => 'muscle_gain',
    'sets' => '3–4', 'reps' => '10–12',
    'days' => [
        'Senin' => [
            ['Push-up', 'chest'],
            ['Chest Fly', 'chest'],
            ['Triceps Kickback', 'triceps'],
            ['Crunches', 'core'],
            ['Lateral Raise', 'shoulders'],
            ['Plank', 'core'],
        ],
        'Selasa' => [
            ['Deadlift', 'back'],
            ['Renegade Row', 'back'],
            ['Biceps Curl', 'biceps'],
            ['Sit-up', 'core'],
            ['Face Pull', 'shoulders'],
            ['Glute Bridge', 'glutes'],
        ],
        'Kamis' => [
            ['Squat', 'legs'],
            ['Lunge', 'legs'],
            ['Calf Raise', 'calves'],
            ['Side Plank', 'core'],
            ['Step-up', 'legs'],
            ['Leg Press', 'legs'],
        ],
        'Jumat' => [
            ['Incline Press', 'chest'],
            ['Overhead Press', 'shoulders'],
            ['Barbell Curl', 'biceps'],
            ['Plank', 'core'],
            ['Hammer Curl', 'biceps'],
            ['Triceps Pushdown', 'triceps'],
        ],
    ]
],
'Muscle Elite 4' => [
    'goal' => 'muscle_gain',
    'sets' => '4–5', 'reps' => '8–12',
    'days' => [
        'Senin' => [
            ['Bench Press', 'chest'],
            ['Cable Fly', 'chest'],
            ['Overhead Triceps Ext', 'triceps'],
            ['Crunches', 'core'],
            ['Incline DB Press', 'chest'],
            ['Push-up', 'chest'],
        ],
        'Selasa' => [
            ['Barbell Row', 'back'],
            ['Deadlift', 'back'],
            ['Barbell Curl', 'biceps'],
            ['Plank', 'core'],
            ['T-Bar Row', 'back'],
            ['Hammer Curl', 'biceps'],
        ],
        'Kamis' => [
            ['Squat', 'legs'],
            ['Leg Press', 'legs'],
            ['Calf Raise', 'calves'],
            ['Side Plank', 'core'],
            ['Glute Bridge', 'glutes'],
            ['Lunge', 'legs'],
        ],
        'Jumat' => [
            ['Military Press', 'shoulders'],
            ['Front Raise', 'shoulders'],
            ['Face Pull', 'shoulders'],
            ['Sit-up', 'core'],
            ['Triceps Pushdown', 'triceps'],
            ['Incline Curl', 'biceps'],
        ],
    ]
],

                           // ✅ 24–33: STRENGTH (final version)
'Strength Base A' => [
    'goal' => 'strength',
    'sets' => '3–5', 'reps' => '5–8',
    'days' => [
        'Senin' => [
            ['Back Squat', 'legs'],
            ['Bench Press', 'chest'],
            ['Barbell Row', 'back'],
            ['Crunches', 'core'],
            ['Lunge', 'legs'],
            ['Triceps Dip', 'triceps'],
        ],
        'Rabu' => [
            ['Deadlift', 'back'],
            ['Overhead Press', 'shoulders'],
            ['Lunges', 'legs'],
            ['Plank', 'core'],
            ['Calf Raise', 'calves'],
            ['Side Plank', 'core'],
        ],
        'Jumat' => [
            ['Pull-up', 'back'],
            ['Front Squat', 'legs'],
            ['Romanian Deadlift', 'hamstrings'],
            ['Sit-up', 'core'],
            ['Incline Press', 'chest'],
            ['Barbell Curl', 'biceps'],
        ],
    ]
],
'Foundational Strength B' => [
    'goal' => 'strength',
    'sets' => '3–5', 'reps' => '5–8',
    'days' => [
        'Senin' => [
            ['Barbell Squat', 'legs'],
            ['Incline Press', 'chest'],
            ['Cable Row', 'back'],
            ['Plank', 'core'],
            ['Lateral Raise', 'shoulders'],
            ['Triceps Pushdown', 'triceps'],
        ],
        'Rabu' => [
            ['Deadlift', 'back'],
            ['Push Press', 'shoulders'],
            ['Step-up', 'legs'],
            ['Crunches', 'core'],
            ['Chest Dip', 'chest'],
            ['DB Curl', 'biceps'],
        ],
        'Jumat' => [
            ['Dumbbell Bench Press', 'chest'],
            ['Lat Pulldown', 'back'],
            ['Leg Press', 'legs'],
            ['Side Plank', 'core'],
            ['Kettlebell Swing', 'glutes'],
            ['Triceps Kickback', 'triceps'],
        ],
    ]
],
'Power Routine A' => [
    'goal' => 'strength',
    'sets' => '3–5', 'reps' => '3–6',
    'days' => [
        'Senin' => [
            ['Squat', 'legs'],
            ['Deadlift', 'back'],
            ['Plank', 'core'],
            ['Barbell Curl', 'biceps'],
            ['Incline Press', 'chest'],
            ['Calf Raise', 'calves'],
        ],
        'Rabu' => [
            ['Bench Press', 'chest'],
            ['Barbell Row', 'back'],
            ['Crunches', 'core'],
            ['Shrug', 'traps'],
            ['Step-up', 'legs'],
            ['Pull-up', 'back'],
        ],
        'Jumat' => [
            ['Push Press', 'shoulders'],
            ['Romanian Deadlift', 'hamstrings'],
            ['Side Plank', 'core'],
            ['Overhead Triceps Ext', 'triceps'],
            ['Lateral Raise', 'shoulders'],
            ['Good Morning', 'hamstrings'],
        ],
        'Sabtu' => [
            ['Front Squat', 'legs'],
            ['Incline Bench Press', 'chest'],
            ['Pull-up', 'back'],
            ['Face Pull', 'shoulders'],
            ['Sit-up', 'core'],
            ['Cable Row', 'back'],
        ],
    ]
],
'Strength Builder B' => [
    'goal' => 'strength',
    'sets' => '3–5', 'reps' => '3–6',
    'days' => [
        'Senin' => [
            ['Squat', 'legs'],
            ['Lunges', 'legs'],
            ['Plank', 'core'],
            ['Chest Press', 'chest'],
            ['Barbell Row', 'back'],
            ['Triceps Dip', 'triceps'],
        ],
        'Selasa' => [
            ['Deadlift', 'back'],
            ['Cable Row', 'back'],
            ['Sit-up', 'core'],
            ['Glute Bridge', 'glutes'],
            ['Push-up', 'upper_body'],
            ['Calf Raise', 'calves'],
        ],
        'Kamis' => [
            ['Bench Press', 'chest'],
            ['Incline DB Press', 'chest'],
            ['Side Plank', 'core'],
            ['Barbell Curl', 'biceps'],
            ['Step-up', 'legs'],
            ['Overhead Press', 'shoulders'],
        ],
        'Jumat' => [
            ['Military Press', 'shoulders'],
            ['Pull-up', 'back'],
            ['Crunches', 'core'],
            ['Romanian Deadlift', 'hamstrings'],
            ['Face Pull', 'shoulders'],
            ['Push Press', 'shoulders'],
        ],
    ]
],
'Elite Strength A' => [
    'goal' => 'strength',
    'sets' => '3–5', 'reps' => '3–5',
    'days' => [
        'Senin' => [
            ['Back Squat', 'legs'],
            ['Deadlift', 'back'],
            ['Good Morning', 'hamstrings'],
            ['Plank', 'core'],
            ['Step-up', 'legs'],
            ['Triceps Pushdown', 'triceps'],
        ],
        'Rabu' => [
            ['Bench Press', 'chest'],
            ['Overhead Press', 'shoulders'],
            ['Plank', 'core'],
            ['Incline Curl', 'biceps'],
            ['Lateral Raise', 'shoulders'],
            ['Pull-up', 'back'],
        ],
        'Jumat' => [
            ['Romanian Deadlift', 'hamstrings'],
            ['Barbell Row', 'back'],
            ['Side Plank', 'core'],
            ['Barbell Curl', 'biceps'],
            ['Chest Dip', 'chest'],
            ['Kettlebell Swing', 'glutes'],
        ],
        'Sabtu' => [
            ['Front Squat', 'legs'],
            ['Incline Bench Press', 'chest'],
            ['Lat Pulldown', 'back'],
            ['Crunches', 'core'],
            ['Step-up', 'legs'],
            ['Overhead Triceps Ext', 'triceps'],
        ],
    ]
],
'Max Force B' => [
    'goal' => 'strength',
    'sets' => '3–5', 'reps' => '3–5',
    'days' => [
        'Senin' => [
            ['Power Clean', 'full_body'],
            ['Deadlift', 'back'],
            ['Plank', 'core'],
            ['Push-up', 'upper_body'],
            ['Pull-up', 'back'],
            ['Barbell Shrug', 'traps'],
        ],
        'Selasa' => [
            ['Clean and Jerk', 'full_body'],
            ['Push Press', 'shoulders'],
            ['Crunches', 'core'],
            ['Barbell Row', 'back'],
            ['Dumbbell Curl', 'biceps'],
            ['Calf Raise', 'calves'],
        ],
        'Kamis' => [
            ['Squat', 'legs'],
            ['Lunges', 'legs'],
            ['Side Plank', 'core'],
            ['Overhead Press', 'shoulders'],
            ['Romanian Deadlift', 'hamstrings'],
            ['Incline Press', 'chest'],
        ],
        'Jumat' => [
            ['Incline Bench Press', 'chest'],
            ['Barbell Row', 'back'],
            ['Sit-up', 'core'],
            ['Step-up', 'legs'],
            ['Push-up', 'upper_body'],
            ['Good Morning', 'hamstrings'],
        ],
    ]
],
'Base Strength 3' => [
    'goal' => 'strength',
    'sets' => '3–5', 'reps' => '5–8',
    'days' => [
        'Senin' => [
            ['Back Squat', 'legs'],
            ['Bench Press', 'chest'],
            ['Crunches', 'core'],
            ['Overhead Press', 'shoulders'],
            ['Calf Raise', 'calves'],
            ['Chest Fly', 'chest'],
        ],
        'Rabu' => [
            ['Deadlift', 'back'],
            ['Barbell Row', 'back'],
            ['Side Plank', 'core'],
            ['Step-up', 'legs'],
            ['Pull-up', 'back'],
            ['Romanian Deadlift', 'hamstrings'],
        ],
        'Jumat' => [
            ['Front Squat', 'legs'],
            ['Incline Press', 'chest'],
            ['Plank', 'core'],
            ['Triceps Dip', 'triceps'],
            ['Lat Pulldown', 'back'],
            ['Barbell Curl', 'biceps'],
        ],
    ]
],
'Strength Advanced 3' => [
    'goal' => 'strength',
    'sets' => '4–5', 'reps' => '3–6',
    'days' => [
        'Senin' => [
            ['Squat', 'legs'],
            ['Deadlift', 'back'],
            ['Good Morning', 'hamstrings'],
            ['Plank', 'core'],
            ['Step-up', 'legs'],
            ['Barbell Curl', 'biceps'],
        ],
        'Rabu' => [
            ['Bench Press', 'chest'],
            ['Incline Press', 'chest'],
            ['Overhead Press', 'shoulders'],
            ['Crunches', 'core'],
            ['Lat Pulldown', 'back'],
            ['Lateral Raise', 'shoulders'],
        ],
        'Jumat' => [
            ['Romanian Deadlift', 'hamstrings'],
            ['Barbell Row', 'back'],
            ['Side Plank', 'core'],
            ['Triceps Pushdown', 'triceps'],
            ['Pull-up', 'back'],
            ['Shrug', 'traps'],
        ],
    ]
],
'Strength Lite 4' => [
    'goal' => 'strength',
    'sets' => '3–5', 'reps' => '6–10',
    'days' => [
        'Senin' => [
            ['Squat', 'legs'],
            ['Lunge', 'legs'],
            ['Plank', 'core'],
            ['Chest Press', 'chest'],
            ['Lat Pulldown', 'back'],
            ['Barbell Curl', 'biceps'],
        ],
        'Selasa' => [
            ['Deadlift', 'back'],
            ['Cable Row', 'back'],
            ['Crunches', 'core'],
            ['Push-up', 'upper_body'],
            ['Step-up', 'legs'],
            ['Triceps Dip', 'triceps'],
        ],
        'Kamis' => [
            ['Bench Press', 'chest'],
            ['Incline DB Press', 'chest'],
            ['Side Plank', 'core'],
            ['Overhead Press', 'shoulders'],
            ['Glute Bridge', 'glutes'],
            ['Calf Raise', 'calves'],
        ],
        'Jumat' => [
            ['Pull-up', 'back'],
            ['Romanian Deadlift', 'hamstrings'],
            ['Sit-up', 'core'],
            ['Lateral Raise', 'shoulders'],
            ['Dumbbell Curl', 'biceps'],
            ['Chest Fly', 'chest'],
        ],
    ]
],
'Form Builder 5' => [
    'goal' => 'strength',
    'sets' => '3–5', 'reps' => '6–10',
    'days' => [
        'Senin' => [
            ['Back Squat', 'legs'],
            ['Incline Press', 'chest'],
            ['Crunches', 'core'],
            ['Overhead Press', 'shoulders'],
            ['Cable Row', 'back'],
            ['Barbell Curl', 'biceps'],
        ],
        'Selasa' => [
            ['Deadlift', 'back'],
            ['Lat Pulldown', 'back'],
            ['Plank', 'core'],
            ['Push-up', 'upper_body'],
            ['Lateral Raise', 'shoulders'],
            ['Calf Raise', 'calves'],
        ],
        'Rabu' => [
            ['Front Squat', 'legs'],
            ['Step-up', 'legs'],
            ['Sit-up', 'core'],
            ['DB Shoulder Press', 'shoulders'],
            ['Barbell Row', 'back'],
            ['Triceps Kickback', 'triceps'],
        ],
        'Kamis' => [
            ['Bench Press', 'chest'],
            ['Incline DB Press', 'chest'],
            ['Side Plank', 'core'],
            ['Chest Fly', 'chest'],
            ['Dumbbell Curl', 'biceps'],
            ['Glute Bridge', 'glutes'],
        ],
        'Jumat' => [
            ['Romanian Deadlift', 'hamstrings'],
            ['Pull-up', 'back'],
            ['Crunches', 'core'],
            ['Overhead Triceps Ext', 'triceps'],
            ['Good Morning', 'hamstrings'],
            ['Shrug', 'traps'],
        ],
    ]
],
'PowerMax 4' => [
    'goal' => 'strength',
    'sets' => '4–5', 'reps' => '3–6',
    'days' => [
        'Senin' => [
            ['Squat', 'legs'],
            ['Deadlift', 'back'],
            ['Plank', 'core'],
            ['Step-up', 'legs'],
            ['Lat Pulldown', 'back'],
            ['Incline Press', 'chest'],
        ],
        'Selasa' => [
            ['Bench Press', 'chest'],
            ['Incline DB Press', 'chest'],
            ['Crunches', 'core'],
            ['Overhead Press', 'shoulders'],
            ['Barbell Row', 'back'],
            ['Triceps Dip', 'triceps'],
        ],
        'Kamis' => [
            ['Front Squat', 'legs'],
            ['Romanian Deadlift', 'hamstrings'],
            ['Side Plank', 'core'],
            ['Cable Row', 'back'],
            ['Lateral Raise', 'shoulders'],
            ['Barbell Curl', 'biceps'],
        ],
        'Jumat' => [
            ['Pull-up', 'back'],
            ['Good Morning', 'hamstrings'],
            ['Sit-up', 'core'],
            ['Chest Dip', 'chest'],
            ['Hammer Curl', 'biceps'],
            ['Shrug', 'traps'],
        ],
    ]
],

        ];
 
        // 1️⃣ Buat detail latihan berdasarkan jenis otot & goal
foreach ($programs as $programName => $data) {
    $program = Program::where('name', $programName)->first();
    if (!$program) continue;

    foreach ($data['days'] as $day => $exercises) {
        $limitedExercises = array_slice($exercises, 0, 6); // maksimal 6 latihan per hari

        foreach ($limitedExercises as [$exercise, $muscle]) {
            ProgramDetail::updateOrCreate(
                [
                    'program_id'    => $program->id,
                    'day'           => $day,
                    'exercise_name' => $exercise,
                ],
                [
                    'muscle_focus' => $muscle, // ini penting untuk variasi otot

                    // ⏱️ Durasi hanya untuk latihan berbasis waktu
                    'duration' => match ($exercise) {
                        // 🏃 Cardio
                        'Treadmill', 'Bike', 'Elliptical', 'Jump Rope', 'Tabata Bike',
                        'HIIT Sprint', 'Bike Sprint', 'Treadmill Walk', 'Treadmill Incline',
                        'Sprint Intervals', 'Bike (easy)', 'Jumping Jacks',
                        'Sprint in Place', 'HIIT Light', 'Walk Treadmill', 'Bike (interval)' 
                            => 12,

                        // 💪 HIIT
                        'HIIT Run', 'HIIT Circuit', 'Burpees',
                        'Tabata Circuit', 'HIIT Ladder'
                            => 16,

                        // 🧍 Core (durasi hanya untuk Plank)
                        'Plank', 'Side Plank' => 2,

                        default => null,
                    },

                    // 🧱 Sets hanya untuk latihan non-durasi
                    'sets' => match (true) {
    in_array($exercise, [
        'Treadmill', 'Bike', 'Elliptical', 'Jump Rope', 'Tabata Bike',
        'HIIT Sprint', 'Bike Sprint', 'Treadmill Walk', 'Treadmill Incline',
        'Sprint Intervals', 'Bike (easy)', 'Jumping Jacks',
        'Sprint in Place', 'HIIT Light', 'Walk Treadmill', 'Bike (interval)',
        'HIIT Run', 'HIIT Circuit', 'Burpees',
        'Tabata Circuit', 'HIIT Ladder', 'Plank', 'Side Plank'
    ]) => null,

    default => match ($data['goal']) {
        'strength'    => '4–5',
        'muscle_gain' => '3–4',
        'weight_loss' => '3–4',
        default       => '3–4',
    },
},

'reps' => match (true) {
    in_array($exercise, [
        'Treadmill', 'Bike', 'Elliptical', 'Jump Rope', 'Tabata Bike',
        'HIIT Sprint', 'Bike Sprint', 'Treadmill Walk', 'Treadmill Incline',
        'Sprint Intervals', 'Bike (easy)', 'Jumping Jacks',
        'Sprint in Place', 'HIIT Light', 'Walk Treadmill', 'Bike (interval)',
        'HIIT Run', 'HIIT Circuit', 'Burpees',
        'Tabata Circuit', 'HIIT Ladder', 'Plank', 'Side Plank'
    ]) => null,

    default => match ($data['goal']) {
        'strength'    => '3–6',
        'muscle_gain' => '8–12',
        'weight_loss' => '12–15',
        default       => '10–12',
    },
},
                ]
            );
        }
    }
}

// 2️⃣ Hitung estimasi durasi per sesi (per hari), bukan total mingguan
$durasiPerGerakan = [
    'weight_loss' => 5.5,
    'muscle_gain' => 6,
    'strength'    => 7,
];

foreach (Program::with('details')->get() as $program) {
    $grouped = $program->details->groupBy('day');
    
    $totalDurasi = $program->details->sum(function ($detail) use ($durasiPerGerakan, $program) {
        return $detail->duration ?? ($durasiPerGerakan[$program->goal] ?? 5);
    });

    $jumlahHari = $grouped->count() ?: 1;

    $avgPerHari = $totalDurasi / $jumlahHari;

    // 💡 SIMPAN tanpa pembulatan paksa ke 40
    $program->duration = round($avgPerHari, 1);
    $program->save();
}
    }
}