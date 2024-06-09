<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JanjiController;
use Illuminate\Http\Request; // Tambahkan ini untuk Request

Route::get('/', [HomeController::class, 'home'])->name('home');

// CRUD pasien
Route::resource('pasien', PasienController::class);

// CRUD dokter
Route::resource('dokter', DokterController::class);

// CRUD janji
Route::resource('janji', JanjiController::class);

// Tidak perlu mendefinisikan route baru untuk menyimpan data janji, gunakan store method di JanjiController

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
