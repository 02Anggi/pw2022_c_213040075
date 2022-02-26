<?php
// KOMENTAR
// ini untuk menuliskan catatan

// Standar Output
// echo, print
// print_r
// var_dump

// VARIABLE
// tempat menyimpan nilai
// Nilai angka (integer), tulisan (string), boolean (true/false)
// Nama bebas, tidak boleh ada spaso
// boleh ada angka tapi tidak di awal
$nama1 = "Anggi";
echo $nama1;
echo "<br>";
var_dump("Muhammad Anggi Kusuma");
echo "<hr>";

// OPERATOR
// Aritmatika
// +, -, *, /. % (modulo / modulus / sisa bagi)
echo (1 + 2) * 3 - 4; // kabataku
echo "<br>";
echo 10 % 5;
echo "<hr>";

// Perbandingan 
// <, >, <=, >=, ==. !=
echo 1 < 2; // true / 1
echo "<br>";
echo 10 < 5; // false / null
echo "<br>";
echo 10 == "10"; // true
echo "<br>";
var_dump(1 == "1");
echo "<hr>";

// Indentitas
//  ===, !==
// Mengecek nilai beserta tipe data nya
echo 10 === "10";
echo "<br>";
var_dump(1 === "1");
echo "<hr>";

// Increment / Decrement
// Penambahan / Pengurangan
// ++, --
$x = 10;
echo ++$x;
echo "<br>";
echo ++$x;
echo "<hr>";

// Concat, Penggabung String
// .
$nama_depan = "Anggi";
$nama_belakang = 'Kusuma';
echo $nama_depan . " " .$nama_belakang;
echo "<hr>";

// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5;
$x -= 5;
echo $x;
echo "<br>";
$nama = "Anggi";
$nama .= " ";
$nama .= "Kusuma";
echo $nama;
echo "<hr>";

// Logika 
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP 

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Belajar PHP</title>    
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Muhammad Anggi Kusuma"; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>

    <!-- <?php 
        echo "<h1> Halo, Selamat Datang Anggi </h1>"
    ?> -->

</body>
</html>