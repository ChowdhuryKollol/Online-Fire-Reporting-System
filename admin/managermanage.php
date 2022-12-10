<?php session_start();
//DB  
include_once('includes/config.php');
error_reporting(0); 
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

//delet akhane korbo 
if($_GET['ManagerID']){
$mid=$_GET['ManagerID'];
mysqli_query($con,"delete from tblmanager where ManagerID ='$mid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='managermanage.php'</script>";
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

    <title>Manage Manager</title>

    <!-- Custom fonts for this   -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this   -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    

</head>

<body id="page-top">
 
    <div id="wrapper">
 
  <?php include_once('includes/sidebar.php');?>
        
        <div id="content-wrapper" class="d-flex flex-column">
 
            <div id="content">
 
<?php include_once('includes/topbar.php');?> 
                <div class="container-fluid">
 
                       <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manage Manager</h1>
                
                    </div>
    
 
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Manager Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"   width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Manager Name</th>
                                            <th>Manager Mobile Number</th>
                                             <th>Manager Email</th> 
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                            <th>Sno.</th>
                                            <th>Manager Name</th>
                                            <th>Manager Mobile Number</th>
                                             <th>Manager Email</th> 
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php $query=mysqli_query($con,"select * from tblmanager ");
$cnt=1;
while($row=mysqli_fetch_array($query)){
?>

                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo $row['ManagerName'];?></td>
                                            <td><?php echo $row['ManagerContact'];?></td>
                                            <td><?php echo $row['ManagerEmail'];?></td>
                                          
                                            <td>

                                <a href="manageredit.php?ManagerID=<?php echo $row['ManagerID'];?> &&mname=<?php echo $row['MaangerName'];?>" class="btn-sm btn-primary">Edit</a> 

                                <a href="managermanage.php?ManagerID=<?php echo $row['ManagerID'];?>" onclick="return confirm('Do you really want to delete the team?');" class="btn-sm btn-danger">Delete</a></td>
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