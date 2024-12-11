<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'transaction_details'; // Sesuaikan dengan nama tabel
    protected $fillable = ['transaction_id', 'quantity', 'price_at_sale', 'product_id'];

    public function transaction()
    {
        return $this->belongsTo(Transaksi::class, 'transaction_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Produk::class, 'product_id', 'id');
    }
}

