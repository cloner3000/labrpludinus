<?php
    $username="id8392931_labrpludinus";
    $password="niken1998";
    $server="localhost";
    $namadatabase="id8392931_tugas_akhir";
    $koneksi=mysqli_connect($server,$username,$password,$namadatabase);

    if(!$koneksi){
        echo "gagal koneksi!!";
        die();
    }
?> 