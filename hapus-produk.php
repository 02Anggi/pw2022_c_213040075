<?php  

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

if (hapus_produk($_GET["id"]) > 0) {
        echo "<script>
            alert('data berhasil dihapus!');
            document.location.href = 'produk.php', 'produk-user.php';
         </script>";
}  
?>