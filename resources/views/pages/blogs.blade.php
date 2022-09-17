{{-- <?php $title = 'Semikolan Blogs | Homepage'; ?> --}}

@extends('layouts.app')

@section('content')
<!-- header starts -->
<header>
    <div class="absolute-content">
      <h1>Our Blogroom</h1>
      <form action="{{route('search')}}">
        <div class="search-form-wrapper">
          <div class="search-icon">
            <img src="{{ 'public/images/new_img/header-images/Search-06.png' }}" alt="" />
          </div>
          <input name="q" type="search"  placeholder="Search" aria-label="Search" />
          <div class="search-btn-wrapper">
            <button type="submit" class="search-btn">Serch</button>
          </div>
        </div>
      </form>
      <div class="categories-list">
        <div class="category">
          <button class="btn-category">Adult</button>
        </div>
        <div class="category">
          <button class="btn-category">Men</button>
        </div>
        <div class="category">
          <button class="btn-category">Entropenour</button>
        </div>
        <div class="category">
          <button class="btn-category">women</button>
        </div>
      </div>
    </div>
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="{{asset('public/images/new_img/profile1.jpg')}}" alt="" class="card-img" />
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="{{asset('public/images/new_img/profile2.jpg')}}" alt="" class="card-img" />
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="{{asset('public/images/new_img/profile3.jpg')}}" alt="" class="card-img" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-white-line">
      <img src="{{ 'public/images/new_img/header-images/bottom_white.png' }}" alt="" />
    </div>
  </header>
  <script src="{{ asset('public/js/swiper-bundle.min.js') }}" ></script>
    <script src="{{ asset('public/js/script.js') }}"></script>
  <!-- header ends -->
@endsection