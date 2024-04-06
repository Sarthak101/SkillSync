<?php
    include ('../dbConnection.php');
    session_start();
    $e_id = $_SESSION['rId']; //gets the user_id of the user logged in
    
    // Get User info from users table
    $query = "SELECT * from technician_tb where empid = '$e_id'";
    $usersTable_result = $conn->query($query);
    $usersRow = $usersTable_result->fetch_assoc();

    $name = $usersRow["empName"];
    $email = $usersRow["empEmail"];
    $phone = $usersRow["empMobile"];
    $ngoId = $usersRow["ngo_id"];

?>