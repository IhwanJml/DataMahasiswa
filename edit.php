

<link rel="stylesheet" href="style.css">
<div class="container">
<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'"));
?>



<form action="" method="post" enctype="multipart/form-data">
Nama: <input type="text" name="nama" value="<?= $data['nama']; ?>"><br>
NIM: <input type="text" name="nim" value="<?= $data['nim']; ?>"><br>
Hobi: <input type="text" name="hobi" value="<?= $data['hobi']; ?>"><br>
Prodi: <input type="text" name="prodi" value="<?= $data['prodi']; ?>"><br>
Foto: <input type="file" name="foto"><br>
<img src="upload/<?= $data['foto']; ?>" class="profile-img">
<input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $hobi = $_POST['hobi'];
    $prodi = $_POST['prodi'];

    if ($_FILES['foto']['name'] != "") {
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        move_uploaded_file($tmp, "upload/".$foto);
    } else {
        $foto = $data['foto'];
    }

    mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', hobi='$hobi', prodi='$prodi', foto='$foto' WHERE id='$id'");
    echo "<script>alert('Data diupdate'); window.location='index.php';</script>";
}
?>
