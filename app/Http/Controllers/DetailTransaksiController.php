<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailTransaksiController extends Controller
{
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('transaction_id');
            $table->integer('quantity');
            $table->decimal('price_at_sale', 10, 2);
            $table->string('product_id');

            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
}
