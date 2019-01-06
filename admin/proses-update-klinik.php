<?php
    include('koneksi.php');

    $id=$_POST['id'];
    $nama_kegiatan=$_POST['nama_kegiatan'];
    $tanggal=$_POST['tanggal'];
    $peserta=$_POST['peserta'];
    $waktu=$_POST['waktu'];
    $tempat=$_POST['tempat'];

    $sql="UPDATE klinik SET nama_kegiatan='$nama_kegiatan' , tanggal='$tanggal' , peserta='$peserta' , waktu='$waktu' , tempat='$tempat' WHERE id='$id' ";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        echo "berhasil";
        header('location:index.php');
    }
    else{
        echo "gagal";
    }

?>