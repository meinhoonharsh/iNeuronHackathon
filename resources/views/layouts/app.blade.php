<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.metatags')
    @include('layouts.gtags')
    @include('layouts.styles')
    <title>{{ $title ?? 'Semikolan Blogs | Never Stop Learning' }}</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
      crossorigin="anonymous"
    />
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/list.scss') }}" rel="stylesheet">
    
    @include('layouts.scripts')
</head>
<body>

  <div id="app">
    @include('flash')
    @include('components.header')
    @yield('content')
    @include('components.footer')
  </div>


  <script src="../../../public/js/app.js" ></script>
  <script src="../../../public/js/swiper-bundle.min.js" ></script>

  <script>
    <script src="https://kit.fontawesome.com/c5fe5e7547.js" crossorigin="anonymous">
  </script>
  <script/>
   function menuToggle() {
      const toggleMenu = document.querySelector(".menu-avtar");
      toggleMenu.classList.toggle("avtar-active");
    }

    var swiper = new Swiper(".slide-content", {
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

//this is test comment


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

  </script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</body>
</html>
