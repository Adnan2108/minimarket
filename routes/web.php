<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BiodataController;

Route::get('/', function () {
    return redirect('login');
});

// Biodata

Route::middleware(['auth'])->group( function(){

Route::get('/biodata', [BiodataController::class,"index"])->name("biodata.index");

Route::get('/biodata/create', [BiodataController::class,"create"])->name("biodata.create");

Route::POST('/biodata', [BiodataController::class,"store"])->name("biodata.store");

Route::delete('/biodata/{id}', [BiodataController::class,"destroy"])->name("biodata.destroy");

Route::get('/biodata/{id}/edit', [BiodataController::class,"edit"])->name("biodata.edit");

Route::put('/biodata/{id}', [BiodataController::class,"update"])->name("biodata.update");

// User

Route::get('/user', [UserController::class,"index"])->name("user.index");

Route::get('/user/create', [UserController::class,"create"])->name("user.create");

Route::POST('/user', [UserController::class,"store"])->name("user.store");

Route::delete('/user/{id}', [UserController::class,"destroy"])->name("user.destroy");

Route::get('/user/{id}/edit', [UserController::class,"edit"])->name("user.edit");

Route::put('/user/{id}', [UserController::class,"update"])->name("user.update");

// Barang

Route::get('/barang', [BarangController::class,"index"])->name("barang.index");

Route::get('/barang/create', [BarangController::class,"create"])->name("barang.create");

Route::POST('/barang', [BarangController::class,"store"])->name("barang.store");

Route::delete('/barang/{id}', [BarangController::class,"destroy"])->name("barang.destroy");

Route::get('/barang/{id}/edit', [BarangController::class,"edit"])->name("barang.edit");

Route::put('/barang/{id}', [BarangController::class,"update"])->name("barang.update");

});

Auth::routes([
    'register'=>false,
'reset' =>false,
'verify' =>false
]);
