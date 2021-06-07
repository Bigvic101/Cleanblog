<?php
function fetchUser($connect, $id){
  global $userName;
  global $userEmail;
  global $userPassword;
  global $userPhone;
  $userName = "";
  $searchUser = mysqli_query($connect, "SELECT * FROM signup_tbl WHERE id={$id}");
  //You can also concatinate i.e. $searchUser = mysqli_query($connect, "SELECT * FROM signup_tbl WHERE id=" . $id);
  if(!$searchUser){
    die("Could not connect: " . mysqli_error($connect));
  }
  $row = mysqli_fetch_array($searchUser);
  $userName = $row['Fullname'];
  $userEmail = $row['Email'];
  $userPassword = $row['Password'];
  $userPhone = $row['phone'];
}
?>