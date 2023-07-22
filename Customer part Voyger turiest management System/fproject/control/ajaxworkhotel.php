<?php

include ('../model/db.php');

$hotelname=$_GET["searchhotel"];


$mydb = new mydb();
$conobj=$mydb->openCon();
$results= $mydb->showhoteldata("hotel", $hotelname,$conobj);
if($results->num_rows >0)
{
    
 while ($myrows=$results->fetch_assoc())
 {
     
    $hotelname='Hotel Name';
    $hlocation='Hotel Location';
    $hrating='Hotel Rating';
    $se='Room Number';
   
   echo "<table>";
    echo "
    
    <tr>
        <th> " . $hotelname ." </th>
        <th> ".$hlocation."</th>
        <th> ".$hrating."</th>
        <th> ".$se."</th>
        
        
</tr>";

echo "<tr>";

    
    echo "<td>".$myrows["hname"]."</td>";
    echo "<td>".$myrows["hlocation"]."</td>";
    echo "<td>".$myrows["hrating"]."</td>";
    echo "<td>".$myrows["serial"]."</td>";
    
    echo "</tr>";
    echo "</table>";
  
}

/*if($hotelname=="Bistro")
    {
        header("Location:../view/bistro.php");  
}*/
}
 else
 {
echo " Hotel dose not exists";

 }



 ?>