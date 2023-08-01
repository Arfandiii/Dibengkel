<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\ViewController;
use App\Models\Car_brand;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Name;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(ViewController::class)->group(function(){
    Route::get('/', 'index');
    Route::post('service/motorcycle-create', 'storeMotorcycle')->name('create.motorcycleService')->middleware('auth');
    Route::post('service/car-create', 'storeCar')->name('create.carService')->middleware('auth');
});

Route::controller(AuthController::class)
    ->group(function(){
        Route::get('login', 'login')->middleware('guest')->name('login');
        Route::get('register', 'register')->middleware('guest');
        Route::get('forgot-password', 'forgot_password');
        Route::post('login-post', 'post_login')->name('login.post');
        Route::post('register-post', 'post_register')->name('register.post');
        Route::post('forgot-password-post', 'forgot_password_post');
        Route::get('logout', 'logout')->name('logout');
});


Route::controller(DashboardController::class)
    ->group(function(){
        Route::get('dashboard-admin', 'index')->middleware('auth');
        // Route::get('dashboard-user', 'index');

});



Route::resource('cars', CarController::class)->middleware('auth');
Route::resource('motorcycles', MotorcycleController::class)->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');
Route::resource('car-services', CarServiceController::class)->middleware('auth');
