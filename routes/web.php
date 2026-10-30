<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\BukuController;

Route::get('/', [HalamanController::class, 'beranda']);

Route::get('/tentang', [HalamanController::class, 'tentang']);

Route::get('/kategori', [HalamanController::class, 'kategori']);

Route::get('/buku', [BukuController::class, 'index']);

Route::get('/buku/{id}', [BukuController::class, 'detail']);