@include('inc.head')
  <div class="page-wrapper">
    <!-- header-section start  -->
   @include('inc.header')
    <!-- header-section end  -->
    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Contact Us</h2>
            <ul class="page-breadcrumb">
              <li><a href="{{ route('logout') }}">Home</a></li>
              <li>Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    <!-- contact section start -->
    <section class="pt-120 pb-120">
      <div class="container">
        <div class="contact-wrapper">
          <div class="row">
            <div class="col-lg-6 contact-thumb bg_img" data-background="assets/images/bg/bg-1.jpg"></div>
            <div class="col-lg-6 contact-form-wrapper">
              <h2 class="font-weight-bold">Contact.</h2>
              <h2 class="font-weight-bold">Get in touch.</h2>
              <span>Leave us a message</span>
              <form class="contact-form mt-4">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="contact-name" placeholder="Full Name" class="form-control">
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" name="contact-name" placeholder="Email Address" class="form-control">
                  </div>
                  <div class="form-group col-lg-12">
                    <textarea class="form-control" placeholder="Message"></textarea>
                  </div>
                  <div class="col-lg-12">
                    <button type="submit" class="cmn-btn">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div><!-- contact-wrapper end -->
      </div>
      <div class="container pt-120">
        <div class="row justify-content-center">
          <div class="col-lg-10 mb-50">
            <h2 class="font-weight-bold">Quick</h2>
            <h2 class="font-weight-bold">Support.</h2>
            <span>You can get all information</span>
          </div>
          <div class="col-lg-10">
            <div class="row mb-none-30">
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="contact-item">
                  <i class="fas fa-phone-alt"></i>
                  <h5 class="mt-2">Call Us</h5>
                  <div class="mt-4">
                    <p><a href="tel:5454458">+20 101 234 5678</a></p>
                    <p><a href="tel:5454458">+057 21 234 567</a></p>
                  </div>
                </div><!-- contact-item end -->
              </div>
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="contact-item">
                  <i class="fas fa-envelope"></i>
                  <h5 class="mt-2">Mail Us</h5>
                  <div class="mt-4">
                    <p><a href="mailto:demo@mail.com">info@yourcompany.eg</a></p>
                    <p><a href="mailto:demo@mail.com">support@yourcompany.eg</a></p>
                  </div>
                </div><!-- contact-item end -->
              </div>
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="contact-item">
                  <i class="fas fa-map-marker-alt"></i>
                  <h5 class="mt-2">Visit Us</h5>
                  <div class="mt-4">
                    <p>48 El Thawra St., Heliopolis, Cairo</p>
                  </div>
                </div><!-- contact-item end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact section end -->
    <!-- footer section start -->
    @include('inc.footer')