<?php
// Check if the form is submitted
if (isset($_POST['updateTechnician'])) {
    // Get the submitted data
    $empIds = $_POST['empId'];
    $empNames = $_POST['empName'];
    $empCities = $_POST['empCity'];
    $empMobiles = $_POST['empMobile'];
    $empEmails = $_POST['empEmail'];
    $empZips = $_POST['empZip'];

    // Database Connection
    include('../dbConnection.php');

    // Initialize an empty array to store update status messages
    $updateMessages = array();

    // Loop through the submitted data and update records
    for ($i = 0; $i < count($empIds); $i++) {
        $empId = $empIds[$i];
        $empName = $empNames[$i];
        $empCity = $empCities[$i];
        $empMobile = $empMobiles[$i];
        $empEmail = $empEmails[$i];
        $empZip = $empZips[$i];

        $sql = "UPDATE technician_tb SET empName='$empName', empCity='$empCity', empMobile='$empMobile', empEmail='$empEmail', empZip='$empZip' WHERE empid='$empId'";

        if ($conn->query($sql) === TRUE) {
            // Push a success message to the array
            $updateMessages[] = "Technician details updated successfully for ID: $empId";
        } else {
            // Push an error message to the array
            $updateMessages[] = "Error updating record for ID: $empId - " . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();

    // Convert the update messages array to a JSON string
    $messagesJson = json_encode($updateMessages);

    // Echo JavaScript code to display the messages as a pop-up box
    echo "<script>";
    echo 'alert("Employee(s) has been updated Successfully!");';
    echo "window.location.href = 'employees.php';"; // Redirect to employees.php after the alert box is closed
    echo "</script>";
}
?>
