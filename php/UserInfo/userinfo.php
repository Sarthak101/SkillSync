<?php
    include ('../config.php');
    $u_id = $_SESSION['user_id']; //gets the user_id of the user logged in
    
    // Get User info from users table
    $query = "SELECT * from users where userID = '$u_id'";
    $usersTable_result = $conn->query($query);
    $usersRow = $usersTable_result->fetch_assoc();

    $name = $usersRow["FirstName"];

?>