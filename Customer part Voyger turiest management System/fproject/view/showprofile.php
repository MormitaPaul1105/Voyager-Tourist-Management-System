
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
 
    
<form action="" method="post" enctype="multipart/form-data">

<?php
 
 

include ("../control/process_showprofile.php");
?>

<table border=2>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>User Name</th>
<th>Age </th>
<th>Gender</th>
<th>Email</th>
<th>Nid</th>
</tr>
    <tr>
        <td><?php echo $fn ?></td>
    <td><?php echo $ln ?></td>
    <td><?php echo $un ?></td>
    <td><?php echo $age ?></td>
    <td><?php echo $g ?></td>
    <td><?php echo $e ?></td>
    <td><?php echo $nid ?></td>
</tr>
</table>
<input type="submit"name="updateprofile" class="sub sub1" value="Update and Delete Your Profile">
</body>
</html>