<?php session_start();
//DB 
include_once('includes/config.php');
error_reporting(0);
 
if (strlen($_SESSION['aaid']==0)) {
  header('location:logout.php');
  } else{
 
if($_GET['teamid']){
$tid=$_GET['teamid'];
mysqli_query($con,"delete from tblteams where id ='$tid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='manage-teams2.php'</script>";
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

    <title>Manage Assigned Fire Reporting</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
 
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
 
     

</head>

<body id="page-top">
 
    <div id="wrapper">
 
  <?php include_once('includes/sidebar2.php');?> 
        <div id="content-wrapper" class="d-flex flex-column">
 
            <div id="content">
 
<?php include_once('includes/topbar2.php');?> 
                <div class="container-fluid">
 
                       <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manage Assigned Fire Reporting</h1>
                
                    </div>
    
 
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Fire Reporting Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Location </th>
                                             <th>Message</th>
                                             <th>Reporting Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                     <tr>
                                            <th>Sno.</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Location </th>
                                             <th>Message</th>
                                             <th>Reporting Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php $query=mysqli_query($con,"select * from tblfirereport where status='Assigned'");
$cnt=1;
while($row=mysqli_fetch_array($query)){
?>

                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo $row['fullName'];?></td>
                                            <td><?php echo $row['mobileNumber'];?></td>
                                            <td><?php echo $row['location'];?></td>
                                            <td><?php echo $row['messgae'];?></td>
                                            <td><?php echo $row['postingDate'];?></td>
                                            <td>

                                <a href="request-details2.php?requestid=<?php echo $row['id'];?>" class="btn-sm btn-primary">View</a> 

                              </td>
                                        </tr>
                               <?php $cnt++;
                           } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div> 

            </div> 
    <?php include_once('includes/footer2.php');?> 

        </div> 

    </div> 
    <?php include_once('includes/footer2.php');?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 
    <script src="js/sb-admin-2.min.js"></script>
 
    
</body>
</html>
<?php } ?>