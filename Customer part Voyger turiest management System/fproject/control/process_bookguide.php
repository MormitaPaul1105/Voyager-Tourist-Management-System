<?php

session_start();
error_reporting(0);
include("../model/db.php");

$gid_gname_gg=$_GET["gid_gname_gg"];




$male=$female=" ";
$mydb=new mydb();
$conobj=$mydb->openCon();
$results= $mydb->fetchUser($conobj, "user", $_SESSION["username"]);
if($results->num_rows >0)
{
 
 while ($myrows=$results->fetch_assoc())
 {
     
    
     $uname=$myrows["username"];
     $age= $myrows["age"];
     $guser=$myrows["gender"];
     $email=$myrows["email"];
    
  

 }
 //$fullfile="../uploads".$file;


 if($guser=="Female")
 {
   //$male="checked";
   $female="checked";
 }

 else
 {
    $male="checked";
    //$female="cheaked";
 }

}

    if(isset($_POST["bookguide"]))
{
    $uname=$_POST["username"];
    $age=$_POST["age"];
    $guser=$_POST["gender"];
    $email=$_POST["email"];
$mydb=new mydb();
$conobj=$mydb->openCon();
$results=$mydb->bookguide("bookguide",$conobj,$gid_gname_gg,$uname,$age,$guser,$email);

}
?>