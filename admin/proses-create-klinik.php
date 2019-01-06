<?php
include('koneksi.php');

$nama_kegiatan=$_POST['nama_kegiatan'];
$tanggal=$_POST['tanggal'];
$peserta=$_POST['peserta'];
$waktu=$_POST['waktu'];
$tempat=$_POST['tempat'];

///CREATE
$sql="INSERT INTO klinik (nama_kegiatan,tanggal,peserta,waktu,tempat) VALUE ('$nama_kegiatan','$tanggal','$peserta','$waktu','$tempat')";
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