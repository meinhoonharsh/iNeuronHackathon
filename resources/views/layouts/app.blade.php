<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.metatags')
    @include('layouts.gtags')
    @include('layouts.styles')
    <title>{{ $title ?? 'Semikolan Blogs | Never Stop Learning' }}</title>
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <script src="{{ asset('public/js/swiper-bundle.min.js') }}" ></script>
    <script src="{{ asset('public/js/script.js') }}"></script>
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    @include('layouts.scripts')
</head>
<body>
  <div id="app">
    @include('flash')
    @include('components.header')
    @yield('content')
    @include('components.footer')
  </div>
</body>
</html>
