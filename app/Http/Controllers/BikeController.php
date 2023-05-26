<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;

class BikeController extends Controller
{
    public function index()
    {
        return view('about', [
            'title' => 'about',
            'bikes' => Bike::all(),
        ]);
    }

    public function show($merek)
    {
    }
}
