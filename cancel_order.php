<?php
session_start();
include("connection.php");

if(!isset($_SESSION['username'])){
    header("Location: user_login.php");
    exit;
}

$id = intval($_GET['id']);
$username = $_SESSION['username'];

$sql = "UPDATE foodorders SET status='Cancelled' WHERE id=$id AND username='$username'";
mysqli_query($conn,$sql);

header("Location: checkout.php?cancel=success");
exit;
?>
