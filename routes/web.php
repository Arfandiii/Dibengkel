<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AuthController;
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
        Route::get('cars', 'getCar')->name('getCars');
        Route::get('motorcycles', 'getMotorcycle')->name('getMotorcycle');
});

// Route::get('/login', [AuthController::class, 'index']);
Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'index');
    Route::get('register', 'register');
    Route::get('forgot-password', 'forgot_password');
    Route::post('login-post', 'post_login')->name('login.post');
    Route::post('register-post', 'post_register')->name('register.post');
    Route::post('forgot-password-post', 'forgot_password_post');
    Route::get('logout', 'logout')->name('logout');
});

Route::get('/service', function () {
    return view('service', [
        'title' => 'Service',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});

Route::get('/login', function () {
    return view('form.login', [
        'title' => 'Login',
    ]);
});

Route::get('dashboard', function () {
    return view('admin.dashboard', [
        'title' => 'Dashboard',
    ]);
});
// Route::get('users', function () {
//     return view('admin.user-view', [
//         'title' => 'Dashboard',
//     ]);
// });
Route::get('profile', function () {
    return view('admin.profile', [
        'title' => 'Profile',
    ]);
});

// Route::get('/forgot-password', function () {
//     return view('form.forgot-password', [
//         'title' => 'Forgot Password',
//     ]);
// });
