<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Tambahkan blok ini agar alamat /api/documentation bisa diakses
Route::get('/api/documentation', function () {
    return view('l5-swagger::index'); // Pastikan view ini tersedia dari package Anda
});