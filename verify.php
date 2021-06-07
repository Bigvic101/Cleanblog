<?php include('includes/head.php');?>
<?php require('functions/sign-up.php');?>

<?php
  if(!empty($_GET['ver'])){
    $checkUser = $_GET['ver'];
  }

  $checktbl = mysqli_query($connect, "SELECT * FROM temp_signup_tbl WHERE Email='" . $checkUser . "'");
  if(!$checktbl){
    die("Could not check for user: " . mysqli_error($connect));
  }

  $row = mysqli_fetch_array($checktbl);
  $recEmail = $row['Email'];
  $recFullname = $row['Fullname'];
  $recPassword = $row['Password'];
  $recPhone = $row['phone'];
  $values = "{$recFullname}', '{$recEmail}', '{$recPassword}', '{$recPhone}";
  startSignUp($connect, 0, $values);

  $removeRecord = mysqli_query($connect, "DELETE FROM temp_signup_tbl WHERE Email='" . $checkUser . "'");

?>

<body>
  <?php include('includes/nav.php');?>
  
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h3>Your Email has been verified</h3>
            <span class="subheadi=ng">Proceed to login below</span>
            <br/>
            <br/>
            <br/>
            <a href = "login.php" class = "btn btn-success">Login</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <footer>
    <div class="container fixed-bottom">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Devlife 2020</p>
        </div>
      </div>
    </div>
    </footer>