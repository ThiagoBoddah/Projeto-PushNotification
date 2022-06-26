<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('track_errors', 0);
error_reporting(0);

session_start();
if(!isset($_SESSION['user'])){
    header('location:authentication-login.php?d');
    exit();
}

?>