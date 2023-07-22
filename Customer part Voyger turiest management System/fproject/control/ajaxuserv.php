<?php

include ('../model/db.php');

$username=$_POST["un"];


$mydb = new mydb();
$conobj=$mydb->openCon();
$results= $mydb->showuserdata("user",$conobj, $username);
if($results->num_rows >0)
{
    
 while ($myrows=$results->fetch_assoc())
 {
     
   echo " This username is exits,please login";
  
}

/*if($hotelname=="Bistro")
    {
        header("Location:../view/bistro.php");  
}*/
}
 else
 {
echo " This username dose not exists";

 }



 ?>