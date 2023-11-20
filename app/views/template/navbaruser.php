<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="Asets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/navbaruser.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <div class="atas">
        <img src="../Asets/img/logo.png" alt="">
        <div class="tombol">
            <a href="#" onclick="home()">Home</a>
            <a href="#" onclick="history()">History</a>
            <a href="#" onclick="profil()">Profil</a>
        </div>
        <div class="profil">
            <p>Username</p>
            <iconify-icon icon="iconamoon:profile-circle-light"></iconify-icon>
        </div>
    </div>
    <script>
        function home() {
        window.location.href = "homepageuser.php";
        }
        function history() {
        window.location.href = "historyuser.php";
        }
        function profil() {
        window.location.href = "profil-user.php";
        }
    </script>
</body>

</html>