<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="Asets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/createproduk.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php
    include "navbarrental.php";
    ?>

    <div class="luar">
        <div class="pembungkus">
            <div class="gambar">
                <h2>Upload Image</h2>
                <div class="inputan">
                    <input type="file" name="choose file" id="">
                </div>
            </div>

            <form class="row row-cols-lg-auto g-3 align-items-center">
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-text"><iconify-icon icon="arcticons:car"></iconify-icon></div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                    </div>
                </div>
            </form>
        </div>
        <!-- <div class="button">
            <button>Kirim</button>
        </div> -->
    </div>
</body>

</html>