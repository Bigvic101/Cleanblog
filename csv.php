<?php include('includes/head.php');?>
<?php include('includes/connectdb.php')?>
<body>
<?php include('includes/nav.php');?>

<?php
  if(isset($_POST['storeFileToDb'])){
    $csv = array('text/x-comma-seperated-values', 'text/comma-seperated-values', 'application/octet-stream', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');

      //Check if file is a csv file

    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csv)){

      //if file is uploaded successfully

      if(is_uploaded_file($_FILES['file']['tmp_name'])){

        //To open uploaded csv file

        $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

        //To skip the first line

        fgetcsv($csvFile);

        //To get data from csv file by line

        while(($line = fgetcsv($csvFile)) !== FALSE){

          //Gets data row by row 
         
          $name = $line[0];
          $email = $line[1];
          $phone = $line[2];
          $status = $line[3];

          $oldDataCheck = "SELECT id FROM csv_tbl WHERE email = '".$line[1]."'";
          $oldResult = $connect->query($oldDataCheck);

          if($oldResult->num_rows > 0){
            $connect->query("UPDATE csv_tbl SET name = '".$name."', phone = '".$phone."', status = '".$status."' WHERE email = '".$email."'");
          }else{
            $connect->query("INSERT INTO csv_tbl (name, email, phone, status) VALUES ('".$name."', '".$email."', '".$phone."', '".$status."')");
          }

          /*
          $values = "{$name}', '{$email}', '{$phone}', '{$status}";
          $saveCsv = mysqli_query($connect, "INSERT INTO csv_tbl(name, email, phone, status) VALUES('{$values}')");
      
          if(!$saveCsv){
           die("Could not save to db: " . mysqli_error($connect));
          }
          */
        }
        fclose($csvFile);

        echo "Success";

        header("Location: csv.php");
      }else{
        echo "Failed";
      }
    }else{
      echo "Invalid CSV_FILE";
    }
  }
?>
 
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>MY BLOG</h1>
            <span class="subheading">The Developers Life</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <form method="POST" action"" enctype="multipart/form-data">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
             <strong>Upload .CSV file</strong>
             <p><input type="file" name="file"></p>
            </div>
          </div>

          <button type="submit" class="btn btn-primary" name="storeFileToDb" value="IMPORT">Send</button>
        </form>
      </div>   
    </div>
    <hr>
  </div>
    <table class='table table-responsive-sm table-hover table-outline mt-2 mb-0' style='font-size: 12px;'>
    <thead class='thead-light'>
      <tr>
        <th class='text-center'>ID</th>
        <th class='text-center'>Names</th>
        <th class='text-center'>Email</th>
        <th class='text-center'>Phone</th>
        <th class='text-center'>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $result = $connect->query("SELECT * FROM csv_tbl ORDER BY id DESC");
        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            ?>
            <tr>
              <td class='text-center'><?php echo $row['id']; ?></td>
              <td class='text-center'><?php echo $row['name']; ?></td>
              <td class='text-center'><?php echo $row['email']; ?></td>
              <td class='text-center'><?php echo $row['phone']; ?></td>
              <td class='text-center'><?php echo $row['status']; ?></td>
            </tr>
            <?php
          }
        }else{
            ?>
            <tr><td colspan="5">No data found</td></tr>
            <?php
        }
      ?>     
    </tbody>
  </table>

  <hr>

  <?php include('includes/footer.php');?>
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
