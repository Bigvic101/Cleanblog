<?php
$id = "";
if(!empty($_SESSION['id'])){
  //echo $_SESSION['id'];
  $id =  $_SESSION['id'];
  //echo $id;
  fetchUser($connect, $id);
}

if(!empty($_GET['logout'])){
  if($_GET['logout'] == 1){
    $_SESSION['id'] = "";
    header("Location: login.php");
  }
}
?>