<html>
<head>
<body>
    


		


    <?php
session_start();

include("../model/db.php");
if(empty($_SESSION["username"]))
{

    header("Location:../view/loginpage.php");  
}

$uname= $_SESSION["username"];


if(isset($_POST["show"]))
{
  /* 
   $mydb=new mydb();
   $conobj=$mydb->openCon();
   $results=$mydb->showUser("user",$_SESSION["username"],$conobj);
   
   if($results->num_rows >0)
   {
    
   // echo "<table>";
    while ($myrows=$results->fetch_assoc())
    {
        $fname='First Name';
        $lname='Last Name';
        $uname='User Name';
        $age='Age';
        $g= 'Gender';
        $email='E-mail';
        $nid='NID';
       echo "<table border='1'>";
        echo "
        
        <tr>
            <th> " . $fname ." </th>
            <th> ".$lname."</th>
            <th> ".$uname."</th>
            <th> ".$age."</th>
            <th> ".$g."</th>
            <th>".$email." </th>
            <th> ".$nid."</th>
            
</tr>";

echo "<tr>";
        echo "<td>".$myrows["firstname"]."</td>";
        echo "<td>".$myrows["lastname"]."</td>";
        echo "<td>".$myrows["username"]."</td>";
        echo "<td>".$myrows["age"]."</td>";
        echo "<td>".$myrows["gender"]."</td>";
        echo "<td>".$myrows["email"]."</td>";
        echo "<td>".$myrows["nid"]."</td>";
        echo "</tr>";

    }
    echo "</table>";
}
else{
    echo $conobj->error;
}*/
header("Location:../view/showprofile.php"); 

   }


?>


</body>
</head>
</html>  



<html><center><br><br>
    <h1>
<?php
$cookie_name="Customer";
$cookie_value="Visited";
setcookie($cookie_name, $cookie_value,time() + 86400, "/");
if(isset($_COOKIE[$cookie_name]))
 {
    echo "Welcome again ".$cookie_name;
  }
  else 
  {  
    echo "Welcome ".$cookie_name;    
}

?>
</h1></center>
 </html>






 












