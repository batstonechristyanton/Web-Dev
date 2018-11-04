<?php

require_once("includes/library.php");  //include library file
$db = new Db(); //construct database object


//build query to get total votes(need to do seperatly since tfoot must come first)
$query = "select sum(nomcount) as total from hogwartsReportingResults";
$result = & $db->select($query); //run query, accept refrenced result set
$totalrow = $result->fetch_assoc();
$total = $totalrow['total'];


//build query to get all reults ordered by most votes
$query = "select name,nomcount from hogwartsReportingResults order by nomcount DESC";
$result = & $db->select($query); //run query, accept refrenced result set



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link href="css/reset.css" type="text/css" rel="stylesheet" />
      <link href="css/style.css" type="text/css" rel="stylesheet" />
    <title>Lab 7 - Results</title>
  </head>
  
  <body>
    <div id="container">
      <?php include "header.php"; ?>
        <div id="content">
          <div id="tablewrap">
          	<table id="results" cellspacing="0">
              	<thead>
                	<tr>
                    <th>Professor</th>
                    <th>Number of Votes</th>
                	</tr>
                </thead>
                <tfoot>
                  <tr>
                  	<td>Total Votes</td>
                    <td><?php echo $total //output total ?></td>
                  </tr>
                </tfoot>
                <tbody>
                  <?php while($row = $result->fetch_assoc()): ?>
                      <tr>
                      	<td><?php echo $row['name']  //output prof name ?></td>
                        <td><?php echo $row['nomcount']  //output number of votes ?></td>
                      </tr>
                       
            			<?php endwhile;   ?>
                </tbody>
             	</table>
          </div>

        </div><!--Content-->
      <?php include "footer.php"; ?>
        
           
      </div><!--Container-->
    
  </body>
</html>

