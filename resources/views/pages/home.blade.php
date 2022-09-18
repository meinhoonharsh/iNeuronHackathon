{{-- <?php $title = 'Genesis Blogs | Homepage'; ?> --}}

@extends('layouts.app')

@section('content')
    <!-- header starts -->
    <header>
        <div class="absolute-content">
            <h1>Our Blogroom</h1>
            <hr>

            <form action="{{ route('search') }}">
                <div class="search-form-wrapper">
                    <div class="search-icon">
                        <img src="{{ 'public/images/new_img/header-images/Search-06.png' }}" alt="" />
                    </div>
                    <input name="q" type="search" placeholder="Search" aria-label="Search" />
                    <div class="search-btn-wrapper">
                        <button type="submit" class="search-btn">Search</button>
                    </div>
                </div>
            </form>
            <div class="categories-list">
                <div class="category">
                    <button class="btn-category">Sports</button>
                </div>
                <div class="category">
                    <button class="btn-category">Tech</button>
                </div>
                <div class="category">
                    <button class="btn-category">Entrepreneur</button>
                </div>
                <div class="category">
                    <button class="btn-category">Women</button>
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
                                <img src="{{ asset('public/img/bg/post-bg7.jpg') }}" alt="" class="card-img" />
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="{{ asset('public/img/bg/post-bg5.jpg') }}" alt="" class="card-img" />
                            </div>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="header-card-image">
                                <img src="{{ asset('public/img/bg/post-bg6.jpg') }}" alt=""
                                    class="header-card-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
        <style>
            .overlay {
                background: #0008;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 2;
            }
        </style>
        <div class="bottom-white-line">
            <img src="{{ 'public/images/new_img/header-images/bottom_white.png' }}" alt="" />
        </div>
        <div class="bottom-header-cardes">
            <div class="header-cardes-left"
                style="background-image: url('{{ $mvb->image }}');width:35%; background-size:cover;height:100%">
            </div>
            <div class="header-cardes-right" style="width:65%">
                <div class="most-views">
                    Trending
                </div>
                <a href="{{ route('blog', ['slug' => $mvb->slug]) }}">
                    <h2>{{ $mvb->title }}</h2>
                </a>

                <p>{!! str_replace('&nbsp;', ' ', substr(strip_tags($mvb->content), 0, 260)) !!}...</p>
                <div class="view-seo">
                    <img src="{{ asset('public/images/new_img/logo/UI_Help-06.png') }}" alt="">
                    <p>{{ $mvb->likes }}</p>
                    <img src="https://cdn.pixabay.com/photo/2016/12/18/11/04/eye-1915455_960_720.png" alt="">
                    <p>{{ viewcount($mvb->id) }}</p>
                </div>
                <p class="read-more-main">
                    <a href="{{ route('blog', ['slug' => $mvb->slug]) }}">Read More</a>
                </p>
            </div>
        </div>
    </header>

    <!-- header ends -->
    {{-- bloges listing starts heair --}}
    <div class="display-cards">
        @foreach ($blogs as $blog)
            <div class="blog-card ">
                <div class="meta">
                    <a href="{{ route('blog', ['slug' => $blog->slug]) }}">
                        <div class="photo" style="background-image: url('{{ $blog->image }}')">
                        </div>
                    </a>

                    <ul class="details">
                        <li class="author"><a href="#">{{ $blog->user->name }}</a></li>
                        <li class="date">{{ $blog->created_at->diffForHumans() }}</li>
                        <li class="tags">
                            <ul>

                                @php
                                    $tagArr = explode(',', $blog->tags);
                                @endphp
                                {{-- {{$tagArr =explode(',',json_encode($blog['tags']))}} --}}
                                @foreach ($tagArr as $tag)
                                    <li><a href="{{ url('/') }}">{{ $tag }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="description">
                    <a href="{{ route('blog', ['slug' => $blog->slug]) }}">
                        <h2>{{ $blog->title }}</h2>
                    </a>
                    <p>{!! str_replace('&nbsp;', ' ', substr(strip_tags($blog->content), 0, 260)) !!}...</p>
                    <div class="view-seo">
                        <img src="{{ asset('public/images/new_img/logo/UI_Help-06.png') }}" alt="">
                        <h5>{{ $blog->likes }}</h5>
                        <img src="https://cdn.pixabay.com/photo/2016/12/18/11/04/eye-1915455_960_720.png" alt="">
                        <h5>{{ viewcount($blog->id) }}</h5>
                    </div>
                    <p class="read-more">
                        <a href="{{ route('blog', ['slug' => $blog->slug]) }}">Read More</a>
                    </p>
                </div>
            </div>
        @endforeach

    </div>

    {{-- bloges listing end heair --}}
@endsection
