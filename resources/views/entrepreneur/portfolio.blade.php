<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Entrepreneur - Portfolio</title>
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css" />
    <!-- slick slider css -->
    <link rel="stylesheet" href="assets/css/vendor/slick.css" />
    <link rel="stylesheet" href="assets/css/vendor/dots.css" />
    <!-- dashboard main css -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16" />
    <style>
        h4 {
            color: #CCA354;
        }
    </style>
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
    @include('entrepreneur.inc.header')
    <div class="portfolio-page-header">
        <div class="container mt-100">
            <div class="row">
                <div class="col-lg-12">
                    <div style="text-align: center; padding-top: 15px;">
                        <img src="assets/images/profile-photo/avatar1.png" alt="Profile Image"
                            class="rounded-circle img-fluid ml-1 mr-1" style="width: 300px; height: 300px" />
                        <h2 style="text-align: center; padding-top: 15px;">Entrepreneur Name</h2>
                        <h4 style="text-align: center; padding-top: 15px;">Title/Position</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content Start -->
    <div class="container light-style flex-grow-1 container-p-y pt-4 pb-5 mt-5">
        <h4 class="font-weight-bold py-3 mb-4">Entrepreneur Portfolio</h4>
        <div class="card overflow-hidden" style="background-color: rgba(255, 255, 255, 0);">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-3">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="py-3 ml-4" data-toggle="list" href="#account-entrepreneur-info"><i
                                class="fas fa-user-tie mr-2"></i>Entrepreneur Information</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#startup-details"><i
                                class="fas fa-cogs mr-2"></i>Startup Details</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#achievements"><i
                                class="fas fa-trophy mr-2"></i>Key Achievements</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#funding-history"><i
                                class="fas fa-history mr-2"></i>Funding History</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#pitch-video"><i
                                class="fas fa-video mr-2"></i>Pitch Video</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#projects"><i
                                class="fas fa-briefcase mr-2"></i>Projects</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#testimonials"><i
                                class="fas fa-comment mr-2"></i>Testimonials</a>
                        <a class="py-3 ml-4" data-toggle="list" href="#contact-information"><i
                                class="fas fa-envelope mr-2"></i>Contact Information</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <!-- Entrepreneur Information Content -->
                        <div class="tab-pane fade active show account-section" id="account-entrepreneur-info">
                            <h4 class="py-3 ml-4">Entrepreneur Information</h4>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Full Name</label>
                                    <p>Entrepreneur Name</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Title/Position</label>
                                    <p>Entrepreneur's Title/Position</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Location</label>
                                    <p>Location</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Industry/Domain</label>
                                    <p>Industry/Domain</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact Information</label>
                                    <p>Email: example@example.com</p>
                                    <p>Phone: +123456789</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Social Media Links</label>
                                    <p>
                                        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
                                        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Startup Details Content -->
                        <div class="tab-pane fade account-section" id="startup-details">
                            <h4 class="py-3 ml-4">Startup Details</h4>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Startup Name</label>
                                    <p>Startup Name</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Startup Description</label>
                                    <p>Brief description of the startup, including mission and vision statements.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Key Achievements Content -->
                        <div class="tab-pane fade account-section" id="achievements">
                            <h4 class="py-3 ml-4">Key Achievements</h4>
                            <div class="card-body">
                                <p>List of notable achievements, milestones, or awards.</p>
                            </div>
                        </div>
                        <!-- Funding History Content -->
                        <div class="tab-pane fade account-section" id="funding-history">
                            <h4 class="py-3 ml-4">Funding History</h4>
                            <div class="card-body">
                                <p>Information about previous funding rounds, including amounts raised and key investors.</p>
                            </div>
                        </div>
                        <!-- Pitch Video Content -->
                        <div class="tab-pane fade account-section" id="pitch-video">
                            <h4 class="py-3 ml-4">Pitch Video</h4>
                            <div class="card-body">
                                <p>
                                    <video width="320" height="240" controls>
                                        <source src="path/to/pitch-video.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </p>
                            </div>
                        </div>
                        <!-- Projects Content -->
                        <div class="tab-pane fade account-section" id="projects">
                            <h4 class="py-3 ml-4">Projects</h4>
                            <div class="card-body">
                                <p>List and brief overview of the entrepreneur's projects or startups.</p>
                            </div>
                        </div>
                        <!-- Testimonials Content -->
                        <div class="tab-pane fade account-section" id="testimonials">
                            <h4 class="py-3 ml-4">Testimonials</h4>
                            <div class="card-body">
                                <p>Testimonials or endorsements from investors, customers, or partners.</p>
                            </div>
                        </div>
                        <!-- Contact Information Content -->
                        <div class="tab-pane fade account-section" id="contact-information">
                            <h4 class="py-3 ml-4">Contact Information</h4>
                            <div class="card-body">
                                <p>Contact details such as email address and phone number.</p>
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
