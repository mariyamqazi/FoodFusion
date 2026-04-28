<?php
include("../connection.php");

if(!isset($_GET['id'])){
    die("Invalid ID");
}

$id = intval($_GET['id']);

// Fetch data first
$sql = "SELECT * FROM customerorder WHERE id=$id";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0){
    die("Record not found");
}

$row = mysqli_fetch_assoc($result);

// DELETE ACTION
if(isset($_POST['delete'])){

    $delete = "DELETE FROM customerorder WHERE id=$id";

    if(mysqli_query($conn, $delete)){
        echo "<script>
            alert('Deleted Successfully');
            window.location='dashboard.php';
        </script>";
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete Record</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
    font-family:Poppins;
}

.box{
    max-width:450px;
    margin:80px auto;
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}
</style>
</head>

<body>

<div class="box">

<h3 class="text-center text-danger">Delete Confirmation</h3>
<hr>

<p><b>ID:</b> <?php echo $row['id']; ?></p>
<p><b>Email:</b> <?php echo $row['emailaddress']; ?></p>
<p><b>Phone:</b> <?php echo $row['phonenumber']; ?></p>

<hr>

<form method="post">

<button type="submit" name="delete" class="btn btn-danger w-100">
    Yes Delete
</button>

<a href="customer.php" class="btn btn-secondary w-100 mt-2">
    Cancel
</a>

</form>

</div>

</body>
</html>