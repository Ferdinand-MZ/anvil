<?php

namespace Database\Seeders;

use App\Models\LetterType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LetterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $archives = [
            [
                'name' => 'Surat Masuk'
            ],
            [
                'name' => 'Surat Keluar'
            ],
        ];
            foreach ($archives as $archive){
                LetterType::insert([
                    'uuid' => uuid_create(),
                    'name' => $archive['name']
                ]);
            }
    }
}
