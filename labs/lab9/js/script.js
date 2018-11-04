"use strict" 

$( document ).ready(function(ev) {  
  
  $("button:first").on("click",function(ev){

  	var valid=true;
	 var $errorEmail = $('#emailerror');
	 var $email= $('#email').val();
	
	 if($email.length == 0){
	 	valid = false;
	 	$errorEmail.addClass('error');
	 	$errorEmail.removeClass('noerror');
	 }else{
	 	$errorEmail.addClass('noerror');
	 	$errorEmail.removeClass('error');
	 }

	 var $errorProf = $('#errorProf');	
	var $prof= $('#prof');
	$errorProf.remove();
	if($prof.val()==0){
		valid = false;
		$prof.after("<span id='errorProf' class = 'error' > proff was not selected </span>");
	}

	 if(!valid){
	 	ev.preventDefault();
	 }
 });
  
});


