<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/produkuser.css">
    <title>Document</title>
</head>
<body>
     <?php
    // include "navbaruser.php";
    ?> 
    <div class="container1">
        <button class="mobil" onclick="page('mobil')" >Mobil</button>
        <button class="motor" onclick="page('motor')">Motor</button>
    </div>
    <div class="container2">
        <div class="car" onclick="myfungsi()">    
            <img src='<?= BASEURL;?>/img/surabaya.jpg' alt="mobil">
            <div class="nama"> pagani zonda</div>
            <div class="deskripsi"> deskripsi</div>
            <div class="harga" >1200k/jam</div>
        </div>
        <div class="car" onclick="myfungsi()">    
            <img src='<?= BASEURL;?>/img/surabaya.jpg' alt="mobil">
            <div class="nama"> pagani zonda</div>
            <div class="deskripsi"> deskripsi</div>
            <div class="harga" >1200k/jam</div>
        </div>
        <div class="car" onclick="myfungsi()">    
            <img src='<?= BASEURL;?>/img/surabaya.jpg' alt="mobil">
            <div class="nama"> pagani zonda</div>
            <div class="deskripsi"> deskripsi</div>
            <div class="harga" >1200k/jam</div>
        </div>
        <div class="car" onclick="myfungsi()">    
            <img src='<?= BASEURL;?>/img/surabaya.jpg' alt="mobil">
            <div class="nama"> pagani zonda</div>
            <div class="deskripsi"> deskripsi</div>
            <div class="harga" >1200k/jam</div>
        </div>
        <div class="sepedah" onclick="myfungsi()">    
            <img src='<?= BASEURL;?>/img/surabaya.jpg' alt="mobil">
            <div class="nama"> SUpraman</div>
            <div class="deskripsi"> deskripsi</div>
            <div class="harga" >!M/JAm</div>
        </div>
    </div>

    <script>
        function myfungsi() {
        window.location.href = "produkdetail.php";
        }    
        function page(type) {
      // Ambil elemen dengan class "mobil", "motor", "car", dan "sepedah"
      var mobilBtn = document.querySelector('.mobil');
      var motorBtn = document.querySelector('.motor');
      var carElements = document.querySelectorAll('.car');
      var sepedahElements = document.querySelectorAll('.sepedah');

      // Reset kelas pada tombol
      mobilBtn.classList.remove('active');
      motorBtn.classList.remove('active');

      // Atur kelas yang aktif sesuai dengan tombol yang diklik
      if (type === 'mobil') {
        mobilBtn.classList.add('active');
        motorBtn.classList.remove('active');
        sepedahElements.forEach(function(sepedahElement) {
          sepedahElement.style.display = 'none';
        });
        carElements.forEach(function(carElement) {
          carElement.style.display = 'flex';
        });
      } else if (type === 'motor') {
        mobilBtn.classList.remove('active');
        motorBtn.classList.add('active');
        carElements.forEach(function(carElement) {
          carElement.style.display = 'none';
        });
        sepedahElements.forEach(function(sepedahElement) {
          sepedahElement.style.display = 'flex';
        });
      }
    }
  
    </script>
</body>
</html>