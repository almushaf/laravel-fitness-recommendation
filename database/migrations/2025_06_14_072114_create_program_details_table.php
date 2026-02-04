<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained()->onDelete('cascade');
            $table->string('day');
            $table->string('exercise_name');
            $table->integer('sets');
            $table->string('reps');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program_details');
    }
};
