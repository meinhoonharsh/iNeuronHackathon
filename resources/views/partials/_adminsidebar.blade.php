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
             <a class="nav-link" href="/admin">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Dashboard</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                 <span class="menu-icon">
                     <i class="mdi mdi-laptop"></i>
                 </span>
                 <span class="menu-title">Category</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="ui-basic">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="/category">Catergories</a></li>
                 </ul>
             </div>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" data-toggle="collapse" href="#ui-basics" aria-expanded="false"
                 aria-controls="ui-basics">
                 <span class="menu-icon">
                     <i class="mdi mdi-laptop"></i>
                 </span>
                 <span class="menu-title">Blogs</span>
                 <i class="menu-arrow"></i>
             </a>
             <div class="collapse" id="ui-basics">
                 <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="/ablogs">All Blogs</a></li>
                     <li class="nav-item"> <a class="nav-link" href="/myblogs">My Blog</a></li>
                     <li class="nav-item"> <a class="nav-link" href="/addblog">Add Blog</a></li>
                 </ul>
             </div>
         </li>

         <li class="nav-item menu-items">
             <a class="nav-link" href="/subscriber">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Subscribers</span>
             </a>
         </li>
         {{-- <li class="nav-item menu-items">
             <a class="nav-link" href="/email">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Mailbox</span>
             </a>
         </li>
         <li class="nav-item menu-items">
             <a class="nav-link" href="/reports">
                 <span class="menu-icon">
                     <i class="mdi mdi-speedometer"></i>
                 </span>
                 <span class="menu-title">Reports</span>
             </a>
         </li> --}}



         {{-- <li class="nav-item menu-items">
        <a class="nav-link" href="#">
          <span class="menu-icon">
            <i class="mdi mdi-apartment"></i>
          </span>
          <span class="menu-title">Claim Companies</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Quiz</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Attendance</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Schedule</span>
        </a>
      </li> --}}
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
                         <a href="/logout" class="dropdown-item preview-item">
                             <div class="preview-thumbnail">
                                 <div class="preview-icon bg-dark rounded-circle">
                                     <i class="mdi mdi-logout text-danger"></i>
                                 </div>
                             </div>
                             <div class="preview-item-content">
                                 <p class="preview-subject mb-1">LogOut</p>
                             </div>
                         </a>
                     </div>

                     <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                         data-toggle="offcanvas">
                         <span class="mdi mdi-format-line-spacing"></span>
                     </button>
         </div>
     </nav>

     </li>
     </ul>
