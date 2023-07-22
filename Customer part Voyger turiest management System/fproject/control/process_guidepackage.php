
<link rel="stylesheet" type="text/css" href="../css/package.css">


<?php
session_start();
error_reporting(0);
include("../model/db.php");

$mydb=new mydb();
$conobj=$mydb->openCon();
//$q=mysqli_query()
$results= $mydb->fetchguide($conobj, " guide");
//$query_run = mysqli_query($conobj,$query);
//if($results->num_rows >0)
//{
 

 while ($myrows=$results->fetch_assoc())
 {
    ?>
   
   
    
   <div class="rowg">
   <div class="card-body">
   
    <img class ="img_style" src="" alt="">
    
  <div class="card-header">ID No:<?php echo $myrows["Id"]; ?></div>
 
    
                           <p class="card-text">Guide Name: <?php echo $myrows["Name"];?></p>
                            <p class="card-text">Guide Gender: <?php echo $myrows["Gender"];?></p>
                       
                            <a href="../view/bookguide.php?gid_gname_gg=<?php echo $myrows['Id'] ;?> , <?php echo  $myrows['Name'] ;?> and <?php echo  $myrows['Gender'] ;?>" ><div class="bb bb1">Book</a>   </div>                          
                           
                            <br><br> 
 
                            
                         
                    </div>
                    </div>  
                   
                    <?php 
                }
              
            ?>
              