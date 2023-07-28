<?php

namespace App\Http\Controllers;

use App\Models\Car_brand;
use App\Models\Car_detail;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carDetails = Car_detail::with('car_brand')->get();
        $carBrands = Car_brand::with('car_detail')->get();

        return view('admin.car.car-view', ['title' => 'Car'], compact('carDetails', 'carBrands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validateData = $request->validate([
            'brand' => 'unique:car_brands'
        ]);

        Car_brand::create($validateData);
        return back()->with('success', 'Data berhasil ditambahkan !');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Car_brand::find($id);
        $data->update($request->all());
        return back()->with('success', 'Data berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Car_brand::find($id);
        $data->delete();
        return back()->with('success', 'Data berhasil dihapus !');
    }
}
