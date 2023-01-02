@extends('layouts.app')

@section('admin-content')
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img class="d-none d-lg-block" src="{{ asset('images/itislide-3.png') }}" alt="itirepairs" width="150px" height="500px">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
        <li class="nav-item dropdown pe-5">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="assets/img/profile-img.jpg" alt="Profile-imag" class="rounded-circle"> -->
            <span style="font-size : 1.8rem;"><i class="bi bi-person-circle"></i></span>
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }}</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Edit My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>{{ __('Logout') }}</span>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
        @endguest
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('/home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/services/view') }}">
          <i class="bi bi-menu-button-wide"></i>
          <span>Services</span>
        </a>
      </li>
      <li class="nav-item" style="color:#5968f3;">
          <span>All Images </span>
          <i class="bi bi-caret-down-fill"></i>
      </li>
      <li class="nav-item">
        <form id="ITI1" action="{{ url('/images/show') }}" method="post">
          @csrf
          <input type="hidden" name="service_id" id="service_id" value="1">
          <a class="nav-link collapsed" href="#" onclick="iti1()">
            <i class="bi bi-ethernet"></i>
            <span>Network</span>
          </a>
        </form>
      </li>
      <li class="nav-item">
        <form id="ITI2" action="{{ url('/images/show') }}" method="post">
          @csrf
          <input type="hidden" name="service_id" id="service_id" value="2">
          <a class="nav-link collapsed" href="#" onclick="iti2()">
            <i class="bi bi-camera-video"></i>
            <span>CCTV</span>
          </a>
        </form>
      </li>
      <li class="nav-item">
        <form id="ITI3" action="{{ url('/images/show') }}" method="post">
          @csrf
          <input type="hidden" name="service_id" id="service_id" value="3">
          <a class="nav-link collapsed" href="#" onclick="iti3()">
            <i class="bi bi-display"></i>
            <span>Display</span>
          </a>
        </form>
      </li>
      <li class="nav-item">
        <form id="ITI4" action="{{ url('/images/show') }}" method="post">
          @csrf
          <input type="hidden" name="service_id" id="service_id" value="4">
          <a class="nav-link collapsed" href="#" onclick="iti4()">
            <i class="bi bi-mic"></i>
            <span>Speech Tranfer</span>
          </a>
        </form>
      </li>
      <li class="nav-item">
        <form id="ITI5" action="{{ url('/images/show') }}" method="post">
          @csrf
          <input type="hidden" name="service_id" id="service_id" value="5">
          <a class="nav-link collapsed" href="#" onclick="iti5()">
            <i class="bi bi-wifi"></i>
            <span>WIFI</span>
          </a>
        </form>
      </li>
      <li class="nav-item">
        <form id="ITI6" action="{{ url('/images/show') }}" method="post">
          @csrf
          <input type="hidden" name="service_id" id="service_id" value="6">
          <a class="nav-link collapsed" href="#" onclick="iti6()">
            <i class="bi bi-laptop"></i>
            <span>Web</span>
          </a>
        </form>
      </li>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
    <h1>@yield('pagetitle')</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">@yield('pagetitle')</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    @yield('content')

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer mt-auto fixed-bottom">
    <div class="copyright">
      &copy; Copyright <strong><script>document.write(new Date().getFullYear())</script></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Designed by <a href="http://itirepairs.co.uk/">ITIrepairs</a>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    function iti1() {
      document.getElementById("ITI1").submit();
    }

    function iti2() {
      document.getElementById("ITI2").submit();
    }

    function iti3() {
      document.getElementById("ITI3").submit();
    }

    function iti4() {
      document.getElementById("ITI4").submit();
    }

    function iti5() {
      document.getElementById("ITI5").submit();
    }

    function iti6() {
      document.getElementById("ITI6").submit();
    }
  </script>
@endsection