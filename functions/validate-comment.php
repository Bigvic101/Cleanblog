<?php
function validateComment(){
    $errMsg = '';
    if (empty($_POST['name'])){
      $errMsg = "Input User name";
      echo $errMsg;
      return false;
    }else if (empty($_POST['commentTitle'])){
      $errMsg = "Input Title";
      echo $errMsg;
      return false;
    }else if (empty($_POST['message'])){
      $errMsg = "Input Message";
      echo $errMSg;
      return false;
    }else{
      return true;
    }
  }
?>