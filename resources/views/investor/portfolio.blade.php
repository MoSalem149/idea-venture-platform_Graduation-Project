@include('investor.inc.head')



    @include('investor.inc.header')
    

    <div class="portfolio-page-header">
        <div class="container mt-100">
            <div class="row">
                <div class="col-lg-12">
                    <div style="text-align: center; padding-top: 15px;">
                        <img src="assets/images/profile-photo/avatar1.png" alt="Profile Image"
                            class="rounded-circle img-fluid ml-1 mr-1" style="width: 300px; height: 300px" />
                        <h2 style="text-align: center; padding-top: 15px;">Investor Name</h2>
                        <h4 style="text-align: center; padding-top: 15px;">Bio</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content Start -->
    <div class="container light-style flex-grow-1 container-p-y pt-4 pb-5 mt-5">
        <h4 class="font-weight-bold py-3 mb-4">Investor Portfolio</h4>
        <div class="card overflow-hidden" style="background-color: rgba(255, 255, 255, 0);">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-3">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="py-3 ml-4" data-toggle="list" href="#account-investor-info"><i
                                class="fas fa-user-tie mr-2"></i>Investor Information</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#investment-preferences"><i
                                class="fas fa-cogs mr-2"></i>Investment Preferences</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#investment-history"><i
                                class="fas fa-history mr-2"></i>Investment History</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#financial-information"><i
                                class="fas fa-dollar-sign mr-2"></i>Financial Information</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#verification"><i
                                class="fas fa-check mr-2"></i>Verification</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#references"><i
                                class="fas fa-users mr-2"></i>References</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#investment-portfolio"><i
                                class="fas fa-briefcase mr-2"></i>Investment Portfolio</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#contact-information"><i
                                class="fas fa-envelope mr-2"></i>Contact Information</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#behavioral-insights"><i
                                class="fas fa-chart-line mr-2"></i>Behavioral Insights</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <!-- Investor Information Content -->
                        <div class="tab-pane fade active show account-section" id="account-investor-info">
                            <h4 class="py-3 ml-4">Investor Information</h4>
                            <div class="card-body">
                                <!-- Investment Preferences -->
                                <div class="form-group">
                                    <label class="form-label">Investment Preferences</label>
                                    <p>
                                        Investment Preferences Content
                                    </p>
                                </div>
                                <!-- Investment History -->
                                <div class="form-group">
                                    <label class="form-label">Investment History</label>
                                    <p>
                                        Investment History Content
                                    </p>
                                </div>
                                <!-- Financial Information -->
                                <div class="form-group">
                                    <label class="form-label">Financial Information</label>
                                    <div class="form-group">
                                        <label class="form-label">Financial Information</label>
                                        <div class="custom-file-upload">
                                            <input type="file" id="fileUpload" class="form-control-file" style="display: none;">
                                            <a href="path/to/your/file.txt" download="FinancialInformation.txt" class="btn btn-primary">
                                                Download Document
                                            </a>
                                        </div>
                                    </div>                                    
                                </div>                                
                                <!-- Verification -->
                                <div class="form-group">
                                    <label class="form-label">Verification</label>
                                    <p>
                                        Verification Content
                                    </p>
                                </div>
                                <!-- References -->
                                <div class="form-group">
                                    <label class="form-label">References</label>
                                    <p>
                                        References Content
                                    </p>
                                </div>
                                <!-- Investment Portfolio -->
                                <div class="form-group">
                                    <label class="form-label">Investment Portfolio</label>
                                    <p>
                                        Investment Portfolio Content
                                    </p>
                                </div>
                                <!-- Contact Information -->
                                <div class="form-group">
                                    <label class="form-label">Contact Information</label>
                                    <p>
                                        Contact Information Content
                                    </p>
                                </div>
                                <!-- Behavioral Insights -->
                                <div class="form-group">
                                    <label class="form-label">Behavioral Insights</label>
                                    <p>
                                        Behavioral Insights Content
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Investment Preferences Content -->
                        <div class="tab-pane fade account-section" id="investment-preferences">
                            <h4 class="py-3 ml-4">Investment Preferences</h4>
                            <div class="card-body">
                                <p>
                                    Investment Preferences Content
                                </p>
                            </div>
                        </div>
                        <!-- Investment History Content -->
                        <div class="tab-pane fade account-section" id="investment-history">
                            <h4 class="py-3 ml-4">Investment History</h4>
                            <div class="card-body">
                                <p>
                                    Investment History Content
                                </p>
                            </div>
                        </div>
                        <!-- Financial Information Content -->
                        <div class="tab-pane fade account-section" id="financial-information">
                            <h4 class="py-3 ml-4">Financial Information</h4>
                            <div class="card-body">
                                <div class="custom-file-upload">
                                    <input type="file" id="fileUpload" class="form-control-file" style="display: none;">
                                    <a href="path/to/your/file.txt" download="FinancialInformation.txt" class="btn btn-primary">
                                        Download Document
                                    </a>
                                </div>                                
                            </div>
                        </div>
                        <!-- Verification Content -->
                        <div class="tab-pane fade account-section" id="verification">
                            <h4 class="py-3 ml-4">Verification</h4>
                            <div class="card-body">
                                <p>
                                    Verification Content
                                </p>
                            </div>
                        </div>
                        <!-- References Content -->
                        <div class="tab-pane fade account-section" id="references">
                            <h4 class="py-3 ml-4">References</h4>
                            <div class="card-body">
                                <p>
                                    References Content
                                </p>
                            </div>
                        </div>
                        <!-- Investment Portfolio Content -->
                        <div class="tab-pane fade account-section" id="investment-portfolio">
                            <h4 class="py-3 ml-4">Investment Portfolio</h4>
                            <div class="card-body">
                                <p>
                                    Investment Portfolio Content
                                </p>
                            </div>
                        </div>
                        <!-- Contact Information Content -->
                        <div class="tab-pane fade account-section" id="contact-information">
                            <h4 class="py-3 ml-4">Contact Information</h4>
                            <div class="card-body">
                                <p>
                                    Contact Information Content
                                </p>
                            </div>
                        </div>
                        <!-- Behavioral Insights Content -->
                        <div class="tab-pane fade account-section" id="behavioral-insights">
                            <h4 class="py-3 ml-4">Behavioral Insights</h4>
                            <div class="card-body">
                                <p>
                                    Behavioral Insights Content
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content End -->
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