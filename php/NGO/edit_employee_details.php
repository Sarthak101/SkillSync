<?php
// Include your database connection file
include_once "../dbConnection.php";

// Fetch data from the database
$sql = "SELECT * FROM technician_tb";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<form action='update_employee.php' method='POST'>";
    echo "<table class='table'>";
    echo "<thead><tr><th>ID</th><th>Name</th><th>City</th><th>Mobile</th><th>Email</th><th>Zip</th></tr></thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['empid'] . "</td>";
        echo "<td><input type='text' name='empName[]' value='" . $row['empName'] . "'></td>";
        echo "<td><input type='text' name='empCity[]' value='" . $row['empCity'] . "'></td>";
        echo "<td><input type='text' name='empMobile[]' value='" . $row['empMobile'] . "'></td>";
        echo "<td><input type='email' name='empEmail[]' value='" . $row['empEmail'] . "'></td>";
        echo "<td><input type='text' name='empZip[]' value='" . $row['empZip'] . "'></td>";
        echo "<input type='hidden' name='empId[]' value='" . $row['empid'] . "'>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "<input type='submit' name='updateTechnician' value='Done'>";
    echo "</form>";
} else {
    echo "<p>No employees found</p>";
}
?>
