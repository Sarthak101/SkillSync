<?php
$host = "localhost"; // Database host
$username = "root"; // Database username
$password = ""; // Database password
$database = "skillsync"; // Database name

//connecting to the database using mysql injection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connected to $database";
}
?>