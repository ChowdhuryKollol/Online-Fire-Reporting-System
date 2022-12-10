<?php include_once('includes/config.php');
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
    <title>Achievements</title>
   
    <link rel="icon" type="image/x-icon" href="assets/bdfirelogo.png" />
    
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">




</head>

<body> 
    <!-- <?php include_once('includes/header.php') ?> -->
    <section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">   <img src="admin/uploadeddata/<?php echo $logo;?>"  width="65"><?php echo $wtitle;?>  
                <span style="padding-left:40px;"><?php echo $phone;?></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php.
                            ">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="reporting.php">Report</a></li>
                        <li class="nav-item"><a class="nav-link" href="search.php">View Status</a></li>
                        <li class="nav-item"><a class="nav-link active" href="reward.php">Achievements</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="safety.php">Safety & Prevantion</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="admin/admin.php">Admin login</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section>
        <div class=""
            style=" width: 100%;height:60vh;background-position: center;
        background-size:cover;  background-image: url(assets/img11.jpg);background-attachment: fixed;  color: white ; padding:150px; background-overlay:rgba(1,1,1,1);   background-color: rgba(0,0,0,.1);">

            <div align="center">
                <h1>Our Achievements </h1>
                <h5 class="py-3">what we earn</h5>
            </div>
    </section>

    <section>
        <div class="container py-5" >
            <h1 align="center" style="font-size:50px; margin-top:30px;">Our Fire Fighters</h1>
            <center>
        <hr style="height:4px;width:4em;opacity:1" class="bg-danger">
      </center>
        </div>
        
            <div class=" container text-center p-5  ">
                <div class="row "  >
                  
                    <div class="col-3  bg-dark" style="margin-left:50px ;" >
                        <div><img class="img-fluid    mb-4 mb-0" style="width:90%; height:90%;" src="assets/img7.jpg"
                            alt=""></div>
                            <div class="text-white"><h5>মামুন মাহমুদ</h5></div>
                            <div class="text-white" style="font-size:14px;"><p>উপপরিচালক (প্রশাসন ও অর্থ)</p></div>
                            <div class="text-white" style="font-size:13px;"><p>ফায়ার সার্ভিস ও সিভিল ডিফেন্স অধিদপ্তর, চট্টগ্রাম।</p></div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3  bg-dark">
                        <div><img class="img-fluid   mb-4 mb-0" src="assets/img5.jpg " style="width:90%; height:90%;"
                            alt=""></div>
                            <div class="text-white"><h5>মোঃ মাইন উদ্দিন</h5></div>
                            <div class="text-white" style="font-size:14px;"><p>মহাপরিচালক</p></div>
                            <div class="text-white" style="font-size:13px;"><p>ফায়ার সার্ভিস ও সিভিল ডিফেন্স অধিদপ্তর, চট্টগ্রাম।</p></div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-3  bg-dark">
                       <div> <img class="img-fluid   mb-4 mb-0" src="assets/img10.jpg" style="width:90%; height:90%;"
                            alt=""></div>
                            <div class="text-white"><h5>কর্নেল জিল্লুর রহমান</h5></div>
                            <div class="text-white" style="font-size:14px;"><p>পরিচালক (অপারেশন ও মেইনটেন্যান্স)</p></div>
                            <div class="text-white" style="font-size:13px;"><p>ফায়ার সার্ভিস ও সিভিল ডিফেন্স অধিদপ্তর, চট্টগ্রাম।</p></div>
                    </div>
                </div> 
            </div>
    </section>

    <section  style="background-color: #F6F0F0;">
    <div class="container pt-5 pl-5 pb-5">
      <div class="row">
        <div class="col-5 pt-4">
          <h4 class=" opacity-100">Our Mission</h4>
          <hr width="300px;" style="height:2px;width:10em;" class="bg-danger " size="10" align="left">
          <h1 class=""><strong>We’re Professional Fire & Resuce Services </strong></h1>
        </div>
        <div class="col-3 mt-4 mr-5">
          <div class="card text-center p-2 ">
            <div class="card-body">
              <img src="assets/12.png" height="60px" width="60px" alt="">  
                <h2 class="card-title"><strong>3800</strong></h2> 
                <p class="card-text">Families Saved</p> 
            </div>
        </div>
        </div>
        <div class="col-4 pt-4">
          <h5>To make the world a better place we here to help you at any time wherever you want.</h5>
          <ul>
            <li>Well trained fighters</li>
            <li>Give best Medical service</li>
            <li>Emergency response</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

<section>
    <div class="container py-5" >
            <h1 align="center" style="font-size:50px; margin-top:30px;">Our Success Gallary </h1>
            <center>
        <hr style="height:4px;width:4em;opacity:1" class="bg-danger">
      </center>
        </div>
        <div class="container">
            <div class="row  ">
                <div class="col-3" style="margin-left:50px ;">
                <img class="img-fluid   mb-4 mb-0" src="assets/acv1.jpg">
                </div>
                <div class="col-1"></div>
                <div class="col-3">
                <img class="img-fluid   mb-4 mb-0" src="assets/acv2.jpg">
                </div>
                <div class="col-1"></div>
                <div class="col-3">
                <img class="img-fluid   mb-4 mb-0" src="assets/acv3.jpg">
                </div>
                 
                <div class="col-3" style="margin-left:50px ;">
                <img class="img-fluid   mb-4 mb-0" src="assets/acv3.jpg">
                </div>
            </div>
        </div>
</section>


   
    <?php include_once('includes/footer.php') ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>