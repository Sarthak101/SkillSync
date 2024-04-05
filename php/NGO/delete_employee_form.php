<!-- delete_employee_form.php -->
<?php
// Include your database connection file
include_once "../dbConnection.php";

// Fetch data from the database
$sql = "SELECT * FROM technician_tb";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<form action='delete_employee.php' method='POST'>";
    echo "<table class='table'>";
    echo "<thead><tr><th>ID</th><th>Name</th><th>City</th><th>Mobile</th><th>Email</th><th>Zip</th><th>Delete</th></tr></thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['empid'] . "</td>";
        echo "<td>" . $row['empName'] . "</td>";
        echo "<td>" . $row['empCity'] . "</td>";
        echo "<td>" . $row['empMobile'] . "</td>";
        echo "<td>" . $row['empEmail'] . "</td>";
        echo "<td>" . $row['empZip'] . "</td>";
        echo "<td><input type='checkbox' name='empid[]' value='" . $row['empid'] . "'></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "<input type='submit' value='Delete'>";
    echo "</form>";
} else {
    echo "<p>No employees found</p>";
}
?>
