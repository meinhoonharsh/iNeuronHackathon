<?php
$title = $blog->title . ' | Genesis Blogs';
$keyword = $blog->tags . ' ';
$description = str_replace('&nbsp;', ' ', substr(strip_tags($blog->content), 0, 300)) . '...';
$imagepath = url($blog->image);
$published_time = $blog->created_at;
$modified_time = $blog->updated_at;

?>

@extends('layouts.app')

@section('styles')
@endsection
@section('content')
    <style>
        blockquote {
            border-left: 4px solid #eee9;
            padding-left: 2%;
            margin-left: 2%;
            border-radius: 5px
        }

        #social-links ul {
            padding-left: 0;
        }

        #social-links li {
            display: inline-block;
            margin-right: 1.4%;
        }

        .blogcontent * {
            color: #fffa;




            /* These are technically the same, but use both */
            overflow-wrap: break-word;
            word-wrap: break-word;

            -ms-word-break: break-all;
            /* This is the dangerous one in WebKit, as it breaks things wherever */
            word-break: break-all;
            /* Instead use this non-standard one: */
            word-break: break-word;

            /* Adds a hyphen where the word breaks, if supported (No Blink) */
            -ms-hyphens: auto;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            hyphens: auto;
        }

        .anchor {
            color: #fffa;
            text-decoration: none;

        }

        .anchor:hover {
            color: #fff !important;
        }

        .blogcontent a {
            color: var(--green);
            text-decoration: none;
        }

        .blogcontent img {
            max-width: 100%;

        }
    </style>

    <link rel="stylesheet" href="/public/vendor/prism/prism.css">
    <script src="/public/vendor/prism/prism.js"></script>
    <style>
        :not(pre)>code[class*="language-"],
        pre[class*="language-"] {
            background: var(--darkerShade);
            ]
        }
    </style>
    <div class="text-center bg-image"
        style="
      background-image: url('/public/img/bg/post-bg{{ rand(0, 7) }}.jpg');
      /* min-height: ; */
    ">
        <div class="p-5 mask"
            style="padding-top:calc(100px + 3rem) !important;height:100%;background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3 display-4" style="font-weight:bold">{{ $blog->title }}</h1>
                    <h5 class="mb-3"> Last Updated: {{ $blog->updated_at->diffForHumans() }}</h5>

                </div>
            </div>
        </div>
    </div>

    <div class="blogcontent" style="background: var(--darkestShade);color:#fffa;font-size:1.2em;word-spacing:0.16em;">
        <div class=" row mx-3 py-5">
            <div class="my-3 p-1 px-md-3 px-lg-5 col-md-8" style="text-align: justify;">
                <img src="{{ $blog->image }}" alt="" style="width:100%;border-radius: 10px;margin-bottom:20px">
                {!! $blog->content !!}
                <p class="mt-4">Category: <a class="anchor"
                        href="/category/{{ $blog->category->id }}">{{ $blog->category->name }}</a> </p>
                <?php
                $tagstring = [];
                foreach (explode(',', $blog->tags) as $tag) {
                    array_push($tagstring, '<a class="anchor" href="/tag/' . trim($tag, ' ') . '">' . ucwords($tag) . '</a>');
                }
                ?>
                <p class="mt-2">Relavent Tags:
                    {!! join(', ', $tagstring) !!}
                </p>
            </div>
            <div class="col-md-4 my-3">
                <div class="profcard">

                    <div class="profileinfo">
                        <img src="{{ $blog->user->profile_photo_path }}">
                        <div>
                            <h5>{{ $blog->user->name }}</h5>
                            <span> Posted on {{ date('d M Y', strtotime(substr($blog->created_at, 0, 11))) }}</span>
                        </div>
                    </div>


                    <div class="metadata">
                        <span>{{ $blog->readtime }} mins read</span>
                        <span>{{ $blog->likes }} likes</span>

                        <span>
                            <i class="fas fa-eye"></i>
                            {{ viewcount($blog->id) }}
                        </span>
                    </div>

                    <div style="display: flex">
                        @if (Auth::check())
                            @if ($blog->liked)
                                <a href="/likeorunlike/{{ $blog->id }}" class="unlike likebtn">
                                    UnLike &nbsp;<i class="fas fa-thumbs-down
                                "></i>
                                </a>
                            @else
                                <a href="/likeorunlike/{{ $blog->id }}" class=" likebtn">
                                    Like &nbsp;<i class="fas fa-thumbs-up"></i>
                                </a>
                            @endif
                        @else
                            <a href="/login" class=" likebtn">
                                Login to Like &nbsp;<i class="fas fa-thumbs-up"></i>
                            </a>
                        @endif
                    </div>


                    <div class="social-links ">

                        <a class="social-link linkedin"
                            href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('blog', $blog->slug) }}&title={{ $blog->title }}&source=https://connectup.in">
                            <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" class="socialimg"> </a>
                        <a class="social-link whatsapp" href="whatsapp://send?text={{ route('blog', $blog->slug) }}">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/WhatsApp_icon.png/598px-WhatsApp_icon.png"
                                class="socialimg">
                        </a>
                        <a class="social-link twitter"
                            href="https://twitter.com/intent/tweet?text={{ route('blog', $blog->slug) }}&via=connectup">
                            <img src="https://cdn.freebiesupply.com/logos/large/2x/twitter-3-logo-png-transparent.png"
                                class="socialimg">
                        </a>

                    </div>
                </div>
                @include('modals.recentblogs')
                {{-- @include('modals.reportnew') --}}
            </div>
        </div>
    </div>

    <style>
        .profileinfo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profileinfo img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profileinfo div {
            display: flex;
            flex-direction: column;
        }

        .profileinfo div span {
            font-size: 0.8em;
            color: #aaa;
            line-height: 1;
        }

        .profileinfo div h5 {
            font-size: 1.2em;
            font-weight: bold;
            line-height: 1;
        }

        .metadata {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .metadata span {
            font-size: 0.8em;
            font-weight: bold;
            color: #aaa;
        }

        .metadata span i {
            margin-right: 5px;
        }

        .profcard {
            background: var(--darkerShade);
            padding: 20px;
            border-radius: 10px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            align-items: center;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .social-links a:hover {
            transform: scale(1.1);
        }

        .socialimg {
            width: 100%;
        }

        .likebtn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            border-radius: 10px;
            margin-top: 10px;
            background: rgb(8, 169, 113);
            color: #fff;
            padding: 10px;
        }

        .unlike {
            background: rgb(58, 60, 58);
        }
    </style>

    @include('modals.report')
    @include('modals.subscribe')
@endsection
