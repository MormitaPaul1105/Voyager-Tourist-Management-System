function uval()
{
    var username = document.getElementById("un").value;
    var myxttp =new XMLHttpRequest();
    myxttp.onreadystatechange = function ()
    {

    if(this.readyState==4 && this.status==200)
    {
        document.getElementById("uerror").innerHTML= this.responseText;
    }
    };
   
   //myxttp.open("GET", "http://localhost/fproject/control/ajaxworkhotel.php?searchdes="+searchdes,true);
   //myxttp.send();

   
   myxttp.open("POST", "http://localhost/fproject/control/ajaxuserv.php",true);
   myxttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
   myxttp.send("un="+username);


}
