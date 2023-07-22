<?php
class mydb{
 
function OpenCon()
 {
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "fproject";
 $conn =new mysqli($dbservername, $dbusername, $dbpassword,$dbname);
 if($conn->connect_error){
    echo "con obj failed";
}
 return $conn;
 }

 function insertUser($tablename,$fname,$lname,$uname,$age,$guser,$email,$password,$file,$conn)
 {
     $sqlstr = "INSERT INTO $tablename (firstname,lastname,username, age, gender, email, password, nid)
    VALUES ('$fname','$lname','$uname', '$age', '$guser', '$email', '$password', '$file')";

     

 if ($conn->query($sqlstr))
  
     {
        echo"data inserted";
     }
     else{
        echo "can't insert".$conn->error;  
       
     }
    
     }
    
function checkLogin($tablename,$uname,$password,$conn)
{
   $sqlstr="SELECT * FROM $tablename WHERE username='$uname' AND password='$password'";
   return $conn->query($sqlstr);
}

function showUser($tablename,$uname,$conn)
{
   $sqlstr="SELECT * FROM $tablename WHERE username='$uname'";
   return $conn->query($sqlstr);
}

function fetchUser($conn,$tablename,$uname)
{
   $sqlstr="SELECT * FROM $tablename WHERE username='$uname'";
   return $conn->query($sqlstr);
}

function updateUser ($tablename,$fname,$lname,$uname,$age,$guser,$email,$password,$file,$conn)
{
   $sqlstr="UPDATE $tablename SET firstname='$fname', lastname='$lname', username='$uname',age='$age',gender='$guser', email='$email',
   password='$password', nid='$file' WHERE username='$uname' ";
   return $conn->query($sqlstr);
}
function deleteUser($tablename,$conn,$uname)
{
   $sqlstr="DELETE  FROM $tablename WHERE username='$uname'";
   return $conn->query($sqlstr);
}

function showhoteldata($tablename,$hotelname,$conn)
{
   $sqlstr="SELECT * FROM $tablename WHERE hname='$hotelname'";
   return $conn->query($sqlstr);
}
function fetchhotel($conn,$tablename)
{
   $sqlstr="SELECT * FROM $tablename ";
   return $conn->query($sqlstr);
}

function bookhotel($tablename,$conn,$hna_hlo_hno,$uname,$age,$guser,$email)
 {
     $sqlstr = "INSERT INTO $tablename (hname_hlocation_hno,username, age, gender, email)
    VALUES ('$hna_hlo_hno','$uname', '$age', '$guser', '$email')";

     

 if ($conn->query($sqlstr))
  
     {
        echo"Hotel Booked Successfully";
     }
     else{
        echo "Hotel isn't book yet".$conn->error;  
       
     }
    
 }


 function showtransdata($tablename,$conn,$transname)
{
   $sqlstr="SELECT * FROM $tablename WHERE tname='$transname'";
   return $conn->query($sqlstr);
}

function fetchtrans($conn,$tablename)
{
   $sqlstr="SELECT * FROM $tablename ";
   return $conn->query($sqlstr);
}

function booktrans($tablename,$tb,$uname,$age,$guser,$email,$conn)
 {
     $sqlstr = "INSERT INTO $tablename (tname_tno_ttype_contype,username, age, gender, email)
    VALUES ('$tb','$uname', '$age', '$guser', '$email')";

     

 if ($conn->query($sqlstr))
  
     {
        echo"Transport Booked Successfully";
     }
     else{
        echo "Transport isn't book yet".$conn->error;  
       
     }
    
 }


 function bookdes($tablename,$conn,$des,$uname,$age,$guser,$email)
 {
     $sqlstr = "INSERT INTO $tablename (dname_dlocation_dtype,username, age, gender, email)
    VALUES ('$des','$uname', '$age', '$guser', '$email')";

     

 if ($conn->query($sqlstr))
  
     {
        echo"Destination Booked Successfully";
     }
     else{
        echo "Destination isn't book yet".$conn->error;  
       
     }
    
 }

 function showdesdata($tablename,$conn,$desname)
 {
    $sqlstr="SELECT * FROM $tablename WHERE des_name='$desname'";
    return $conn->query($sqlstr);
 }

 function showuserdata($tablename,$conn,$username)
 {
    $sqlstr="SELECT * FROM $tablename WHERE username='$username'";
    return $conn->query($sqlstr);
 }
 function showbookdesin($tablename,$conn,$uname)
 {
    $sqlstr="SELECT * FROM $tablename WHERE username='$uname'";
    return $conn->query($sqlstr);
 }
 function showbooktin($tablename,$conn,$uname)
 {
    $sqlstr="SELECT * FROM $tablename WHERE username='$uname'";
    return $conn->query($sqlstr);
 }
 function showbookhin($tablename,$conn,$uname)
 {
    $sqlstr="SELECT * FROM $tablename WHERE username='$uname'";
    return $conn->query($sqlstr);
 }
 function fetchguide($conn,$tablename)
{
   $sqlstr="SELECT * FROM $tablename ";
   return $conn->query($sqlstr);
}
function bookguide($tablename,$conn,$hna_hlo_hno,$uname,$age,$guser,$email)
 {
     $sqlstr = "INSERT INTO $tablename (gid_gname_gg,username, age, gender, email)
    VALUES ('$hna_hlo_hno','$uname', '$age', '$guser', '$email')";

     

 if ($conn->query($sqlstr))
  
     {
        echo"Guide Booked Successfully";
     }
     else{
        echo "Guide isn't book yet".$conn->error;  
       
     }
    
 }
 function showbookgin($tablename,$conn,$uname)
 {
    $sqlstr="SELECT * FROM $tablename WHERE username='$uname'";
    return $conn->query($sqlstr);
 }
 function rateguide($tablename,$id,$uname,$com,$rat,$conn)
 {
     $sqlstr = "INSERT INTO $tablename (Id,Name, Comment, Rating)
    VALUES ('$id','$uname', '$com', '$rat')";

     

 if ($conn->query($sqlstr))
  
     {
        echo"Submit Your Rate";
     }
     else{
        echo "can't submit your rate".$conn->error;  
       
     }
    
     }



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>