<?php include_once('includes/config.php');
if(isset($_POST['submit'])){
$fname=$_POST['fullname'];    
$mno=$_POST['mobilenumber'];   
$location=$_POST['location'];   
$message=$_POST['message'];   
$query=mysqli_query($con,"insert into tblfirereport(fullName,mobileNumber,location,messgae) value('$fname','$mno','$location','$message')");
if($query){
echo "<script>alert('Reporting successfull');</script>";
echo "<script>window.location.href = 'reporting.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again.');</script>";
echo "<script>window.location.href = 'reporting.php'</script>";
}
}
?>
<?php $query=mysqli_query($con,"select * from tblsite");
while($row=mysqli_fetch_array($query)){
$logo=$row['siteLogo']; 
$wtitle=$row['siteTitle'];
$phone=$row['sitephone'];
}  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Report</title>
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

  <!-- <div class=""
    style=" width: 100%;height:60vh;background-position: center;
        background-size:cover;  background-image: url(assets/parallax2.jpg);background-attachment: fixed;  color: white ; padding:120px;   background-color: rgba(0,0,0,.1);">

    <div align="center">
      <h1>Report About Fire </h1>
      <h4 class = "py-3">Firefighters are essential to the safety and security of our local communities</h4>
    </div> -->

  </div>
  <div class="container px-4 px-lg-5">




    <div class="row gx-4 gx-lg-5">
      <div class="col-md-12 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title text-center p-4">Online Fire Report</h2>

            <form method="post">
              <table class="table table-bordered">

                <tbody>
                  <tr>
                    <th>Name</th>
                    <td><input type="text" name="fullname" class="form-control" required></td>
                  </tr>

                  <tr>
                    <th>Mobile Number</th>
                    <td><input type="mobile" name="mobilenumber" maxlength="11" class="form-control" required></td>
                  </tr>

                  <tr>
                    <th>Location</th>
                    <td><textarea class="form-control" required name="location"></textarea></td>
                  </tr>

                  <tr>
                    <th>Message (optional)</th>
                    <td><textarea class="form-control"   name="message"></textarea></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td><input type="submit" name="submit" class="btn btn-danger"> </td>
                  </tr>

                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>

    </div>
    <div class="row gx-4 gx-lg-5 align-items-center my-5" >
      <center><div class="col-lg-12"><img class="img-fluid rounded mb-4 mb-lg-0"  src="assets/report.jpg" alt="..." /></div></center>

  </div>
  </div>


  <?php include_once('includes/footer.php') ?>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>