<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            "nomor_telepon" => '0865269753',
            'email_verified_at' => now(),
            "password" => Hash::make("123456"),
            'remember_token' => Str::random(10),
            "role" => 'admin'
        ]);

        User::create([
            "first_name" => "Fajar",
            "last_name" => "Ramadhan",
            "email" => "pengguna@gmail.com",
            "nomor_telepon" => '08426351762',
            'email_verified_at' => now(),
            "password" => Hash::make("123456"),
            'remember_token' => Str::random(10),
            "role" => 'pengguna'
        ]);

        User::factory()
        ->count(100)
        ->create();
    }
}
