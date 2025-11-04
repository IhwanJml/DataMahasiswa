
<link rel="stylesheet" href="style.css">
<div class="container">

<?php

include "koneksi.php";
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");
echo "<script>alert('Data dihapus'); window.location='index.php';</script>";
?>
