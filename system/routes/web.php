<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;

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
    // Route::get('dashboard', [BerandaController::class, 'dashboard']);
});
