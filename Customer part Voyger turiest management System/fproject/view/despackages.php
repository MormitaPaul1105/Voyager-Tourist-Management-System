<html>
    <title> Voyager Destination Packages</title>
        <body>

        <link rel="stylesheet" type="text/css" href="../css/package.css">
<form  action=""   method="post" enctype="multipart/form-data">

<div class="sticky">
 <div class="topnav">
     <h4><a href ="../view/hotelpackages.php"> Hotel Packages</a></h4>
     <h4><a href ="../view/transpackages.php"> Transport Packages</a></h4>
     
     <h4><a href ="../view/guidepackage.php"> Guide Packages</a></h4>
     <h4><a href ="../view/showboohdes.php"> View Your Booked Destination </a></h4>
     <h4><a href ="../view/customerhome.php"> Home</a></h4>
    
     </div>
 </div>
<p id="title"> Destination Booking Page</p>
    
   
    Search:
    <input type = "text"  id="searchdatades" onkeyup="searchdes()"> <p id = "showdesdata"></p> 
    </td></tr>

   

    <script src="../js/searchdes.js"></script>

    <div class="border">
       	
           <center><h3>  Book Destination</h3></center>

   </div>

    
   
   <?php
        include ("../control/process_despackages.php");
        ?>
         <div class="border"> </div>
<div class="fixed">my copyright</p></div>
    
</body>
</html>