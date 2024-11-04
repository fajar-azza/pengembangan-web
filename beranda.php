<?php
//jika tidak ada nilai true dari login maka tidak akan yang bisa mengakses file beranda.php
session_start();
if(!isset($_SESSION['login'])){
    header('location:form_login.php');
    exit();
}
?>

hai anda berhasil login

<a href="fungsi_logout.php">logout</a>