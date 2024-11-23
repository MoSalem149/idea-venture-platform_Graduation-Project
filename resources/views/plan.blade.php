@include('inc.head')
  <div class="page-wrapper">
    <!-- header-section start  -->
    @include('inc.header')
    <!-- inner hero end -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="page-title">All Plans</h2>
              <ul class="page-breadcrumb">
                <li><a href="{{ route('logout') }}">Home</a></li>
                <li>Plan</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    <!-- package section start -->
    <section class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title">
                <span class="font-weight-normal">Fees</span>
                <b class="base--color">Plans</b>
              </h2>
              <p>
                Discover your ideal fees strategy with our diverse range of
                plans. Choose the option that aligns with your financial
                goals.
              </p>
            </div>
          </div>
        </div>
        <!-- row end -->
        <div class="row justify-content-center mb-none-30">
          <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
            <div class="package-card text-center bg_img" data-background="assets/images/bg/bg-4.png">
              <h4 class="package-card__title base--color mb-2">Standard</h4>
              <ul class="package-card__features mt-4">
                <li>2% Annual Return</li>
                <li>Quarterly Dividends</li>
                <li>1-Year Lock-in</li>
                <li>
                  +<span class="badge base--bg text-dark">Principal Return</span>
                </li>
              </ul>
              <div class="package-card__range mt-5 base--color">
                $1,000 - $5,000
              </div>
              <a href="#0" class="cmn-btn btn-md mt-4">Subscribe Now</a>
            </div>
            <!-- package-card end -->
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
            <div class="package-card text-center bg_img" data-background="assets/images/bg/bg-4.png">
              <h4 class="package-card__title base--color mb-2">Silver</h4>
              <ul class="package-card__features mt-4">
                <li>5% Annual Return</li>
                <li>Bi-Annual Dividends</li>
                <li>3-Year Term</li>
                <li>
                  +<span class="badge base--bg text-dark">Compound Interest</span>
                </li>
              </ul>
              <div class="package-card__range mt-5 base--color">
                $5,000 - $20,000
              </div>
              <a href="#0" class="cmn-btn btn-md mt-4">Subscribe Now</a>
            </div>
            <!-- package-card end -->
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
            <div class="package-card text-center bg_img" data-background="assets/images/bg/bg-4.png">
              <h4 class="package-card__title base--color mb-2">Premium</h4>
              <ul class="package-card__features mt-4">
                <li>7% Annual Return</li>
                <li>Monthly Dividends</li>
                <li>5-Year Commitment</li>
                <li>
                  +<span class="badge base--bg text-dark">Capital Growth</span>
                </li>
              </ul>
              <div class="package-card__range mt-5 base--color">
                $20,000 - $100,000
              </div>
              <a href="#0" class="cmn-btn btn-md mt-4">Subscribe Now</a>
            </div>
            <!-- package-card end -->
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
            <div class="package-card text-center bg_img" data-background="assets/images/bg/bg-4.png">
              <h4 class="package-card__title base--color mb-2">Platinum</h4>
              <ul class="package-card__features mt-4">
                <li>4% Annual Return</li>
                <li>Monthly Payouts</li>
                <li>No Lock-in Period</li>
                <li>
                  +<span class="badge base--bg text-dark">Steady Income Stream</span>
                </li>
              </ul>
              <div class="package-card__range mt-5 base--color">
                Min $10,000
              </div>
              <a href="#0" class="cmn-btn btn-md mt-4">Subscribe Now</a>
            </div>
            <!-- package-card end -->
          </div>
        </div>
        <!-- row end -->
      </div>
    </section>
    <!-- package section end  -->
    <!-- footer section start -->
    @include('inc.footer')

    
