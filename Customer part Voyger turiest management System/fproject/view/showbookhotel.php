<html>
    <title> Voyager</title>
        <body>
        <link rel="stylesheet" type="text/css" href="../css/overall.css">
<?php
 include ("../control/process_showbookhotel.php");
 ?>
 
 <form action="" method="post" enctype="multipart/form-data">
 <div class="sticky">
 <div class="topnav">
 
     <h3><a href ="../view/despackages.php"> Destination Packages</a></h3>  
     <h4><a href ="../view/transpackages.php"> Transport Packages</a></h4>
     <h4><a href ="../view/hotelpackages.php"> Hotel Packages</a></h4>
     <h4><a href ="../view/guidepackage.php"> Guide Packages</a></h4>
 
     <h4><a href ="../view/customerhome.php"> Home</a></h4>
    
     </div>
 </div>
        
        
    <h1> View Your Booked Hotel</h1>
    

<table border=2>
<tr>
<th>Hotel Name,Hotel Location & Hotel No</th>

<th>User Name</th>
<th>Age </th>
<th>Gender</th>
<th>Email</th>

</tr>
    <tr>
        <td><?php echo $dlt ?></td>
    
    <td><?php echo $un ?></td>
    <td><?php echo $age ?></td>
    <td><?php echo $g ?></td>
    <td><?php echo $e ?></td>
    
</tr>
</table>

</body>
</html>