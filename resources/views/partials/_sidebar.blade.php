 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
         <a class="sidebar-brand brand-logo  text-light" href="/">Blogs</a>
         <a class="sidebar-brand brand-logo-mini" href="/"><img src="assets/images/logo-mini.svg"
                 alt="logo" /></a>
     </div>
     <ul class="nav">
         <li class="nav-item nav-category">
             <span class="nav-link">Navigation</span>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" data-toggle="collapse" href="#lectures" aria-expanded="false" aria-controls="ui-basic">
                 <span class="menu-icon">
                     <i class="mdi mdi-laptop"></i>
                 </span>
                 <span class="menu-title">Blog</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="lectures">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="/myblogs">My Blogs</a></li>
                     <li class="nav-item"> <a class="nav-link" href="/addblog">Add Blog</a></li>
                 </ul>
             </div>
         </li>
     </ul>
 </nav>
 <!-- partial -->
 <div class="container-fluid page-body-wrapper">
     <!-- partial:partials/_navbar.html -->
     <nav class="navbar p-0 fixed-top d-flex flex-row">
         <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
             <a class="navbar-brand brand-logo-mini" href="#"><img src="assets/images/logo-mini.svg"
                     alt="logo" /></a>
         </div>
         <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
             <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                 <span class="mdi mdi-menu"></span>
             </button>
             <ul class="navbar-nav navbar-nav-right">








                 <li class="nav-item dropdown">
                     <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                         <div class="navbar-profile">
                             <img class="img-xs rounded-circle" src="{{ Auth::user()->profile_photo_path }}"
                                 alt="">
                             <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}</p>
                             <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                         </div>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                         aria-labelledby="profileDropdown">

                         <a class="dropdown-item preview-item">
                             <div class="preview-thumbnail">
                                 <div class="preview-icon bg-dark rounded-circle">
                                     <i class="mdi mdi-account text-success"></i>
                                 </div>
                             </div>
                             <div class="preview-item-content">
                                 <p class="preview-subject mb-1">Profile</p>
                             </div>
                         </a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item preview-item">
                             <div class="preview-thumbnail">
                                 <div class="preview-icon bg-dark rounded-circle">
                                     <i class="mdi mdi-logout text-danger"></i>
                                 </div>
                             </div>
                             <div class="preview-item-content">
                                 <form action="/logout" method="post">
                                     @csrf
                                     <button style="border:none;background:none;padding:0;color:inherit" type="submit"
                                         class="preview-subject mb-1">Log out</button>
                                 </form>
                             </div>
                         </a>
                     </div>
                 </li>
             </ul>
             <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                 data-toggle="offcanvas">
                 <span class="mdi mdi-format-line-spacing"></span>
             </button>
         </div>
     </nav>



     @php
         
         $menuitems = [[]];
         
     @endphp
