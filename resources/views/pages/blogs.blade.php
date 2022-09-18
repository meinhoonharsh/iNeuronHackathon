{{-- <?php $title = 'Genesis Blogs | Homepage'; ?> --}}

@extends('layouts.app')

@section('content')
    <style>
        .blog-card {
            box-shadow: 0 0 100px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
    <div class="text-center bg-image" style="
background-image: url('/public/img/bg/post-bg{{ rand(0, 7) }}.jpg');
">
        <div class="p-5 mask"
            style="height:100%;background-color: rgba(0, 0, 0, 0.6);
        padding-top:calc(110px + 3rem) !important;">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3 display-4" style="font-weight:bold">{{ $title1 }}</h1>
                    <h4 class="mb-3">{{ $title2 }}</h4>

                </div>
            </div>
        </div>
    </div>
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
                    <p class="no-of-vews">
                        <img src="" alt="">
                        {{ viewcount($blog->id) }}
                    </p>
                    <p class="no-of-likes">
                        <img src="" alt="">
                    </p>
                    <p class="read-more">
                        <a href="{{ route('blog', ['slug' => $blog->slug]) }}">Read More</a>
                    </p>
                </div>
            </div>
        @endforeach

    </div>

    {{-- Create Pagination Buttons --}}
    <div class="d-flex justify-content-center mb-4">
        <a href="{{ $blogs->previousPageUrl() }}"
            class="btn btn-primary {{ $blogs->onFirstPage() ? 'disabled' : '' }}">Previous</a>
        <a href="{{ $blogs->nextPageUrl() }}"
            class="btn btn-primary {{ $blogs->currentPage() == $blogs->lastPage() ? 'disabled' : '' }}">Next</a>
    </div>

    <style>
        /* Navigation Buttons */
        .btn {
            background-color: #fff;
            color: #000;
            border: 1px solid #000;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 0;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #000;
            color: #fff;
        }

        .btn.disabled {
            background-color: #ccc;
            color: #666;
            cursor: not-allowed;
        }
    </style>

    {{-- bloges listing end heair --}}
@endsection
