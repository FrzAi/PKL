<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\SlipController;
use App\Http\Controllers\KwintasiController;
use App\Http\Controllers\PengeluaranController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'index']);
Route::get('/cari/kwitansi', [KwintasiController::class, 'cari'])->name('cari');
Route::resource('/slip', SlipController::class);
Route::resource('/kwitansi', KwintasiController::class);
Route::resource('/pengeluaran', PengeluaranController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
