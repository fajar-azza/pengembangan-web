
<!--jika ada variabel session maka harus menggunakan session start-->
<?php
session_start();
//jika nilai dari login adalah benar, maka akan lansung diarahkan ke menu beranda.php
if(isset($_SESSION['login'])){
    header('location:beranda.php'); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--Ini adalah Session dimana jika username dan password salah maka ada pesan yang tampil-->
    <?php
        if(isset($_SESSION['pesan'])){
            echo $_SESSION['pesan'];
        }
        
        ?>
<!--ini adalah form awal dari login-->
<form method="post" action="fungsi_login.php" > 
    
    <div>
        <label for="">Username</label> <br>
        <input type="text" name="username" style="border: <?= (isset($_SESSION['psn-user']))?"1px solid red": null ?>;"><br>

        <!--ini adalah fungsi untuk menarik session jika username kosong-->
        <?php
        if(isset($_SESSION['psn-user'])){
            echo'<span style="color: red; font-style:italic">'. $_SESSION['psn-user'].'</span>';
        }
        ?>
    </div>


    <div>
        <label for="">Password</label> <br>
        <input type="password" name="password"><br>
        <!--ini adalah fungsi untuk menarik session jika password kosong-->
        <?php
        if(isset($_SESSION['psn-password'])){
            echo $_SESSION['psn-password'];
        }
        ?>
    </div>

    <div>
        <button type="submit" name="btn-login">Login</button>
    </div> 

</form>

</body>
</html>
<!--fungsi session destroy digunakan supaya tidak ada yang bisa mengakses form login setelah username dimasukkan-->
<?php
session_destroy()
?>