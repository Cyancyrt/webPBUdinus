<?php 
// Koneksi database
$conn = mysqli_connect("localhost",  "root", "", "a11202315022");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>