<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controller\HomeController;
use app\Http\Controller\PemesananController;
use app\Http\Controller\PembayaranCtroller;
use app\Http\Controller\CetakController;

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