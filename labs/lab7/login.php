<?php 
  
  $error = false;
  $user = '';

if( isset($_POST['submit']) ){ 
require_once("includes/library.php");  //include library file
$db = new Db(); //construct database object


  $username = $_POST['username'];
  $password = $_POST['password'];
 // die();
  
  $query = "SELECT * FROM hogwartsAdminUsers WHERE username = ?";
  $type='s'; //create type string
  $params= array(&$username); //build parameter array

  //run query
  $result= &$db->select_param($query, $type, $params); 

  if($result->num_rows >0){
     //fetch row of result set into associative array
     $row = $result->fetch_assoc();

     if (password_verify($password, $row['userpass'])) {
       //redirect to main page
        session_start();
        $_SESSION['username'] = $user;
        header('Location: results.php');
        exit(); 
    
    } else {  
    
        $error=true; 
    }
    
  } else{
      $error = true;  
  }
   
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link href="css/reset.css" type="text/css" rel="stylesheet" />
      <link href="css/style.css" type="text/css" rel="stylesheet" />
    <title>Lab 7 - Login</title>
  </head>
  
  <body>
    <div id="container">
      <?php include "header.php"; ?>
        <div id="content">

         <form id="login" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
           
            <div>
              <label for="username">Username:</label> 
              <input type="text" id="username" name="username" size="40" value="<?php echo $user?>" />
            </div>
            <div>
              <label for="password">Password:</label> 
              <input type="password" id="password" name="password" size="40" />
            </div>
            <div style="padding-left:225px">
           <?php if ($error){?><span class="error">Your username or password was invalid</span> <?php }?>
            </div>
            <div>
              <label for="remember">Remember me</label>
              <input type="checkbox" name="remember" value="remember" />
            </div>
            <div id="buttons">
              <button type="submit" name="submit">Login</button>
              <button type="reset" name="reset">Reset Form</button>
            </div><!--buttons-->

       
    </form>
        </div><!--Content-->
      <?php include "footer.php"; ?>
        
           
      </div><!--Container-->
    
  </body>
</html>

