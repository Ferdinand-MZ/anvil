<?php

namespace Database\Seeders;

use App\Models\PengurusHarian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengurusHariansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengurus_harians = [
            [
                'name' => 'Ketua Himpunan',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'photo' => 'kepengurusan/ketua.png',
            ],
            [
                'name' => 'Wakil Ketua Himpunan',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'photo' => 'kepengurusan/wakil.png',
            ],
            [
                'name' => 'Sekretaris',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'photo' => 'kepengurusan/sekre.png',
            ],
            [
                'name' => 'Bendahara',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'photo' => 'kepengurusan/bendahara.png',
            ],
            [
                'name' => 'Komisi Disiplin',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi adipisci sequi explicabo pariatur voluptates accusantium autem doloremque sit voluptas soluta.',
                'photo' => 'kepengurusan/komdis.png',
            ],
        ];
        foreach ($pengurus_harians as $pengurus_harian) {
            PengurusHarian::insert([
                'uuid' => uuid_create(),
                'name' => $pengurus_harian['name'],
                'description' => $pengurus_harian['description'],
                'photo' => $pengurus_harian['photo']
            ]);
        }
    }
}
