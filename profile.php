<div class="conatainer" style = "background-color: aqua;">
    <?php include('includes/head.php');?>
    <?php include('includes/nav.php');?>
    <br/>
    <br/>
    <div class = "row">
        <div class = "col-md-2">
        <?php include('includes/dashboard_sidebar.php');?>
        </div>
        <div class = "col-md-12">
        <p><span><?php echo $userName;?></span>, This is your profile page</p>
        <ul class= "list-group">
          <li class = "list-group-item">
            <h4>Full Name:</h4>
            <p><?php echo $userName; ?></p>
          </li>
          <li class = "list-group-item">
            <h4>Email:</h4>
            <p><?php echo $userEmail; ?></p>
          </li>
          <li class = "list-group-item">
            <h4>Password:</h4>
            <p><?php echo $userPassword; ?></p>
          </li>
          <li class = "list-group-item">
            <h4>Phone number:</h4>
            <p><?php echo $userPhone; ?></p>
          </li>
        </div>
    </div>
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
    <?php
    include('includes/closedb.php');
    ?>
</div>