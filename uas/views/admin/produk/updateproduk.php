<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/updateproduk.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="luar">
        <h2 class="judul">Update Kendaraan</h2>
        
        <div class="back">
        <a href="<?= BASEURL; ?>/?controller=Produkadmin">
            <iconify-icon icon="ph:arrow-up-thin" rotate="-90deg" style="vertical-align: middle;"></iconify-icon>
        </a>
        </div>
        

        <div class="pembungkus">
            <div class="gambar">
                <h2>Upload Image</h2>
                <div class="inputan">
                    <img src="<?= BASEURL; ?>/img/UserImg/<?= $data['ALLProduk']['foto_transport']; ?>" alt="">
                    <div class="pilihfile">
                        <input type="file" name="file" id="">
                    </div>
                </div>

            </div>

            <div class="form">
                <div class="form-1">
                    <label for="MerkMobil">Merk Mobil</label>
                    <div class="input-with-icon">
                        <iconify-icon icon="arcticons:car" width="30" height="30"></iconify-icon>
                        <input type="text" name="MerkMobil" id="" value="<?= $data['ALLProduk']['nama_transport'];?>">
                    </div>
                </div>
                <div class="form-1">
                    <label for="HargaSewa">Harga Sewa</label>
                    <div class="input-with-icon">
                        <iconify-icon icon="fa6-solid:rupiah-sign" width="25" height="25"></iconify-icon>
                        <input type="text" name="harga" id="" value="<?= $data['ALLProduk']['harga_sewa'];?>">
                    </div>
                </div>
                <div class="form-1">
                    <label for="TotalKilo">Total Kilometer</label>
                    <div class="input-with-icon">
                        <iconify-icon icon="material-symbols-light:speed-outline" width="30" height="30"></iconify-icon>
                        <input type="text" name="total_kilometer" id="" value="<?= $data['ALLProduk']['total_kilometer'];?> Kilometer">
                    </div>
                </div>
                <div class="form-1">
                    <label for="TahunKeluar">Tahun Keluaran</label>
                    <div class="input-with-icon">
                        <iconify-icon icon="ph:calendar-thin" width="30" height="30"></iconify-icon>
                        <input type="text" name="tahun" id="" value="<?= $data['ALLProduk']['tahun_keluar'];?>">
                    </div>
                </div>
                <div class="form-1">
                    <label for="Deskripsi">Deskripsi Singkat</label>
                    <div class="input-with-icon">
                        <iconify-icon icon="material-symbols-light:text-ad-outline" width="30" height="30"></iconify-icon>
                        <input type="text" name="deskripsi" id="" value="<?= $data['ALLProduk']['deskripsi_produk'];?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="button-kirim">
            <form action="<?= BASEURL; ?>/?controller=Produkadmin&method=updatedata&id_transport=<?= $MobilAdmin['id_transport'];?>" method="POST">
                <button>Update</button>
            </form>
        </div>
    </div>
</body>

</html>