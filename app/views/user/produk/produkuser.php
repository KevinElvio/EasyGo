<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/produkuser.css">
  <script src="<?= BASEURL; ?>/js/fungsi.js"></script>
  <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
</head>

<body>
  <?php
  // include "navbaruser.php";
  ?>

  <div class="container1">
    <button class="mobil" onclick="pg('mobil')">Mobil</button>
    <button class="motor" onclick="pg('motor')">Motor</button>
  </div>
  <div class="container2">
    <?php foreach ($data['ProdukUserMobil'] as $ProdukUserMobil) : ?>
      <a href="<?= BASEURL; ?>/produk/detail/<?= $ProdukUserMobil['id_transport']; ?>">
        <div class="car" onclick="myfungsi()">
          <img src='<?= BASEURL; ?>/img/UserImg/<?= $ProdukUserMobil['foto_transport']; ?>' alt="mobil">
          <div class="tulisan">
            <p><?= $ProdukUserMobil['nama_transport'] ?></p>
            <p><?= $ProdukUserMobil['tahun_keluar'] ?></p>
            <p><?= $ProdukUserMobil['harga_sewa'] ?>/jam</p>
          </div>
        </div>
      <?php endforeach ?>

      <?php foreach ($data['ProdukUserMotor'] as $ProdukUserMotor) : ?>
        <a href="<?= BASEURL; ?>/produk/detail/<?= $ProdukUserMotor['id_transport']; ?>">
          <div class="sepedah" onclick="myfungsi()">
            <img src='<?= BASEURL; ?>/img/UserImg/<?= $ProdukUserMotor['foto_transport']; ?>' alt="mobil">
            <div class="tulisan">
              <p class="nama"> <?= $ProdukUserMotor['nama_transport'] ?></p>
              <p class="deskripsi"> <?= $ProdukUserMotor['tahun_keluar'] ?></p>
              <p class="harga"><?= $ProdukUserMotor['harga_sewa'] ?>/Jam</p>
            </div>
          </div>
        </a>
      <?php endforeach ?>

  </div>


</body>

</html>