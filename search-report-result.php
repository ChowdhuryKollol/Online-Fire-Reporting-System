<?php include_once('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>result</title>
    <link rel="icon" type="image/x-icon" href="assets/bdfirelogo.png" />
    <link href="css/styles.css" rel="stylesheet" />
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
            <li class="nav-item"><a class="nav-link" href="reporting.php">Report</a></li>
            <li class="nav-item"><a class="nav-link active" href="search.php">View Status</a></li>
            <li class="nav-item"><a class="nav-link" href="reward.php">Achievements</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="safety.php">Safety & Prevantion</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="admin/admin.php">Admin login</a></li> -->
          </ul>
        </div>
      </div>
    </nav>
  </section>


    <section>
        <div class="container px-4 px-lg-5" style=margin-top:40px;>

            <div class="row gx-4 gx-lg-5">
                <div class="col-md-12 mb-5">
                    <div class="card h-100">
                        <div class="card-body">

                            <?php
                        $searchdata=$_POST['serachdata'];
                    ?>

                            <h2 class="card-title" >Search Result Againts '
                                <?php echo $searchdata;?>'
                            </h2>


                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                    <?php $query=mysqli_query($con,"select * from tblfirereport where fullName like '%$searchdata%' || mobileNumber like '%$searchdata%' || location like '%$searchdata%'");
                        $cnt=1;
                        while($row=mysqli_fetch_array($query)){
                        ?>


                                    <tr>
                                        <td>
                                            <?php echo $cnt;?>
                                        </td>
                                        <td>
                                            <?php echo $row['fullName'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['mobileNumber'];?>
                        </td>
                                        <td>
                                            <?php echo $row['location'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['messgae'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['postingDate'];?>
                        </td>
                                       
<td>
                                            <a href="details.php?requestid=<?php echo $row['id'];?>"
                                                class="btn-sm btn-primary">View</a>

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
    </section>


    <?php include_once('includes/footer.php') ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>