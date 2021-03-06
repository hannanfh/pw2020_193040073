<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$id = $_GET['Id'];

$m = query("SELECT * FROM mahasiswa WHERE Id = $id");

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Detail!</title>
  <style>
    .container1 {
      margin-left: 20%;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <!-- Just an image -->
  <nav class="navbar navbar-light bg-info">
    <a class="navbar-brand" href="#">
      <img src="img/if.png" width="120">
    </a>
  </nav>
  <!-- akhir nav -->
  <!-- Card -->
  <br> <br> <br>
  <div class="container1">
    <div class="card mt-5" style="max-width: 840px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="img/<?= $m['Gambar']; ?>" class="card-img">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <p class="card-text">
              <p>Nrp : <?= $m['Nrp']; ?></p>
              <p>Nama : <?= $m['Nama']; ?></p>
              <p>Email : <?= $m['Email']; ?></p>
              <p>Jurusan : <?= $m['Jurusan']; ?></p>
              <p><a href="ubah.php?Id=<?= $m['Id']; ?>">ubah</a> | <a href="hapus.php?Id=<?= $m['Id']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?');">hapus</a></p>
              <a href="index.php">kembali ke daftar mahasiswa</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir card -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>