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
                
                <h1>AVANZA</h1>
                <h5>2O0.000/D</h5>
                <h2>Deskripsi Produk</h2>
                <div>
                    <iconify-icon icon="ion:speedometer-outline" width="30" height="30"></iconify-icon>
                    <h4>2400km</h4>
                </div>
                <div>
                    <iconify-icon icon="ph:calendar-light" width="30" height="30"></iconify-icon>
                    <h4>2019</h4>
                </div>
                <div>
                    <iconify-icon icon="mynaui:location" width="30" height="30"></iconify-icon>
                    <h4><a href="https://maps.app.goo.gl/ApEeUMCpKHEbY5AA8" class="maps"></a></h4>
                </div>
                <div>
                    <iconify-icon icon="fluent:text-description-20-regular" width="30" height="30"></iconify-icon>
                    <h4>Alphard adalah mobil minivan premium yang menawarkan kenyamanan dan kemewahan tingkat tinggi. Dengan desain yang elegan, interior yang mewah, dan fitur-fitur hiburan yang canggih, Alphard menjadi pilihan untuk perjalanan bisnis atau pribadi yang eksklusif. Mesin bertenaga dan teknologi terkini membuatnya menjadi simbol kemewahan di jalan.</h4>
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