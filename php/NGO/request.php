<?php
define('TITLE', 'Submit Request');
define('PAGE', 'submitrequest');
include('includes/header.php');
include('../dbConnection.php');
session_start();

// Check if admin is logged in
if(isset($_SESSION['is_login']) && isset($_SESSION['rEmail'])){
  // Get the admin's email from the session
  $aEmail = $_SESSION['rEmail'];

  // Query to fetch the admin's name
  $sqlAdmin = "SELECT * FROM adminlogin_tb WHERE a_email = '$aEmail'";
  $resultAdmin = $conn->query($sqlAdmin);

  if($resultAdmin->num_rows == 1){
    // Fetch the admin's name
    $rowAdmin = $resultAdmin->fetch_assoc();
    $adminName = $rowAdmin['a_name'];
    $adminId = $rowAdmin['a_login_id'];
  } else {
    // Admin name not found
    $adminName = "Admin";
  }
} else {
  // Redirect if not logged in
  echo "<script> location.href='login.php'; </script>";
}

// Initialize variable to store response message
$responseMessage = "";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emp_id = $_POST['employee_name'];
    $job_title = $_POST['job_title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $address = $_POST['address'];

    // Insert data into posts_tb
    $sql = "INSERT INTO posts_tb (emp_id, job_title, description, price, address) 
            VALUES ('$emp_id', '$job_title', '$description', '$price', '$address')";

    if ($conn->query($sql) === TRUE) {
        // Set success message
        $responseMessage = "New post submitted successfully.";
    } else {
        // Set error message
        $responseMessage = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-dark fixed-top bg-danger p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dash.php">Post Jobs!</a>
</nav>
<div class="col-sm-6 mt-5">
    <form id="submitForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="employee_name">Employee Name:</label>
            <select class="form-control" id="employee_name" name="employee_name">
                <?php
                // Retrieve employee names where ngo_id = 1
                $sql = "SELECT empid, empName FROM technician_tb WHERE ngo_id = '$adminId'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["empid"] . '">' . $row["empName"] . '</option>';
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="job_title">Job Title:</label>
            <input type="text" class="form-control" id="job_title" name="job_title" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    // Display response message as a popup
    var responseMessage = "<?php echo $responseMessage; ?>";
    if(responseMessage !== ""){
        alert(responseMessage);
    }

    // Redirect to dashboard after popup is closed
    // window.location.href = "dash.php";
});
</script>

</body>
</html>
