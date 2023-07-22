
    <?php
    session_start();
include("../model/db.php");
$mydb=new mydb();
   $conobj=$mydb->openCon();
   $results=$mydb->showUser("user",$_SESSION["username"],$conobj);
   
   if($results->num_rows >0)
   {
    
   // echo "<table>";
    while ($myrows=$results->fetch_assoc())
    {
       
         $fn= $myrows["firstname"];
        $ln=$myrows["lastname"];
       $un=$myrows["username"];
       $age=$myrows["age"];
       $g=$myrows["gender"];
       $e=$myrows["email"];
       $nid=$myrows["nid"];
       

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
