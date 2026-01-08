<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO barang VALUES (
        NULL,'$nama','$kategori','$harga','$stok','$tanggal'
    )";

    mysqli_query($koneksi, $sql);
    header("Location: tampilDataBarang.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form Input Data Barang</h2>
<form method="post" action="simpanDataBarang.php" onsubmit="return validateForm()">
    Nama Barang <input type="text" name="nama" required><br>
    Kategori 
    <select name="kategori"><br>
    <option>Bahan Baku</option>
    <option>Alat</option>
    <option>Kemasan</option>
    </select>
    Harga <input type="number" name="harga" required><br>
    Stok <input type="number" name="stok" required><br>
    Tanggal Masuk <input type="date" name="tanggal"><br>
    <button name="simpan">Simpan</button>
</form>
<script src="script.js"></script>
</body>
</html>