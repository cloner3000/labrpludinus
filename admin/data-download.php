<?php 

	include "koneksi.php";

	$id=$_GET['id'];
	$sql = "SELECT * FROM download WHERE id=$id";
	$query = mysqli_query($koneksi,$sql);
	while ($data=mysqli_fetch_array($query)) {
		echo '<a href="'.$data['id'].'" class="btn btn-info">Baca Selengkapnya</a>';
	}

 ?>