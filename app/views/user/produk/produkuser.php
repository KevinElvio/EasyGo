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
    <a href="<?= BASEURL; ?>/produk/detail">
      <div class="car" onclick="myfungsi()">
        <img src='<?= BASEURL; ?>/img/surabaya.jpg' alt="mobil">
        <div class="tulisan">
          <p> pagani zonda</p>
          <p> deskripsi</p>
          <p>1200k/jam</p>
        </div>
      </div>
    </a>
    <a href="<?= BASEURL; ?>/produk/detail">
      <div class="car" onclick="myfungsi()">
        <img src='<?= BASEURL; ?>/img/surabaya.jpg' alt="mobil">
        <div class="tulisan">
          <p> pagani zonda</p>
          <p> deskripsi</p>
          <p>1200k/jam</p>
        </div>
      </div>
    </a>
    <a href="<?= BASEURL; ?>/produk/detail">
      <div class="car" onclick="myfungsi()">
        <img src='<?= BASEURL; ?>/img/surabaya.jpg' alt="mobil">
        <div class="tulisan">
          <p> pagani zonda</p>
          <p> deskripsi</p>
          <p>1200k/jam</p>
        </div>
      </div>
    </a>
    <a href="<?= BASEURL; ?>/produk/detail">
        <div class="sepedah" onclick="myfungsi()">    
            <img src='<?= BASEURL; ?>/img/surabaya.jpg' alt="mobil">
            <div class="nama"> SUpraman</div>
            <div class="deskripsi"> deskripsi</div>
            <div class="harga" >!M/JAm</div>
        </div>
      </a>
      <a href="<?= BASEURL; ?>/produk/detail">
        <div class="sepedah" onclick="myfungsi()">    
            <img src='<?= BASEURL; ?>/img/surabaya.jpg' alt="mobil">
            <div class="nama"> SUpraman</div>
            <div class="deskripsi"> deskripsi</div>
            <div class="harga" >!M/JAm</div>
        </div>
      </a>
      <a href="<?= BASEURL; ?>/produk/detail">
        <div class="sepedah" onclick="myfungsi()">    
            <img src='<?= BASEURL; ?>/img/surabaya.jpg' alt="mobil">
            <div class="nama"> SUpraman</div>
            <div class="deskripsi"> deskripsi</div>
            <div class="harga" >!M/JAm</div>
        </div>
      </a>
  </div>


</body>

</html>