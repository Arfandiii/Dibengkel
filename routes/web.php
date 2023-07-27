<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::controller(UserController::class)
    ->group(function () {
        Route::get('users', 'getUser')->name('getUser');
});

Route::controller(VehicleController::class)
    ->group(function () {
        Route::get('cars', 'getCar')->name('getCar');
        Route::get('motorcycles', 'getMotorcycle')->name('getMotorcycle');
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
