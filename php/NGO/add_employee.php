<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newEmpName = $_POST['empName'];
    $newEmpCity = $_POST['empCity'];
    $newEmpMobile = $_POST['empMobile'];
    $newEmpEmail = $_POST['empEmail'];
    $newEmpPassword = $_POST['empPassword'];
    $newEmpZip = $_POST['empZip'];

    // Database Connection
    include('../dbConnection.php');

    session_start();

    // Check if admin is logged in
    if(isset($_SESSION['is_login']) && isset($_SESSION['rEmail'])){
        // Get the admin's email from the session
        $aEmail = $_SESSION['rEmail'];

        // Query to fetch the admin's name and ngo_id
        $sqlAdmin = "SELECT * FROM adminlogin_tb WHERE a_email = '$aEmail'";
        $resultAdmin = $conn->query($sqlAdmin);

        if($resultAdmin->num_rows == 1){
            // Fetch the admin's name and ngo_id
            $rowAdmin = $resultAdmin->fetch_assoc();
            $ngo_id = $rowAdmin['a_login_id'];

            // Insert new employee data into the technician_tb table
            $sql = "INSERT INTO technician_tb (empName, empCity, empMobile, empEmail, empPassword, empZip, ngo_id) 
                    VALUES ('$newEmpName', '$newEmpCity', '$newEmpMobile', '$newEmpEmail', '$newEmpPassword', '$newEmpZip', '$ngo_id')";
            
            if ($conn->query($sql) === TRUE) {
                // Display popup box with "OK" button
                echo '<script>';
        echo 'alert("Employee added Successfully!");';
        echo "window.location.href = 'employees.php';"; 
        echo '</script>';
            } else {
                // Display error message in console
                echo "<script>console.error('Error adding employee: " . $conn->error . "');</script>";
            }
        } else {
            // Display error message in console if admin not found
            echo "<script>console.error('Admin not found!');</script>";
        }
    } else {
        // Redirect if not logged in
        header("Location: login.php");
        exit();
    }

    $conn->close();
}
?>
