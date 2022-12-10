<?php session_start();
//DB conncetion
include_once('includes/config.php');
//validating Session
if (strlen($_SESSION['aaid']==0)) {
  header('location:logout.php');
  } else{


    if(isset($_POST['submit']))
  {
    $tname=$_POST['teamname'];
    $tlname=$_POST['teamleadname'];
  $mobno=$_POST['mobilenumber'];
  $tmember=$_POST['teammember'];
$query=mysqli_query($con, "insert into tblteams(teamName,teamLeaderName,teamLeadMobno,teamMembers) values('$tname','$tlname','$mobno','$tmember')");
if ($query) {
echo '<script>alert("Team Created.")</script>';
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

    <title> Team Creation</title>

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
 
                    <h1 class="h3 mb-4 text-gray-800">Fire Safety Team Creation</h1>
     <form method="post"  name="adminprofile" >



  <div class="row">

                        <div class="col-lg-8">
 
                            <div class="card shadow mb-4">


                                <div class="card-body">
     <div class="form-group">
                            <label>Team Name</label>
           <input type="text" class="form-control" name="teamname" value="" required='true'>
                                        </div>

                        <div class="form-group">
                            <label>Team Leader name</label>
                       <input type="text" class="form-control" name="teamleadname" value="" required='true'> 
                                        </div>
                                        


<div class="form-group">
<label>Team Lead Contact Number</label>
<input type="text" class="form-control" name="mobilenumber" value="" required='true' maxlength='11'>
</div>

<div class="form-group">
<label>Team Member (Seprated by Comma)</label>
<input type="text" class="form-control" name="teammember" value="" required='true'>
</div>


                        

        <div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit" value="Submit">                           
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

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
<?php } ?>