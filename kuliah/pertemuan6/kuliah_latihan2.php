<?php 
// Array Associative
// Array yang indexnya string

$mahasiswa = [
    ["nama" => "Muhammad Anggi Kusuma", "npm" => "213040075", 
    "email" => "anggi.213040075@mail.unpas.ac.id", "jurusan" => "Teknik Informatika"],
    ["nama" => "Muhammad Angga Kusuma", "npm" => "213040074",
    "email" => "angga.213040074@mail.unpas.ac.id", "jurusan" => "Teknik Informatika"],
    ["nama" => "Muhamad Iqbal Aminuddin", "npm" => "213040058",
    "email" => "iqbal.213040074@mail.unpas.ac.id", "jurusan" => "Teknik Informatika"]
];

// var_dump($mahasiswa[1]["nilai_tugas"]["tugas2]);


?>

<?php foreach( $mahasiswa as $mhs ) { ?>
<ul>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NRP : <?php echo $mhs["npm"]; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
</ul>
<?php } ?>

<hr>

<?php foreach($mahasiswa as $msh) { ?>
<ul>
    <?php foreach($mhs as $key => $value) { ?>
        <li><?php echo $key; ?>, <?php echo $value; ?></li>
    <?php } ?>
</ul>
<?php } ?>
