<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DonasiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('Home');
// });

Route::post('/artikel', [ArtikelController::class, 'store']);
Route::get('/', [ArtikelController::class, 'getArtikel'])->name('home');
// Route::get('/', [DonasiController::class, 'getTotalDonation']);
Route::post('/donasi', [DonasiController::class, 'store'])->name('donasi.store');
