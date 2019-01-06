<?php
include('koneksi.php');

$nama=$_POST['nama'];
$ttl=$_POST['tempat_tgl_lahir'];
$email=$_POST['email'];

///CREATE
$sql="INSERT INTO dosen (nama,tempat_tgl_lahir,email) VALUE ('$nama','$ttl','$email')";
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