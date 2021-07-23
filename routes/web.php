<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user/homepage');
});

Route::get('/portofolio', function () {
    return view('user/portofolio');
});

Route::get('/acara', function () {
    return view('user/acara');
});

Route::get('/artikel', function () {
    return view('user/artikel');
});

Route::get('/artikel/viewartikel', function () {
    return view('user/viewartikel');
});

Route::get('/profil', function () {
    return view('user/profil');
});