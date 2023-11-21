<?php

// Database

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','NO');
define('DB_NAME','easygo');

$conn = mysqli_connect($DB_HOST, $DB_USER, '', $DB_NAME);
if ($conn->connect_error)
{
    die('KONEKSI GAGAL:'. $conn->connect_error);
}

