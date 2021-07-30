<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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
// Route::resource('home', HomeController::class);
Route::get('home', [HomeController::class, 'index']);
Route::get('home/detail_kategori', [HomeController::class, 'detail_kategori']);
Route::get('home/detail_produk', [HomeController::class, 'detail_produk']);
Route::get('home/keranjang', [HomeController::class, 'keranjang']);
Route::get('home/checkout', [HomeController::class, 'checkout']);

//AUTH
Route::get('auth', [AuthController::class, 'index']);
Route::get('auth/register', [AuthController::class, 'register']);
Route::post('auth/postregister', [AuthController::class, 'postregister']);
Route::post('auth/postlogin', [AuthController::class, 'postlogin']);
Route::get('auth/admin', [AuthController::class, 'admin']);
Route::get('auth/logout', [AuthController::class, 'logout']);

//PRODUK ADMIN
Route::resource('produk', ProdukController::class);
Route::post('produk/insertKategori', [ProdukController::class, 'insertKategori']);