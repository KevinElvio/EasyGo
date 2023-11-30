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
    <a href="<?= BASEURL; ?>/?controller=Produk&method=index" class="mobilmt"><button class="mobilmt">Mobil</button></a>
    <a href="<?= BASEURL; ?>/?controller=Produk&method=motor"class="motormt"><button class="motormt">Motor</button></a>
  </div>

  <div class="container2">
    <?php
    foreach ($data['motor'] as $ProdukUserMotor) : ?>
      <a href="<?= BASEURL; ?>/?controller=Produk&method=detail&id_transport=<?= $ProdukUserMotor['id_transport']; ?>">
        <div class="car" onclick="myfungsi()">
          <img src='<?= BASEURL; ?>/img/UserImg/<?= $ProdukUserMotor['foto_transport']; ?>' alt="Motor">
          <div class="tulisan">
            <p><?= $ProdukUserMotor['nama_transport'] ?></p>
            <p><?= $ProdukUserMotor['tahun_keluar'] ?></p>
            <p><?= $ProdukUserMotor['harga_sewa'] ?>/jam</p>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
  <ul class="pagination">
    <?php for ($i = 1; $i <= $data['pagination']['totalPages']; $i++) : ?>
      <li class="page-item <?php echo ($i == $data['pagination']['currentPage']) ? 'active' : ''; ?>">
        <a class="page-link" href="<?php echo BASEURL . '/?controller=Produk&method=motor&page=' . $i; ?>"><?php echo $i; ?></a>
      </li>
    <?php endfor; ?>
  </ul>
  


</body>

</html>
