<?php
include_once('../dbconnection.php');

// Retrieve plumber posts from the database
$sql = "SELECT technician_tb.empName, posts_tb.price, posts_tb.description FROM posts_tb INNER JOIN technician_tb ON posts_tb.emp_id = technician_tb.empid WHERE posts_tb.job_title = 'pest_control'";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Error: " . $conn->error);
}

// Fetch data
$plumberPosts = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plumber Posts</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        .category-container {
            margin: -10px;
            overflow: hidden; /* Clearfix for containing floated children */
        }

        .category-card {
            width: calc(25% - 20px);
            margin: 10px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            float: left; /* Float the cards to align them */
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .category-card h3 {
            margin-top: 0;
            color: #333333;
            font-size: 18px;
        }

        .category-card p {
            margin: 5px 0;
            color: #666666;
        }

        .buy-button {
            display: inline-block;
            padding: 8px 12px;
            background-color: #695CFE;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .buy-button:hover {
            background-color: #4F3ABF;
        }

        .back-button {
            display: inline-block;
            padding: 8px;
            color: #695CFE; /* Purple color */
            text-decoration: none;
            transition: color 0.3s ease;
            margin-bottom: 20px;
        }

        .back-button:hover {
            color: #4F3ABF; /* Darker purple on hover */
        }
    </style>
</head>
<body>
<?php include "cust_nav.php";?>

    <!-- Font Awesome icon for the back button -->
    <a href="#" class="back-button" onclick="goBack()"><i class="fas fa-arrow-left"></i></a>
    <h1 style="text-align: center;">Pest Control Services near you..</h1>
    <div class="container">
        <div class="category-container">
            <?php foreach ($plumberPosts as $post): ?>
                <div class="category-card">
                    <h3><?php echo $post['empName']; ?></h3>
                    <p>Price: ₹<?php echo $post['price']; ?></p>
                    <p>Description: <?php echo $post['description']; ?></p>
                    <a href="https://buy.stripe.com/test_fZe4gOddzfCo0py000" class="buy-button" target="_blank">Buy</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
