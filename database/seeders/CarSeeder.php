<?php

namespace Database\Seeders;

use App\Models\Car_brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car_detail;
use App\Models\Car_model;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // data nama Brand
        Car_brand::create([
            "brand" => "Daihatsu" // data 1
        ]);
        
        Car_brand::create([
            "brand" => "Ducati" // data 2
        ]);
        
        Car_brand::create([
            "brand" => "Ferari" // data 3
        ]);

        // data detail servis        
        Car_detail::create([
            'user_id' => '3',
            'car_brand_id' => '1',
            "model" => "Sport"
        ]);
        Car_detail::create([
            'user_id' => '4',
            'car_brand_id' => '2',
            "model" => "jeep"
        ]);
        Car_detail::create([
            'user_id' => '5',
            'car_brand_id' => '3',
            "model" => "sport"
        ]);
    }
}
