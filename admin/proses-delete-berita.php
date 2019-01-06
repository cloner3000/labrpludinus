<?php
    include('koneksi.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $isi="SELECT * FROM berita WHERE id=$id";
        $tmp_data=mysqli_query($koneksi,$isi);
        $arr=mysqli_fetch_array($tmp_data);
        if (isset($arr['gambar'])) {
            if (is_file("../image/".$arr['gambar'])) {
                unlink("../image/".$arr['gambar']);
            }
        }
        //var_dump($id);
        $sql="DELETE FROM berita WHERE id=$id";
        $query=mysqli_query($koneksi, $sql);
        if($query){
            echo "berhasil di delete";
            header('location:index.php');
        }
        else
        {
            echo "gagal di delete";
        }

    }

?>