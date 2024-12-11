<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiController extends Controller
{
    public function overview()
    {
        // Ambil semua data produk
        $products = Produk::all();

        // Ambil semua transaksi beserta detailnya
        $transactions = Transaksi::with('details.product')->get();

        return view('overview', compact('products', 'transactions'));
    }

    public function create()
    {
        $products = Produk::all(); // Kirimkan produk untuk dropdown
        return view('transactions.create', compact('products'));
    }
}
