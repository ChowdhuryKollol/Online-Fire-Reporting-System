<?php $query=mysqli_query($con,"select * from tblsite");
while($row=mysqli_fetch_array($query)){
$logo=$row['siteLogo']; 
$wtitle=$row['siteTitle'];
$phone=$row['sitephone'];
}  ?>
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
                        <li class="nav-item"><a class="nav-link" href="reward.php">Reward</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin/admin.php">Admin login</a></li>
                    </ul>
                </div>
            </div>
        </nav>