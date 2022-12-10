<?php session_start();
include('includes/config.php');
if(isset($_POST['login']))
  {
    $muname=$_POST['manusername'];
    $mpass=md5($_POST['manpass']);

    $query=mysqli_query($con,"select ManagerID,ManagerName, isActive  from tblmanager where  ManagerUsername='$muname' && ManagerPass='$mpass' ");
    $ret=mysqli_fetch_array($query) ;
    if($ret>0){
$_SESSION['aaid']=$ret['ManagerID'];
     header('location:dashboard2.php');
    } else{
    echo "<script>alert('Invalid Details.');</script>";          
    }
  }
  ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manager Login</title>

    <!-- Custom fonts for this    -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this  -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-danger">

    <div class="container">

         
        <div class="row justify-content-center ">

            <div class="col-xl-10 col-lg-12 col-md-9"  style="margin-top:40px;">
                <?php $query=mysqli_query($con,"select * from tblsite");
while($row=mysqli_fetch_array($query)){
$logo=$row['siteLogo']; 
$wtitle=$row['siteTitle'];
}  ?>
                <p align="center">
                    <img src="uploadeddata/<?php echo $logo;?>" width="150">
                </p>
                <h3 align="center" style="margin-top:4%;color:#fff">
                    <?php echo $wtitle;?>
                </h3>
                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0"> 
                        <form name="login" method="post">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Manager!</h1>
                                        </div>
                                        <form class="user">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="manusername" id="manusername"
                                                    placeholder="Enter username" required="true">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="manpass"
                                                    id="manpass" placeholder="Password">
                                            </div>
                                            <input type="submit" name="login" class="btn btn-primary btn-user btn-block"
                                                value="login">
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password2.php" style="font-weight:bold">Forgot
                                                Password?</a>

                                        </div>

                                        <div class="text-center">
                                            <a class="small" href="../index.php" style="font-weight:bold;"><i
                                                    class="fa fa-home" aria-hidden="true"></i> Home Page</a>
                                        </div>

                                        <div class="text-center">
                                            <a class="small" href="admin.php" style="font-weight:bold;"><i
                                                    class="fa fa-user" aria-hidden="true"></i> Admin Login </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

     
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>