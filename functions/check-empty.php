<?php
function notEmpty(){
      $errMsg = "";
      if(empty($_POST['fullname'])){
        $errMsg = "INPUT YOUR FULL NAME";
        return false;
        echo $errMsg;
      }else if(empty($_POST['email'])){
        $errMsg = "INPUT YOUR EMAIL ADDRESS";
        echo $errMsg;
        return false;
      }else if(empty($_POST['phone'])){
        $errMsg = "INPUT YOUR PHONE NUMBER";
        echo $errMsg;
        return false;
      }else if(empty($_POST['password'])){
        $errMsg = "INPUT YOUR PASSWORD";
        return false;
        echo $errMsg;
      }else if(empty($_POST['compassword'])){
        $errMsg = "CONFIRM YOUR PASSWORD";
        return false;
        echo $errMsg;
      }else{
        return true;
      }
    }    
?>