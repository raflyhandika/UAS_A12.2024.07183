<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $nama     = htmlspecialchars($_POST['nama']);

    $query = mysqli_query($koneksi, 
        "INSERT INTO users (nama, username, password) 
         VALUES ('$nama', '$username', '$password')");

    if ($query) {
        echo "<script>alert('Registrasi berhasil');window.location='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Registrasi Akun</h2>
<form method="post">
    <input type="text" name="nama" placeholder="Nama Lengkap" required><br><br>
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="register">Daftar</button>
</form>
<script src="script.js"></script>
</body>
</html>
