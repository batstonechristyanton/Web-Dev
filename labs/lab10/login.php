<?php
  require_once("includes/library.php");
  $user="";
  $error=false;
  if(isset($_POST['submit'])){
    
    
    /*#######################
     * Get data from Form
     ########################*/
      $user=$_POST['username'];
      $pass = $_POST['password'];
    /*#######################
     * Database Query
     ########################*/
    //create database connection 
    $db=new Db();
    
    //get user row from database
    $query = "select * from hogwartsAdminUsers where username = ?";
    $param = array(&$user);
    $type="s";
    $result = $db->select_param($query, $type, $param);
     /*#######################
     * Fetch Data
     ########################*/
    if($result->num_rows >0){ 
      
      //fetch row (no loop since I know there is only one)
      $row = $result->fetch_assoc(); 
      
     /*#######################
      * Verify Password
      ########################*/
       if (password_verify($pass, $row['userpass'])) {
          
          /*#######################
           * Start Session
           ########################*/
            session_start();
            $_SESSION['username'] = $user;
          /*#######################
           * Create Cookie
           ########################*/
            
           /*#######################
           * Redirect
           ########################*/ 
              header("Location: results.php");
              exit();
           
                  
       } else {
         die("Form:".$pass." Database:".$row['userpass']);
          $error=true; //invalid password
       }
      
    } else {
      $error=true; //invalid username
    }
          


}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link href="css/reset.css" type="text/css" rel="stylesheet" />
      <link href="css/style.css" type="text/css" rel="stylesheet" />
    <title>Lab 10 - Login</title>
  </head>
  
  <body>
    <div id="container">
      <?php include "header.php"; ?>
        <div id="content">
         <form id="login" method="post" action="" />
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

