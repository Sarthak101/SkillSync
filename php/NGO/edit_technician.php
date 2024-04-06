<?php
// define('TITLE', 'Edit Employee');
// define('PAGE', 'editemployee');
include('includes/header.php');
include('../dbConnection.php');

if(isset($_GET['empid'])) {
    $empid = $_GET['empid'];

    if(isset($_POST['update'])) {
        $empName = $_POST['empName'];
        $empCity = $_POST['empCity'];
        $empMobile = $_POST['empMobile'];
        $empEmail = $_POST['empEmail'];
        $empZip = $_POST['empZip'];

        $sql = "UPDATE technician_tb SET empName='$empName', empCity='$empCity', empMobile='$empMobile', empEmail='$empEmail', empZip='$empZip' WHERE empid='$empid'";

        if($conn->query($sql) === TRUE) {
            echo '<script>alert("Employee Updated Successfully!");</script>';
            echo '<script>window.location.href="technician.php";</script>';
        } else {
            echo "Error updating employee: " . $conn->error;
        }
    }

    $sql = "SELECT * FROM technician_tb WHERE empid='$empid'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $empName = $row['empName'];
        $empCity = $row['empCity'];
        $empMobile = $row['empMobile'];
        $empEmail = $row['empEmail'];
        $empZip = $row['empZip'];
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Edit Employee</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="empName">Name:</label>
                    <input type="text" class="form-control" id="empName" name="empName" value="<?php echo $empName; ?>" required>
                </div>
                <div class="form-group">
                    <label for="empCity">City:</label>
                    <input type="text" class="form-control" id="empCity" name="empCity" value="<?php echo $empCity; ?>" required>
                </div>
                <div class="form-group">
                    <label for="empMobile">Mobile:</label>
                    <input type="text" class="form-control" id="empMobile" name="empMobile" value="<?php echo $empMobile; ?>" required>
                </div>
                <div class="form-group">
                    <label for="empEmail">Email:</label>
                    <input type="email" class="form-control" id="empEmail" name="empEmail" value="<?php echo $empEmail; ?>" required>
                </div>
                <div class="form-group">
                    <label for="empZip">ZIP Code:</label>
                    <input type="text" class="form-control" id="empZip" name="empZip" value="<?php echo $empZip; ?>" required>
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
