
<link rel="stylesheet" type="text/css" href="../css/package.css">


<?php
session_start();
error_reporting(0);
include("../model/db.php");

$mydb=new mydb();
$conobj=$mydb->openCon();
//$q=mysqli_query()
$results= $mydb->fetchhotel($conobj, "destination");
//$query_run = mysqli_query($conobj,$query);
//if($results->num_rows >0)
//{
 

 while ($myrows=$results->fetch_assoc())
 {
    ?>
   
   
   <div class="row">
   <div class="card-body">
   
    <img class ="img_style" src="https://images.unsplash.com/photo-1500622944204-b135684e99fd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1461&q=80" alt="">
   
  <div class="card-header">Destination Name:<?php echo $myrows["des_name"]; ?></div>
 
    
                           <p class="card-text">Destination Location: <?php echo $myrows["location"];?></p>
                            <p class="card-text">Destination Type: <?php echo $myrows["des_type"];?></p>
                       
                            <a href="../view/bookdes.php?dname_dlocation_dtype=<?php echo $myrows['des_name'] ;?> , <?php echo  $myrows['location'] ;?> and <?php echo  $myrows['des_type'] ;?>" ><div class="bb bb1">Book</a>   </div>                       
                           
                            
                       <br><br>
                            
                         
                    </div>
                    </div>  
                   
                    <?php 
                }
                  
            ?>
              