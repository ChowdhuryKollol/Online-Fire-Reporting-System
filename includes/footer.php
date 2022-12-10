<?php $query=mysqli_query($con,"select * from tblsite");
while($row=mysqli_fetch_array($query)){
$logo=$row['siteLogo'];  
$phone=$row['sitephone'];
}  ?>

<footer class="py-2 bg-dark">

<div class="container">
        <div class="row my-5 mx-5 text-white">
                <div class="col-3 my-4">
                        <a class="navbar-brand" href="index.php">   <img src="admin/uploadeddata/<?php echo $logo;?>"  width="165">  
                        </a>
                </div>
                <div class="col-3 my-3">
                        <h5>Report Fire details</h5>
                        <hr>
                        <p>Fire accidetn is a very common & dangerous problem in our country. We need to be more careful in our daily life</p>
                        <a href="reporting.php" style="color:white;text-decoration:none;"">Click to report-></a>
                </div>
                <div class="col-3 my-3 ">
                        <h5>Safety & Prevantion</h5>
                        <hr>
                        <p>To know about fire tools and how can a fire accident happen and how to prevent it.All this knowledge we need to gain. </p>
                        <a href="safety.php" style="color:white; text-decoration:none;">Know more -></a>
                </div>
                <div class="col-3 my-5 "  >
                         <h5>CALL <?php echo $phone;?> OR <br> EMERGENCIES</h5>
                        <h5>Report us and <br> 
                       also can download the number of station
                        </h5>
                        <a href="assets/number.pdf" style="color:white; text-decoration:none;">Download number-></a>
                </div>
        </div>
</div>
</footer>