<!--Do basic php manipulation here -->
<?php 
$names="Harry Potter, ron Weasley, Hermione Granger, lavender brown, Pavarti patil, NEVILLE Longbottom, Seamus FiNNegan, Dean Thomas";

$arrayNames= explode( ',', $names); 


  

            for ($fl=0;$fl<sizeof($arrayNames);$fl++){
              $arrayNames[$fl] = ucwords(strtolower($arrayNames[$fl]));
           }
            
            var_dump($arrayNames);

              $string1 = "I swear to tell the whole truth";  
              $string2 = substr_replace($string1, "solemnly ", 2, 0);
              $string3 = substr_replace($string2,"no good", -11);
              $string4 = substr_replace($string3,"", stripos($string3,"tell"),8 );
              $string5 = substr_replace($string4,"I am up", strpos ($string4,"to"), 0); 
              // $string4=         
           
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link href="css/reset.css" type="text/css" rel="stylesheet" />
      <link href="css/style.css" type="text/css" rel="stylesheet" />
    <title>Lab 5 - practice</title>
  </head>

  
  <body>
    <div id="container">
      <?php include 'header.php';?>
        <div id="content">
          <h1>Lab 5 - String manipulation</h1>
          <h2>Part 2 - List of names</h2>
            <!--Put the php for outputting the list of names here -->
          <ul>
            <?php
             
             foreach($arrayNames as $n):
              
              if (stripos($n, 'h')===false):
              ?>
                <li class="rav">
                <?php echo $n?>
              </li>
              <?php else:?> 

              <li class="griff">
              <?php echo $n?>
              </li>
              <?php endif;
               endforeach;?>
         </ul>
          <h2>Part 3 - Results of working with <code>substr_replace</code></h2>
          <!--output the results of each of your str_replace steps here -->          
         <ul>
          <li>
          <?php  echo $string2; ?>
          </li>
          <li>
           <?php  echo $string3; ?>
         </li>
          <li>
           <?php  echo $string4; ?>
         </li>

          <li>
           <?php  echo $string5; ?>
         </li>

         
        </ul>

        </div><!--Content-->
         <?php include 'footer.php';?>         
    </div><!--Container-->
    
  </body>

</html>

