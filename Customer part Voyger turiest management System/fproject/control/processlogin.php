<?php
session_start();
include("../model/db.php");
$haserror=0;

if(!empty($_SESSION["username"]))
{

    header("Location:../view/customerhome.php");  
}





if(isset($_REQUEST["login"])){
 //$username=$_POST["uname"];
//$password=$_POST["password"];



//if(!empty($_SESSION["username"]))
//{

    //header("Location:../view/customerhome.php");  
//}
    
    if(empty($_POST["uaername"])&&empty($_POST["password"]) ){
         
        echo "User Name and password cannot be empty ";
        echo '<br>';
        
    }
    else
    {
      $mydb=new mydb();
      $conobj=$mydb->openCon();
      $results=$mydb->checkLogin("user",$_POST["username"],$_POST["password"],$conobj);
      if($results->num_rows >0)
      {
        
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];
            echo "Login Successful";
            header("Location:../view/customerhome.php");  
      }
      else
      {
        echo "not a valid user";
      }
       }
       
    }
    
    
    ?>