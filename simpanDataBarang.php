<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $harga = intval($_POST['harga']);
    $stok = intval($_POST['stok']);
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO barang (nama_barang, kategori, harga, stok, tanggal) 
              VALUES ('$nama', '$kategori', '$harga', '$stok', '$tanggal')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: tampilDataBarang.php?pesan=success");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    header("Location: tambahBarang.php");
    exit;
}
?>
.