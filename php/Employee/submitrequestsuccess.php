<?php
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='newLogin.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="../../css/Customer/dashboardPage.css">
    <!-- bootstrap css link -->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../../css/all.min.css">

    <link rel="stylesheet" href="../../css/custom.css">



  </head>
  <style>
    .transparent-body {
            background: transparent;
        }
  </style>
<body>

<?php
$sql = "SELECT * FROM posts_tb WHERE request_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 echo "<body class=\"transparent-body\">


 <div class='ml-5 mt-5'>
 <table class='table'>
  <tbody>
   <tr>
     <th>Request ID</th>
     <td>".$row['request_id']."</td>
   </tr>
   <tr>
     <th>Name</th>
     <td>".$row['requester_name']."</td>
   </tr>
   <tr>
   <th>Email ID</th>
   <td>".$row['requester_email']."</td>
  </tr>
   <tr>
    <th>Request Info</th>
    <td>".$row['request_info']."</td>
   </tr>
   <tr>
    <th>Request Description</th>
    <td>".$row['request_desc']."</td>
   </tr>

   <tr>
    <td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'></form></td>
  </tr>
  </tbody>
 </table> </div>
 </body>
 ";


} else {
  echo "Failed";
}
?>


<?php
$conn->close();
?>