<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;

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

Route::get('/register', function () {
    return view('form.register', [
        'title' => 'Register',
    ]);
});

Route::get('/forgot-password', function () {
    return view('form.forgot-password', [
        'title' => 'Forgot Password',
    ]);
});
