<?php session_start();
//DB 
include_once('includes/config.php');
 
if (strlen($_SESSION['aaid']==0)) {
  header('location:logout.php');
  } else{


    if(isset($_POST['update']))
  {
    $teamid=$_GET['teamid'];
    $tname=$_POST['teamname'];
    $tlname=$_POST['teamleadname'];
  $mobno=$_POST['mobilenumber'];
  $tmember=$_POST['teammember'];
$query=mysqli_query($con, "update  tblteams set teamName='$tname',teamLeaderName='$tlname',teamLeadMobno='$mobno',teamMembers='$tmember' where id='$teamid'");
if ($query) {
echo '<script>alert("Team details updates.")</script>';
echo "<script>window.location.href ='manage-teams2.php'</script>";
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

    <title>Update Team Details</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
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

                
                    <h1 class="h3 mb-4 text-gray-800">Edit <?php echo $_GET['tname'];?>'s Details</h1>
     <form method="post"  name="adminprofile" >


<?php $teamid=$_GET['teamid'];
$query=mysqli_query($con,"select * from tblteams where id='$teamid'");
while($row=mysqli_fetch_array($query)){
?>
  <div class="row">

                        <div class="col-lg-8">
 
                            <div class="card shadow mb-4">


                                <div class="card-body">
     <div class="form-group">
                            <label>Team Name</label>
           <input type="text" class="form-control" name="teamname" value="<?php echo $row['teamName'];?>" required='true'>
                                        </div>

                        <div class="form-group">
                            <label>Team Leader name</label>
                       <input type="text" class="form-control" name="teamleadname" value="<?php echo $row['teamLeaderName'];?>" required='true'> 
                                        </div>
                                        


<div class="form-group">
<label>Team Lead Contact Number</label>
<input type="text" class="form-control" name="mobilenumber" value="<?php echo $row['teamLeadMobno'];?>" required='true' maxlength='11'>
</div>

<div class="form-group">
<label>Team Member (Seprated by Comma)</label>
<input type="text" class="form-control" name="teammember" value="<?php echo $row['teamMembers'];?>" required='true'>
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