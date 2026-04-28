<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:http://localhost/foodfusion/admin/admin_login.php');
}
?>

<?php


error_reporting(0);
ini_set("display_errors" ,0);



 include("../connection.php");

$total_orders = 0;
$active_users = 0;
$total_reserved = 0;
$total_items = 0;

$sql = "SELECT COUNT(*) as email FROM foodorders";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_orders= $row['email'];
}


$sql = "SELECT COUNT(DISTINCT id) as username FROM customerlogin";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $active_users = $row['username'];
}


$sql = "SELECT COUNT(*) as Emailaddress FROM customerorder";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_reserved = $row['Emailaddress'];
}
$sql = "SELECT COUNT(*) as items FROM foodorders";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_items = $row['items'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>FOOD FUSION || ADMIN-PANEL</title>
   <link rel="icon" sizes="64×64" href="./Images/logo0.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="logo0.png" type="image/x-icon">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Fredoka',sans-serif;

}

.sidebar{
    width:250px;
    height:100vh;
    background:rgb(40,40,40);
    position:fixed;
    top:0;
    left:0;
    padding:20px;
    transform:translateX(-100%);
    transition:0.3s ease;
    z-index:1000;
}

.sidebar.active{
    transform:translateX(0);
}

.sidebar .logo{
    color:chocolate;
    font-size:22px;
    margin-bottom:30px;
}

.fa-utensils{

color:chocolate;
 opacity: .8;;
 font-size: 22px;
 padding:5px;
} 
.sidebar ul{
    list-style:none;
    padding:0;
}

.sidebar ul li{
    margin:25px 0;

}

.sidebar a{
    color:white;
    text-decoration:none;
}

.sidebar a:hover{
    /* color:chocolate; */
}

/* CONTENT */
.content{
    margin-left:0;
    padding:20px;
    transition:0.3s;
}

.sidebar.active ~ .content{
    margin-left:250px;
}

/* TOGGLE */
.toggle-btn{
    font-size:26px;
    border:none;
    background:none;
    cursor:pointer;
}

.logout-btn{
    display: inline-block;
    padding: 8px 16px;
    background: rgb(40,40,40);
    color: white;
    text-decoration: none;
    border-radius: 6px;
    transition: 0.3s;
    border: 1px solid chocolate;
    font-weight: 500;
}


.logout-btn:hover{
    
background:  rgb(240, 90, 115);
text-decoration: none;
color: white;   
}

.widgets {
    margin-top: 20px;
}



@media (max-width: 768px) {
    .toggle-btn {
        display: block; 
    }

    .content {
        margin-left: 0;
    }
}

#box {
    max-width: 1120px;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 2em;
    margin-bottom: 20px;
    color: #333;
}

.metrics {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.metric {
    flex: 1;
 
    border-radius: 8px;

    padding: 15px;
    margin-right: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s, box-shadow 0.3s;
}

.metric:last-child {
    margin-right: 0;
}

.metric:hover {
    background-color: #f0f8ff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.metric h2 {
    font-size: 1.2em;
    margin-bottom: 10px;
    
color: rgb(247, 122, 142);
font-weight:bold;
}

.metric p {
    font-size: 1.5em;
    font-weight: bold;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    
    background-color:  rgb(247, 122, 142);
    color: #ffffff;
    font-weight: bold;
}

td {
    background-color: #ffffff;
    transition: background-color 0.3s;
}

tr:nth-child(even) td {
    background-color: #f9f9f9;
}

tr:hover td {
    background-color: #e9ecef;
}

a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s;
}

a:hover {
    color: #0056b3;
    text-decoration: underline;
}


.card {
    background-color: #ffffff;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    transition: background-color 0.3s, box-shadow 0.3s;
}

.card:hover {
    background-color: #f0f8ff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.card h2 {
    font-size: 1.2em;
    margin-bottom: 10px;
    color: #007bff;
}

.card p {
    font-size: 1.2em;
    color: #333;
}

#bar{
    z-index: -1;
}


@media (max-width: 1200px) {

    button    {
margin-right:50px;
margin-top:40px;

}
}
@media (max-width: 1200px) {
#bar{

margin-top:40px;

}
}

@media (max-width: 263px) {
#bar
    {
position:relative;
margin-left:100px;
}
}
</style>

</head>
<body>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <nav class="sidebar" id="sidebar">
    <div class="logo">Foodio<i class="fa-solid fa-utensils me-1"></i></div>

    <ul>
        <li><a href="../index.php">Overview</a></li>
        <li><a href="./survey.php">Meal Plans</a></li>
        <li><a href="./customer.php">Customers Orders</a></li>
        <li><a href="./userrecord.php">Reserves Table</a></li>
        <li><a href="./usersprofiles.php">User Profiles</a></li>
        <li><a href="./feedback.php">Feedback</a></li>
        <li><a href="./visualization.php">Data visualizations</a></li>
    </ul>

    <div class="logout">
    <a href="./admin_logout.php" class="logout-btn">Logout</a>   
    </div>
</nav>

<!-- <header class="d-flex justify-content-between align-items-center" style="padding:10px 20px;">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
</header> -->

<div class="content">

<header class="d-flex justify-content-between align-items-center">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    
</header>
    <div class="container" id="box">
        <h1>Admin Panel</h1>
        <div class="metrics">
            <div class="metric">
                <h2>Total Orders</h2>
                <p>$<?php echo number_format($total_orders, 2); ?></p>
            </div>
            <div class="metric">
                <h2>Active Users</h2>
                <p><?php echo $active_users; ?></p>
            </div>
           
            <div class="metric">
                <h2>Total Reserved</h2>
                <p><?php echo $total_reserved; ?></p>
            </div>
            
            <div class="metric">
                <h2>Total Items</h2>
                <p><?php echo $total_items; ?></p>
            </div>
        </div>
        
        <h2>Recent Orders</h2>
        <table class="t1">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Food Item</th>
                    <th>description</th>
                    <th>orders_timing</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, name, food_desc, order_time FROM foodorders ORDER BY order_time DESC LIMIT 2";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['food_desc']}</td>
                                <td>{$row['order_time']}</td>
                                                              
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No recent orders</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <h2>Reservation</h2>
        <a href="">Add New Member</a>
        <table class="t2">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Emailaddress</th>
                    <th>Password</th>
                    <th>PhoneNumber</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, emailaddress, password, phonenumber FROM customerorder";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['emailaddress']}</td>
                                <td>\${$row['password']}</td>
                                <td>{$row['phonenumber']}</td>
                                <td>
                                    <a href='Update.php?id={$row['id']}'>Edit</a> | 
                                    <a href='Delete.php?id={$row['id']}'>Delete</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No Reserved Table available</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</div>

</div>

</body>

<script>
function toggleSidebar(){
    document.getElementById('sidebar').classList.toggle('active');
}

</script>
</html>
