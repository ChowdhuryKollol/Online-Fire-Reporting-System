<?php session_start();
//DB  
include_once('includes/config.php');
 
if (strlen($_SESSION['aaid']==0)) {
  header('location:logout.php');
  } else{


    if(isset($_POST['update']))
  {
    $mid=$_SESSION['aaid'];
    $mname=$_POST['manname'];
  $mmobile=$_POST['manmobile'];
  $mmail=$_POST['manmail'];
  
     $query=mysqli_query($con, "update tblmanager set ManagerName='$mname', ManagerContact ='$mmobile', ManagerEmail= '$mmail' where ManagerID='$mid'");
      
$uip = $_SERVER ['REMOTE_ADDR'];
$link= $_SERVER['REQUEST_URI'];
$action='Profile Updation';
    if ($query) {
    
    echo '<script>alert("Profile has been updated")</script>';
  }
  else
    {
         
      echo '<script>alert("Something Went Wrong. Please try again.")</script>';
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

    <title> Manager Profile</title>

    <!-- Custom fonts for this  -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this  -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
label{
    font-size:16px;
    font-weight:bold;
    color:#000;
}

</style>

</head>

<body id="page-top">
 
    <div id="wrapper">

<?php include_once('includes/sidebar2.php');?>
 
        <div id="content-wrapper" class="d-flex flex-column">
 
            <div id="content">
 
          <?php include_once('includes/topbar2.php');?> 
                <div class="container-fluid">

           
                    <h1 class="h3 mb-4 text-gray-800">Manager Profile</h1>
     <form method="post"  name="adminprofile" >



  <div class="row">

                        <div class="col-lg-8">

                        
                            <div class="card shadow mb-4">

                <?php
$mid=$_SESSION['aaid'];
$ret=mysqli_query($con,"select * from tblmanager where ManagerID='$mid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

                                <!-- <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Registration Date: <?php  echo $row['AdminRegdate'];?></h6>
                                </div> -->
                                <div class="card-body">
     <div class="form-group">
                            <label>Manager Name</label>
           <input type="text" class="form-control" name="manname" value="<?php  echo $row['ManagerName'];?>" required='true'>
                                        </div>

                        <div class="form-group">
                            <label>User Name</label>
                       <input type="text" class="form-control" name="username" value="<?php  echo $row['ManagerUsername'];?>" readonly='true'> 
                                        </div>
                                        
<div class="form-group">
<label>Email Id</label>
<input type="email" class="form-control" name="manmail" value="<?php  echo $row['ManagerEmail'];?>" required='true'>
</div>

<div class="form-group">
<label>Contact Number</label>
<input type="text" class="form-control" name="manmobile" value="<?php  echo $row['ManagerContact'];?>" required='true' maxlength='11'>
</div>
                        

<?php } ?>
        <div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="update" id="update" value="Update">                           
                             </div>                                        

                                </div>
                            </div>

                        </div>

               

                    </div>
</form>

                </div> 

            </div> 

           <?php include_once('includes/footer2.php');?>

        </div> 

    </div> 

           <?php include_once('includes/footer2.php');?>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
<?php } ?>