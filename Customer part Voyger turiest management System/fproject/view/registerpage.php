<html>
    <title> Voyager</title>
        <body>
            
        <link rel="stylesheet" type="text/css" href="../css/overall.css">
        <?php
        include ("../control/processregpage.php");
        ?>
<form name="myForm" action=""  onsubmit="return form_check()" method="post" enctype="multipart/form-data">
    <h1> Customer Registration Form</h1>
<table>
<tr><td>First Name:</td>
   <td> <input type="text" id="fname" onkeyup="fname_check()" name="fname" placeholder= "First name" > </td> <p id="errorfname">Please give First Name</p></tr>
<tr><td>Last Name:</td>
<td><input type="text" id="lname" onkeyup="lname_check()" name="lname"placeholder= "Last name" > </td> <p id="errorlname">Please give Last Name</p></tr>
<tr><td>Username:</td>
<td><input type="text"id="un1" onkeyup="uname_check()" name="uname"placeholder= "User name" >  </td> <p id="erroruname">Please give User Name </p></tr>
<tr><td>Age:</td>
<td><input type="text" id="age" onkeyup="age_check()" name="age"> </td> <p id="errorage"> Please select age</p></tr>
<tr><td>Gender:</td>
<td><input type="radio" name="guser"value="Male" id="male" onclick="radiovalue()">Male
<input type="radio" name="guser"value="Female" id="female" onclick="radiovalue()">Female
</td><p id="radiovalue">Please select a Radio Button.</p></tr>


<tr><td>E-mail:</td>
<td><input type="text" id="email" onkeyup="email_check()" name="email"> </td> <p id="erroremail"> Please give Email</p></tr>
 <tr><td>Password: </td>
 <td> <input type="password"  id="p1" onkeyup="pass_check()"  name="password" >  </td> <p id="passw"> Please give Password</p></tr>
 <tr> <td> Nid: </td>

 <td> <input type="file" id="f1" onclick="fileval()" name="File" >  </td> <p id="Fileerror">Please give NID</p></tr>
 <tr> <td>
 <input type="submit"name="submit"class="sub sub1" onclick="form_check()" value="Submit"> <p id="errorform"></p>
</td></tr>

</table>
</form> 
<script src="../js/jsmyscript.js"></script>

</body>
    </html>