<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Motorcycle;

class VehicleController extends Controller
{
    public function getCar(Car $car)
    {
        $dataCar = $car->get();

        return view('admin.car.car-view', ['title' => 'Car'], compact('dataCar'));
    }
    public function getMotorcycle(Motorcycle $motorcycle)
    {
        $dataMotorcycle = $motorcycle->get();

        return view('admin.motorcycle.motorcycle-view', ['title' => 'Motorcycle'], compact('dataMotorcycle'));
    }
}
