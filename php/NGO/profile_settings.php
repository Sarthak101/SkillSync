<div id="profile" style="display:none;">
    <h2>Edit Details</h2>
    <?php
    // Database Connection
    include('../dbConnection.php');

    // Fetch Admin Data
    $sql = "SELECT * FROM adminlogin_tb WHERE a_login_id = 1"; // Assuming you have only one admin with ID 1
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $adminName = $row['a_name'];
        $adminEmail = $row['a_email'];
    }
    ?>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" value="<?php echo $adminName; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $adminEmail; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="updateDetails">Update Details</button>
    </form>

    <?php
    // Update Admin Details
    if (isset($_POST['updateDetails'])) {
        $newName = $_POST['fullName'];
        $newEmail = $_POST['email'];

        $updateSql = "UPDATE adminlogin_tb SET a_name='$newName', a_email='$newEmail' WHERE a_login_id = 1";
        if ($conn->query($updateSql) === TRUE) {
            echo '<div class="alert alert-success" role="alert">Details Updated Successfully!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error updating details: ' . $conn->error . '</div>';
        }
    }
    ?>
</div>
