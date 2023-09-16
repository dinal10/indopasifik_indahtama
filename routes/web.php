<?php

use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\TransTitipController;
use App\Http\Controllers\TransSewaController;
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
Auth::routes();
Route::resource('transTitip', TransTitipController::class);
Route::resource('transSewa', TransSewaController::class);
Route::get('/',[SesiController::class,'index']);
Route::post('/',[SesiController::class,'login']);
Route::resource('kendaraan', KendaraanController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
