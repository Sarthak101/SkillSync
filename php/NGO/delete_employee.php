<?php
include('../dbConnection.php');

if(isset($_GET['empid'])) {
    $empid = $_GET['empid'];

    $sql = "DELETE FROM technician_tb WHERE empid='$empid'";

    if($conn->query($sql) === TRUE) {
        echo '<script>alert("Employee Deleted Successfully!");</script>';
        echo '<script>window.location.href="technician.php";</script>';
    } else {
        echo "Error deleting employee: " . $conn->error;
    }
}
?>
