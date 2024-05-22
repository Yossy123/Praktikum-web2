<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// buat route kabar dengan view kondisi
Route::get('/kabar', function () {
    return view('kabar');
});

// buat route nilai dengan view nilai
Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/pasien', [PasienController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);