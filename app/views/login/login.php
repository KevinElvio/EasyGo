<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-login.css">
</head>

<body>
    <div class="login">
        <div class="box">
            <form action="<?= BASEURL; ?>/login/validasi" method="post"> 
                <H1>LOGIN</H1>
                <div class="username-login">
                    <iconify-icon icon="tdesign:user"></iconify-icon>
                    <input type="text" placeholder="Username" name="username" id="username" required>
                </div>
                <div class="password-login">
                    <iconify-icon icon="simple-line-icons:lock"></iconify-icon>
                    <input type="password" placeholder="Password" name="password" id="password" required>
                </div>
                <p class="lupapass"><a href="<?= BASEURL; ?>/login/forgetpassword">Forget password?</a></p>
                <button class="button-login" type="submit">Login</button>
                <p class="daftarskrg">Don't have account? <a href="<?= BASEURL; ?>/login/register">Register</a></p>
                <!-- <input class="button-login" type="submit" value="Login"> -->
            </form>
        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>