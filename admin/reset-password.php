<?php
session_start();
error_reporting(0);
include('includes/config.php');
error_reporting(0);

// admin 
if(isset($_POST['submit']))
  {
    $contactno=$_SESSION['contactno'];
    $email=$_SESSION['email'];
    $password=md5($_POST['newpassword']);

        $query=mysqli_query($con,"update tbladmin set Password='$password'  where  Email='$email' && MobileNumber='$contactno' ");
   if($query)
   {
echo "<script>alert('Password successfully changed for admin');</script>";
echo "<script type='text/javascript'> document.location ='admin.php'; </script>";
session_destroy();
   }
  
  }
 
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Reset Page</title>
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
 
	<script>
		 new WOW().init();
	</script> 
<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head> 
<body class="bg-gradient-secondary mt-5 pt-5">
	
<div class="container">

       
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                
                <p align="center">

                <div class="card o-hidden border-0 shadow-lg my-5">

                    <div class="card-body p-0">
			 
					<div class="login-body">
						
						<form role="form" method="post" action="" name="changepassword" onsubmit="return checkpass();">
 
						<div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Reset your Password !!</h1>
                                    </div>
                                    <form class="user">
                                        
									<div class="form-group">
										<input type="password" name="newpassword" class="form-control"placeholder="New Password" required="true">
                                     </div>
									
                                    <div class="form-group">
										<input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required="true">
                                    </div>
									

										<input type="submit" name="submit" value="Reset" class="btn btn-primary btn-user btn-block">
										 
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

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>