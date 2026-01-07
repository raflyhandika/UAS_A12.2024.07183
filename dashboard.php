<?php
session_start();

// proteksi halaman
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
        }
        header {
            background: #2c3e50;
            color: white;
            padding: 15px;
        }
        .container {
            padding: 20px;
        }
        .card {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0,0,0,.1);
        }
        .menu a {
            display: inline-block;
            margin: 10px 10px 0 0;
            padding: 10px 15px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .menu a.logout {
            background: #e74c3c;
        }
    </style>
</head>
<body>

<header>
    <h2>Dashboard Sistem Pencatatan Barang Toko Roti</h2>
    <p>Selamat datang, <b><?= htmlspecialchars($user['nama']) ?></b></p>
</header>

<div class="container">

    <div class="card">
        <h3>Menu Utama</h3>
        <div class="menu">
            <a href="tambahBarang.php">Input Data Barang</a>
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </div>

    <div class="card">
        <h3>Informasi Akun</h3>
        <p><b>Nama:</b> <?= htmlspecialchars($user['nama']) ?></p>
        <p><b>Username:</b> <?= htmlspecialchars($user['username']) ?></p>
    </div>

</div>

</body>
</html>
