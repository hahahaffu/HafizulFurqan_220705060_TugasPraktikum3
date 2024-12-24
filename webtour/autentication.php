<?php
session_start();
include('config.php');

$username = mysqli_real_escape_string($conn, $_POST["username"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

// Query untuk memeriksa username dan password di tabel login
$query = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query) == 1) {
    // Jika login berhasil, arahkan ke dashboard.html
    $user = mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['level'] = $user['level'];
    header("Location: dashboard.html");
    exit();
} else {
    // Jika login gagal, redirect ke halaman login dengan error 1
    header("Location: ../index.php?error=1");
    exit();
}
?>
