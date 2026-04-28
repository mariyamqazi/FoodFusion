<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>FOOD FUSION || MENU </title>
   <link rel="icon" sizes="64×64" href="./Images/logo0.png">

    <link rel="stylesheet" href="style4.css">

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
              <a href="./user_logout.php" id="log" class="d-lg-none text-center">Logout</a>
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

           
      <br><br><br><br><br><br><br><br>
           <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchbox">
        <button class="btn btn-outline-danger" type="submit">Search</button>

      </form>

      <br><br><br>


<section class="about my-5">
             
  <div class="container">
    <div class="row text-center">
  <div>

       <h1 class="text-center" id="headingabout">Choose Delicious Deserts</h1>
       <div class="w-25 m-auto" id="line">
       </div>
      </div>
 </div>
</section> 


                    
<div class="card-container">
  <div class="card2">
  
  <img src="./Images/Desert.jpg" alt="yacht">
  
  <div class="card-coontent">
  
  <h1>Chocolato Biscuit crunch</h1>
      
 <button class="btn btn-warning" onclick="openDetailPage('Desert')" id="button0">Order Now</button><br>
    
  <a class="primary">See description</a>
 </div>
 </div>

    <div class="card2">
    <img src="./Images/sweet4.jpg" alt="yacht">
    
    <div class="card-coontent">
    
    <h1>Sprinkle Cake</h1>
    
     <button class="btn btn-warning" onclick="openDetailPage('SprinkleCake')" id="button0">Order Now</button><br>
    
     <a class="primary">See description</a>

   </div>
   </div>
    

  <div class="card2">
  
  <img src="./Images/lava cake.jpg" alt="yacht">
  
  <div class="card-coontent">
    
    <h1>Lava Cake</h1>
    <button  class="btn btn-warning"onclick="openDetailPage('LavaCake')" id="button0">Order Now</button><br>
   
     <a class="primary">See description</a>
  
  </div>
  </div>


 <div class="card2">
  <img src="./Images/cake.jpg" alt="yacht">
  <div class="card-coontent">
    <h1>Creamy Lava Cake</h1>
    <button class="btn btn-warning" onclick="openDetailPage('CreamyLava')" id="button0">Order Now</button><br>
     
    
     <a class="primary">See description</a>
  </div>
  </div>

<div class="card2">
  <img src="./Images/sweet5.jpg" alt="yacht">
  <div class="card-coontent">
    <h1>Bread Roll Cake</h1>
    <button class="btn btn-warning" onclick="openDetailPage('BreadRollCake')" id="button0">Order Now</button><br>
   
             <a class=" primary">See description</a>

</div>
</div>
<div class="card2">
  <img src="./Images/sweet.png" alt="yacht">
  <div class="card-coontent">
   
    <h1>Cup Cake</h1>
    <button class="btn btn-warning" onclick="openDetailPage('CupCake')" id="button0">Order Now</button><br>
   
     <a class=" primary">See description</a>
</div>
</div>

</div>


<br><br>


<section class="about my-5">
             
  <div class="container">
    <div class="row text-center">
  <div>

       <h1 class="text-center" id="headingabout">Choose Soft Drinks & Flavorful Shakes</h1>
       <div class="w-25 m-auto" id="line">
       </div>
      </div>
 </div>
</section> 


                    
<div class="card-container">
  <div class="card2">
  
  <img src="./Images/juice1.jpg" alt="yacht">
  
  <div class="card-coontent">
  
  <h1>Guava Mint limca</h1>
      
 <button class="btn btn-warning" onclick="openDetailPage('GuavaMintlimca')" id="button0">Order Now</button><br>
    
  <a class="primary">See description</a>
 </div>
 </div>

    <div class="card2">
    <img src="./Images/juice5.jpg" alt="yacht">
    
    <div class="card-coontent">
    
    <h1>Smoothie</h1>
    
     <button class="btn btn-warning" onclick="openDetailPage('Smoothie')" id="button0">Order Now</button><br>
    
     <a class="primary">See description</a>

   </div>
   </div>
    

  <div class="card2">
  
  <img src="./Images/juice4.jpg" alt="yacht">
  
  <div class="card-coontent">
    
    <h1>Mango Shake</h1>
    <button  class="btn btn-warning" onclick="openDetailPage('MangoShake')" id="button0">Order Now</button><br>
   
     <a class="primary">See description</a>
  
  </div>
  </div>


 <div class="card2">
  <img src="./Images/smmothe.jpg" alt="yacht">
  <div class="card-coontent">
    <h1>Strawberry Smoothie</h1>
    <button class="btn btn-warning" onclick="openDetailPage('StrawberrySmoothie')" id="button0">Order Now</button><br>
     
    
     <a class="primary">See description</a>
  </div>
  </div>

<div class="card2">
  <img src="./Images/shakes3.jpg" alt="yacht">
  <div class="card-coontent">
    <h1>Shakes</h1>
    <button class="btn btn-warning" onclick="openDetailPage('FlavorfulShakes')" id="button0">Order Now</button><br>
   
             <a class=" primary">See description</a>

</div>
</div>
<div class="card2">
  <img src="./Images/shakes2.jpg" alt="yacht">
  <div class="card-coontent">
   
    <h1>Mix fruity Shake</h1>
    <button class="btn btn-warning" onclick="openDetailPage('MixfruityShake')" id="button0">Order Now</button><br>
   
     <a class=" primary">See description</a>
</div>
</div>



   

 <div class="card2">
  <img src="./Images/fanta3.avif" alt="yacht">
  <div class="card-coontent">
    <h1>Fanta</h1>
    <button class="btn btn-warning" onclick="openDetailPage('FantaSoftDrink')" id="button0">Order Now</button><br>
     
    
     <a class="primary">See description</a>
  </div>
  </div>

<div class="card2">
  <img src="./Images/juice2.jpg" alt="yacht">
  <div class="card-coontent">
    <h1>Mix Limca</h1>
    <button class="btn btn-warning" onclick="openDetailPage('MixLimca')" id="button0">Order Now</button><br>
   
             <a class=" primary">See description</a>

</div>
</div>
<div class="card2">
  <img src="./Images/coke.jpg" alt="yacht">
  <div class="card-coontent">
   
    <h1>Coka Colaa</h1>
    <button class="btn btn-warning" onclick="openDetailPage('Coke')" id="button0">Order Now</button><br>
   
     <a class=" primary">See description</a>
</div>
</div>


</div>


    </div>
    </div>


    
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
             
                
    <a href="./About.php" class="text-white"id="Office" Style="text-decoration: none;">About us</a><br>
    <a href="./Menu1.php"class="text-white"id="Office" Style="text-decoration: none;">Meal Prep</a><br>
    <a href="./Services.php"class="text-white"id="Office" Style="text-decoration: none;">Our Services</a><br>
    <a href="./Contact.php"class="text-white"id="Office" Style="text-decoration: none;">General Inquiries</a><br>
 
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

            <script>
        
  const navbar = document.getElementById('navbar2');
  const topItem = document.getElementById('top');
  
  function handleScroll() {
    if (window.scrollY > 0) {
      navbar.classList.add('navbar-scrolled'); 
    } else {
      navbar.classList.remove('navbar-scrolled'); 
    }
  }
  
  
  window.addEventListener('scroll', handleScroll);


  function openDetailPage(item) {
    
    window.location.href = `details.php?item=${item}`;
}

  </script>

     
</body>

</html>
