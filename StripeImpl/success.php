<?php

// Include database connection file
include_once 'dbConnection.php';
include_once 'cust_nav.php';

// Check if user is not logged in, redirect to newLogin.php
if(!isset($_SESSION['is_login'])){
    header("Location: ../newLogin.php");
    exit; // Ensure that script stops here to prevent further execution
}

// Proceed with displaying the page if user is logged in
if(isset($_SESSION['is_login'])){
    $username = $_SESSION['rEmail'];

    // Insert into payments table
    $timestamp = date("Y-m-d H:i:s");
    $sql = "INSERT INTO payments (CustomerId, timestamp) VALUES ('$username', '$timestamp')";
    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection (if it's not done automatically in dbconnect.php)
//$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #28a745; /* Green color for tick mark */
        }
        .button-container {
            margin-top: 30px;
        }
        .button-container a {
            text-decoration: none;
        }
        .button-container button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 10px;
            transition: background-color 0.3s ease;
            background-color: #673ab7;
            color: #fff;
        }
        .button-container button:hover {
            background-color: #4f3abf;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Check if username is set and display it with the payment successful message
        if(isset($username)) {
            echo '<h1><i class="fas fa-check-circle" style="color: #28a745;"></i> Payment Successful, ' . $username . '!</h1>';
        } else {
            echo '<h1><i class="fas fa-check-circle" style="color: #28a745;"></i> Payment Successful!</h1>';
        }
        ?>
        <div class="button-container">
            <a href="../php/Customer/cust_explore.php"><button><i class="fas fa-search"></i> Explore More</button></a>
            <a href="check_status.php"><button><i class="fas fa-check"></i> Check Status</button></a>
        </div>
    </div>
</body>
</html>
