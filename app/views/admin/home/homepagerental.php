<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/homepagerental.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php
    // include "navbarrental.php";
    ?>

    <div class="home">
        <h2 class="judul">Konfirmasi Peminjaman</h2>
        <?php foreach ($data['Konfirmasi'] as $Konfirmasi) :  ?>
            <div class="list-home">
                <img src="<?= BASEURL; ?>/img/vesmet.jpg" alt="">
                <p><?= $Konfirmasi['nama_transport']; ?></p>
                <p><?= $Konfirmasi['username']; ?></p>
                <p><?= $Konfirmasi['tgl_order']; ?></p>
                <div class="btn-home">
                    <button class="setuju">Setuju</button>
                    <button class="tolak">Tolak</button>
                </div>
            </div>
        <?php endforeach ?>


        <!-- <div class="list-home">
            <img src="<?= BASEURL; ?>/img/vesmet.jpg" alt="">
            <p>Jenis Mobil</p>
            <p>Nama Penyewa</p>
            <p>Tanggal Sewa</p>
            <div class="btn-home">
                <button class="setuju">Setuju</button>
                <button class="tolak">Tolak</button>
            </div>
        </div> -->
    </div>
</body>

</html>