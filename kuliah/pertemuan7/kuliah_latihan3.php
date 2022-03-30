<?php $mahasiswa = [
    ["nama" => "Muhammad Anggi Kusuma", 
     "npm" => "213040075", 
     "email" => "anggi.213040075@mail.unpas.ac.id", 
     "jurusan" => "Teknik Informatika", 
     "gambar" => "img1.png"],
    ["nama" => "Muhammad Angga Kusuma", 
     "npm" => "213040074",
     "email" => "angga.213040074@mail.unpas.ac.id", 
     "jurusan" => "Teknik Informatika", 
     "gambar" => "img1.png"],
    ["nama" => "Muhamad Iqbal Aminuddin", 
     "npm" => "213040058",
     "email" => "iqbal.213040058@mail.unpas.ac.id", 
     "jurusan" => "Teknik Informatika", 
     "gambar" => "img1.png"]
]; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Mahasiswa</title>
  </head>
  <body>

    <div class="container">
        <h1>Detail Mahasiswa</h1>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/<?= $_GET["gambar"]; ?>" class="img-fluid rounded-start" alt="<?= $_GET["nama"]; ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $_GET["nama"]; ?></h5>
        <p class="card-text"><?= $_GET["npm"]; ?></p>
        <p class="card-text"><?= $_GET["email"]; ?></p>
        <p class="card-text"><?= $_GET["jurusan"]; ?></p>
        <a href="kuliah_latihan2.php">Kembali</a>
      </div>
    </div>
  </div>
</div>

    </div>
  </body>
</html>