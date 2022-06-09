<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$produk = query("SELECT * FROM produk");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TOKO KU</title>
</head>
<body>
    <h1>Produk</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Gambar</th>
            <th scope="col">Kategori</th>
            <th scope="col">Nama Poduk</th>
            <th scope="col">Harga</th>
            <th scope="col">Deskripsi</th>
            </tr>
        </thead>';
    $i = 1;
    foreach( $produk as $p ) {
        $html .= '<tr>
            <td> <img src="../tubes/img/produk/'. $p["gambar"] .'" heigth="100" width="100"></td>
            <td>'. $p["kategori"] .'</td>
            <td>'. $p["nama_produk"] .'</td>
            <td>'. $p["harga"] .'</td>
            <td>'. $p["deskripsi"] .'</td>
        </tr>';
    }

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();

?>