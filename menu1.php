<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>FOOD FUSION || MENU </title>
   <link rel="icon" sizes="64×64" href="./Images/logo0.png">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="script.js"></script> -->

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


/* 
body {
  margin-top: 125px; 
}  */

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

    margin-left: 30px;
  
  font-size: 13px;
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


#image{

margin-left: 120px;
margin-top:120px;
}

@media(max-width:1200px){


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


#image{
width: 100%;
margin-left: 0px;
margin-top:80px;
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
font-family: 'Fredoka',sans-serif;


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

/* transform: translate(-15%); */

}


#button1 span {
position: relative;
z-index: 2;

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


#ring{

color: yellow;
font-size: 20px;
line-height: 80px;

position: relative;

margin-left: 170px;

}




#dropbox{
margin-top: -2px;
}






@media(max-width:1200px){

#button1{

display: none;

}

#ring{

 display: none;


}


}




#head3{
 
 padding: 20px;

font-size: 16px;
} 


 
@media (max-width: 991px) {
#log {
 display: block; 
}


}

#log{
 border: 0px;
 /* padding: 11px 23px; */
 color: white;
 background-color:  rgb(247, 122, 142);
 /* width: 50%; */
 text-decoration: none;  
 list-style: none;
 font-family: 'Fredoka' ,sans-serif;
 align-items: center;
 width: 100%;
 height: 30px;
 margin-left: auto;
}



.carousel-inner{

z-index: -1;
width: 100%;

}

.nav-item{

background-color: white;

z-index: 1;

}

 

#headingabout{

/* font-family: "Fredoka",sans-serif; */
font-family: "Roboto", sans-serif;

font-weight: bold;
font-size: 40px;

}


#line{
                
                 
  border-width: 2px;
      border-radius: 10px;
  background-color:yellow;              
   height: 6px;
}





@media (max-width:357px) {

#headingabout{
margin-top: -70px;
 font-size: 30px;
  
}
}  

#steak{

height: 440px;
width: 400px;

}

#clickbtn{


background-color: rgb(247, 122, 142);

border-top-right-radius: 20px;
border-bottom-left-radius: 20px;

/* border-radius: 15px;
 */
height: 45px;
font-size: 17px;
color: white;

width: 120px;
margin-left: 90px;
cursor: pointer;
/* position: absolute; */
margin-top: 10px;
font-family: "Roboto", sans-serif;

display:inline-block;
cursor: pointer;
border: none;
position: relative;
overflow: hidden;
transition: background 0.3s;
}


#clickbtn::before {
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

#clickbtn:hover::before {

transform: translateX(0);
background-color: #fcdb03;
transition: .5s;

/* transform: translate(-15%); */

}


#clickbtn span {
position: relative;
z-index: 2;

}













#rupee{


  color: red;
  margin-left: 20px;
  font-size: 17px;
  font-weight: bold;
  margin-top: -5px;
  font-family: "Fredoka", sans-serif;

  position: absolute;
  
  }
  
  #Dessert{

    font-family: "Fredoka", sans-serif;
    /* display: block; */
    font-weight: bold;
    font-size:30px;
    }
    
    
    #Dessert2{
    
    font-family: "Fredoka", sans-serif;
    
    
    
    }
    
    
    
     
@media (max-width:991px) {


#box{
  
margin-top: -70px;

}

#steak{
margin-left: 50px;


}

#clickbtn{

 margin-left: 180px;

}

#Dessert{
font-size:30px;

}
}
          
        
@media (max-width:575px) {


#steak{
  
      height: 300px;
       width: 300px;
       margin-left: 130px;
  
    }

    
#clickbtn{

  margin-left: 200px;

 }
    #rupee{

       font-size: 15px;
       margin-top: 1px;
       /* display: block;
     */
      
      }
      
#Dessert{
font-size:25px;

}
     #Dessert2{

      font-size: 15px;
    
    }
  
}


        
@media (max-width:550px) {


#steak{
  
       margin-left: 100px;
  
    }

    
#clickbtn{

  margin-left: 190px;

 }
}

@media (max-width:502px) {



#rupee{

display: none;  
}

}



                      
@media (max-width:487px) {


#steak{
  
    
       margin-left: 80px;
  
    }

    
#clickbtn{

  margin-left: 180px;
  width: 110px;
  font-size: 18px;

 }
 
#Dessert{
font-size:22px;

}


}

@media (max-width:457px) {


#steak{
  
    
       margin-left: 70px;
  
    }

    
#clickbtn{

  margin-left: 160px;

 }
}


@media (max-width:430px) {

#rupee{

display: inline;
}

#steak{
  
    
margin-left: 60px;

}


} 




@media (max-width:425px) {

#steak{
   
     
 margin-left: 50px;

}

#clickbtn{

margin-left: 140px;


} 

}

@media (max-width:377px) {


#steak{
  
       height: 200px;
       width: 200px;
       margin-left: 80px;
  
    }

    
#clickbtn{

  margin-left: 140px;
  width: 90px;
  font-size: 15px;
  height: 30px;

 }
}


@media (max-width:357px) {


#steak{
  
       height: 200px;
       width: 200px;

       margin-left: 60px;
  
    }

    
#clickbtn{

  margin-left: 120px;

 }
}


@media (max-width:321px) {


#steak{
  
       margin-left: 50px;
  
    }

    
#clickbtn{

  margin-left: 110px;

 }
}




@media (max-width:295px) {


#steak{
  
       height: 200px;
       width: 200px;
       margin-left: 0px;
  
    }

    
#clickbtn{

  margin-left: 50px;

 }
}

@media (max-width:262px) {

#rupee{

margin-top: 1;
 position: relative;

}

#Dessert{
font-size:19px;

}

#Dessert2{
font-size:12px;

}
}

@media (max-width:251px) {


    
#clickbtn{

  margin-left: 70px;

 }
} 




@media (max-width:225px) {


#steak{
  
       height: 170px;
       width: 170px;
      
    }
  
    
#clickbtn{

  margin-left: 50px;

 }
  }





 .card-container{
  display: flex;
  justify-content: center;
  margin-top: 100px;
  flex-wrap: wrap;
   
  
  }
  
  .card2{
      width: 300px;
  background-color: #f0f0f0;

  border-radius: 10px;
  margin: 30px;
  /* overflow: hidden; */
  box-shadow: 0px 4px 8px 0 rgba(0,0,0,0.2);
  
  }
  

  .card2 img{
      width: 100%;
      height: 220px;
      border-radius: 5px;
     
  }
  
  /* .card2:hover{

    box-shadow: 0px 8px 16px 0 rgba(0,0,0,0.2);

  } */

  .card-coontent{
  padding: 10px;

  }

  
  .card-container:hover .card-coontent { 
  
    height: 100%;
    

  }

  
  
  .card-coontent h1{
  font-size: 25px;
  margin-bottom: 9px;
  /* margin-left: 30px; */
  font-family: "Fredoka",sans-serif; 
  /* font-weight: bold; */
  color: black;
  text-align: center;
  
  }


  /* .card2:hover{
      color: white;
      transition: .7s;
      transform: scale(1.1);
      box-shadow: 0px 4px 8px 0 rgba(0,0,0,0.2);
  } */



  .primary:hover{
    color: #024c9b;
    
    padding-bottom: 10px;
    cursor: pointer;
    text-decoration: underline;
}








@media(max-width:345px){


  .card-coontent h1{


    font-size: 25px;
     /* margin-left: 70px;
  */
    }
 
  
}





@media(max-width:260px){


  .primary{


    font-size: 15px;
     
  }

 #button0{

  width:100px;
  height: 20;

  font-size: 12px;

 }
}

@media(max-width:240px){


  .card-coontent h1{


    font-size: 20px;
     /* margin-left: 20px;
   */
    }


    .primary{


      font-size: 10px;
       
    }
 
 
}

.carousel-container0 {
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
}

.card-container0 {
  display: flex;
  transition: transform 0.5s ease;
}

.card0 {
  min-width: 300px;
  margin: 10px;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.card-content0 h1 {
  
 
font-size: 25px;
  margin-bottom: 9px;
  /* margin-left: 30px; */
  font-family: "Fredoka",sans-serif; 
  /* font-weight: bold; */
  color: black;
  text-align: center;
  

}

.card-content0 {
  padding: 15px;
}

#imgcover{
  width: 100%;
      height: 220px;
      border-radius: 5px;
     
}
.order-button-1 {
  /* background-color: #ffcc00; */
  border: none;
  width:100px;
  height: 20;

  font-size: 12px;

  /* padding: 10px 15px; */
  cursor: pointer;
}


.primary0:hover{
    color: #024c9b;
    
    padding-bottom: 10px;
    cursor: pointer;
    text-decoration: underline;
}

.arrow {
  background-color: transparent;
  border: none;
  font-size: 30px;
  cursor: pointer;
  z-index: 1;
}

.left {
  position: absolute;
  left: 10px;
}

.right {
  position: absolute;
  right: 10px;
}


@media (max-width: 768px) {
  .card0 {
    min-width: 200px;
  }
}



#bestsolution{

background-color:rgb(248, 69, 99);
width: 100%;
height: 80vh;
border-top-left-radius: 10px;
border-bottom-left-radius: 10px;
/*   
margin-right: 210px;
  */
/* border-radius: 350px;
 */

border-top-right-radius:300px;
border-bottom-right-radius: 300px;
}




#headingabout3{
font-family: Arial, Helvetica, sans-serif;
font-weight: bold;

  /* margin-right: 100px; */

  color: white;
}


#headingabout3:hover{

 opacity: .7;
 transition: .5s;

}

#headingabout2{


 color:white;
 font-weight: bold;
 font-size: 20px;
 opacity: .5;
 /* margin-left: 70px; */
 

}


#anchor{

text-decoration: none;
outline: none;

}

#service{

width: 130px;
height: 130px;
 border-radius: 100px;
position: relative;
}

#service2{

text-align: center;
font-size: 22px;
color: white;
font-family: "Fredoka", sans-serif;

}


#service3{


     text-align: center;
     font-size: 15px;
    
   
    }

    
#service:hover{

border: 5px solid yellow;
transition: .7s;
transform: rotate(360deg);

}



#arrow{
 position: absolute;
 margin-top: -460px;
 margin-left: 820px;
 
animation: imagechange infinite 5s;
} 


@keyframes imagechange {
  

    from { transform: scale(0.5); opacity: 0; }
    to { transform: scale(1); opacity: 1; }


  }


#service5{

height: 400px;
width: 400px;
border-radius: 100%;
margin-top: -110px;

}


#showVideoButton{


position: relative;
width:80px;
display: flex;
justify-content: center;
align-items: center;
margin-left: 930px;
z-index: 1;
margin-top: -320px;
height: 80px;

box-shadow: 0 15px 25px rgb(248, 69, 99);
background-color: rgb(247, 122, 142);
border-radius: 50%;
border: 1px solid yellow;
animation: circle infinite 5s; 
}


@keyframes circle {
  



from { transform: scale(0.5); opacity: 0; }
to { transform: scale(1); opacity: 1; }


}

#showVideoButton::before{

content: '';
position: absolute;
border: 25px solid #f0f0f0;
border-top: 15px solid transparent;
border-bottom: 15px solid transparent;
border-right: 0px solid transparent;
transform: translateX(5px);
} 

#myVideo {
display: none;
position: absolute;
 width: 70%;
  margin-top: -300px;
  left: 14%;
 display:flex;   
 align-items: center;
 z-index: 1;

}



.fa-xmark{

margin-top: -290px;
margin-left:1090px;
font-size:20px;
color:white;
position: absolute;
opacity: .5;
z-index: 1;
}

.fa-xmark:hover{

transform: rotate(360deg);
transition: .7s;

}


@media (max-width:1100px) {


#showVideoButton{

margin-left: 770px;
margin-top: -270px;
}

#arrow{
margin-left: 650px;
margin-top: -400px;
}
}




@media (max-width:1100px) {


#bestsolution{

 height: auto;



}
  
#service5{
 width:300px;
 height: 300px;

}
}


@media (max-width:1048px) {


#service5{
 width:160px;
 height: 160px;
 margin-top: -20px;
 margin-right: 50px;
 
}

#showVideoButton{
display: none;

}

  #arrow{
   display: none;
  }
  
.fa-xmark{
  display: none;

}

}

@media (max-width:991px) {


#bestsolution{

    border-radius: 0px;
    
    }



#service5{

/* margin-left: 50px; */
/* 
width: 160px; */
margin-top: -20px;
margin-left: 50px;
/* height:160px; */

}


}


@media (max-width:747px) {


#service5{

  margin-top: -10px;
  width: 300px;
  height: 300px;

}


    


}



@media (max-width:310px) {


#service5{

  margin-top: 10px;
 
  width: 200px;
  height: 200px;

}


}


@media (max-width:250px) {


#service5{

  margin-top: -10px;
 
  width: 150px;
  height: 150px;

}


}



@media (max-width:244px) {


#service5{

 display: none;
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
  font-family: "Roboto", sans-serif;

  height: 55vh;
  width: 100%;
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
                  <li><a class="dropdown-item" href="./menu3.php"   id="border">Drink & Beverages</a></li>
                </ul>
              </li>
            
               <li class="nav-item"id="head2">
                 <a class="nav-link  text-dark" href="./services.php" id="border" tabindex="-1" aria-disabled="true">Services</a>
               </li>
     
               <li class="nav-item"id="head2">
                 <a class="nav-link  text-danger" href="./contact.php" id="border" tabindex="-1" aria-disabled="true">Contact</a>
               </li>
               
               <li class="nav-item" id="head3">
              <a href="./user_logout.php" class="d-lg-none text-center" id="log">Logout</a>
              </li>

            </ul>
                
 
 
             <form class="d-flex">
               
             <i class="fas fa-bell" id="ring"></i> 
             
     <button  id="button1"><span>Reserve A Table</span></button>
 
            </form> 
  
  
 
           </div>
         </div>
       </nav>
      
      </header> 
      
      
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
           
          
            
           <img src="./Images/cover0.png"  alt="..." width="80%" id="image">
  

          </div>

          </div>
          </div>
<br><br><br><br>




<section class="about my-5">
         
  <div class="container">
    <div class="row text-center">
  <div>

       <h1 class="text-center" id="headingabout">Visit Our Meals</h1>
       <div class="w-25 m-auto" id="line">
       </div>
      </div>
 </div>
</section> 

<br><br><br>

         
  

       <div class="container" id="box">
       <div class="row align-items-center">
     
        <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-start" id="bottom">
          
     
        <img src="./Images/garlic2.jpg" alt="" id="steak">
 
        <button  class="btt btn-warning" onclick="selectimg()" id="clickbtn"><span>Click here</span></button>

        </div>
     
      <div class="col-lg-6 col-md-12">
          <h1 class="display-4" id="Dessert">Steak</h2>
          <p id="Dessert2">This is a lead paragraph to give a brief overview about menu  <span id="rupee">Rs.300</span>
          </p>

          <hr>
         
          <h2 id="Dessert">Four Chease Garlic Bread</h2>
           <p id="Dessert2">
            This is a lead paragraph to give a brief overview about menu <span id="rupee">Rs.300</span> 

            </p>
         <hr>
         
         <h2 id="Dessert">Arrabiata Pasta</h2>
          <p id="Dessert2"> 
          
            This is a lead paragraph to give a brief overview about menu <span id="rupee">Rs.300</span>

          </p>
            <hr>
          <h2 id="Dessert">Rastrami Roll</h2>
          <p id="Dessert2">
            This is a lead paragraph to give a brief overview about menu  <span id="rupee">Rs.300</span>

          </p>
         
     
  </div> 
  </div>
 
</div>


<br><br><br>

<section class="about my-5">
         
  <div class="container">
    <div class="row text-center">
  <div>

       <h1 class="text-center" id="headingabout">Grill Food Menu</h1>
       <div class="w-25 m-auto" id="line">
       </div>
      </div>
 </div>
</section> 

                    
  <div class="card-container">
  <div class="card2">
  
  <img src="./Images/grill 5.jpg" alt="yacht">
  
  <div class="card-coontent">
  
  <h1>Grill Food</h1>
      
 <button class="btn btn-warning" onclick="openDetailPage('grill5')" id="button0">Order Now</button><br>
    
  <a class="primary">See description</a>
 </div>
 </div>

    <div class="card2">
    <img src="./Images/grill6.jpg" alt="yacht">
    
    <div class="card-coontent">
    
    <h1>Grill Food</h1>
    
     <button class="btn btn-warning" onclick="openDetailPage('grill6')" id="button0">Order Now</button><br>
    
     <a class="primary">See description</a>

   </div>
   </div>
    

  <div class="card2">
  
  <img src="./Images/restaurant.jpg" alt="yacht">
  
  <div class="card-coontent">
    
    <h1>Grill Food</h1>
    <button  class="btn btn-warning" onclick="openDetailPage('restaurant')"id="button0">Order Now</button><br>
   
     <a class="primary">See description</a>
  
  </div>
  </div>


 <div class="card2">
  <img src="./Images/grill1.jpg" alt="yacht">
  <div class="card-coontent">
    <h1>Grill Food</h1>
    <button class="btn btn-warning" onclick="openDetailPage('grill1')" id="button0">Order Now</button><br>
     
    
     <a class="primary">See description</a>
  </div>
  </div>

<div class="card2">
  <img src="./Images/grill3.jpg" alt="yacht">
  <div class="card-coontent">
    <h1>Grill Food</h1>
    <button class="btn btn-warning" onclick="openDetailPage('grill3')" id="button0">Order Now</button><br>
   
             <a class=" primary">See description</a>

</div>
</div>
<div class="card2">
  <img src="./Images/gril8.avif" alt="yacht">
  <div class="card-coontent">
   
    <h1>Grill Food</h1>
    <button class="btn btn-warning" onclick="openDetailPage('gril8')" id="button0">Order Now</button><br>
   
     <a class=" primary">See description</a>
</div>
</div>

</div>

<br>

<section class="about my-5">
         
  <div class="container">
    <div class="row text-center">
  <div>

       <h1 class="text-center" id="headingabout">Italian Food</h1>
       <div class="w-25 m-auto" id="line">
       </div>
      </div>
 </div>
</section> 


<br><br>
 <div class="carousel-container0">
  <button class="arrow left" id="prev">&#10094;</button>
  
  <div class="card-container0">
    <div class="card0">
      <img src="./Images/Italian food2.jpg" alt="Delicious Italian pasta dish" id="imgcover">
      <div class="card-content0">
        <h1>Italian Pasta</h1>
        <button class="btn btn-warning" onclick="openDetailPage('Italian food2')" id="button0">Order Now</button><br>
        <a class="primary0" href="#">See description</a>
      </div>
    </div>
    <div class="card0">
      <img src="./Images/pasta2.avif" alt="Delicious Italian pasta dish" id="imgcover">
      <div class="card-content0">
        <h1>Italian Pasta</h1>
        <button class="btn btn-warning"onclick="openDetailPage('pasta2')"  id="order-button-1">Order Now</button><br>
        <a class="primary0" href="#">See description</a>
      </div>
    </div>
    <div class="card0">
      <img src="./Images/pasta.jpg" alt="Delicious Italian pasta dish" id="imgcover">
      <div class="card-content0">
        <h1>Italian Pasta</h1>
        <button class="btn btn-warning" onclick="openDetailPage('pasta')"id="order-button-1">Order Now</button><br>
        <a class="primary0" href="#">See description</a>
      </div>
    </div>
   
    <div class="card0">
      <img src="./Images/Italian food5.jpg" alt="Delicious Italian pasta dish" id="imgcover">
      <div class="card-content0">
        <h1>Italian Pasta</h1>
        <button class="btn btn-warning"onclick="openDetailPage('Italian food5')" id="order-button-1">Order Now</button><br>
        <a class="primary0" href="#">See description</a>
      </div>
    </div>

    <div class="card0">
      <img src="./Images/Italian food4.jpg" alt="Delicious Italian pasta dish"id="imgcover">
      <div class="card-content0">
        <h1>Italian Pasta</h1>
        <button class="btn btn-warning" onclick="openDetailPage('Italian food4')" id="order-button-1">Order Now</button><br>
        <a class="primary0" href="#">See description</a>
      </div>
    </div>
    <div class="card0">
      <img src="./Images/Italian food1.jpg" alt="Delicious Italian pasta dish"id="imgcover">
      <div class="card-content0">
        <h1>Italian Pasta</h1>
        <button class="btn btn-warning" onclick="openDetailPage('Italian food1')" id="order-button-1">Order Now</button><br>
        <a class="primary0" href="#">See description</a>
      </div>
    </div><div class="card0">
      <img src="./Images/Italian food2.jpg" alt="Delicious Italian pasta dish"id="imgcover">
      <div class="card-content0">
        <h1>Italian Pasta</h1>
        <button class="btn btn-warning"onclick="openDetailPage('Italian food2')" id="order-button-1">Order Now</button><br>
        <a class="primary0" href="#">See description</a>
      </div>
    </div>
    
  </div>

  <button class="arrow right" id="next">&#10095;</button>
</div>

<br>

<section class="about my-5">
         
  <div class="container">
    <div class="row text-center">
  <div>

       <h1 class="text-center" id="headingabout">South Asian Cuisine</h1>
       <div class="w-25 m-auto" id="line">
       </div>
      </div>
 </div>
</section> 
<div class="card-container">
  <div class="card2">
  
  <img src="./Images/desibite.png" alt="yacht">
  
  <div class="card-coontent">
  
  <h1>Spicy Food</h1>
      
 <button class="btn btn-warning"onclick="openDetailPage('desibite')" id="button0">Order Now</button><br>
    
  <a class="primary">See description</a>
 </div>
 </div>

    <div class="card2">
    <img src="./Images/desi3.jpg" alt="yacht">
    
    <div class="card-coontent">
    
    <h1>Spicy Food</h1>
    
     <button class="btn btn-warning" onclick="openDetailPage('desi3')"id="button0">Order Now</button><br>
    
     <a class="primary">See description</a>

   </div>
   </div>
    

  <div class="card2">
  
  <img src="./Images/desi0.jpg" alt="yacht">
  
  <div class="card-coontent">
    
    <h1>Spicy Food</h1>
    <button  class="btn btn-warning" onclick="openDetailPage('desi0')"id="button0">Order Now</button><br>
   
     <a class="primary">See description</a>
  
  </div>
  </div>


 <div class="card2">
  <img src="./Images/biryani2.jpg" alt="yacht">
  <div class="card-coontent">
    <h1>Spicy Food</h1>
    <button class="btn btn-warning"onclick="openDetailPage('biryani2')" id="button0">Order Now</button><br>
     
    
     <a class="primary">See description</a>
  </div>
  </div>

<div class="card2">
  <img src="./Images/desibite2.png" alt="yacht">
  <div class="card-coontent">
    <h1>Spicy Food</h1>
    <button class="btn btn-warning"onclick="openDetailPage('desibite2')" id="button0">Order Now</button><br>
   
             <a class=" primary">See description</a>

</div>
</div>
<div class="card2">
  <img src="./Images/food4.jpg" alt="yacht">
  <div class="card-coontent">
   
    <h1>Spicy Food</h1>
    <button class="btn btn-warning" onclick="openDetailPage('food4')" id="button0">Order Now</button><br>
   
     <a class=" primary">See description</a>
</div>
</div>

</div>




<br><br><br>
<br><br><br>

<div class="container" id="bestsolution">

<div>
<br>
    <span id="headingabout2">Easy Order In 3 Steps</span>
     
    <h1 id="headingabout3">How We Work</h1>

    </div>
     
    <br><br>
      <div class="row">
    
       <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 position-relative">
      <div class="d-flex justify-content-center">
  
     <img src="./Images/card.jpeg" alt="service"  class="img-fluid"   id="service">
     
   </div>
<br>
      <a href ="" alt="" id="anchor">
       <h3 id="service2">Explore Menu</h3>
      </a>
      <p id="service3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        

     </div>
    

     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 position-relative">
       <div class="d-flex justify-content-center">
   
      <img src="./Images/dish.png" alt="service"  class="img-fluid"   id="service">
      
    </div>
 <br>
       <a href="" alt="" id="anchor">
        <h3 id="service2">Choose A Dish</h3>
       </a>
       <p id="service3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
         

      </div>
    
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 position-relative">
       <div class="d-flex justify-content-center">
       
      <img src="./Images/car.jpg" alt="service"  class="img-fluid"   id="service">
     
     
    </div>
    <br>
 
       <a href="" alt=""id="anchor">
        <h3 id="service2">Place A Order</h3>
       </a>
       <p id="service3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
         
     
      </div>
       
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 position-relative">
        <div class="d-flex justify-content-center">
    
  
       <img src="./Images/delievery.jpg" alt="service"   id="service5">
       
       </div>
        </div>
 

</div> 


      </div>
       </div>

       
<div class="textbox">
 
 <img src="./Images/arrow.png" alt="" id="arrow">
</div>






<button id="showVideoButton"></button>

<video id="myVideo" width="600" controls>
 <source src="./Images/food.mp4" type="video/mp4">

 
</video>
<div>

<i class="fa-solid fa-xmark" id="hideVideoButton" id="cross"></i>

</div>



<br><br><br>
<br><br><br>

<br><br><br>


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

<script src="./script.js"></script>
</body>
</html>