<?php 

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$data_profil = query("SELECT * FROM data_profil");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <title>Profil</title>
  </head>
  <body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/img0.png" alt="" width="50" height="50" class="me-2 rounded-circle" />
          TOKO <strong>KU</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profil.php">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produk.php">Data Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

     <!-- breadcrumb -->

    <div class="container">
      <nav aria-label="breadcrumb" style="background-color: #fff" class="mt-3">
        <ol class="breadcrumb p-3">
          <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Beranda</a></li>
          <li class="breadcrumb-item" aria-current="page">Profil</li>
        </ol>
      </nav>
    </div>

    <!-- content -->
    
    <div class="container">
      <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
<div class="mt-2">
 <table border="1" cellspacing="0" class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; foreach($data_profil as $dp) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $dp["nama"]; ?></td>
      <td><?= $dp["username"]; ?></td>
      <td><?= $dp["password"]; ?></td>
      <td><?= $dp["email"]; ?></td>
      <td><?= $dp["alamat"]; ?></td>
        <td>
          <a href="ubah.php?id=<?= $dp['id'];?>" class="btn badge bg-warning">ubah</a>
          <a href="hapus.php?id=<?= $dp['id'];?>" class="btn badge bg-danger"
           onclick="return confirm('yakin?');">hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
 </table>
</div>

      </div>
    </div>
  </body>
</html>