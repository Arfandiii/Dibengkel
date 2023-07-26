<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Car_detail;
use App\Models\Motorcycle;
use App\Models\Motorcycle_detail;

class VehicleController extends Controller
{
    public function getCar(){

        $carDetails = Car_detail::with('car')->get();
        $cars = Car::with('car_detail')->get();

        return view('admin.car.car-view', ['title' => 'Car'], compact('carDetails', 'cars'));
    }

    public function getMotorcycle()
    {

        $motorcycleDetails = Motorcycle_detail::with('motorcycle')->get();
        $motorcycles = Motorcycle::with('motorcycle_detail')->get();

        return view('admin.motorcycle.motorcycle-view', ['title' => 'Motorcycle'], compact('motorcycleDetails', 'motorcycles'));
    }
}
