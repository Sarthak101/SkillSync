<?php
// Include your database connection file
include "../dbConnection.php";

session_start();

// Check if admin is logged in
if(isset($_SESSION['is_login']) && isset($_SESSION['rEmail'])){
  // Get the admin's email from the session
  $aEmail = $_SESSION['rEmail'];

  // Query to fetch the admin's name
  $sqlAdmin = "SELECT * FROM adminlogin_tb WHERE a_email = '$aEmail'";
  $resultAdmin = $conn->query($sqlAdmin);

  if($resultAdmin->num_rows == 1){
    // Fetch the admin's name
    $rowAdmin = $resultAdmin->fetch_assoc();
    $adminName = $rowAdmin['a_name'];
    $adminId = $rowAdmin['a_login_id'];
  } else {
    // Admin name not found
    $adminName = "Admin";
  }
} else {
  // Redirect if not logged in
  echo "<script> location.href='login.php'; </script>";
}

// Fetch data from the database
$sql = "SELECT * FROM technician_tb where ngo_id = '$adminId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table class='table'>";
    echo "<thead><tr><th>ID</th><th>Name</th><th>City</th><th>Mobile</th><th>Email</th><th>Zip</th></tr></thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['empid'] . "</td>";
        echo "<td>" . $row['empName'] . "</td>";
        echo "<td>" . $row['empCity'] . "</td>";
        echo "<td>" . $row['empMobile'] . "</td>";
        echo "<td>" . $row['empEmail'] . "</td>";
        echo "<td>" . $row['empZip'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No employees found</p>";
}
?>
