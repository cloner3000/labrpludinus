<?php  
	include('koneksi.php');
	var_dump($_FILES['link']);
	$judul=$_POST['judul'];
	$tanggal=$_POST['tanggal'];
	$keterangan=$_POST['keterangan'];
	$tipe=$_POST['tipe'];
	$name=$_FILES['link']['name'];
	$tmp_name=$_FILES['link']['tmp_name'];
	$location="../file/";
	if (move_uploaded_file($tmp_name, $location.$name)) {
		///CREATE
		$sql="INSERT INTO download (judul,tanggal,keterangan,link,tipe) VALUE ('$judul','$tanggal', '$keterangan','$name','$tipe')";
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
	
?>