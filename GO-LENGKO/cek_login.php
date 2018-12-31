<?php
require_once("include/koneksi.php");
    
$nama = $_POST['nama'];
$password = $_POST['password'];
$cekuser = mysqli_query($conn,"SELECT * FROM user WHERE nama = '$nama' AND password = '$password'");

$jumlah = mysqli_num_rows($cekuser);
$hasil = mysqli_fetch_assoc($cekuser);
if($jumlah == 0) {
	header('location:login.php?login=gagal');
}
else{



	session_start();
	if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
$_SESSION['nama'] = $hasil['nama'];
	$_SESSION['id'] = $hasil['id_user'];

	header("location:05_contact.php");
	
}
else
{
	echo "<script>alert('LOGIN GAGAL ! Silahkan Periksa username dan password anda  '); window.location = 'login.php'</script>";;
}

	
}
?>