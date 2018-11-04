<?php
session_start();// initializing the session to start when the paage is entered
 
  if (!isset($_POST["submit"])) { // if the post array is not set then do this 
     $message = "Welcome To the guessing game 
     PLEASE ENTER AN INTEGER BETWEEN 1-100";
   	 $_SESSION['count']= 5; // count to reach only 5 
     $_SESSION['num'] = rand(0,100);// random number generate used to make 
     $_SESSION['showlink']=false;
}
 if (isset($_POST["submit"])) { // when the post happens do everything under the bracket
      $guess=$_POST['guess'];
    	if($guess==$_SESSION['num']){
    		$_SESSION["count"]--;
 				$message = "Well done! You guessed the right number in ".(5-$_SESSION["count"])." attempt(s)!";
 				$_SESSION['showlink']=true;
    	 }else if ($_SESSION["count"]==0) {
     			$message2 = "you have reached the maximum count";// count has reached 5 a
     			$_SESSION['showlink']=true;
     	}else{


//do if for high low


    		$diff=abs($guess-$_SESSION['num']);
			 if ($diff<=5) { // range of 5
    			$message .= $guess." GETTING HOTTER.";
   				 $_SESSION["count"]--; //$ increment  count by 1.

			} else if($diff<=10) { // range of 10
   			 $message .= $guess." GETTING WARMER.";
    		$_SESSION["count"]--; //increment by 1.

			} else if($diff<=15)   { //range of 15
   			 		$message .= $guess." GETTING COOL.";
   				 $_SESSION["count"]--; // $count to increment by 1.

    		} else { // user input and the entered number is equal
    				$_SESSION["count"]--;
    			$message .= $guess." Very Cold.";
   			
   			}
   		}
   	}

 
		    

    //unset($_SESSION["count"]);
        //Include the $count variable to the $message to show the user how many tries to took him.

?>

<!DOCTYPE html>
<!-- saved from url=(0069)file:///C:/Users/Batzstylz/Desktop/Assignment%201%20Webpage/Home.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Assignment 2 p1 </title>
  <meta name="viewport" content="width=device-width, initial scale =1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>

  <div id="container">
    <header>
    
      <h1 class="welcome"> ASSINGMENT 2 PART~1 </h1>
      <h2>Batstone Christyanton 0543482 </h2>
      <h3> CS STUDENT </h3>

      
      
     </header>
    <nav>
     <ul>
      <li><a href ='index4.php'>Question1</a></li>
      <li><a href ='question2.php'>QUESTION 2</a></li>
      <li><a href = 'question3'>QUESTION 3</a></li>

   
      
    </ul>
  </nav>
  
  <div id="content">
   <div class="firstpageintro">	
    <p><?php echo $message;?></p>
   <form action="" method="POST">
        <p><strong>Type your guess here:</strong>
            <input type="text" name="guess"></p>
            </p>
    <p><input type="submit" value="Submit your guess" name="submit"/></p>

     
  
</div>
<?php if($_SESSION['showlink']):?><a>Play Again</a> <?php endif?>
</div><!--Content-->


<footer id="footer">© 2018 Batstone C</footer>

</div><!--Container-->



</body></html>