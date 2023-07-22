<?php
include '../model/db.php';

//session_start();
//echo $_SESSION["file"];

if(isset($_REQUEST["submit"]))
{

$fname="";
$lname="";
$uname="";
$age="";
$guser=" ";
$email="";
$password="";
$file=" ";
$passwordError="";


if(  empty($_POST["fname"]) ) 
{
    echo "Please enter your first name<br>";
}
else if(preg_match("/^[a-zA-Z\s]*$/",$_POST["fname"]))
{
    //$_SESSION["fname"]=$fname;
    echo'<br> ';
    echo "Your first name is :".$fname=$_POST["fname"];
    
}
else{
   
    echo "First Name should not contain numbers and symbol<br>";
    echo'<br> ';
}

  

if(  empty($_POST["lname"]) ) 

{
    echo'<br> ';
    echo "Please enter your last name<br>";
}

else if(preg_match("/^[a-zA-Z\s]*$/",$_POST["lname"]))
{
   
    echo'<br> ';
    echo "Your Last name is :".$lname=$_POST["lname"];
    echo'<br> ';
}
else{
    echo'<br> ';
    
    echo  "Last Name should not contain numbers and symbol <br>";
    echo'<br> ';
    
}


if(strlen($_POST["uname"])>6){
    echo "Your User Name name is :".$uname=$_POST["uname"];
    echo'<br>';
}
else{
  
    echo  "User name more than 6 character <br>";
  
}




if( strlen($_POST["age"])>1) 
{
    echo 'Your Age is ' . $age =$_POST["age"];
    echo '<br>';
    
}
else
{
    
    echo 'Age must be 2 cherecter';
    echo '<br>';

} 


if (empty($_POST["email"]) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$_POST["email"])) 
{
    echo 'Invalid email';
    echo '<br>';
   
} else 
{
    echo '<br>';

    echo 'Your email is ' . $email=$_POST["email"] ;
    echo '<br>';
   
}

if( empty($_POST["password"]) || !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',$_POST["password"]))
{
    echo '<br>';
    echo  "Password must be more than 8 letters long and must have a uppercase and a number<br>";
    
}
    else{
        $password=$_POST["password"];
        echo" Password valid";
    
        
        echo "<br>";
        
    }

if(isset($_REQUEST["guser"])){
    echo "Gender is = ".$guser=$_REQUEST["guser"];
    echo "<br>";
}
if(!isset($_REQUEST["guser"])){
    echo "Gender must be selected<br>";
}



echo "<br>";
echo $_FILES["File"]["name"];
if(move_uploaded_file($_FILES["File"] ["tmp_name"],"../uploads/".$_FILES["File"]["name"]))
{
echo " NID is uploaded";
}
else
{
echo "please upload Nid";
}
echo "<br>";

$mydb=new mydb();
$conobj=$mydb->openCon();
if(empty($fname)||empty($lname)||empty($uname)||empty($email)||empty($password)||empty($guser)||empty($_FILES["File"]["name"]))
    {
        echo "<br>Registration isn't complete yet ";
    }
    else{
        


$mydb->insertUser("user",$fname,$lname,$uname,$age,$guser,$email,$password, $_FILES["File"]["name"],$conobj);

echo"<br>Complete Registration";
   }


/*
$mydata=array(
    'Firstname'=>$fname,
    'Lastname'=>$lname,
    'UserName'=>$uname,
    'Age'=>$age,
    'Email'=>$email,
    'Password'=> $password,
    'File'=>$_FILES["File"]["name"],
    'Radiobox'=>$guser,
);


$existingdata = file_get_contents('../Data/data.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$mydata;
     //Convert updated array to JSON
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
if(file_put_contents("../data/data.json", $jsondata))
{
    
    if(empty($fname)||empty($lname)||empty($uname)||empty($email)||empty($password)||empty($guser)||empty($_FILES["File"]["name"]))
    {
        echo "<br>Registration isn't complete yet ";
    }
    else{
        echo"<br>Complete Regitration";
    }
    
}
$data = file_get_contents("../data/data.json");
$formdata = json_decode($data);
*/


   
}


?>