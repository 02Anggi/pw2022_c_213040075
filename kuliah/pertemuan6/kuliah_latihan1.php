<?php 
// Array Associative
// Array yang index-nya ber-asosiasi / berpasangan dengan angka

$mahasiswa = [
    ["Muhammad Anggi Kusuma", "213040075", "anggi.213040075@mail.unpas.ac.id", "Teknik Informatika"],
    ["Muhammad Angga Kusuma", "213040074", "angga.213040074@mail.unpas.ac.id", "Teknik Informatika"],
    ["Muhamad Iqbal Aminuddin", "213040058", "iqbal.213040074@mail.unpas.ac.id", "Teknik Informatika"]
];

// var_dump($mahasiswa[1][3]);
?>

<?php foreach( $mahasiswa as $mhs ) { ?>
<ul>
        <li>Nama : <?php echo $mhs[0]; ?></li>
        <li>NRP : <?php echo $mhs[1]; ?></li>
        <li>Jurusan : <?php echo $mhs[3]; ?></li>
        <li>Email : <?php echo $mhs[2]; ?></li>
</ul>
<?php } ?>
