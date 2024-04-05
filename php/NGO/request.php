<?php
define('TITLE', 'Requests');
define('PAGE', 'request');
include('includes/header.php'); 
include('../dbConnection.php');
// session_start();
//  if(isset($_SESSION['is_adminlogin'])){
//   $aEmail = $_SESSION['aEmail'];
//  } else {
//   echo "<script> location.href='login.php'; </script>";
//  }
?>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <nav class="navbar navbar-dark fixed-top bg-danger p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dash.php">Apply for Work</a>
 </nav>
<div class="col-sm-4 mb-5">
  <!-- Main Content area start Middle -->
  <?php 
 $sql = "SELECT request_id, request_info, request_desc, request_date FROM submitrequest_tb";
 $result = $conn->query($sql);
 if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
   echo '<div class="card mt-5 mx-5">';
   echo '<div class="card-header">';
   echo 'Request ID : '. $row['request_id'];
   echo '</div>';
   echo '<div class="card-body">';
   echo '<h5 class="card-title">Request Info : ' . $row['request_info'] . '</h5>';
   echo '<p class="card-text">' . $row['request_desc'] . '</p>';
   echo '<p class="card-text">Request Date: ' . $row['request_date'] . '</p>';
   echo '<div class="float-right">';
   echo '<form action="" method="POST"> <input type="hidden" name="id" value='. $row["request_id"] .'><input type="submit" class="btn btn-danger mr-3" name="view" value="View"><input type="submit" class="btn btn-secondary" name="close" value="Close"></form>';
   echo '</div>' ;
   echo '</div>' ;
   echo'</div>';
  }
 } else {
  echo '<div class="alert alert-info mt-5 col-sm-6" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully assigned all Requests.</p>
  <hr>
  <h5 class="mb-0">No Pending Requests</h5>
</div>';
 }

// after assigning work we will delete data from submitrequesttable by pressing close button
if(isset($_REQUEST['close'])){
  $sql = "DELETE FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
  if($conn->query($sql) === TRUE){
    // echo "Record Deleted Successfully";
    // below code will refresh the page after deleting the record
    echo '<meta http-equiv="refresh" content= "0;URL=?closed" />';
    } else {
      echo "Unable to Delete Data";
    }
  }
 ?>
</div> <!-- Main Content area End Middle -->

<?php 
  include('assignworkform.php');
  include('includes/footer.php'); 
  $conn->close();
?>