<?php
$numError="";
		if(isset($_POST['submit'])){
			$numbers = explode(',', $_POST['number']);
			$numbers = $_POST['number'];
		}

				if($_POST['number'] != ""){
				//sanitizing the string being enterd
					$_POST['number'] = filter_var($_POST['number'], FILTER_SANITIZE_NUMBER_INT);

					//After sanitization Validation is performed
					$_POST['number'] = filter_var($_POST['number'], FILTER_VALIDATE_INT);
					$numError = "<span class=\"number\">\"".$_POST['number']."\"</span> THESE ARE VALID.</span>"
				}

				//check to see if email was lost in santization/validation
						if($_POST['number'] = "")){

							$numError = "<span class=\"number\">PLEASE ENTER AN INTEGER .</span>";
							
							}else {$numError= "<span class=\"number\">NOTHING WAS ENTERED PLEASE TRY AGAIN .</span>
							"
					}





			




?>


		<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta charset="UTF-8">
		<title>/ASSINGMENT2---P1---Q1</title>
		<h1>ASSINGMENT2---P1---Q1</h1>
		</head>
		
		<body>
		<?php if(!isset($_POST['submit'])):?> 
	
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		
			<div><input type="text" name="number" id="number" placeholder="INTEGER ONLY" class = number></div>
			<div><input type="submit" name="submit" id="submit"></div>
			</form>
			<?php else:?> 
			<div><?php if(empty($numError)):?></div>
			<ul>
				<li>Numbers =<?php @print_r($numbers);?></li>
				<li><?php echo "sum = " . @array_sum($numbers). "\n"; ?></li>
				<li><?php echo "average = " . @array_sum($numbers)/@count($numbers). "\n"; ?></li>
				<li> <?php echo "count = " . @count($numbers) . "\n";?></li>
				<li><?php echo " maximum = " .@max($numbers). "\n";?></li>
				<li><?php echo " minimum = " . @min($numbers). "\n";?></li>
			</ul>
		<?php else:?>

		<span style="color: red;"><?php echo $numError; ?></span>
		<?php endif; ?>
	




	</body>
	</html>
