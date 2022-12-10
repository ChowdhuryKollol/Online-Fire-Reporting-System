 
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
    <title>Contact</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/bdfirelogo.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

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
                        <li class="nav-item"><a class="nav-link" href="reward.php">Achievements</a></li>
                        <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
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
        background-size:cover;  background-image: url(assets/station.jpg);background-attachment: fixed;  color: white ; padding:150px; background-overlay:rgba(1,1,1,1);   background-color: rgba(0,0,0,.1);">

            <div align="center">
                <h1>Find our location </h1>
                <h5 class="py-3">Know where are we and our number</h5>
                <!-- <embed src="" width="800px" height="2100px"/> -->
                <div class="btn btn-danger" href=""><a href="assets/number.pdf" style="color:white; text-decoration:none;" >Download number</a> </div>
            </div>

    </section>

    <!-- tab  -->

    <!-- <h2 class="text-center pt-4" style="font-family:open sans ;"><b>Contact Us</b></h2>
    <center>
        <hr style="height:2px;width:5em;opacity:1" class="bg-danger">
    </center> -->

<section class="py-5">
    <div class="container text-center">
        <ul class="nav nav-tabs justify-content-center " >
            <li class="  px-3 mx-3  btn btn-primary" ><a style="color:white;text-decoration:none;" data-toggle="tab" href="#loc1"> LOC 1 </a></li>
            <li class="px-3 mx-3 btn btn-primary "><a style="color:white;text-decoration:none;" data-toggle="tab" href="#loc2" > LOC 2 </a></li>
            <li class="px-3 mx-3  btn btn-primary"><a style="color:white;text-decoration:none;" data-toggle="tab" href="#loc3"> LOC 3 </a></li>
            <li class="px-3 mx-3  btn btn-primary"><a style="color:white;text-decoration:none;" data-toggle="tab" href="#loc4"> LOC 4 </a></li>
            <li class="px-3 mx-3  btn btn-primary"><a style="color:white;text-decoration:none;" data-toggle="tab" href="#loc5"> LOC 5 </a></li>
            <li class="px-3 mx-3 btn btn-primary"><a style="color:white;text-decoration:none;" data-toggle="tab" href="#loc6"> LOC 6 </a></li>
            <li class="px-3 mx-3 btn btn-primary"><a style="color:white;text-decoration:none;" data-toggle="tab" href="#more"> More... </a></li>
        </ul>

        <div class="tab-content">
            <div id="loc1" class="tab-pane fade in active show py-3">
                <h3 class="mb-5">LOCATION 1</h3>
                <div class="row mt-lg-n4 mt-md-n4 justify-content-center">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <center>
                                    <dl>
                                        <dt class="text-muted">Email</dt>
                                        <dd class="pl-3"> fireserviceCTG@gmail.com</dd>
                                        <dt class="text-muted">Telephone </dt>
                                        <dd class="pl-3">0123446678 </dd>
                                        <dt class="text-muted">Mobile </dt>
                                        <dd class="pl-3">0123456789 </dd>
                                        <dt class="text-muted">Address</dt>
                                        <dd class="pl-3">Fire Service and Civil Defense,CNB, Chittagong., 9VQ7+22P, Chattogram</dd>
                                    </dl>
                                </center>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46412.302646080185!2d91.79933098736554!3d22.350078107332408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad2789d5c242bb%3A0xa7d1abaa1d42d985!2sFire%20Service%20and%20Civil%20Defense%2CCNB%2C%20Chittagong.!5e0!3m2!1sen!2sbd!4v1663865135762!5m2!1sen!2sbd"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="loc2" class="tab-pane fade py-3">
                <h3 class="mb-5">LOCATION 2</h3>
                <div class="row mt-lg-n4 mt-md-n4 justify-content-center">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <center>
                                    <dl>
                                        <dt class="text-muted">Email</dt>
                                        <dd class="pl-3"> fireserviceCTG@gmail.com</dd>
                                        <dt class="text-muted">Telephone </dt>
                                        <dd class="pl-3">031-683080 </dd>
                                        <dt class="text-muted">Mobile </dt>
                                        <dd class="pl-3">0123456789 </dd>
                                        <dt class="text-muted">Address</dt>
                                        <dd class="pl-3">Chittagong Fire Service & Civil Defence, 9RR6+QG9, Bayazid Bostami Rd, Chattogram</dd>
                                    </dl>
                                </center>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1075.827326300357!2d91.8106956529179!3d22.391895116786728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd841cb78400d%3A0x573f0d58af5fb1b9!2sChittagong%20Fire%20Service%20%26%20Civil%20Defence!5e0!3m2!1sen!2sbd!4v1667664564761!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="loc3" class="tab-pane fade py-3">
                <h3 class="mb-5">LOCATION 3</h3>
                <div class="row mt-lg-n4 mt-md-n4 justify-content-center">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <center>
                                    <dl> 
                                        <dt class="text-muted">Email</dt>
                                        <dd class="pl-3"> fireserviceCTG@gmail.com</dd>
                                        <dt class="text-muted">Website </dt>
                                        <dd class="pl-3"><a href="http://www.fireservice.gov.bd/"> http://www.fireservice.gov.bd/</a></dd>
                                        <dt class="text-muted">Mobile </dt>
                                        <dd class="pl-3">01730002408 </dd>
                                        <dt class="text-muted">Address</dt>
                                        <dd class="pl-3">Bangladesh Fire Service and Civil Defense, Agrabad, Chittagong., Dewan Haat, Sheikh Mujib Rd, Chattogram </dd>
                                    </dl>
                                </center>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14760.666001320636!2d91.81134767994769!3d22.34734116478489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8b7f66241e7%3A0x29701324df5f594!2sBangladesh%20Fire%20Service%20and%20Civil%20Defense%2C%20Agrabad%2C%20Chittagong.!5e0!3m2!1sen!2sbd!4v1667665401897!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="loc4" class="tab-pane fade py-3">
                <h3 class="mb-5">LOCATION 4</h3>
                <div class="row mt-lg-n4 mt-md-n4 justify-content-center">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <center>
                                    <dl>
                                        <dt class="text-muted">Email</dt>
                                        <dd class="pl-3"> fireserviceCTG@gmail.com</dd>
                                        <dt class="text-muted">Website </dt>
                                        <dd class="pl-3"><a href="http://www.fireservice.gov.bd/"> http://www.fireservice.gov.bd/</a></dd>
                                        <dt class="text-muted">Mobile </dt>
                                        <dd class="pl-3">01730002412 </dd>
                                        <dt class="text-muted">Address</dt>
                                        <dd class="pl-3">Fire Service and Civil Defence Station Nandankanon, 8RPM+RQQ, Chattogram 4000 </dd>
                                    </dl>
                                </center>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1330.1379882746937!2d91.83371028555196!3d22.336506191814646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad2759b5b40d83%3A0xb15ce1d2cd776ac6!2sFire%20Service%20and%20Civil%20Defence%20Station%20Nandankanon!5e0!3m2!1sen!2sbd!4v1667665361637!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="loc5" class="tab-pane fade py-3">
                <h3 class="mb-5">LOCATION 5</h3>
                <div class="row mt-lg-n4 mt-md-n4 justify-content-center">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <center>
                                    <dl>
                                        <dt class="text-muted">Email</dt>
                                        <dd class="pl-3"> fireserviceCTG@gmail.com</dd>
                                        <dt class="text-muted">Website </dt>
                                        <dd class="pl-3"><a href="http://www.fireservice.gov.bd/"> http://www.fireservice.gov.bd/</a></dd>
                                        <dt class="text-muted">Mobile </dt>
                                        <dd class="pl-3">01730002413 </dd>
                                        <dt class="text-muted">Address</dt>
                                        <dd class="pl-3">Fire Service and Civil Defence Station, Chandanpura., 8RXQ+XG5, Nabab Siraj Ud Daula Rd, Chattogram </dd>
                                    </dl>
                                </center>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11942.770826094362!2d91.82763644574062!3d22.35358502767767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad27670150f6f3%3A0x31d621983c928cd!2sFire%20Service%20and%20Civil%20Defence%20Station%2C%20Chandanpura.!5e0!3m2!1sen!2sbd!4v1667666590558!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="loc6" class="tab-pane fade py-3">
                <h3 class="mb-5">LOCATION 6</h3>
                <div class="row mt-lg-n4 mt-md-n4 justify-content-center">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <center>
                                    <dl>
                                        <dt class="text-muted">Email</dt>
                                        <dd class="pl-3"> fireserviceCTG@gmail.com</dd>
                                        <dt class="text-muted">Website </dt>
                                        <dd class="pl-3"><a href="http://www.fireservice.gov.bd/"> http://www.fireservice.gov.bd/</a></dd>
                                        <dt class="text-muted">Mobile </dt>
                                        <dd class="pl-3">01730002423 </dd>
                                        <dt class="text-muted">Address</dt>
                                        <dd class="pl-3">Kalurghat Fire Service & Civil Defence Station, Ward No 4, C&B More, BFIDC Rd, Chandgaon Thana, Kalurghat, Chattogram </dd>
                                    </dl>
                                </center>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29516.33845548646!2d91.82433773018852!3d22.370904458349102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad27b0c452460d%3A0xafd821613b23bf1b!2sKalurghat%20Fire%20Service%20%26%20Civil%20Defence%20Station!5e0!3m2!1sen!2sbd!4v1667666836259!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="more" class="tab-pane fade py-3">
                
                <div class="row mt-lg-n4 mt-md-n4 justify-content-center">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <center>
                                    <dl>
                                        <h2>More coming soon</h2>
                                    </dl>
                                </center>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <?php include_once('includes/footer.php') ?>



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>