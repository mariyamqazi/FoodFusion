<?php
session_start();

include("connection.php");


if(isset($_POST['submit'])){

    $email = $_POST['emailaddress'];
    $password = $_POST['password'];
    $phone = $_POST['phonenumber'];
    $reservedate = $_POST['reservedate'];

    $sql = "INSERT INTO customerorder (emailaddress, password, phonenumber, reservedate)
            VALUES ('$email', '$password', '$phone', '$reservedate')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Reservation Successful'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD FUSION || HOME</title>
   <link rel="icon" sizes="64×64" href="./Images/logo0.png">


    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="logo0.png" type="image/x-icon">


</head>



<body>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
         

<div class="container-fluid"  id="top">
 
 <div class="containertop"> 

 <ul class="d-flex align-items-center list-inline" id="icon2">
  <li id="icon1"> <i class="fa-solid fa-mobile-screen" id="mob"></i>
    Phone: &nbsp;&nbsp;<B>+92787387833</B>
  </li>
  <li><i class="fa-solid fa-envelope" id="mob"></i>&nbsp;&nbsp;
          
  Email: &nbsp;&nbsp;foodfleet@outlook.com
  </li>

 <li>
            
   
  <i class="fa-duotone fa-solid fa-user"></i>&nbsp;

  <a href="./user_logout.php" id="userlog">logout</a>


     </li> 


 </ul>

</div>

 </div>   


 <header>



            <nav class="navbar navbar-expand-lg px-2" id="navbar2">
                   <div class="container-fluid">
                   <img src="./Images/logo0.png" alt="" id="Logo">
                       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          
                          <ul class="navbar-nav mb-2 mb-lg-0 me-4 text-center" id="head">
                            
                         <li class="nav-item" id="head2">
                           <a class="nav-link active text-dark" aria-current="page" href="./index.php" id="border">Home</a>
                         </li>
                         <li class="nav-item"id="head2">
                           <a class="nav-link text-dark" href="./about.php" id="border">About</a>
                         </li>
                         <li class="nav-item dropdown"id="head2">
                           <a class="nav-link dropdown-toggle text-dark" href="menu1.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Menu
               
                          </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropbox">
                             <li><a class="dropdown-item" href="./menu1.php"  id="border">Desi Bite</a></li>
                             <li><a class="dropdown-item" href="./menu2.php"  id="border">Fast Food</a></li>
                             <li><a class="dropdown-item" href="./menu3.php"   id="border">Desert & Beverages</a></li>
                           </ul>
                         </li>
                         <li class="nav-item"id="head2">
                           <a class="nav-link text-dark" href="./services.php"id="border" tabindex="-1" aria-disabled="true">Services</a>
                         </li>
               
                         <li class="nav-item"id="head2">
                           <a class="nav-link text-danger" href="./contact.php" id="border" tabindex="-1" aria-disabled="true">Contact</a>
                         </li>
                            
               <li class="nav-item" id="head3">
              <a href="user_logout.php" id="log" class="d-lg-none text-center">Logout</a>
              </li>
            
                       </ul>
                          
           
            
                       <form class="d-flex">
                         
                        <i class="fas fa-bell" id="ring"></i> 
                      
                <button  id="button1"><a href="#reserve">Reserve A Table</a></button>
                       </form> 
             
           
                     </div>
                   </div>
                 </nav>
                

           </header> 
     
     <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./Images/hotel13.jpg" class="d-block w-100" alt="..." id="slide">
          <div class="carousel-caption d-none d-md-block">
             
            
                </div>
        </div>
        <div class="carousel-item">
          <img src="./Images/Hotel1.jpg" class="d-block w-100" alt="..." id="slide">
          <div class="carousel-caption d-none d-md-block">
         
          </div>
        </div>
        <div class="carousel-item">
          <img src="./Images/hotel13.jpg" class="d-block w-100" alt="..." id="slide">
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
        
  
    </div>
  
    <div id="food">  
   <i class="fa-regular fa-star"></i>
      
   <h1 id="tasty">&nbsp;&nbsp;&nbsp;Tasty & Delicious</h1> 
    <br><p id="one">Weekly speical</p>
    
    <br>
     <p id="inner"> &nbsp;&nbsp;&nbsp; &nbsp;RS.1000<br>Sicilian Pizza  
     
      </p>
      
     <img src="./Images/pizze-img.png" alt="Pizza"id="spceial">
    



      <div id="vl">
     
    
    </div>
    <button id="Specialite"><a href="./survey.php" id="view">Specialite</a></button>
  </div>
    
<br><br>





  <section class="about my-5">
        
    <div class="container">
  
      <div class="row">
         
         <div class="col-sm-12 col-md-6 col-lg-6 col-12">   

          <h5  class="mt-5" id="fusion">Flavorful Fusion<span class="homespan">HOME</span></h5>
         
         <h2 class="mt-3" id="heading2">New Plateform To Be Enjoyed Delicious Dishes </h2>    
          
           
        </div>
         
             <div class="container">
  
              <div class="row">
                 
                 <div class="col-lg-12 ms-auto text-end" id="picture" >


                  <img src="./Images/MQ.jpg" alt="girl" id="girl">
             
              <h3 id="name">  George Jackson</h3>
              <h6 id="name2"> CEO and Chief Operations Officer</h6>
             <br>
            
              <p class="pt-3" id="para">


              Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
               praesentium, magni mollitia, enim provident odit velit, <br>
              ut adipisci ipsam  rem est  ut adipisci ipsam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
  
              </p> 
             
                   </div>

                   </div>
                   </div>
                      
                  </section>
                  <br>
           
                  <div class="container" id="space">
                    
                        <div class="row" id="">

                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 position-relative">
                               
                            <div class="card">
                                    <img src="./Images/food5.jpg" class="card-img-top" alt="Image"  id="three">
                                   
                                    <div class="card-text-container">
                                        <h1 id="open">Restaurant</h1>

                                        <h5 id="RT">More details or information can be placed here. This will appear on hover.<br>
                                          More details or information can be placed here. This will appear on hover.<br>
                                          More details or information can be placed here. This will appear on hover.
                                        </h5>
                                    </div>
                               
                                  </div>
                            </div>
                     
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 position-relative">
                              <div class="card">
                                  <img src="./Images/Location3.jpg" class="card-img-top" alt="Image" id="four">
                                 
                                    <div class="card-text-container">
                                      <h1 id="open"> Culinary Expertise</h1>

                                      <h5 id="RT">More details or information can be placed here. This will appear on hover.<br>
                                        More details or information can be placed here. This will appear on hover.<br>
                                        More details or information can be placed here. This will appear on hover.
                                      </h5>
                                  </div>
                             
                                </div>
                          </div>
                          <!-- height="440px" width="400px" -->
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 position-relative">
                           
                            <div class="card">
                                <img src="./Images/restaurant.jpg" class="card-img-top" alt="Image" id="three" height="450px">
                               
                                
                                  <div class="card-text-container">
                                    <h1 id="open">Speical Dish</h1>

                                    <h5 id="RT">More details or information can be placed here. This will appear on hover.<br>
                                      More details or information can be placed here. This will appear on hover.<br>
                                      More details or information can be placed here. This will appear on hover.
                                    </h5>
                                </div>
                           
                              </div>
                        </div>
                 
                            
                              </div>
                              </div>


                  </section>
                
                    <section class="about my-5">
                      
                      <br><br>
                      <br><br><br><br>
           
                      <div class="container" id="box6">
                    
                      <div>
                  
                           <h1 class="text-center" id="cake1">Discover menu</h1>
                           <!-- <div class="w-25 m-auto" id="line">
                          
                          </div> -->

                          </div>
                          
                           
                          <br><br>
                    

<div class= "mt-5" id="Box">
       <a href="./menu3.php" alt="">
    <img src="./Images/donnut.avif" alt="boat" id="cake"></a>
    <a href="./menu1.php" alt="">
    <img src="./Images/Steak.jpg" alt="boat"id="cake"></a>
    <a href="./menu3.php" alt="">
    <img src="./Images/coffee.jpg" alt="boat" id="cake"></a>
    <a href="./menu2.php" alt ="">
    <img src="./Images/burger_3428823.png" alt="boat"id="cake"></a>
    <a href= "./menu2.php" alt="">
    <img src="./Images/one.jpg" alt="boat"id="cake"></a>
    
    
  </div>

</div>
          

</section> 


<br>
<br><br>
<br>

  <div class="container">
  <div class="row align-items-center">
     
      <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-start" id="bottom">
          
          <div id="macroon">

          </div>
        </div>
     
      <div class="col-lg-6 col-md-12">
          <h1 class="display-4" id="Dessert">Desserts</h2>
          <p id="Dessert2">This is a lead paragraph to give a brief overview about menu  <span id="rupee">Rs.300</span>
          </p>

          <hr>
          <h2 id="Dessert">Steak</h2>
          <p id="Dessert2">
            This is a lead paragraph to give a brief overview about menu <span id="rupee">Rs.300</span> 

            </p>
         <hr>
          <h2 id="Dessert">Arrabiata Pasta</h2>
          <p id="Dessert2"> 
          
            This is a lead paragraph to give a brief overview about menu <span id="rupee">Rs.300</span>

          </p>
            <hr>
          <h2 id="Dessert">Chicken Mandi</h2>
          <p id="Dessert2">
            This is a lead paragraph to give a brief overview about menu  <span id="rupee">Rs.300</span>

          </p>
         
     
        </div> 
  </div>
</div>



     <br><br><br><br> 
<br><br><br>
  
   



<section id="reserve">
<div class="background d-flex align-items-center justify-content-center">
  <div class="container" id="form2">
      <form action ="Home.php" method="post" class=" bg-white p-4 rounded shadow-sm">
        
          <h2 class="mb-4" id="head4">Reserve A Table</h2>

          <div class="mb-3">
            
            <input type="hidden" name ="id"  required class="form-control" id="exampleInputId" aria-describedby="phoneHelp">
        </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="Email" name ="emailaddress" placeholder="Enter Email address" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name ="password" placeholder="EnterPassword"  required class="form-control" id="exampleInputPassword1">
          </div>
          
          <div class="mb-3">
            <label for="exampleInputPhonenumber" class="form-label">Phone Number</label>
            <input type="Phone" name ="phonenumber" placeholder="Enter number" required class="form-control" id="exampleInputPhonenumber" aria-describedby="phoneHelp">
        </div> 
          <div class="mb-3">
            <label for="datePicker" class="form-label">Select Date</label>
            <input type="date" name="reservedate" class="form-control" id="datePicker" aria-label="Select Date" >
  
              </div> 
          <button type="submit" name= "submit" id="submit1">Submit</button>


         
          <br>
       
      </form>
  </div>
</div>

</section>
   
<br><br><br><br><br><br><br><br>
 
                  <footer class="text-white">
            
                    <div class="container text-center text-md-left">     

                     <div class="row text-center text-md-left"id="ftbox">
                  
                      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="mb-4 font-weight bold text-warning" id="topic1">Subscribe for Update</h5>
                     
                         <p id="FootPara">Subscribe our app for more update  get free discount & experiences survey Lorem, ipsum dolor sit amet  </p>
                        
                      </div>
                     
                      <div class=" col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                      <h5 class="mb-3 font-weight bold text-warning" id="topic2">Helpful Links</h5>
                     
                        
            <a href="./about.php" class="text-white"id="Office" Style="text-decoration: none;">About us</a><br>
            <a href="./menu1.php"class="text-white"id="Office" Style="text-decoration: none;">Meal Prep</a><br>
            <a href="./services.php"class="text-white"id="Office" Style="text-decoration: none;">Our Services</a><br>
            <a href="./contact.php"class="text-white"id="Office" Style="text-decoration: none;">General Inquiries</a><br>
         
                    </div>
                  
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                       
                          <h5 class="mb-3 font-weight bold text-warning" id="topic2">Explore More</h5>
                     
                  
                          <a href="" class="text-white"id="Office" Style="text-decoration: none;">FAQs</a><br>
                          <a href=""class="text-white"id="Office" Style="text-decoration: none;">Order status</a><br>
                          <a href=""class="text-white"id="Office" Style="text-decoration: none;">Payment options</a><br>
                          <a href=""class="text-white"id="Office" Style="text-decoration: none;">Shipping rates</a><br>
                  
                       </div>
                  
                       <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                       
                        <h5 class="mb-3 font-weight bold text-warning"id="topic2">Contact us</h5>
                              
                         <p id="Office2">
                        <i class="fas fa-home mr-3" id="icon4"></i>&nbsp;london,NY 2773,US </p>
                         
                          <p id="Office2">
            
                         
                   <i class="fas fa-envelope mr-3"id="icon4"></i>&nbsp;fusion@outlook.com</p>

                            <p id="Office2">
                            <i class="fas fa-phone mr-3" id="icon4"></i>&nbsp;+92 2368882881</p>
                        
                          </div>    
                           
                  
                  
                       <hr class="mb-4 text-align-center"id="ftspan2">
                       <div class="row text-start">
                        
                        <div class="col-md-7 col-lg-8"id="ftspan">
                        <p id="Copyright">Copyright&#169 2019:Design by
                           <a href="" style="text-decoration:none;">
                          <strong class="text-primary" id="Copyright">The Providers</strong>  
                          </a>
                        </p>
                  
                        </div>
                       
                         
                       <div class="col-md-5 col-lg-4"id="ftspan">
                        <div class="text-center text-md-left">
                         
                          <ul class="list-unstyled list-inline">
                        
                          <li class="list-inline-item">
                        <a href="" class="btn-sm" style="font-size: 18px;"><i class="fab fa-facebook"id="move2"></i></a>
                         </li>
                         
                         <li class="list-inline-item">
                          <a href="" class=" text-danger" style="font-size: 18px;"><i class="fab fa-youtube" id="move2"></i></a>
                    
                           </li>
                           <li class="list-inline-item">
                            <a href="" class=" btn-sm " style="font-size: 18px;"><i class="fab fa-linkedin"id="move2"></i></a>
                      
                             </li>
                             <li class="list-inline-item">
                              <a href="" class="btn-sm" style="font-size: 18px;"><i class="fab fa-twitter"id="move2"></i></a>
                        
                             </li>              
                         </ul>
                          
                        </div> 
                       </div>
                       </div>
                  
                  
                      </div>
                  
                   
                    </footer>      
             


</body>
</html>