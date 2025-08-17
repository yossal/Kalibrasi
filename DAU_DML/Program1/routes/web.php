<?php

use Illuminate\Support\Facades\Route;

Route::get('/{jenis}/{divisi}', function ($jenis, $divisi) {
    return "Halaman $jenis - Divisi $divisi";
});

Route::get('/login', function () {
    return view('login'); // login.blade.php di folder resources/views
})->name('login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin'); // login.blade.php di folder resources/views
})->name('admin');