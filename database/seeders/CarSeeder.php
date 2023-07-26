<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Car_detail;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Car::create([
            "merek" => "Daihatsu"
        ]);
            Car::create([
            "merek" => "Ducati"
        ]);
            Car::create([
            "merek" => "Ferari"
        ]);
            Car_detail::create([
            'car_id' => '1',
            "model" => "Sport"
        ]);
            Car_detail::create([
            'car_id' => '2',
            "model" => "Sedan"
        ]);
            Car_detail::create([
            'car_id' => '3',
            "model" => "Sport"
        ]);
    }
}
