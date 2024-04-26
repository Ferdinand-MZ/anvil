<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = ['SI 1A', 'SI 1B', 'SI 2A', 'SI 2B', 'SI 3A', 'SI 3B', 'TRPL 1'];
        foreach ($groups as $group) {
            Group::insert([
                'uuid' => uuid_create(),
                'name' => $group,
                'created_at' => now()
            ]);
        }
    }
}
