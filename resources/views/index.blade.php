@extends('welcome')
@section('content')
<section class="hero bg_img" data-background="{{ asset('assets/images/bg/hero.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-8">
                <div class="hero__content">
                    <h2 class="hero__title">
                        <span class="text-white font-weight-normal">Invest for Future in Stable Platform</span>
                        <b class="base--color">and Make Fast Money</b>
                    </h2>
                    <p class="text-white f-size-18 mt-3">
                        Invest in an Industry Leader, Professional, and Reliable
                        Company. We provide you with the most necessary features that
                        will make your experience better. Not only do we guarantee the
                        fastest and the most exciting returns on your investments, but
                        we also guarantee the security of your investment.
                        Furthermore, we empower entrepreneurs by offering a platform
                        where they can publish and showcase their innovative ideas,
                        connecting them with investors who are eager to support the
                        next big thing. Join us to be at the forefront of industry
                        innovation and investment opportunities.
                    </p>
                    <a href="registration.html" class="cmn-btn text-uppercase font-weight-600 mt-4">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero end -->
<!-- cureency section start -->
<div class="cureency-section">
    <div class="container">
        <div class="row mb-none-30">
            <div class="col-lg-4 col-sm-6 cureency-item mb-30">
                <div class="cureency-card text-center">
                    <h6 class="cureency-card__title text-white">
                        NUMBER OF INVESTORS
                    </h6>
                    <span class="cureency-card__amount h-font-family font-weight-600 base--color">1,250</span>
                </div>
                <!-- cureency-card end -->
            </div>
            <!-- cureency-item end -->
            <div class="col-lg-4 col-sm-6 cureency-item mb-30">
                <div class="cureency-card text-center">
                    <h6 class="cureency-card__title text-white">
                        NUMBER OF ENTREPRENEURS
                    </h6>
                    <span class="cureency-card__amount h-font-family font-weight-600 base--color">750</span>
                </div>
                <!-- cureency-card end -->
            </div>
            <!-- cureency-item end -->
            <div class="col-lg-4 col-sm-6 cureency-item mb-30">
                <div class="cureency-card text-center">
                    <h6 class="cureency-card__title text-white">
                        TOTAL INVESTMENT
                    </h6>
                    <span class="cureency-card__amount h-font-family font-weight-600 base--color">$4,500,000</span>
                </div>
                <!-- cureency-card end -->
            </div>
            <!-- cureency-item end -->
        </div>
    </div>
</div>
<!-- cureency section end  -->
<!-- about section start -->
<section class="about-section pt-120 pb-120 bg_img" data-background="{{ asset('assets/images/bg/bg-2.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="about-content">
                    <h2 class="section-title mb-3">
                        <span class="font-weight-normal">About</span>
                        <b class="base--color">Us</b>
                    </h2>
                    <p>
                        We are an international financial company engaged in
                        investment activities, which are related to trading on
                        financial markets and cryptocurrency exchanges performed by
                        qualified professional traders.
                    </p>
                    <p class="mt-4">
                        Our goal is to provide our investors with a reliable source of
                        high income, while minimizing any possible risks and offering
                        a high-quality service, allowing us to automate and simplify
                        the relations between the investors and the trustees. We work
                        towards increasing your profit margin by profitable
                        investment. We look forward to you being part of our
                        community.
                    </p>
                    <p class="mt-4">
                        Are you an entrepreneur with innovative ideas but lacking the
                        necessary funding to bring them to life? Look no further! We
                        welcome visionaries like you to join our platform and share
                        your groundbreaking ideas. At our company, we believe in
                        fostering creativity and supporting entrepreneurial endeavors.
                        By collaborating with us, you'll gain access to the resources
                        and expertise needed to turn your ideas into reality. Let's
                        work together to unlock the full potential of your vision and
                        create a brighter future for all.
                    </p>
                    <a href="#0" class="cmn-btn mt-4">MORE INFO</a>
                </div>
                <!-- about-content end -->
            </div>
        </div>
    </div>
</section>
<!-- about section end -->
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
                <div class="package-card text-center bg_img"
                    data-background="{{ asset('assets/images/bg/bg-4.png') }}">
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
                <div class="package-card text-center bg_img"
                    data-background="{{ asset('assets/images/bg/bg-4.png') }}">
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
                <div class="package-card text-center bg_img"
                    data-background="{{ asset('assets/images/bg/bg-4.png') }}">
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
                <div class="package-card text-center bg_img"
                    data-background="{{ asset('assets/images/bg/bg-4.png') }}}">
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
<!-- choose us section start -->
<section class="pt-120 pb-120 overlay--radial bg_img" data-background="{{ asset('assets/images/bg/bg-3.jpg') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title">
                        <span class="font-weight-normal">Why Choose</span>
                        <b class="base--color">IdeaVenture</b>
                    </h2>
                    <p>
                        Our goal is to provide our investors with a reliable source of
                        high income, while minimizing any possible risks and offering
                        a high-quality service. Additionally, we are committed to
                        empowering entrepreneurs by offering them a platform where
                        they can publish and share their innovative ideas. This
                        initiative not only fosters a vibrant community of
                        forward-thinkers but also ensures our investors have access to
                        a diverse array of investment opportunities.
                    </p>
                </div>
            </div>
        </div>
        <!-- row end -->
        <div class="row justify-content-center mb-none-30">
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="choose-card border-radius--5">
                    <div class="choose-card__header mb-3">
                        <div class="choose-card__icon">
                            <i class="lar la-copy"></i>
                        </div>
                        <h4 class="choose-card__title base--color">Legal Company</h4>
                    </div>
                    <p>
                        Our company conducts absolutely legal activities in the legal
                        field. We are certified to operate investment business, we are
                        legal and safe.
                    </p>
                </div>
                <!-- choose-card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="choose-card border-radius--5">
                    <div class="choose-card__header mb-3">
                        <div class="choose-card__icon">
                            <i class="las la-lock"></i>
                        </div>
                        <h4 class="choose-card__title base--color">
                            High reliability
                        </h4>
                    </div>
                    <p>
                        We are trusted by a huge number of people. We are working hard
                        constantly to improve the level of our security system and
                        minimize possible risks.
                    </p>
                </div>
                <!-- choose-card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="choose-card border-radius--5">
                    <div class="choose-card__header mb-3">
                        <div class="choose-card__icon">
                            <i class="las la-user-lock"></i>
                        </div>
                        <h4 class="choose-card__title base--color">Anonymity</h4>
                    </div>
                    <p>
                        Anonymity and using cryptocurrency as a payment instrument. In
                        the era of electronic money – this is one of the most
                        convenient ways of cooperation.
                    </p>
                </div>
                <!-- choose-card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="choose-card border-radius--5">
                    <div class="choose-card__header mb-3">
                        <div class="choose-card__icon">
                            <i class="las la-shipping-fast"></i>
                        </div>
                        <h4 class="choose-card__title base--color">
                            Quick Withdrawal
                        </h4>
                    </div>
                    <p>
                        Our all retreats are treated spontaneously once requested.
                        There are high maximum limits. The minimum withdrawal amount
                        is only $10.
                    </p>
                </div>
                <!-- choose-card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="choose-card border-radius--5">
                    <div class="choose-card__header mb-3">
                        <div class="choose-card__icon">
                            <i class="las la-users"></i>
                        </div>
                        <h4 class="choose-card__title base--color">
                            Referral Program
                        </h4>
                    </div>
                    <p>
                        We are offering a certain level of referral income through our
                        referral program. you can increase your income by simply refer
                        a few people.
                    </p>
                </div>
                <!-- choose-card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="choose-card border-radius--5">
                    <div class="choose-card__header mb-3">
                        <div class="choose-card__icon">
                            <i class="las la-headset"></i>
                        </div>
                        <h4 class="choose-card__title base--color">24/7 Support</h4>
                    </div>
                    <p>
                        We provide 24/7 customer support through e-mail and telegram.
                        Our support representatives are periodically available to
                        elucidate any difficulty..
                    </p>
                </div>
                <!-- choose-card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="choose-card border-radius--5">
                    <div class="choose-card__header mb-3">
                        <div class="choose-card__icon">
                            <i class="las la-server"></i>
                        </div>
                        <h4 class="choose-card__title base--color">
                            Dedicated Server
                        </h4>
                    </div>
                    <p>
                        We are using a dedicated server for the website which allows
                        us exclusive use of the resources of the entire server.
                    </p>
                </div>
                <!-- choose-card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="choose-card border-radius--5">
                    <div class="choose-card__header mb-3">
                        <div class="choose-card__icon">
                            <i class="fab fa-expeditedssl"></i>
                        </div>
                        <h4 class="choose-card__title base--color">SSL Secured</h4>
                    </div>
                    <p>
                        Comodo Essential-SSL Security encryption confirms that the
                        presented content is genuine and legitimate.
                    </p>
                </div>
                <!-- choose-card end -->
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="choose-card border-radius--5">
                    <div class="choose-card__header mb-3">
                        <div class="choose-card__icon">
                            <i class="las la-shield-alt"></i>
                        </div>
                        <h4 class="choose-card__title base--color">
                            DDOS Protection
                        </h4>
                    </div>
                    <p>
                        We are using one of the most experienced, professional, and
                        trusted DDoS Protection and mitigation provider.
                    </p>
                </div>
                <!-- choose-card end -->
            </div>
        </div>
    </div>
</section>
<!-- choose us section end  -->
<!-- profit calculator section start -->
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-title">
                        <span class="font-weight-normal">Profit</span>
                        <b class="base--color">Calculator</b>
                    </h2>
                    <p>
                        You must know the calculation before investing in any plan, so
                        you never make mistakes. Check the calculation and you will
                        get as our calculator says.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="profit-calculator-wrapper">
                    <form class="profit-calculator">
                        <div class="row mb-none-30">
                            <div class="col-lg-6 mb-30">
                                <label>Choose Plan</label>
                                <select class="base--bg">
                                    <option value="Standard Package">
                                        Standard Package
                                    </option>
                                    <option value="Silver Package">Silver Package</option>
                                    <option value="Premium Package">Premium Package</option>
                                    <option value="Platinum Package">
                                        Platinum Package
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <label>Invest Amount</label>
                                <input type="text" name="invest_amount" id="invest_amount" placeholder="0.00"
                                    class="form-control base--bg" />
                            </div>
                            <div class="col-lg-12 mb-30">
                                <label>Profit Amount</label>
                                <input type="text" name="profit_amount" id="profit_amount" placeholder="0.00"
                                    class="form-control base--bg" disabled />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- profit calculator section end -->
<!-- how work section start -->
<section class="pt-120 pb-120 bg_img" data-background="{{ asset('assets/images/bg/bg-5.jpg') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title">
                        <span class="font-weight-normal">How</span>
                        <b class="base--color">IdeaVenture</b>
                        <span class="font-weight-normal">Works</span>
                    </h2>
                    <p>
                        Get involved in our tremendous platform and Invest. We will
                        utilize your money and give you profit in your wallet
                        automatically.
                    </p>
                    <p>
                        Are you an entrepreneur with groundbreaking ideas but lacking
                        the necessary funding to bring them to life? Get involved in
                        our tremendous platform and connect with investors. We provide
                        the resources and support needed to turn your ideas into
                        reality. Utilize our platform to attract investment, and we'll
                        help you transform your vision into profit. Join us today and
                        watch your ideas thrive!
                    </p>
                </div>
            </div>
        </div>
        <!-- row end -->
        <div class="row justify-content-center mb-none-30">
            <div class="col-lg-4 col-md-6 work-item mb-30">
                <div class="work-card text-center">
                    <div class="work-card__icon">
                        <i class="las la-user base--color"></i>
                        <span class="step-number">01</span>
                    </div>
                    <div class="work-card__content">
                        <h4 class="base--color mb-3">Create Account</h4>
                    </div>
                </div>
                <!-- work-card end -->
            </div>
            <div class="col-lg-4 col-md-6 work-item mb-30">
                <div class="work-card text-center">
                    <div class="work-card__icon">
                        <i class="las la-hand-holding-usd base--color"></i>
                        <span class="step-number">02</span>
                    </div>
                    <div class="work-card__content">
                        <h4 class="base--color mb-3">
                            Invest To Idea or Pitch Your Idea
                        </h4>
                    </div>
                </div>
                <!-- work-card end -->
            </div>
            <div class="col-lg-4 col-md-6 work-item mb-30">
                <div class="work-card text-center">
                    <div class="work-card__icon">
                        <i class="las la-wallet base--color"></i>
                        <span class="step-number">03</span>
                    </div>
                    <div class="work-card__content">
                        <h4 class="base--color mb-3">Get Profit</h4>
                    </div>
                </div>
                <!-- work-card end -->
            </div>
        </div>
    </div>
</section>
<!-- how work section end  -->
<!-- faq section start -->
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title">
                        <span class="font-weight-normal">Frequently Asked</span>
                        <b class="base--color">Questions</b>
                    </h2>
                    <p>
                        We answer some of your Frequently Asked Questions regarding
                        our platform. If you have a query that is not answered here,
                        Please contact us.
                    </p>
                </div>
            </div>
        </div>
        <!-- row end -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion cmn-accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <i class="las la-question-circle"></i>
                                    <span>When can I deposit/withdraw from my Investment
                                        account?</span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Deposit and withdrawal are available for at any time. Be
                                sure, that your funds are not used in any ongoing trade
                                before the withdrawal. The available amount is shown in
                                your dashboard on the main page of Investing platform.
                                Deposit and withdrawal are available for at any time. Be
                                sure, that your funds are not used in any ongoing trade
                                before the withdrawal. The available amount is shown in
                                your dashboard on the main page of Investing platform.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <i class="las la-question-circle"></i>
                                    <span>How do I check my account balance?</span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                You can see this anytime on your accounts dashboard. You
                                can see this anytime on your accounts dashboard.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <i class="las la-question-circle"></i>
                                    <span>I forgot my password, what should I do?</span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Visit the password reset page, type in your email address
                                and click the `Reset` button. Visit the password reset
                                page, type in your email address and click the `Reset`
                                button.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <i class="las la-question-circle"></i>
                                    <span>How will I know that the withdrawal has been
                                        successful?</span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                You will get an automatic notification once we send the
                                funds and you can always check your transactions or
                                account balance. Your chosen payment system dictates how
                                long it will take for the funds to reach you. You will get
                                an automatic notification once we send the funds and you
                                can always check your transactions or account balance.
                                Your chosen payment system dictates how long it will take
                                for the funds to reach you.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    <i class="las la-question-circle"></i>
                                    <span>How much can I withdraw?</span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                You can withdraw the full amount of your account balance
                                minus the funds that are used currently for supporting
                                opened positions. You can withdraw the full amount of your
                                account balance minus the funds that are used currently
                                for supporting opened positions.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    <i class="las la-question-circle"></i>
                                    <span>How can I publish my idea on your platform?</span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                To publish your idea, simply create an account with us and
                                navigate to the 'Publish Idea' section. Fill in the
                                required details about your idea, ensuring you highlight
                                its uniqueness and potential impact. Our team will review
                                your submission and, if it meets our criteria, will
                                publish it on our platform to connect with potential
                                investors.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    <i class="las la-question-circle"></i>
                                    <span>What criteria must my idea meet to be
                                        published?</span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Your idea should be innovative, with a clear value
                                proposition and market potential. It must also be ethical,
                                legal, and in line with our platform's goals of fostering
                                positive societal impact. Detailed business plans and
                                evidence of preliminary market research will enhance the
                                likelihood of your idea being published.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    <i class="las la-question-circle"></i>
                                    <span>Is there a fee to publish or promote my idea on the
                                        platform?</span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Publishing your idea on our platform is currently free. We
                                believe in supporting entrepreneurs by providing a
                                cost-free environment to share their innovations. For
                                those interested in additional promotion within our
                                network, we offer premium services at a competitive rate.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingNine">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseNine" aria-expanded="false"
                                    aria-controls="collapseNine">
                                    <i class="las la-question-circle"></i>
                                    <span>How do I connect with investors interested in my
                                        idea?</span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                Once your idea is published, investors can view and
                                express their interest directly through our platform. We
                                provide a messaging system for secure communications.
                                Additionally, our team offers support to facilitate
                                introductions and meetings with potential investors.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq section end -->
<!-- testimonial section start -->
<section class="pt-120 pb-120 bg_img overlay--radial" data-background="{{ asset('assets/images/bg/bg-7.jpg') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title">
                        <span class="font-weight-normal">What Users Say</span>
                        <b class="base--color">About Us</b>
                    </h2>
                    <p>
                        At the heart of our mission lies a commitment to innovation
                        and excellence. We believe in creating value through
                        unparalleled services and solutions that not only meet but
                        exceed our clients' expectations. Our dedication to quality
                        drives us to embrace the challenges of a fast-evolving
                        marketplace, ensuring we are always ahead of the curve. By
                        fostering a culture of trust and integrity, we aim to build
                        lasting relationships with our clients, ensuring their success
                        is our top priority. Every step we take is guided by our
                        unwavering focus on delivering results that matter.
                    </p>
                </div>
            </div>
        </div>
        <!-- row end -->
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-slider">
                    <div class="single-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card__content">
                                <p>
                                    "The guidance and support I've received have been
                                    outstanding. The team's expertise has significantly
                                    impacted my investment strategy, leading to noticeable
                                    gains. Their personalized approach makes all the
                                    difference."
                                </p>
                            </div>
                            <div class="testimonial-card__client">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/1.jpg') }}" alt="image" />
                                </div>
                                <div class="content">
                                    <h6 class="name">Alex Johnson</h6>
                                    <span class="designation">Entrepreneur & Investor</span>
                                    <div class="ratings">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial-card end -->
                    </div>
                    <!-- single-slide end -->
                    <div class="single-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card__content">
                                <p>
                                    "As a newcomer to investing, I was looking for direction
                                    and confidence. This platform offered me both, with
                                    resources that educated me and advisors who were
                                    genuinely invested in my success."
                                </p>
                            </div>
                            <div class="testimonial-card__client">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/2.jpg') }}" alt="image" />
                                </div>
                                <div class="content">
                                    <h6 class="name">Samantha Green</h6>
                                    <span class="designation">Novice Investor</span>
                                    <div class="ratings">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial-card end -->
                    </div>
                    <!-- single-slide end -->
                    <div class="single-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card__content">
                                <p>
                                    "Exploring new investment opportunities was made easier
                                    with their innovative platform. It's not just about the
                                    tools; it's the trust and the growth I've experienced
                                    that have made me a loyal client."
                                </p>
                            </div>
                            <div class="testimonial-card__client">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/3.jpg') }}" alt="image" />
                                </div>
                                <div class="content">
                                    <h6 class="name">Michael Brown</h6>
                                    <span class="designation">Seasoned Investor</span>
                                    <div class="ratings">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial-card end -->
                    </div>
                    <!-- single-slide end -->
                    <div class="single-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-card__content">
                                <p>
                                    "Transparency and integrity are what I value most in our
                                    collaboration. It's refreshing to partner with a company
                                    that not only prioritizes my financial growth but also
                                    operates with such high ethical standards."
                                </p>
                            </div>
                            <div class="testimonial-card__client">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/4.jpg') }}" alt="image" />
                                </div>
                                <div class="content">
                                    <h6 class="name">Danielle Wright</h6>
                                    <span class="designation">Business Consultant</span>
                                    <div class="ratings">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial-card end -->
                    </div>
                    <!-- single-slide end -->
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
</section>
<!-- testimonial section end -->
<!-- team section start -->
<section class="pt-120 pb-120 bg_img" style="background-image: url('{{ asset('assets/images/bg/bg-5.jpg') }}')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title">
                        <span class="font-weight-normal">Our Expert</span>
                        <b class="base--color">Team Members</b>
                    </h2>
                    <p>
                        At IdeaVenture, our team comprises industry-leading experts
                        dedicated to pushing the boundaries of what's possible. With a
                        blend of seasoned professionals and bright minds, we thrive on
                        innovation, excellence, and creating impactful solutions. Our
                        diverse skill sets in design, development, analysis, and
                        strategy enable us to tackle complex challenges and deliver
                        exceptional value to our clients. Together, we're committed to
                        setting new standards and driving success in our industry.
                    </p>
                </div>
            </div>
        </div>
        <!-- row for team members -->
        <div class="row justify-content-center mb-none-30">
            <!-- Team Member 1 -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-30">
                <div class="team-card">
                    <div class="team-card__thumb">
                        <img src="{{ asset('assets/images/investor/1.jpg') }}" alt="Mohamed Belal" />
                    </div>
                    <div class="team-card__content">
                        <h4 class="name mb-1">Mohamed Belal</h4>
                        <hr />
                        <span class="designation">Back-End Dev</span>
                        <div class="team-card__icons">
                            <a href="https://linkedin.com/in/Belal" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://twitter.com/Belal" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="mailto:Belal@example.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-30">
                <div class="team-card">
                    <div class="team-card__thumb">
                        <img src="{{ asset('assets/images/investor/2.jpg') }}" alt="Mohamed Salem" />
                    </div>
                    <div class="team-card__content">
                        <h4 class="name mb-1">Mohamed Salem</h4>
                        <hr />
                        <span class="designation">Front-End Dev</span>
                        <div class="team-card__icons">
                            <a href="https://linkedin.com/in/Salem" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://twitter.com/Salem" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="mailto:Salem@example.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-30">
                <div class="team-card">
                    <div class="team-card__thumb">
                        <img src="{{ asset('assets/images/investor/3.jpg') }}" alt="Mohamed Nasr" />
                    </div>
                    <div class="team-card__content">
                        <h4 class="name mb-1">Mohamed Nasr</h4>
                        <hr />
                        <span class="designation">Front-End Dev</span>
                        <div class="team-card__icons">
                            <a href="https://linkedin.com/in/Nasr" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://twitter.com/Nasr" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="mailto:Nasr@example.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Member 4 -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-30">
                <div class="team-card">
                    <div class="team-card__thumb">
                        <img src="{{ asset('assets/images/investor/4.jpg') }}" alt="Karim Sherif" />
                    </div>
                    <div class="team-card__content">
                        <h4 class="name mb-1">
                            Karim <br />
                            Sherif
                        </h4>
                        <hr />
                        <span class="designation">Back-End Dev</span>
                        <div class="team-card__icons">
                            <a href="https://linkedin.com/in/Karim" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://twitter.com/Karim" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="mailto:Karim@example.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Member 5 -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-30">
                <div class="team-card">
                    <div class="team-card__thumb">
                        <img src="{{ asset('assets/images/investor/5.jpg') }}" alt="Abdelrahman Radwan" />
                    </div>
                    <div class="team-card__content">
                        <h4 class="name mb-1">Abdelrahman Radwan</h4>
                        <hr />
                        <span class="designation">System Analyst</span>
                        <div class="team-card__icons">
                            <a href="https://linkedin.com/in/Abdelrahman" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://twitter.com/Abdelrahman" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="mailto:Abdelrahman@example.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second row for team members -->
        <div class="row justify-content-center mb-none-30 mt-5">
            <!-- Team Member 6 -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-30">
                <div class="team-card">
                    <div class="team-card__thumb">
                        <img src="{{ asset('assets/images/investor/6.jpg') }}" alt="Eman Eid" />
                    </div>
                    <div class="team-card__content">
                        <h4 class="name mb-1">
                            Eman <br />
                            Eid
                        </h4>
                        <hr />
                        <span class="designation">System Analyst</span>
                        <div class="team-card__icons">
                            <a href="https://linkedin.com/in/Eman" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://twitter.com/Eman" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="mailto:Eman@example.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Member 7 -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-30">
                <div class="team-card">
                    <div class="team-card__thumb">
                        <img src="{{ asset('assets/images/investor/7.jpg') }}" alt="Ritan Hassanein" />
                    </div>
                    <div class="team-card__content">
                        <h4 class="name mb-1">Ritan Hassanein</h4>
                        <hr />
                        <span class="designation">UI&UX Designer</span>
                        <div class="team-card__icons">
                            <a href="https://linkedin.com/in/Ritan" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://twitter.com/Ritan" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="mailto:Ritan@example.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Member 8 -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-30">
                <div class="team-card">
                    <div class="team-card__thumb">
                        <img src="{{ asset('assets/images/investor/8.jpg') }}" alt="Omar Muhammad" />
                    </div>
                    <div class="team-card__content">
                        <h4 class="name mb-1">Omar Muhammad</h4>
                        <hr />
                        <span class="designation">UI&UX Designer</span>
                        <div class="team-card__icons">
                            <a href="https://linkedin.com/in/Omar" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://twitter.com/Omar" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="mailto:Omar@example.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Member 9 -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-30">
                <div class="team-card">
                    <div class="team-card__thumb">
                        <img src="{{ asset('assets/images/investor/3.jpg') }}" alt="Mohamed Darwish" />
                    </div>
                    <div class="team-card__content">
                        <h4 class="name mb-1">Mohamed Darwish</h4>
                        <hr />
                        <span class="designation">Back-End Dev</span>
                        <div class="team-card__icons">
                            <a href="https://linkedin.com/in/Darwish" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://twitter.com/Darwish" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="mailto:Darwish@example.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Member 10 -->
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 mb-30">
                <div class="team-card">
                    <div class="team-card__thumb">
                        <img src="{{ asset('assets/images/investor/3.jpg') }}" alt="Omar Fayez" />
                    </div>
                    <div class="team-card__content">
                        <h4 class="name mb-1">
                            Omar <br />
                            Fayez
                        </h4>
                        <hr />
                        <span class="designation">Data Scientist</span>
                        <div class="team-card__icons">
                            <a href="https://linkedin.com/in/Fayez" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                            <a href="https://twitter.com/Fayez" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="mailto:Fayez@example.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team section end -->
<!-- data section start -->
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title">
                        <span class="font-weight-normal">Our Latest</span>
                        <b class="base--color">Transactions</b>
                    </h2>
                    <p>
                        Here is the log of the most recent transactions including withdrawals and deposits made by
                        our users.
                    </p>
                </div>
            </div>
        </div>
        <!-- row end -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <ul class="nav nav-tabs custom--style-two justify-content-center" id="transactionTab"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="deposit-tab" data-toggle="tab" href="#deposit"
                            role="tab" aria-controls="deposit" aria-selected="true">Latest Deposits</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="withdraw-tab" data-toggle="tab" href="#withdraw" role="tab"
                            aria-controls="withdraw" aria-selected="false">Latest Withdrawals</a>
                    </li>
                </ul>
                <div class="tab-content mt-4" id="transactionTabContent">
                    <div class="tab-pane fade show active" id="deposit" role="tabpanel"
                        aria-labelledby="deposit-tab">
                        <div class="table-responsive--sm">
                            <table class="table style--two">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Gateway</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="Name">
                                            <div class="user">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/investor/1.jpg') }}"
                                                        alt="image" />
                                                </div>
                                                <span>Jane Doe</span>
                                            </div>
                                        </td>
                                        <td data-label="Date">May 05, 2024</td>
                                        <td data-label="Amount">$1,500</td>
                                        <td data-label="Gateway">PayPal</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Name">
                                            <div class="user">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/investor/2.jpg') }}"
                                                        alt="image" />
                                                </div>
                                                <span>Michael Smith</span>
                                            </div>
                                        </td>
                                        <td data-label="Date">May 04, 2024</td>
                                        <td data-label="Amount">$2,000</td>
                                        <td data-label="Gateway">Stripe</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Name">
                                            <div class="user">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/investor/3.jpg') }}"
                                                        alt="image" />
                                                </div>
                                                <span>Anna Williams</span>
                                            </div>
                                        </td>
                                        <td data-label="Date">May 03, 2024</td>
                                        <td data-label="Amount">$1,200</td>
                                        <td data-label="Gateway">Bank Transfer</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Name">
                                            <div class="user">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/investor/4.jpg') }}"
                                                        alt="image" />
                                                </div>
                                                <span>Chris Johnson</span>
                                            </div>
                                        </td>
                                        <td data-label="Date">May 02, 2024</td>
                                        <td data-label="Amount">$1,800</td>
                                        <td data-label="Gateway">PayPal</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Name">
                                            <div class="user">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/investor/5.jpg') }}"
                                                        alt="image" />
                                                </div>
                                                <span>Sarah Taylor</span>
                                            </div>
                                        </td>
                                        <td data-label="Date">May 01, 2024</td>
                                        <td data-label="Amount">$2,500</td>
                                        <td data-label="Gateway">Credit Card</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
                        <div class="table-responsive--md">
                            <table class="table style--two">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Gateway</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="Name">
                                            <div class="user">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/investor/1.jpg') }}"
                                                        alt="image" />
                                                </div>
                                                <span>Jane Doe</span>
                                            </div>
                                        </td>
                                        <td data-label="Date">May 05, 2024</td>
                                        <td data-label="Amount">$750</td>
                                        <td data-label="Gateway">Bank Transfer</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Name">
                                            <div class="user">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/investor/2.jpg') }}"
                                                        alt="image" />
                                                </div>
                                                <span>Michael Smith</span>
                                            </div>
                                        </td>
                                        <td data-label="Date">May 04, 2024</td>
                                        <td data-label="Amount">$1,000</td>
                                        <td data-label="Gateway">PayPal</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Name">
                                            <div class="user">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/investor/3.jpg') }}"
                                                        alt="image" />
                                                </div>
                                                <span>Anna Williams</span>
                                            </div>
                                        </td>
                                        <td data-label="Date">May 03, 2024</td>
                                        <td data-label="Amount">$1,200</td>
                                        <td data-label="Gateway">Credit Card</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Name">
                                            <div class="user">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/investor/4.jpg') }}"
                                                        alt="image" />
                                                </div>
                                                <span>Chris Johnson</span>
                                            </div>
                                        </td>
                                        <td data-label="Date">May 02, 2024</td>
                                        <td data-label="Amount">$850</td>
                                        <td data-label="Gateway">Stripe</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Name">
                                            <div class="user">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/investor/5.jpg') }}"
                                                        alt="image" />
                                                </div>
                                                <span>Sarah Taylor</span>
                                            </div>
                                        </td>
                                        <td data-label="Date">May 01, 2024</td>
                                        <td data-label="Amount">$1,400</td>
                                        <td data-label="Gateway">Bank Transfer</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- tab-content end -->
            </div>
        </div>
    </div>
</section>
<!-- data section end -->
<!-- top investor section start -->
<section class="pt-120 pb-120 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 text-center">
                <div class="section-header">
                    <h2 class="section-title">
                        <span class="font-weight-normal">Our Top</span>
                        <b class="base--color">Investors</b>
                    </h2>
                    <p>
                        Meet our top investors who have made significant contributions to our platform with their
                        investments.
                    </p>
                </div>
            </div>
        </div>
        <!-- row end -->
        <div class="row justify-content-center mb-none-30">
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="investor-card border-radius--5">
                    <div class="investor-card__thumb bg_img background-position-y-top"
                        data-background="{{ asset('assets/images/investor/1.jpg') }}"></div>
                    <div class="investor-card__content">
                        <h6 class="name">John Anderson</h6>
                        <span class="amount f-size-14">Investment - $3,200,000</span>
                    </div>
                </div>
                <!-- investor-card end -->
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="investor-card border-radius--5">
                    <div class="investor-card__thumb bg_img background-position-y-top"
                        data-background="{{ asset('assets/images/investor/2.jpg') }}"></div>
                    <div class="investor-card__content">
                        <h6 class="name">Jane Miller</h6>
                        <span class="amount f-size-14">Investment - $2,850,000</span>
                    </div>
                </div>
                <!-- investor-card end -->
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="investor-card border-radius--5">
                    <div class="investor-card__thumb bg_img background-position-y-top"
                        data-background="{{ asset('assets/images/investor/3.jpg') }}"></div>
                    <div class="investor-card__content">
                        <h6 class="name">Robert Johnson</h6>
                        <span class="amount f-size-14">Investment - $2,400,000</span>
                    </div>
                </div>
                <!-- investor-card end -->
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="investor-card border-radius--5">
                    <div class="investor-card__thumb bg_img background-position-y-top"
                        data-background="{{ asset('assets/images/investor/4.jpg') }}"></div>
                    <div class="investor-card__content">
                        <h6 class="name">Emily Davis</h6>
                        <span class="amount f-size-14">Investment - $1,950,000</span>
                    </div>
                </div>
                <!-- investor-card end -->
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="investor-card border-radius--5">
                    <div class="investor-card__thumb bg_img background-position-y-top"
                        data-background="{{ asset('assets/images/investor/5.jpg') }}"></div>
                    <div class="investor-card__content">
                        <h6 class="name">David Wilson</h6>
                        <span class="amount f-size-14">Investment - $1,800,000</span>
                    </div>
                </div>
                <!-- investor-card end -->
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="investor-card border-radius--5">
                    <div class="investor-card__thumb bg_img background-position-y-top"
                        data-background="{{ asset('assets/images/investor/6.jpg') }}"></div>
                    <div class="investor-card__content">
                        <h6 class="name">Sarah Thompson</h6>
                        <span class="amount f-size-14">Investment - $1,500,000</span>
                    </div>
                </div>
                <!-- investor-card end -->
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="investor-card border-radius--5">
                    <div class="investor-card__thumb bg_img background-position-y-top"
                        data-background="{{ asset('assets/images/investor/7.jpg') }}"></div>
                    <div class="investor-card__content">
                        <h6 class="name">Michael Brown</h6>
                        <span class="amount f-size-14">Investment - $1,350,000</span>
                    </div>
                </div>
                <!-- investor-card end -->
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="investor-card border-radius--5">
                    <div class="investor-card__thumb bg_img background-position-y-top"
                        data-background="{{ asset('assets/images/investor/8.jpg') }}"></div>
                    <div class="investor-card__content">
                        <h6 class="name">Emma White</h6>
                        <span class="amount f-size-14">Investment - $1,250,000</span>
                    </div>
                </div>
                <!-- investor-card end -->
            </div>
        </div>
    </div>
</section>
<!-- top investor section end -->
<!-- cta section start -->
<section class="pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="cta-wrapper bg_img border-radius--10 text-center"
                    data-background="{{ asset('assets/images/bg/bg-8.jpg') }}">
                    <h2 class="title mb-3">Get Started Today With Us</h2>
                    <p>
                        This is a Revolutionary Money Making Platform! Invest for
                        Future in Stable Platform and Make Fast Money. Not only do we
                        guarantee the fastest and the most exciting returns on your
                        investments, but we also guarantee the security of your
                        investment.
                    </p>
                    <p>
                        For Entrepreneurs, this is your stage to shine! Publish your innovative ideas here and
                        find investors who are as passionate as you are. Whether you're looking to change the
                        world or find the next big thing, we're here to help you connect with others who share
                        your vision.
                    </p>
                    <a href="registration.html" class="cmn-btn mt-4">Join Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta section end -->
<!-- payment brand section start -->
<section class="pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title">
                        <span class="font-weight-normal">Payment We</span>
                        <b class="base--color">Accept</b>
                    </h2>
                    <p>
                        We accept all major cryptocurrencies and fiat payment methods
                        to make your investment process easier with our platform.
                    </p>
                </div>
            </div>
        </div>
        <!-- row end -->
        <div class="row">
            <div class="col-lg-12">
                <div class="payment-slider">
                    <div class="single-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/images/brand/1.png') }}" alt="image" />
                        </div>
                        <!-- brand-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/images/brand/2.png') }}" alt="image" />
                        </div>
                        <!-- brand-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/images/brand/3.png') }}" alt="image" />
                        </div>
                        <!-- brand-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/images/brand/4.png') }}" alt="image" />
                        </div>
                        <!-- brand-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/images/brand/5.png') }}" alt="image" />
                        </div>
                        <!-- brand-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/images/brand/6.png') }}" alt="image" />
                        </div>
                        <!-- brand-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/images/brand/7.png') }}" alt="image" />
                        </div>
                        <!-- brand-item end -->
                    </div>
                    <div class="single-slide">
                        <div class="brand-item">
                            <img src="{{ asset('assets/images/brand/8.png') }}" alt="image" />
                        </div>
                        <!-- brand-item end -->
                    </div>
                </div>
                <!-- payment-slider end -->
            </div>
        </div>
    </div>
</section>
<!-- payment brand section end -->
<!-- blog section start -->
<section class="pt-120 pb-120 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-header">
                    <h2 class="section-title">
                        <span class="font-weight-normal">Our Latest</span>
                        <b class="base--color">News</b>
                    </h2>
                    <p>
                        At the core of our mission lies the commitment to fostering innovation and delivering
                        excellence. We
                        understand the importance of advancing with technology and trends, ensuring that our
                        solutions not only
                        meet but exceed the expectations of our clients. Our dedication to quality, integrity, and
                        sustainability drives us to not only envision a better future but to actively participate in
                        creating
                        it. We take pride in our ability to navigate challenges and leverage opportunities, all
                        while
                        maintaining our commitment to making a positive impact in the lives of those we serve and
                        the world at
                        large.
                    </p>
                </div>
            </div>
        </div>
        <!-- row end -->
        <div class="row justify-content-center mb-none-30">
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="blog-card">
                    <div class="blog-card__thumb">
                        <img src="{{ asset('assets/images/blog/1.jpg') }}" alt="image" />
                    </div>
                    <div class="blog-card__content">
                        <h4 class="blog-card__title mb-3">
                            <a href="#0">5 Emerging Tech Startups to Watch in 2024</a>
                        </h4>
                        <ul class="blog-card__meta d-flex flex-wrap mb-4">
                            <li>
                                <i class="las la-user"></i>
                                <a href="#0">By Jane Doe</a>
                            </li>
                            <li>
                                <i class="las la-calendar"></i>
                                <a href="#0">April 15, 2024</a>
                            </li>
                        </ul>
                        <p>
                            Explore our curated list of the top five tech startups set to disrupt the industry in
                            2024. From
                            innovative AI solutions to groundbreaking sustainable energy technologies, find out
                            who's leading the
                            charge in innovation.
                        </p>
                        <a href="#0" class="cmn-btn btn-md mt-4">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="blog-card">
                    <div class="blog-card__thumb">
                        <img src="{{ asset('assets/images/blog/2.jpg') }}" alt="image" />
                    </div>
                    <div class="blog-card__content">
                        <h4 class="blog-card__title mb-3">
                            <a href="#0">The Investor's Guide to Sustainable Investments in 2024</a>
                        </h4>
                        <ul class="blog-card__meta d-flex flex-wrap mb-4">
                            <li>
                                <i class="las la-user"></i>
                                <a href="#0">By Michael Smith</a>
                            </li>
                            <li>
                                <i class="las la-calendar"></i>
                                <a href="#0">March 22, 2024</a>
                            </li>
                        </ul>
                        <p>
                            Sustainability is no longer just a buzzword; it's a crucial aspect of investing.
                            Discover how aligning
                            your portfolio with sustainable investments can lead to long-term benefits for both your
                            finances and
                            the planet.
                        </p>
                        <a href="#0" class="cmn-btn btn-md mt-4">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="blog-card">
                    <div class="blog-card__thumb">
                        <img src="{{ asset('assets/images/blog/3.jpg') }}" alt="image" />
                    </div>
                    <div class="blog-card__content">
                        <h4 class="blog-card__title mb-3">
                            <a href="#0">Entrepreneurship in the Digital Era</a>
                        </h4>
                        <ul class="blog-card__meta d-flex flex-wrap mb-4">
                            <li>
                                <i class="las la-user"></i>
                                <a href="#0">By Sarah Johnson</a>
                            </li>
                            <li>
                                <i class="las la-calendar"></i>
                                <a href="#0">February 10, 2024</a>
                            </li>
                        </ul>
                        <p>
                            The digital age offers unprecedented opportunities for entrepreneurs, but it comes with
                            its set of
                            challenges. Learn strategies for overcoming these hurdles and driving your business
                            towards success.
                        </p>
                        <a href="#0" class="cmn-btn btn-md mt-4">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog section end -->
<!-- subscribe section start -->
<section class="pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="subscribe-wrapper bg_img" data-background="{{ asset('assets/images/bg/bg-5.jpg') }}">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <h2 class="title">Subscribe Our Newsletter</h2>
                        </div>
                        <div class="col-lg-7 mt-lg-0 mt-4">
                            <form class="subscribe-form">
                                <input type="email" class="form-control" placeholder="Email Address" />
                                <button class="subscribe-btn">
                                    <i class="las la-envelope"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- subscribe-wrapper end -->
            </div>
        </div>
    </div>
</section>
<!-- subscribe section end -->
<!-- footer section start -->

@endsection