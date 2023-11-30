<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/kode.css">
</head>

<body>
    <div class="login">
        <div class="box">
            <form action="<?= BASEURL; ?>/?controller=Login&method=forgetpw" method="post"> 
                <H2>Authentication Code</H2>
                <div class="username-login">
                    <iconify-icon icon="tdesign:user"></iconify-icon>
                    <input type="text" placeholder="Authentication Code" name="Authentication Code" required>
                </div>
                <button class="button-login" type="submit">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>