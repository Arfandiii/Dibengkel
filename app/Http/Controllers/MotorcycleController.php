<?php

namespace App\Http\Controllers;
use App\Models\Motorcycle_brand;
use App\Models\Motorcycle_detail;
use Illuminate\Http\Request;

class MotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motorcycleDetails = Motorcycle_detail::with('motorcycle_brand')->get();
        $motorcycleBrands = Motorcycle_brand::with('motorcycle_detail')->get();

        return view('admin.motorcycle.motorcycle-view', ['title' => 'Motorcycle'], compact('motorcycleDetails', 'motorcycleBrands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'brand' => 'unique:motorcycle_brands'
        ]);

        Motorcycle_brand::create($validateData);
        return back()->with('success', 'Data berhasil ditambahkan !');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Motorcycle_brand::find($id);
        $data->update($request->all());
        return back()->with('success', 'Data berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Motorcycle_brand::find($id);
        $data->delete();
        return back()->with('success', 'Data berhasil dihapus !');
    }
}
