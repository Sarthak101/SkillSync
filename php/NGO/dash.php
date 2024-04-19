<?php
define('TITLE', 'Dashboard');
define('PAGE', 'dash');
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

// Queries to fetch other data
$sqlEmpCount = "SELECT COUNT(DISTINCT posts_tb.emp_id) AS emp_count
                FROM posts_tb
                INNER JOIN technician_tb ON posts_tb.emp_id = technician_tb.empid
                WHERE posts_tb.job_status IS NOT NULL
                AND technician_tb.ngo_id = '$adminId'";

$resultEmpCount = $conn->query($sqlEmpCount);
$rowEmpCount = mysqli_fetch_assoc($resultEmpCount);
$empCount = $rowEmpCount['emp_count'];


$sqlAssignWork = "SELECT max(request_id) FROM assignwork_tb";
$resultAssignWork = $conn->query($sqlAssignWork);
$rowAssignWork = mysqli_fetch_row($resultAssignWork);
$assignWorkCount = $rowAssignWork[0];

$sqlTotalTech = "SELECT * FROM technician_tb where ngo_id = '$adminId'";
$resultTotalTech = $conn->query($sqlTotalTech);
$totalTechCount = $resultTotalTech->num_rows;

?>

<!-- Navigation Bar with Welcome Message -->
<nav class="navbar navbar-dark fixed-top bg-danger p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dash.php">Welcome <?php echo $adminName; ?>!</a>
</nav>

<div class="col-sm-9 col-md-10">
  <div class="row mx-5 text-center">
    <div class="col-sm-6 mt-5">
      <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
        <div class="card-header">Requests Received</div>
        <div class="card-body">
          <h4 class="card-title"><?php echo $empCount; ?></h4>
          <a class="btn text-white" href="request.php">View</a>
        </div>
      </div>
    </div>
    <!-- <div class="col-sm-4 mt-5">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Assigned Work</div>
        <div class="card-body">
          <h4 class="card-title"><?php echo $assignWorkCount; ?></h4>
          <a class="btn text-white" href="work.php">View</a>
        </div>
      </div>
    </div> -->
    <div class="col-sm-6 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
        <div class="card-header">No. of Technicians</div>
        <div class="card-body">
          <h4 class="card-title"><?php echo $totalTechCount; ?></h4>
          <a class="btn text-white" href="technician.php">View</a>
        </div>
      </div>
    </div>
  </div>
  <div class="mx-5 mt-5 text-center">
    <!--Table-->
    <p class=" bg-dark text-white p-2">List of Employers</p>
    <?php
    $sqlData = "SELECT 
                    posts_tb.post_id,
                    requesterlogin_tb.r_name AS requester_name,
                    technician_tb.empName AS employee_name,
                    posts_tb.job_title
                FROM 
                    posts_tb
                INNER JOIN 
                    technician_tb ON posts_tb.emp_id = technician_tb.empid
                INNER JOIN 
                    requesterlogin_tb ON posts_tb.job_status = requesterlogin_tb.r_login_id
                WHERE 
                    technician_tb.ngo_id = '$adminId'
                AND 
                    posts_tb.job_status IS NOT NULL";

    $resultData = $conn->query($sqlData);
    if ($resultData->num_rows > 0) {
        echo '<table class="table">
                <thead>
                    <tr>
                        <th scope="col">SNo</th>
                        <th scope="col">Employer</th>
                        <th scope="col">Employee</th>
                        <th scope="col">Job</th>
                    </tr>
                </thead>
                <tbody>';

        $serialNumber = 1; // Initialize serial number
        while($rowData = $resultData->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $serialNumber . '</td>';
            echo '<td>' . $rowData["requester_name"] . '</td>';
            echo '<td>' . $rowData["employee_name"] . '</td>';
            echo '<td>' . $rowData["job_title"] . '</td>';
            echo '</tr>';
            
            $serialNumber++; // Increment serial number
        }

        echo '</tbody>
            </table>';
    } else {
        echo "0 Results";
    }
?>

  </div>
</div>

<?php
include('includes/footer.php'); 
?>
