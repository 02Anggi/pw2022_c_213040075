<?php 
session_start();

if(isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ketika tombol login ditekan
if(isset($_POST['login'])) {
    $login = login($_POST); 
}


?>

<!DOCTYPE HTML> 
<html lang="en">

<head>
    <meta charshet="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | TOKO KU</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body id="bg-login">
<div class="box-login">
   <h2>Form Login</h2>
        <?php if (isset($login['error'])) : ?>
            <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
        <?php endif; ?>
   <form action="" method="POST">
       <ul>
               <label>
                   <input type="text" name="username" class="input-control" autofocus autocomplete="off" placeholder="Pengguna" required>
               </label>
               <label>
                   <input type="password" name="password" class="input-control" placeholder="Kata Sandi"  required>
               </label>
               <button type="submit" name="login" class="btn btn-outline-primary btn-login">Login</button>
    
            <div>
               <label>Belum Punya Akun? <a href="registrasi.php">Daftar</a> </label>
               <br>
               <label><a href="user.php">Kembali Ke Halaman User</a> </label>
            </div>
       </ul>
   </form>
</div>
</body>

</html>