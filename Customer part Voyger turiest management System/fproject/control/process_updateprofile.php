<?php
session_start();
error_reporting(0);
include("../model/db.php");
$male=$female=" ";
$mydb=new mydb();
$conobj=$mydb->openCon();
$results= $mydb->fetchUser($conobj, "user", $_SESSION["username"]);
if($results->num_rows >0)
{
 
 while ($myrows=$results->fetch_assoc())
 {
     
     $fname=$myrows["firstname"];
     $lname=$myrows["lastname"];
     $uname=$myrows["username"];
     $age= $myrows["age"];
     $guser=$myrows["gender"];
     $email=$myrows["email"];
     $password=$myrows["password"];
     $file= $myrows["nid"];
  

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

if(isset($_POST["update"]))
{

echo $_FILES["File"]["name"];
if(move_uploaded_file($_FILES["File"] ["tmp_name"],"../uploads/".$_FILES["File"]["name"]))
{
//echo " NID is uploaded";
}
$conobj=$mydb->openCon();
$results=$mydb->updateUser("user",$_POST["firstname"],$_POST["lastname"],$_SESSION["username"],$_POST["age"],$_POST["gender"],$_POST["email"],
$_POST["password"], $_FILES["File"]["name"],$conobj);

if($results===TRUE)
{
    echo "Updated";
}
else
{
    echo "Not updated".$conobj->error;
}
}


if(isset($_POST["delete"]))
{
    $mydb=new mydb();
    $conobj=$mydb->openCon();
    $results=$mydb->deleteUser("user",$conobj, $_SESSION["username"]);

    if($results===TRUE)
{
   header("Location:../control/logout.php");
}
else
{
    echo "Can't delete".$conobj->error;
}
}

else{
    echo $conobj->error;
}

?>