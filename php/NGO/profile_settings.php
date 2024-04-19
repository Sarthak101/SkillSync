<!-- profile.php -->
<?php
// Include database connection file
include_once "../dbConnection.php";

// Initialize variables
$adminName = $adminEmail = $adminPassword = "";

// Fetch admin data
$sql = "SELECT * FROM adminlogin_tb WHERE a_login_id = 1"; // Assuming the admin ID is 1
$result = $conn->query($sql);

// Check if data exists
if ($result->num_rows ==1) {
    $row = $result->fetch_assoc();
    $adminName = $row['a_name'];
    $adminEmail = $row['a_email'];
    $adminPassword = $row['a_password'];
}

// Update admin details
if (isset($_POST['updateDetails'])) {
    $newName = $_POST['fullName'];
    $newEmail = $_POST['email'];
    $newPassword = $_POST['password'];

    $updateSql = "UPDATE adminlogin_tb SET a_name='$newName', a_email='$newEmail', a_password='$newPassword' WHERE a_login_id = 1";
    if ($conn->query($updateSql) === TRUE) {
        echo '<script>alert("Details updated successfully!");</script>';
    } else {
        echo '<script>alert("Error updating details: ' . $conn->error . '");</script>';
    }
}
?>

<!-- HTML form -->
<div id="profile">
    <h2>Edit Details</h2>
    <br>
    <br>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" value="<?php echo $adminName; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $adminEmail; ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $adminPassword; ?>">
        </div>
        <br>
    <br>
        <button type="submit" class="btn btn-primary" name="updateDetails">Update Details</button>
    </form>
</div>
