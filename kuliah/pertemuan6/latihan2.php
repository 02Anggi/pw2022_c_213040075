<?php 
// $mahasiswa = [
//     ["Muhammad Anggi Kusuma", "213040075", 
//     "anggi.213040075@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Muhammad Angga Kusuma", "213040074",
//     "angga.213040074@mail.unpas.ac.id", "Teknik Informatika"]
// ];

// Array Associative 
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
      <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
      </li>
      <li>Nama : <?php echo $mhs["nama"]; ?></li>
      <li>NRP : <?php echo $mhs["nrp"]; ?></li>
      <li>Email : <?php echo $mhs["email"]; ?></li>
      <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>