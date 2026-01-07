<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tampil Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<h2>Data Barang Toko Roti</h2>
<link rel="stylesheet" href="style.css">
<a href="dashboard.php">Dashboard</a><br><br>
<a href="tambahBarang.php">+ Tambah Barang</a><br><br>
<a href="cetak_pdf.php" target="_blank">Cetak Laporan</a>

<table border="1" cellpadding="8">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Tanggal Masuk</th>
    <th>Aksi</th><br><br>
</tr>

<?php
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM barang");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $d['nama_barang'] ?></td>
    <td><?= $d['kategori'] ?></td>
    <td><?= $d['harga'] ?></td>
    <td><?= $d['stok'] ?></td>
    <td><?= $d['tanggal'] ?></td>
    <td>
        <a href="editBarang.php?id=<?= $d['id_barang'] ?>">Edit</a>
        <a href="hapusBarang.php?id=<?= $d['id_barang'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
<script src="script.js"></script>
</table>

.