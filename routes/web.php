<?php

use Illuminate\Support\Facades\Route;

Route::get('/Selamat-Datang', function () {
    return view('welcome');
});

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/kontak', function () {
    return view('halamankontak');
});