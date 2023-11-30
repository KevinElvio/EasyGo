<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/createproduk.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php
    // include "navbarrental.php";
    ?>

    <div class="luar">
        <h2 class="judul">Tambah Kendaraan</h2>

        <div class="back">
            <a href="<?= BASEURL; ?>/?controller=Produkadmin">
                <iconify-icon icon="ph:arrow-up-thin" rotate="-90deg" style="vertical-align: middle;"></iconify-icon>
            </a>
        </div>


        <form action="<?= BASEURL; ?>/?controller=Produkadmin&method=tambahprodukadmin" method="post">
            <div class="pembungkus">
                <div class="gambar">
                    <h2>Upload Image</h2>
                    <div class="inputan">
                        <input type="file" name="file" id="File" required>
                    </div>
                </div>

                <div class="form">
                    <div class="form-1">
                        <label for="JenisKendaraan">Jenis Kendaraan</label>
                        <div class="input-with-icon">
                            <iconify-icon icon="fluent:arrow-eject-20-regular" rotate="90deg" width="30" height="30"></iconify-icon>
                            <select name="JenisKendaraan" id="JenisKendaraan">
                                <option value="" disabled selected>Pilih Merek Mobil</option>
                                <option value="1">Mobil</option>
                                <option value="2">Motor</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-1">
                        <label for="NamaTransport">Nama Transport</label>
                        <div class="input-with-icon">
                            <iconify-icon icon="mdi-light:pencil" width="30" height="30"></iconify-icon>
                            <input type="text" name="NamaTransport" id="NamaTransport" required>
                        </div>
                    </div>
                    <div class="form-1">
                        <label for="MerkMobil">Merk Mobil</label>
                        <div class="input-with-icon">
                            <iconify-icon icon="arcticons:car" width="30" height="30"></iconify-icon>
                            <input type="text" name="MerkMobil" id="MerkMobil" required>
                        </div>
                    </div>
                    <div class="form-1">
                        <label for="HargaSewa">Harga Sewa</label>
                        <div class="input-with-icon">
                            <iconify-icon icon="fa6-solid:rupiah-sign" width="30" height="30"></iconify-icon>
                            <input type="number" name="HargaSewa" id="HargaSewa" required>
                        </div>
                    </div>
                    <div class="form-1">
                        <label for="TotalKilo">Total Kilometer</label>
                        <div class="input-with-icon">
                            <iconify-icon icon="material-symbols-light:speed-outline" width="30" height="30"></iconify-icon>
                            <input type="number" name="TotalKilometer" id="TotalKilometer" required>
                        </div>
                    </div>
                    <div class="form-1">
                        <label for="TahunKeluar">Tahun Keluaran</label>
                        <div class="input-with-icon">
                            <iconify-icon icon="ph:calendar-thin" width="30" height="30"></iconify-icon>
                            <input type="number" name="TahunKeluar" id="TahunKeluar" required>
                        </div>
                    </div>
                    <div class="form-1">
                        <label for="Deskripsi">Deskripsi Singkat</label>
                        <div class="input-with-icon">
                            <iconify-icon icon="material-symbols-light:text-ad-outline" width="30" height="30"></iconify-icon>
                            <input type="text" name="Deskripsi" id="Deskripsi" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-kirim">
                <button type="submit">Kirim</button>
            </div>
        </form>
    </div>
</body>

</html>