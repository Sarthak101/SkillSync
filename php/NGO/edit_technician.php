<?php
if (isset($_POST['empId'])) {
    $empId = $_POST['empId'];

    // Database Connection
    include('../dbConnection.php');

    $sql = "SELECT * FROM technician_tb WHERE empid = '$empId'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        ?>
        <form method="POST" action="update_technician.php">
            <input type="hidden" name="empId" value="<?php echo $empId; ?>">
            <div class="mb-3">
                <label for="empName" class="form-label">Name</label>
                <input type="text" class="form-control" id="empName" name="empName" value="<?php echo $row['empName']; ?>">
            </div>
            <div class="mb-3">
                <label for="empCity" class="form-label">City</label>
                <input type="text" class="form-control" id="empCity" name="empCity" value="<?php echo $row['empCity']; ?>">
            </div>
            <div class="mb-3">
                <label for="empMobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" id="empMobile" name="empMobile" value="<?php echo $row['empMobile']; ?>">
            </div>
            <div class="mb-3">
                <label for="empEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="empEmail" name="empEmail" value="<?php echo $row['empEmail']; ?>">
            </div>
            <div class="mb-3">
                <label for="empZip" class="form-label">Zip Code</label>
                <input type="text" class="form-control" id="empZip" name="empZip" value="<?php echo $row['empZip']; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="updateTechnician">Update Technician</button>
        </form>
        <?php
    } else {
        echo "Technician not found.";
    }
}
?>
