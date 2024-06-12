<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PengurusHarian;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StudyProgramsSeeder::class,
            GroupsSeeder::class,
            OrganizationsSeeder::class,
            UsersSeeder::class,
            BiroDepartmentsSeeder::class,
            PengurusHariansSeeder::class,
            ArchiveCategorySeeder::class
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
