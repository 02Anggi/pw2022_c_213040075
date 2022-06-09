<?php 

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// Query mahasiswa berdasarkan id
$id = $_GET["id"];
$dp = query("SELECT * FROM data_profil WHERE id = $id")[0];

// cek ketika tombol ubah di-klik
if(isset($_POST['ubah'])) {

    if(ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'profil.php'
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
    
    <title>Ubah Data Profil</title>
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
        <h1>Ubah Data Profil</h1>

        <div class="row mt-3">
            <div class="col-8">

                <form action="" method="post" autocomplete="off">
                    <input type="hidden" name="id" value="<?= $dp ["id"]; ?>">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required 
                    value="<?= $dp ["nama"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required style="width: 130px;"
                    value="<?= $dp ["username"]; ?>"> 
                </div>    

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?= $dp ["password"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $dp ["email"]; ?>">
                </div>    

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $dp ["alamat"]; ?>">
                </div>    
                
                <button type="submit" class="btn btn-primary" name="ubah">Ubah Data Profil</button>

                </form>
            
            </div>
        </div>

    </div>
  </body>
</html>