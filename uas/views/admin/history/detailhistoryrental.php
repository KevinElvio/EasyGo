<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/detailhistoryrental.css">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
</head>

<body>
    <?php
    // include "navbaruser.php";
    ?>
    <div class="atas-1">
        <h2 class="judul">Detail History</h2>
        <div class="back">
            <a href="<?= BASEURL; ?>/?controller=Historyadmin">
                <iconify-icon icon="ph:arrow-up-thin" rotate="-90deg" style="vertical-align: middle;"></iconify-icon>
            </a>
        </div>
        <div class="pembungkus">
            <div class="gambar"><img src="<?= BASEURL; ?>/img/UserImg/<?= $data['history']['foto_transport']; ?>" alt=""></div>

            <div class="list-isi">
                <h1><?= $data['history']['nama_transport']; ?></h1>
                <div class="isi">
                    <iconify-icon icon="ant-design:number-outlined" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['history']['id_order']; ?></span>
                </div>
                <div class="isi">
                    <iconify-icon icon="healthicons:ui-user-profile" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['history']['nama_rental']; ?></span>
                </div>
                <div class="isi">
                    <iconify-icon icon="fa6-solid:rupiah-sign" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['history']['harga_sewa']; ?> / hari</span>
                </div>
                <div class="isi">
                    <iconify-icon icon="material-symbols:deployed-code-update-outline-sharp" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['history']['tgl_peminjaman']; ?></span>
                </div>
                <div class="isi">
                    <iconify-icon icon="grommet-icons:validate" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['history']['tgl_pengembalian']; ?></span>
                </div>
                <div class="isi">
                    <iconify-icon icon="ei:location" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['history']['nama_kota']; ?></span>
                </div>
                <div class="isi">
                    <iconify-icon icon="fluent-mdl2:payment-card" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['history']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>