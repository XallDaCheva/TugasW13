<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaction'; // Sesuaikan dengan nama tabel
    protected $fillable = ['date', 'total_amount'];

    public function transactionDetails()
    {
        return $this->hasMany(DetailTransaksi::class, 'transaction_id', 'id');
    }
}

