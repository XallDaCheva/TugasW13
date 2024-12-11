<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
</head>
<body>
    <h1>Tambah Transaksi</h1>
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <label for="total_amount">Total Amount:</label>
        <input type="number" name="total_amount" id="total_amount" required><br>

        <h3>Detail Transaksi</h3>
        <label for="product_id">Produk:</label>
        <select name="product_id" id="product_id">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select><br>

        <label for="quantity">Jumlah:</label>
        <input type="number" name="quantity" id="quantity" required><br>

        <label for="price_at_sale">Harga Saat Transaksi:</label>
        <input type="number" name="price_at_sale" id="price_at_sale" required><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
