<?php
require_once("include/koneksi.php");
    
$username = $_POST['username'];
$password = $_POST['password'];
$cekadmin = mysqli_query($conn,"SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

$jumlahadmin = mysqli_num_rows($cekadmin);
$admin = mysqli_fetch_assoc($cekadmin);
if($jumlahadmin == 0) {
	header('location:admin.php?login=gagal');
}
else{


	// echo "success";

	session_start();

	$_SESSION['username'] = $admin['username'];
	$_SESSION['level'] =	$admin['level'];

	// var_dump($_SESSION['username']);
	// var_dump($_SESSION['level']);

	header("location:home.php");
	
}
?>