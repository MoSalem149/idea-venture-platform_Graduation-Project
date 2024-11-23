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
            <h2 class="page-title">Dashboard</h2>
            <ul class="page-breadcrumb">
              <li><a href="{{ route('logout') }}">Home</a></li>
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
                    <h4 class="currency-amount">$3,250</h4>
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
                    <h4 class="currency-amount">$850</h4>
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
                    <span class="caption">Total Investment</span>
                    <h4 class="currency-amount">$15,000</h4>
                  </div>
                  <div class="col-4">
                    <div class="icon ml-auto">
                      <i class="las la-cubes"></i>
                    </div>
                  </div>
                </div><!-- d-widget-two end -->
              </div>
              <div class="col-xl-4 col-sm-6 mb-30">
                <div class="d-widget d-flex flex-wrap">
                  <div class="col-8">
                    <span class="caption">Total Deposit</span>
                    <h4 class="currency-amount">$8,500</h4>
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
                    <h4 class="currency-amount">$7,200</h4>
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
                    <h4 class="currency-amount">$2,350</h4>
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
                        <td data-label="Date">01/05/2024</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">TX12345ABC</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $1,200</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Deposit Wallet</span>
                        </td>
                        <td data-label="Details">Deposit from Main Account</td>
                        <td data-label="Post Balance">$4,450</td>
                      </tr>
                      <tr>
                        <td data-label="Date">02/05/2024</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">TX67890DEF</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-danger">- $750</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Withdraw Wallet</span>
                        </td>
                        <td data-label="Details">Withdrawal to Main Account</td>
                        <td data-label="Post Balance">$3,700</td>
                      </tr>
                      <tr>
                        <td data-label="Date">03/05/2024</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">TX23456GHI</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $500</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Interest Wallet</span>
                        </td>
                        <td data-label="Details">Monthly Interest Credit</td>
                        <td data-label="Post Balance">$4,200</td>
                      </tr>
                      <tr>
                        <td data-label="Date">04/05/2024</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">TX34567JKL</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $2,000</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Deposit Wallet</span>
                        </td>
                        <td data-label="Details">Deposit from Referral Earnings</td>
                        <td data-label="Post Balance">$6,200</td>
                      </tr>
                      <tr>
                        <td data-label="Date">05/05/2024</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">TX45678MNO</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-danger">- $1,500</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Withdraw Wallet</span>
                        </td>
                        <td data-label="Details">Withdrawal to Savings Account</td>
                        <td data-label="Post Balance">$4,700</td>
                      </tr>
                      <tr>
                        <td data-label="Date">06/05/2024</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">TX56789PQR</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $1,000</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Referral Earnings</span>
                        </td>
                        <td data-label="Details">Referral Bonus Credit</td>
                        <td data-label="Post Balance">$5,700</td>
                      </tr>
                      <tr>
                        <td data-label="Date">07/05/2024</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">TX67890STU</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-danger">- $1,200</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Withdraw Wallet</span>
                        </td>
                        <td data-label="Details">Withdrawal for Investment</td>
                        <td data-label="Post Balance">$4,500</td>
                      </tr>
                      <tr>
                        <td data-label="Date">08/05/2024</td>
                        <td data-label="Transaction ID">
                          <span class="base--color">TX78901VWX</span>
                        </td>
                        <td data-label="Amount">
                          <span class="text-success">+ $750</span>
                        </td>
                        <td data-label="Wallet">
                          <span class="badge base--bg">Deposit Wallet</span>
                        </td>
                        <td data-label="Details">Additional Deposit</td>
                        <td data-label="Post Balance">$5,250</td>
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
    @include('inc.footer')