<header class="header">
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <style>
            .header-logo {
              max-height: 100px; /* Adjust this value according to your header height */
              width: auto; /* Maintains aspect ratio */
              height: auto; /* Maintains aspect ratio */
            }
          </style>
          <a class="site-logo site-title" href="{{ route('logout') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="site-logo" class="header-logo" />
          </a>
          {{-- <a class="site-logo site-title" href="{{ route('logout') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="site-logo" /></a> --}}
          <ul class="account-menu mobile-acc-menu">
            <li class="icon">
              <a href="{{ route('logout') }}"><i class="las la-user"></i></a>
            </li>
          </ul>
          {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <form class="form-inline my-2 my-lg-0 pl-5">
            <input class="form-control mr-sm-2 search-input" style="
                  width: 328px;
                  height: 30px;
                  border-radius: 16px;
                  min-height: 48px;
                " type="search" placeholder="Explore" aria-label="Search" />
          </form> --}}
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu m-auto">
              <li><a href="{{ route('logout') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About Us</a></li>
              <li><a href="{{ route('plan') }}">Plan</a></li>
              {{-- <li><a href="{{ route('dashb') }}">Dashboard</a></li> --}}
              
              <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <div class="nav-right">
              <img src="{{ asset('assets/images/profile-photo/avatar1.png') }}" alt="Profile Image" class="rounded-circle img-fluid"
                style="width: 40px; height: 40px" />
              <ul class="account-menu ml-3">
                <li class="icon">
                  <a href="{{ route('login') }}"><i class="las la-user"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- header__bottom end -->
  </header>