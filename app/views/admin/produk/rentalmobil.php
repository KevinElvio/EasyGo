<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="<?= BASEURL;?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/rentalmobil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <?php
    // include "navbarrental.php";
    ?>

    <div class="button-atas">
        <button class="mobil" onclick="page('mobil')" >Mobil</button>
        <button class="motor" onclick="page('motor')">Motor</button>
    </div>

    <div class="list-mobil">
        <div class="produk-mobil">
            <img src="<?= BASEURL;?>/img/avanza.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Avanza Cth</p>
            </div>
        </div>
        <div class="produk-mobil">
            <img src="<?= BASEURL;?>/img/avanza.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Avanza Cth</p>
            </div>
        </div>
        <div class="produk-mobil">
            <img src="<?= BASEURL;?>/img/avanza.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Avanza Cth</p>
            </div>
        </div>

        <div class="tambah-mobil">
            <button class="plus-mobil" onclick="add()"><iconify-icon icon="mdi-light:plus"></iconify-icon></button>
        </div>
    </div>
    <div class="list-motor">
        <div class="produk-motor">
            <img src="<?= BASEURL;?>/img/vesmet.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Vespa Matic</p>
            </div>
        </div>
        <div class="produk-motor">
            <img src="<?= BASEURL;?>/img/vesmet.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Vespa Matic</p>
            </div>
        </div>
        <div class="produk-motor">
            <img src="<?= BASEURL;?>/img/vesmet.jpg" alt="">
            <div class="layer">
                <div class="button-icon">
                    <button class="edit"><iconify-icon icon="cil:pencil"></iconify-icon></button>
                    <button class="hapus"><iconify-icon icon="system-uicons:trash"></iconify-icon></button>
                </div>
                <p>Vespa Matic</p>
            </div>
        </div>

        <div class="tambah-motor">
            <button class="plus-motor" onclick="addmt()"><iconify-icon icon="mdi-light:plus"></iconify-icon></button>
        </div>
    </div>
    <script>
         function add() {
        window.location.href = "createproduk.php";
        }
        function addmt() {
        window.location.href = "createproduk.php";
        }

        function page(type) {
      // Ambil elemen dengan class "mobil", "motor", "car", dan "sepedah"
      var mobilBtn = document.querySelector('.mobil');
      var motorBtn = document.querySelector('.motor');
      var carElements = document.querySelectorAll('.list-mobil');
      var sepedahElements = document.querySelectorAll('.list-motor');

      // Reset kelas pada tombol
      mobilBtn.classList.remove('active');
      motorBtn.classList.remove('active');

      // Atur kelas yang aktif sesuai dengan tombol yang diklik
      if (type === 'mobil') {
        mobilBtn.classList.add('active');
        motorBtn.classList.remove('active');
        sepedahElements.forEach(function(sepedahElement) {
          sepedahElement.style.display = 'none';
        });
        carElements.forEach(function(carElement) {
          carElement.style.display = 'flex';
        });
      } else if (type === 'motor') {
        mobilBtn.classList.remove('active');
        motorBtn.classList.add('active');
        carElements.forEach(function(carElement) {
          carElement.style.display = 'none';
        });
        sepedahElements.forEach(function(sepedahElement) {
          sepedahElement.style.display = 'flex';
        });
      }
    }
  
    </script>

</body>

</html>