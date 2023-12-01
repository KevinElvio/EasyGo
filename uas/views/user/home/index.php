<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/landing_page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <div class="atas">
        <img src="<?= BASEURL; ?>/img/logo.png" alt="">
        <div class="tombol">
            <a href="index.php">Home</a>
            <a href="<?= BASEURL;?>/?controller=History">History</a>
            <a href="<?= BASEURL;?>/?controller=Profile">Profil</a>
        </div>
        <div class="login-awal">
            <button><a href="<?= BASEURL; ?>/?controller=Login">Login</a></button>
        </div>
    </div>

    <div class="isi">
        <div class="tengah">
            <p class="satu">Mudahkan Perjalananmu</p>
            <p class="dua">Sewa Kendaraan <br> Terpercaya di EasyGo</p>
            <p class="tiga">EasyGo Easy Access Wherever You Go</p>
            <div class="list">
                <ul>
                    <li>Tersedia di Beberapa Kota</li>
                    <li>Pilih Kendaraanmu Sendiri!</li>
                    <li>Terpercaya</li>
                    <li>Tidak Ribet</li>
                </ul>
            </div>
            <div class="daftar-tengah">
                <button class="btn-daftar"><a href="<?= BASEURL; ?>/?controller=Login&method=register">Daftar Sekarang</a></button>
            </div>
            <div class="icon-tengah">
                <iconify-icon icon="pepicons-pencil:car"></iconify-icon>
                <iconify-icon icon="carbon:map"></iconify-icon>
                <iconify-icon class="motor" icon="healthicons:basic-motorcycle-outline"></iconify-icon>
                <iconify-icon icon="codicon:workspace-trusted"></iconify-icon>
            </div>
        </div>

        <div class="kotak-putih">
            <div class="isian-kotak">
                <div class="satu-kiri">
                    <p class="kiri-pertama">Partner <br> Terpercaya</p>
                    <p class="isian-kedua">Kepuasan dan kenyamanan <br> anda dijamin disini</p>
                </div>
                <div class="dua-tengah">
                    <p class="tengah-pertama">20+ Rental</p>
                    <p class="isian-abu">Di Indonesia</p>
                </div>
                <div class="tiga-kanan">
                    <p class="tengah-pertama">120 Pengguna</p>
                    <p class="isian-abu">Percaya Website Ini</p>
                </div>
            </div>
            <div class="daftar-kotak">
                <button class="btn-kotak"><a href="<?= BASEURL; ?>/?controller=login">Coba Gratis!</a></button>
            </div>
        </div>
    </div>

</body>

</html>