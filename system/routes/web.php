<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\PasienController;

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


// buat login usernamenye 'user1' password nye '123'

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login',[AuthController::class,'prosesLogin']);
Route::get('logout', [AuthController::class, 'logout']);

//nnti suai kan yak url yang mau kau pake ini cume nyobe
Route::middleware('auth')->group(function () {
  Route::get('/', [BerandaController::class, 'dashboard']);
  Route::get('periksa-data', [BerandaController::class, 'periksaData']);
  Route::post('periksa-data', [BerandaController::class, 'storePeriksaData']);
  Route::get('periksa-pasien', [BerandaController::class, 'periksaPasien']);
    // Route::get('dashboard', [BerandaController::class, 'dashboard']);



  Route::controller(PemeriksaanController::class)->group(function () {
    Route::get('pemeriksaan', 'index');
    Route::get('pemeriksaan/{pasien}/cek-pasien', 'cek');
    Route::get('pemeriksaan/{pasien}/detail', 'show');
    Route::put('pemeriksaan/{pasien}/proses', 'proses');
    Route::get('pemeriksaan/create', 'create');
    Route::post('pemeriksaan/create', 'store');
  });

  Route::controller(PasienController::class)->group(function () {
    Route::get('pasien', 'index');
    Route::get('pasien/{pasien}/history', 'history');
  });
});
