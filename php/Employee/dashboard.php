<?php
    include ('userinfo.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../css/dashboardPage.css">
    <!-- <link rel="stylesheet" href="../../css/dashCards.css"> -->

    <style>
    .container{
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        background-color: #FFFFFF;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .post-list {
        display: flex;
        flex-direction: column;
    }

    .post-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #CCCCCC;
        border-radius: 5px;
    }

    .post-info {
        flex-grow: 1;
    }

    .post-id,
    .job-title,
    .price {
        margin: 0;
    }

    .delete-btn {
        padding: 5px 10px;
        background-color: #FF6347; /* Red color for delete button */
        color: #FFFFFF;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .delete-btn:hover {
        background-color: #D32F2F; /* Darker red color on hover */
    }
</style>

</head>
<body>

    <div class="flex-container">
        <div class="image-container">
            <img src = "../../public/Icons/Profile.jpg" alt = "logo">
        </div>
        <div class="text-container">
            <h2>Welcome, <?php echo $name;?></h2>
            <hr class= "new4"></hr>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui rem maxime id adipisci ipsum corporis illum eaque soluta nihil doloribus ut sapiente dolor suscipit, voluptatem ipsa alias recusandae perferendis corrupti.</p>
        </div>
    </div>

    <!-- Line to divide -->
    <hr class= "new5"></hr>
    <div class="container">
        <div class="post-list">
            <div class="post-item">
                <div class="post-info">
                    <p class="post-id">Post ID: 1</p>
                    <p class="job-title">Job Title: Example Job</p>
                    <p class="price">Price: $100</p>
                </div>
                <button class="delete-btn">Delete</button>
            </div>
            <!-- Add more post items here if needed -->
        </div>
    </div>


</body>
</html>