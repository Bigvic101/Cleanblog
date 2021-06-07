<div class="conatainer" style = "background-color: aqua;">
    <?php include('includes/head.php');?>
    <?php include('includes/nav.php');?>
    <?php
      $getUsers = mysqli_query($connect, "SELECT * FROM signup_tbl");
      if(!$getUsers){
        die("Could not connect: " . mysqli_error($connect));
      }

      function deleteUser($connect){
        if(!empty($_GET['del']) && !empty($_GET['user_id'])){
          if($_GET['del'] == 1){
            $deleteUser = mysqli_query($connect, "DELETE FROM signup_tbl WHERE ID = {$_GET['user_id']}");
            if(!$deleteUser){
              die("Could not delete from db" . mysqli_error($connect));
            }
          }
          header('location: all-users.php');
        }
      }

      deleteUser($connect);

    ?>
    <br/>
    <br/>
    <div class = "row">
        <div class = "col-md-2">
        <?phpinclude('includes/dashboard_sidebar.php');?>
        </div>
        <div class="col-md-9" style ="width: 1500px; padding-left: 20px;">
            <div class = "table-responsive">
                <table class="table table-striped" style= "list-style: none; text-decoration: none;">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sn = 0;
                        while($rows = mysqli_fetch_array($getUsers)){
                          $sn++;
                          echo "<tr>
                            <td>" . $sn . "</td>
                            <td>" . $rows['Fullname'] . "</td>
                            <td>" . $rows['Email'] . "</td>
                            <td>" . $rows['Password'] . "</td>
                            <td>" . $rows['phone'] . "</td>
                            <td>
                              <a href=''><span class='square' style='height: 50px;
                              width: 50px; background-color: green; border-radius: 3px;'>Edit</span></a>

                              <a href='all-users.php?del=1&user_id={$rows['ID']}'><span class='square' style='height: 50px; width: 50px; background-color: red;  border-radius: 3px;'>Del</span></a>
                            </td>
                          </tr>";
                        }
                      ?>  
                    </tbody>
                </table>
            </div>
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