<!-- navbar start  -->
<nav>
    <div class="nav-max-width navbar">
        <div class="logo">
            <a href="{{ route('index') }}">
                <img src="{{ asset('public/images/new_img/logo/Logo-02.png') }}" alt="Boostem" />
            </a>
        </div>
        <div class="menu">
            <div class="menu-item"><a class="menu-item-a" href="">Home</a></div>
            <div class="menu-item"><a class="menu-item-a" href="">About</a></div>
            <div class="menu-item">
                <a class="menu-item-a" href="">Services</a>
            </div>
        </div>
        <div class="community-register-btn">
                <div class="profile-container">
                  <div class="action">
                    <div class="profile" onclick="menuToggle();">
                      <img src="{{asset('public/images/new_img/profile1.jpg')}}" />
                    </div>
                    <div class="menu-avtar">
                      <h3>Someone Famous<br /></h3>
                      <ul>
                        <li>
                          <img src="{{ asset('public/images/new_img/logo/Logo-02.png') }}" /><a href="#">Profile</a>
                        </li>

                        <li>
                          <img src="{{ asset('public/images/new_img/logo/Logo-02.png') }}" /><a href="#">My Blogs</a>
                        </li>
                        <li>
                          <img src="{{ asset('public/images/new_img/logo/Logo-02.png') }}" /><a href="#">Logout</a>
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
