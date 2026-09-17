<?php
include "includes/cek_session.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard SIMPEN</title>
</head>
<body>

    <h1>Dashboard SIMPEN</h1>

    <p>
        Selamat datang,
        <strong><?php echo $_SESSION['nama_pengguna']; ?></strong>
    </p>

    <p>
        Email:
        <?php echo $_SESSION['email']; ?>
    </p>

    <p>
        Peran:
        <?php echo $_SESSION['peran']; ?>
    </p>

    <hr>

    <h3>Menu</h3>

    <ul>
        <a href="data_produk.php"><li>Data Produk</a></li>
        <a href="data_pelanggan.php">Data Pelanggan</a>
        <a href="stok_barang.php">Stok Barang</a>
        <a href="transaksi.php"></a>Transaksi Penjualan</li>
    </ul>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>