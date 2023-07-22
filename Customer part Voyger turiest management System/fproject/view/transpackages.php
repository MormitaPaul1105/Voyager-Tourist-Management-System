<html>
    <title> Voyager Transport Packages</title>
        <body>
        <link rel="stylesheet" type="text/css" href="../css/tpackages.css">

<form  action=""   method="post" enctype="multipart/form-data">

    
<div class="sticky">
 <div class="topnav">

     <h4><a href ="../view/despackages.php"> Destination Packages</a></h4>  
     
     <h4><a href ="../view/hotelpackages.php"> Hotel Packages</a></h4>
     <h4><a href ="../view/guidepackage.php"> Guide Packages</a></h4>
     <h4><a href ="../view/showbooktransport.php"> View Your Booked Transport </a></h4>
     <h4><a href ="../view/customerhome.php"> Home</a></h4>
    
     </div>
 </div>
 <p id="title">Transport Packages</p>

 <center>
    Search:
    <input type = "text"  id="searchdatatrans" onkeyup="searchtrans()"> <p id = "showtransdata"></p> </center>
    
   

    <script src="../js/transsearch.js"></script>

    <br><br>
    <div class="border"> 
       
       		
    <center><h4>Book Transport  </h4></center>
   
   <center><h5>Transport Type:-  Bus and Plane </h5></center>
   </div>
   
   <?php
        include ("../control/process_transpackages.php");
        ?>



<div class="fixed">my copyright</p></div>
</body>
</html>