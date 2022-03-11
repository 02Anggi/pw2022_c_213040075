<?php 
$mahasiswa = [
    ["Muhammad Anggi Kusuma", "213040075", 
    "Teknik Informatika", "anggi.213040075@unpas.ac.id"], 
    ["Muhammad Angga Kusuma", "213040074", 
    "Teknik Informatika", "angga.213040074@unpas.ac.id"],
    ["Muhamad Iqbal Aminuddin", "213040058", 
    "Teknik Informatika", "iqbal.213040074@unpas.ac.id"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<!-- <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li><?= $mhs; ?></li>
    <?php endforeach; ?>
</ul> -->

<?php foreach( $mahasiswa as $mhs ) : ?> 
<ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>