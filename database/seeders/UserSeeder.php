<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'usertype' => 'admin',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Eman',
            'email' => 'eman@gmail.com',
            'usertype' => 'user',
            'password' => Hash::make('12345678'),
        ]);
    }
}
