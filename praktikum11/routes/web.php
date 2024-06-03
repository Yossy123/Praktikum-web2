<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitKerjaController;
use App\Models\Dokter;
use App\Models\Periksa;
use Illuminate\Routing\Router;
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

//pasien
Route::get('/admin/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/admin/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/admin/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/admin/pasien/{pasien}', [PasienController::class, 'show'])->name('pasien.show');
Route::get('/admin/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
Route::put('/admin/pasien/{pasien}', [PasienController::class, 'update'])->name('pasien.update');
Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasien.destroy');

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/admin/periksa', [PeriksaController::class, 'index']);

Route::get('/admin/dokter', [DokterController::class, 'index']);

Route::get('/admin/UnitKerja', [UnitKerjaController::class, 'index']);