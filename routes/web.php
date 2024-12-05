<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/', [ArtikelController::class, '']);

Route::get('/artikel', [ArtikelController::class, 'index']);

Route::get('/Input-Artikel', function () {
    return view('InputArtikel');
});
