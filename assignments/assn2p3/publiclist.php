
<?php 
include "includes/library.php";

$db = new DB();
  session_start();
if (!isset($_SESSION['username'])){
  header("Location:login.php");
  exit();
}

$query="select * from gclWish where wish = ?"; 
$type='s';
$params=array(&$wish);
$results = &$db->select_param($query,$type,$params);

// if($results->num_rows>0){

  $row=$results->fetch_assoc();



// fetch_array($results); 






?>







<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Santa Baby-login</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/style.css">    
  </head>
  <body>
    <div id="container">
      
      <?php include "header.php"; ?>
      
      <main>
        <ol>
        	<li>
        	  <a href="wishdetails.html"><?php echo $row['wish']; ?></a>        	  
        	  <a href="checkoff.php?id=" class="button">Checkoff</a>
          </li>
        	<li>
        	  <a href="wishdetails.html">A Yacht</a>
        	  <a href="checkoff.php?id=" class="button">Checkoff</a>
        	</li>
        	<li>
        	  <a href="wishdetails.html" class="checked">The deed to a platinum mine</a>
            <a href="uncheck.php?id=" class="button">Uncheck</a>
        	</li>
        	<li>
        	  <a href="wishdetails.html">A duplex and checks</a>
        	  <a href="checkoff.php?id=" class="button">Checkoff</a>
        	</li>
      	</ol>
      </main>
      
      <?php include "footer.php"; ?>
      
    </div>
  </body>
  </html>