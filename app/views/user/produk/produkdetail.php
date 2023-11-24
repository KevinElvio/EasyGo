<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/produkdetail.css">
    <title>Document</title>
</head>

<body>
    <?php
    // include "navbaruser.php";
    ?>

    <h2 class="judul">Detail Kendaraan</h2>
    
    <div class="back">
    <a href="<?= BASEURL;?>/produk">
        <iconify-icon icon="ph:arrow-up-thin" rotate="-90deg" style="vertical-align: middle;"></iconify-icon>
    </a>
    </div>
    <div class="container1">
        <div class="box1">
            <img src='<?= BASEURL; ?>/img/surabaya.jpg' alt="mobil">
        </div>
        <div class="box2">
            
            <h1><?= $data['DetailProduk']['nama_transport']; ?></h1>
            <h5><?= $data['DetailProduk']['harga_sewa']; ?>/D</h5>
            <h2><?= $data['DetailProduk']['deskripsi_produk']; ?></h2>
            <div>
                <iconify-icon icon="ion:speedometer-outline" width="30" height="30"></iconify-icon>
                <h4><?= $data['DetailProduk']['total_kilometer']; ?>km</h4>
            </div>
            <div>
                <iconify-icon icon="ph:calendar-light" width="30" height="30"></iconify-icon>
                <h4><?= $data['DetailProduk']['tahun_keluar']; ?></h4>
            </div>
            <div>
                <iconify-icon icon="mynaui:location" width="30" height="30"></iconify-icon>
                <h4><?= $data['DetailProduk']['link_maps']; ?></h4>
            </div>
            <div>
                <iconify-icon icon="fluent:text-description-20-regular" width="30" height="30"></iconify-icon>
                <h4><?= $data['DetailProduk']['deskripsi_produk']; ?></h4>
            </div>
            <a href="<?= BASEURL; ?>/produk/pemesanan">
                <button>
                    Rent Now <iconify-icon icon="ph:arrow-up-thin" rotate="90deg" style="vertical-align: middle;"></iconify-icon>
                </button>
            </a>

            </div>
        </div>



    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>