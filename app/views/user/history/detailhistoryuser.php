<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/detailhistoryuser.css">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
</head>

<body>
    <?php
    // include "navbaruser.php";
    ?>

    <div class="dalamnya">
        <h2 class="judul">Detail History</h2>
        <a href="<?= BASEURL; ?>/produk">
            <div class="back">
                <iconify-icon icon="ph:arrow-up-thin" rotate="-90deg" style="vertical-align: middle;"></iconify-icon>
            </div>
        </a>
        <div class="pembungkus">
            <div class="gambar"><img src="<?= BASEURL; ?>/img/avanza.jpg" alt=""></div>

            <div class="list-isi">
                <h1><?= $data['historyUser']['nama_transport']; ?></h1>
                <div class="isi">
                    <iconify-icon icon="ant-design:number-outlined" width="30" height="30" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['historyUser']['id_order']; ?></span>
                </div>
                <div class="isi">
                    <iconify-icon icon="healthicons:ui-user-profile" width="30" height="30" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['historyUser']['nama_rental']; ?></span>
                </div>
                <div class="isi">
                    <iconify-icon icon="fa6-solid:rupiah-sign" width="25" height="25" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['historyUser']['harga_sewa']; ?> / hari</span>
                </div>
                <div class="isi">
                    <iconify-icon icon="material-symbols:deployed-code-update-outline-sharp" width="30" height="30" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['historyUser']['tgl_peminjaman']; ?></span>
                </div>
                <div class="isi">
                    <iconify-icon icon="grommet-icons:validate" width="30" height="30" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['historyUser']['tgl_pengembalian']; ?></span>
                </div>
                <div class="isi">
                    <iconify-icon icon="ei:location" width="30" height="30" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['historyUser']['nama_kota']; ?></span>
                </div>
                <div class="isi">
                    <iconify-icon icon="fluent-mdl2:payment-card" width="30" height="30" style="vertical-align: middle;"></iconify-icon>
                    <span style="vertical-align: middle;"><?= $data['historyUser']['total']; ?></span>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>