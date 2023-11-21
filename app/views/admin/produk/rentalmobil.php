<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="<?= BASEURL; ?>/js/fungsi.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/rentalmobil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <?php
    // include "navbarrental.php";
    ?>

    <div class="button-atas">
        <button class="mobil" onclick="page('mobil')">Mobil</button>
        <button class="motor" onclick="page('motor')">Motor</button>
    </div>

    <div class="list-mobil">

        <div class="produk-mobil">
            <img src="<?= BASEURL; ?>/img/avanza.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <a href="<?= BASEURL; ?>/Produkadmin/update">
                        <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    </a>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Avanza Cth</p>
            </div>
        </div>
        <div class="produk-mobil">
            <img src="<?= BASEURL; ?>/img/avanza.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <a href="<?= BASEURL; ?>/Produkadmin/update">
                        <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    </a>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Avanza Cth</p>
            </div>
        </div>

        <div class="produk-mobil">
            <img src="<?= BASEURL; ?>/img/avanza.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <a href="<?= BASEURL; ?>/Produkadmin/update">
                        <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    </a>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Avanza Cth</p>
            </div>
        </div>
        <div class="produk-mobil">
            <img src="<?= BASEURL; ?>/img/avanza.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <a href="<?= BASEURL; ?>/Produkadmin/update">
                        <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    </a>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Avanza Cth</p>
            </div>
        </div>

        <div class="tambah-mobil">
            <a href="<?= BASEURL; ?>/Produkadmin/tambah">
                <button class="plus-mobil" onclick="add()"><iconify-icon icon="mdi-light:plus"></iconify-icon></button>
            </a>
        </div>

    </div>
    <div class="list-motor">
        <div class="produk-motor">
            <img src="<?= BASEURL; ?>/img/vesmet.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <a href="<?= BASEURL; ?>/Produkadmin/update">
                        <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    </a>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Vespa Matic</p>
            </div>
        </div>
        <div class="produk-motor">
            <img src="<?= BASEURL; ?>/img/vesmet.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <a href="<?= BASEURL; ?>/Produkadmin/update">
                        <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    </a>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Vespa Matic</p>
            </div>
        </div>
        <div class="produk-motor">
            <img src="<?= BASEURL; ?>/img/vesmet.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <a href="<?= BASEURL; ?>/Produkadmin/update">
                        <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    </a>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Vespa Matic</p>
            </div>
        </div>
        <div class="produk-motor">
            <img src="<?= BASEURL; ?>/img/vesmet.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <a href="<?= BASEURL; ?>/Produkadmin/update">
                        <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    </a>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Vespa Matic</p>
            </div>
        </div>

        <div class="tambah-motor">
            <a href="<?= BASEURL; ?>/Produkadmin/tambah">
                <button class="plus-motor" onclick="addmt()"><iconify-icon icon="mdi-light:plus"></iconify-icon></button>
            </a>
        </div>

    </div>

</body>

</html>