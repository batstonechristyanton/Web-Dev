<?php 
  require_once 'includes/library.php';
  $db = new Db();
  session_start();
if(!isset($_SESSION['id'])){
  header("Location: login.php");
  exit();
}

$userid = $_SESSION['id'];

$query = "SELECT * FROM gclWish WHERE fk_userID = ?";
$type = "i";
//array made to store the user information 
$param = array(&$userid);
$results = &$db->select_param($query, $type, $param);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Public List</title>
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
        	   
            <?php while($row = $results->fetch_assoc()): ?>

            <li><a href="wishdetails.php?wishid=<?php echo $row['wishID']; ?>"><?php echo $row['wish']; ?></a>
            <a href="checkoff.php?id=" class="button">Checkoff</a>
            <a href="uncheck.php?id=" class="button">Uncheck</a></li>       
          <?php endwhile; ?>
      	</ol>
      </main>
      
      <?php include "footer.php"; ?>
      
    </div>
  </body>
  </html>