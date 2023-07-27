<?php

namespace App\Http\Controllers;

use App\Models\Car_brand;
use App\Models\Car_model;
use App\Models\Motorcycle_brand;
use App\Models\Motorcycle_detail;
use App\Models\Motorcycle_model;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function getCar(){

        $carModels = Car_model::with('car_brand')->get();
        $carBrands = Car_brand::with('car_model')->get();

        return view('admin.car.car-view', ['title' => 'Car'], compact('carModels', 'carBrands'));
    }

    public function getMotorcycle()
    {

        $motorcycleModels = Motorcycle_model::with('motorcycle_brand')->get();
        $motorcycleBrands = Motorcycle_brand::with('motorcycle_model')->get();

        return view('admin.motorcycle.motorcycle-view', ['title' => 'Motorcycle'], compact('motorcycleModels', 'motorcycleBrands'));
    }
    
    public function storeBrandCar(Request $request)
    {
        $request->validate([
            'brand' => 'unique:car_brands'
        ]);  

        $data = $request->all();
        $check = $this->createBrand($data);
        
        return back()->with('success', 'Data berhasil ditambahkan');
    }

    public function createBrand(array $data)
    {
        return Car_brand::create([
            'brand' => $data['brand']
        ]);
    }


}
