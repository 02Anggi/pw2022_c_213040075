<?php $mahasiswa = [
    ["nama" => "Muhammad Anggi Kusuma", "npm" => "213040075", 
    "email" => "anggi.213040075@mail.unpas.ac.id", "jurusan" => "Teknik Informatika"],
    ["nama" => "Muhammad Angga Kusuma", "npm" => "213040074",
    "email" => "angga.213040074@mail.unpas.ac.id", "jurusan" => "Teknik Informatika"],
    ["nama" => "Muhamad Iqbal Aminuddin", "npm" => "213040058",
    "email" => "iqbal.213040074@mail.unpas.ac.id", "jurusan" => "Teknik Informatika"]
]; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>

    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>
          <img src="img/img1.png" heigth="50" width="50"
          class="rounded-circle">
      </td>
      <td>Muhammad Anggi Kusuma</td>
      <td>213040075</td>
      <td>anggi.213040075@mail.unpas.ac.id</td>
      <td>Teknik Informatika</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <tr>
    <th scope="row">2</th>
      <td>
          <img src="img/img1.png" heigth="50" width="50"
          class="rounded-circle">
      </td>
      <td>Muhammad Angga Kusuma</td>
      <td>213040074</td>
      <td>angga.213040074@mail.unpas.ac.id</td>
      <td>Teknik Informatika</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td>
          <img src="img/img1.png" heigth="50" width="50"
          class="rounded-circle">
      </td>
      <td>Muhamad Iqbal Aminuddin</td>
      <td>213040058</td>
      <td>iqbal.213040074@mail.unpas.ac.id</td>
      <td>Teknik Informatika</td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
  </tbody>
</table>

    </div>
  </body>
</html>