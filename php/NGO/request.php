<?php
define('TITLE', 'Submit Request');
define('PAGE', 'submitrequest');
include('includes/header.php');
include('../dbConnection.php');
session_start();

// Check if admin is logged in
if (isset($_SESSION['is_login']) && isset($_SESSION['rEmail'])) {
    // Get the admin's email from the session
    $aEmail = $_SESSION['rEmail'];

    // Query to fetch the admin's name
    $sqlAdmin = "SELECT * FROM adminlogin_tb WHERE a_email = '$aEmail'";
    $resultAdmin = $conn->query($sqlAdmin);

    if ($resultAdmin->num_rows == 1) {
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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emp_id = $_POST['employee_name'];
    $job_title = $_POST['job_title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $address = $_POST['address'];
    $zip = $_POST['zip']; // Added to retrieve pincode

    // Insert data into posts_tb
    $sql = "INSERT INTO posts_tb (emp_id, job_title, description, price, address, zip) 
            VALUES ('$emp_id', '$job_title', '$description', '$price', '$address', '$zip')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success mt-5" role="alert">
                New request submitted successfully.
              </div>';
    } else {
        echo '<div class="alert alert-danger mt-5" role="alert">
                Error: ' . $sql . '<br>' . $conn->error . '
              </div>';
    }
}
?>
<nav class="navbar navbar-dark fixed-top bg-danger p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dash.php">Post Jobs!</a>
</nav>
<div class="col-sm-6 mt-5">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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
            <!-- Mapbox API integration for address field -->
            <div class="input-group">
                <input type="text" class="form-control" id="address" name="address">
                <button class="btn btn-outline-secondary" type="button" id="searchButton">
                    <box-icon name='search-alt-2'></box-icon>
                </button>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script>
    // Function to open Mapbox map in a new window
    // Function to open Mapbox map in a new window at the center of the screen
// Function to open Mapbox map in a new window at the center of the screen with a bigger size
function openMap() {
    // Your Mapbox token
    const mapboxToken = 'pk.eyJ1IjoiYW5uZWxpenNob25leSIsImEiOiJjbHVhdndnd2EwcWQ0MmlwaWRuM3FuejlrIn0.FuB65lJHGT9krc_Xrb8LtA';
    
    // Calculate the position to center the window
    const screenWidth = window.screen.width;
    const screenHeight = window.screen.height;
    const windowWidth = 800; // Increased width of the map window
    const windowHeight = 600; // Increased height of the map window
    const left = (screenWidth - windowWidth) / 2;
    const top = (screenHeight - windowHeight) / 2;

    // Open Mapbox map in a new window at the center with increased size
    window.open('https://api.mapbox.com/styles/v1/mapbox/streets-v11.html?access_token=' + mapboxToken, '_blank', 'width=' + windowWidth + ',height=' + windowHeight + ',left=' + left + ',top=' + top);
}



    // Event listener for search icon button
    document.getElementById('searchButton').addEventListener('click', openMap);
</script>
