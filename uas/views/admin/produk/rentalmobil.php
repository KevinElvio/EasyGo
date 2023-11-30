<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="<?= BASEURL; ?>/js/fungsi.js"></script>
    <script src="<?= BASEURL; ?>/js/ajax.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/rentalmobil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    
    <div class="dalamnya">
        <div class="button-atas">
        <button class="mobil"><a href="<?= BASEURL; ?>?controller=Produkadmin" class="mobil">Mobil</a></button>
        <button class="motor" ><a href="<?= BASEURL; ?>?controller=Produkadmin&method=motor" class="motor">Motor</a></button>
        </div>

        <div class="list-mobil">
            <?php foreach ($data['MobilAdmin'] as $MobilAdmin) : ?>
                <div class="produk-mobil">
                    <img src="<?= BASEURL; ?>/img/UserImg/<?= $MobilAdmin['foto_transport']; ?>" alt="">
                    <div class="layer">
                        <div class="button-icon">
                            <a href="<?= BASEURL; ?>/?controller=Produkadmin&method=update&id_transport=<?= $MobilAdmin['id_transport'];?>">
                                <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                            </a>

                            <form action="<?= BASEURL; ?>/?controller=Produkadmin&method=hapus&id_transport=<?= $MobilAdmin['id_transport'];?>" method="post">
                                <button name="hapus" class="hapus" onclick="return confirm('Anda yakin ingin menghapus produk mobil?')"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                            </form>


                        </div>
                        <p><?= $MobilAdmin['nama_transport']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>



            <div class="tambah-mobil">
                <a href="<?= BASEURL; ?>/?controller=Produkadmin&method=tambah">
                    <button class="plus-mobil" onclick="add()"><iconify-icon icon="mdi-light:plus"></iconify-icon></button>
                </a>
            </div>
            

        </div>

        <ul class="pagination">
            <?php for ($i = 1; $i <= $data['pagination']['totalPages']; $i++) : ?>
            <li class="page-item <?php echo ($i == $data['pagination']['currentPage']) ? 'active' : ''; ?>">
                <a class="page-link" href="<?php echo BASEURL . '?controller=Produkadmin&method=index&page=' . $i; ?>"><?php echo $i; ?></a>
            </li>
            <?php endfor; ?>
        </ul>

        </div>


    </div>



</body>

</html>