<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/homepageuser.css">
    <title>Document</title>
</head>

<body>
    <div class="dalamnya">
        <div class="container1">
            <div class="judul">Pilih Kota Tujuan</div>
        </div>

        <div class="container2">
            <?php foreach ($data['destinasi'] as $destinasi) : ?>
                <a href="<?= BASEURL; ?>/?controller=Produk">
                    <div class="box" style="background-image: linear-gradient(rgba(43, 43, 43, 0.8), rgba(48, 48, 48, 0.8)), url(<?= BASEURL; ?>/img/UserImg/<?= $destinasi['foto_kota']; ?>); background-size: cover;">
                        <div class="textbox"><?= $destinasi['nama_kota'] ?></div>
                    </div>
                </a>
            <?php endforeach ?>
        </div>
    </div>

</body>