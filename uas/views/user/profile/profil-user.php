<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/profilrental.css">
</head>

<body>

    <div class="box-profile">
        <h2>Kevin Elvio</h2>
        <!-- <h1>Seller</h1> -->
        <div class="keterangan">
            <div class="konten-profil">
                <img src="<?= BASEURL; ?>/img/profil.JPG" alt="">
                <div class="konten-profil2">
                    <div class="telepon">
                        <iconify-icon icon="lets-icons:phone-light"></iconify-icon>
                        <h4>0853423458923</h4>
                    </div>
                    <div class="lokasi-profil">
                        <iconify-icon icon="ep:location"></iconify-icon>
                        <h4>Tanggul, Jember</h4>
                    </div>
                    <div class="email">
                        <iconify-icon icon="ep:message"></iconify-icon>
                        <h4>Kevinelvio@gmail.com</h4>
                    </div>
                </div>

            </div>

            <div class="edit">
                <div class="hapus-akun">
                    <h3><a href="">Hapus Akun</a></h3>
                </div>
                <div class="edit-profile">
                    <h3><a href="<?= BASEURL; ?>/?controller=Profile&method=editprofil">Edit Profile</a></h3>
                    <a href="<?= BASEURL; ?>/?controller=Profile&method=editprofil"><iconify-icon icon="akar-icons:edit" style="color: white; vertical-align: middle;"></iconify-icon></a>
                </div>
            </div>
            <a class="logout" href="<?= BASEURL; ?>/?controller=Logout" onclick="return confirm('Anda yakin ingin Logout dari akun user?')"><iconify-icon icon="tabler:logout" style="color: #004aad;"></iconify-icon></a>

        </div>

    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>