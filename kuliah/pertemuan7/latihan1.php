<!-- <?php 
// Variable Scope / lingkup variable
$x = 10;
// echo $x;

function tampilx() {
    // $x = 20;
    global $x;
    echo $x;
}

tampilx();
// echo "<br>";
// echo $x;

?> -->

<!-- <?php 
// SEPERGLOBALS
// Variable global milik PHP
// Merupakan Array Associative
echo $_SERVER["SERVER_NAME"];

?> -->

<?php 
// $_GET
// $_GET["nama"] = "Muhammad Anggi";
// $_GET["nrp"] = "213040075";
// var_dump($_GET);
$mahasiswa = [
    [
        "nama" => "Muhammad Anggi Kusuma", 
        "nrp" => "213040075", 
        "email" => "anggi.213040075@mail.unpas.ac.id", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img1.png"
    ],
    [
        "nama" => "Muhammad Angga Kusuma",
        "nrp" => "213040074",
        "email" => "angga.213040074@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img1.png"
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <!-- <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["nrp"]; ?></li>
        </ul> -->
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
            &nrp=<?= $mhs["nrp"]; ?>
            &email=<?= $mhs["email"]; ?>
            &jurusan=<?= $mhs["jurusan"]; ?>
            &gambar=<?= $mhs["gambar"]; ?>">
            <?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>