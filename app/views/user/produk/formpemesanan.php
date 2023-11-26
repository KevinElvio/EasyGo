<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/formpemesanan.css">
    <title>Document</title>
</head>

<body>
    <?php
    // include "navbaruser.php";
    ?>
    <div class="dalamnya">
        <div class="container1">
            <div class="judul">
                EasyGo Rental Form
            </div>
            <div class="back">
                <a href="<?= BASEURL; ?>/produk">
                    <iconify-icon icon="ph:arrow-up-thin" rotate="-90deg" style="vertical-align: middle;"></iconify-icon>
                </a>
            </div>
            <img src='<?= BASEURL; ?>/img/avanza.jpg' alt="mobil">
        </div>
        <div class="container2">
            <div class="box1">
                <div class="input">
                    <h3> Nama Penyewa</h3>
                    <div class="logo">
                        <iconify-icon icon="iconamoon:profile-circle-thin" style="vertical-align: middle;"></iconify-icon></iconify-icon>
                        <input type="text" placeholder="Nama">
                    </div>
                </div>
                <div class="input">
                    <h3> Email</h3>
                    <div class="logo">
                        <iconify-icon icon="mdi-light:email"></iconify-icon>
                        <input type="text" placeholder="Email">
                    </div>
                </div>
                <div class="input">
                    <h3> Nama Rental</h3>
                    <div class="logo">
                        <iconify-icon icon="arcticons:car"></iconify-icon>
                        <input type="text" placeholder="Nama Rental">
                    </div>
                </div>
                <div class="input">
                    <h3> Lokasi</h3>
                    <div class="logo">
                        <iconify-icon icon="system-uicons:location"></iconify-icon>
                        <input type="text" placeholder="Lokasi">
                    </div>
                </div>
                <div class="input">
                    <h3>No Telepon</h3>
                    <div class="logo">
                        <iconify-icon icon="fluent:call-20-regular"></iconify-icon>
                        <input type="text" placeholder="No Telepon">
                    </div>
                </div>
                <div class="input">
                    <h3>Harga Sewa</h3>
                    <div class="logo">
                        <iconify-icon icon="ph:money-thin"></iconify-icon>
                        <input type="text" placeholder="Harga">
                    </div>
                </div>

            </div>
            <div class="box2">
                <div class="detail">
                    <h2>Pilih Tanggal Penyewaan</h2>
                </div>
                <div class="rent">
                    <div class="date">
                        <H3> Tanggal Peminjaman</H3>
                        <input type="date" placeholder=" Tanggal peminjaman">
                    </div>
                    <div class="date">
                        <H3> Tanggal Pengembalian</H3>
                        <input type="date" placeholder=" Tanggal pengembalian">
                    </div>
                </div>
                <table>
                    <tr>
                        <th>Minggu</th>
                        <th>Senin</th>
                        <th>Selasa</th>
                        <th>Rabu</th>
                        <th>Kamis</th>
                        <th>Jumat</th>
                        <th>Sabtu</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>30</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                </table>

            </div>
        </div>

        <div class="button-kirim">
            <button>Rent</button>
        </div>
    </div>

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>


</body>

</html>