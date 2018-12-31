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
                        <form method="post" action="cek_login.php">
                            <fieldset>
                                <div class="form-group">
                                    <p>username</p>
                                    <input class="form-control" placeholder="username" name="nama" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <p>Password</p>
                                    <input class="form-control" placeholder="password" name="password" type="password" >
                                </div>
                                Enter Image Text
                                    <input name="captcha" type="text">
                                    <img src="captcha.php" /><br>
                                    <input name="submit" type="submit" value="Submit">
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <!-- <button type="submit" name="submit" value="login">Login</button> -->
                                <br>
                                <p> belum punya akun ?</p>
                                 <a href="daftar.php" class="btn btn-lg btn-success btn-block">Daftar</a>
                            </fieldset>
                        </form>
                        <!--  -->
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

//     include("include/koneksi.php");

//     if (isset($_POST['login']))
//     {
    
//        $username= $_POST['nama'];
//        $password = $_POST['password'];
//        $sql="SELECT * FROM user WHERE nama='$nama' AND password='$password' ";
//        $result = mysqli_query($conn, $sql);

//        if(mysqli_num_rows($result)>0){
//         while ($row = mysql_fetch_assoc($result))
//         {
//             $id = $row["id"];
//             $userl=$row["nama"];
//             session_start();
//             $_SESSION['nama']=$username;
//             $_SESSION['user']=$user;
//         }
       
        
    
//     header("location :05_contact.php");
// }
// else
// {
//     echo"<script>alert('username dan password yang anda masukan salah')</script>";
// }
// }
?>