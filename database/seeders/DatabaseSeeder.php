<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1️⃣ Buat admin sistem (WAJIB)
        $this->call(AdminSeeder::class);

        // 2️⃣ User dummy (opsional, untuk testing)
        User::factory()->create([
            'name' => 'Test User',
            'username' => 'testuser',
            'email' => 'test@example.com',
        ]);

        // 3️⃣ Seeder data master / program
        $this->call([
            ProgramSeeder::class,
            ProgramDetailSeeder::class,
        ]);
    }
}
