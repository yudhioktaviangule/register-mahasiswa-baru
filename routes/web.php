<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\MhsController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get("register_mhs",[MhsController::class,'create'])->name("register_mhs");
Route::post("register_mhs",[MhsController::class,'store'])->name("registrasi.store");
Route::get("pendaftaran/{id}",[MhsController::class,'show'])->name("pendaftaran.show");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
