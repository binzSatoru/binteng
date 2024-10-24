<?php require 'index1.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Produk</title>
</head>
<body>
    
    <h1>Data Customer</h1>

    <form method="POST" action="">
    <label for="nama">Nama barang : </label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="harga">Harga barang : </label>
        <input type="number" id="harga" name="harga" required><br><br>

        <label for="stok">Stok Awal : </label>
        <input type="number" id="stok" name="stok" required><br><br>

        <label for="barcode">Barcode barang : </label>
        <input type="barcode" id="barcode" name="barcode" required><br><br>

        <label for="exp">Expired barang : </label>
        <input type="text" id="exp" name="exp" required><br><br>

        <label for="pembelian">Jumlah Pembelian : </label>
        <input type="number" id="pembelian" name="pembelian" required><br><br>

        <input type="submit" value="Hitung Stok Akhir">
    </form>

    <?php if ($namaProduk !== null):?>
        <h2>Nama barang : <?php echo $namaProduk; ?></h2>
    <?php endif;?>

    <?php if ($Stokakhir !== null):?>
        <h2>Stok Akhir : <?php echo $Stokakhir; ?></h2>
    <?php endif;?>

</body>
</html>