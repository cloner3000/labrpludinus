<?php
    include('koneksi.php');

    $id=$_POST['id'];
    $tahun=$_POST['tahun'];
    $bidang_kajian=$_POST['bidang_kajian'];

    $sql="UPDATE bidang_kajian SET tahun='$tahun', bidang_kajian='$bidang_kajian' WHERE id='$id' ";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        echo "berhasil";
        header('location:index.php');
    }
    else{
        echo "gagal";
    }

?>