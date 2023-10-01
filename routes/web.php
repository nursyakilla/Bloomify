<?php

use App\Http\Controllers\ProfileController;
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
    //return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('user', 'App\Http\Controllers\UserController');
Route::resource('pembeli', 'App\Http\Controllers\PembeliController');
Route::resource('produk', 'App\Http\Controllers\ProdukController');
Route::resource('pesanan', 'App\Http\Controllers\PesananController');
Route::resource('laser','App\Http\Controllers\LaporanUserController');
Route::resource('lali','App\Http\Controllers\LaporanPembeliController');
Route::resource('laprok','App\Http\Controllers\LaporanProdukController');
Route::resource('lanan','App\Http\Controllers\LaporanPesananController');

//cetak pdf
Route::get('cetak_user','App\Http\Controllers\LaporanUserController@cetak_user')->name('cetak_user');
Route::get('cetak_pembeli','App\Http\Controllers\LaporanPembeliController@cetak_pembeli')->name('cetak_pembeli');
Route::get('cetak_produk','App\Http\Controllers\LaporanProdukController@cetak_produk')->name('cetak_produk');
Route::get('cetak_pesanan','App\Http\Controllers\LaporanPesananController@cetak_pesanan')->name('cetak_pesanan');