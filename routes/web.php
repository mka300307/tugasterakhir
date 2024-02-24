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
})->middleware('guest');

Route::group(['prefix'=>"/profesi"],function (){
    Route::get('/dokter',[\App\Http\Controllers\DokterController::class,'dokter'])->middleware('auth');
    Route::get('/detail/{id}',[\App\Http\Controllers\DokterController::class,'showdokter'])->middleware('guest');
    Route::get('/create',[\App\Http\Controllers\DokterController::class,'create'])->middleware('auth');
    Route::post('/add',[\App\Http\Controllers\DokterController::class,'store'])->middleware('auth');
});

Route::group(['prefix'=>"/spesial"],function (){
   Route::get('/all',[\App\Http\Controllers\SpesialController::class,'index'])->middleware('auth');
   Route::get('/create',[\App\Http\Controllers\SpesialController::class,'create'])->middleware('auth');
   Route::post('/add',[\App\Http\Controllers\SpesialController::class,'store'])->middleware('auth');
   Route::get('/edit/{id}',[\App\Http\Controllers\SpesialController::class,'edit'])->middleware('auth');
   Route::post('/update/{id}',[\App\Http\Controllers\SpesialController::class,'update'])->middleware('auth');
   Route::delete('/delete/{id}',[\App\Http\Controllers\SpesialController::class,'destroy'])->middleware('auth');
})->middleware('auth');


Route::group(['prefix'=>"/dashbord"],function (){
    Route::get('/',[\App\Http\Controllers\DashbordController::class,'index'])->middleware('auth');
    Route::get("/detail/{id}",[\App\Http\Controllers\DashbordController::class,'detail'])->middleware('auth');
    Route::get("/filter",[\App\Http\Controllers\DashbordController::class,'filter'])->middleware('auth');
    Route::get("/create",[\App\Http\Controllers\DashbordController::class,'create'])->middleware('auth');
    Route::post("/add",[\App\Http\Controllers\DashbordController::class,'store'])->middleware('auth');
    Route::get('/edit/{id}',[\App\Http\Controllers\DashbordController::class,'edit'])->middleware('auth');
    Route::post('/update/{id}',[\App\Http\Controllers\DashbordController::class,'update'])->middleware('auth');
    Route::delete('/hapus/{id}',[\App\Http\Controllers\DashbordController::class,'destroy'])->middleware('auth');
});

Route::get('/login',[\App\Http\Controllers\LoginController::class,'show'])->middleware('guest')->name('login');
Route::post('/login/in',[\App\Http\Controllers\LoginController::class,'authenticate']);
Route::post('/logout',[\App\Http\Controllers\LoginController::class,'logout']);

Route::get('/register',[\App\Http\Controllers\RegisterController::class,'show'])->middleware('guest');
Route::post('/register/add',[\App\Http\Controllers\RegisterController::class,'store']);






Route::get('/rs/rumahsakit', [\App\Http\Controllers\RumahSakitController::class, 'rs']);
