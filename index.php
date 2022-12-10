<?php include_once('includes/config.php');?>
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
  <title>Fire Reporting system</title>

  <link rel="icon" type="image/x-icon" href="assets/bdfirelogo.png" />
  <link href="css/styles.css" rel="stylesheet"/>
  <link href="css/hover-card.css" rel="stylesheet"/>
  <link href="css/uphov.css" rel="stylesheet"/>


</head>

<body>
<!-- <div id="preloader"></div> -->
<section>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php">   <img src="admin/uploadeddata/<?php echo $logo;?>"  width="65"><?php echo $wtitle;?>  
                <span style="padding-left:40px;"><?php echo $phone;?></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php.
                            ">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="reporting.php">Report</a></li>
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
  <!--navbar-->
  <!-- <?php include_once('includes/header.php') ?> -->


  
  <div class=""
    style=" width: 100%;height:70vh;background-position: center;
        background-size:cover;  background-image: url(assets/firetruck1.jpg);background-attachment: fixed;  color: white ; padding:150px;   background-color: rgba(0,0,0,.5);">

    <div align="center">
      <h1 data-aos="zoom-in-left" data-aos="fade up" data-aos-duration="1400" data-aos-delay="300">Online Fire Services</h1>
      <h4 class = "pb-3">We serve to save. </h4>
    </div>
    <div class="text-center"><a class="btn btn-danger" href="reporting.php">Report about fire</a></div>
  </div> 


  <div class="container px-2 px-lg-2">

    <div class="row gx-4 gx-lg-5 align-items-center my-5">
      <div class="col-6"><img class="img-fluid rounded mb-4 mb-lg-0" src="assets/fireteam.jpg" alt="..." /></div>

      <div class="col-6">
        <h2 class="font-weight-light" style="font-family:  ; ">Emergency Reporting of Fire</h2>
        <hr>
        <p class="my-3" style="font-family: open sans; padding-bottom:20px;">The Bangladesh Fire Service & Civil Defence
          (FSCD) of the People's Republic of Bangladesh is an emergency service operating under the Security Services
          Division of the Ministry of Home Affairs. The Department's main goal is to provide fire protection, emergency
          medical care, and other critical public safety services to the people of Bangladesh. The Department also works
          to continually educate the public in fire, life safety and disaster preparedness.</p>
        <!-- <div class="text-center"><a class="btn btn-danger" href="reporting.php">Report about fire</a></div> -->
      </div>
    </div>
  </div>

  <section class=" ">
    <div class="container">
      <div class="card text-white bg-dark my-5 py-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">Fire safety is the set of practices intended to reduce the destruction caused by
            fire. Fire safety measures include those that are intended to prevent ignition of an uncontrolled fire, and
            those that are used to limit the development and effects of a fire after it starts.</p>
        </div>
      </div>
    </div>
  </section>


  <section class="details text-center  p-5 " style=" background-color: #F6F0F0;" ;>
    <div class="container">
      <h2 class="p-3 " style="color: rgb(29, 27, 27); font-family: roboto;">We’re Professional Fire & Resuce Services </h2>
      <center>
        <hr style="height:4px;width:4em;opacity:1" class="bg-danger">
      </center>

      <div class="row ">
        
        <div class="col-4">
          <div class="content_img">
            <img src='assets/fire-fighters.png' width='100%' height='100%'>
            <div>Fire Fighting</div>
          </div>
        </div>
        
        <div class="col-4">
          <div class="content_img">
            <img src='assets/Fire_station-1.jpg' width='100%' height='100%'>
            <div>Operation Force </div>
          </div>
        </div>
        
        <div class="col-4">
          <div class="content_img">
            <img src='assets/service-3.jpg' width='100%' height='100%'>
            <div>fire suppresion</div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section class="pt-5 ">
  <div>
    <div class="container text-center">
      <h5>Warning</h5>
      
      <center>
        <hr style="height:4px;width:4em;opacity:1" class="bg-danger">
      </center>
      <h1><strong>Think of fire before it starts</strong></h1>
    </div>
    <div class="container  text-center p-5">
      <div class="row">
        <div class="col-3"  >
           <img src="assets/firewood.gif" style="width:30%; height:30%;" alt="">
          <h3>FIRE PREVENTION</h3>
          <p>The precautions to prevent potentially harmful fires, surviving and reducing the damage caused by emergencies.</p>
        </div> 
        <div class="col-3"  >
           <img src="assets/678-fireman-gradient.gif" style="width:30%; height:30%;" alt="">
          <h3>DEPARTMENT INFORMATION</h3>
          <p>We provide you with practical actions, advice and resources to prepare for and cope during a range of emergencies.</p>
        </div> 
        <div class="col-3"  >
           <img src="assets/1920-fire-hydrant-gradient.gif" style="width:30%; height:30%;" alt="">
          <h3>PUBLIC EDUCATION</h3>
          <p>The tools and information for teaching people of all ages about the fire and how to make choices regarding safety.</p>
        </div> 
        <div class="col-3" >
           <img src="assets/school-bell.gif" style="width:30%; height:30%;" alt="">
          <h3>STRATEGIC PLAN</h3>
          <p>The plan focuses on implementing advanced technologies, improving services and resiliency during emergency events.</p>
        </div> 
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

  <section class="pt-5 pb-5 " style=" width: 100%;height:70vh;background-position: center;
    background-size:cover;  background-image: url(assets/bg1.jpg);background-attachment: fixed;   ">
    <div class="container text-center">
      <h5>Some Features & Benefits</h5>
      
      <center>
        <hr style="height:4px;width:4em;opacity:1" class="bg-danger">
      </center>
      <h1><strong>How We Handle Fire</strong></h1>
    </div>
  
    <div class="container  text-center p-5">
      <div class="row">
        <div class="col-2">
          <div class="box ">
            <img src="assets/school-bell.gif" alt="">
            <h6 class="mt-4 mb-5">Fire Alarm</h6>
            <div class="content ">
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="box ">
            <img src="assets/fire-station.gif" alt="">
            <h6 class="mt-4 mb-5 ">Fire Station</h6>
            <div class="content ">
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="box ">
            <img src="assets/678-fireman-outline.gif" alt="">
            <h6 class="mt-4 mb-5">Fire Fighter</h6>
            <div class="content ">
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="box ">
            <img src="assets/fire.gif" alt="">
            <h6 class="mt-4 mb-5">Fire Safety</h6>
            <div class="content ">
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="box ">
            <img src="assets/metal-detector.gif" alt="">
            <h6 class="mt-4 mb-5">Fire Exit Plac</h6>
            <div class="content ">
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="box ">
            <img src="assets/alarm.gif" alt="">
            <h6 class="mt-4 mb-5">Fire Bell</h6>
            <div class="content ">
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  
  </section>


 <section class="py-5  bg-danger " style="background-image: url(assets/map.png);">

    <div class="container">
      <div class="row">
        <div class="col-7">
          <h1 class="text-white"><strong>24/7 Available. Call us Immediately
              16143</strong></h1>
        </div>
        <div class="col-5 align-center pt-4">
        <div class="text-center"><a class="btn btn-primary px-5" href="contact.php"  >Contact Us</a></div>
        </div>
      </div>
    </div>
  </section>
  <iframe  style="display:none;" src=" #" title=" " frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   

  </div>


  
  <?php include_once('includes/footer.php') ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/scripts.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>


 
</html>