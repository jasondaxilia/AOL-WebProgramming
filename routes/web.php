<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DonasiController;
use Illuminate\Support\Facades\Route;

Route::post('/artikel', [ArtikelController::class, 'store']);
Route::get('/', [DonasiController::class, 'getTotalDonation']);
// Route::get('/', [ArtikelController::class, 'getArtikel']);


Route::post('/donasi', [DonasiController::class, 'store'])->name('donasi.store');
