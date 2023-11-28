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
  
  ?>

  <div class="container1">
    <button class="mobil" onclick="pg('mobil')">Mobil</button>
    <button class="motor" onclick="pg('motor')">Motor</button>
  </div>

  <div class="container2">
    <?php
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Inisialisasi $currentPage

    $startIndexMobil = ($currentPage - 1) * 10;
    $endIndexMobil = $startIndexMobil + 9;

    foreach (array_slice($data['ProdukUserMobil'], $startIndexMobil, 10) as $ProdukUserMobil) : ?>
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

    <?php
    $startIndexMotor = ($currentPage - 1) * 10;
    $endIndexMotor = $startIndexMotor + 9;

    foreach (array_slice($data['ProdukUserMotor'], $startIndexMotor, 10) as $ProdukUserMotor) : ?>
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
    <?php endforeach; ?>
  </div>

  <div class="pagination" id="pagination-mobil">
    <?php
    $jumlahDataPerHalaman = 10;
    $totalPagesMobil = ceil($data['totalmobil'] / $jumlahDataPerHalaman);

    for ($i = 1; $i <= $totalPagesMobil; $i++) {
      echo "<a href='?page=$i'>$i</a> ";
    }
    ?>
  </div>

  <div class="pagination-motor" id="pagination-motor" style="display: none;">
    <?php
    $jumlahDataPerHalaman = 10;
    $totalPagesMotor = ceil($data['TotalMotor'] / $jumlahDataPerHalaman);

    for ($i = 1; $i <= $totalPagesMotor; $i++) {
      echo "<a href='?page=$i'>$i</a> ";
    }
    ?>
  </div>

</body>

</html>