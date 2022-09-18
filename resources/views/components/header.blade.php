<!-- navbar start  -->
<nav>
    <div class="nav-max-width navbar">
        <div class="logo">
            <a href="{{ route('index') }}">
                <img src="{{ asset('public/images/new_img/logo/Logo-02.png') }}" alt="Boostem" />
            </a>
        </div>
        <div class="menu">
            <div class="menu-item"><a href="{{url('/')}}" class="menu-item-a">Home</a></div>
            <div class="menu-item"><a class="menu-item-a" href="{{url('/blogs')}}">Discover</a></div>
            <div class="menu-item">
                <a class="menu-item-a" href="{{url('/popular')}}">Popular</a>
            </div>
        </div>
        <div class="community-register-btn">
            <div class="search-section" onclick="openSearch()"> <img
                    src="{{ 'public/images/new_img/header-images/Search-06.png' }}" alt="" />
            </div>
            <div class="profile-container">
                <div class="action">
                    @if (Auth::check())
                        <div class="profile" onclick="menuToggle();">
                            <img src="{{ Auth::user()->profile_photo_path }}" />
                        </div>
                    @else
                        <div class="login-button">
                            <a href="{{ url('/login') }}"><button>Login</button></a>
                        </div>
                    @endif

                    <div class="menu-avtar">
                        <h3>{{ Auth::user()->name ?? '' }}<br /></h3>
                        <ul>
                            <li>
                                <img src="{{ asset('public/images/new_img/logo/Logo-02.png') }}" /><a
                                    href="#">Profile</a>
                            </li>

                            <li>
                                <img src="{{ asset('public/images/new_img/logo/Logo-02.png') }}" /><a href="#">My
                                    Blogs</a>
                            </li>
                            <li>
                                <img src="{{ asset('public/images/new_img/logo/Logo-02.png') }}" /><a
                                    href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hamburger">
            <img class="hamburgerwhite" src="./IMG/hamburgerwhite.png" alt="menu" />
            <img class="hamburgerblack" src="./IMG/hamburger.png" alt="menu" />
        </div>
    </div>
</nav>
<div class="black-cover"></div>
<div class="mobilemenu">
    <a href="./communitypages/communityHome.html">
        <div class="mobile-menu-item"><a href="">Home</a></div>
    </a>
    <div class="mobile-menu-item"><a href="">About</a></div>
    <div class="mobile-menu-item"><a href="">Services</a></div>
</div>
<!-- navbar end  -->
{{-- search-section start --}}
<div class="search-box-sec">
    <div class="inside-search-box">
        <form action="{{ route('search') }}">
            <div class="search-form-wrapper">
                <div class="search-icon">
                    <img src="/public/images/new_img/header-images/Search-06.png" alt="" />
                </div>
                <input name="q" type="search" placeholder="Search" aria-label="Search" />
                <div class="search-btn-wrapper">
                    <button type="submit" class="search-btn">Serch</button>
                </div>
            </div>
        </form>
        <div class="cross-search" onclick="closeSearch()">
            <img src="https://www.pngfind.com/pngs/m/90-905672_x-cross-close-symbol-icon-button-gui-close.png"
                alt="">
        </div>
    </div>
</div>
