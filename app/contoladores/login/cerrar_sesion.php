<?php
include("../../../app/config.php");

session_start();

if (isset($_SESSION['sesion_email'])){
    session_destroy();
    header('location: ' . $url . '/veterianaria.php');
}