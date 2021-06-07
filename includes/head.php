<?php
include('includes/connectdb.php');
?>

<?php session_start(); ?>

<?php
include('functions/fetch-user.php');
include('includes/sessions.php');
?>

<?php
    //To start a session call the session super global

    //include('functions/check-empty.php');

    //include('functions/validate.php');

    //include('functions/sign-up.php');

    function securityCheck($formField){
      $formField = trim($formField);
      $formField = htmlspecialchars($formField);
      $formField = stripslashes($formField);
      return $formField;
    }    
  
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>