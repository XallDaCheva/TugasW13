<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description" required></textarea><br>

        <label for="price">Harga:</label>
        <input type="number" name="price" id="price" required><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
