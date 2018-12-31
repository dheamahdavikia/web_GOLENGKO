<?php
session_start();
if(empty($_SESSION['username']) && ($_SESSION['level'] != 'admin'))
{
    header("Location:logout_admin.php");
}
else{
    $username = $_SESSION['username'];
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="admin.html">GO-LENGKO

                </a>
            </div>

            <div class="notifications-wrapper">
<ul class="nav">
               
               
              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user-plus"></i> My Profile</a>
                        </li>
                        <?php echo $username; ?>
                        <li class="divider"></li>
                        <li><a href="logout_admin.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
               
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="download (2).jpg" class="img-circle" />

                           
                        </div>

                    </li>
                    

                    <li>
                        <a class="active-menu"  href="home.php"><i class="fa fa-dashboard "></i>DATA PESANAN</a>
                    </li>

                    <li>
                        <a class="-menu"  href="makanan.php"><i class="fa fa-dashboard "></i>DATA MAKANAN</a>
                    </li>
                   
                   
                    
                   
                   
                   
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DATA PESANAN</h1>
                    </div>
                </div>
               
             
                
                <div class="row">
            <div class=" col-md-4 col-sm-4">
                <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Pesanan </th>
                                        
                                    </tr>
                                    <?php  
                                        include("include/koneksi.php");
                                        if (isset($_GET['pageno'])) {
                                            $pageno = $_GET['pageno'];
                                        } else {
                                            $pageno = 1;
                                        }
                                        $no_of_records_per_page = 5;
                                        $offset = ($pageno-1) * $no_of_records_per_page;
                                        $total_pages_sql = "SELECT COUNT(*) FROM pesanan";
                                        $result = mysqli_query($conn,$total_pages_sql);
                                        $total_rows = mysqli_fetch_array($result)[0];
                                        $total_pages = ceil($total_rows / $no_of_records_per_page);

                                        $sql = "SELECT * FROM pesanan order by id LIMIT $offset, $no_of_records_per_page";
                                        $res_data = mysqli_query($conn,$sql);
                                        $no = 1;
                                        while($row = mysqli_fetch_array($res_data)){
                                            $id=$row[0];  
                                            $nama=$row[1];  
                                            $alamat=$row[2];
                                            $pesan=$row[3];
                                            
                                    ?>
                                    <tr>
                                        <td><?php echo $no++  ?></td>
                                        <td><?php echo $nama;  ?></td>
                                        <td><?php echo $alamat;  ?></td>
                                        <td><?php echo $pesan;  ?></td>
                                        <td>
                                            <a href="delete_pesanan.php?del=<?php echo $id ?>">
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                        </tr>
                                <?php } ?>
                            </table>
                        </div>
                
             
              
          
            </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
        </div>
    <!-- /. WRAPPER  -->
    <footer >
        &copy; TUGAS BESAR PEM WEB  GO-LENGKO| By : <a href="http://www.designbootstrap.com/" target="_blank">DHEA MAHDAVIKIA</a>
    </footer>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
