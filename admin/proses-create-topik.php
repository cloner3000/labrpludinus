<?php  
	include('koneksi.php');

	$judul=$_POST['judul'];
	$tanggal=$_POST['tanggal'];
	$nama=$_POST['nama'];
	$isi=$_POST['isi'];

	///CREATE
	$sql="INSERT INTO topik (judul,tanggal,nama,isi) VALUE ('$judul','$tanggal', '$nama','$isi')";
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