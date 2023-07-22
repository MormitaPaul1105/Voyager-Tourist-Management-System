
 
 
    


<?php
session_start();
error_reporting(0);
include("../model/db.php");

$mydb=new mydb();
$conobj=$mydb->openCon();
//$q=mysqli_query()
$results= $mydb->fetchtrans($conobj, "transport");
//$query_run = mysqli_query($conobj,$query);
//if($results->num_rows >0)
//{
 

 while ($myrows=$results->fetch_assoc())
 {
    ?>
<center>
   
<div class="row">
   <div class="card-body">
   <img class ="img_style" src="https://thumbs.dreamstime.com/b/plane-sky-bus-going-city-flying-over-77823615.jpg" alt="">
   
  <div class="card-header">Transport Name:<?php echo $myrows["tname"]; ?></div>
   
                           <p class="card-text">Transport Type: <?php echo $myrows["ttype"];?></p>
                            <p class="card-text">Transport Temparature: <?php echo $myrows["contype"];?></p>
                            <p class="card-text">Transport No: <?php echo   $myrows["serialno"];?></p>
                            <a href="../view/booktrans.php?dname_dlocation_dtype=<?php echo $myrows['tname'] ;?> , <?php echo  $myrows['serialno'];?>, <?php echo  $myrows['ttype'];?> and <?php echo  $myrows['contype'];?>" ><div class="bb bb1">Click here for booking</a>  </div>                          

                            <br><br>
                    </div>
                    </div>  
                    
                   
                    <?php 
                }
              
            ?>