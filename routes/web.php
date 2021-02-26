<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontand.welcome');
});
//FRONTEND
use App\Http\Controllers\frontandController;
Route::resource('/',frontandController::class);

Route::get('/admin', function () {
    return view('/halamanutama');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/// PROVINSI
use App\Http\Controllers\ProvinsiController;
Route::resource('provinsi', ProvinsiController::class);

use App\Http\Controllers\KotaController;
Route::resource('kota', KotaController::class);

use App\Http\Controllers\KecamatanController;
Route::resource('kecamatan', KecamatanController::class);

use App\Http\Controllers\KelurahanController;
Route::resource('kelurahan', KelurahanController::class);

use App\Http\Controllers\RwController;
Route::resource('rw', RwController::class);

use App\Http\Controllers\Kasus2Controller;
Route::resource('kasus2', Kasus2Controller::class);

use App\Http\Controllers\NegaraController;
Route::resource('negara', NegaraController::class);

use App\Http\Controllers\KasusController;
Route::resource('kasus', KasusController::class);

// livewire

Route::view('states-city','livewire.home');