
<?php
define("maxsize",10);

?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>Assignment 2 p1 </title>
  <meta name="viewport" content="width=device-width, initial scale =1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>

  <div id="container">
    <header>
      <h1 class="welcome"> ASSINGMENT 2 PART~1 </h1>
      <h2>Batstone Christyanton 0543482 </h2>
      <h3> CS STUDENT </h3>
    </header>
    <nav>
     <ul>
      <li><a href ='index4.php'>Question1</a></li>
      <li><a href ='question2.php'>QUESTION2</a></li>
      <li><a href = 'question3'>QUESTION 3</a></li>
      
    </ul>
  </nav>
  
 <div id="content">

<table id="table">

    <?php 
 
for ($row=1; $row <=maxsize;$row++) {   
    echo "<tr> \n";  
    for ($col=1; $col <=maxsize ; $col++) {   
        $p = $col * $row;  
        echo "<td>$p</td> \n";  
    }  
    echo "</tr>";  
}  
?>

</table>
</div><!--Content-->
<footer id="footer">© 2018 Batstone C</footer>
</div><!--Container-->
</body></html>