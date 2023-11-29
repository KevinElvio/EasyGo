<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/produkuser.css">
  <script src="<?= BASEURL; ?>/js/fungsi.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
</head>

<body>
  <div class="container1">
    <button class="mobil"><a href="<?= BASEURL; ?>/produk/index" class="mobil">Mobil</a></button>
    <button class="motor"><a href="<?= BASEURL; ?>/produk/motor" class="motor">Motor</a></button>
  </div>

  <div class="container2">
    <?php
    foreach ($data['mobil'] as $ProdukUserMobil) : ?>
      <a href="<?= BASEURL; ?>/produk/detail/<?= $ProdukUserMobil['id_transport']; ?>">
        <div class="car" onclick="myfungsi()">
          <img src='<?= BASEURL; ?>/img/UserImg/<?= $ProdukUserMobil['foto_transport']; ?>' alt="mobil">
          <div class="tulisan">
            <p><?= $ProdukUserMobil['nama_transport'] ?></p>
            <p><?= $ProdukUserMobil['tahun_keluar'] ?></p>
            <p><?= $ProdukUserMobil['harga_sewa'] ?>/jam</p>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
  <ul class="pagination">
    <?php for ($i = 1; $i <= $data['pagination']['totalPages']; $i++) : ?>
      <li class="page-item <?php echo ($i == $data['pagination']['currentPage']) ? 'active' : ''; ?>">
        <a class="page-link" href="<?php echo BASEURL . '/produk/index/' . $i; ?>"><?php echo $i; ?></a>
      </li>
    <?php endfor; ?>
  </ul>
  


</body>

</html>
