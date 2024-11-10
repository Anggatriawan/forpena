<?php
$servername = "localhost";
$username = "root";  // Ganti dengan username database Anda
$password = "1234";  // Ganti dengan password database Anda
$dbname = "forpena";  // Nama database yang ingin digunakan

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
