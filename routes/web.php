<?php

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


Route::get('/', function () {
    return view('welcome');
});
Route::get("halo", function() {
    return "Selamat datang di belajar laravel";
});
Route::get("blog", function(){
    return view("blog");
});
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DosenController;

Route::get('/pegawai/{nama}', [PegawaiController::class, 'Index']);

Route::get('/dosen', [DosenController::class, 'Index']);
Route::get('dosen/{namadosen}', [DosenController::class, 'Index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);