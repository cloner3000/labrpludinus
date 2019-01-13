<?php
    $username="sql12273958";
    $password="QDM1yLLnKV";
    $server="sql12.freemysqlhosting.net";
    $namadatabase="sql12273958";
    $koneksi=mysqli_connect($server,$username,$password,$namadatabase);

    if(!$koneksi){
        echo "gagal koneksi!!";
        die();
    }
?> 