<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags and other links -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IdeaVenture - Login</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16" />
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css" />
    <!-- slick slider css -->
    <link rel="stylesheet" href="assets/css/vendor/slick.css" />
    <link rel="stylesheet" href="assets/css/vendor/dots.css" />
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-container">
        <span class="animated-preloader"></span>
      </div>
    </div>

    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->

    <div class="full-wh">
      <!-- STAR ANIMATION -->
      <div class="bg-animation">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div id="stars4"></div>
      </div>
      <!-- / STAR ANIMATION -->
    </div>
    <div class="page-wrapper">
      <!-- Account section start -->
      <div
        class="account-section bg_img"
        data-background="assets/images/bg/bg-11.jpg"
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-7">
              <div class="account-card">
                <div
                  class="account-card__header bg_img overlay--one"
                  data-background="assets/images/bg/bg-6.jpg"
                >
                  <h2 class="section-title">
                    Welcome to <span class="base--color">IdeaVenture</span>
                  </h2>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Minus distinctio deserunt impedit similique debitis
                    voluptatum enim.
                  </p>
                </div>
                <div class="account-card__body">
                  <h3 class="text-center">Login</h3>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <label>Email</label>
                      <input
                        type="text"
                        class="form-control"
                        name="email"
                        placeholder="Enter user email"
                        id="username"
                      />
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input
                        type="password"
                        class="form-control"
                        name="password"
                        placeholder="Enter password"
                        id="password"
                      />
                    </div>
                    <div class="form-row">
                      <div class="col-sm-6">
                        <div class="form-group form-check">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            name="remember"
                            id="exampleCheck1"
                          />
                          <label class="form-check-label" for="exampleCheck1"
                            >Remmber me</label
                          >
                        </div>
                      </div>
                      <div class="col-sm-6 text-sm-right">
                        <p class="f-size-14">
                          Haven't an account?
                          <a href="{{route('register')}}" class="base--color"
                            >Sign Up</a
                          >
                        </p>
                      </div>
                    </div>
                    <!-- Validation message -->
                    <p id="validationMessage" class="text-danger"></p>
                    <div class="mt-3">
                      <button type="submit" class="cmn-btn">Login Now</button>
                    </div>
                    @if (Route::has('password.request'))
                    <p style="margin-left: 65%; margin-top: -36px;"><a href="{{ route('password.request') }}" class="text-blue">Forgot Your Password</a></p>
                    @endif
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Account section end -->
    </div>
    <!-- Page-wrapper end -->
    <!-- jQuery library -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <!-- slick slider js -->
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/contact.js"></script>
    <!-- dashboard custom js -->
    <script src="assets/js/app.js"></script>
  </body>
  
  </html>


{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
