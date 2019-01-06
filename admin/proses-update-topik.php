<?php
    include('koneksi.php');

    $id=$_POST['id'];
    $judul=$_POST['judul'];
    $tanggal=$_POST['tanggal'];
    $nama=$_POST['nama'];
    $isi=$_POST['isi'];

    $sql="UPDATE topik SET judul='$judul' , tanggal='$tanggal', nama='$nama' , isi='$isi' WHERE id='$id' ";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        echo "berhasil";
        header('location:index.php');
    }
    else{
        echo "gagal";
    }

?>