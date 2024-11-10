<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123'
        ]);

        User::factory()->create([
            'name' => 'Pascal',
            'email' => 'pascal@gmail.com',
            'password' => 'pascal123'
        ]);

        User::factory()->create([
            'name' => 'Boole',
            'email' => 'boole@gmail.com',
            'password' => 'boole123'
        ]);

        User::factory()->create([
            'name' => 'Linus',
            'email' => 'linus@gmail.com',
            'password' => 'linus123'
        ]);

        User::factory()->create([
            'name' => 'Turing',
            'email' => 'turing@gmail.com',
            'password' => 'turing123'
        ]);

        User::factory()->create([
            'name' => 'Jobs',
            'email' => 'jobs@gmail.com',
            'password' => 'jobs123'
        ]);
    }
}
