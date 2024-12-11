<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProdukController extends Controller
{    
    public function create()
    {
        return view('products.create');
    }

    // Menyimpan data produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Produk::create($request->all());
        return redirect()->route('overview')->with('success', 'Produk berhasil ditambahkan.');
    }

    // Menampilkan form edit produk
    public function edit($id)
    {
        $product = Produk::findOrFail($id);
        return view('products.create', compact('product'));
    }

    // Mengupdate data produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product = Produk::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('overview')->with('success', 'Produk berhasil diperbarui.');
    }

    // Menghapus data produk
    public function destroy($id)
    {
        $product = Produk::findOrFail($id);
        $product->delete();
        return redirect()->route('overview')->with('success', 'Produk berhasil dihapus.');
    }
}
