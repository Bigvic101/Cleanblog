<?php
function validateLogin(){
    $errMsg = "";
    if(empty($_POST['email']) || empty($_POST['password'])){
      $errMsg = "Invalid Login Details";
      echo $errMsg;
      return false;
    }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $errMsg = "Check your email";
      echo $errMsg;
      return false;
    }else if(strlen($_POST['password']) < 6){
      $errMsg= "Password should have at least six characters";
      echo $errMsg;
      return false;
    }else{
      return true;
    }
  }
?>