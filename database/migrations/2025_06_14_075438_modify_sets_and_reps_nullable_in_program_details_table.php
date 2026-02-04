<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('program_details', function (Blueprint $table) {
            $table->integer('sets')->nullable()->change();
            $table->integer('reps')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('program_details', function (Blueprint $table) {
            $table->integer('sets')->nullable(false)->change();
            $table->integer('reps')->nullable(false)->change();
        });
    }
};
