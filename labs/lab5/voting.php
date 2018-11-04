<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link href="css/reset.css" type="text/css" rel="stylesheet" />
      <link href="css/style.css" type="text/css" rel="stylesheet" />
    <title>3420 Lab 3</title>
  </head>
  
  <body>
    <div id="container">
      <
         <?php include('header.php');?>
             
        <div id="content">
        
          <form id="nomination" action="processnominatin.php" method="post" >
            <div>
              <label for="name">Student Name:</label>
              <input type="text" name="name" id="name" size="25" pattern ="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" placeholder="firstname lastname" required/> 
            </div>
            <div>
              <label for="email">Student Email:</label>
              <input type="email" name="email" id="email" placeholder="john@doe.com" required />
            </div>
                
              
            <fieldset id="house">
                <legend>House Association</legend>
                
                <input type="radio" name="house" id="gryf" value="G" />
                <label for="gryf">Gryffindor</label>
                
                <input type="radio" name="house" id="sly" value="S" />
                <label for="sly">Slytherin</label>
               
                <input type="radio" name="house" id="huff" value="H" />
                <label for="huff">Hufflepuff</label>
                
                <input type="radio" name="house" id="rave" value="R" />
                <label for="rave">Ravenclaw</label>
            </fieldset>
            <div>          
              <label for="prof">Professor Nomination:</label>
              <select name="prof" id="prof">
                  <option value="0">Select One</option>
                  <option value="1">Snape</option>
                  <option value="2">Dumbledore</option>
                  <option value="3">Vector</option>
              </select>
            </div>
            <div>
              <label class="textarealabel" for="essay">Provide your nomination narrative here:</label>
              <textarea id="essay" name="essay" rows="10" cols="70"></textarea>
            </div>
            <div>
              <input type="checkbox" name="agree" id="agree" />
              <label for="agree">Yes, I acknowledge having read and accepted the Official Contest Rules. </label>
            </div>
                 
            <div id="buttons">
              <button type="submit" name="submit">Vote</button>
              <button type="reset" name="reset">Reset Form</button>
            </div><!--buttons-->
          </form>
            
        </div><!--Content-->
        
        
        <?php include('footer.php');?>
        
      </div><!--Container-->
    
  </body>
</html>
