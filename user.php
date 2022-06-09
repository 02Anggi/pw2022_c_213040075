<? 

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

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/user.css" />
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
          <form action="produk-user.php" method="get" class="mt-0 ms-auto">
            <div class="d-flex ms-auto my-4 my-lg-0">
              <input type="text" class="form-control me-2" name="keyword" placeholder="Masukkan keyword pencarian.." 
              autocomplete="off" id="keyword">
              <button class="btn btn-outline-primary" type="submit" name="cari" id="tombol-cari">Cari!</button>
            </div>
          </form>
          </form>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="user.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produk-user.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak.php">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Login.php">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
<!-- kategori -->

<div class="container mt-5">
      <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
        <h5 class="text-center" style="margin-top: 5px">KATEGORI</h5>
      </div>
      <div class="row text-center row-container mt-2">
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu">
            <a href="produk-user.php"><img src="img/kategori/mouse.png" class="img-kategori mt-4" /></a>
            <p class="mt-2">Mouse</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu">
            <a href="produk-user.php"><img src="img/kategori/keyboard.png" class="img-kategori mt-4" /></a>
            <p class="mt-2">Keyboard</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu">
            <a href="produk-user.php"><img src="img/kategori/hp.png" class="img-kategori mt-4" /></a>
            <p class="mt-2">Handphone</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu">
            <a href="produk-user.php"><img src="img/kategori/headphone.png" class="img-kategori mt-4" /></a>
            <p class="mt-2">Headphone</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu">
            <a href="produk-user.php"><img src="img/kategori/laptop.png" class="img-kategori mt-4" /></a>
            <p class="mt-2">Laptop</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu">
            <a href="produk-user.php"><img src="img/kategori/earphone.png" class="img-kategori mt-4" /></a>
            <p class="mt-2">Earphone</p>
          </div>
        </div>
      </div>
    </div>

     <!-- produk -->

     <div class="container mt-5">
      <div class="judul-produk" style="background-color: #fff; padding: 5px 10px">
        <h5 class="text-center" style="margin-top: 4px">PRODUK</h5>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="img/produk/produk1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h6 class="card-title">Headshet</h6>
              <p class="card-text mt-2">RP. 400.000</p>
              <a href="https://instagram.com/gia_mk03?igshid=YmMyMTA2M2Y=" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="img/produk/produk2.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h6 class="card-title">Mouse</h6>
              <p class="card-text mt-2">RP. 246.500</p>
              <a href="https://instagram.com/gia_mk03?igshid=YmMyMTA2M2Y=" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="img/produk/produk3.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h6 class="card-title">Handphone</h6>
              <p class="card-text mt-2">RP. 399.900</p>
              <a href="https://instagram.com/gia_mk03?igshid=YmMyMTA2M2Y=" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="img/produk/produk4.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h6 class="card-title">Laptop</h6>
              <p class="card-text mt-2">RP. 427.800</p>
              <a href="https://instagram.com/gia_mk03?igshid=YmMyMTA2M2Y=" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="img/produk/produk5.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h6 class="card-title">Earphone</h6>
              <p class="card-text mt-2">RP. 20.000</p>
              <a href="https://instagram.com/gia_mk03?igshid=YmMyMTA2M2Y=" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="img/produk/produk9.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h6 class="card-title">Keyboard</h6>
              <p class="card-text mt-2">RP. 584.900</p>
              <a href="https://instagram.com/gia_mk03?igshid=YmMyMTA2M2Y=" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- footer -->

    <footer class="bg-light p-5 mt-5 text-center">
      <p>
        Copyright &copy; 2022 |
        <a href="https://instagram.com/gia_mk03?igshid=YmMyMTA2M2Y=" class="text-decoration-none text-dark fw-bold">TOKO KU</a>
        <a href="https://instagram.com/gia_mk03?igshid=YmMyMTA2M2Y=" class="text-decoration-none">
          <img src="img/instagram.png" style="width: 30px" />
        </a>
      </p>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>