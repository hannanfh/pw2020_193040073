<?php
require 'functions.php';

$id = $_GET['Id'];

$m = query("SELECT * FROM mahasiswa WHERE Id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <H5>DETAIL MAHASISWA</H5>
  <ul>
    <img src="img/<?= $m['Gambar']; ?>" width="500">
    <li>Nrp : <?= $m['Nrp']; ?></li>
    <li>Nama : <?= $m['Nama']; ?></li>
    <li>Email : <?= $m['Email']; ?></li>
    <li>Jurusan : <?= $m['Jurusan']; ?></li>
    <li><a href="ubah.php?Id=<?= $m['Id']; ?>">ubah</a> | <a href="hapus.php?Id=<?= $m['Id']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?');">hapus</a></li>
    <li><a href="index.php">kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>