<?php
include_once('db_connection.php'); // Assuming you have a file for database connection

if(isset($_GET['category'])) {
    $category = $_GET['category'];

    $sql = "SELECT * FROM posts_tb INNER JOIN technician_tb ON posts_tb.emp_id = technician_tb.empid WHERE posts_tb.job_title = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$category]);
    $technicians = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return the data as JSON
    echo json_encode($technicians);
    exit;
}
?>
