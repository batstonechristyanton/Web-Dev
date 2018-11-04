<?php

$printMethod=array('numberEntered' => "", 'sum' => "",'Count' => "", 'avgNumber' => "", 'max' =>"", 'min'=>"",'Positive'=>"");

$numError="";
$modular = 2;

if(isset($_POST['submit'])){
	$numbers = explode(',', $_POST['number']);

	// echo "<prev>";
	// echo implode('', $numbers);
	// echo "<prev>";
	// die();
	$integer = implode('',$numbers);
	if(!is_numeric($integer)){
		$numError="please check the numbers entered";
	}else{
		$printMethod['numberEntered']=$_POST['number']; 
	}

	$printMethod['sum'] = array_sum($numbers);
	$printMethod['Count'] = count($numbers);
	$printMethod['avgNumber'] = (array_sum($numbers) / count($numbers));
	$printMethod['max'] = max($numbers);
	$printMethod['min'] = min($numbers);

	for($i = 0; $i < sizeof($numbers); $i++){
		if(($numbers[$i] > 0)&&($numbers[$i] % 2 == 0))
	    {
				 $positive = $numbers[$i] . " is an even number <br>";
				 
		}
		
	}
}

?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta charset="UTF-8">
		<title>/ASSINGMENT2---P1---Q1</title>
		 <meta name="viewport" content="width=device-width, initial scale =1.0">
  		<link rel="stylesheet" href="css/reset.css">
 		 <link rel="stylesheet" href="css/stylesheet.css">
		<h1>ASSINGMENT2---P1---Q1</h1>
		</head>
		
		<body>
	
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			
	
			<div><input type="text" name="number" id="number" placeholder="INTEGER ONLY" class = number></div>
					
	<div><span style="color: red;"><?php echo $numError; ?></span></div>
	
			
			
			<div><input type="submit" name="submit" id="submit"></div>
			</form>



		<ul class="firstpageintro">	firspageintro>
		<li>SUM<?php echo ": " .$printMethod['sum']; ?></li>
		<li>COUNT<?php echo ":" .$printMethod['Count'];?></li>
		<li>AVERAGE<?php echo ":".$printMethod['avgNumber']; ?></li>
		<li>MAX<?php echo ":" .$printMethod['max'];?></li>
		<li>MIN<?php echo ":" .$printMethod['min'];?></li>
		<li>POSITVE NUMBER <?php echo ":" .$positive;?></li>
		</ul>

		

	
	

	





	</body>
	</html>
