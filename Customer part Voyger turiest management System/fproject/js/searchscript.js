
function searchhotel()
{
    var searchhotel = document.getElementById("searchdatahotel").value;
    var myxttp =new XMLHttpRequest();
    myxttp.onreadystatechange = function ()
    {

    if(this.readyState==4 && this.status==200)
    {
        document.getElementById("showhoteldata").innerHTML= this.responseText;
    }
    };

   myxttp.open("GET", "http://localhost/fproject/control/ajaxworkhotel.php?searchhotel="+searchhotel,true);
   myxttp.send();

   
   //myxttp.open("POST", "http://localhost/fproject/control/processhotelpackages.php",true);
  // myxttps.setRequestHeader("Content-type,"application/x-www-form-urlencoded");
   //myxttp.send("searchdatahotel="+searchhotel);


}
