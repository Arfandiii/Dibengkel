<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::create([
            "first_name" => "Ari",
            "last_name" => "Arfandi",
            "email" => "admin@gmail.com",
            "password" => Hash::make("123456"),
            "role" => 'admin'
        ]);

        User::create([
            "first_name" => "Fajar",
            "last_name" => "Ramadhan",
            "email" => "Pengguna@gmail.com",
            "password" => Hash::make("123456"),
            "role" => 'pengguna'
        ]);
    }
}
