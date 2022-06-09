<?php 

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$produk = query("SELECT * FROM produk");

// query sesuai dengan keyword pencarian, ketika tombol cari diklik
if(isset($_GET['cari'])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM produk
            WHERE
            kategori LIKE '%$keyword%' OR
            nama_produk LIKE '%$keyword%'
            ";
  $produk = query($query);
}

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
    <title>Data Produk</title>
    <style>
      @media print {
        .navbar-brand, .tambah, .form-cari, .cetak {
          display: none;
        }
      }
    </style>
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
          <form action="" method="get" class="mt-0 ms-auto">
            <div class="d-flex ms-auto my-4 my-lg-0">
              <input type="text" class="form-control me-2" name="keyword" placeholder="Masukkan keyword pencarian.." 
              autocomplete="off" id="keyword">
              <button class="btn btn-outline-primary" type="submit" name="cari" id="tombol-cari">Cari!</button>
            </div>
          </form>
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
          <li class="breadcrumb-item" aria-current="page">Data Produk</li>
        </ol>
      </nav>
    </div>

    <!-- content -->

  <div class="container">
    <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
        
        <a href="tambah-produk.php" class="btn btn-outline-primary mt-2 mb-2">Tambah Data Produk</a>
        <a href="cetak.php" class="cetak btn btn-outline-primary" target="_blank">Cetak</a>
  <div id="container">
    <table border="1" cellspacing="0" class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Gambar</th>
          <th scope="col">Kategori</th>
          <th scope="col">Nama Poduk</th>
          <th scope="col">Harga</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
    <tbody>
    <?php $i = 1; foreach($produk as $p) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td>
          <img src="../tubes/img/produk/<?= $p["gambar"]; ?>" heigth="100" width="100">
      </td>
      <td><?= $p["kategori"]; ?></td>
      <td><?= $p["nama_produk"]; ?></td>
      <td><?= $p["harga"]; ?></td>
      <td><?= $p["deskripsi"]; ?></td>
      <td>
          <a href="ubah-produk.php?id=<?= $p['id_produk'];?>" class="btn badge bg-warning">ubah</a>
          <a href="hapus-produk.php?id=<?= $p['id_produk'];?>" class="btn badge bg-danger"
           onclick="return confirm('yakin?');">hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
  </div>

    </div>
  </div>
    <script src="js/script.js"></script>
  </body>
</html>