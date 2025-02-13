<?php
    $server='localhost';
    $username='root';
    $password='';
    $database='db_buku';

    // web hosting 
    // $server='sql100.infinityfree.com';
    // $username='if0_37648144';
    // $password='lahkokgitureq21';
    // $database='if0_37648144_db_buku';

    $koneksi=mysqli_connect($server,$username,$password,$database) or die ('Hidupkan Server');
?>