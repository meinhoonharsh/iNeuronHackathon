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
            <div class="user-profile-img">

                <div class="container">
                    <div class="half">
                        <label for="profile2" class="profile-dropdown">
                            <input type="checkbox" id="profile2">
                            <img src="https://cdn0.iconfinder.com/data/icons/avatars-3/512/avatar_hipster_guy-512.png">
                            <span>John Doe</span>
                            <label for="profile2"><i class="mdi mdi-menu"></i></label>
                            <ul>
                                <li><a href="#"><i class="mdi mdi-email-outline"></i>Messages</a></li>
                                <li><a href="#"><i class="mdi mdi-account"></i>Account</a></li>
                                <li><a href="#"><i class="mdi mdi-settings"></i>Settings</a></li>
                                <li><a href="#"><i class="mdi mdi-logout"></i>Logout</a></li>
                            </ul>
                        </label>
                    </div>
                </div>
                <div class="background"></div>
                <img src="{{ asset('public/images/new_img/profile1.jpg') }}" alt="" class="user-img" />
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
