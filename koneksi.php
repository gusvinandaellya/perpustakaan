<?php
    $host   = "localhost";
    $user   = "root";
    $pass   = "";
    $db     = "perpus";
    $con    = mysqli_connect($host, $user, $pass, $db);
    if(!$con){
        echo "Tidak dapat terhubung ke database" . mysqli_connect_error();
    }
?>