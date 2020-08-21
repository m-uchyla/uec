<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Underground Esport Cup</title>
  <!-- loader-->
  <link href="{{ asset('resources/admin/css/pace.min.css', true) }}" rel="stylesheet"/>
  <script src="{{ asset('resources/admin/js/pace.min.js', true) }}"></script>
  <!--favicon-->
  <link rel="icon" href="{{ asset('resources/admin/images/favicon.ico', true) }}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{ asset('resources/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css', true) }}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{ asset('resources/admin/plugins/simplebar/css/simplebar.css', true) }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('resources/admin/css/bootstrap.min.css', true) }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('resources/admin/css/animate.css', true) }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('resources/admin/css/icons.css', true) }}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('resources/admin/css/sidebar-menu.css', true) }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('resources/admin/css/app-style.css', true) }}" rel="stylesheet"/>
 
  @yield('style')
  
</head>

<body class="bg-theme bg-theme4">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{ route('homepage') }}">
       <img src="{{ asset('resources/main/img/logo/logo.png', true) }}" style="width:85px" class="logo-icon" alt="logo icon">
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">NAWIGACJA</li>

      <li>
        <a href="{{ route('homepage') }}">
          <i class="zmdi zmdi-home"></i> <span>Powrót do strony głównej</span>
        </a>
      </li>

      <li>
        <a href="{{ route('default') }}">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Default</span>
        </a>
      </li>

      @if ((Auth::user()->role) < 2)
        <li>
          <a href="{{ route('admin') }}">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Podsumowanie</span>
          </a>
        </li>
      @endif

      @if ((Auth::user()->role) < 4)
        <li>
          <a href="{{ route('articles') }}">
            <i class="zmdi zmdi-format-list-bulleted"></i> <span>Artykuły</span>
          </a>
        </li>
      @endif

      @if ((Auth::user()->role) < 1)
        <li>
          <a href="{{ route('usersList') }}">
            <i class="zmdi zmdi-face"></i> <span>Użytkownicy</span>
          </a>
        </li>
      @endif
      
      <li>
        <a href="register.html" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>Profil</span>
        </a>
      </li>
      <!-- <li>
        <a href="icons.html">
          <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
        </a>
      </li>

      <li>
        <a href="forms.html">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
        </a>
      </li>

      <li>
        <a href="tables.html">
          <i class="zmdi zmdi-grid"></i> <span>Tables</span>
        </a>
      </li>

      <li>
        <a href="calendar.html">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
          <small class="badge float-right badge-light">New</small>
        </a>
      </li>

      <li>
        <a href="profile.html">
          <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>

      <li>
        <a href="login.html" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Login</span>
        </a>
      </li>

       <li>
        <a href="register.html" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
        </a>
      </li> -->

      <!-- <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li> -->

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">

    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

@yield('content')

 <!--End Dashboard Content-->
	  
	<!--start overlay-->
    <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<!-- <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2020 Dashtreme Admin | Created by VEEX | Underground Esport Cup
        </div>
      </div>
    </footer> -->
	<!--End footer-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('resources/admin/js/jquery.min.js', true) }}"></script>
  <script src="{{ asset('resources/admin/js/popper.min.js', true) }}"></script>
  <script src="{{ asset('resources/admin/js/bootstrap.min.js', true) }}"></script>
	
 <!-- simplebar js -->
  <script src="{{ asset('resources/admin/plugins/simplebar/js/simplebar.js', true) }}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('resources/admin/js/sidebar-menu.js', true) }}"></script>
  <!-- loader scripts -->
  <script src="{{ asset('resources/admin/js/jquery.loading-indicator.js', true) }}"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('resources/admin/js/app-script.js', true) }}"></script>
  <!-- Chart js -->
  
  <script src="{{ asset('resources/admin/plugins/Chart.js/Chart.min.js', true) }}"></script>
 
  <!-- Index js -->
  <script src="{{ asset('resources/admin/js/index.js', true) }}"></script>

  @yield('script')

  
</body>
</html>
