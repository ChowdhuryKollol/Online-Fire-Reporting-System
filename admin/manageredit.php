<?php session_start();
//DB  
include_once('includes/config.php');
 
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{


    if(isset($_POST['update']))
  {
    $mid=$_GET['ManagerID'];
    $mname=$_POST['ManagerName'];
    $muname=$_POST['manusername'];
    $mmobile=$_POST['manmobile'];
  $mmail=$_POST['manmail'];
  $mpass=md5($_POST['manpass']);
$query=mysqli_query($con, "update  tblmanager set ManagerName='$mname', ManagerUsername='$muname' , ManagerContact='$mmobile',ManagerEmail='$mmail',ManagerPass='$mpass' where ManagerID='$mid'");
if ($query) {
echo '<script>alert("Manager details updates.")</script>';
echo "<script>window.location.href = 'managermanage.php'</script>";
  }else{
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

    <title>Update Manager Details</title>

    <!-- Custom fonts for this  -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this  -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style type="text/css">
        label {
            font-size: 16px;
            font-weight: bold;
            color: #000;
        }
    </style>

</head>

<body id="page-top">
 
    <div id="wrapper">

        <?php include_once('includes/sidebar.php');?>
 
        <div id="content-wrapper" class="d-flex flex-column">
 
            <div id="content">
 
                <?php include_once('includes/topbar.php');?>
             
 
                <div class="container-fluid">

                  
                    <h1 class="h3 mb-4 text-gray-800">Edit
                        <?php echo $_GET['mname'];?>'s Details
                    </h1>
                    <form method="post" name="adminprofile">


                        <?php $mid=$_GET['ManagerID'];
$query=mysqli_query($con,"select * from tblmanager where ManagerID='$mid'");
while($row=mysqli_fetch_array($query)){
?>
                        <div class="row">

                            <div class="col-lg-8">

                             
                                <div class="card shadow mb-4">


                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Manager Name</label>
                                            <input type="text" class="form-control" name="ManagerName"
                                                value="<?php echo $row['ManagerName'];?>"  >
                                        </div>

                                        <div class="form-group">
                                            <label>Manager UserName</label>
                                            <input type="text" class="form-control" name="manusername"
                                                value="<?php echo $row['ManagerUsername'];?>"  >
                                        </div>

                                        <div class="form-group">
                                            <label>Manager Contact Number</label>
                                            <input type="text" class="form-control" name="manmobile"
                                                value="<?php echo $row['ManagerContact'];?>"  
                                                maxlength='11'>
                                        </div>

                                        <div class="form-group">
                                            <label>Manager email</label>
                                            <input type="email" class="form-control" name="manmail"
                                                value="<?php echo $row['ManagerEmail'];?>" >
                                        </div>


                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" id="password" name="manpass" value=""
                                                class="form-control" required="true">
                                        </div>
                                        <?php } ?>



                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-user btn-block"
                                                name="update" id="update" value="Update">
                                        </div>

                                    </div>
                                </div>

                            </div>



                        </div>
                    </form>

                </div> 

            </div> 

            <?php include_once('includes/footer.php');?>

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