<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkoutLog extends Model
{
    protected $fillable = [
    'user_id',
    'program_detail_id',
    'log_date',
    'actual_sets',
    'actual_reps',
    'actual_weight',
    'actual_duration',
];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function programDetail()
    {
        return $this->belongsTo(ProgramDetail::class);
    }
}
