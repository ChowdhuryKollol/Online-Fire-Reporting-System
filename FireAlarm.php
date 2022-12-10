<?php include_once('includes/config.php');
?>
<?php $query=mysqli_query($con,"select * from tblsite");
while($row=mysqli_fetch_array($query)){
$logo=$row['siteLogo']; 
$wtitle=$row['siteTitle'];
$phone=$row['sitephone'];
}  ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/bdfirelogo.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php"> <img src="admin/uploadeddata/<?php echo $logo;?>" width="65">
                    <?php echo $wtitle;?>
                    <span style="padding-left:40px;">
                        <?php echo $phone;?>
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php.
                            ">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="reporting.php">Report</a></li>
                        <li class="nav-item"><a class="nav-link" href="search.php">View Status</a></li>
                        <li class="nav-item"><a class="nav-link" href="reward.php">Achievements</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" href="safety.php">Safety & Prevantion</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="admin/admin.php">Admin login</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </section>


    <section>
        <div class=""
            style=" width: 100%;height:60vh;background-position: center;
        background-size:cover;  background-image: url(assets/3-1.png);background-attachment: fixed;  color: white ; padding:150px; background-overlay:rgba(1,1,1,1);   background-color: rgba(0,0,0,.1);">

            <div align="center">
                <h1>Fire Alarm System</h1>
                <!-- <h5 class="py-3">Get to know about the fire tools and equipment</h5> -->
            </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-7">
                    <div><img class="img-fluid   mb-4 mb-0" src="assets/4.jpg" alt=""></div>
                    <div><p style="font-weight: lighter;">Fire Alarm Systems are designed to discover fires early in their development when time will still be available for the safe evacuation of occupants. Early detection also plays a significant role in protecting the safety of emergency response personnel. Property loss can be reduced and downtime for the operation minimized through early detection because control efforts are started while the fire is still small. Most alarm systems provide information to emergency responders on the location of the fire, speeding the process of fire control.<br><br>

Types of Fire Alarm System<br>
-> Conventional Systems are used for small installations as it becomes cost effective and also serves the purpose of safety and location identification is easy.<br><br>
-> Addressable systems are used for high ends like Hotels, Hospitals, High Rise Buildings, BPO'S etc. The system gives you pin point location of detection and complex operations are also possible such as HVAC trip off, Lift Management, Access Control Door Release etc<br><br>
Components of the System:<br>
-> Fire Alarm Control Panel.<br>
-> Detectors (Smoke/ Heat/ Multi / Beam / Flame / UV IR / Gas /Video Smoke Detectors Etc)<br>
-> Manual Call Points.<br>
-> Panic Switches.<br>
-> Hooters/ Sounder<br>
-> Cable and Instrumentation.<br>
-> Linear Heat Sensing Cables Etc..<br><br></p></div>

<div><h2>Inspecting Your Fire Alarm And Other Equipment</h2></div>
<div><p style="font-weight: lighter;">It’s essential while having your fire sprinkler system inspected that you also have your company’s fire alarm inspection completed as well.<br><br>

 

To make sure the fire alarm is working as it should, it will need to be inspected and tested regularly as well. Two technicians will be required to perform this task. One technician will remain at the fire alarm panel while the other goes throughout the building and different floors to inspect and test the important fire protection products. This can include pull stations, smoke detectors, fire alarms, fire alarm horns, and strobes.<br><br>

 

The tech stationed at the fire alarm panel checks to make sure the panel is triggered and activated each time one of these products is tested. If something fails to trigger the panel, that piece of equipment must be repaired or replaced to pass inspection. This would also be a good time for any fire extinguisher maintenance to be performed.<br><br></p></div>
 
                </div>
                

                <div class="col-4 ml-5" > 
                    <div>
                        <h3>More tools</h3>
                        <hr>
                        <div class="col-8" style="margin-left: 50px ;">
                <div><img class="img-fluid   mb-4 mb-0" src="assets/wet-pipe-fire-sprinkler-300x200.jpg"></div>
                <div class="title pb-5" align="center"><u><a href="FireSprinkler.php"  style="color:black;">Fire Sprinkler - Wet Pipe Systems</a></u></div>
                </div>
                <div class="col-8" style="margin-left: 50px ;">
                <div><img class="img-fluid   mb-4 mb-0" src="assets/Fire-Extinguishers.jpg"></div>
                <div class="title pb-5" align="center"><u><a href="FireExtinguishers.php"  style="color:black;">Fire Extinguishers</a></u></div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include_once('includes/footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>