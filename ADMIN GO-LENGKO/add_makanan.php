<?php
// session_start();

// if(!$_SESSION['admin'])
// {
// 	header ("Location : admin.php");

// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>add </title>
</head>
<body>
	<body>
		<div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DATA  TAMBAH MAKANAN</h1>
                        <br>
                       
                    </div>
                </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-body">
                        <form method="post" action="add_makanan.php" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <p>NAMA MAKANAN</p>
                                    <input class="form-control" placeholder="nama_makanan" name="nama_makanan" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <p>HARGA</p>
                                    <input class="form-control" placeholder="harga_makanan" name="harga_makanan" type="text" autofocus >
                                </div>

                                <div class="form-group">
                                    <p>FOTO</p>
                                    <input type="file" name="image" class="form control"> 
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-success pull-right" type="submit" name="submit">Masuk</button>      
                            </fieldset>
                        </form>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php
	include('include/koneksi.php');
        $set = true;
        //tentukan variabel file yg diupload dan tipe file
        if (isset($_FILES['image'])) {
            $tipe_file  = $_FILES['image']['type'];
            $lokasi_file = $_FILES['image']['tmp_name'];
            $nama_file  = $_FILES['image']['name'];
            $save_file =move_uploaded_file($lokasi_file,"../images/$nama_file");
        }
        

        if(empty($lokasi_file)){
            $set=false;
        }
        else{
        //tentukan tipe file harus image 
        if ($tipe_file != "image/gif" and
            $tipe_file != "image/jpeg" and
            $tipe_file != "image/jpg" and
            $tipe_file != "image/jpeg" and
            $tipe_file != "image/png")
        {
            $set=false;
            echo "<script>alert('Upload gagal, tipe file harus image')</script>";
        }
        else
        {
            isset($save_file);
        }
        //replace di server 
        if($save_file)
        {
            chmod ("../images/$nama_file", 0777);
        }
        else
        {
            echo "<script>alert('Upload image gagal !')</script>";
            $set =  false;
        }
    }
    if (isset($_POST['submit']) && $set) {
        $nama_makanan = $_POST['nama_makanan'];
        $harga = $_POST['harga_makanan'];
        $poto= $nama_file;
        if ($nama_file == '') {
           echo "<script>alert('Masukan Gambar')</script>";
        }
        if ($nama_makanan == '') {
          echo "<script>alert('masukan nama makanan')</script>";
          exit();
        }
        if ($harga == '') {
          echo "<script>alert('masukan harga makanan')</script>";
          exit();
        }
		$sql = "insert into makanan  (nama_makanan, harga, poto)values ('$nama_makanan','$harga','$poto')";
		$hasil = mysqli_query($conn, $sql);
		if ($hasil){
            print "<meta http-equiv=\"refresh\"content=\"1;URL=makanan.php\">";
		}else{
			echo "error".$sql;
		}
	}
?>