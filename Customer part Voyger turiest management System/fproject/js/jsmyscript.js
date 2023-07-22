








function fname_check(){
    var patt=/^[a-zA-Z\s]*$/;

    var fnameval=document.getElementById("fname").value;
    if(!isNaN(fnameval)){
        document.getElementById("errorfname").innerHTML="Please enter your first name";
        return false;
    }

     else if (!fnameval.match(patt))
    {
        document.getElementById("errorfname").innerHTML="First Name should not contain numbers and symbol";
        return false;
    }
    else{
        document.getElementById("errorfname").innerHTML="First name  is correct";
        return true;
    }
}

function lname_check(){
    var patt=/^[a-zA-Z\s]*$/;
    var lnameval=document.getElementById("lname").value;
    if(!isNaN(lnameval) ){
        document.getElementById("errorlname").innerHTML="Please enter your last name";
        return false;
    }
    else if (!lnameval.match(patt)) 
    {
        document.getElementById("errorlname").innerHTML="Last Name should not contain numbers and symbol";
        return false;
    }
    else{
        document.getElementById("errorlname").innerHTML="Last Name is correct";
        return true;
    }
}

function uname_check(){
    //age must be a number
    var ageval=document.getElementById("un1").value;
    
    if(!isNaN(ageval) ) {
        document.getElementById("erroruname").innerHTML="Username is not correct";
        return false;

    }
    else if(isNaN(ageval) && ageval.length<6 ) {
     document.getElementById("erroruname").innerHTML="Username must be more then 6 digit";
        return false;e 
    }
    else{
        document.getElementById("erroruname").innerHTML="Username is correct";
        return true;

    }  
}
function age_check(){
    //age must be a number
    var ageval=document.getElementById("age").value;
    if(isNaN(ageval) ) {
        document.getElementById("errorage").innerHTML="Age must be a number";
        return false;

    }
    else if(!isNaN(ageval) && ageval.length<2 ) {
     document.getElementById("errorage").innerHTML="Age must be more then 2 digit";
        return false;
    }
    else{
        document.getElementById("errorage").innerHTML="Age is correct";
        return true;

    }  
    
}
function email_check()
  {
    var email = document.getElementById("email").value;
    var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email_pattern.test(email)) 
    {
        document.getElementById("erroremail").innerHTML="email is correct";
        return true;
    }
    else
    {
        document.getElementById("erroremail").innerHTML="Email format is not correct!";
        return false;
    }
  }

  function pass_check()
  {
    var passval=document.getElementById("p1").value;
    var pattern=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

    if(passval.length>=8 && passval.match(pattern)){
        document.getElementById("passw").innerHTML="Password is  correct";
        return true;

    }
    else{

        document.getElementById("passw").innerHTML="Password must be more than 8 letters long and must have a uppercase and a number";
        return false;
    }
}

function radiovalue()
    {
        if(document.getElementById("male").checked==true)
        {
            document.getElementById("radiovalue").innerHTML="Male has been checked";
            return true;
        }
        else if (document.getElementById("female").checked==true)
        {
            document.getElementById("radiovalue").innerHTML="Female has been checked";
            return true;
        }
   
        else
        {
            document.getElementById("radiovalue").innerHTML="Please select a radio!";
            return false;
        }
    }

    function fileval(){
        //file uploading validation
        var fileval=document.getElementById("f1").value;
        var pattern=/\.(jpg|jpeg|png|doc|docx|pdf)$/;
        if(fileval.match(pattern)){
            document.getElementById("Fileerror").innerHTML="File is  not correct";
            return true;
    
        }
        else{
            document.getElementById("Fileerror").innerHTML="File is  correct";
            return false;
    
        }
    }

    function form_check()
{
    if(fname_check() == true && lname_check() == true && uname_check() && age_check() == true && email_check() == true && pass_check() == true && radiovalue() == true && fileval()==true)
    {
        console.log('success');
        document.getElementById("errorform").innerHTML="All fields are ok";
        return true;
    }
    else
    {
        document.getElementById("errorform").innerHTML="All filed are required";
        return false;
    }
}
