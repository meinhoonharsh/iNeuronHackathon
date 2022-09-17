{{-- <?php $title = 'Semikolan Blogs | Homepage'; ?> --}}

@extends('layouts.app')

@section('content')
    <div class="text-center bg-image"
        style="
      background-image: url('/public/img/bg/post-bg{{ rand(0, 7) }}.jpg');
      /* min-height: 300px; */
    ">
        <div class="p-5 mask" style="height:100%;background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3 display-4" style="font-weight:bold">{{ $title1 }}</h1>
                    <h4 class="mb-3">{{ $title2 }}</h4>

                </div>
            </div>
        </div>
    </div>
    <div style="background:var(--darkestShade); color:#fffa; padding: 50px 0;">

        <div class="container py-5">
            <div class="row">
                @foreach ($blogs as $blog)
                    <a class="my-4" href="{{ route('blog', ['slug' => $blog->slug]) }}"
                        style="color:#fffa; text-decoration:none ;">
                        <div class="col-12 mx-auto row" style="border:3px solid #fff7;">
                            <div class="col-md-5 p-0">
                                <img class="w-100" src="{{ $blog->image }}" alt="Card image cap"
                                    style="transform:scale(1.04)">
                            </div>
                            <div class="col-md-7 d-flex flex-column align-items-start justify-content-center py-md-0 py-3"
                                style="padding:0 5%";>
                                <h2 class="">{{ $blog->title }}</h2>
                                <p>{!! str_replace('&nbsp;', ' ', substr(strip_tags($blog->content), 0, 260)) !!}...</p>
                                <p class=""> By {{ $blog->user->name }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
                {{-- @endfor --}}


            </div>


            <ul class="pagination">
                <li class="{{ $blogs->currentPage() == 1 ? ' disabled' : '' }}">
                    <a href="{{ $blogs->url(1) }}">Previous</a>
                </li>
                @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                    <li class="{{ $blogs->currentPage() == $i ? ' active' : '' }}">
                        <a href="{{ $blogs->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="{{ $blogs->currentPage() == $blogs->lastPage() ? ' disabled' : '' }}">
                    <a href="{{ $blogs->url($blogs->currentPage() + 1) }}">Next</a>
                </li>
            </ul>
        </div>
    </div>

    @include('modals.subscribe')
@endsection
