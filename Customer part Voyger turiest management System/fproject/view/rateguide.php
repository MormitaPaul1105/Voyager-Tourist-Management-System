<html>
    <title>Rate Turist Guide</title>
        <body>

        <link rel="stylesheet" type="text/css" href="../css/overall.css">
        <div class="sticky">
 <div class="topnav">
 
     <h3><a href ="../view/despackages.php"> Destination Packages</a></h3>  
     <h4><a href ="../view/transpackages.php"> Transport Packages</a></h4>
     <h4><a href ="../view/hotelpackages.php"> Hotel Packages</a></h4>
     <h4><a href ="../view/guidepackage.php"> Guide Packages</a></h4>
 
     <h4><a href ="../view/customerhome.php"> Home</a></h4>
    
     </div>
 </div>
    

        <?php
        include ("../control/process_rateguide.php");
        ?>

<form action="" method="post" enctype="multipart/form-data">
    <center>
    <h1>Rate Turist Guide </h1>

<table>
<tr><td>
    
</td></tr>
<tr><td>Guide ID:</td>
<td><input type="text"name="id"></td></tr>
 <tr><td>Your User Name: </td>
 <td> <input type="text" name="username" ></td></tr>
 <tr><td>Comment: </td>
 <td> <textarea name="com" cols="50" rows="10" ></textarea></td></tr>
 <tr><td>Rating: </td>
 <td> <input type="text" name="rat" ></td></tr>

 <tr> <td>
<input type="submit"name="submit" class="sub sub1" value="Submit Rating">
</td>
</tr>

</table>
</center>
</form> 


</body>
    </html>