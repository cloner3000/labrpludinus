<?php 
include "koneksi.php";
session_start();
if (isset($_POST['email']) and isset($_POST['password'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
	var_dump($_POST);
	$sql="SELECT * FROM admin WHERE email = '$email' and password = '$password' ";
	$query=mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
	$count=mysqli_num_rows($query);
	if ($count == 1) {
		$_SESSION['login']=$email;
		header('location:index.php');
		
	}
	else{
		header("location:login.php");
	}
}
else{
	echo "email dan password salah";
}

 ?>
