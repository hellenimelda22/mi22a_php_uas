<?php
/**
 * NIM : 2257401016
 * NAMA : HELLEN IMELDASARI
 * KELAS MI22A
 */  
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>