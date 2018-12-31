<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript" src="../tinymce/tinymce.js"></script>
    <script type="text/javascript">
        tinyMCE.init({
            selector:"#mytextarea"

        });
    </script>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center; color: white;">Masuk</h3>
                    </div>
                    <div class="panel-body">
                        <form name="form1" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">  
                            <input class="form-control" placeholder="Nama" name="nama" type="text" autofocus> 
                          </div> 
                          <div class="form-group">  
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                          </div> 
                          <div class="form-group">
                             <textarea name="alamat" id="mytextarea" class="form-control" rows="5" placeholder="Alamat"></textarea>
                        </div> 
                          <div class="form-group">  
                            <input class="form-control" placeholder="Password" name="password" type="password" autofocus>  
                          </div>
                          <div class="form-group row" align="center">
                          <div class="col-sm-12">
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" >
                            </div>
                          </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
    <?php  
      
    include("include/koneksi.php"); 
    if(isset($_POST['register']))  
    {  
       
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password= $_POST['password'];
        
       

        // if(!isset($_foto['foto'])){
        // echo 'Pilih file gambar';

        
        if ($nama == '') {
          echo "<script>alert('masukan nama')</script>";
          exit();
        }
        if ($email == '') {
          echo "<script>alert('masukan email')</script>";
          exit();
        }
        if ($password == '') {
          echo "<script>alert('password')</script>";
          exit();
        }
        
         
        
        $check_email_query="select * from user WHERE email='$email'";  
        $run_query=mysqli_query($conn,$check_email_query);  
              
        if(mysqli_num_rows($run_query)>0){  
            echo "<script>alert('Email $email ini sudah dipakai, Please try another one!')</script>";  
            exit();  
        }
              
       $sql = "INSERT INTO user (nama,password,email) VALUES ('$nama','$password','$email')";  
        // (id_user,nama, password,email,alamat,no_hp,foto)
        if(mysqli_query($conn,$sql)){  
            echo"<script>window.open('login.php','_self')</script>";  
        }  
    }  
?>