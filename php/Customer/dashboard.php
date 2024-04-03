<?php

include('../dbConnection.php');
 session_start();
 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
 } else {
  echo "<script> location.href='newLogin.php'; </script>";
 }

 $sql = "SELECT * FROM requesterlogin_tb WHERE r_email='$rEmail'";
 $result = $conn->query($sql);
 if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 $rName = $row["r_name"]; }

 if(isset($_REQUEST['nameupdate'])){
  if(($_REQUEST['rName'] == "")){
   // msg displayed if required field missing
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
   $rName = $_REQUEST["rName"];
   $sql = "UPDATE requesterlogin_tb SET r_name = '$rName' WHERE r_email = '$rEmail'";
   if($conn->query($sql) == TRUE){
   // below msg display on form submit success
   $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
   } else {
   // below msg display on form submit failed
   $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
   }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../css/Customer/dashboardPage.css">
    <!-- bootstrap css link -->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../../css/all.min.css">

    <link rel="stylesheet" href="../../css/custom.css">

    <style>
        .transparent-body {
            background: transparent;
        }

        /* Unique style for the form */
        .unique-form {
            background-color: rgba(255, 255, 255, 0.5); /* Setting a semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Adding a slight shadow for better visibility */
        }

        /* Unique style for the form button */
        .unique-form .btn {
            background-color: rgba(255, 0, 0, 0.8); /* Making the button's background transparent red */
            color: white;
        }

        /* Unique hover effect for the form button */
        .unique-form .btn:hover {
            background-color: rgba(255, 0, 0, 1); /* Increasing opacity on hover */
        }
        
    </style>
</head>

<body class="transparent-body">
       
<div class="col-sm-6 mt-5">
    <form class="mx-5 unique-form" method="POST">
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" value=" <?php echo $rEmail ?>" readonly>
        </div>
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" name="rName" value=" <?php echo $rName ?>">
        </div>
        <button type="submit" class="btn btn-danger btn-block" style="background-color: #FFCF77; border-color: #FFCF77;" name="nameupdate">Update</button>
        <?php if(isset($passmsg)) {echo $passmsg; } ?>
    </form>
</div>
</body>
</html>

