<html>
    <title> Voyager Hotel Package</title>
        <body>
       <link rel="stylesheet" type="text/css" href="../css/hpackage.css">
<form  action=""   method="post" enctype="multipart/form-data">

<div class="sticky">
 <div class="topnav">
 
     <h3><a href ="../view/despackages.php"> Destination Packages</a></h3>  
     <h4><a href ="../view/transpackages.php"> Transport Packages</a></h4>
   
     <h4><a href ="../view/guidepackage.php"> Guide Packages</a></h4>
     <h4><a href ="../view/showbookhotel.php"> View Your Booked Hotel</a></h4>
     <h4><a href ="../view/customerhome.php"> Home</a></h4>
    
     </div>
 </div>
<p id="title">Hotel Booking Page</p>
<center>

Search:
    <input type = "text"  id="searchdatahotel" onkeyup="searchhotel()"> <p id = "showhoteldata"></p> </center>

<br><br><br>
       	

        
   

  
   


    <script src="../js/searchscript.js"></script>
    <div class="border">


    <center><h4> Book Room</h4></center>
       <center><h5>Room Type:-  Single Non Ac Rooms</h5></center></div>
    
    <?php
        include ("../control/processhotelpackages.php");
        ?>
         <div class="border"> </div>
        <div class="fixed">my copyright</p></div>
        </form>
</body>
</html>
