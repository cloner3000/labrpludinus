<?php  
	include('koneksi.php');

	$judul=$_POST['judul'];
	$tanggal=$_POST['tanggal'];
	$isi=$_POST['isi'];
	$link=$_POST['link'];
	$jenis=$_POST['jenis'];

	///CREATE
	$sql="INSERT INTO ebook (judul,tanggal,isi,link,jenis) VALUE ('$judul','$tanggal', '$isi','$link','$jenis')";
	$query= mysqli_query($koneksi,$sql);
	if($query){
	    echo "Berhasil disimpan";
	    header('location:index.php');
	}
	else
	{
		//var_dump('$query');
	    echo "gagal";
	}
?>