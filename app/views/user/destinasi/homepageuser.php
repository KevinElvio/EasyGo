<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/homapageuser.css">
    <title>Document</title>
</head>
<body>
    <?php
    include "navbaruser.php";
    ?>
    <div class="container1">
        <div class="judul">Pilih Kota Tujuan</div>
    </div>
    <div class="container2">
        <div class="box" onclick="myfungsi()">
            <div class="textbox" >surabaya</div>            
        </div>
        <div class="box" onclick="myfungsi()">
            <div class="textbox" >surabaya</div>            
        </div>
        <div class="box" onclick="myfungsi()">
            <div class="textbox" >surabaya</div>            
        </div>
        <div class="box" onclick="myfungsi()">
            <div class="textbox" >surabaya</div>            
        </div>
        <div class="box" onclick="myfungsi()">
            <div class="textbox" >surabaya</div>            
        </div>
        <div class="box" onclick="myfungsi()">
            <div class="textbox" >surabaya</div>            
        </div>
    </div>

    <script>
        function myfungsi() {
        window.location.href = "produkuser.php";
        }
    </script>
</body>