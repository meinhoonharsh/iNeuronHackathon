{{-- <?php $title = 'Semikolan Blogs | Homepage'; ?> --}}

@extends('layouts.app')

@section('content')
    <!-- header starts -->
    <header>
        <div class="absolute-content">
            <h1>Our Blogroom</h1>
            <form action="{{ route('search') }}">
                <div class="search-form-wrapper">
                    <div class="search-icon">
                        <img src="{{ 'public/images/new_img/header-images/Search-06.png' }}" alt="" />
                    </div>
                    <input name="q" type="search" placeholder="Search" aria-label="Search" />
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
                                <img src="{{ asset('public/images/new_img/profile1.jpg') }}" alt=""
                                    class="card-img" />
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="{{ asset('public/images/new_img/profile2.jpg') }}" alt=""
                                    class="card-img" />
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="header-card-image">
                                <img src="{{ asset('public/images/new_img/profile3.jpg') }}" alt=""
                                    class="header-card-img" />
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

    <!-- header ends -->
    {{-- bloges listing starts heair --}}
    <div class="display-cards">
        {{-- <div class="blog-card">
            <div class="meta">
                <div class="photo"
                    style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)">
                </div>
                <ul class="details">
                    <li class="author"><a href="#">John Doe</a></li>
                    <li class="date">Aug. 24, 2015</li>
                    <li class="tags">
                        <ul>
                            <li><a href="#">Learn</a></li>
                            <li><a href="#">Code</a></li>
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="description">
                <h1>Learning to Code</h1>
                <h2>Opening a door to the future</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta
                    praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                <p class="read-more">
                    <a href="#">Read More</a>
                </p>
            </div>
        </div> --}}
        <div class="blog-card ">
            <div class="meta">
                <div class="photo"
                    style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-2.jpg)">
                </div>
                <ul class="details">
                    <li class="author"><a href="#">Jane Doe</a></li>
                    <li class="date">July. 15, 2015</li>
                    <li class="tags">
                        <ul>
                            <li><a href="#">Learn</a></li>
                            <li><a href="#">Code</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="description">
                <h1>Mastering the Language</h1>
                <h2>Java is not the same as JavaScript</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta
                    praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                <p class="read-more">
                    <a href="#">Read More</a>
                </p>
            </div>
        </div>
        <div class="blog-card ">
            <div class="meta">
                <div class="photo"
                    style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-2.jpg)">
                </div>
                <ul class="details">
                    <li class="author"><a href="#">Jane Doe</a></li>
                    <li class="date">July. 15, 2015</li>
                    <li class="tags">
                        <ul>
                            <li><a href="#">Learn</a></li>
                            <li><a href="#">Code</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="description">
                <h1>Mastering the Language</h1>
                <h2>Java is not the same as JavaScript</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta
                    praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                <p class="read-more">
                    <a href="#">Read More</a>
                </p>
            </div>
        </div>

    </div>

    {{-- bloges listing end heair --}}
@endsection
