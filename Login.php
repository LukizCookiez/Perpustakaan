<?php
    session_start();
    include "koneksi.php";
    $kueri = "select * from login where
        username = '$_POST[username]' and 
        password = '$_POST[password]' ";
    $go = mysqli_query($koneksi, $kueri);
    $cek = mysqli_num_rows($go);
    if($cek > 0)
    {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header(header: 'location:Read.php');
    }
    else
    {
        header(header: 'location:index.php?USERNAME_DAN_PASSWORD_SALAH!');
    }
?>