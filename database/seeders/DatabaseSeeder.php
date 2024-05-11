<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        \App\Models\Imports::factory(50)->create();
        \App\Models\Export::factory(50)->create();
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'photo' => fake()->imageUrl(),
            'password' => Hash::make('123456789'),
        ]);

        // Create additional seed data here if needed
    }
}
