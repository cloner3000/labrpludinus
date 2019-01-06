<?php
    include('koneksi.php');

    $id=$_POST['id'];
    $judul=$_POST['judul'];
    $nama=$_POST['nama'];
    $tanggal=$_POST['tanggal'];
    $isi=$_POST['isi'];
    $link=$_POST['link'];

    $sql="UPDATE publikasi SET judul='$judul' , nama='$nama' ,  tanggal='$tanggal' , isi='$isi' , link='$link' WHERE id='$id' ";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        echo "berhasil";
        header('location:index.php');
    }
    else{
        echo "gagal";
    }

?>