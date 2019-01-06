<?php
include('koneksi.php');

$nama=$_POST['nama'];
$ttl=$_POST['tempat_tgl_lahir'];
$jurusan=$_POST['jurusan'];
$nim=$_POST['nim'];
$email=$_POST['email'];

///CREATE
$sql="INSERT INTO mahasiswa (nama,tempat_tgl_lahir,jurusan,nim,email) VALUE ('$nama','$ttl','$jurusan','$nim','$email')";
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