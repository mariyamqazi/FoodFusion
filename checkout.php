<?php
session_start();
include("connection.php");

if(!isset($_SESSION['username'])){
    header("Location: user_login.php");
    exit;
}

$username = $_SESSION['username'];

// Only pending items = cart
$result = mysqli_query($conn, 
"SELECT * FROM foodorders 
 WHERE username='$username' AND status='Pending' 
 ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>My Cart</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
body{
    background: linear-gradient(135deg,#fdfbfb,#ebedee);
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

.btn-custom{
    border-radius:25px;
    padding:8px 20px;
}

.header-btns a{margin:5px;}

.total-box{
    background:#fff;
    padding:20px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
    text-align:center;
}
</style>
</head>

<body>

<div class="container mt-4">

<h2 class="text-center mb-3">🛒 My Cart</h2>

<div class="text-center header-btns mb-3">
    <a href="menu1.php" class="btn btn-primary btn-custom">Continue Ordering</a>
    <a href="order_history.php" class="btn btn-dark btn-custom">Order History</a>
</div>

<?php
$totalItems = 0;
$grandTotal = 0;

if(mysqli_num_rows($result) == 0){
    echo "<div class='text-center mt-5'><h4>Your cart is empty 🛒</h4></div>";
} else {

while($row = mysqli_fetch_assoc($result)){

$totalItems += $row['quantity'];
$grandTotal += $row['total_price'];
?>

<div class="card">

<div>
<h5><?php echo $row['name']; ?></h5>
<p class="mb-1">Qty: <?php echo $row['quantity']; ?></p>
<p class="text-success">Rs: <?php echo $row['total_price']; ?></p>
</div>

<button onclick="cancelOrder(<?php echo $row['id']; ?>)" 
        class="btn btn-danger btn-sm btn-custom">
Cancel
</button>

</div>

<?php } ?>

<div class="total-box">
<h4>Total Items: <?php echo $totalItems; ?></h4>
<h4>Total Bill: Rs <?php echo $grandTotal; ?></h4>
</div>

<?php } ?>

</div>

<script>

// Cancel order
function cancelOrder(id){
Swal.fire({
    title:'Cancel Order?',
    text:'Are you sure?',
    icon:'warning',
    showCancelButton:true,
    confirmButtonColor:'#d33'
}).then((r)=>{
    if(r.isConfirmed){
        window.location='cancel_order.php?id='+id;
    }
});
}

// Cancel success alert
if(new URLSearchParams(window.location.search).get('cancel')==='success'){
Swal.fire('Cancelled','Order cancelled successfully','success');
}

// Order success alert
if(new URLSearchParams(window.location.search).get('order')==='success'){
Swal.fire('Success','Order placed successfully 🎉','success');
}

</script>

</body>
</html>