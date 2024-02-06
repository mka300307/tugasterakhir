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



Route::group(['prefix'=>"/profesi"],function (){
    Route::get('/dokter',[\App\Http\Controllers\DokterController::class,'dokter']);
    Route::get('/detail/{id}',[\App\Http\Controllers\DokterController::class,'showdokter']);
    Route::get('/create',[\App\Http\Controllers\DokterController::class,'create']);
    Route::post('/add',[\App\Http\Controllers\DokterController::class,'store']);
});

Route::group(['prefix'=>"/spesial"],function (){
   Route::get('/all',[\App\Http\Controllers\SpesialController::class,'index']);
   Route::get('/create',[\App\Http\Controllers\SpesialController::class,'create']);
   Route::post('/add',[\App\Http\Controllers\SpesialController::class,'store']);
});

Route::get('/login',[\App\Http\Controllers\LoginController::class,'show']);
Route::get('/register',[\App\Http\Controllers\RegisterController::class,'show']);






Route::get('/rs/rumahsakit', [\App\Http\Controllers\RumahSakitController::class, 'rs']);
