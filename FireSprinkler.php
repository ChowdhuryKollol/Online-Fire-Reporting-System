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
        background-size:cover;  background-image: url(assets/4-1.png);background-attachment: fixed;  color: white ; padding:150px; background-overlay:rgba(1,1,1,1);   background-color: rgba(0,0,0,.1);">

            <div align="center">
                <h1>Wet Pipe Fire Sprinkler Systems</h1>
                <!-- <h5 class="py-3">Get to know about the fire tools and equipment</h5> -->
            </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-7">
                    <div><img class="img-fluid   mb-4 mb-0" src="assets/2-1.png"   alt=""></div>
                    <div><p style="font-weight: lighter;">Fire sprinkler systems are critical because they can help save lives. But having these systems installed and fitted into place is only the beginning of the process. That’s because several different things can go wrong with these useful systems. A small leak in a pipe or a damaged sprinkler head could cause your sprinkler system to malfunction.<br><br>

 

Although fire sprinkler inspection and maintenance may seem like a repetitive task for business owners, they play a crucial role in keeping your property and your workers safe. As long as you take care of them properly, they will do their job accordingly. And part of taking care of these systems requires you to have regular fire sprinkler system inspections.<br><br></p></div>
<div class=""><h2 style="font-weight: bold;">What Does A Wet Sprinkler System Inspection Look Like?</h2></div>
<p style="font-weight: lighter;">Because there are different types of fire sprinkler systems, the inspection process is different for each one. When looking over a wet system, the inspection team will look at each valve and check to ensure all gauges are calibrated and in date. Next, they will check if spare heads are available for the system, and all tools are in place to install them if needed.<br><br>
 
Afterward, the team will check for anything that may appear broken or damaged with the fire sprinkler system. The technicians will check for instances such as areas with zero protection or sprinkler heads that should be cleaned due to the accumulation of grease or dust. Depending on their overall condition, some of the sprinkler heads may need to be replaced due to damage.<br></p>
<div class=""><h2 style="font-weight: bold;">What Does A Dry Sprinkler System Inspection Look Like?</h2></div> 
<div class="row">
    <div class="col-5">
        <div>
            <p  style="font-weight: lighter;">These are the most common type of fire extinguishers used for class B fires. However, these are water-based which means they these can also be used for class A fires. The label colour is cream.<br><br>

These fire extinguishers may be used for fires caused by various organic materials including wood, coal, textiles, fabrics, cardboard and paper among other things as well as flammable liquids including petrol and paint.<br><br>

This type of fire extinguisher should not be used for fires caused by flammable metals, kitchen fires and fires that involve electrical equipment.<br><br>

</p>
        </div>
    </div>
    <div class="col-7"><img class="img-fluid" style="height:250px;width:350px;"src="assets/3-1.png" alt=""></div>
</div>

 
 


                </div>
                

                <div class="col-4 ml-5" > 
                    <div>
                        <h3>More tools</h3>
                        <hr>
                        <div class="col-8" style="margin-left: 50px ;">
                <div><img class="img-fluid   mb-4 mb-0" src="assets/Fire-Extinguishers.jpg"></div>
                <div class="title pb-5" align="center"><u><a href="FireExtinguishers.php"  style="color:black;">Fire Extinguishers</a></u></div>
                </div>
                <div class="col-8" style="margin-left: 50px ;">
                <div><img class="img-fluid   mb-4 mb-0" src="assets/image002.jpg"></div>
                <div class="title pb-5" align="center"><u><a href="Foam.php"  style="color:black;">Foam / Chemical Suppression</a></u></div>
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