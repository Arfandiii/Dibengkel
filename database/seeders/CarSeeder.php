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
        
        Car_brand::create([
            "brand" => "Daihatsu"
        ]);
        
        Car_brand::create([
            "brand" => "Ducati"
        ]);
        
        Car_brand::create([
            "brand" => "Ferari"
        ]);
        
        Car_model::create([
            'car_brand_id' => '1',
            "model" => "sport"
        ]);
        
        Car_model::create([
            'car_brand_id' => '2',
            "model" => "jeep"
        ]);
        
        Car_model::create([
            'car_brand_id' => '3',
            "model" => "blabla"
        ]);
        
        Car_detail::create([
            'user_id' => '3',
            "car_model_id" => "1"
        ]);
        Car_detail::create([
            'user_id' => '4',
            "car_model_id" => "2"
        ]);
        Car_detail::create([
            'user_id' => '5',
            "car_model_id" => "3"
        ]);
    }
}
