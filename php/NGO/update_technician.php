<?php
if (isset($_POST['updateTechnician'])) {
    $empId = $_POST['empId'];
    $empName = $_POST['empName'];
    $empCity = $_POST['empCity'];
    $empMobile = $_POST['empMobile'];
    $empEmail = $_POST['empEmail'];
    $empZip = $_POST['empZip'];

    // Database Connection
    include('../dbConnection.php');

    $sql = "UPDATE technician_tb SET empName='$empName', empCity='$empCity', empMobile='$empMobile', empEmail='$empEmail', empZip='$empZip' WHERE empid='$empId'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Technician details updated successfully');</script>";
        echo "<script>window.location.href = 'employees_settings.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
