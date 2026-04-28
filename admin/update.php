<?php
include("../connection.php");

if(!isset($_GET['id'])){
    die("Invalid ID");
}

$id = intval($_GET['id']);

// FETCH DATA
$sql = "SELECT * FROM customerorder WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// UPDATE
if(isset($_POST['submit'])){

$email = $_POST['emailaddress'];
$phone = $_POST['phonenumber'];
$password = $_POST['password'];

$update = "UPDATE customerorder 
SET emailaddress='$email',
password='$password',
phonenumber='$phone'
WHERE id=$id";

mysqli_query($conn, $update);

echo "<script>
alert('Updated Successfully');
window.location='dashboard.php';
</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Record</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<h2 class="text-center">Update Data</h2>

<form method="post" class="p-4 shadow bg-white rounded">

<input type="email" name="emailaddress" class="form-control mb-3"
value="<?php echo $row['emailaddress']; ?>">

<input type="password" name="password" class="form-control mb-3"
value="<?php echo $row['password']; ?>">

<input type="text" name="phonenumber" class="form-control mb-3"
value="<?php echo $row['phonenumber']; ?>">

<button name="submit" class="btn btn-warning w-100">Update</button>

</form>

</div>

</body>
</html>