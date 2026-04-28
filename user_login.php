<?php
session_start();
include("connection.php");

$loginError = "";
$registerError = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /*  REGISTER */
    if (isset($_POST['register'])) {

        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        // check if user exists
        
        $check = "SELECT * FROM customerlogin 
                  WHERE username='$username' OR email='$email'";
        $result = mysqli_query($conn, $check);

        if (mysqli_num_rows($result) > 0) {
            $registerError = "Username or Email already exists";
        } else {

            $sql = "INSERT INTO customerlogin (fullname, username, email, password)
                    VALUES ('$fullname', '$username', '$email', '$password')";

            if (mysqli_query($conn, $sql)) {
                $success = "Registered successfully";
            } else {
                $registerError = "Registration failed";
            }
        }
    }

    /* LOGIN  */
    
    if (isset($_POST['login'])) {

        $user = $_POST['username'];
        $password = $_POST['password'];

        // allow login with username OR email
        $sql = "SELECT * FROM customerlogin 
                WHERE username='$user' OR email='$user'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row['password'])) {

                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                header("Location:index.php");
                exit;

            } else {
                $loginError = "Invalid password";
            }

        } else {
            $loginError = "User not found";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>FOOD FUSION || USER-LOGIN</title>
 <link rel="icon" sizes="64×64" href="./images/logo0.png">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* ===== YOUR UI (UNCHANGED) ===== */

*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: "Roboto", sans-serif;
}

#img1{
  width:100%;
  position: relative;
  height:650px;
  z-index: -1;
  filter: blur(3px);
  object-fit:cover;
}

div.popup-container{
    position: fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    display:none;
    justify-content:center;
    align-items:center;
    z-index: 2;
}

div.popup-container div.popup{
    background: rgb(40,40,40);
    width:350px;
    border-radius:5px;
    padding: 20px;
}

div.popup-container div.popup h2{
    display:flex;
    justify-content:space-between;
    color:chocolate;
}

.close-btn{
    background: transparent !important;
    border: none !important;
    color: chocolate;
    font-size: 20px;
    cursor: pointer;
}

.close-btn:hover{
    color: white;
}
div.popup-container div.popup input{
    width:100%;
    margin-bottom:15px;
    background:transparent;
    border:none;
    border-bottom: 2px solid #797775;
    color:white;
    outline:none;
}

div.popup-container div.popup button.registerbtn{
    background:chocolate;
    width:100%;
    color:white;
    border:none;
    padding:6px;
}

.sign-in-up{
    position: fixed;
    width:100%;
    height:100%;
    display:flex;
    justify-content:center;
    align-items:center;
}

.button1,.button2{
    width:150px;
    height:50px;
    border:none;
    color:white;
    border-radius:5px;
}

.button1{background:chocolate;}
.button2{background:rgb(40,40,40); margin-left:10px;}
</style>
</head>

<body>

<!-- ALERTS -->
<div class="position-fixed top-0 end-0 p-3">
<?php if($registerError) echo "<div class='alert alert-danger'>$registerError</div>"; ?>
<?php if($loginError) echo "<div class='alert alert-danger'>$loginError</div>"; ?>
<?php if($success) echo "<div class='alert alert-success'>$success</div>"; ?>
</div>

<!-- BUTTONS -->
<div class="sign-in-up">
    <button class="button1" onclick="popup('register-popup')">Signup</button>
    <button class="button2" onclick="popup('login-popup')">Login</button>
</div>

<!-- REGISTER POPUP -->
<div class="popup-container" id="register-popup">
  <div class="popup">
    <form method="POST">
        <h2>
            <span>Signup</span>
            <button type="button" class="close-btn" onclick="popup('register-popup')">X</button>
        </h2>

        <input type="text" name="fullname" placeholder="Full Name" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button class="registerbtn" name="register">Sign up</button>
    </form>
  </div>
</div>

<!-- LOGIN POPUP -->
<div class="popup-container" id="login-popup">
  <div class="popup">
    <form method="POST">
        <h2>
            <span>Login</span>
            <button type="button" class="close-btn" onclick="popup('login-popup')">X</button>
        </h2>

        <input type="text" name="username" placeholder="Username or Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button class="registerbtn" name="login">Login</button>
    </form>
  </div>
</div>

<img src="./images/design.jpg" id="img1">

<script>
function popup(id){
    let el = document.getElementById(id);
    el.style.display = (el.style.display === "flex") ? "none" : "flex";
}
</script>

</body>
</html>