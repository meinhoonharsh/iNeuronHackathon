var swiper = new swiper(".slide-content", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });



  // navigation js
const nav = document.querySelector("nav");
const hamburger = document.querySelector(".hamburger");
const mobilemenu = document.querySelector(".mobilemenu");
const blackcover = document.querySelector(".black-cover");

window.onscroll = function() {myFunction()};
function myFunction() {
  if (document.body.scrollTop > 50 || document.      documentElement.scrollTop > 50) {
    nav.classList.add('white-nav');
  }
  else{
   nav.classList.remove('white-nav');
  }
}

function mobileMenu(){
    if(mobilemenu.classList.contains('show-mobilemenu')){
        mobilemenu.classList.remove('show-mobilemenu');
        blackcover.style.display = "none";
    }
    else{
        mobilemenu.classList.add('show-mobilemenu');
        blackcover.style.display = "block";
    }
}

// hamburger.addEventListener("click",mobileMenu);