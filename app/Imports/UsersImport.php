<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */

    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            User::insert([
                'uuid' => uuid_create(),
                'nim' => $row['nim'],
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => Hash::make($row['nim']),
                'status' => $row['status'],
                'created_at' => now(),
            ]);
        }
    }
}
