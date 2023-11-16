<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="Asets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/updateproduk.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php
    include "navbarrental.php";
    ?>

    <div class="luar">
        <div class="pembungkus">
            <div class="gambar">
                <h2>Upload Image</h2>
                <div class="inputan">
                    <img src="../Asets/img/avanza.jpg" alt="">
                    <div class="pilihfile">
                    <input type="file" name="choose file" id="">
                </div>
                </div>
                
            </div>

            <div class="form">
                <div class="form-1">
                    <label for="MerkMobil">Merk Mobil</label>
                    <div class="input-with-icon">
                        <iconify-icon icon="arcticons:car"></iconify-icon>
                        <input type="text" name="MerkMobil" id="" value="Avanza">
                    </div>
                </div>
                <div class="form-1">
                    <label for="HargaSewa">Harga Sewa</label>
                    <div class="input-with-icon">
                        <iconify-icon icon="fa6-solid:rupiah-sign"></iconify-icon>
                        <input type="text" name="MerkMobil" id="" value="250.000">
                    </div>
                </div>
                <div class="form-1">
                    <label for="TotalKilo">Total Kilometer</label>
                    <div class="input-with-icon">
                        <iconify-icon icon="material-symbols-light:speed-outline"></iconify-icon>
                        <input type="text" name="MerkMobil" id="" value="25 Kilometer">
                    </div>
                </div>
                <div class="form-1">
                    <label for="TahunKeluar">Tahun Keluaran</label>
                    <div class="input-with-icon">
                        <iconify-icon icon="ph:calendar-thin"></iconify-icon>
                        <input type="text" name="MerkMobil" id="" value="2019">
                    </div>
                </div>
                <div class="form-1">
                    <label for="Deskripsi">Deskripsi Singkat</label>
                    <div class="input-with-icon">
                        <iconify-icon icon="material-symbols-light:text-ad-outline"></iconify-icon>
                        <input type="text" name="MerkMobil" id="" value="Baret di sebelah kanan">
                    </div>
                </div>
            </div>
        </div>
        <div class="button-kirim">
            <button>Update</button>
        </div>
    </div>
</body>

</html>