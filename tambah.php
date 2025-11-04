<form action="" method="post" enctype="multipart/form-data">
Nama: <input type="text" name="nama"><br>
NIM: <input type="text" name="nim"><br>
Hobi: <input type="text" name="hobi"><br>
Prodi: <input type="text" name="prodi"><br>
Foto: <input type="file" name="foto"><br>
<input type="submit" name="submit" value="Simpan">
</form>
<link rel="stylesheet" href="style.css">
<div class="container">


<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $hobi = $_POST['hobi'];
    $prodi = $_POST['prodi'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "upload/".$foto);

    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('', '$nama', '$nim', '$hobi', '$prodi', '$foto')");
    echo "<script>alert('Data disimpan'); window.location='index.php';</script>";
}
?>
