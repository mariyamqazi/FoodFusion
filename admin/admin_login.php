<?php
  
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
   
include("../connection.php");
    session_start();
    


    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Fusion Dashboard</title>
     <title>FOOD FUSION || ADMIN-LOGIN</title>
   <link rel="icon" sizes="64×64" href="./Images/logo0.png">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/css/pace.min.css" rel="stylesheet"/>
    <script src="assets/js/pace.min.js"></script>
    <link rel="icon" href="assets/images/fav.ico" type="image/x-icon">
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
    <link href="assets/css/app-style.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>
body {
    background-color: #f7f7f7;
    font-family: Arial, sans-serif;

}
.container{
    margin-top:140px;
}

.card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);

    max-width: 400px; 
}

.card-body {
    padding: 20px;

    background:	rgb(40,40,40);
       border-radius:20px;
}

.card-content {
    text-align: center;
}


.img-fluid {
    max-width: 100%; 
    height: auto;
}
#box{
 
}

.form-group {
    margin-bottom: 15px;

}

.input-shadow {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    width: 100%;
}

.position-relative {
    position: relative;
}

.form-control-position {
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    color: #999;
}

.btn {
    background:  rgb(248, 69, 99);

    color: white;
    border: none;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
    width:100px;
}

.btn:hover {
    background-color: yellow;
}

.icheck-material-white {
    display: flex;
    align-items: center;
}
#tick{
    color:white;
    opacity:.6
}
.icheck-material-white input[type="checkbox"] {
    margin-right: 8px;
}


@media (max-width: 768px) {
    .card {
        width: 90%; 
    }

    .input-shadow {
        font-size: 14px; 
    }

    .btn {
        font-size: 14px; 
    }
}

    </style>
</head>


<body>
     <?php
    if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];


        $q = "SELECT * FROM `admin` WHERE username = '$username' and password = '$password'";
        $res = mysqli_query($conn, $q);
        if (mysqli_num_rows($res) > 0) {
            while ($data = mysqli_fetch_assoc($res)) {
                $_SESSION['username'] = $_POST['username'];
                header("location:dashboard.php");
            }
        }
    }

    ?>



     <div class="container">
    <div class="card card-authentication1 mx-auto my-5"id="box">
    <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="../Images/logo.png" class="img-fluid w-50" alt="logo icon">
                </div>
                <div class="card-title text-uppercase text-center py-3"></div>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputUsername" class="sr-only">Username</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="exampleInputUsername" class="form-control input-shadow" name="username"
                                placeholder="Enter Username">
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword" class="sr-only">Password</label>
                        <div class="position-relative has-icon-right">
                            <input type="password" id="exampleInputPassword" class="form-control input-shadow" name="password"
                                placeholder="Enter Password">
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <div class="icheck-material-white">
                                <input type="checkbox" id="user-checkbox" checked="" />
                                <label for="user-checkbox"id="tick">Remember me</label>
                            </div>
                        </div>

                    </div>
                    <button type="submit" name="login" class="btn btn-light btn-block">Login</button>


                </form>
            </div>
        </div>
        </div>
        


        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

     
        <script src="assets/js/sidebar-menu.js"></script>

    
        <script src="assets/js/app-script.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>


</body>

</html> 