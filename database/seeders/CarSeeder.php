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
            "brand" => "Daihatsu"
        ]);
        
        Car_brand::create([
            "brand" => "Ducati"
        ]);
        
        Car_brand::create([
            "brand" => "Ferari"
        ]);

        // data detail servis        
        Car_detail::create([
            'user_id' => '3',
            'car_brand_id' => '1',
            "model" => "Sport",
            'nomor_polisi' => 'KB 2464 KL',
            'service' => 'ganti oli'
        ]);
        Car_detail::create([
            'user_id' => '4',
            'car_brand_id' => '2',
            "model" => "jeep",
            'nomor_polisi' => 'KB 2464 KL',
            'service' => 'membersihkan ac'
        ]);
        Car_detail::create([
            'user_id' => '5',
            'car_brand_id' => '3',
            "model" => "sport",
            'nomor_polisi' => 'KB 2464 KL',
            'service' => 'ganti mesin'
        ]);
    }
}
