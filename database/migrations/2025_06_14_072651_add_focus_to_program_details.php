<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('program_details', function (Blueprint $table) {
            $table->string('muscle_focus')->nullable()->after('exercise_name');
        });
    }

    public function down(): void
    {
        Schema::table('program_details', function (Blueprint $table) {
            $table->dropColumn('muscle_focus');
        });
    }
};
