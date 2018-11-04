// $( document ).ready(function() {  
  
  
//   /*############################################################
    
//     Lab 10 Ajax Stuff should go here 
     
//   ##############################################################*/
//   var voted=false;
//   $("#email").on("mouseleave", function(ev){
//     var $aerror = $("#ajaxerror");
//     var $error = $("#emailerror");
//     var $ajaxmessage = $("#ajaxmessage");
//     $.get( "checkemail.php", { email: $("#email").val() } )
//      .done(function( data ) {
//      if(data>0){
//      $error.text("");
//      $aerror.text("You already voted " +  $("#email").val());
//      voted = true;
//      }
//      else{
//       $error.text("You must enter an email address");
//       $aerror.text("");
//       voted=false;
//      }
//      //alert("AJAX completed");
//      })
//      .fail(function(jqXHR, textStatus, errorThrown) {
//       $ajaxmessage.text(jqXHR.responseText);
//      //alert("AJAX completed");
//      });
  
  });
  

  /*############################################################
    
  Lab 9 Validation 
    
  ##############################################################*/
  
  
 
  //$("button[type=submit]").on("click", function(ev){
  //$("button:first").on("click", function(ev){
  $("button").eq(0).on("click", function(ev){
    var valid = true;
    if($("#email").val().length==0){
      $("#emailerror").addClass("error");
      $("#emailerror").removeClass("noerror");
      valid=false;
    }else{
      $("#emailerror").addClass("noerror");
      $("#emailerror").removeClass("error");
    }
    var $prof= $("#prof");
    //$("#proferror").remove();
    $("#prof~span").remove();
  
    if($prof.val()==0){
      $prof.after("<span class='error' id='proferror'>You must choose a professor</span>");
       valid=false;
    }
    if(!valid || voted)
      ev.preventDefault();
  });
});


