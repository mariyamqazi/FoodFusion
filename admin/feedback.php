<?php

error_reporting(0);
ini_set("display_errors" ,0);

include("../connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>FOOD FUSION || FEEDBACK </title>
   <link rel="icon" sizes="64×64" href="./Images/logo0.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

<style>

 
*{

box-sizing: border-box;
margin: 0;
padding: 0;
font-family: 'Fredoka',sans-serif;

}


/* SIDEBAR */
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
 #girl{
    width:120px;
    border-radius:50%;
    display:block;
    margin:20px auto;
}

@media(max-width:768px){
    .sidebar.active ~ .content{
        margin-left:0;
    }
}

.table{

  padding:20px;
width: 100%;
}


@media (max-width:528px) {


.table{

width: 400px;


}

} 

#tabledata{


    background-color: rgb(247, 122, 142); 
}





</style>



</head>
<body>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    

<!-- SIDEBAR -->
<nav class="sidebar" id="sidebar">
             <div class="logo">Foodio<i class="fa-solid fa-utensils me-1"></i></div>


    <ul>
        <li><a href="../index.php">Overview</a></li>
        <li><a href="./survey.php">Meal Plans</a></li>
        <li><a href="./customer.php">Customers Orders</a></li>
        <li><a href="./userrecord.php">Reservations</a></li>
        <li><a href="./usersprofiles.php">User Profiles</a></li>
        <li><a href="./feedback.php">Feedback</a></li>
     <li><a href="./visualization.php">Data visualizations</a></li>

    </ul>
    
    <div class="logout">
    <a href="./admin_logout.php" class="logout-btn">Logout</a>   
    </div>  
    
</nav>

<!-- CONTENT -->

<div class="content">

<header class="d-flex justify-content-between align-items-center">
    <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <h3>Feedback</h3>
</header>

<img src="../Images/comments.jpg" alt="girl" id="girl">






<?php


$sql = "SELECT * FROM feedback";
$result =$conn->query($sql);

   
if(mysqli_num_rows($result) > 0) {

   ?>
  
<div class="table-responsive-md" id="backside">

<div class=" col-md-12 col-sm-12 col-xs-12 position-relative">
<div class="d-flex justify-content-center">
              
<table class ="table" id ="table1">

<thead>
<!-- <tr> -->
<tr>
<th scope="col" class="bg-dark text-white">Id</th>
<th scope="col" class="bg-dark text-white">Email</th>
<th scope="col" class="bg-dark text-white">Password</th>
<th scope="col" class="bg-dark text-white text-center">Comments</th>


</tr>
</thead>

<tbody>
<?php 
while($row = mysqli_fetch_assoc($result)){
?>
<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['email']; ?></td>
<td id="tabledata"><?php echo $row['password']; ?></td>
<td><?php echo $row['textbox']; ?></td>

</tr>
<?php } ?>

</tbody>

</table>
</div>
</div>
</div>
<?php } ?>

</div>

</body>
<script>
function toggleSidebar(){
    document.getElementById("sidebar").classList.toggle("active");
}
</script>


</html>