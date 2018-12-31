<?php
include ("include/koneksi.php");
$delete_id=$_GET['del'];
$delete_query="DELETE FROM makanan WHERE id_makanan = '$delete_id'";
$result=mysqli_query($conn, $delete_query);
if(!$result){
	die("query error". mysqli_error($conn));
}

header('location:makanan.php');

?>
