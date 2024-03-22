<?php
$host = "localhost"; // Database host
$username = "root"; // Database username
$password = ""; // Database password
$database = "skillsync"; // Database name

//connecting to the database using mysql injection
$conn = new mysqli($host, $username, $password, $database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// else {
//     echo "Connected to $database";
// }

function onRegister($conn, $firstName, $lastName, $username, $phoneNo, $email, $password, $role)
{
    $sql = "INSERT into users(FirstName, LastName, Username, PhoneNumber, Email, Password, Role) values('$firstName', '$lastName', '$username', $phoneNo, '$email', '$password', '$role')";

    if($conn->query($sql) == true)
    {
        // if registration is successful
        if(mysqli_affected_rows($conn) > 0)
        {
            if($role == 'Employee')
            {
                header('Location: dash.php');
                exit();
            }
            elseif($role == 'Employer')
            {
                header('Location: Customer/dashCustomer.php');
                exit();
            }
        }
    }
}

function onSignIn($conn, $email, $password)
{
    $sql = "SELECT * from users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if($result->num_rows == 0)
    {
        echo 'no records found';
    }
    else
    {
        $findRole = $conn->query("SELECT role from users WHERE email ='$email' AND password = '$password' ")->fetch_assoc();
        $role = $findRole['role'];
        
        if($role == 'Employer')
        {
            header('Location: Customer/dashCustomer.php');
            exit();
        }
        elseif($role == 'Employee')
        {
            header('Location: dash.php');
            exit();
        }
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $action = $_POST['action'];

    if($action == 'signUp')
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $username = $_POST['username'];
        $phoneNo = $_POST['phoneNumber'];
        $email = strtolower($_POST['user_email']);
        $password = $_POST['pass1'];
        $role = $_POST['roles'];
        onRegister($conn, $firstName, $lastName, $username, $phoneNo, $email, $password, $role);
    }
    elseif($action == 'signIn')
    {
        $email = strtolower($_POST['email']);
        $password = $_POST['password'];
        onSignIn($conn, $email, $password);
    }
}

?>