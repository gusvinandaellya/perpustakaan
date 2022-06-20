<?php
    include "koneksi.php";

    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $r_pass     = $_POST['r_password'];

    
    if($password == $r_pass){
        mysqli_query($con, "INSERT INTO user values('','$username','$password')");
        header("location:login.php");
    }else if($password != $r_pass){
        header("location:register.php?pesan=tidaksama");
    }else{
        header("location:register.php?pesan=gagal");
    }
?>