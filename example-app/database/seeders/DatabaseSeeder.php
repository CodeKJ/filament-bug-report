<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User A',
             'email' => 'test_a@example.com',
         ]);

         \App\Models\User::factory()->create([
             'name' => 'Test User B',
             'email' => 'test_b@example.com',
         ]);

    }
}
