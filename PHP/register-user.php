<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <link rel="icon" href="../Asets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style-register.css">
</head>


<body>
    <div class="login">
        <img src="../Asets/img/background-login.png" alt="">
        <div class="box">
            <form>
                <H1>Register</H1>
                <div class="register">
                    <input type="text" placeholder="Nama">
                </div>
                <div class="register">
                    <input type="text" placeholder="Username">
                </div>
                <div class="register">
                    <input type="email" placeholder="Email">
                </div>
                <div class="register">
                    <input type="password" placeholder="Password">
                </div>
                <div class="register">
                    <input type="password" placeholder="Re-Password">
                </div>
                <label>
                    <input class="ketentuan" id="checkPenyewa" type="checkbox">
                    Daftar sebagai penyewa
                </label>
                <div class="form-penyewa">
                    <div class="register">
                        <input type="text" placeholder="Nama Rental">
                    </div>
                    <div class="register">
                        <input type="text" placeholder="No Telepon">
                    </div>
                    <div class="register">
                        <input type="text" placeholder="Provinsi">
                    </div>
                    <div class="register">
                        <input type="text" placeholder="Kota">
                    </div>
                </div>
                <input class="button-login" type="button" value="Register">
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