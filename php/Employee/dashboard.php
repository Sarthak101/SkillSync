<?php
    include ('../UserInfo/userinfo.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../css/dashboardPage.css">
</head>
<body>

<!-- <img src = "../public/Icons/Profile.jpg" alt = "logo"> -->

<div class="flex-container">
        <div class="image-container">
        <img src = "../../public/Icons/Profile.jpg" alt = "logo">
        </div>
        <div class="text-container">
            <h2>Welcome: <?php echo $name;?></h2>
            <hr class= "new4"></hr>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui rem maxime id adipisci ipsum corporis illum eaque soluta nihil doloribus ut sapiente dolor suscipit, voluptatem ipsa alias recusandae perferendis corrupti.</p>
        </div>

        

    </div>
<!-- Line to divide -->
    <hr class= "new5"></hr>
    <div>
        <h2>Active Jobs</h2>
        <!-- Load the Active Jobs Cards -->
                <div class="job-box active">
                <img src="../../public/Icons/Profile.jpg" alt="Job Image">
                <div class="job-details">

                    <h2>Job 1</h2>
                    <p>Description of the job goes here...</p>
                    <div class="location">
                        <p>Location: City, Country</p>

                    </div>
                    <button>Check Progress</button>
                    </div>
</div>

<div class="job-box active">
                <img src="../../public/Icons/Profile.jpg" alt="Job Image">
                <div class="job-details">

                    <h2>Job 2</h2>
                    <p>Description of the job goes here...</p>
                    <div class="location">
                        <p>Location: City, Country</p>

                    </div>
                    <button>Check Progress</button>
                    </div>
</div>


    </div>

</body>
</html>