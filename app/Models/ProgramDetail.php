<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class ProgramDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'day',
        'exercise_name',
        'muscle_focus',
        'sets',
        'reps',
        'duration',
    ];

    /**
     * Relasi ke model Program
     */
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    /**
     * Relasi ke semua log latihan yang terkait dengan detail latihan ini
     */
    public function logs()
    {
        return $this->hasMany(WorkoutLog::class, 'program_detail_id');
    }

    /**
     * Log latihan hari ini oleh user yang sedang login (jika ada)
     */
    public function logsToday()
    {
        // Cegah error jika tidak ada user login (misal saat dipanggil di console/seeder)
        if (!Auth::check()) {
            return $this->hasOne(WorkoutLog::class, 'program_detail_id')->whereNull('id'); // relasi kosong
        }

        return $this->hasOne(WorkoutLog::class, 'program_detail_id')
            ->where('user_id', Auth::id())
            ->whereDate('log_date', now());
    }

    /**
     * Ambil log berdasarkan user dan tanggal tertentu
     */
    public function logByUserAndDate($userId, $date)
    {
        return $this->hasOne(WorkoutLog::class, 'program_detail_id')
            ->where('user_id', $userId)
            ->whereDate('log_date', $date);
    }
}
