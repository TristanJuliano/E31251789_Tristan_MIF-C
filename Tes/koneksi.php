<?php
$host = "localhost";
$user = "root";
$pass = "";

/* Koneksi awal tanpa database */
$conn = mysqli_connect($host, $user, $pass);

if(!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}

/* Buat database jika belum ada */
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS hmjti");

/* Pilih database */
mysqli_select_db($conn, "hmjti");

/* Buat tabel jika belum ada */
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    nim VARCHAR(20),
    prodi VARCHAR(100),
    domisili VARCHAR(100)
)");
?>
