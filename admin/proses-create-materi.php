<?php  
	include('koneksi.php');

	$judul=$_POST['judul'];
	$tanggal=$_POST['tanggal'];
	$isi=$_POST['isi'];

	///CREATE
	$sql="INSERT INTO materi (judul,tanggal,isi) VALUE ('$judul','$tanggal','$isi')";
	$query= mysqli_query($koneksi,$sql);
	if($query){
	    echo "Berhasil disimpan";
	    header('location:index.php');
	}
	else
	{
	    echo "gagal";
	}
?>


