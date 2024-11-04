<?php

//fungsi jika sistem tidak berasal dari name "btn-login" maka seluruh fungsi tidak akan dijalankan
if (!isset($_POST['btn-login'])){
    header('location:form_login.php');
    exit();
}


//mengambil dulu username dan password nya
$user = $_POST['username'];
$password = $_POST['password'];

//validasi jika username dan password kosong
session_start();

if ($user==''){
    $_SESSION['psn-user'] = "username tidak boleh kosong";
}
if ($password==''){
    $_SESSION['psn-password'] = "password tidak boleh kosong";
}
if (isset($_SESSION['psn-user'] )|| isset($_SESSION['psn-password'])){
    header('location:form_login.php');
    exit();
}

//validasi jika username yang diberikan salah

if ($user!='fajar' || $password!='123'){
    $_SESSION['pesan'] = "data tidak valid";
    header('location:form_login.php');
    exit();
}

// fungsi jika login berhasil
$_SESSION['login'] = true;
    header('location:beranda.php');


?>