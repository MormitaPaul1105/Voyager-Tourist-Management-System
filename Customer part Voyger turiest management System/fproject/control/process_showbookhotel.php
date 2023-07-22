
    <?php
    session_start();
include("../model/db.php");
$mydb=new mydb();
   $conobj=$mydb->openCon();
   $results=$mydb->showbookhin("hotelbook",$conobj,$_SESSION["username"]);
   
   if($results->num_rows >0)
   {
    
   // echo "<table>";
    while ($myrows=$results->fetch_assoc())
    {
       
         $dlt= $myrows["hname_hlocation_hno"];
       
       $un=$myrows["username"];
       $age=$myrows["age"];
       $g=$myrows["gender"];
       $e=$myrows["email"];
     
       

    }
    
}
else{
    echo $conobj->error;
}



?>
