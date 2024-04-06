<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newEmpName = $_POST['newEmpName'];
    // Add other fields as needed

    // Database Connection
    include('../dbConnection.php');

    $sql = "INSERT INTO technician_tb (empName, ...) VALUES ('$newEmpName', ...)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Employee added successfully";
    } else {
        echo "Error adding employee: " . $conn->error;
    }

    $conn->close();
}
?>
