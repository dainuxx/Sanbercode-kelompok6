<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JanjiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class,'home']);

// ke dashboard
Route::get('/dashboard', function(){
    return view('welcome');
});

// crud pasien
Route::resource('pasien', PasienController::class);

//crud dokter
Route::get('/', function () {
    return view('welcome');
});

Route::resource('dokter', DokterController::class);

//crud janji
Route::get('/', function () {
    return view('welcome');
});

Route::resource('janji', JanjiController::class);