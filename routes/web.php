<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/profesi/dokter',[\App\Http\Controllers\DokterController::class,'dokter']);
Route::get('/profesi/detail/{id}',[\App\Http\Controllers\DokterController::class,'showdokter']);

Route::get('/rs/rumahsakit', [\App\Http\Controllers\RumahSakitController::class, 'rs']);
