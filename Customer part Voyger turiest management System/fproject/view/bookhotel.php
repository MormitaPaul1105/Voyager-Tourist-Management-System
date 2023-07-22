<html>
    <body>
        
    <link rel="stylesheet" type="text/css" href="../css/overall.css">
    <?php
        include ("../control/process_bookhotel.php");
        ?>
       
<form action="" method="post" enctype="multipart/form-data">
    <h1> Book Hotel</h1>
<table>
<tr><td>Hotel Name , Hotel Location and Hotel No:</td>
   <td> <input type="text"name="rn" value="<?php echo $hna_hlo_hno;?>"></td></tr>
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
<input type="submit"name="bookhotel" class="sub sub1" value="Book Hotel"></td></tr>


</table>
</form> 


</body>
    </html>