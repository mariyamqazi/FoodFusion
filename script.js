
  const navbar = document.getElementById('navbar2');
  const topItem = document.getElementById('top');
  
  function handleScroll() {
    if (window.scrollY > 0) {
      navbar.classList.add('navbar-scrolled'); 
    } else {
      navbar.classList.remove('navbar-scrolled'); p
    }
  }
  
 
  window.addEventListener('scroll', handleScroll);
  


document.getElementById('showVideoButton').addEventListener('click', function toggleshowVideoButton() {
    var video = document.getElementById('myVideo');
    video.style.display = 'block';
    video.play();
});

document.getElementById('hideVideoButton').addEventListener('click', function togglehideVideoButton() {
    var video = document.getElementById('myVideo');
    video.style.display = 'none'; 
    hideVideoButton.style.display = 'none';
    video.pause();
    video.currentTime = 0; 
});
 


let images = ["./Images/steak1.jpg","./Images/steak3.jpg","./Images/garlic1.jpg","./Images/menu8.jpg","./Images/pasta.jpg","./Images/roll.jpg","./Images/roll2.jpg"]

function selectimg(){


    let index =Math.floor( Math.random() *images.length)


    document.getElementById("steak") .src = images[index]
    
    }




    const cardContainer0 = document.querySelector('.card-container0');
const cards = document.querySelectorAll('.card0');
let currentIndex = 0;
const totalCards = cards.length;

document.getElementById('next').addEventListener('click', () => {
  if (currentIndex < totalCards - 4) {
    currentIndex++;
    updateCarousel();
  }
});

document.getElementById('prev').addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateCarousel();
  }
});

function updateCarousel() {
  const cardWidth = cards[0].offsetWidth;
  cardContainer0.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
}
    

    
function openDetailPage(item) {
    
    window.location.href = `details.php?item=${item}`;
}


