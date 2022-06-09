<?php 

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// Query mahasiswa berdasarkan id
$id = $_GET["id"];
$p = query("SELECT * FROM produk WHERE id_produk = $id")[0];

// cek ketika tombol ubah di-klik
if (isset($_POST['ubah'])) {

    if (ubah_produk($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'produk.php', 'produk-user.php';
             </script>";
    }  

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

    <title>Ubah Data Produk</title>
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

    <div class="container">
        <h1>Ubah Data Produk</h1>

        <div class="row mt-3">
            <div class="col-8">

                <form action="" method="post" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $p ["id_produk"]; ?>">

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" required 
                    value="<?= $p ["kategori"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama" name="nama" required 
                    value="<?= $p ["nama_produk"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" required 
                    value="<?= $p ["harga"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" required 
                    value="<?= $p ["deskripsi"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar"
                    value="<?= $p ["gambar"]; ?>">
                </div>    
                
                <button type="submit" class="btn btn-primary" name="ubah">Ubah Data Produk</button>

                </form>
            
            </div>
        </div>

    </div>
  </body>
</html>