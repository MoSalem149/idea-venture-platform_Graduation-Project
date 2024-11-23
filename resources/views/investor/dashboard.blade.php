@include('investor.inc.head')
  <div class="page-wrapper">
    <!-- header-section start  -->
@include('investor.inc.header')
    <!-- header-section end  -->
    <div class="page-content bg_img">
      <section class="inner-hero pl-5 ">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 intro">
              <h1 class="page-title">$203,000</h1>
              <p class="fs-5 mb-4">That’s the estimate of Outreach’s revenues in 2024 – aka its sixth year of
                operations. Now you can invest in Series created solely to hold Outreach shares.
              </p>
              <a href="#0" class="cmn-btn btn-md rounded-pill opportunity">view opportunity</a>
              <p class="fs-5 mb-4 pt-4">This offering is for membership interest in Series 6-1 (“Series Outreach”) which
                will own shares of Outreach Corporation. You will not be buying Outreach shares directly. See offering
                page for details.
                Reg D 506(c) via ideaVenture Primary, LLC, only available to accredited investors. Investment is
                speculative, illiquid, and high risk.</p>
            </div>
          </div>
        </div>
      </section>
      <div class="container filteration pt-3 pl-5 pb-4">
        <div class="row">
          <div class="col-lg-2 col-md-6">
            <div class="container mt-5">
              <div class="dropdown">
                <button class=" cmn-btn rounded-pill dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories for Investment
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  @foreach ($ideatypes as $ideatype)
                  <a class="dropdown-item" href="{{ route('Ideatype.index') }}">{{ $ideatype->proj_type }}</a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="container mt-5">
              <div class="dropdown">
                <button class="cmn-btn rounded-pill dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Sort by Status
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">MOST UPTREND</a>
                  <a class="dropdown-item" href="#">MOST FUNDED</a>
                  <a class="dropdown-item" href="#">RECENTLY LAUNCHED</a>
                  <a class="dropdown-item" href="#">CLOSING SOON</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <div class="MOST UPTREND pb-4">
 


    <div class=" pl-2 pt-4">
      <div class="container">
        <div class="row r">
          <div class="col-lg-6 intro">
            <h2>MOST UPTREND</h2>
            <p class="mb-3 text-white-50 fs-6">Offerings that have raised the most money in the last few days</p>

            



          </div>
        </div>
      </div>
    </div>



    <div class="container pb-5">
                  
                 
      <div class="row justify-content-center mb-none-30">
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-card">
            <div class="blog-card__thumb">
<a href="#0">   <img class="project-img" src="assets/images/investor/tombstone_yousolar_main_image.webp" alt="image" />
</a>
            </div>
            <div class="blog-card__content">
              <div>
                <h4 class="blog-card__title">
                  <a href="#0"><p >Independent Living</p></a>
                </h4>
                
                <p class=" text-white-50">Harnessing Power for Self-Sufficiency.</p>
              </div>
              
              <div class="row pt-3">
                <div class="col-4">
                  <p>$40K</p>
                 <p class="sec-text text-white-50">raised</p>
                </div>
                <div class="col-4">
                  <p>15</p>
                 <p class="sec-text text-white-50">investors</p>
                </div>
                <div class="col-4">
                  <p>$1000</p>
                 <p class="sec-text text-white-50">min.investment</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-card">
            <div class="blog-card__thumb">
<a href="#0">  <img  class="project-img" src="assets/images/investor/tombstone_citizenmain_image_oversubscribed.webp" alt="image" />
</a>
            </div>
            <div class="blog-card__content">
              <div>
                <h4 class="blog-card__title">
                  <a href="#0"><p >Democracy Evolved</p></a>
                </h4>
                
                <p class=" text-white-50">Visions for the Future.</p>
              </div>
              
              <div class="row pt-3">
                <div class="col-4">
                  <p>$35K</p>
                 <p class="sec-text text-white-50">raised</p>
                </div>
                <div class="col-4">
                  <p>26</p>
                 <p class="sec-text text-white-50">investors</p>
                </div>
                <div class="col-4">
                  <p>$2000</p>
                 <p class="sec-text text-white-50">min.investment</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-30">
          <div class="blog-card">
            <div class="blog-card__thumb">
<a href=""> <img class="project-img"  src="assets/images/investor/tombstone_mainimagea__1_.webp" alt="image" /></a>   
       </div>
            <div class="blog-card__content">
              <div>
                <h4 class="blog-card__title">
                  <a href="#0"><p >Crafted Comfort</p></a>
                </h4>
                
                <p class=" text-white-50">Affordable High-Quality Living.</p>
              </div>
              
              <div class="row pt-3">
                <div class="col-4">
                  <p>$70K</p>
                 <p class="sec-text text-white-50">raised</p>
                </div>
                <div class="col-4">
                  <p>58</p>
                 <p class="sec-text text-white-50">investors</p>
                </div>
                <div class="col-4">
                  <p>$1800</p>
                 <p class="sec-text text-white-50">min.investment</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

    <div class="MOST FUNDED pb-4">

      <div class=" pl-2">
        <div class="container">
          <div class="row r">
            <div class="col-lg-6 intro">
              <h2>MOST FUNDED</h2>
              <p class="mb-3 text-white-50 fs-6">Offerings that have raised the most money so far</p>
  
              
  
  
  
            </div>
          </div>
        </div>
      </div>
    
  
   

      
        <div class="container pb-5">
          
          <!-- row end -->
          <div class="row justify-content-center mb-none-30">
            <div class="col-lg-4 col-md-6 mb-30">
              <div class="blog-card">
                <div class="blog-card__thumb">
<a href="#0">                  <img class="project-img"  src="assets/images/investor/tombstone_stellarismain_image__12_.webp" alt="image" />
</a>                </div>
                <div class="blog-card__content">
                  <div>
                    <h4 class="blog-card__title">
                      <a href="#0"><p >Clear Future</p></a>
                    </h4>
                    
                    <p class=" text-white-50">Innovations & Insights: Breakthroughs.</p>
                  </div>
                  
                  <div class="row pt-3">
                    <div class="col-4">
                      <p>$110K</p>
                     <p class="sec-text text-white-50">raised</p>
                    </div>
                    <div class="col-4">
                      <p>72</p>
                     <p class="sec-text text-white-50">investors</p>
                    </div>
                    <div class="col-4">
                      <p>$4000</p>
                     <p class="sec-text text-white-50">min.investment</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
              <div class="blog-card">
                <div class="blog-card__thumb">
                  <a href="#0">
                    <img class="project-img"  src="assets/images/investor/tombstone_main_image__14_.webp" alt="image" />
                   </a>          
                        </div>
                <div class="blog-card__content">
                  <div>
                    <h4 class="blog-card__title">
                      <a href="#0"><p >Pioneering Construction</p></a>
                    </h4>
                    
                    <p class=" text-white-50">The Future of 3D Printing in Construction.</p>
                  </div>
                  
                  <div class="row pt-3">
                    <div class="col-4">
                      <p>$100K</p>
                     <p class="sec-text text-white-50">raised</p>
                    </div>
                    <div class="col-4">
                      <p>60</p>
                     <p class="sec-text text-white-50">investors</p>
                    </div>
                    <div class="col-4">
                      <p>$3000</p>
                     <p class="sec-text text-white-50">min.investment</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
              <div class="blog-card">
                <div class="blog-card__thumb">
                <a href="#0">              
                    <img class="project-img"  src="assets/images/investor/tombstone_desktop_psyonic-se-hero-image.webp" alt="image" />
                 </a>                </div>
                <div class="blog-card__content">
                  <div>
                    <h4 class="blog-card__title">
                      <a href="#0"><p >Smart Robot</p></a>
                    </h4>
                    
                    <p class=" text-white-50">The World's First Multi-Touch Bionic Hand.</p>
                  </div>
                  
                  <div class="row pt-3">
                    <div class="col-4">
                      <p>$95K</p>
                     <p class="sec-text text-white-50">raised</p>
                    </div>
                    <div class="col-4">
                      <p>54</p>
                     <p class="sec-text text-white-50">investors</p>
                    </div>
                    <div class="col-4">
                      <p>$2500</p>
                     <p class="sec-text text-white-50">min.investment</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</div>
  

              
           <div class="RECENTLY LAUNCHED pb-4">

            <div class=" pl-2">
              <div class="container">
                <div class="row r">
                  <div class="col-lg-6 intro">
                    <h2>RECENTLY LAUNCHED</h2>
                    <p class="mb-3 text-white-50 fs-6">Most recently launched offerings</p>
        
                    
        
        
        
                  </div>
                </div>
              </div>
            </div>

           
                    
        
                      
                        <div class="container pb-5">
                          
                          <!-- row end -->
                          <div class="row justify-content-center mb-none-30">
                            <div class="col-lg-4 col-md-6 mb-30">
                              <div class="blog-card">
                                <div class="blog-card__thumb">
                                 <a href="#0"> 
                                  <img class="project-img"  src="assets/images/investor/tombstone_boxabccmainimage.webp" alt="image" />
                                </a>                               
                            </div>
                                <div class="blog-card__content">
                                  <div>
                                    <h4 class="blog-card__title">
                                      <a href="#0"><p >Boxable</p></a>
                                    </h4>
                                    
                                    <p class=" text-white-50">Mass Production Building System.</p>
                                  </div>
                                  
                                  <div class="row pt-3">
                                    <div class="col-4">
                                      <p>$25K</p>
                                     <p class="sec-text text-white-50">raised</p>
                                    </div>
                                    <div class="col-4">
                                      <p>11</p>
                                     <p class="sec-text text-white-50">investors</p>
                                    </div>
                                    <div class="col-4">
                                      <p>$100</p>
                                     <p class="sec-text text-white-50">min.investment</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-30">
                              <div class="blog-card">
                                <div class="blog-card__thumb">
                           <a href="#0"> <img class="project-img"  src="assets/images/investor/tombstone_main_image_100.webp" alt="image" />
                             </a>              
                         </div>
                                <div class="blog-card__content">
                                  <div>
                                    <h4 class="blog-card__title">
                                      <a href="#0"><p >Target Arm</p></a>
                                    </h4>
                                    
                                    <p class=" text-white-50">Drones On the Move.</p>
                                  </div>
                                  
                                  <div class="row pt-3">
                                    <div class="col-4">
                                      <p>$37K</p>
                                     <p class="sec-text text-white-50">raised</p>
                                    </div>
                                    <div class="col-4">
                                      <p>9</p>
                                     <p class="sec-text text-white-50">investors</p>
                                    </div>
                                    <div class="col-4">
                                      <p>$100</p>
                                     <p class="sec-text text-white-50">min.investment</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-30">
                              <div class="blog-card">
                                <div class="blog-card__thumb">
                                  <a href="#0"><img class="project-img"  src="assets/images/investor/tombstone_main_image-6.webp" alt="image" />
                                    </a>
                                </div>
                                <div class="blog-card__content">
                                  <div>
                                    <h4 class="blog-card__title">
                                      <a href="#0"><p >Revolution on Wheels</p></a>
                                    </h4>
                                    
                                    <p class=" text-white-50">The New Era of Driving.</p>
                                  </div>
                                  
                                  <div class="row pt-3">
                                    <div class="col-4">
                                      <p>$20K</p>
                                     <p class="sec-text text-white-50">raised</p>
                                    </div>
                                    <div class="col-4">
                                      <p>12</p>
                                     <p class="sec-text text-white-50">investors</p>
                                    </div>
                                    <div class="col-4">
                                      <p>$150</p>
                                     <p class="sec-text text-white-50">min.investment</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="CLOSING SOON pb-4">

                        <div class=" pl-2">
                          <div class="container">
                            <div class="row r">
                              <div class="col-lg-6 intro">
                                <h2>CLOSING SOON</h2>
                                <p class="mb-3 text-white-50 fs-6">Offerings that will be closing soon</p>
                    
                                
                    
                    
                    
                              </div>
                            </div>
                          </div>
                        </div>

                      
                        
            
                          
                            <div class="container pb-5">
                              
                              <!-- row end -->
                              <div class="row justify-content-center mb-none-30">
                                <div class="col-lg-4 col-md-6 mb-30">
                                  <div class="blog-card">
                                    <div class="blog-card__thumb">
                                      <a href="#0"><img class="project-img"  src="assets/images/investor/tombstone_main_image__11_.webp" alt="image" />
                                        </a></div>
                                    <div class="blog-card__content">
                                      <div>
                                        <h4 class="blog-card__title">
                                          <a href="#0"><p >Funding Fusion</p></a>
                                        </h4>
                                        
                                        <p class=" text-white-50">Empowering Public Access.</p>
                                      </div>
                                      
                                      <div class="row pt-3">
                                        <div class="col-4">
                                          <p>$70K</p>
                                         <p class="sec-text text-white-50">raised</p>
                                        </div>
                                        <div class="col-4">
                                          <p>26</p>
                                         <p class="sec-text text-white-50">investors</p>
                                        </div>
                                        <div class="col-4">
                                          <p>$400</p>
                                         <p class="sec-text text-white-50">min.investment</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-30">
                                  <div class="blog-card">
                                    <div class="blog-card__thumb">
                                      <a href="#0"> <img class="project-img"  src="assets/images/investor/tombstone_cydesktop_main_image_101.webp" alt="image" />
                                      </a>
                                    </div>
                                    <div class="blog-card__content">
                                      <div>
                                        <h4 class="blog-card__title">
                                          <a href="#0"><p >cytonics</p></a>
                                        </h4>
                                        
                                        <p class=" text-white-50">Revolutionizing Osteoarthritis Treatment.</p>
                                      </div>
                                      
                                      <div class="row pt-3">
                                        <div class="col-4">
                                          <p>$68K</p>
                                         <p class="sec-text text-white-50">raised</p>
                                        </div>
                                        <div class="col-4">
                                          <p>14</p>
                                         <p class="sec-text text-white-50">investors</p>
                                        </div>
                                        <div class="col-4">
                                          <p>$100</p>
                                         <p class="sec-text text-white-50">min.investment</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-30">
                                  <div class="blog-card">
                                    <div class="blog-card__thumb">
                                     <a href="#0"> <img class="project-img"  src="assets/images/investor/tombstone_park_street_homes-changing_the_face_of_home_building.webp" alt="image" />
                                        </a> </div>
                                    <div class="blog-card__content">
                                      <div>
                                        <h4 class="blog-card__title">
                                          <a href="#0"><p >Elegant Park Living</p></a>
                                        </h4>
                                        
                                        <p class=" text-white-50">Exclusive homes in prime locations.</p>
                                      </div>
                                      
                                      <div class="row pt-3">
                                        <div class="col-4">
                                          <p>$80K</p>
                                         <p class="sec-text text-white-50">raised</p>
                                        </div>
                                        <div class="col-4">
                                          <p>30</p>
                                         <p class="sec-text text-white-50">investors</p>
                                        </div>
                                        <div class="col-4">
                                          <p>$200</p>
                                         <p class="sec-text text-white-50">min.investment</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
      <section class="pl-3 pt-2 pb-4 ">
        <div class="container">
          <div class="row  d-flex align-items-center justify-content-center">
            <div class="col-lg-3 text-center">
              <a href="{{ route('startups', ['id'=>1]) }}" class=" cmn-btn"> Show All Startups</a>
            </div>
          </div>
        </div>
      </section>
      <div class="container how pb-5">
        <h1 class="pt-5 mt-4"><span>HOW TO INVEST</span></h1>
            <div class="row pl-5 pt-4">
              <div class="col-lg-3 col-md-6">
                <div class="methods">
                  <span class="pb-1 num">01</span>
                  <h3>SIGN UP</h3>
                  <span class="text-white-50">Securely create an account on ideaVenture.</span>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="methods">
                  <span class="pb-1 num">02</span>
                  <h3>BROWSE INVESTMENTS</h3>
                  <span class="text-white-50">Review hundreds of investment opportunities, from Startups to
                    Collectibles.</span>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="methods">
                  <span class="pb-1 num">03</span>
                  <h3>MAKE AN INVESTMENT</h3>
                  <span class="text-white-50">Submit your payment and own a financial stake in a Startup or
                    Collectible.</span>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="methods">
                  <span class="pb-1 num">04</span>
                  <h3>HOLD OR SELL</h3>
                  <span class="text-white-50">You can continue to invest in future rounds, hold on to your investment,
                    or sell eligible securities on ideaVenture’s trading platform.</span>
                </div>
              </div>
            </div>
      </div>
    </div>
      
      <!-- footer section start -->
     @include('investor.inc.footer')

     