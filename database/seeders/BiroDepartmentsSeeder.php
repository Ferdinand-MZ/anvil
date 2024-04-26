<?php

namespace Database\Seeders;

use App\Models\BiroDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiroDepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $biro_departments = [
            [
                'name' => 'Biro Kominfo',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'photo' => 'kepengurusan/biro.png',
            ],
            [
                'name' => 'Departemen Relasi',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'photo' => 'kepengurusan/relasi.png',
            ],
            [
                'name' => 'Departemen Pengembangan Minat Bakat',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'photo' => 'kepengurusan/pmb.png',
            ],
            [
                'name' => 'Departemen Pengembangan Sumber Daya Anggota',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'photo' => 'kepengurusan/psda.png',
            ],
            [
                'name' => 'Departemen Kewirausahaan',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'photo' => 'kepengurusan/kwu.png',
            ],
            [
                'name' => 'Departemen Riset dan Teknologi',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'photo' => 'kepengurusan/ristek.png',
            ]
        ];

        foreach ($biro_departments as $biro_department) {
            BiroDepartment::insert([
                'uuid' => uuid_create(),
                'name' => $biro_department['name'],
                'description' => $biro_department['description'],
                'photo' => $biro_department['photo'],
                'created_at' => now()
            ]);
        }
    }
}
