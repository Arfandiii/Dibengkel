<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Car_detail;
use App\Models\Motorcycle;

class VehicleController extends Controller
{
    public function index(){

        $carDetails = Car_detail::with('car')->get();
        $cars = Car::with('car_detail')->get();

        return view('admin.car.car-view', ['title' => 'Car'], compact('carDetails', 'cars'));
    }

    public function getMotorcycle(Motorcycle $motorcycle)
    {
        $dataMotorcycle = $motorcycle->get();

        return view('admin.motorcycle.motorcycle-view', ['title' => 'Motorcycle'], compact('dataMotorcycle'));
    }
}
