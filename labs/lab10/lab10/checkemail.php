 <?php
 require_once("includes/library.php");  //include library file
  $db = new Db(); //construct database object
  

  //save email from GET array
  $email=$_GET['email'];
   
 
  //check database for passed email address
  
  //build query
  $query = "select email from hogwartsCompleteResults where email=?";
  $type='s'; //create type string
  $params= array(&$email); //build parameter array
  
  //run query
  $result= & $db->select_param($query,$type, $params);
  
  
  //ouput the number of rows so it is sent to the calling AJAX
  echo $result->num_rows;
?>
  
