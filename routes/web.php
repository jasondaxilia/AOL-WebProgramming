<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::post('/artikel', [HomeController::class, 'artikelStore']);
Route::get('/', [HomeController::class, 'index']);
Route::post('/donasi', [HomeController::class, 'donasiStore'])->name('donasi.store');
