<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="css/kontak.css" />

    <title>TOKO KU!</title>
  </head>
  <body>
       <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/img0.png" alt="" width="50" height="50" class="me-2 rounded-circle" />
            TOKO <strong>KU!</strong>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
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
  
      
    <div class="container mt-5">
      <div class="card login-form">
        <div class="card-body mt-3">
          <h2 class="card-titlemt-5">Contact Us</h2>

          <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Terimakasih! </strong> Pesan Anda Sudah Kami Terima.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

          <form name="contact-form">
            <div class="mb-4 mt-3">
              <label for="name" class="form-label">Nama Pengguna</label>
              <input type="name" class="form-control" id="name" aria-describedby="name" name="nama" placeholder="Nama Pengguna" />
            </div> 
            <div class="mb-4 mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Masukkan Email" />
            </div>
            <div class="mb-4 mt-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea type="text" class="form-control" id="pesan" rows="3" name="pesan">Masukkan Pesan</textarea>
                <button type="submit" class="btn btn-primary btn-kirim d-grid mt-4">Kirim</button>
                <button class="btn btn-primary btn-loading mt-3 d-none" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>
            </div>
          </form>
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
      </footer>
  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbwJjJnDvbkg7duuKzFSRUj7qDmUm85DBCzQqXWo71mVq3vrQlwJPRJ2AMqUiWW8wcRBDg/exec'
        const form = document.forms['contact-form'];
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const myAlert = document.querySelector('.my-alert');
      
        form.addEventListener('submit', e => {
          e.preventDefault()
          // ketika tombol submit diklik
          // tampilkan tombol loading, hilangkan tombol kirim
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
            // tampilkan tombol kirim, hilangkan tombol loading
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            // tampilkan alert
            myAlert.classList.toggle('d-none');
            // reset formnya
            form.reset();
            console.log('Success!', response); })
            .catch(error => console.error('Error!', error.message))
        })
      </script>
  </body>
</html>