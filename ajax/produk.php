<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

  $query = "SELECT * FROM produk
            WHERE
            kategori LIKE '%$keyword%' OR
            nama_produk LIKE '%$keyword%'
            ";
  $produk = query($query);

?>
<div class="box">
  <table border="1" cellspacing="0" class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Gambar</th>
      <th scope="col">Kategori</th>
      <th scope="col">Nama Poduk</th>
      <th scope="col">Harga</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; foreach($produk as $p) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td>
          <img src="../tubes/img/produk/<?= $p["gambar"]; ?>" heigth="100" width="100">
      </td>
      <td><?= $p["kategori"]; ?></td>
      <td><?= $p["nama_produk"]; ?></td>
      <td><?= $p["harga"]; ?></td>
      <td><?= $p["deskripsi"]; ?></td>
      <td>
          <a href="ubah-produk.php?id=<?= $p['id_produk'];?>" class="btn badge bg-warning">ubah</a>
          <a href="hapus-produk.php?id=<?= $p['id_produk'];?>" class="btn badge bg-danger"
           onclick="return confirm('yakin?');">hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
