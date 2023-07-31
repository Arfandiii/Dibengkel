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
            "brand" => "Audi"
        ]);
        
        Car_brand::create([
            "brand" => "Daihatsu"
        ]);
        
        Car_brand::create([
            "brand" => "Bmw"
        ])
        
        ;Car_brand::create([
            "brand" => "Cherry"
        ]);
        
        Car_brand::create([
            "brand" => "Honda"
        ]);
        
        Car_brand::create([
            "brand" => "DFSK"
        ])
        
        ;Car_brand::create([
            "brand" => "Suzuki"
        ]);
        
        Car_brand::create([
            "brand" => "Ford"
        ]);
        
        Car_brand::create([
            "brand" => "Fuso"
        ])
        
        ;Car_brand::create([
            "brand" => "Hyundai"
        ]);
        
        Car_brand::create([
            "brand" => "Isuzu"
        ]);
        
        Car_brand::create([
            "brand" => "Jaguar"
        ])
        
        ;Car_brand::create([
            "brand" => "Jeep"
        ]);
        
        Car_brand::create([
            "brand" => "Kia"
        ]);
        
        Car_brand::create([
            "brand" => "Lexus"
        ])
        
        ;Car_brand::create([
            "brand" => "Scorpio"
        ]);
        
        Car_brand::create([
            "brand" => "Maserati"
        ]);
        
        Car_brand::create([
            "brand" => "Mazda"
        ])
        
        ;Car_brand::create([
            "brand" => "Mercedes benz"
        ]);
        
        Car_brand::create([
            "brand" => "MG"
        ]);
        
        Car_brand::create([
            "brand" => "Mini"
        ])
        
        ;Car_brand::create([
            "brand" => "Nissan"
        ]);
        
        Car_brand::create([
            "brand" => "Wuling Air"
        ]);
        
        Car_brand::create([
            "brand" => "Pajero"
        ])
        
        ;Car_brand::create([
            "brand" => "Peugeot"
        ]);
        
        Car_brand::create([
            "brand" => "Renault Megane"
        ]);
        
        Car_brand::create([
            "brand" => "Subaru"
        ])
        
        ;Car_brand::create([
            "brand" => "Tata Ace"
        ]);
        
        Car_brand::create([
            "brand" => "Toyota"
        ]);
        
        Car_brand::create([
            "brand" => "Volkswagen"
        ]);
        
        Car_brand::create([
            "brand" => "Volvo"
        ]);


        // data detail servis        
        Car_detail::create([
            'user_id' => '2',
            'car_brand_id' => '1',
            "model" => "A3",
            'nomor_polisi' => 'KB 3387 XD',
            'service' => 'Servis Rutin'
        ]);
        Car_detail::create([
            'user_id' => '3',
            'car_brand_id' => '2',
            "model" => "Ayla",
            'nomor_polisi' => 'KB 5236 MA',
            'service' => 'Servis Kaki-Kaki'
        ]);
        Car_detail::create([
            'user_id' => '4',
            'car_brand_id' => '3',
            "model" => "4 Series",
            'nomor_polisi' => 'KB 6843 DF',
            'service' => 'Servis Ac'
        ]);

        Car_detail::create([
            'user_id' => '5',
            'car_brand_id' => '4',
            "model" => "Thiggo 7 Pro",
            'nomor_polisi' => 'KB 6540 HY',
            'service' => 'Servis Transmisi'
        ]);
        Car_detail::create([
            'user_id' => '6',
            'car_brand_id' => '5',
            "model" => "Civic Type R",
            'nomor_polisi' => 'KB 6642 BR',
            'service' => 'Servis Elektrik'
        ]);
        Car_detail::create([
            'user_id' => '7',
            'car_brand_id' => '6',
            "model" => "Glory 580",
            'nomor_polisi' => 'KB 2370 OX',
            'service' => 'Servis Mesin'
        ]);

        Car_detail::create([
            'user_id' => '8',
            'car_brand_id' => '7',
            "model" => "Ertiga",
            'nomor_polisi' => 'KB 4011 MS',
            'service' => 'Servis Body dan Cat'
        ]);
        Car_detail::create([
            'user_id' => '9',
            'car_brand_id' => '8',
            "model" => "Ranger Raptor",
            'nomor_polisi' => 'KB 3503 MM',
            'service' => 'Servis Sistem Penggerak '
        ]);
        Car_detail::create([
            'user_id' => '10',
            'car_brand_id' => '9',
            "model" => "Fighter FN",
            'nomor_polisi' => 'KB 2922 MJ',
            'service' => 'ganti mesin'
        ]);

        Car_detail::create([
            'user_id' => '11',
            'car_brand_id' => '10',
            "model" => "Ioniq 5",
            'nomor_polisi' => 'KB 3151 QW',
            'service' => 'Servis Rem'
        ]);
        Car_detail::create([
            'user_id' => '12',
            'car_brand_id' => '11',
            "model" => "Mu-x",
            'nomor_polisi' => 'KB 5788 ZB',
            'service' => 'Servis Baterai'
        ]);
        Car_detail::create([
            'user_id' => '13',
            'car_brand_id' => '12',
            "model" => "F Type",
            'nomor_polisi' => 'KB 2156 KD',
            'service' => 'Servis Sistem Pembuangan'
        ]);

        Car_detail::create([
            'user_id' => '14',
            'car_brand_id' => '13',
            "model" => "Wrangler Jl",
            'nomor_polisi' => 'KB 7099 ZX',
            'service' => 'Servis Kelistrikan Interior'
        ]);
        Car_detail::create([
            'user_id' => '15',
            'car_brand_id' => '14',
            "model" => "ev6",
            'nomor_polisi' => 'KB 2868 RL',
            'service' => 'Servis Sistem Keamanan'
        ]);
        Car_detail::create([
            'user_id' => '16',
            'car_brand_id' => '15',
            "model" => "Lc",
            'nomor_polisi' => 'KB 2568 WL',
            'service' => 'Servis Suspensi'
        ]);

        Car_detail::create([
            'user_id' => '17',
            'car_brand_id' => '16',
            "model" => "Mahindra",
            'nomor_polisi' => 'KB 1243 LL',
            'service' => 'Servis Sistem Penyalaan'
        ]);
        Car_detail::create([
            'user_id' => '18',
            'car_brand_id' => '17',
            "model" => "Ghibli",
            'nomor_polisi' => 'KB 5760 KK',
            'service' => 'Servis Sistem Pengisian'
        ]);
        Car_detail::create([
            'user_id' => '19',
            'car_brand_id' => '18',
            "model" => "3 Sedan",
            'nomor_polisi' => 'KB 7877 ML',
            'service' => 'Servis Sistem Pendingin'
        ]);

        Car_detail::create([
            'user_id' => '20',
            'car_brand_id' => '19',
            "model" => "Amg A 35",
            'nomor_polisi' => 'KB 5748 CV',
            'service' => 'Servis Sistem Pengontrol Emisi'
        ]);
        Car_detail::create([
            'user_id' => '21',
            'car_brand_id' => '20',
            "model" => "4 EV",
            'nomor_polisi' => 'KB 7690 NM',
            'service' => 'Servis Sistem Kaki-Kaki'
        ]);
        Car_detail::create([
            'user_id' => '22',
            'car_brand_id' => '21',
            "model" => "3 Door",
            'nomor_polisi' => 'KB 5768 DG',
            'service' => 'Servis Sistem Pembersihan'
        ]);

        Car_detail::create([
            'user_id' => '23',
            'car_brand_id' => '22',
            "model" => "X Trail",
            'nomor_polisi' => 'KB 2019 FG',
            'service' => 'Servis Rutin'
        ]);
        Car_detail::create([
            'user_id' => '24',
            'car_brand_id' => '23',
            "model" => "Sport",
            'nomor_polisi' => 'KB 2487 EV',
            'service' => 'Servis AC'
        ]);
        Car_detail::create([
            'user_id' => '25',
            'car_brand_id' => '24',
            "model" => "2008",
            'nomor_polisi' => 'KB 7688 GG',
            'service' => 'Servis Transmisi'
        ]);

        Car_detail::create([
            'user_id' => '26',
            'car_brand_id' => '25',
            "model" => "E-tech",
            'nomor_polisi' => 'KB 7456 LK',
            'service' => 'Servis Elektrik'
        ]);
        Car_detail::create([
            'user_id' => '27',
            'car_brand_id' => '26',
            "model" => "Br-z",
            'nomor_polisi' => 'KB 1990 HH',
            'service' => 'Servis Mesin'
        ]);
        Car_detail::create([
            'user_id' => '28',
            'car_brand_id' => '27',
            "model" => "ex2",
            'nomor_polisi' => 'KB 4880 DF',
            'service' => 'Servis Body dan Cat'
        ]);

        Car_detail::create([
            'user_id' => '29',
            'car_brand_id' => '28',
            "model" => "Supra",
            'nomor_polisi' => 'KB 1536 RR',
            'service' => 'Servis Sistem Penggerak'
        ]);
        Car_detail::create([
            'user_id' => '30',
            'car_brand_id' => '29',
            "model" => "T-cross",
            'nomor_polisi' => 'KB 7934 DP',
            'service' => 'Servis Rem'
        ]);
        Car_detail::create([
            'user_id' => '31',
            'car_brand_id' => '30',
            "model" => "s60",
            'nomor_polisi' => 'KB 6620 HL',
            'service' => 'Servis Baterai'
        ]);

        Car_detail::create([
            'user_id' => '32',
            'car_brand_id' => '31',
            "model" => "EV",
            'nomor_polisi' => 'KB 5214 LP',
            'service' => 'Servis Sistem Pembuangan'
        ]);
    }
}
