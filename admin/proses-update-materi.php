<?php
    include('koneksi.php');

    $id=$_POST['id'];
    $judul=$_POST['judul'];
    $tanggal=$_POST['tanggal'];
    $isi=$_POST['isi'];

    $sql="UPDATE materi SET judul='$judul' , tanggal='$tanggal' , isi='$isi' WHERE id='$id' ";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        echo "berhasil";
        header('location:index.php');
    }
    else{
        echo "gagal";
    }

?>