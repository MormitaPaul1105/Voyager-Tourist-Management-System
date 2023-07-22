<?php

session_start();
error_reporting(0);
include("../model/db.php");

$hna_hlo_hno=$_GET["hname_hlocation_hno"];




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

    if(isset($_POST["bookhotel"]))
{
    $uname=$_POST["username"];
    $age=$_POST["age"];
    $guser=$_POST["gender"];
    $email=$_POST["email"];
$mydb=new mydb();
$conobj=$mydb->openCon();
$results=$mydb->bookhotel("hotelbook",$conobj,$hna_hlo_hno,$uname,$age,$guser,$email);

}
?>