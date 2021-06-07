<?php
  $connect = mysqli_connect('localhost', 'root', 'mypassword', 'cleanblog');
  if(!$connect){
    die("Could not connect to database: " . mysqli_error($connect));
  }
?>