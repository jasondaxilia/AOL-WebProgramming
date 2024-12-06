<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

// Route::post('/InputArtikel', [ArtikelController::class, 'InsertArtikel']);

Route::get('/inputartikel', function () {
    return view('InputArtikel');
});

Route::resource("/InputArtikel", ArtikelController::class);
