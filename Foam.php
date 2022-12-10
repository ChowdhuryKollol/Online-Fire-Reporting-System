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
        background-size:cover;  background-image: url(assets/foam_suppression-1280x720-1.jpg);background-attachment: fixed;  color: white ; padding:150px; background-overlay:rgba(1,1,1,1);   background-color: rgba(0,0,0,.1);">

            <div align="center">
                <h1>Foam / Chemical Suppression</h1>
                <!-- <h5 class="py-3">Get to know about the fire tools and equipment</h5> -->
            </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-7">
                    <div><img class="img-fluid   mb-4 mb-0" src="assets/image002.jpg" alt=""></div>
                    <div><p style="font-weight: lighter;">Foam fire suppression systems are classified as high, medium, or low expansion; each system delivers a different suppression process based on application areas.<br><br>

In a High expansion foam system, thefoam expands from 100:1 to 1000:1, air or other nonflammable gas expands the range naturally or forcefully. This high expansion foam creates an upper depth, less wet blanket with large bubbles. It is very light and can quickly fill an extended enclosure. A small amount of water creates a large amount of foam within a short time and suppresses fire by smothering.<br><br>

A high expansion system is applied to large enclosed areas where a total flooding system is required at any time to extinguish the fire, not suitable for outdoor areas. Mostly used in warehouses, aircraft hangars, and liquified natural gas impound basins.<br><br>

In a Medium expansion foam system, the expansion ratio is 10:1 to 100:1, very useful for small surface area. This system can produce a large amount of accurate foam within a short duration. It creates a 2 feet depth thick blanket above the flammable fuels/chemicals and separates fuel from the oxygen. Besides, existing water provides a cooling effect over the fire. Thus, extinguish the fire as well as vapor used in refineries, chemical manufacturing areas, municipal fire brigades, solvent storage areas.<br><br>

In a Low expansion foam system, the foamexpands ratio is 10:1 that creates a very wet foam blanket with high dense small foam bubbles. The foam blanket is quite durable and creates a secure cover. It separates the fuel from oxygen by a smothering process. Additionally, existing adequate water produces a cooling effect over the flame.<br><br>

Discharges happen through sprinkler systems, spray nozzles, monitors, and foam makers and deliver high-density foam in long projection distance as well as height.  Low expansion foam is not sensitive to wind or rain, and it is used in hydrocarbon fires including tank storage, onboard ships, refineries, rooftop helipads, manufacturing areas.<br><br></p></div>
<div class=""><h2 style="font-weight: bold;">How Does Foam Suppression System Work?</h2></div>
<p style="font-weight: lighter;">Foam systems consist of storage vessels (Bladder Tanks) with a built-in proportioning device that contains the foam concentrates and is connected into the discharge system ready for immediate use in the event of a fire.<br><br>

Foam Concentrates rapidly knock down fire by producing a thin aqueous film layer. For maximum effectiveness, the exact amount of foam concentrate must be mixed with water.<br><br>

The leading firefighting agent in a foam fire system is Aqueous Film-Forming Foams (AFFF). It requires a little energy input to generate high-quality firefighting foam. Usually, 1% and 3% foam concentrate used in hydrocarbon fuels fires.<br><br>

If the concentrate container is shown 3% foam concentrate, that’s mean for every 100 gallons of foam solution, 3 gallons of the foam concentrate must be used with the 97 gallons of water in the solution.<br><br>

Proportioning Devices release the proper amount of concentrate into the water supply based on the solution required, and based on a range of flow rates and pressures.<br><br>

Foam solutions applied to the flammable fire by either aspirating or non-aspirating devices. The air-aspirating device contains air and mixes it with foam solution within the device. Besides, the non-air-aspirating device is incapable of doing it.<br><br></p>
 
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