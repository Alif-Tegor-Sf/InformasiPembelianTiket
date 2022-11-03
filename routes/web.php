<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use app\Http\Controllers\PemesananController;
use app\Http\Controllers\PembayaranCtroller;
use app\Http\Controllers\CetakController;
use app\Http\Controllers\AuthController;
use app\Http\Controllers\DashboardController;
use app\Http\Controllers\Admin;

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

// Route::get('Home', function () {
// });

Route::get('Pemesanan', function () {
});
   
Route::get('Pembayaran', function () {
});

Route::get('Cetak', function () {

    return view('/Cetak');
});

Route::get('', function () 
{
    return view('Home');
});




Route::get('Home', [App\Http\Controllers\HomeController::class, 'Home'])->name('Home');
Route::get('/Pemesanan', [App\Http\Controllers\PemesananController::class, 'Pemesanan'])->name('Pemesanan');
Route::get('/Pembayaran', [App\Http\Controllers\PembayaranController::class, 'Pembayaran'])->name('Pembayaran');
Route::get('/Cetak', [App\Http\Controllers\CetakController::class, 'Cetak'])->name('Cetak');

//auth
Route::get('/login',[App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::Post('/login',[App\Http\Controllers\AuthController::class, 'authenticated']);
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout']);
 
//dashboardAdmin
Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth');
