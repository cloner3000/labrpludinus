<?php 
include "koneksi.php";

if(isset($_POST['submit'])){
			    	$name=$_FILES['link']['name'];
			    	$tmp_name=$_FILES['link']['tmp_name'];
			    	if ($name) {
			    		$location="../file/";
			    		move_uploaded_file($tmp_name, $location.$name);
			    		$query = mysql_query("INSERT INTO download (link) VALUES ('$name')";
			    			header('location:index.php');
			    	}
			    	else{
			    		die("Gagal");
			    	}
			    } 
			    ?>