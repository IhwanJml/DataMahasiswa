<link rel="stylesheet" href="style.css">
<div class="container">


<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_mahasiswa");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
    
}

?>
