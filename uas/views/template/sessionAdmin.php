<?php
session_start();

if( !isset($_SESSION["loginAdmin"]))
{
    header("Location:" . BASEURL . "/?controller=Login");
    exit;
}

?>