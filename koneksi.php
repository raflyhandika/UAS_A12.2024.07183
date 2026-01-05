<?php
$koneksi = mysqli_connect("localhost", "root", "", "toko_roti");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
