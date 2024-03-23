<?php
    include('../UserInfo/userinfo.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../css/Customer/dashboardPage.css">

</head>
<body>

<!-- <img src = "../public/Icons/Profile.jpg" alt = "logo"> -->

<div class="flex-container">
        <div class="image-container">
        <img src = "../../public/Icons/Profile.jpg" alt = "logo">
        <div class="text-container">
            </div>
            <h2>Welcome: <?php echo $name; ?></h2>
            <hr class= "new4"></hr>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui rem maxime id adipisci ipsum corporis illum eaque soluta nihil doloribus ut sapiente dolor suscipit, voluptatem ipsa alias recusandae perferendis corrupti.</p>
        </div>
    </div>


</body>
</html>