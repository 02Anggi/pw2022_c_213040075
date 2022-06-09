<?php 

require 'functions.php';

// ketika tombol registrasi ditekan
if (isset($_POST['registrasi'])) {
   if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Pengguna baru berhasil ditambahkan. Silahkan Login!');
            document.location.href='login.php';
         </script>";
   } else {
    echo 'pengguna gagal ditambahkan';
   }
}
?>

<!DOCTYPE HTML> 
<html>
<head>
    <meta charshet="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi | TOKO KU</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
<div class="box-login">
    <h2>Form Registrasi</h2>

    <form action="" method="POST">
        <ul>
            
               <label>
                   <input type="text" name="username" class="input-control" autofocus autocomplete="off" placeholder="Pengguna" required>
               </label>
                <label>
                   <input type="password" name="password1" class="input-control" placeholder="Kata Sandi" required>
               </label>
                <label>
                   <input type="password" name="password2" class="input-control" placeholder="Konfirmasi Kata Sandi" required>
               </label>
               <button type="submit" name="registrasi" class="btn btn-outline-primary">Registrasi</button>
            <div>
            <label>Sudah Punya Akun ? <a href="Login.php" class="link">Login Disini</a> </label>
            </div>
        </ul>
    </form>
</div>
</body>

</html>
