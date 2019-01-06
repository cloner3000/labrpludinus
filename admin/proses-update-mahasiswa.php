<?php
    include('koneksi.php');

    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $ttl=$_POST['tempat_tgl_lahir'];
    $jurusan=$_POST['jurusan'];
    $nim=$_POST['nim'];
    $email=$_POST['email'];

    $sql="UPDATE mahasiswa SET nama='$nama' , tempat_tgl_lahir='$ttl' , jurusan='$jurusan', nim='$nim', email='$email' WHERE id='$id' ";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        echo "berhasil";
        header('location:index.php');
    }
    else{
        echo "gagal";
    }

?>