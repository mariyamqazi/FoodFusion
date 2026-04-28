<?php
session_start();
include("connection.php");

if(!isset($_SESSION['username'])){
    header("Location: user_login.php");
    exit;
}

$username = $_SESSION['username'];

$result = mysqli_query($conn, "
SELECT * FROM foodorders 
WHERE username='$username' 
ORDER BY id DESC
");
?>

<!DOCTYPE html>
<html>
<head>
<title>Order History</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:linear-gradient(135deg,#eef2f3,#ffffff);
    font-family:Poppins;
}

.container{max-width:900px;}

.card{
    border:none;
    border-radius:15px;
    padding:15px;
    margin-bottom:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.status{
    padding:5px 12px;
    border-radius:20px;
    font-size:12px;
}

.pending{background:#fff3cd;}
.cancelled{background:#f8d7da;}
</style>

</head>

<body>

<div class="container mt-4">

<h2 class="text-center mb-3">📜 Order History</h2>

<?php
$totalSpent = 0;

while($row = mysqli_fetch_assoc($result)){

// ✅ Only count NON cancelled orders
if($row['status'] != 'Cancelled'){
    $totalSpent += $row['total_price'];
}
?>

<div class="card">

<div>
    <h5><?php echo $row['name']; ?></h5>
    <p>Rs: <?php echo $row['total_price']; ?></p>
</div>

<div class="text-end">
    <span class="status <?php echo strtolower($row['status']); ?>">
        <?php echo $row['status']; ?>
    </span>
</div>

</div>

<?php } ?>

<hr>

<h4>Total Spent: Rs <?php echo $totalSpent; ?></h4>

<div class="text-center">
    <a href="./menu1.php" class="btn btn-primary">Back to Menu</a>
</div>

</div>

</body>
</html>