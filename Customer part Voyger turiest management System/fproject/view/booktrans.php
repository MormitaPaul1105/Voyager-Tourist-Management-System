<html>
    <body>
        
    <link rel="stylesheet" type="text/css" href="../css/overall.css">
    <?php
        include ("../control/process_booktrans.php");
        ?>
       
<form action="" method="post" enctype="multipart/form-data">
    <h1> Book Transport</h1>
<table>
<tr><td>Transport Name ,Transport No ,Transport Type and Transport Temperature:</td>
   <td> <input type="text"name="dname_dlocation_dtype" value="<?php echo $tb;?>"></td></tr>
   
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
<input type="submit"name="booktrans" class="sub sub1" value="Book Transport"></td></tr>


</table>
</form> 



</body>
    </html>