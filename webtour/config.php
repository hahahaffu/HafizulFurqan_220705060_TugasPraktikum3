<?php
// Koneksi ke database
$host = 'localhost'; // ganti dengan host jika berbeda
$username = 'root'; // ganti dengan username Anda
$password = ''; // ganti dengan password Anda
$dbname = 'efootball'; // nama database

$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {     
    die("Connection failed: " . $conn->connect_error);
}
?>
