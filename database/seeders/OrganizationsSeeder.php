<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizations = [
            ['categories' => 'admin', 'name' => 'Admin'],
            ['categories' => 'ketua', 'name' => 'Ketua Himpunan'],
            ['categories' => 'wakil', 'name' => 'Wakil Ketua Himpunan'],
            ['categories' => 'bph', 'name' => 'Sekretaris 1'],
            ['categories' => 'bph', 'name' => 'Sekretaris 2'],
            ['categories' => 'bph', 'name' => 'Bendahara 1'],
            ['categories' => 'bph', 'name' => 'Bendahara 2'],
            ['categories' => 'kabir-kadep', 'name' => 'Biro Kominfo'],
            ['categories' => 'kabir-kadep', 'name' => 'Departemen Relasi'],
            ['categories' => 'kabir-kadep', 'name' => 'Departemen Pengembangan Minat Bakat'],
            ['categories' => 'kabir-kadep', 'name' => 'Departemen Pengembangan Sumber Daya Anggota'],
            ['categories' => 'kabir-kadep', 'name' => 'Departemen Kewirausahaan'],
            ['categories' => 'kabir-kadep', 'name' => 'Departemen Riset dan Teknologi'],
            ['categories' => 'anggota', 'name' => 'Biro Kominfo'],
            ['categories' => 'anggota', 'name' => 'Departemen Relasi'],
            ['categories' => 'anggota', 'name' => 'Departemen Pengembangan Minat Bakat'],
            ['categories' => 'anggota', 'name' => 'Departemen Pengembangan Sumber Daya Anggota'],
            ['categories' => 'anggota', 'name' => 'Departemen Kewirausahaan'],
            ['categories' => 'anggota', 'name' => 'Departemen Riset dan Teknologi'],
        ];
        foreach ($organizations as $organization) {
            Organization::insert([
                'uuid' => uuid_create(),
                'categories' => $organization['categories'],
                'name' => $organization['name'],
                'created_at' => now()
            ]);
        }
    }
}
