




<?php
session_start();
error_reporting(0);
include("../model/db.php");

$mydb=new mydb();
$conobj=$mydb->openCon();
//$q=mysqli_query()
$results= $mydb->fetchhotel($conobj, "hotel");
//$query_run = mysqli_query($conobj,$query);
//if($results->num_rows >0)
//{
 

 while ($myrows=$results->fetch_assoc())
 {
    ?>
    <center>
   
    <div class="row">
   <div class="card-body">
    <img class ="img_style" src="https://www.itl.cat/pngfile/big/48-483585_beverly-hills-hotel-wallpaper-palm-wallpaper-hills-beverly.jpg" alt="">
    
  <div class="card-header">Hotel Name:<?php echo $myrows["hname"]; ?></div>
    
                           <p class="card-text">Hotel Location: <?php echo $myrows["hlocation"];?></p>
                            <p class="card-text">Hotel Rating: <?php echo $myrows["hrating"];?></p>
                            <p class="card-text">Room No: <?php echo   $myrows["serial"];?></p>
                            <a href="../view/bookhotel.php?hname_hlocation_hno=<?php echo $myrows['hname'] ;?> , <?php echo  $myrows['hlocation'] ;?> and <?php echo  $myrows['serial'] ;?>" ><div class="bb bb1">Book</a>   </div>                         
                          
                            <br><br>
                    </div>
                    </div>  
 </center>

                    <?php 
                }
            ?>
       
        
       