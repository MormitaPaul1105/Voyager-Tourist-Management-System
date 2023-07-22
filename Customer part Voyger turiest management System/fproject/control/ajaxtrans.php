<?php

include ('../model/db.php');

$transname=$_GET["searchtrans"];


$mydb = new mydb();
$conobj=$mydb->openCon();
$results= $mydb->showtransdata("transport",$conobj, $transname);
if($results->num_rows >0)
{
    
 while ($myrows=$results->fetch_assoc())
 {
     
    $tname='Transport Name';
    $ttype='Transport Type';
    $tt='Transport Temperature';
    $tse='Transport Number';
   
   echo "<table>";
    echo "
    
    <tr>
        <th> " . $tname ." </th>
        <th> ".$ttype."</th>
        <th> ".$tt."</th>
        <th> ".$tse."</th>
        
        
</tr>";

echo "<tr>";

    
    echo "<td>".$myrows["tname"]."</td>";
    echo "<td>".$myrows["ttype"]."</td>";
    echo "<td>".$myrows["contype"]."</td>";
    echo "<td>".$myrows["serialno"]."</td>";
    
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
echo " Transport dose not exists";

 }
 ?>