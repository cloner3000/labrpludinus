<?php
    include('koneksi.php');

    $id=$_GET['id'];
    //var_dump($id);
    $sql="DELETE FROM dosen WHERE id=$id";
    $query=mysqli_query($koneksi, $sql);
    if($query){
        echo "berhasil di delete";
        header('location:index.php');
    }
    else
    {
        echo "gagal di delete";
    }

?>