<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutLogsTable extends Migration
{
    public function up(): void
    {
        Schema::create('workout_logs', function (Blueprint $table) {
            $table->id();

            // Foreign key ke users
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');

            // Foreign key ke program_details
            $table->foreignId('program_detail_id')
                  ->constrained()
                  ->onDelete('cascade');

            // Tanggal log
            $table->date('log_date');

            // Input manual
            $table->integer('actual_sets')->nullable();
            $table->integer('actual_reps')->nullable();
            $table->integer('actual_weight')->nullable();
            $table->integer('actual_duration')->nullable(); // untuk latihan cardio

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('workout_logs');
    }
}
