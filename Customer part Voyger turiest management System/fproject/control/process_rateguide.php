<?php
include '../model/db.php';

//session_start();
//echo $_SESSION["file"];

if(isset($_REQUEST["submit"]))

{
    
    $id=$_POST["id"];
    $uname=$_POST["username"];
    $com=$_POST["com"];
    $rat=$_POST["rat"];
    
    
    $mydb=new mydb();
    $conobj=$mydb->openCon();
    $results= $mydb->rateguide("feedback",$id,$uname,$com,$rat,$conobj);
    
  
    
       
    }
    
    
    ?>