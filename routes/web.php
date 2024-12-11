<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProdukController;

Route::get('/overview', [TransaksiController::class, 'overview'])->name('overview');
// Produk
Route::get('/products/create', [ProdukController::class, 'create'])->name('products.create');
// Transaksi
Route::get('/transactions/create', [TransaksiController::class, 'create'])->name('transactions.create');

Route::resource('products', ProdukController::class);