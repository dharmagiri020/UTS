<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\StockPemesananController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\KelolaPelangganController;
use App\Models\KelompokTani;
use App\Http\Controllers\PanenController;
use App\Models\Petani;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/pemesanan',[StockPemesananController::class,'index'])->name('product');
Route::get('/stock_pemesanan/detail/{idpemesanan}',[StockPemesananController::class,'detail']);
Route::get('/stock_pemesanan/add', [StockPemesananController::class,'add']);
Route::get('/stock_pemesanan/ubah/{idproduk}', [StockPemesananController::class,'ubah']);
Route::get('/stock_pemesanan/hapus/{idproduk}', [StockPemesananController::class,'hapus']);
Route::post('/stock_pemesanan/insert', [StockPemesananController::class,'insert']);
Route::post('/stock_pemesanan/update/{idproduk}', [StockPemesananController::class,'update']);
Route::get('/stock_pemesanan',[StockPemesananController::class,'index']);
Route::get('/barang_masuk',[BarangMasukController::class,'index']);
Route::get('/kelola_pelanggan',[KelolaPelangganController::class,'index']);
Route::resource('panen',PanenController::class);
Route::get('/addPanen', [PanenController::class,'create']);
Route::get('/addpanen',[PanenController::class, 'create']);
Route::post('/addpanen/store',[PanenController::class, 'store']);
Route::get('/petani', [PetaniController::class, 'index']);
Route::get('/addPetani', [PetaniController::class, 'create']);
Route::get('/Petani/detail/{id_petani}', [PetaniController::class, 'detail']);