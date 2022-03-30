<?php 
// SUPERGLOBALS
// Variable milik PHP yang bisa kita gunakan
// bentuknya Array Associative 
// $_GET 
// $_POST
// $_SERVER
// $_GET["nama"] = "Muhammad Anggi Kusuma";
// $_GET["email"] = "anggi.213040075@mail.unpas.ac.id";

// var_dump($_GET);
// var_dump($_POST);
if(isset($_GET["nama"])) {
    $nama = $_GET["nama"];
} else {
    $nama = 'Tidak Diketahui';
}
// $nama = $_GET["nama"];
?>

<h1>Halo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=Muhammad%20Angga%20Kusuma">Muhammad Angga Kusuma</a>
    </li>
    <li>
        <a href="?nama=Muhammad%20Anggi%20Kusuma">Muhammad Anggi Kusuma</a>
    </li>
</ul>