<?php

namespace App\Http\Controllers;

use App\Models\Car_brand;
use App\Models\Car_detail;
use Illuminate\Http\Request;
use App\Models\Motorcycle_brand;
use App\Models\Motorcycle_detail;

class ViewController extends Controller
{

    public function index(){
        $motorcycleBrands = Motorcycle_brand::all();
        $carBrands = Car_brand::all();
        return view('home', ['title' => 'HOME'], compact('motorcycleBrands', 'carBrands'));
    }

    public function storeMotorcycle(Request $request)
    {
        $validateData = $request->validate([
            'nomor_polisi' => 'required|max:10',
            'user_id' => 'required',
            'brand_id' => 'required',
            'model' => 'required|max:10'
        ]);

        Motorcycle_detail::create($validateData);
        return back()->with('success', 'Data berhasil ditambahkan !');
    }


    public function storeCar(Request $request)
    {
        $validateData = $request->validate([
            'nomor_polisi' => 'required|max:10',
            'user_id' => 'required',
            'car_brand_id' => 'required',
            'model' => 'required',
            'service' => 'required'
        ]);
        Car_detail::create($validateData);
        return back()->with('success', 'Data berhasil ditambahkan !');
    }
}
