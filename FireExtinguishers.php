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
        background-size:cover;  background-image: url(assets/bg-image-1.png);background-attachment: fixed;  color: white ; padding:150px; background-overlay:rgba(1,1,1,1);   background-color: rgba(0,0,0,.1);">

            <div align="center">
                <h1>Types Of Fire Extinguishers</h1>
                <!-- <h5 class="py-3">Get to know about the fire tools and equipment</h5> -->
            </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-7">
                    <div><img class="img-fluid   mb-4 mb-0" src="assets/Fire-Extinguishers.jpg" alt=""></div>
                    <div><p style="font-weight: lighter;">When it comes to the types of fire extinguishers, there are five main types including wet chemical, CO2, dry powder, foam and water. In order to meet the current regulations, it is important for you to have the exact type of fire extinguisher that is needed for your premises. The need for different types of fire extinguisher arises from the different types of fuel that may start a fire. The different types of fires caused by different fuels are classified as different classes of fire. As far as the type of fire extinguisher needed at your business premises is concerned, it depends on the fire risk from various classes of fire. <br><br>

It is important for you to ensure that the right size and weight of fire extinguisher is available at your business premises to meet the fire safety regulations.<br><br>

Even though the fire extinguishers are classified into five main types, the dry powder and water extinguishers have different versions which means there are a total of eight different types of fire extinguishers to choose from. The eight different types of fire extinguishers include specialist dry powder, standard dry powder, foam, water spray, water mist, water spray, wet chemical and carbon dioxide. There is no single fire extinguisher that can be used on all classes of fire.<br><br>

Here is a brief summary of different fire classes along with a reference chart displaying the type of extinguisher for each glass of fire. We also share detailed explanation of different types of fire extinguishers below.<br><br>

Classes of fire
There are six different types of fire classes and here is a detailed list covering types of fire included in each class:<br><br>

-> Class A – fires caused by combustible materials including paper, fabric, wood and other flammable solids.<br>
-> Class B – fires caused by flammable liquids such as paint, turpentine or petrol among others.<br>
-> Class C – fires caused by flammable gases including methane, butane or hydrogen among others.<br>
-> Class D – fires caused by combustible metals including potassium, aluminium or magnesium among others.<br>
-> Class F – fires include those caused by cooking oils such as a chip-pan fire.
Electrical Fires – fires involving electrical equipment but upon removal of the electrical item, the fire class is changed.</p></div>
<div class=""><h2 style="font-weight: bold;">Classes of fire</h2></div>
<p style="font-weight: lighter;">There are six different types of fire classes and here is a detailed list covering types of fire included in each class:<br><br>

    -> Class A – fires caused by combustible materials including paper, fabric, wood and other flammable solids.<br>
    -> Class B – fires caused by flammable liquids such as paint, turpentine or petrol among others.<br>
    -> Class C – fires caused by flammable gases including methane, butane or hydrogen among others.<br>
    -> Class D – fires caused by combustible metals including potassium, aluminium or magnesium among others.<br>
    -> Class F – fires include those caused by cooking oils such as a chip-pan fire.
Electrical Fires – fires involving electrical equipment but upon removal of the electrical item, the fire class is changed.<br></p>
<div class=""><h2 style="font-weight: bold;">Types of Fire Extinguishers</h2></div>
<div class=""><h3 style="font-weight: 500;">Foam Extinguishers</h3></div>
<div class="row">
    <div class="col-6">
        <div>
            <p  style="font-weight: lighter;">These are the most common type of fire extinguishers used for class B fires. However, these are water-based which means they these can also be used for class A fires. The label colour is cream.<br><br>

These fire extinguishers may be used for fires caused by various organic materials including wood, coal, textiles, fabrics, cardboard and paper among other things as well as flammable liquids including petrol and paint.<br><br>

This type of fire extinguisher should not be used for fires caused by flammable metals, kitchen fires and fires that involve electrical equipment.<br><br>

</p>
        </div>
    </div>
    <div class="col-6"><img src="assets/Foam-Extinguisher-300x300.jpg" alt=""></div>
</div>

<div class="my-4"><h3 style="font-weight: 500;">Water Extinguishers</h3></div>
<div class="row">
<div class="col-6"><img src="assets/Water-Extinguisher-300x300.jpg" alt=""></div>
    <div class="col-6">
        <div>
            <p  style="font-weight: lighter;">Water extinguishers are mostly used for class A fire risk. In most premises, it is necessary to have either foam or water extinguishers. It has a bright red label.<br><br>

This type of extinguisher is used for fires caused by various organic materials including fabrics, textiles, coal, wood, cardboard and paper among others. It should not be used for kitchen fires, fires caused by flammable gas and liquids as well as fires that involve electrical equipment.<br><br>

</p>
        </div>
    </div>
   
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
                <div><img class="img-fluid   mb-4 mb-0" src="assets/image002.jpg"></div>
                <div class="title pb-5" align="center"><u><a href="Foam.php"  style="color:black;">Foam / Chemical Suppression</a></u></div>
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