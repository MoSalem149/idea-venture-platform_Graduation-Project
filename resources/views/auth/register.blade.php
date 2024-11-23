<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags and other links -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IdeaVenture - Registration</title>
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

    <div class="full-wh">
      <div class="bg-animation">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div id="stars4"></div>
      </div>
    </div>
    <div class="page-wrapper">
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
                  <h3 class="text-center">Create an Account</h3>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                      <label>Full Name</label>
                      <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="full-name"
                        placeholder="Enter full name"
                        required
                      />
                      <span id="fullNameError" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                      <label>Email Address</label>
                      <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        placeholder="Enter email address"
                        required
                      />
                      <span id="emailError" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input
                        type="password"
                        class="form-control"
                        name="password"
                        id="password"
                        placeholder="Enter password"
                        required
                      />
                      <span id="passwordError" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label>Password Confirmation</label>
                        <input
                          type="password"
                          class="form-control"
                          name="password_confirmation"
                          id="password"
                          placeholder="Enter password confirmation"
                          required
                        />
                        <span id="passwordError" class="text-danger"></span>
                      </div>
                    <div class="form-group">
                      <label>Profile Type</label>
                      <select
                        class="form-control"
                        name="user_type"
                        id="profile-type"
                        required
                      >
                        <option value="">Select Profile Type</option>
                        <option value="investor">Investor</option>
                        <option value="entrepreneur">Entrepreneur</option>
                      </select>
                      <span id="profileTypeError" class="text-danger"></span>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        I have read and agree to the site's <a href="*0">Terms & Conditions</a>  
                      </label>
                    </div>
                    <br>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                        I would like to receive notification from ideaVenture newsletter and investment opportunities that are relevant to my interests.
                      </label>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-sm-6">
                        <div class="form-group form-check">
                          
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="rememberMe"
                          />
                          
                          <label class="form-check-label" for="rememberMe"
                            >Remember me</label
                          >
                        </div>
                      </div>
                      <div class="col-sm-6 text-sm-right">
                        <p class="f-size-14">
                          Have an account?
                          <a href="{{ route('login') }}" class="base--color">Login</a>
                        </p>
                      </div>
                    </div>
                    <div class="mt-3">
                     
                     
                   
                      <button type="submit" class="cmn-btn">Sign Up Now</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
    <!-- validation -->
    <script src="assets/js/registration-validation.js"></script>
  </body>
  
  </html>

{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
