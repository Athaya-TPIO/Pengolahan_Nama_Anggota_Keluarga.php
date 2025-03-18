<?php
$mysqli = new mysqli("localhost", "root", "", "db_webproject", 3307);

// Cek koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
?>
