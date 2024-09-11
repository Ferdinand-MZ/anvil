<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Fasilitas;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fasilitas = [
            [
                'nama' => 'Laboratorium Bahasa',
                'photo' => 'fasilitas/fasilitas 1.jpg',
            ],
            [
                'nama' => 'Aula',
                'photo' => 'fasilitas/fasilitas 2.jpg',
            ],
            [
                'nama' => 'Laboratorium Komputer',
                'photo' => 'fasilitas/fasilitas 3.jpg',
            ],
            [
                'nama' => 'Masjid',
                'photo' => 'fasilitas/fasilitas 4.jpg',
            ]
        ];
        foreach ($fasilitas as $fasilitas) {
            Fasilitas::insert([
                'uuid' => uuid_create(),
                'nama' => $fasilitas['nama'],
                'photo' => $fasilitas['photo']
            ]);
        }
    }
}
