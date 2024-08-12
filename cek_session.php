<?php
 /**
 * NIM : 2257401016
 * NAMA : HELLEN IMELDASARI
 * KELAS MI22A
 */ 
session_start();
if (!isset($_SESSION['user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>