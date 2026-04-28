<?php

include("connection.php");


if(isset($_POST['submit'])){
extract($_POST);
$sql = "INSERT INTO feedback (email, password , textbox) values ('$email', '$password','$textbox')";

$result = $conn->query($sql); 

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

<style>

*{

box-sizing: border-box;
margin: 0;
padding: 0;

}

h1{

  font-family: "Dancing Script", cursive;

}


html {
  scroll-behavior: smooth;
}


#navbar2{

background-color: white;
height: 80px;
width: 100%;
position: fixed; /* Keep the navbar fixed */
top: 45px; /* Position it right below #top */
z-index: 999; /*

/* z-index: 1000; 
position: fixed;
top: 0; */

}


#top{

  background-color:    #fcdb03;
height: 45px;
position: fixed;
width: 100%;
z-index: 1000; 

}

  
#icon1{
  
  line-height: 45px;
  font-size: 13px;
  }
  
  #icon2{
  
    font-size: 13px;
    margin-left: 30px;
    }
    
  
  #mob{
  color:  rgb(248, 69, 99);
  margin-left: 40px;
  }
  
.fa-duotone{
    font-size: 12px;
    margin-left: 730px;
  
  }
  
  #userlog{
  text-decoration: none;
  list-style: none;
  color:black;
  font-weight: 333px;
  font-size: 15px;
 
  }
  

#slide1{

height: 520px;
 /* width: 1400px; */
margin-top:120px;

}


#caption0{
  margin-top: -300px;
  font-family: 'Fredoka' ,sans-serif;
  font-size:35px;
}

#caption2{
font-weight:bold;  

}



@media(max-width:1350px){


#top{

display: none;

}

#icon1{


display: none;
}
#icon2{


display: none;
}
#navbar2{

top:0px;
}


#slide1{
margin-top:0px;  

}
}



#Logo{


height: 70px;
width:70px;
border-radius: 10px;


}


#head{

margin-left: 300px;

/* margin-left: 400px; */

}

 

#head2{

   padding: 20px;
font-weight: bold;
font-size: 15px;
} 



@media (max-width:993px) {

#head{


  margin-left: 0;

}

}

/*    
@media (max-width:299px) {

#head{




  margin-top: -20px; 

}

}
*/

@media (max-width:238px) {

#head{

  margin-top: -5px;
  
}

#head2{
 font-size: 13px;

}
}

#button1{
  
  
  background-color: rgb(247, 122, 142);
  font-family: "Roboto", sans-serif;
  
  border-radius: 5px;
  height: 40px;
  font-size: 14px;
  color: white;
  width: 120px;
  
  margin-left: 10px;
  cursor: pointer;
  
  /* position: absolute; */
  margin-top: 15px;
  display:inline-block;
  cursor: pointer;
  border: none;
  position: relative;
  overflow: hidden;
  transition: background 0.3s;
  }
  
  
  #button1::before {
    content: '';
    position: absolute;
    color:rgb(89, 89, 252);
    top: 0;
    left: 50%;
    width: 100%;
    height: 100%;
    background:  rgb(248, 69, 99);
    
    transition: transform 0.3s;
    transform: translateX(-100%);
    z-index: 1;
    }
    
    #button1:hover::before {
    
    transform: translateX(0);
    background-color: #fcdb03;
    transition: .5s;
    
    
    }
    
  
  
  #button1 a {
    position: relative;
    z-index: 2;
    
  text-decoration: none;
  outline-style: none;
  box-shadow: none;
  outline: none;
  color:white
  }
  
  #border::after{
  
  
  content: "";
  display: block;
  width: 0%;
  height: 2px;
  background-color: palevioletred;
  transition: width .5s;
  margin-top: -3px;
  
  
  }
  

#border:hover::after{

width: 100%;
transition: width .5s;

}

#dropbox{
  margin-top: -2px;
}



#ring{

color: yellow;
font-size: 20px;
line-height: 80px;
/* margin-left: 100px; */
position: relative;
/* margin-left: 250px; */

/* margin-left: 540px; */
margin-left: 170px;
/* margin-left: 230px; */
}




@media(max-width:1329px){
  
  #button1{
  
  display: none;
  
  }
  
  #ring{
  
   display: none;
  
  
  }
  
  
  }
  

@media(max-width:991px) {
#border:hover::after{

  display: none;
}
.nav-item.dropdown .dropdown-toggle::after {
  display: none; 
}
}




#head3{
 
 padding: 20px;

font-size: 16px;
} 


#bt{
 border: 0px;
 /* padding: 11px 23px; */
 color: white;
 background-color:  rgb(247, 122, 142);
 width: 100%;
 text-decoration: none;  
 list-style: none;
 font-family: 'Fredoka' ,sans-serif;
 align-items: center;
 height: 30px;
 margin-left: auto;
}

@media (max-width: 991px) {
#bt {
 display: block; 
}


}



.carousel-inner{

z-index: -1;
width: 100%;

}

.nav-item{

background-color: white;

z-index: 1;

}

#contbox {

  
	width: 950px;
	margin: 80px auto;
	/* color: white; */
	line-height: 1.5;
}



.text-center {
	text-align: center;
}

.content {
	display: flex;
	margin-top: 50px;
}

.icon {
	/* background-color: white; */
	border-radius: 30px;
	padding: 15px;
	vertical-align: top;
   height: 60px;
   width: 60px;
   margin-top: -10px;
}

.contact-info {
	display: inline-block;
	padding: 4px 20px 0px 20px;
}

.address-line {
	margin-top: 40px;
}

.col-1 {
	width: 530px;
}

/* .col-2 {
	
   width: 40%;
  background-color: white;
  opacity: .8;
  border-radius: 10px;
} */


.col-2 {
	
  width: 40%;
 /* background-color: rgb(66, 63, 63);
  */
 /* opacity: .8; */
 border-radius: 10px;
 /* background-color: rgb(221, 215, 215); */
 background-color:rgb(247, 122, 142);
 /* margin-left: 40px; */
}
.form-container {
	color: #000;
	padding: 30px;
  
}

h2{
  padding:20px;
  margin-top:-20px;
  font-size:22px;
  font-family: "Roboto", sans-serif;

}
.contact-info-title {
	color: #01bdd4;
}

.form-row {
	padding-bottom: 30px;
}

.form-control {
	width: 100%;
	border: none;
	border-bottom: 1px solid #000;
}

.send-btn {
	border: 0px;
	padding: 9px 26px;
  font-family: "Roboto", sans-serif;

	/* background-color: #01bdd4; */
  /* background-color:rgb(247, 122, 142); */
	color: white;
   background-color: #1d1d1d;
   
}


#log{
  border: 0px;
	padding: 11px 23px;
	/* background-color: #01bdd4; */
  /* background-color:rgb(247, 122, 142);; */
	color: white;
  background-color: #1d1d1d;

  text-decoration: none;  
  font-family: "Roboto", sans-serif;
  margin-left: 10px;
}


@media (max-width: 274px) {

  #log{


padding: 5px 11px;
}


.send-btn{


padding: 3px 15px;
}


}



@media (max-width: 229px) {

#log{


padding: 5px 7px;
}

}

@media (max-width: 220px) {

#log{


padding: 5px 2px;
}


.send-btn{


padding: 3px 6px;
}


}


@media all and (max-width: 1024px) {
	#contbox {
		width: auto;
		padding: 30px;
	}
	 .col-1 {
		width: 360px;
	} 
  
}


@media all and (max-width: 991px) {
  .col-2 {
width: 50%;  	 

}
}


@media all and (max-width: 775px) {
 
  .content {
		display: block;
    
	}

  .col-2 {
margin-top: 40px; 
width: auto;
}
.col-1{
	width:100%;
}

}


#ftbox{

padding-top: 80px;
  
}
#ftspan{
  margin-top: -10px;
  
}


#ftspan2{
  margin-top: 40px;
}


#FootPara{

  font-size: 14px;
  
  }
  
  #Office{
  
  font-size: 14px;
  
  }
  
  
  
  #Copyright{
  
  
  font-size: 14px;
  
  
  }
  
  #Office2{
  
  font-size: 14px;
  
  }
  
  
  #ft{
  
  width: 100%;
  
  } 

  
  
  footer{
  
  
  border-top-left-radius: 125px;
  background:linear-gradient(to right,#00093c,#2d0b00);
  height: 55vh;
  width: 100%;
  font-family: "Roboto", sans-serif;

/* 
  padding-top: 150px; */

  }
  
@media (max-width:1200px){

  footer{
  height: auto;
  
  }
}

  #move2:hover{
  
  background-color:burlywood;
  color: #2d0b00;
  border-radius: 50%;
  transform: rotate(360deg);
  transition: .8s;
  
  }
  
  
  
   @media (max-width:532px) {
    
     #icon4{
  
      display: none;
  
     }
   #Office2{
  
   margin-left: 10px;
  
  
   }
  
   }
  
  
   @media (max-width:327px) {
    
    #Office2{
 
       margin-left: 20px;
 
    }
  }

  
  
  @media (max-width:272px) {
    
    #Office2{
 
       margin-left: 60px;
 
    }
  }
  
  
  
  
  
  
  @media(max-width:327px){
  
  #FootPara{
  
  margin-right: 60px;
  
  font-size: 12px;
  
  }
  #Office2{
  
  margin-right: 35px;
  
  } 
  
  
  }
  
  
  @media (max-width:272px) {
    
    #topic2{
  
  
     font-size: 16px;
  
    }
  
    #topic1{
  
    font-size: 16px;
  
    }
    #FootPara{
      font-size: 10px;
  
  
  }
  
  #Office{
  
   font-size: 10px;
  
  }
  #Office2{
  
    font-size: 10px;
    margin-right: 70px;
  }
  
  
  
  #Copyright{
  
  
    font-size: 10px;
    
    
    }
  }
  
   
  @media (max-width:327px) {
    
  
    #FootPara{
  
      
      margin-left: 50px;
    }
    
  }
  
  
  
     
  @media (max-width:245px) {
    
  
    .fab{
  
      font-size: 16px;
    
      }
  
  
    }


  
  @media (max-width:224px) {
    
  
    #topic1{
  
      font-size: 13px;
    
      }
  
    #topic2{
  
      font-size: 13px;
     
    }
    
    .fab{
  
      font-size: 15px;
    }
  
  
  }  
  @media (max-width:218px) {
  
   #Office2{
  
   margin-right: 70px;
  
  
   }
  
   
    #topic1{
    
     margin-right: 10px;
     margin-top: 10px;
    
    }
    
  } 
  


@media all and (max-width: 500px) {
	#contbox {
		padding: 10px;
	 /* width: 100%; */
  }

  .col-2{

    width: auto;
  }
}


@media (max-width: 400px) {

  
#contacthead{
font-size: 20px;

}
#contctpara{

  font-size: 15px;

}

}




@media (max-width: 330px) {

#contctpara{

  font-size: 12px;

}


}


@media (max-width:224px) {
  
  #navbar2{

    width: 110%;
  
  }
  
#contctpara{

font-size: 10px;

}

}


#map0{
border-radius: 20px;
margin-top: 10px;
/* border: 5px solid yellow; */

}
#maphead{
  margin-top: -70px;
  font-family: "Roboto", sans-serif;

}




@media (max-width:999px) {

#map0{
width: 100%;;
}
}










@media(max-width:206px){

#topic1{

 margin-left: 30px;
 margin-top: 20px;

}
}  


 



</style>

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
              <a href="./user_logout.php" id="bt" class="d-lg-none text-center">Logout</a>
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

      
           <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
           
            <img src="./Images/contactimg.jpg" class="d-block w-100" alt="..." id="slide1">
            <!-- <img src="./imgcontact.jpg" class="d-block w-100" alt="..." id="slide1">
             -->
            <div class="carousel-caption d-md-block">
                <h1 id="caption0">Contact Us</h1>
                <p id="caption2"> Reach Out & Taste the Difference! </p>
              </div>
          
          </div>

          </div>
          </div>
<br><br><br>

         <div class="container" id="contbox">
   
        <div class="content">
        <div class="col-1">
        <div class="address-line">
        <img alt="location" src="./Images/location_53876-25530.avif" class="icon">
        <div class="contact-info">
         <div class="contact-info-title">Address</div>
         <div>1002 West 5th Ave,</div>
          <div>Alaska, New York,</div>
          <div>55060.</div>
          </div>
          </div>
          <div class="address-line">
          <img alt="location" src="./Images/phone.avif" class="icon">
          <div class="contact-info">
          <div class="contact-info-title">Phone</div>
          <div>12523-4566-8954-8956.</div>
          </div>
          </div>
          <div class="address-line">
            <img alt="location" src="./Images/mail.avif" class="icon">
            <div class="contact-info">
              <div class="contact-info-title">Email</div>
              <div>contactemail@gmail.com</div>
            </div>
          </div>
        </div>
        <div class="col-2">
          <form action="./Contact.php" method="post">
    
            <div class="form-container">
              <h2 class="text-center">Connect with Us:<br> Let’s Talk Food!</h2>
            
              <div class="form-row">
                <label>Email</label>
                <div>
                  <input type="email" name ="email" placeholder="Enter email"  required class="form-control" value ="" id="exampleInputEmail1">
          
                </div>
              </div>

              <div class="form-row">
                <label>Password</label>
                <div>
                  <input type="password" name ="password" placeholder="Enter Password"  required class="form-control" value ="" id="exampleInputPassword1">
          
                </div>
              </div>

              <div class="form-row">
              <label>Type your message...</label>
           <div>
            <input type="textbox" name ="textbox" placeholder="Your feedback" required class="form-control" value ="" id="exampleInputName1">
          </div>
         </div>
        
        <button type="submit"class="send-btn" name= "submit"value="Send" id="submit1">Submit</button>
        
         <a href="user_logout.php" id="log">logout</a>
        </div>
               </form>
       </div>
       </div>
      </div>
      
<div class="container">
  
  <div class="row">
    <div class="col-12">
        <h3 id="maphead">Find Us</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509583!2d144.95373631531598!3d-37.81627997975103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f3c1b43%3A0x9cd10ec2f67e5e6e!2sWanderlust%20Travel%20Office!5e0!3m2!1sen!2sau!4v1615669038850!5m2!1sen!2sau" width="50%" height="400"  allowfullscreen="" loading="lazy" id="map0"></iframe>
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
  </script>


       
</body>
       

</html>


