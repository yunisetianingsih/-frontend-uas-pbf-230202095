<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'dashboard')->name('dashboard');

Route::get('/obat', [App\Http\Controllers\ObatController::class, 'index'])->name('obat.index');
Route::get('/obat/create', [App\Http\Controllers\ObatController::class, 'create'])->name('obat.create');
Route::post('/obat/store', [App\Http\Controllers\ObatController::class, 'store'])->name('obat.store');
Route::get('/obat/edit/{id}', [App\Http\Controllers\ObatController::class, 'edit'])->name('obat.edit');
Route::put('/obat/update/{id}', [App\Http\Controllers\ObatController::class, 'update'])->name('obat.update');
Route::delete('/obat/delete/{id}', [App\Http\Controllers\ObatController::class, 'delete'])->name('obat.delete');


Route::get('/pasien', [App\Http\Controllers\PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/create', [App\Http\Controllers\PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [App\Http\Controllers\PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/edit/{id}', [App\Http\Controllers\PasienController::class, 'edit'])->name('pasien.edit');
Route::put('/pasien/update/{id}', [App\Http\Controllers\PasienController::class, 'update'])->name('pasien.update');
Route::delete('/pasien/delete/{id}', [App\Http\Controllers\PasienController::class, 'delete'])->name('pasien.delete');
