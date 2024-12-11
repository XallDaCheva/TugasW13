<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'products'; // Sesuaikan dengan nama tabel
    protected $fillable = ['name', 'description', 'price'];

    public function transactionDetails()
    {
        return $this->hasMany(DetailTransaksi::class, 'product_id', 'id');
    }
}

