
    <?php
    session_start();
include("../model/db.php");
$mydb=new mydb();
   $conobj=$mydb->openCon();
   $results=$mydb->showbookdesin("bookdestionation",$conobj,$_SESSION["username"]);
   
   if($results->num_rows >0)
   {
    
   // echo "<table>";
    while ($myrows=$results->fetch_assoc())
    {
       
         $dlt= $myrows["dname_dlocation_dtype"];
       
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
