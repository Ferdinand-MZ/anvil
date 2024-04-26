<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nim' => '12345678',
                'name' => 'Admin HIMATIKOM',
                'email' => 'himatikompolsubofficial@gmail.com',
                'phone' => '085156071334',
                'status' => 'admin',
                'generation' => 2021,
                'study_program_id' => 1,
                'group_id' => 4,
                'organization_id' => 1
            ],
            [
                'nim' => '10109004',
                'name' => 'Ahmad Fadilah',
                'email' => 'ahmadfadilah202003@gmail.com',
                'phone' => '085795069461',
                'status' => 'pengurus',
                'generation' => 2021,
                'study_program_id' => 1,
                'group_id' => 4,
                'organization_id' => 13
            ],
        ];
        foreach ($users as $user) {
            User::insert([
                'uuid' => uuid_create(),
                'nim' => $user['nim'],
                'name' => $user['name'],
                'email' => $user['email'],
                'phone' => $user['phone'],
                'password' => Hash::make($user['nim']),
                'status' => $user['status'],
                'generation' => $user['generation'],
                'study_program_id' => $user['study_program_id'],
                'group_id' => $user['group_id'],
                'organization_id' => $user['organization_id'],
            ]);
        }
    }
}
