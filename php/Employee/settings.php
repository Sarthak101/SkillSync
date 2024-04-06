<?php

    include ('userinfo.php');
    $ngoQuery = "SELECT * from adminlogin_tb";
    $result = $conn->query($ngoQuery);
    $allNgo = $result->fetch_all(MYSQLI_ASSOC);

    if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
    } else {
    echo "<script> location.href='newLogin.php'; </script>";
    }
    if(isset($_REQUEST['submitrequest'])){
    // Checking for Empty Fields
    if(($_REQUEST['ngo'] == "")){
    // msg displayed if required field missing
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
    } else {
    // Assigning User Values to Variable
    $ngoID = $_REQUEST['ngo'];

    $sql = "UPDATE technician_tb set ngo_id = '$ngoID' where empid = '$e_id'";
    if($conn->query($sql) == TRUE){
        // below msg display on form submit success
        // $getIdQuery = "SELECT post_id from posts_tb where "
        $genid = mysqli_insert_id($conn);
        $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Affiliated with NGO succesfully</div>';
        // $_SESSION['myid'] = $genid;
        // echo "<script> location.href='submitrequestsuccess.php'; </script>";
        // include('submitrequestsuccess.php');
    } else {
        // below msg display on form submit failed
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to affiliate with NGO</div>';
    }
    }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../css/Customer/dashboardPage.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
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
    <h1>Settings</h1>
<div class="col-sm-9 col-md-10 mt-5">
  <form class="mx-5" action="" method="POST">
    <div class="form-group">
      <label for="inputJobTitle">Affiliation with NGO: </label>
      <select class="form-control" id="inputJobTitle" name="ngo">
        <option value="" selected>Select an Option</option>
        <?php foreach ($allNgo as $ngos): ?>
            <option value="<?php echo $ngos['a_login_id'] ?>"><?php echo $ngos['a_name'] ?></option>
        <?php endforeach ?>
      </select>
    </div>
    
    <button type="submit" class="btn btn-danger" style="background-color: #FFCF77; border-color: #FFCF77;" name="submitrequest">Submit</button>
  </form>
  <!-- below msg display if required fill missing or form submitted success or failed -->
  <?php if(isset($msg)) {echo $msg; } ?>
</div>
</div>
</div>
</body>
</html>