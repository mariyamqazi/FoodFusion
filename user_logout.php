<?php
session_start();
include("connection.php");

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];

    // delete only pending cart items
    mysqli_query($conn, "DELETE FROM foodorders 
                         WHERE username='$username' AND status='Pending'");
}

session_destroy();
header("location:http://localhost/foodfusion/user_login.php");
exit;


?>