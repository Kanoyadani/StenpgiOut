function toggleSidebar() {
  var sidebar = document.getElementById("mySidebar");
  var mainContent = document.getElementById("main");
  
  if (sidebar.style.left === "-250px") {
      sidebar.style.left = "0";
  } else {
      sidebar.style.left = "-250px";

  }
}


// AD SLIDE

document.addEventListener("DOMContentLoaded", function() {
  const previous = document.querySelector('.previous');
  const next = document.querySelector('.next');
  const images = document.querySelector('.slider-carousel').children;
  const totalImages = images.length;
  let currentIndex = 0;


  // Event Listeners to previous and next buttons
  previous.addEventListener('click', () => {
    previousImage()
  })

  next.addEventListener('click', () => {
    nextImage();
  })

  setInterval(()=>{
    nextImage();
  },10000);

  // Function to go to next Image
  function nextImage(){

    images[currentIndex].classList.remove('main');
    if(currentIndex == totalImages-1){
        currentIndex = 0;
      }
      else{
        currentIndex++;
      }

    images[currentIndex].classList.add('main');
    
  }

  // Function to go to previous Image
  function previousImage(){

    images[currentIndex].classList.remove('main');
    if(currentIndex == 0){
        currentIndex = totalImages-1;
      }
      else{
        currentIndex--;
      }

    images[currentIndex].classList.add('main');

  }
});


    