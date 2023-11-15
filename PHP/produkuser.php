<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/produkuser.css">
    <title>Document</title>
</head>
<body>
    <?php
    include "navbaruser.php";
    ?>
    <div class="container1">
        <button class="mobil" >Mobil</button>
        <button class="motor" >Motor</button>
    </div>
    <div class="container2">
        <div class="box" onclick="myfungsi()">    
            <img src='../Asets/img/surabaya.jpg' alt="mobil">
            <div class="nama"> pagani zonda</div>
            <div class="deskripsi"> deskripsi</div>
            <div class="harga" >1200k/jam</div>
        </div>
    </div>

    <script>
        function myfungsi() {
        window.location.href = "produkdetail.php";
        }
    </script>
</body>
</html>