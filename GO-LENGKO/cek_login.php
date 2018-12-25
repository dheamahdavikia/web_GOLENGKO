<?php
require_once("include/koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    }
$nama = $_POST['nama'];
$password = $_POST['password'];
$cekuser = mysqli_query($host,"SELECT * FROM user WHERE nama = '$nama' AND password = '$password'");

$jumlah = mysqli_num_rows($cekuser);
$hasil = mysqli_fetch_array($cekuser,MYSQLI_ASSOC);
if($jumlah == 0) {
	header('location:o5_contact.php?login=gagal');
	}else{

$_SESSION['username'] = $hasil['nama'];
$_SESSION['id'] = $hasil['id_user'];
$ref = $_SESSION['REAL_REFERER']; 
if (!empty($ref)) {
	header('location:05_contact.php');
}else{
header('location:'.$ref.'');
}
}
?>