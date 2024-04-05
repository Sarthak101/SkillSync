<?php
define('TITLE', 'Submit Request');
define('PAGE', 'SubmitRequest');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='newLogin.php'; </script>";
}
if(isset($_REQUEST['submitrequest'])){
 // Checking for Empty Fields
 if(($_REQUEST['jobtitle'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['jobprice'] == "") || ($_REQUEST['requesteradd1'] == "") || ($_REQUEST['requestercity'] == "") || ($_REQUEST['requesterstate'] == "") || ($_REQUEST['requesterzip'] == "")){
  // msg displayed if required field missing
  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
 } else {
   // Assigning User Values to Variable
   $emp_id = $_SESSION['rId'];
   $rinfo = $_REQUEST['jobtitle'];
   $rdesc = $_REQUEST['requestdesc'];
   $rprice = $_REQUEST['jobprice'];
   $radd1 = $_REQUEST['requesteradd1'];
   $radd2 = $_REQUEST['requesteradd2'];
   $rcity = $_REQUEST['requestercity'];
   $rstate = $_REQUEST['requesterstate'];
   $rzip = $_REQUEST['requesterzip'];
  //  $remail = $_REQUEST['requesteremail'];
  //  $rmobile = $_REQUEST['requestermobile'];
  //  $rdate = $_REQUEST['requestdate'];
   $sql = "INSERT INTO posts_tb(emp_id, job_title, description, price, address, zip) VALUES ('$emp_id', '$rinfo', '$rdesc', '$rprice', '$radd1', '$rzip')";
   if($conn->query($sql) == TRUE){
    // below msg display on form submit success
    // $getIdQuery = "SELECT post_id from posts_tb where "
    $genid = mysqli_insert_id($conn);
    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Submitted your request succesfully</div>';
    // $_SESSION['myid'] = $genid;
    // echo "<script> location.href='submitrequestsuccess.php'; </script>";
    // include('submitrequestsuccess.php');
   } else {
    // below msg display on form submit failed
    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Submit Your Request </div>';
   }
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div class="col-sm-9 col-md-10 mt-5">
  <form class="mx-5" action="" method="POST">
    <div class="form-group">
      <label for="inputJobTitle">Job Title</label>
      <select class="form-control" id="inputJobTitle" name="jobtitle">
        <option value="" disabled selected>Select an Option</option>
        <option value="Plumber">Plumber</option>
        <option value="House_Work">House Work</option>
        <option value="Vehicle_Repair">Vehicle Repair</option>
        <option value="Carpenter">Carpenter</option>
        <option value="Electrical_Work">Electrical_Work</option>
        <option value="Pest_Control">Pest Control</option>
      </select>
    </div>
    <div class="form-group">
      <label for="inputRequestDescription">Description</label>
      <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description" name="requestdesc">
    </div>
    <div class="form-group">
      <label for="inputPrice">Hourly Price</label>
      <input type="text" class="form-control" id="inputPrice" placeholder="Hourly Price" name="jobprice">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAddress">Address Line 1</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="House No. 123" name="requesteradd1">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2">Address Line 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Railway Colony" name="requesteradd2">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" name="requestercity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <input type="text" class="form-control" id="inputState" name="requesterstate">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" name="requesterzip" onkeypress="isInputNumber(event)">
      </div>
    </div>

    <!-- <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="requesteremail">
      </div>
      <div class="form-group col-md-2">
        <label for="inputMobile">Mobile</label>
        <input type="text" class="form-control" id="inputMobile" name="requestermobile" onkeypress="isInputNumber(event)">
      </div>
      <div class="form-group col-md-2">
        <label for="inputDate">Date</label>
        <input type="date" class="form-control" id="inputDate" name="requestdate">
      </div>
    </div> -->

    <button type="submit" class="btn btn-danger" style="background-color: #FFCF77; border-color: #FFCF77;" name="submitrequest">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </form>
  <!-- below msg display if required fill missing or form submitted success or failed -->
  <?php if(isset($msg)) {echo $msg; } ?>
</div>
</div>
</div>
</body>
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>
<?php
$conn->close();
?>
</html>
