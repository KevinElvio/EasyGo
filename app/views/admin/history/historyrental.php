<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="Asets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/historyrental.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php
    include "navbarrental.php";
    ?>

    <h2 class="judul">History</h2>
    <div class="table-container">
        <table class="table rounded table-borderless">
            <thead class="thead-light">
                <tr>
                    <th class="start">Transportasi</th>
                    <th>Nama</th>
                    <th>Tanggal Order</th>
                    <th>Order ID</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th class="end">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="../Asets/img/mobilcontoh.jpeg" alt=""></td>
                    <td><p>Azriel</p></td>
                    <td><p>10-05-2023</p></td>
                    <td><p>22</p></td>
                    <td><p>Rp 290.000</p></td>
                    <td><p class="status">Confirmed</p></td>
                    <td><p class="detail">Detail <iconify-icon icon="system-uicons:arrow-up" rotate="90deg"></iconify-icon></p></td>
                </tr>
                <tr>
                    <td><img src="../Asets/img/mobilcontoh.jpeg" alt=""></td>
                    <td><p>Azriel</p></td>
                    <td><p>10-05-2023</p></td>
                    <td><p>22</p></td>
                    <td><p>Rp 290.000</p></td>
                    <td><p class="status">Confirmed</p></td>
                    <td><p class="detail">Detail <iconify-icon icon="system-uicons:arrow-up" rotate="90deg"></iconify-icon></p></td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>