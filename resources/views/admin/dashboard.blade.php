
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IdeaVenture - Dashboard</title>
    <link
      rel="icon"
      type="image/png"
      href="assets/images/favicon.png"
      sizes="16x16"
    />
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="styles/css/vendor/bootstrap.min.css" />
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="styles/css/all.min.css" />
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="styles/css/line-awesome.min.css" />
    <link rel="stylesheet" href="styles/css/vendor/animate.min.css" />
    <!-- slick slider css -->
    <link rel="stylesheet" href="styles/css/vendor/slick.css" />
    <link rel="stylesheet" href="styles/css/vendor/dots.css" />
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="styles/css/main.css" />
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
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
      <div id='stars4'></div>
    </div><!-- / STAR ANIMATION -->
  </div>
  <div class="page-wrapper">
      <!-- header-section start  -->
  <header class="header">
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="index.html"><img src="assets/images/logo.png" alt="site-logo"></a>
          <ul class="account-menu mobile-acc-menu">
            <li class="icon">
              <a href="login.html"><i class="las la-user"></i></a>
            </li>
          </ul> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu m-auto">
              <li> <a href="index.html">Home</a></li>
              <li> <a href="about.html">About Us</a></li>
              <li> <a href="plan.html">Plan</a></li>
              <li><a href="dashboard.html">Dashboard</a></li>
              <li class="menu_has_children"><a href="#0">Blog</a>
                <ul class="sub-menu">
                  <li><a href="blog.html">Blog Posts</a></li>
                  <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
              </li>
              <li class="menu_has_children"><a href="#0">Page</a>
                <ul class="sub-menu">
                  <li><a href="error-404.html">Error - 404</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="nav-right">
              <ul class="account-menu ml-3">
                <li class="icon">
                  <a href="login.html"><i class="las la-user"></i></a>
                </li>
              </ul> 
              <select class="select d-inline-block w-auto ml-xl-3">
                <option>Eng</option>
                <option>Ban</option>
                <option>Hin</option>
              </select>
            </div>
          </div> 
        </nav>
      </div>
    </div><!-- header__bottom end -->
  </header>
  <!-- header-section end  -->
    
    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Dashboard</h2>
            <ul class="page-breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li>Dashboard</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->


    <!-- dashboard section start -->
    <div class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row mb-none-30">
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Deposit Wallet Balance</span>
                    <h4 class="currency-amount">$255</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-dollar-sign"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Interest Wallet Balance</span>
                    <h4 class="currency-amount">$1,105</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-wallet"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Invest</span>
                    <h4 class="currency-amount">$500</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cubes "></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Deposit</span>
                    <h4 class="currency-amount">$1,050</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-credit-card"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Withdraw</span>
                    <h4 class="currency-amount">$1703</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cloud-download-alt"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Referral Earnings</span>
                    <h4 class="currency-amount">$1710.5</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-user-friends"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
            </div><!-- row end -->
            <div class="row mt-50">
              <div class="col-lg-12">
                <div class="table-responsive--md p-0">
                  <table class="table style--two white-space-nowrap">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Transaction ID</th>
                        <th>Amount</th>
                        <th>Wallet</th>
                        <th>Details</th>
                        <th>Post Balance</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="Date">21/02/2020</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2020</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2020</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2020</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2020</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2020</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2020</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                      <tr>
                        <td data-label="Date">21/02/2020</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">DZQXF5NAN2AT</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $17.5</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">17.5 USD Interest From Crown</td>
                        <td data-label="Post Balance">$22991.9</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- row end -->
          </div>
        </div>
      </div>
    </div>
    <!-- dashboard section end -->



    <!-- footer section start -->
<footer class="footer bg_img" data-background="assets/images/bg/bg-7.jpg">
  <div class="footer__top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <a href="#0" class="footer-logo"><img src="assets/images/logo.png" alt="image"></a>
          <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-4">
            <li><a href="#0">Home</a></li>
            <li><a href="#0">Privacy & Policy</a></li>
            <li><a href="#0">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-md-left text-center">
          <p>© 2020 <a href="index.html" class="base--color">HYIPLAB</a>. All rights reserved</p>
        </div>
        <div class="col-md-6">
          <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="facebook"><i class="lab la-facebook-f"></i></a></li>
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="twitter"><i class="lab la-twitter"></i></a></li>
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-p"></i></a></li>
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-in"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer section end -->
  </div> <!-- page-wrapper end -->
    <!-- jQuery library -->
  <script src="js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/vendor/bootstrap.bundle.min.js"></script>
  <!-- slick slider js -->
  <script src="js/vendor/slick.min.js"></script>
  <script src="js/vendor/wow.min.js"></script>
  <script src="js/contact.js"></script>
  <!-- dashboard custom js -->
  <script src="js/app.js"></script>

  </body>
</html> 