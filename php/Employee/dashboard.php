<?php
    include ('userinfo.php'); 
    $postQuery = "SELECT * from posts_tb where emp_id = '$e_id'";
    $result = $conn->query($postQuery);
    $postings = $result->fetch_all(MYSQLI_ASSOC);

    if(is_null($ngoId))
    {
        $ngoName = 'No NGO Affiliation';
    }
    else
    {
        $ngoInfoQuery = "SELECT * from adminlogin_tb where a_login_id = '$ngoId'";
        $ngoresult = $conn->query($ngoInfoQuery);
        $ngoRow = $ngoresult->fetch_all(MYSQLI_ASSOC)[0];
        $ngoName = $ngoRow['a_name'];
    }

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
        margin: 20px auto;
        padding: 20px;
        margin-right: 10px;
        background-color: #FFFFFF;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #333;
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
        padding: 5px;
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
        padding: 15px 15px;
        margin-bottom: 5px;
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
            <p>Email: <?php echo $email; ?></p>
            <p>NGO: <?php echo $ngoName; ?></p>
        </div>
    </div>

    <!-- Line to divide -->
    <hr class= "new5"></hr>
    <h2>Job Listings</h2>
    <?php foreach ($postings as $posts): ?>
        <div class="container">
            <div class="post-list">
                <div class="post-item">
                    <div class="post-info">
                        <p class="post-id">Post ID: <?php echo $posts['post_id']; ?></p>
                        <p class="job-title">Job Title: <?php echo $posts['job_title']; ?></p>
                        <p class="price">Price: <?php echo $posts['price']; ?></p>
                    </div>
                    <button class="delete-btn" data-post-id="<?php echo $post['delete_post_id']; ?>">Delete(Under Construction)</button>
                </div>
                <!-- Add more post items here if needed -->
            </div>
        </div>
    <?php endforeach ?>

    <script>
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        const postId = e.target.dataset.postId;
        const formData = new FormData();
        formData.append('delete_post_id', postId);

        fetch('delete_post.php', {
        method: 'POST',
        body: formData,
        })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        } else {
            console.error('Error deleting post:', data.message);
        }
        })
    .catch((error) => {
        console.error('Error deleting post:', error);
        });
    });
    });
</script>

</body>
</html>