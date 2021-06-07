<?php
function displayComments($connect){
    //Initiating with global makes the variable global.
    //Declaring the variables as arrays so they can hold more than one value of itself e.g. there cane be many display names as well as messages.
    global $displayId, $displayName, $displayTitle, $displayMessage, $displayDate;
    $displayName = array(); 
    $displayTitle = array();
    $displayMessage = array();
    $displayDate = array();
  
    $getComments = mysqli_query($connect, "SELECT * FROM comment_tbl");
    if(!$getComments){
      die("Could not get elements: " . mysqli_error($connect));
    }
  
    while($rows = mysqli_fetch_array($getComments)){
      $displayId[count($displayId)] = $rows['ID'];
      $displayName[count($displayName)] = $rows['comment_name'];
      $displayTitle[count($displayTitle)] = $rows['comment_title'];
      $displayMessage[count($displayMessage)] = $rows['comment_message'];
      $displayDate[count($displayDate)] = $rows['comment_date'];
    }
  }
  
displayComments($connect);
  
  if(isset($_POST['sendCommentButton'])){
    if(!isset($_GET['edit']) && !isset($_GET['comment_id'])){
      if(!empty($id)){
        if(validateComment()){
          processcomment($connect); 
          header("Location: post.php");
        }
      }else{
        echo "You are required to login to make comments";
      }
    }
  }
?>