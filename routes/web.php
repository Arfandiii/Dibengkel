<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
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
        'title' => 'login',
    ]);
});

Route::get('/register', function () {
    return view('form.register', [
        'title' => 'login',
    ]);
});

Route::get('/forgot-password', function () {
    return view('form.forgot-password', [
        'title' => 'login',
    ]);
});