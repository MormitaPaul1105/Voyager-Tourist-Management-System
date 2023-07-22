<html>
    <title>Customer Login Page</title>
        <body>

        <link rel="stylesheet" type="text/css" href="../css/overall.css">
        </div>
<div class="registrationBox">
        <?php
        include ("../control/processlogin.php");
        ?>

<form action="" method="post" enctype="multipart/form-data">
    <center>
    <h1> Customer Login Page</h1>

<table>
<tr><td>
    
</td></tr>
<tr><td>Username:</td>
<td><input type="text"name="username" id="un"onkeyup="uval()"></td><p id="uerror"></tr>
 <tr><td>Password: </td>
 <td> <input type="password" name="password" id="adpass" onkeyup="passval()"></td>
 <td><input type="checkbox" id ="showpass">Show/Hide Password</input><p id="passworderror"></p></td>
</tr>

 <tr> <td>
 <br>
<input type="submit"name="login" class="sub sub1" value="Login" ></td>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/logpass.js"></script>

 <td>
<td>
<br>
    <a href ="../view/registerpage.php"> Sign up</a>
    <script src="../js/myscript.js"></script>

</td>
</tr>
</table>
</center>
</form> 

</div>
</body>
    </html>