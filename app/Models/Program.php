<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'goal',
        'frequency',
        'duration',
        'experience_level',
        'description',
    ];
    
    public function details()
{
    return $this->hasMany(ProgramDetail::class);
}

public function logs()
{
    return $this->hasManyThrough(
        \App\Models\WorkoutLog::class,
        \App\Models\ProgramDetail::class,
        'program_id',   // Foreign key on program_details
        'program_detail_id', // Foreign key on workout_logs
        'id',           // Local key on programs
        'id'            // Local key on program_details
    );
}

}
