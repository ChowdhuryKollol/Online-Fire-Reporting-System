<?php
session_start();
error_reporting(0);
include('includes/config.php');

// admin er jonno 
if(isset($_POST['submit']))
  {
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];

        $query=mysqli_query($con,"select ID from tbladmin where  Email='$email' and MobileNumber='$contactno' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['contactno']=$contactno;
      $_SESSION['email']=$email;
    
      echo "<script type='text/javascript'> document.location ='reset-password.php'; </script>";
    }
    else{
         echo "<script>alert('Invalid Details. Please try again');</script>";
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

    <title>Forget password</title>

    <!-- Custom fonts for this  -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this  -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-secondary  mt-5   pt-5">

    <div class="container">

     
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                
                <p align="center">

                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0"> 
                    <form name="login" method="post">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Forgot Password Reset It !</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" 
                                                id="email" placeholder="Enter email" required="true">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="contactno" id="contactno" placeholder="Enter mobile number" maxlength="11" pattern="[0-9]+"  >
                                        </div>
                        <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="reset">
                                    </form>
                                    <hr>
									<div class="forgot text-center">
									<a href="index.php">Already have an account</a>
								</div> 

                                         <div class="text-center">
                                        <a class="small" href="../index.php" style="font-weight:bold;"><i class="fa fa-home" aria-hidden="true"></i> Home Page</a>
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