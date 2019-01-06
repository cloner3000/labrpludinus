<?php
include('koneksi.php');

$tahun=$_POST['tahun'];
$bidang_kajian=$_POST['bidang_kajian'];

///CREATE
$sql="INSERT INTO bidang_kajian (tahun,bidang_kajian) VALUE ('$tahun' , '$bidang_kajian')";
$query= mysqli_query($koneksi,$sql);
if($query){
    echo "Berhasil disimpan";
    header('location:index.php');
}
else
{
    echo "gagal";
}


?>