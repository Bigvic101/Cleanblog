<?php
 function validateForm(){
     $nameErr = $emailErr = $passwordErr = $compasswordErr = "";
    if (!preg_match("/^[a-zA-Z ]*$/", $_POST['fullname'])) {
      $nameErr = "Only letters and white space allowed";
      echo $nameErr;
    }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $emailErr = "Invalid email format";
      echo $emailErr;
    }else if(strlen($_POST['password'] < 6)){
      $passwordErr = "Password should be minimum of six characters!";
      echo $passwordErr;
    }else if($_POST['password'] !=  $_POST['compassword'] ){
      $compasswordErr = "Passwords don't match Re-check!";
      echo $compasswordErr;
    }else{
      return true;
    }
  }
?>