<?php

namespace App\Http\Controllers;

use App\Models\Car_brand;
use App\Models\Car_detail; 
use App\Models\User; 
use Illuminate\Http\Request;

class CarServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carDetails = Car_detail::with('car_brand')->get();
        $carBrands = Car_brand::with('car_detail')->get();

        return view('admin.transaksi.car-service', ['title' => 'Servis Mobil'], compact('carDetails', 'carBrands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'pengguna')->get();
        $carBrands = Car_brand::all();
        return view('admin.transaksi.create-service', [
            'title' => 'Service Create'
        ], compact('users', 'carBrands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'car_brand_id' => 'required',
            'model' => 'required|max:225',
            'nomor_polisi' => 'required',
            'servis' => 'required'
        ]);

        Car_detail::create($validatedData);
        return redirect('car-service')->with('success', 'Data berhasil ditambah !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car_brand $car_brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car_brand $car_brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Car_detail::find($id);
        $data->update($request->all());
        return back()->with('success', 'Data berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Car_detail::find($id);
        $data->delete();
        return back()->with('success', 'Data berhasil dihapus !');
    }
}
