<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/registeradmin.css">
</head>


<body>
    <div class="login">
        <div class="box">
            <form action="<?= BASEURL; ?>/login/tambahadmin" method="post">
                <H1>Register</H1>
                <div class="register">
                    <input type="text" placeholder="Username" id="username" name="username" required>
                </div>
                <div class="register">
                    <input type="email" placeholder="Email" id="email_user" name="email_user" required>
                </div>
                <div class="register">
                    <input type="password" placeholder="Password" id="password" name="password" required>
                </div>
                <div class="register">
                    <input type="password" placeholder="Re-Password" id="re-password" name="re-password" required>
                </div>

                <div class="register">
                    <input type="text" name="nama_rental" placeholder="Nama Rental" required>
                </div>
                <div class="register">
                    <input type="text" name="no_telp" placeholder="No Telepon" required>
                </div>
                <div class="register">
                    <input type="text" name="link_maps" placeholder="Link Maps" required>
                </div>
                <div class="register">
                    <select name="provinsi" id="provinsi">
                        <option value="" disabled selected>Pilih Provinsi</option>
                        <option value="1">Jawa Timur</option>
                        <option value="2">Jawa Barat</option>
                        <option value="3">Jawa Tengah</option>
                        <option value="4">DKI Jakarta</option>
                        <option value="5">DI Yogyakarta</option>
                        <option value="6">Bali</option>
                        <option value="7">Sumatera Utara</option>
                    </select>
                </div>
                <div class="register">
                <select name="kota" id="kota">
                        <option value="" disabled selected>Pilih Provinsi</option>
                        <option value="1">Surabaya</option>
                        <option value="2">Jakarta</option>
                        <option value="3">Bandung</option>
                        <option value="4">Malang</option>
                        <option value="5">Semarang</option>
                        <option value="6">Bekasi</option>
                        <option value="7">Yogyakarta</option>
                        <option value="8">Banyuwangi</option>
                        <option value="9">Denpasar</option>
                        <option value="10">Jember</option>
                    </select>
                </div>

                <button class="button-login" type="submit">Register</button>
            </form>
        </div>
    </div>

</body>

</html>