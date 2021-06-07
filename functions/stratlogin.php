<?php
function startLogin($connect){
    $email = $password = "";

    $getUser = mysqli_query($connect, "SELECT * FROM signup_tbl");
    if(!$getUser){
      die("Could not get user: " . mysqli_error($connect));
    }

    while($rows = mysqli_fetch_array($getUser)){
      $getEmail = securityCheck($_POST['email']);
      $getPassword = securityCheck($_POST['password']);
      if($getEmail == $rows['Email'] && $getPassword == $rows['Password']){
        //redirect
        $_SESSION['id'] = $rows['ID'];
          
        header("Location: post.php");
      }else{
        $errMsg = "Could not match Login Details";
        echo $errMsg;
      }
    }
  }

  if(isset($_POST['sendLoginButton'])){
    if(validateLogin()){
      startLogin($connect);
    }
  }
?>