<!-- <?php
// Pertemuan 5 - ARRAY
// Array adalah variable yang bisa menampung/menyimpan banyak nilai sekaligus

$hari1 = "senin";
$hari2 = "selasa";

$bulan1 = "Januari";
$bulan2 = "Februari";

$mahasiswa1 = "Muhammad Anggi Kusuma";

// Membuat ARRAY
$hari = ["senin", "selasa", "rabu", "kamis"]; // cara baru
$bulan = array("Januari", "Februari", "Maret"); // cara lama
$myArr = [10, "Muhammad Anggi Kusuma", true];

// Mencetak ARRAY
// mencetak 1 elemen di dalam array, menggunakan index
// dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $myArr[0];
echo "<hr>";

// mencetak menggunakan var_dump() atau print_r()
// khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// Mencetak semua isi array menggunakan looping
// for
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}
echo "<hr>";

// -> arrow
// => fat arrow

foreach ($bulan as $key => $value) {
    echo "key: $key = value: $value";
    echo "<br>";
}
echo "<hr>";

// Memanipulasi ARRAY
// menambah elemen baru di akhir array
$hari [] = "Kamis";
$hari [] = "Jumat";
print_r($hari);

?> -->

<?php 
// array
// variable yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Febuari", "Maret"];
$arrl = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);












































?>