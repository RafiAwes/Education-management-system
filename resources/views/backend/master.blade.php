<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ url('/') }}/backend_assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ url('/') }}/backend_assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ url('/') }}/backend_assets/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ url('/') }}/backend_assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ url('/') }}/backend_assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ url('/') }}/backend_assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ url('/') }}/backend_assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ url('/') }}/backend_assets/img/favicon.ico">
    {{-- toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="{{ url('/') }}/backend_assets/img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li><a href="/home"> <i class="icon-home"></i>Home</a></li>
            <li><a href="/upload/data"> <i class="icon-form"></i>Upload</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Student </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="/upload/new/student">Upload New Student</a></li>
                <li><a href="/show/student/list">Student List</a></li>
                {{-- <li><a href="#">Page</a></li> --}}
            </ul>
            </li>
            {{-- table --}}
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i>Table</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="/show/department">Department</a></li>
                    {{-- <li><a href="">Student List</a></li> --}}
                    {{-- <li><a href="#">Page</a></li> --}}
                </ul>
            </li>


           
            {{-- <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page</a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo
                    <div class="badge badge-warning">
                        6 New
                    </div>
                </a>
            </li> --}}
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                        <div class="brand-text d-none d-md-inline-block"><span>Bootstrap </span><strong class="text-primary">Dashboard</strong></div>
                    </a></div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">


                <!-- Log out-->
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      @yield('content')

      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="{{ url('/') }}/backend_assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ url('/') }}/backend_assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="{{ url('/') }}/backend_assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/backend_assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="{{ url('/') }}/backend_assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{{ url('/') }}/backend_assets/vendor/chart.js/Chart.min.js"></script>
    <script src="{{ url('/') }}/backend_assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{ url('/') }}/backend_assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    @yield('footer_js')
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <!-- Main File-->
    <script src="{{ url('/') }}/backend_assets/js/front.js"></script>
  </body>
</html>
