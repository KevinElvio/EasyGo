<?php
session_start();

if( !isset($_SESSION["login"]))
{
    header("Location:" . BASEURL . "?controller=Login");
    exit;
}

?>