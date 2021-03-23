<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\MhsController;
use App\Http\Controllers\Web\PendaftarController;

Route::get('/', function () {
    return view('welcome');
});
Route::get("register_mhs",[MhsController::class,'create'])->name("register_mhs");
Route::post("register_mhs",[MhsController::class,'store'])->name("registrasi.store");
Route::get("pendaftaran/{id}",[MhsController::class,'show'])->name("pendaftaran.show");
Route::resource("pendaftar",PendaftarController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
