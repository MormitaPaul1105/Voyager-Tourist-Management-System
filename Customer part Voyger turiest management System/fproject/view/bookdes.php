<html>
    <body>
    <?php
        include ("../control/process_bookdes.php");
        ?>
       
       <link rel="stylesheet" type="text/css" href="../css/overall.css">
<form action="" method="post" enctype="multipart/form-data">
    <h1> Book Destination</h1>
<table>
<tr><td>Destination Name ,Destination Location and Destination Type:</td>
   <td> <input type="text"name="dname_dlocation_dtype" value="<?php echo $dbo;?>"></td></tr>
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
<tr><td>
<input type="submit"name="bookdes"  class="sub sub1" value="Book Destination"></td></tr>


</table>
</form> 


</body>
    </html>