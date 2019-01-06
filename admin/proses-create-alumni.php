<?php
include('koneksi.php');

$nama=$_POST['nama'];
$ttl=$_POST['tempat_tgl_lahir'];
$jurusan=$_POST['jurusan'];
$tahun_lulus=$_POST['tahun_lulus'];
$email=$_POST['email'];

///CREATE
$sql="INSERT INTO alumni (nama,tempat_tgl_lahir,jurusan,tahun_lulus,email) VALUE ('$nama','$ttl','$jurusan','$tahun_lulus','$email')";
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