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

    <div class="dalamnya">
        <div class="button-atas">
            <button class="mobilmt"><a href="<?= BASEURL; ?>/?controller=Produkadmin" class="mobilmt">Mobil</a></button>
            <button class="motormt" ><a href="<?= BASEURL; ?>/?controller=Produkadmin&method=motor" class="motormt">Motor</a></button>
        </div>


        <div class="list-motor">
            <?php foreach ($data['MotorAdmin'] as $MotorAdmin) : ?>
                <div class="produk-motor">
                    <img src="<?= BASEURL; ?>/img/UserImg/<?= $MotorAdmin['foto_transport']; ?>" alt="">
                    <div class="layer">
                        <div class="button-icon">
                            <a href="<?= BASEURL; ?>/?controller=Produkadmin&method=update">
                                <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                            </a>
                            <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                        </div>
                        <p><?= $MotorAdmin['nama_transport']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>


            <div class="tambah-motor">
                <a href="<?= BASEURL; ?>/?controller=Produkadmin&method=tambah">
                    <button class="plus-motor" onclick="addmt()"><iconify-icon icon="mdi-light:plus"></iconify-icon></button>
                </a>
            </div>

        </div>
        <ul class="pagination">
            <?php for ($i = 1; $i <= $data['pagination']['totalPages']; $i++) : ?>
            <li class="page-item <?php echo ($i == $data['pagination']['currentPage']) ? 'active' : ''; ?>">
                <a class="page-link" href="<?php echo BASEURL . '/?controller=Produkadmin&method=motor&page=' . $i; ?>"><?php echo $i; ?></a>
            </li>
            <?php endfor; ?>
        </ul>



    </div>



</body>

</html>