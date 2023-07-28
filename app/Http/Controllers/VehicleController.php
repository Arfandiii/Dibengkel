<?php

namespace App\Http\Controllers;

use App\Models\Car_brand;
use App\Models\Car_detail;
use App\Models\Car_model;
use App\Models\Motorcycle_brand;
use App\Models\Motorcycle_detail;
use App\Models\Motorcycle_model;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function getCar(){

        $carDetails = Car_detail::with('car_brand')->get();
        $carBrands = Car_brand::with('car_detail')->get();

        return view('admin.car.car-view', ['title' => 'Car'], compact('carDetails', 'carBrands'));
    }

    public function getMotorcycle()
    {

        $motorcycleDetails = Motorcycle_detail::with('motorcycle_brand')->get();
        $motorcycleBrands = Motorcycle_brand::with('motorcycle_detail')->get();

        return view('admin.motorcycle.motorcycle-view', ['title' => 'Motorcycle'], compact('motorcycleDetails', 'motorcycleBrands'));
    }
    
    public function storeBrandCar(Request $request)
    {
       
    }

    public function createBrand(array $data)
    {
        return Car_brand::create([
            'brand' => $data['brand']
        ]);
    }


    public function destroyBrand(Car_brand $carBrand)
    {
        Car_brand::destroy($carBrand->id);
        return back()->with('success', 'Data berhasil dihapus !');
    }
}


//    <!-- Car Merek Modal-->
//     <div class="modal fade" id="brandCarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
//         aria-hidden="true">
//         <div class="modal-dialog" role="document">
//             <div class="modal-content">
//                 <div class="modal-header">
//                     <h5 class="modal-title" id="exampleModalLabel">Tambah Data Brand Mobil</h5>
//                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
//                         <span aria-hidden="true">×</span>
//                     </button>
//                 </div>
//                 <form action="/dashboard/cars" method="post">
//                     @csrf
//                     <div class="modal-body">
//                         <input type="text" class="form-control form-control-user @error('brand') is-invalid @enderror"
//                             id="brand" name="brand" placeholder="Nama Brand" required value="{{ old('brand') }}">
//                     </div>
//                     <div class="modal-footer">
//                         <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
//                         <button class="btn btn-primary" type="submit">Add Data</button>
//                     </div>
//                 </form>
//             </div>
//         </div>
//     </div>