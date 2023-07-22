<html>
    <body>
   
    <link rel="stylesheet" type="text/css" href="../css/overall.css">

            
 <div class="sticky">
 <div class="topnav">
 
     <h4><a href ="../view/despackages.php"> Destination Packages</a></h4>  
     <h4><a href ="../view/transpackages.php"> Transport Packages</a></h4>
     <h4><a href ="../view/hotelpackages.php"> Hotel Packages</a></h4>
     <h4><a href ="../view/guidepackage.php"> Guide Packages</a></h4>
 
     <h4><a href ="../view/customerhome.php"> Home</a></h4>
    
     </div>
 </div>
        <?php
        include ("../control/process_updateprofile.php");
        ?>
<form action="" method="post" enctype="multipart/form-data">

    <h1> Customer Profile Update Form</h1>
<table>
<tr><td>First Name:</td>
   <td> <input type="text"name="firstname" value="<?php echo $fname;?>"></td></tr>
<tr><td>Last Name:</td>
<td><input type="text"name="lastname" value="<?php echo $lname;?>"> </td></tr>
<tr><td>Username:</td>
<td><input type="text"name="username" value="<?php echo $uname;?>"> </td></tr>
<tr><td>Age:</td>
<td><input type="text" name="age" value="<?php echo $age;?>"></td></tr>
<tr><td>Gender:</td>
<td><input type="radio" name="gender" value="Male"<?php echo $male;?>> Male
<input type="radio" name="gender"value="Female"  <?php echo $female;?>> Female
</td></tr>


<tr><td>E-mail:</td>
<td><input type="text"name="email" value="<?php echo $email;?>"></td></tr>
 <tr><td>Password: </td>
 <td> <input type="text" name="password" value="<?php echo $password;?>"></td></tr>
 <tr> 
 <td> NID: </td>
 <td><input type="file" name="File" > </td>
    <td>( Your previous NID was <?php echo $file;?>) for view details of NID click here  <a href="<?php echo "../uploads/". $file?>"> <?php echo $file;?></a>
</tr>
 
 <tr> <td>
 
<input type="submit"name="update" class="sub sub1" value="Update"></td>

<td>
 <input type="submit"name="delete" class="sub sub1" value="Delete"></td></tr>

</table>
</form> 


</body>
    </html>