<?php

include ('../dbConnection.php');

if (isset($_POST['delete_post_id']))
{
    $delete_post_id = $_POST['delete_post_id'];
    $delete_query = "DELETE FROM posts_tb WHERE post_id = $delete_post_id";
    $conn->query($delete_query);
    header('Location: dashboard.php');
}

?>