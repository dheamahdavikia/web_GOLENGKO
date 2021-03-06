<?php
 session_start();
 if(empty($_SESSION['nama'])){
    header ("Location : login.php");
}
else{
    $user = $_SESSION['nama'];
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
        <title>GO-LENGKO</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css"/>

        <!-- Stylesheets -->
        <link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
        <link href="plugin-frameworks/swiper.css" rel="stylesheet">
        <link href="fonts/ionicons.css" rel="stylesheet">
        <link href="common/styles.css" rel="stylesheet">

</head>
<body>

<header>
        <div class="container">
                <a class="logo" href="index.php"><img src="download (2).jpg" alt="Logo"></a>

                <div class="right-area">
                        <h6><a class="plr-20 color-white btn-fill-primary" href="">ORDER: 085 353 165 165</a></h6>
                </div><!-- right-area -->

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

                <ul class="main-menu font-mountainsre" id="main-menu">
                      
                        <li><a href="05_contact.php">ORDER NOW</a></li>
                        <?php echo $user;?>
                        <li><a href="logout.php">LOGOUT</a></li>
                </ul>

                <div class="clearfix"></div>
        </div><!-- container -->
</header>


<section class="bg-6 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>GO-LENGKO</b></h5>
                               <!--  <h3 class="mt-30 mb-15">Contact</h3> -->
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">
               <div class="heading">
                        <img class="heading-img" src="images/heading_logo.png" alt="">
                        
                        <h5 class="mt-10 mb-30">Untuk Pemesanan  </h5>
                        <p class="mx-w-700x mlr-auto">Untuk pemesanan hanya khusus daerah Indramayu, dan minimum pembelian 5 bungkus Nasi Lengko semua varian, <br>

                        Menerima pesanan untuk :
                        <br>
                        1. Hajatan <br>
                        2. Acara Ulang Tahun <br>
                        3. DLL<br> </p>
                </div>

                <form class="form-style-1 placeholder-1">
                    <form action="" method="POST">
                        <div class="row">
                            <input class="mb-20" type="text" placeholder="Nama" name="nama">  
                              
                            <input class="mb-20" type="text" placeholder="Alamat" name="alamat">
                            <textarea class="h-200x ptb-20" placeholder="Pesan" name="pesan"></textarea>
                        </div>
                        <br><!-- row -->
                       <input class="btn btn-lg btn-success btn-block" type="submit" value="submit" name="submit">
                    </form>
                </form>
        </div><!-- container -->
</section>

<?php   
        if(!empty($_GET['nama']) && !empty($_GET['alamat']) && !empty($_GET['pesan'])){ 
        $nama =$_GET['nama'];
        $alamat =$_GET['alamat'];
        $pesan = $_GET['pesan'];

        include("include/koneksi.php");
        
       
            $sql = "INSERT INTO pesanan VALUES ('','$nama','$alamat','$pesan')";
            $hasil = mysqli_query($conn, $sql);


            if(!$hasil){
                die("Query Erro".mysqli_error($conn));
            }


            echo " PESANAN ATAS NAMA : <br>";
             echo"<br>";

            echo "Nama      : $nama <br>";
            echo "Alamat     : $alamat <br>";
            echo "Pesan     : $pesan<br>";
            echo"<br>";
             echo"<br>";
              echo"<br>";
           
            
            echo "Pesanan anda berhasil terkirim, Terima Kasih sudah menggunakan GO-LENGKO";
            echo"<br>";
             echo"<br>";
              echo"<br>";
        }
        else{
            echo "ini mah belum di isi";
        }
    ?>



<footer class="pb-50  pt-70 pos-relative">
        <div class="pos-top triangle-bottom"></div>
        <div class="container-fluid">
                <a href="index.php"><img src="download (2).jpg" alt="Logo"></a>

                <div class="pt-30">
                        <p class="underline-secondary"><b>Alamat:</b></p>
                        <p>Jl. Raya Sukra Kecamatan Sukra Kabupaten Indramayu Jawa Barat </p>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary mb-10"><b>Phone:</b></p>
                        <a href="tel:+53 345 7953 32453 ">085-353-165-165 </a>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary mb-10"><b>Email:</b></p>
                        <a href="mailto:yourmail@gmail.com"> LengkoMamahDhea@gmail.com</a>
                </div>

               

                <p class="color-light font-9 mt-50 mt-sm-30"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> DHEA MAHDAVIKIA <i class="ion-heart" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div><!-- container -->
</footer>

<!-- SCIPTS -->
<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
<script src="plugin-frameworks/bootstrap.min.js"></script>
<script src="plugin-frameworks/swiper.js"></script>
<script src="common/scripts.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-oEyU88bRR6xcbV1gI_Cahc8ugKC_JPE&callback=initMap"></script>

</body>
</html>

