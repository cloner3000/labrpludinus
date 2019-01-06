<?php
    include('koneksi.php');

    $id=$_POST['id'];
    $judul=$_POST['judul'];
    $tanggal=$_POST['tanggal'];
    $keterangan=$_POST['keterangan'];
    $link=$_POST['link'];
    $tipe=$_POST['tipe'];
    

    $sql="UPDATE download SET judul='$judul' ,  tanggal='$tanggal' , keterangan='$keterangan' , link='$link' , tipe='$tipe' WHERE id='$id' ";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        echo "berhasil";
        header('location:index.php');
    }
    else{
        echo "gagal";
    }

?>