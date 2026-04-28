<?php
session_start();
include("connection.php");

if(!isset($_SESSION['username'])){
    header("Location: user_login.php");
    exit;
}

$username = $_SESSION['username'];

$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$item = $_POST['item'];
$name = $_POST['name'];
$desc = $_POST['description'];
$image = $_POST['image'];
$quantity = (int)$_POST['quantity'];

$price = 2000;
$total_price = $price * $quantity;

$sql = "INSERT INTO foodorders 
(username,email,phone,address,item,name,food_desc,image,quantity,price,total_price,status)
VALUES
('$username','$email','$phone','$address','$item','$name','$desc','$image','$quantity','$price','$total_price','Pending')";

mysqli_query($conn,$sql);

header("Location: checkout.php?order=success");
exit;
?>

