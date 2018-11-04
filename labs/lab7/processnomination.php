<?php
  require_once("includes/library.php");  //include library file
  $db = new Db(); //construct database object
  

  $name=$_POST['name'];
  $email=$_POST['email'];
  $house=$_POST['house'];
  $prof=$_POST['prof'];
  $essay=$_POST['essay'];
  $agree=$_POST['agree'];
  
  
  //build query
  $query = "select email from hogwartsCompleteResults where email=?";
  $type='s'; //create type string
  $params= array(&$email); //build parameter array
  
  //run query
  $result= & $db->select_param($query,$type, $params);
  
  if($result->num_rows >0){ //check for no results
    
    header("Location:error.php"); 
    exit(); 
  }
  
  
  //build query
  $query = "insert into hogwartsCompleteResults (name, email, house, comments, agree, fk_professorid) values (?, ?, ?, ?, ?, ?)";
  $type='sssssi'; //create type string (string,string, integer)
    
  //create parameter array
  $params= array(&$name,&$email, &$house, &$essay, &$agree, &$prof);
  
  // var_dump($params);
  //run query
  $db->query_param($query,$type, $params);
  
  //create query
  $query = "update hogwartsReportingResults set nomcount=nomcount+1 where professorid=?";
  $type='i'; //create type string
    
  //create parameter array
  $params= array(&$prof);
  
  //run query
  $db->query_param($query,$type, $params);
  
  header("Location:thankyou.php"); 
    exit(); 
  
  
  ?>