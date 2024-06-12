<?php

namespace Database\Seeders;

use App\Models\ArchiveCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArchiveCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $archives = [
            [
                'name' => 'Certificate'
            ],
            [
                'name' => 'Proposal'
            ],
            [
                'name' => 'Letter'
            ]
            ];
            foreach ($archives as $archive){
                ArchiveCategory::insert([
                    'uuid' => uuid_create(),
                    'name' => $archive['name']
                ]);
            }
    }
}
