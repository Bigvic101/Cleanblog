<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#">Devlife</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <?php
        if(!empty($id)){
          echo "
          <li class='nav-item'>
          <a class='nav-link' href='profile.php'>{$userName}</a>
          </li>
          <li class='nav-item'>
          <a class='nav-link' href='dashboard.php'>Dashboard</a>
          </li>
          <li class='nav-item'>
          <a class='nav-link' href='login.php?logout=1'>Log Out</a>
          </li>
          <li class='nav-item'>
          <a class='nav-link' href='post.php'>Blog</a>
          </li>";

        }else{
          echo 
          "<li class='nav-item'>
          <a class='nav-link' href='csv.php'>Import CSV</a>
          </li>
          <li class='nav-item'>
          <a class='nav-link' href='index.php'>Home</a>
          </li>
          <li class='nav-item'>
          <a class='nav-link' href='login.php'>Login</a>
          </li>
          <li class='nav-item'>
          <a class='nav-link' href='signup.php'>SignUp</a>
          </li>";
        }
        ?>  
        </ul>
      </div>
    </div>
  </nav>