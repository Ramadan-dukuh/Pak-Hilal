<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Produk</title>
</head>
<body>
    <h2>Form Pemesanan Produk</h2>
    <form action="" method="post">
        <label for="product">Nama Produk:</label><br>
        <input type="text" id="product" name="product" required><br><br>

        <label for="quantity">Jumlah:</label><br>
        <input type="number" id="quantity" name="quantity" required min="1"><br><br>

        <label for="address">Alamat Pengiriman:</label><br>
        <textarea id="address" name="address" rows="4" required></textarea><br><br>

        <input type="submit" value="Pesan Sekarang">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $product = htmlspecialchars($_POST['product']);
        $quantity = (int) $_POST['quantity'];
        $address = ($_POST['address']);

        // Tampilkan ringkasan pemesanan
        echo "<h3>Ringkasan Pemesanan:</h3>";
        echo "<p><strong>Nama Produk:</strong> $product</p>";
        echo "<p><strong>Jumlah:</strong> $quantity</p>";
        echo "<p><strong>Alamat Pengiriman:</strong> $address</p>";
    }
    ?>
</body>
</html>
