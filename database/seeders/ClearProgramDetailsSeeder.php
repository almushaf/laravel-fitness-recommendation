<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramDetail;

class ClearProgramDetailsSeeder extends Seeder
{
    public function run(): void
    {
        ProgramDetail::query()->delete();
\DB::statement('ALTER TABLE program_details AUTO_INCREMENT = 1');
    }
}
