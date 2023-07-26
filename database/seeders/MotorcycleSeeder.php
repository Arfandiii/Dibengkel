<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Motorcycle;
use App\Models\Motorcycle_detail;

class MotorcycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Motorcycle::create([
            "merek" => "yamaha"
        ]);
            Motorcycle::create([
            "merek" => "Honda"
        ]);
            Motorcycle::create([
            "merek" => "Kawasaki"
        ]);
            Motorcycle_detail::create([
            'motorcycle_id' => '1',
            "model" => "Sport"
        ]);
            Motorcycle_detail::create([
            'motorcycle_id' => '2',
            "model" => "matic"
        ]);
            Motorcycle_detail::create([
            'motorcycle_id' => '3',
            "model" => "Sport"
        ]);
    }
}
