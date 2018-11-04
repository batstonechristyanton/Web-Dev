
<?php
  require_once("includes/library.php");  //include library file
  
  $name="";
  $email="";
  $username="";
  $password="";
  $password2="";

  $title="";
  $fromdate="";
  $todate="";
  $listPass="";
  $token ="";
  $tokenExpiry ="";
  if(isset($_POST['submit'])){ 

    $db = new Db(); //construct database object
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
  
    $title=$_POST['title'];
    $fromdate=$_POST['fromdate'];
    $todate=$_POST['todate'];
    $listPass=$_POST['lpassword'];
    $token ="";
    $tokenExpiry ="2018/10/23 00:00:00";

    if($password == $password2)
    {
      if(!$passerror){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "insert into gclUsers (username, name, email, userPassword, listTitle, availFrom, availTo, listPassword, token, tokenExpiry) values (?,?,?,?,?,?,?,?,?,?)";
          $type='ssssssssss'; //create type string (string,string, integer)
      
    //create parameter array
        $params= array(&$username,&$name, &$email, &$hash, &$title, &$fromdate, &$todate, &$listPass, &$token, &$tokenExpiry);
    //run query
        $db->query_param($query,$type,$params);

    header("Location:login.php"); 
    exit(); 
      }
    }
  }
  
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
      <form id="account" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" novalidate>
       <fieldset>
         <legend>User Details</legend>
         
         <div>
           <label for="name" class="first">Name:</label>
           <input name="name" id="name" type="text" size="25" maxlength="50" placeholder="Santa Claus" required/>
         </div> 
         
         <div>
           <label for="email">Email:</label>
           <input name="email" id="email" type="text" size="25" maxlength="100" placeholder="santa@northpole.org" required/>
         </div>       
         

         <div>
           <label for="username">User Name:</label>
           <input name="username" id="username" type="text" size="25" maxlength="25" required/>
         </div>       
         
         
         
         <div>
           <label for="password">Password:</label>
           <input name="password" id="password" type="password" size="25"  maxlength="100" required/>
           <span class="note">Passwords must be blah blah blah</span>
         </div> 
         
         
         <div>
           <label for="password2">Re-Enter Password:</label>
           <input name="password2" id="password2" type="password" size="25"  maxlength="100" required/>
         </div>                 
       </fieldset>
       
       
       <fieldset>
         <legend>List Details</legend>
         <div>
           <label for="title" class="first">List Title:</label>
           <input name="title" id="title" type="text" size="25" maxlength="100" required/>
         </div> 
         
         <div>
           <label for="fromdate">Available From:</label>
           <input name="fromdate" id="fromdate" type="text" required />   
         </div>   
         <div>
           <label for="todate">Available To:</label>
           <input name="todate" id="todate" type="text" required />  
         </div> 
         <div>
           <label for="lpassword">List Password:</label>
           <input name="lpassword" id="lpassword" type="password" size="25"  maxlength="100" required/>
           <p class="note">A password provided others so they can see/remove things from your list</p>
         </div>           
       </fieldset>
       
       
       <div id="buttons">
        <button type="submit" name="submit">Save Account Info</button>
        <button type="reset" name="reset">Reset</button>
      </div>
    </form>
  </main>
  
  <?php include "footer.php"; ?>
  
</div>
</body>
</html>