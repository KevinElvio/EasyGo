<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-register.css">
</head>


<body>
    <div class="login">
        <div class="box">
            <form action="<?=BASEURL; ?>/?controller=Login&method=tambah" method="post">
                <H1>Register</H1>
                <div class="register">
                    <input type="text" placeholder="Nama" id="nama_lengkap" name="nama_lengkap" required>
                </div>
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
                <p class="daftarrental" style="text-align: right;"><a href="<?= BASEURL; ?>/?controller=Login&method=registeradmin">Register as Rental</a></p>
                <!-- <label>
                    <input class="ketentuan" id="checkPenyewa" type="checkbox" name="admin">
                    Daftar sebagai penyewa <br>
                </label>
                <div class="form-penyewa">
                    <div class="register">
                        <input type="text" placeholder="Nama Rental">
                    </div>
                    <div class="register">
                        <input type="text" placeholder="No Telepon">
                    </div>
                    <div class="register">
                        <input type="text" placeholder="Link Maps">
                    </div>
                    <div class="register">
                        <input type="text" placeholder="Provinsi">
                    </div>
                    <div class="register">
                        <input type="text" placeholder="Kota">
                    </div>
                </div> -->
                <button class="button-login" type="submit">Register</button>
            </form>
        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script>
       document.addEventListener('DOMContentLoaded', function() {
        var checkPenyewa = document.getElementById('checkPenyewa');
        var formPenyewa = document.querySelector('.form-penyewa');

        // Tambahkan event listener untuk mengubah tampilan form-penyewa saat checkbox diubah
        checkPenyewa.addEventListener('change', function() {
            formPenyewa.style.display = formPenyewa.style.display === 'block' ? 'none' : 'block';
        });
        });

    </script>
</body>

</html>