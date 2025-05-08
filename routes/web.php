<?php

use App\Http\Controllers\ProduksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibitController;
use App\Http\Controllers\PakanController;
use App\Http\Controllers\PanenController;

Route::get('/', function () {
    return view('home');
});

// Rute Produksi
Route::get('/produksi', [ProduksiController::class, 'index'])->name('produksi');

// Rute Bibit
Route::post('/bibit/store', [BibitController::class, 'store'])->name('bibit.store');
Route::get('/bibit/{id}/edit', [BibitController::class, 'edit'])->name('bibit.edit');
Route::put('/bibit/{id}', [BibitController::class, 'update'])->name('bibit.update');
Route::delete('/bibit/{id}', [BibitController::class, 'destroy'])->name('bibit.destroy');

// Rute Pakan
Route::post('/pakan/store', [PakanController::class, 'store'])->name('pakan.store');
Route::get('/pakan/{id}/edit', [PakanController::class, 'edit'])->name('pakan.edit');
Route::put('/pakan/{id}', [PakanController::class, 'update'])->name('pakan.update');
Route::delete('/pakan/{id}', [PakanController::class, 'destroy'])->name('pakan.destroy');

// Rute Panen
Route::post('/panen/store', [PanenController::class, 'store'])->name('panen.store');
Route::get('/panen/{panen}/edit', [PanenController::class, 'edit'])->name('panen.edit');
Route::put('/panen/{panen}', [PanenController::class, 'update'])->name('panen.update');
Route::delete('/panen/{id}', [PanenController::class, 'destroy'])->name('panen.destroy');

