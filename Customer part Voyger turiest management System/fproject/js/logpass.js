$(document).ready(function(){
    $('#showpass').click(function(){
      var x=$('#adpass');
      var y=x.attr('type');
      if(y=='password'){
        x.attr('type','text');
        $(this).text('Hide Password');
      }
      else{
        x.attr('type','password');
        $(this).text('Show Password');
      }
    });
  })