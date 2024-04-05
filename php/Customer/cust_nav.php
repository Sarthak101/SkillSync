
<?php
session_start();

// Check if user is not logged in, redirect to newLogin.php
if(!isset($_SESSION['is_login'])){
    header("Location: ../newLogin.php");
    exit; // Ensure that script stops here to prevent further execution
}

// Proceed with displaying the page if user is logged in
if(isset($_SESSION['is_login'])){
    $username = $_SESSION['rEmail'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigation Bar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .navbar {
      background: linear-gradient(135deg, #6B5B95, #8F94FB); /* Purple gradient background */
      overflow: hidden;
    }
    .navbar a {
      float: right; /* Change to right to align text to the right */
      display: block;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
      font-size: 17px;
    }
    .navbar .logout {
      float: right;
    }
    .navbar .logout a {
      padding: 14px 16px;
    }
    .navbar .logo {
      float: left;
      padding: 10px;
    }
    .navbar .logo img {
      width: 25px;
      height: 25px;
      border-radius: 50%;
    }
    .navbar .logged-in-as {
      float: left; /* Align text to the left */
      padding: 14px 20px;
      color: white;
      font-size: 17px;
    }
  </style>
</head>
<body>

<div class="navbar">
  <div class="logo">
    <img src="../../public/Icons/Bgtp.ico" alt="Logo">
  </div>
  <div class="logged-in-as">
    <?php echo $username; ?>
  </div>
  <div class="logout">
    <a href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>
</div>

</body>
</html>

