<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id'");
$d = mysqli_fetch_array($data);

if (isset($_POST['update'])) {
    mysqli_query($koneksi, "UPDATE barang SET
        nama_barang='$_POST[nama]',
        kategori='$_POST[kategori]',
        harga='$_POST[harga]',
        stok='$_POST[stok]'
        WHERE id_barang='$id'
    ");
    header("Location: tampilDataBarang.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Data Barang</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Form Update Data Barang</h2>
<form method="post">
    Nama <input type="text" name="nama" value="<?= $d['nama_barang'] ?>"><br>
    Kategori <input type="text" name="kategori" value="<?= $d['kategori'] ?>"><br>
    Harga <input type="number" name="harga" value="<?= $d['harga'] ?>"><br>
    Stok <input type="number" name="stok" value="<?= $d['stok'] ?>"><br>
    <button name="update">Update</button>
</form>
