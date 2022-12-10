<?php include_once('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Details</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/bdfirelogo.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <style>
     
    </style>
</head>

<body>
    
    <!-- <?php include_once('includes/header.php') ?> -->

    <section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <div class="container px-5">
        <a class="navbar-brand" href="index.php"> <img src="admin/uploadeddata/<?php echo $logo;?>" width="65">
          <?php echo $wtitle;?>
          <span style="padding-left:40px;">
            <?php echo $phone;?>
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php.
                            ">Home</a></li>
            <li class="nav-item"><a class="nav-link active" href="reporting.php">Report</a></li>
            <li class="nav-item"><a class="nav-link" href="search.php">View Status</a></li>
            <li class="nav-item"><a class="nav-link" href="reward.php">Achievements</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="safety.php">Safety & Prevantion</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="admin/admin.php">Admin login</a></li> -->
          </ul>
        </div>
      </div>
    </nav>
  </section>

    
    <div class="container px-4 px-lg-5" style=margin-top:10px;>
        
        <div class="row gx-4 gx-lg-5 ">
            <div class="col-md-12 mb-5">
                <div class="card h-100">
                    <div class="card-body">

                        <div class="row">

                            <div class="col-lg-6">
 
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Personal Information (Reported by)
                                        </h6>
                                    </div>
                                    <div class="card-body">

                                        <?php $rid=$_GET['requestid'];
$query=mysqli_query($con,"select * from tblfirereport where id='$rid'");
while($row=mysqli_fetch_array($query)){
?>
                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <tr>
                                                <th>Full Name</th>
                                                <td>
                                                    <?php echo $row['fullName'];?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Mobile Number</th>
                                                <td>
                                                    <?php echo $row['mobileNumber'];?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Location</th>
                                                <td>
                                                    <?php echo $row['location'];?>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th>Message</th>
                                                <td>
                                                    <?php echo $row['messgae'];?>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th>Reporting Time</th>
                                                <td>
                                                    <?php echo $row['postingDate'];?>
                                                </td>
                                            </tr>

 
                                        </table>

                                        <?php } ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
 
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Assigned Details</h6>
                                    </div>
                                    <div class="card-body">
                                        <?php $query=mysqli_query($con,"select * from tblfirereport 
join tblteams on tblteams.id=tblfirereport.assignTo
    where tblfirereport.id='$rid'");
$count=mysqli_num_rows($query);
if($count>0){
while($row=mysqli_fetch_array($query)){ ?>


                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <tr>
                                                <th>Team Name</th>
                                                <td>
                                                    <?php echo $row['teamName'];?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Team Leader Name</th>
                                                <td>
                                                    <?php echo $row['teamLeaderName'];?>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th>TL Mobile No.</th>
                                                <td>
                                                    <?php echo $row['teamLeadMobno'];?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Team Members</th>
                                                <td>
                                                    <?php echo $row['teamMembers'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Assigned Time</th>
                                                <td>
                                                    <?php echo $row['assignTme'];?>
                                                </td>
                                            </tr>

                                        </table>
                                        <?php } }  else {?>
                                        <h4 style="color:red;" align="center">Not Assigned Yet</h4>
                                        <?php } ?>


                                    </div>
                                </div>

                            </div>
                        </div>
 
                        <?php
$ret=mysqli_query($con,"select * from tblfiretequesthistory where requestId='$rid'");
$num=mysqli_num_rows($ret);
?>

                        <div class="row">
                            <div class="col-lg-12">
 
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary" align="center">Request Track
                                            History</h6>
                                    </div>
                                    <div class="card-body">
                                        <?php if($num>0){
?>
                                        <table class="table table-bordered" width="100%" cellspacing="0">
                                            <tr>
                                                <th>Remark</th>
                                                <th>Status</th>
                                                <th>Remark Date</th>
                                                <?php while($result=mysqli_fetch_array($ret)){?>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo $result['remark'];?>
                                                </td>
                                                <td>
                                                    <?php echo $result['status'];?>
                                                </td>
                                                <td>
                                                    <?php echo $result['postingDate'];?>
                                                </td>
                                            </tr>

                                            <?php }  ?>

                                        </table>
                                        <?php
         
     } else { ?>
                                        <h4 align="center" style="color:red"> No Tracking history found </h4>
                                        <?php } ?>


                                    </div>
                                </div>

                            </div>
                        </div>

     <button onClick="window.print()" class="btn btn-primary ">Print</button>
                    </div>
                </div> 
            </div>

        </div> 

       
    </div> 
    <?php include_once('includes/footer.php') ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>