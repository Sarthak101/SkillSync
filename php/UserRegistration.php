

<body>
  

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/custom.css">

</body>

<?php
  include('dbConnection.php');


  if(isset($_REQUEST['rSignup'])){
    // Checking for Empty Fields
    if(($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "") || $_REQUEST['roles'] == ""){
      $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
    } else {
      $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
      } else {
        // Assigning User Values to Variable
        $role = $_REQUEST['roles'];
        $rName = $_REQUEST['rName'];
        $rEmail = $_REQUEST['rEmail'];
        $rPassword = $_REQUEST['rPassword'];

        if($role == "Employer")
        {
          $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password) VALUES ('$rName','$rEmail', '$rPassword')";
          if($conn->query($sql) == TRUE){
            $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
          } else {
            $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
          }
        }
        elseif($role == "Employee")
        {
          $sql = "INSERT INTO technician_tb(empName, empEmail, empPassword) VALUES ('$rName','$rEmail', '$rPassword')";
          if($conn->query($sql) == TRUE){
            $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
          } else {
            $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
          }
        }
        else
        {
          $sql = "INSERT INTO adminlogin_tb(a_name, a_email, a_password) VALUES ('$rName','$rEmail', '$rPassword')";
          if($conn->query($sql) == TRUE){
            $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
          } else {
            $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
          }
        }
      }
    }
  }
?>
<div class="container pt-5" id="registration">
  <h2 class="text-center">Create an Account</h2>
  <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
      <form action="" class="shadow-lg p-4" method="POST">
        <div class="form-group">
          <i class="fas fa-user" style="color: white;"></i><label for="name" class="pl-2 font-weight-bold text-white">Name</label><input type="text"
            class="form-control" placeholder="Name" name="rName">
        </div>
        <div class="form-group">
          <i class="fas fa-user " style="color: white;"></i><label for="email" class="pl-2 font-weight-bold text-white">Email</label><input type="email"
            class="form-control" placeholder="Email" name="rEmail">
          <!--Add text-white below if want text color white-->
          <small class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <i class="fas fa-key" style="color: white;"></i><label for="pass" class="pl-2 font-weight-bold text-white">Password</label>
          <input type="password" class="form-control" placeholder="Password" name="rPassword">
        </div>
        <div class="roles">
          <br>
        <i style="color: white;"></i><label for="pass" class="pl-2 font-weight-bold text-white">Roles</label><br>
              <input type="radio" name="roles" value="Employer" required>
                <label for="employer" >Customer   </label>
              <input type="radio" name="roles" value="Employee" required>
              <label for="employee">Worker   </label>
              <input type="radio" name="roles" value="Mediator" />
              <label for="mediator">NGO   </label>
          </div>
        <button type="submit" class="btn btn-custom-yellow mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
        <!-- <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button> -->
        <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data
          Policy and Cookie Policy.</em>
        <?php if(isset($regmsg)) {echo $regmsg; } ?>
      </form>
    </div>
  </div>
</div>

  <!-- Boostrap JavaScript -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>