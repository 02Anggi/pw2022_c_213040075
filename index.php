<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <title>TOKO KU</title>
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

    <!-- content -->

    <div class="container mt-5">
      <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
        <h5 class="text-center" style="margin-top: 5px">Selamat Datang Muhammad Anggi Kusuma di TOKO KU</h5>
      </div>
    </div>

    <!-- footer -->

    <footer class="bg-light p-5 mt-5 text-center">
      <p>
        Copyright &copy; 2021 |
        <a href="https://www.instagram.com/invites/contact/?i=ayc5hb6mcwm1&utm_content=27bhzx4" class="text-decoration-none text-dark fw-bold">TOKO KU</a>
        <a href="https://www.instagram.com/invites/contact/?i=ok5lawy8aynz&utm_content=mp9px5e" class="text-decoration-none">
          <img src="img/instagram.png" style="width: 30px" />
        </a>
      </p>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>