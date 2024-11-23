<footer class="footer bg_img container mt-5" data-background="{{ asset('assets/images/bg/bg-7.jpg') }}">
    <div class="footer__top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <a href="#0" class="footer-logo"><img src="{{ asset('assets/images/logo.png') }}" alt="image" /></a>
            <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-4">
              <li><a href="{{ route('logout') }}">Home</a></li>
              <li><a href="{{ route('privacy') }}">Privacy & Policy</a></li>
              <li><a href="{{ route('termsandcondition') }}">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-md-left text-center">
            <p>
              © 2024
              <a href="{{ route('logout') }}" class="base--color">IdeaVenture</a>. All
              rights reserved
            </p>
          </div>
          <div class="col-md-5">
            <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
              <li>
                <a href="#0" data-toggle="tooltip" data-placement="top" title="facebook"><i
                    class="lab la-facebook-f"></i></a>
              </li>
              <li>
                <a href="#0" data-toggle="tooltip" data-placement="top" title="twitter"><i
                    class="lab la-twitter"></i></a>
              </li>
              <li>
                <a href="#0" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i
                    class="lab la-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section end -->

<!-- page-wrapper end -->
<!-- jQuery library -->
<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<!-- calc profit -->
<script src="{{ asset('assets/js/calcProfit.js') }}"></script>
<!-- slick slider js -->
<script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/contact.js') }}"></script>
<!-- dashboard custom js -->
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
