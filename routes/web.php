<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;
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

Route::controller(BikeController::class)
    ->name('bike.')
    ->group(function () {
        Route::get('/bike', 'index')->name('index');
        // Route::get('/pelanggan/create', 'create')->name('pelanggan.create');
        // Route::post('/pelanggan', 'store')->name('pelanggan.store');
        // Route::get('/pelanggan/{pelanggan}/edit', 'edit')->name('pelanggan.edit');
        // Route::put('/pelanggan/{pelanggan}', 'update')->name('pelanggan.update');
        // Route::delete('/pelanggan/{pelanggan}', 'destroy')->name('pelanggan.destroy');
});

// Route::get('/login', [AuthController::class, 'index']);
Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'index');
    Route::get('register', 'register');
    Route::get('forgot-password', 'forgot_password');
    Route::post('login-post', 'post_login')->name('login.post');
    Route::post('register-post', 'post_register')->name('register.post');
    Route::post('forgot-password-post', 'forgot_password_post');
});

Route::get('/service', function () {
    return view('service', [
        'title' => 'Service',
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
Route::get('users', function () {
    return view('admin.user-view', [
        'title' => 'Dashboard',
    ]);
});

// Route::get('/forgot-password', function () {
//     return view('form.forgot-password', [
//         'title' => 'Forgot Password',
//     ]);
// });
