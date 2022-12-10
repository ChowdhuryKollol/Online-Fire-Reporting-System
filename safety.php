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

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Safety</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/bdfirelogo.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        background-size:cover;  background-image: url(assets/van-fire.jpg);background-attachment: fixed;  color: white ; padding:150px; background-overlay:rgba(1,1,1,1);   background-color: rgba(0,0,0,.1);">

            <div align="center">
                <h1>Safety & Prevantion</h1>
                <h5 class="py-3">Get to know about the fire tools and equipment</h5>
            </div>
    </section>
    <section>
        <div class="container">
            <div class="heading pt-5" align="center">
                <h2>What is fire?</h2>
                <center>
                    <hr style="height:3px;width:4em;opacity:1" class="bg-danger">
                </center>
            </div>

            <div class="title  py-3" align="center">Fire is the rapid oxidation of a material (the fuel) in the
                exothermic chemical process of combustion, releasing heat, light, and various reaction products.[1][a]
                At a certain point in the combustion reaction, called the ignition point, flames are produced. The flame
                is the visible portion of the fire. Flames consist primarily of carbon dioxide, water vapor, oxygen and
                nitrogen. If hot enough, the gases may become ionized to produce plasma. Depending on the substances
                alight, and any impurities outside, the color of the flame and the fire's intensity will be different.
            </div>
            <div class="images"></div>
            <div class="details"> </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="heading pt-5" align="center">
                <h2>Causes of fire in our daily life </h2>
                <center>
                    <hr style="height:3px;width:4em;opacity:1" class="bg-danger">
                </center>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="title  py-2" align=" "><b><u>Housekeeping</u></b> : Poor house keeping is a poor fire
                        hazard.Cotton,
                        cloths, papers ,etc are the sources of ignition. They should be kept away from combusting
                        material like
                        petrol, oil ,etc.</div>
                </div>
                <div class="col-6">
                    <div class="title  py-2" align=" "><b><u> Smoking </u> </b>: Careless smoking in non smoking areas
                        should be stopped. Smoking shall be permitted in
                        smoking zone only.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="title  py-2" align=" "><b><u> Welding /gas cutting </u></b> : While doing gas welding
                        or oxy-acetylene cutting produces flying sparks
                        which falls on inflammable material and fire takes
                        placc.</div>
                </div>
                <div class="col-6">
                    <div class="title  py-2" align=" "><b><u> Ignorance about fire hazards </u></b> : Lack of knowledge
                        about
                        the safe methods of storage of inflammable liquids,
                        materials. Correct use of electrical equipments etc.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="title  py-2" align=" "><b><u> Negligent habit </u></b> : Our negligent or careless
                        habits are
                        responsible for fire out break. A lighted mateh stick,
                        cigarette end carelessly thrown on any combusting material</div>
                </div>
                <div class="col-6">
                    <div class="title  py-2" align=" "><b><u> Kitchen </u></b> : Most sensible area to get fire in
                        hotel. Kitchen
                        staff should take extra care while preparing food. In kitchen
                        because of carelessness oil fire and gas fire can take place.</div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="heading py-5" align="center">
                <h2>How to prevent fire in your home</h2>
                <center>
                    <hr style="height:3px;width:4em;opacity:1" class="bg-danger">
                </center>
            </div>

            <div class="row">
                <div class="col-5"><img src="assets/unplugged.jpg" alt="" class="img-fluid"></div>

                <div class="col-6" style="  2px;margin-left:50px;">
                    <div style="margin-left:50px;">
                        <h3>Unplug Items You’re Not Using</h3>
                        <p>Excess electricity flowing through items in your home can always be a potential fire hazard.
                            Things like computers, TVs, game systems and a whole lot more use electricity even when
                            they’re not on. That means they can always experience a surge or they can just overheat and
                            cause a fire.

                            The continuous electricity that’s flowing into them provides them with a source for a fire
                            as well. By unplugging these items when you’re not using them and, therefore, not paying
                            attention to them, you can cut down on your chances of a fire.</p>
                    </div>
                </div>
            </div>

            <div class="row py-5">


                <div class="col-6" style="  2px;margin-right:50px;">
                    <div style="margin-left:50px;">
                        <h3>Use Surge Protectors</h3>
                        <p>At the very least, you want to make sure that all of your electronics are plugged into surge
                            protectors. A surge in power is when you are most likely to experience an electrical fire
                            and by plugging items into a surge protector you don’t have to worry about that excess
                            electricity getting to the item and causing a fire.

                            The surge protector keeps that extra out and can definitely reduce your risk of having a
                            fire in the first place or the strength of it if you do get one.</p>
                    </div>
                </div>
                <div class="col-5"><img src="assets/unplugged2.jpg" alt="" class="img-fluid"></div>
            </div>

            <div class="row py-5">

                <div class="col-5"><img src="assets/unplugged4.jpg" alt="" class="img-fluid"></div>
                <div class="col-6" style="  2px;margin-left:50px;">
                    <div style="margin-left:50px;">
                        <h3>Keep Flammable Items Away From Heat</h3>
                        <p>If you keep cooking oil in your kitchen you want to keep it away from the stove or anything
                            that could potentially spark and cause a fire. The same goes for gas that you might keep in
                            a garage for your car, your lawnmower or anything else.

                            You want to keep the gas away from a potential spark or flame. By carefully containing these
                            things in approved containers and keeping them a safe distance away from anything that could
                            react with them you’re going to be better prepared and cut your risk of problems at the same
                            time.</p>
                    </div>
                </div>

                <div class="row py-5">


                    <div class="col-6" style="  2px;margin-right:50px;">
                        <div style="margin-left:50px;">
                            <h3>Check The Electrical Frequently</h3>
                            <p>That doesn’t mean you need to dig into the walls in your home to check electrical wires,
                                but you should be checking anything that’s visible. Monitor the wall outlets in your
                                home and pay attention to any that suddenly don’t work.

                                It could be evidence of a problem behind the walls. Look for cords to your electric
                                belongings that are frayed or damaged. These could be signs of problems as well and you
                                don’t want to plug them into your electrical system if you know there’s a problem
                                already.</p>
                        </div>
                    </div>
                    <div class="col-5"><img src="assets/unplugged10.jpg" alt="" class="img-fluid"></div>

                    <div class="row pt-5">

                        <div class="col-5"><img src="assets/fire5.jpg" alt="" class="img-fluid"></div>
                        <div class="col-6" style="  2px;margin-left:50px;">
                            <div style="margin-left:50px;">
                                <h3>Escape Plan</h3>
                                <p>The reaction is how every person in the household should act one the smoke alarm
                                    sound off or someone sees the fire. Where do you go, what do you do and how. You
                                    should know to always keep low, under the smoke, don’t open doors with hot doorknobs
                                    and don’t open a window in the room where there is an open flame.

                                    The layout of your house is the second thing you need to look into when making an
                                    escape plan, creating routes and backup routes in cases that there is a fire. There
                                    should be at least two exits from your home in case of a fire . </p>
                            </div>
                        </div>

                    </div>
    </section>

    <section>
        <div class="container">
            <div class="heading py-1" align="center">
                <h2>What Tools we can use to prevent fire</h2>
                <center>
                    <hr style="height:3px;width:4em;opacity:1" class="bg-danger">
                </center>
            </div>

        </div>
        <div class="container">
            <div class="row pt-5 ml-5">
                
                <div class="col-3" style="margin-left:50px ;">
                <div><img class="img-fluid   mb-4 mb-0" src="assets/Fire-Extinguishers.jpg"></div>
                <div class="title pb-5" align="center"><u><a href="FireExtinguishers.php"  style="color:black;">Fire Extinguishers</a></u></div>
                </div>
          
                <div class="col-3" style="margin-left:50px ;">
                <div><img class="img-fluid   mb-4 mb-0" src="assets/wet-pipe-fire-sprinkler-300x200.jpg"></div>
                <div class="title pb-5" align="center"><u><a href="FireSprinkler.php"  style="color:black;">Fire Sprinkler - Wet Pipe Systems</a></u></div>
                </div>
                   
                <div class="col-3" style="margin-left:50px ;">
                <div><img class="img-fluid  mb-4 mb-0" src="assets/image002.jpg"></div>
                <div class="title pb-5" align="center"><u><a href="Foam.php"  style="color:black;">Foam / Chemical Suppression</a></u></div>
                </div>
                   
                <div class="col-3" style="margin-left:50px ;">
                <div><img class="img-fluid   mb-4 mb-0" src="assets/4.jpg"></div>
                <div class="title pb-5" align="center"><u><a href="FireAlarm.php"  style="color:black;">Fire Alarm Systems</a></u></div>
                </div>
                   
                <div class="col-3" style="margin-left:50px ;">
                <div><img class="img-fluid   mb-4 mb-0" src="assets/eaton-ceag-el-cps-79011-cg-s-rz-40071351230.jpg" style="height:160px;width:400px;" ></div>
                <div class="title pb-5" align="center"><u><a href="FireExit.php"  style="color:black;">Fire Exit</a></u></div>
                </div>
                   
            
                          
                 

            </div>
        </div>

    </section>

    
    <?php include_once('includes/footer.php') ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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