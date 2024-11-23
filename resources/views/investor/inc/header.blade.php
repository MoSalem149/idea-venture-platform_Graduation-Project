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
          <a class="site-logo site-title" href="{{ route('investor.dashboard') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="site-logo" class="header-logo" />
          </a>
          <ul class="account-menu mobile-acc-menu">
            <li class="icon">
              <a href="{{ route('investor.dashboard') }}"><i class="las la-user"></i></a>
            </li>
          </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
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
          </form>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu m-auto">
              <li><a href="{{ route('investor.dashboard') }}">Home</a></li>
              <li><a href="{{ route('startups') }}">Discover Startups</a></li>
              <li><a href="{{ route('dashbo') }}">Dashboard </a></li>
              {{-- <li><a href="*">Notifications </a></li> --}}
              <li><a href="{{ route('portfolio') }}">My Portfolio</a></li>

            </ul>
            <div class="nav-right">
              <img src="assets/images/profile-photo/avatar1.png" alt="Profile Image" class="rounded-circle img-fluid"
                style="width: 40px; height: 40px" />
                <ul class="navbar-nav main-menu account-menu ml-2">
                  <li class="menu_has_children icon">
                    <a href="{{ route('entprofile') }}"><i class="las la-user"></i></a>
                    <ul class="sub-menu">
                      <li><a href="{{ route('entprofile') }}">Settings</a></li>
                      <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- header__bottom end -->
  </header>