function searchtrans()
{
    var searchtrans = document.getElementById("searchdatatrans").value;
    var myxttp =new XMLHttpRequest();
    myxttp.onreadystatechange = function ()
    {

    if(this.readyState==4 && this.status==200)
    {
        document.getElementById("showtransdata").innerHTML= this.responseText;
    }
    };

   myxttp.open("GET", "http://localhost/fproject/control/ajaxtrans.php?searchtrans="+searchtrans,true);
   myxttp.send();
}