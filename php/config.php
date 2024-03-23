<?php
session_start();

$host = "localhost"; // Database host
$dbusername = "root"; // Database username
$dbpassword = ""; // Database password
$database = "skillsync"; // Database name

//connecting to the database using mysql injection
$conn = new mysqli($host, $dbusername, $dbpassword, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function onRegister($conn, $firstName, $lastName, $username, $phoneNo, $email, $password, $role)
{
    $sql = "INSERT into users(FirstName, LastName, Username, PhoneNumber, Email, Password, Role) values('$firstName', '$lastName', '$username', $phoneNo, '$email', '$password', '$role')";

    if($conn->query($sql) == true)
    {
        // if registration is successful
        if(mysqli_affected_rows($conn) > 0)
        {
            // php code to get user id of newly registered user
            $get_UID_Query = "SELECT userid from users where username = '$username' and email='$email'";
            $result = $conn->query($get_UID_Query);
            $row = $result->fetch_assoc();
            $user_id = $row['userid'];
            $_SESSION['user_id'] = $user_id;

            if($role == 'Employee')
            {
                header('Location: Employee/dash.php');
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
        // php code to get user id of user signing in
        $get_UID_Query = "SELECT userid from users where email = '$email' and password='$password'";
        $result = $conn->query($get_UID_Query);
        $row = $result->fetch_assoc();
        $user_id = $row['userid'];
        $_SESSION['user_id'] = $user_id;
        
        $findRole = $conn->query("SELECT role from users WHERE email ='$email' AND password = '$password' ")->fetch_assoc();
        $role = $findRole['role'];
        
        if($role == 'Employer')
        {
            header('Location: Customer/dashCustomer.php');
            exit();
        }
        elseif($role == 'Employee')
        {
            header('Location: Employee/dash.php');
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