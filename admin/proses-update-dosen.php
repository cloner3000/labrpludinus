<?php
    include('koneksi.php');

    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $ttl=$_POST['tempat_tgl_lahir'];
    $email=$_POST['email'];

    //var_dump($id);
    //var_dump($nm);
    //var_dump($email);
    //var_dump($pass);

    /*
    UPDATE table_name
    SET column1 = value1, column2 = value2, ...
    WHERE condition;
    */
    $sql="UPDATE dosen SET nama='$nama' , tempat_tgl_lahir='$ttl' , email='$email' WHERE id='$id' ";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        echo "berhasil";
        header('location:index.php');
    }
    else{
        echo "gagal";
    }

?>