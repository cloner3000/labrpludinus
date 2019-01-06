<?php  
	include('koneksi.php');

	$judul=$_POST['judul'];
	$nama=$_POST['nama'];
	$tanggal=$_POST['tanggal'];
	$isi=$_POST['isi'];
	$link=$_POST['link'];

	///CREATE
	$sql="INSERT INTO publikasi (judul,nama,tanggal,isi, link) VALUE ('$judul', '$nama' ,'$tanggal','$isi', '$link')";
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