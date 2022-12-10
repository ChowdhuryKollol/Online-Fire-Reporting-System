<?php
session_start();
include_once('includes/config.php');
if (strlen($_SESSION['aaid']==0)) {
  header('location:logout.php');
  } else{

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this  -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this  -->
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                 
                    </div>
 
                    <div class="row">

<?php 
 
$query=mysqli_query($con,"select id from tblfirereport");
$totalreportings=mysqli_num_rows($query);

$query1=mysqli_query($con,"select id from tblfirereport where status='Request Completed'");
$requestcompleted=mysqli_num_rows($query1);

$query11=mysqli_query($con,"select id from tblfirereport where status='Assigned'");
$assignedrequests=mysqli_num_rows($query11);

$query2=mysqli_query($con,"select id from tblfirereport where status='Team On the Way'");
$tonthewayreq=mysqli_num_rows($query2);

$query3=mysqli_query($con,"select id from tblfirereport where status='Fire Relief Work in Progress'");
$frwprequests=mysqli_num_rows($query3);

$query4=mysqli_query($con,"select id from tblfirereport where status is null");
$newrequests=mysqli_num_rows($query4);

?>


                   <div class="col-xl-12 col-md-12 mb-3">
                            <div class="card border-left-danger border-danger shadow h-100 ">
                                <a href="new-requests2.php">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" >
                                            <div class="text-x text-md-xs font-weight-bold text-danger text-uppercase mb-1 " style="margin-left:  ;" > New Fire Requests
                                            </div>
                                            
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div style="margin-left: ;" class="h5   mr-3 font-weight-bold text-gray-800"><?php echo $newrequests;?></div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-fire fa-2x text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
  
                        <div class="col-xl-12 col-md-12 mb-3">
                            <div class="card border-left-primary border-primary shadow h-100 ">
                                <a href="all-requests2.php">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                         <div class="col mr-2">
                                            <i class="fas fa-book fa-2x text-red-300"></i>
                                        </div>
                                        <div class="col-auto ">
                                            <div class="text-x font-weight-bold text-primary text-uppercase mb-1" style="margin-left: ;" >
                                             Total Fire Reportings</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalreportings;?></div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>

             
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-success border-success shadow h-100">
                                <a href="completed-requests2.php">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-x font-weight-bold text-success text-uppercase mb-1" style="margin-left:  ;" >
                                              Fire Request Completed</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $requestcompleted;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>

        
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-info border-info shadow h-100">
                                <a href="assigned-requests2.php">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                            <i class="fas fa-compass fa-2x text-info"></i>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-x font-weight-bold text-info text-uppercase mb-1" style="margin-left: ;">Assigned Fire Requests
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto ">
                                                    <div class="  mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $assignedrequests;?></div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>

 
     <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-warning border-warning shadow h-100">
                                <a href="team-ontheway-requests2.php">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-x  font-weight-bold text-warning text-uppercase mb-1" style="margin-left: ;"> Team On the Way Requests
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class=" mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $tonthewayreq;?></div>
                                                </div>
                                                <div class="col">
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-truck fa-2x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
 
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-dark border-dark shadow h-100">
                                <a href="workin-progress-requests2.php">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                            <i class="fa fa-handshake fa-2x text-dark"></i>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-x text-md-xs font-weight-bold text-dark text-uppercase mb-1" style="margin-left:  ;">
                                            Fire Relief Work in Progress</div>
                                            <div class=" mb-0 font-weight-bold text-dark" ><?php echo $frwprequests;?></div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </a>
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

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 
    <script src="js/sb-admin-2.min.js"></script>
 
    <script src="vendor/chart.js/Chart.min.js"></script>
 
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php } ?>