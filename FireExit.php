<?php include_once('includes/config.php');
?>
<?php $query=mysqli_query($con,"select * from tblsite");
while($row=mysqli_fetch_array($query)){
$logo=$row['siteLogo']; 
$wtitle=$row['siteTitle'];
$phone=$row['sitephone'];
} ?> 

<!doctype html>
<html lang="en">
  <head>
    <title>Exit </title>
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
        background-size:cover;  background-image: url(assets/exit3mledc-1000x1000.jpg);background-attachment: fixed;  color: white ; padding:150px; background-overlay:rgba(1,1,1,1);   background-color: rgba(0,0,0,.1);">

            <div align="center">
                <h1>Fire Exit</h1>
                <!-- <h5 class="py-3">Get to know about the fire tools and equipment</h5> -->
            </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-7">
                    <div><img class="img-fluid   mb-4 mb-0" src="assets/eaton-ceag-el-cps-79011-cg-s-rz-40071351230.jpg" alt=""></div>
                    <div><p style="font-weight: lighter;">If your building starts filling with smoke, how will you quickly get out? Do you know where the closest exits are? What if your first choice for a fire exit is blocked or jammed with too many people? Have you considered what to do if a fire exit happens to be locked, or the hallways leading to the fire exit are blocked by fire, debris, or a crowd of people? Thinking about the answers to these questions in advance could keep you safe during a fire or other emergency.<br><br></p>
                    <div><h2>What is an Exit Route?</h2></div><br>
                    <div><p style="font-weight: lighter;">OSHA defines an exit route as:<br>

A continuous and unobstructed path of exit travel from any point within a workplace to a place of safety. An exit route consists of three parts:<br>

• Exit access – portion of an exit route that leads to an exit.<br>
• Exit – portion of an exit route that is generally separated from other areas to provide a protected way of travel to the exit discharge.<br>
• Exit discharge – part of the exit route that leads directly outside or to a street, walkway, refuge area, public way, or open space with access to the outside.<br>
The terms exits, fire exits, and emergency exits all have the same meaning.<br>

</p></div>
<div><h2>Exit Route Requirements</h2></div> 
<div><h5>The number of Required Fire Exits</h5></div><br>
<div><p style="font-weight: lighter;">In most cases, a workplace must have at least two fire exits. Two or more ensures that employees, visitors, and other people in the building will be able to get out quickly during an emergency. Additional fire exits may be necessary based on the building size, number of occupants, and the arrangement of the interior of the building. What is important is that people can get out quickly and safely. The number and location of fire exits must be sufficient to accomplish this.</p></div>
<div><h5>General Design Requirements</h5></div><br> 
<div><p style="font-weight: lighter;">An exit route is the path traveled to get to an exit. The following are the design requirements OSHA has established for various parts of fire exit routes in general:<br>

-> Each exit discharge must go directly outside the building, an open space with access to the outside, or a refuge area.<br>
-> Each exit discharge must be large enough for the number of people likely to use that exit route.<br>
-> The capacity (number of people) of an exit route may not decrease when moving in the direction people are going to exit the building.<br></p></div>

<div><h5>Fire Exits</h5></div><br> 
<div><p style="font-weight: lighter;">The exit portion of a route is separated from other areas of the building. It provides a protected pathway out of the building.<br>

Exits, such as stairwells, must be protected from other parts of the building by fire-resistant materials. These materials must have a one-hour fire-resistance rating if the exit connects three or fewer floors in a building. If it connects more than three floors, it must have a two-hour fire-resistance rating.<br>
Exits many only have the openings that are necessary to allow people into the exit from occupied areas of the building, and for people to discharge from the exit into a safe area (see above). All openings must have a self-closing, approved fire door. The fire door must either remain closed or automatically close in an emergency.<br></p></div>


                </div>
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