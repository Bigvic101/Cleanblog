<?php
  require('functions/mailing.php');
?>

<?php
  function startSignUp($connect, $tempSignUp, $values){
    if($tempSignUp == 1){
    $fullname = $email = $phone = $password = $compassword = $errMsg = ""; 
    if(notEmpty()){
      if(validateForm()){
          $fullname = securityCheck($_POST['fullname']);
          $email = securityCheck($_POST['email']);
          $phone = $_POST['phone'];
          $password = securityCheck($_POST['password']);

          $values = "{$fullname}', '{$email}', '{$password}', '{$phone}";
          
          $saveToDb = mysqli_query($connect, "INSERT INTO temp_signup_tbl(Fullname, Email, Password, phone) VALUES('{$values}')");
          if(!$saveToDb){
            die("Could not save to db: " . mysqli_error($connect));
          }

          $mailCatchPhrase = 'Petrong Blog registration';
          $mailToEmail = $email;
          $subject = 'Email verification';  
          $body = '<html>
                    <head>
                    </head>
                    <body>
                      <p>Dear Subscriber</p>
                      <p>Click the link below to complete email verification</p>
                      <a href = "http://localhost/PSS%20Project/cleanBlog/verify.php?ver='. $email . '">
                        http://localhost/PSS%20Project/cleanBlog/verify.php?ver='. $email . ' 
                      </a>
                    </body>
                  </html>';

          mailing($mailCatchPhrase, $mailToEmail, $body, $subject);
          
          header("Location: signup-process.php");
        }
      }
    }else if($tempSignUp == 0){
      $saveToDb = mysqli_query($connect, "INSERT INTO signup_tbl(Fullname, Email, Password, phone) VALUES('{$values}')");
      if(!$saveToDb){
        die("Could not save to db: " . mysqli_error($connect));
      }
    }
  }
  
  if(isset($_POST['sendMessageButton'])){
    startSignUp($connect, 1, "");
  }
?>