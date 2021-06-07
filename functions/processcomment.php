<?php
function processcomment($connect){
    $name = $commentTitle = $message = $date = $errMsg ='';
    if (!preg_match("/^[a-zA-Z ]*$/", $_POST['name'])) {
      $errMsg = "Only letters and white space allowed";
      echo $errMsg;
      return false;
    }else{
      $name = securityCheck($_POST['name']);
      $commentTitle = securityCheck($_POST['commentTitle']);
      $message = securityCheck($_POST['message']);
      $date = Date('d-m-y');
  
      $values = "{$name}', '{$commentTitle}', '{$message}', '{$date}";
      $saveComment= mysqli_query($connect, "INSERT INTO comment_tbl(comment_name, comment_title, comment_message, comment_date) VALUES('{$values}')");
      if(!$saveComment){
        die("Could not save: " . mysqli_error($connect));
      }
    }
  }
  //The two major attacks used by hackers are: 
  //Cross-Site Scripting Attacks
  //SQL Injection Attacks
?>