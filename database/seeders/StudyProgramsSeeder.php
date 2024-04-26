<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $study_programs = [
            'Sistem Informasi',
            'Teknik Rekayasa Perangkat Lunak'
        ];
        foreach ($study_programs as $study_program) {
            StudyProgram::insert([
                'uuid' => uuid_create(),
                'name' => $study_program,
                'created_at' => now()
            ]);
        }
    }
}
