<?php
include ("../include/koneksi.php");
$delete_id=$_GET['del'];
$delete_query="delete * from pesanan WHERE id = $delete_id'";
$result=mysqli_query($conn, $delete_query);
if($result)
{
	echo "<script>window.opoen('home_admin.php?deleted=pesanan has been deleted','self')</script>";
}

?>
