<?php

define("BASEURL","http://localhost/EasyGoMVC/EasyGo/public");


// Database

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'easygo';

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_error)
{
    die('KONEKSI GAGAL:'. $conn->connect_error);
}

