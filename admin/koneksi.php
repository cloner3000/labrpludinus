<?php
    $username="sql12272896";
    $password="AeRIaNTNhv";
    $server="sql12.freemysqlhosting.net";
    $namadatabase="sql12272896";
    $koneksi=mysqli_connect($server,$username,$password,$namadatabase);

    if(!$koneksi){
        echo "gagal koneksi!!";
        die();
    }
?> 