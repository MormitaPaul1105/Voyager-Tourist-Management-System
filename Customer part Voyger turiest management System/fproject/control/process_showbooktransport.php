
    <?php
    session_start();
include("../model/db.php");
$mydb=new mydb();
   $conobj=$mydb->openCon();
   $results=$mydb->showbooktin("booktransport",$conobj,$_SESSION["username"]);
   
   if($results->num_rows >0)
   {
    
   // echo "<table>";
    while ($myrows=$results->fetch_assoc())
    {
       
         $dlt= $myrows["tname_tno_ttype_contype"];
       
       $un=$myrows["username"];
       $age=$myrows["age"];
       $g=$myrows["gender"];
       $e=$myrows["email"];
     
       

    }
    
}
else{
    echo $conobj->error;
}

if(isset($_POST["updateprofile"]))
{
  
   
header("Location:../view/updateprofile.php"); 

   }

?>
