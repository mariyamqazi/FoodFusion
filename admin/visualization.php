<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>FOOD FUSION || VISUALIZATION</title>
   <link rel="icon" sizes="64×64" href="./Images/logo0.png">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    margin:0;
    padding:0;
    box-sizing:border-box;
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


@media(max-width:768px){
    .sidebar.active ~ .content{
        margin-left:0;
    }
}
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.box2 {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

canvas {
    max-width: 100%;
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
</header>
   
<div class="box2">
        <h1>Services Visual Display</h1>
        <br><br>
        <canvas id="foodChart"></canvas>
    </div>
   
    <script>

function toggleSidebar(){
    document.getElementById("sidebar").classList.toggle("active");
}

const ctx = document.getElementById('foodChart').getContext('2d');

const foodChart = new Chart(ctx, {
    type: 'bar', 
    data: {
        labels: ['Food orders', 'Service status', 'Events', 'Reservation', 'Meals', 'Discount'],
        datasets: [{
            label: 'Visual Display',
            data: [1200, 800, 600, 300, 500, 400], 
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});



    </script>
</body>
</html>
