
<link rel="stylesheet" href="style.css">
<div class="container">
<?php include "koneksi.php"; ?>


<a href="tambah.php" class="btn">+ Tambah Mahasiswa</a>

<table border="1" cellpadding="10">
<tr>
    <th>No</th><th>Foto</th><th>Nama</th><th>NIM</th><th>Hobi</th><th>Prodi</th><th>Aksi</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
while ($d = mysqli_fetch_assoc($data)) {
?>
<tr>
    <td><?= $no++; ?></td>
    <td><img src="upload/<?= $d['foto']; ?>" class="profile-img"></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['nim']; ?></td>
    <td><?= $d['hobi']; ?></td>
    <td><?= $d['prodi']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id']; ?>">Edit</a>
        <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
