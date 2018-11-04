

<?php
// creating an array of varibles used to calculate the numbers after in the code 

$printMethod=array('numberEntered' => "", 'sum' => "",'Count' => "", 'avgNumber' => "", 'max' =>"", 'min'=>"",'Positive'=>"");
// initializing num error so the program knows it has been initizazed.
$numError="";
// post submit used to take in the input from the user and then do things
if(isset($_POST['submit'])){
  // storing the numbers in a varible called numbers 
  $numbers = explode(',', $_POST['number']);
// the taken numbers then is placed back into an array and then is checked if they are numbers 
  $integer = implode('',$numbers);
  // is numeric used to check errors 
  if(!is_numeric($integer)){
    $numError="please check the numbers entered";
  }else{
    $printMethod['numberEntered']=$_POST['number']; 
  }
// doing diffrent calculation with array function provided by php 
  $printMethod['sum'] = array_sum($numbers);
  $printMethod['Count'] = count($numbers);
  $printMethod['avgNumber'] = (array_sum($numbers) / count($numbers));
  $printMethod['max'] = max($numbers);
  $printMethod['min'] = min($numbers);

// for loop used to do an even number calculation and used to check if it was positive 
  for($i = 0; $i < sizeof($numbers); $i++){
    if(($numbers[$i] > 0)&&($numbers[$i] % 2 == 0))
      {
         $positive = $numbers[$i] . " is an even number <br>";
         
    }
    
  }
}
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

    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      
  
      <div><input type="text" name="number" id="number" placeholder="INTEGER ONLY" class = number></div>
          
      <div><span style="color: red;"><?php echo $numError; ?></span></div>
  
      
      
      <div><input type="submit" name="submit" id="submit"></div>
      </form>
<ul class="firstpageintro">
    <li>SUM<?php echo ": " .$printMethod['sum']; ?></li>
    <li>COUNT<?php echo ":" .$printMethod['Count'];?></li>
    <li>AVERAGE<?php echo ":".$printMethod['avgNumber']; ?></li>
    <li>MAX<?php echo ":" .$printMethod['max'];?></li>
    <li>MIN<?php echo ":" .$printMethod['min'];?></li>
    <li>POSTIVE AND EVEN NUMBER ENTERED<?php echo ":" .$positive;?></li>

   </ul>

</div>
</div><!--Content-->


<footer id="footer">© 2018 Batstone C</footer>

</div><!--Container-->



</body></html>