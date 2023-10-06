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

Route::get('/home', function () {
    return view('halaman home');
});

Route::get('/hot-manga', function () {
    return view('halaman hot-manga');
});

Route::get('/genre', function () {
    return view('halaman genre');
});

Route::get('/login', function () {
    return view('halaman login');
});

Route::get('/desc', function () {
    return view('halaman desc');
});
