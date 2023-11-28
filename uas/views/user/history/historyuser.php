<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGo - Solusi Terbaik Penyewaan Transportasi</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/historyuser.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="dalamnya">
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
                    <?php foreach ($data['historyUser'] as $historyUser) : ?>
                        <tr>
                            <td><img src="<?= BASEURL; ?>/img/UserImg/<?= $historyUser['foto_transport']; ?>" alt=""></td>
                            <td>
                                <p><?= $historyUser['nama_transport'] ?></p>
                            </td>
                            <td>
                                <p><?= $historyUser['tgl_order'] ?></p>
                            </td>
                            <td>
                                <p><?= $historyUser['id_order'] ?></p>
                            </td>
                            <td>
                                <p><?= $historyUser['total'] ?></p>
                            </td>
                            <td>
                                <p class="status"><?= $historyUser['jenis_status'] ?></p>
                            </td>
                            <td>
                                <p class="detail"><a href="<?= BASEURL; ?>/?controller=History&method=detail&id_order=<?= $historyUser['id_order']; ?>">Detail</a><iconify-icon icon="system-uicons:arrow-up" rotate="90deg"></iconify-icon></p>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>


</body>

</html>