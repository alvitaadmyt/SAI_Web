<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');  // Halaman utama
});

Route::get('index', function () {
    return view('index');  // Halaman utama
});

Route::get('/profile', function () {
    return view('profile');  // Halaman profile
});

Route::get('/tk', function () {
    return view('tk');  // Halaman tk
});

Route::get('/sd', function () {
    return view('sd');  // Halaman sd
});

Route::get('/galeri', function () {
    return view('galeri');  // Halaman galeri
});

Route::get('/kontak', function () {
    return view('kontak');  // Halaman galeri
});

Route::get('/ist', function () {
    return view('ist');  // Halaman ist
});

