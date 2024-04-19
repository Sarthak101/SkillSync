<?php
// Include your database connection file
include_once "../dbConnection.php";

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

// Delete employees if empid is provided via checkboxes
if(isset($_POST['empid'])) {
    $empids = $_POST['empid'];

    // Convert array of empids to comma-separated string
    $empidList = implode(",", $empids);

    $sql = "DELETE FROM technician_tb WHERE empid IN ($empidList)";

    if($conn->query($sql) === TRUE) {
        // JavaScript alert after successful deletion
        echo '<script>';
        echo 'alert("Employee(s) Deleted Successfully!");';
        echo '</script>';
    } else {
        echo "Error deleting employee: " . $conn->error;
    }
}
?>