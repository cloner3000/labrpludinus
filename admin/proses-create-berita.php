<?php
include('koneksi.php');
//var_dump($_FILES['gambar']);
$judul=$_POST['judul'];
$nama=$_POST['nama'];
$tanggal=$_POST['tanggal'];
$kategori=$_POST['kategori'];
$isi=$_POST['isi'];
$link=$_POST['link'];
$name=$_FILES['gambar']['name'];
$tmp_name=$_FILES['gambar']['tmp_name'];
$location="../image/";
	if (move_uploaded_file($tmp_name, $location.$name)) {
		///CREATE

		$sql="INSERT INTO berita (judul,nama,tanggal,kategori,isi,link,gambar) VALUE ('$judul','$nama','$tanggal','$kategori','$isi','$link','$name')";
		$query= mysqli_query($koneksi,$sql);
		if($query){
		    echo "Berhasil disimpan";
		    header('location:index.php');
		}
		else
		{
		    echo "gagal";
		}
	}

		$id=$_GET['id'];
		$sql = "SELECT * FROM berita WHERE id=$id";
		$query=mysqli_query($koneksi,$sql);
		while (mysqli_fetch_array($query)) {
		echo "<h3 class='mb-5'>".$berita['gambar']."</h3>";
		echo "<img class='mb-5' src='../image/".$berita['gambar'].">";
	 } 


?>
