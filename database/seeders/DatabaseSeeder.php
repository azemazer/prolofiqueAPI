<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Genres::factory(10)->create();
        \App\Models\Moods::factory(10)->create();
        \App\Models\Instruments::factory(10)->create();
        \App\Models\Songs::factory(10)->create([
            'url' => 'https://puu.sh/JGTBN.mp3',
        ]);
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
