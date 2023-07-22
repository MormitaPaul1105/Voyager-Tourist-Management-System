<?php

include ('../model/db.php');

$desname=$_POST["searchdatades"];


$mydb = new mydb();
$conobj=$mydb->openCon();
$results= $mydb->showdesdata("destination",$conobj, $desname);
if($results->num_rows >0)
{
    
 while ($myrows=$results->fetch_assoc())
 {
     
   echo " This destination is exits";
  
}

/*if($hotelname=="Bistro")
    {
        header("Location:../view/bistro.php");  
}*/
}
 else
 {
echo " Destination dose not exists";

 }



 ?>