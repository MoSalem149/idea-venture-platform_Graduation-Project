{{-- @include('entrepreneur.inc.head')
@include('entrepreneur.inc.header')

<!-- header-section end  -->
<!-- inner hero start -->
<section class="inner-hero bg_img" data-background="{{ asset('assets/images/bg/bg-1.jpg') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="page-title">Project Info</h2>
        <ul class="page-breadcrumb">
          <li><a href="{{ route('welcome') }}">Home</a></li>
          <li>Project Info</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- inner hero end -->

<!-- project-info-section start -->
<section class="pt-150 pb-150">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="blog-details-wrapper">
          @if(isset($project))
          @if($project->pitch_deck)
          <h4 class="blog-details__title mb-4"><i class="fas fa-play-circle mr-2"></i>Demo</h4>
          <div class="blog-details__thumb">
            <video controls style="width: 100%; max-height: 500px;" autoplay loop muted>
              <source src="{{ Storage::url($project->pitch_deck) }}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
          @endif

          <div class="blog-details__content">
            <h4 class="blog-details__title"><i class="fas fa-info-circle mr-2"></i>Project Information</h4>
            <p>{{ $project->description }}</p>
            <p><strong>Market Analysis:</strong> {{ $project->market_analysis }}</p>
            <p><strong>Project Timeline:</strong> {{ $project->project_timeline }}</p>
            <p><strong>Use of Funds and Budget Allocation:</strong> {{ $project->use_of_funds_and_budget_allocation }}</p>
            <p><strong>Alignment with ESG:</strong> {{ $project->alignment_with_esg }}</p>
            <p><strong>Feedback:</strong> {{ $project->feedback }}</p>
            <p><strong>Team Info:</strong> {{ $project->team_info }}</p>
            <p><strong>Investment Need:</strong> {{ $project->invest_need }}</p>
            <p><strong>Prototype:</strong> {{ $project->proto_type }}</p>
            <p><strong>Reference:</strong> {{ $project->refrence }}</p>
            <p><strong>Exit Strategy:</strong> {{ $project->exit_strategy }}</p>
            <p><strong>Contact Info:</strong> {{ $project->contact_info }}</p>
            <p><strong>Behavioral Insights:</strong> {{ $project->behavioral_insights }}</p>

            <h4 class="blog-details__title mt-4 mb-4"><i class="fas fa-file-alt mr-2"></i>Documentation and Proposal</h4>
            <ul class="documentation-links">
              @if($project->business_splan)
              <li><a href="{{ Storage::url($project->business_splan) }}" class="download-link" download>Business Plan</a></li>
              @endif
              @if($project->investment_proposal)
              <li><a href="{{ Storage::url($project->investment_proposal) }}" class="download-link" download>Investment Proposal</a></li>
              @endif
              @if($project->pitch_deck)
              <li><a href="{{ Storage::url($project->pitch_deck) }}" class="download-link" download>Pitch Deck</a></li>
              @endif
            </ul>
          </div><!-- blog-details__content end -->

          <div class="blog-details__footer">
            <h4 class="caption">Share This Post</h4>
            <ul class="social__links">
              <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#0"><i class="lab la-linkedin"></i></a></li>
            </ul>
          </div><!-- blog-details__footer end -->
        </div><!-- blog-details-wrapper end -->

        <div class="comments-area">
          <h3 class="title">Comments</h3>
          <!-- Display comments here -->
        </div><!-- comments-area end -->

        <div class="comment-form-area">
          <h3 class="title">Leave a Comment</h3>
          <form class="comment-form">
            @csrf
            <div class="row">
              <div class="col-lg-6 form-group">
                <input type="text" name="comment-name" id="comment-name" placeholder="Your Name" class="form-control">
              </div>
              <div class="col-lg-6 form-group">
                <input type="email" name="comment-email" id="comment-email" placeholder="Email Address" class="form-control">
              </div>
              <div class="col-lg-12 form-group">
                <input type="url" name="comment-url" id="comment-url" placeholder="Website" class="form-control">
              </div>
              <div class="col-lg-12 form-group">
                <textarea name="comment-message" id="comment-message" placeholder="Write Comment" class="form-control"></textarea>
              </div>
              <div class="col-lg-12">
                <button type="submit" class="cmn-btn">Post Comment</button>
              </div>
            </div>
          </form>
        </div><!-- comment-form-area end -->
      </div>

      <div class="col-lg-4 pl-lg-5">
        <div class="sidebar">
          <div class="widget">
            <form class="search-from">
              <div class="custom-input-field">
                <input type="text" name="search_keyword" id="search_keyword" placeholder="Keywords" class="form-control">
                <i class="fa fa-search"></i>
              </div>
            </form>
          </div><!-- widget end -->
          <div class="widget">
            <h3 class="widget-title">Categories</h3>
            <ul class="category-list">
              <li><a href="#0">SEO Expert</a></li>
              <li><a href="#0">Digital Market</a></li>
              <li><a href="#0">Marketing Expert</a></li>
            </ul>
          </div><!-- widget end-->
          <div class="widget">
            <h3 class="widget-title">Archive</h3>
            <ul class="category-list">
              <li><a href="#0">SEO Expert</a></li>
              <li><a href="#0">Digital Market</a></li>
              <li><a href="#0">Marketing Expert</a></li>
            </ul>
          </div><!-- widget end-->
          <div class="widget">
            <h3 class="widget-title">Popular Blog Posts</h3>
            <ul class="small-post-list">
              <li class="small-post-single">
                <div class="thumb"><img src="{{ asset('assets/images/blog/1.jpg') }}" alt="image"></div>
                <div class="content">
                  <h6 class="post-title"><a href="blog-details.html"> Ullamcorper duis, fermentum nulla. Suspendisse nec vestibulum odio</a></h6>
                  <a href="#0" class="date">December 15, 2019</a>
                </div>
              </li><!-- small-post-single end -->
              <!-- Add more blog posts here -->
            </ul>
          </div><!-- widget end -->
          <div class="widget">
            <h3 class="widget-title">Tags</h3>
            <div class="tag-list">
              <a href="#0">SEO</a>
              <a href="#0">Marketing</a>
              <a href="#0">Digital</a>
            </div>
          </div><!-- widget end -->
        </div><!-- sidebar end -->
      </div>
      @else
    <p>Project data not found.</p>
@endif
    </div>
  </div>
</section>
<!-- project-info-section end -->

@include('entrepreneur.inc.footer') --}}




@include('entrepreneur.inc.head')
@include('entrepreneur.inc.header')
    <!-- header-section end  -->
    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="{{ asset('assets/images/bg/bg-1.jpg') }}">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Project Info</h2>
            <ul class="page-breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li>Project Info</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    <!-- project-info-section start -->
    <section class="pt-150 pb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-details-wrapper">
              <h4 class="blog-details__title mb-4"><i class="fas fa-play-circle mr-2"></i>Demo</h4>
              <div class="blog-details__thumb">
                <video controls style="width: 100%; max-height: 500px;" autoplay loop muted>
                  <source src="assets/videos/your-video.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="blog-details__content">
                <h4 class="blog-details__title"><i class="fas fa-info-circle mr-2"></i>Project
                  Information</h4>
                <p>The initiative, dubbed "FutureScape," embodies a groundbreaking approach designed to
                  revolutionize the way we interact with technology in everyday life. At its core,
                  FutureScape aims to integrate advanced AI algorithms with state-of-the-art IoT
                  devices, creating a seamless and intuitive user experience that transcends current
                  limitations. From enhancing home automation to redefining urban planning, the
                  project's scope is ambitiously broad yet meticulously focused on sustainability and
                  user-centric design.</p>
                <p>Our team comprises industry veterans and visionary newcomers, each bringing a unique
                  set of skills and perspectives to the table. Together, we are committed to not just
                  developing technology, but also to crafting solutions that address real-world
                  challenges. Through rigorous research, collaborative development, and extensive
                  testing, we're not just imagining the future; we're actively building it.</p>
                <p>As we navigate the complexities of modern technological demands, FutureScape remains
                  dedicated to pushing the boundaries of what's possible. By focusing on innovation,
                  adaptability, and sustainability, we aim to not only contribute to the tech industry
                  but also to make a lasting impact on society at large. Join us as we embark on this
                  exciting journey towards a smarter, more connected world.</p>
                <h4 class="blog-details__title mt-4 mb-4"><i class="fas fa-file-alt mr-2"></i>Documentation and Proposal
                </h4>
                <div class="documentation-section-top">
                  <h6 class="mt-3">Business Plan, Investment Proposal, and Pitch Deck</h6>
                  <p>Our comprehensive documentation outlines the project's objectives, strategies,
                    and financial projections. Click below to download the detailed documents:</p>
                  <ul class="documentation-links">
                    <li><a href="path_to_your_file/Business_Plan.pdf" class="download-link" download>Business Plan</a>
                    </li>
                    <li><a href="path_to_your_file/Investment_Proposal.pdf" class="download-link" download>Investment
                        Proposal</a></li>
                    <li><a href="path_to_your_file/Pitch_Deck.pptx" class="download-link" download>Pitch Deck</a></li>
                  </ul>
                </div>
                <div class="documentation-section-bottom">
                  <h6 class="mt-3">Legal Documents (if applicable)</h6>
                  <p>Access our legal documentation, including patents, compliance certificates, and
                    other regulatory documents:</p>
                  <ul class="documentation-links">
                    <li><a href="path_to_your_file/Legal_Document_1.pdf" class="download-link" download>Legal
                        Document</a></li>
                  </ul>
                </div>
                <div class="milestone-roadmap">
                  <h4 class="blog-details__title mt-4 mb-4"><i class="fas fa-map-marked-alt mr-2"></i>Milestone and
                    Roadmap</h4>
                  <div class="timeline">
                    <div class="timeline-item">
                      <div class="timeline-marker"></div>
                      <div class="timeline-content">
                        <h6>Project Kickoff</h6>
                        <p>January 2021</p>
                        <p>The project officially begins. Initial research and development phase
                          starts.</p>
                      </div>
                    </div>
                    <div class="timeline-item">
                      <div class="timeline-marker"></div>
                      <div class="timeline-content">
                        <h6>Prototype Development</h6>
                        <p>April 2021</p>
                        <p>Development of the first prototype. Testing with a select user group.
                        </p>
                      </div>
                    </div>
                    <div class="timeline-item">
                      <div class="timeline-marker"></div>
                      <div class="timeline-content">
                        <h6>Market Launch</h6>
                        <p>September 2021</p>
                        <p>Official launch to the market. Marketing and promotional activities
                          commence.</p>
                      </div>
                    </div>
                    <!-- Add more timeline items as needed -->
                  </div>
                </div>
                <div class="financial-info-section">
                  <h4 class="blog-details__title mt-4"><i class="fas fa-coins mr-2"></i>Financial
                    Information</h4>
                  <p>Our project's financial planning and allocation strategy is designed to optimize
                    resources and ensure sustainable growth. Below are key highlights of our
                    financial roadmap:</p>
                  <div class="financial-table mt-3">
                    <h5>Initial Funding and Allocation</h5>
                    <table>
                      <tr>
                        <th>Source</th>
                        <th>Amount</th>
                        <th>Purpose</th>
                      </tr>
                      <tr>
                        <td>Angel Investors</td>
                        <td>$500,000</td>
                        <td>Research and Development</td>
                      </tr>
                      <tr>
                        <td>Crowd Funding</td>
                        <td>$200,000</td>
                        <td>Community Engagement</td>
                      </tr>
                      <!-- Add more rows as needed -->
                    </table>
                  </div>
                  <div class="financial-details mt-3 mb-3">
                    <h5>Projected Outcomes</h5>
                    <ul>
                      <li>Year 1: Achieve operational breakeven and expand market presence.</li>
                      <li>Year 2: Introduce two new product lines and enter international markets.
                      </li>
                      <!-- Add more points as needed -->
                    </ul>
                  </div>
                </div>
                <div class="impact-sustainability-section">
                  <h4 class="blog-details__title mt-4"><i class="fas fa-leaf mr-2"></i>Impact and
                    Sustainability</h4>
                  <p>This project is dedicated to advancing sustainable practices and generating
                    positive social impact. We're focused on creating solutions that are not only
                    innovative but also ethically responsible and environmentally friendly. Here are
                    some of the key areas we're making a difference:</p>
                  <ul>
                    <li class="list1"><strong>Environmental Conservation:</strong> Our initiatives
                      include
                      reducing carbon footprints through innovative recycling methods and
                      sustainable resource management.</li>
                    <li class="list2"><strong>Social Welfare:</strong> We're committed to improving
                      living
                      standards by addressing crucial needs such as education, healthcare, and
                      economic opportunity.</li>
                    <li class="list3"><strong>Economic Sustainability:</strong> By fostering
                      entrepreneurship and
                      supporting small businesses, we contribute to robust economic growth that
                      benefits everyone.</li>
                    <!-- Add more points as needed -->
                  </ul>
                  <p>Our approach to sustainability is holistic, ensuring that our impact is positive
                    across all facets of society and the environment. By integrating sustainability
                    into the core of our operations, we're not just planning for a better future;
                    we're actively building it.</p>
                </div>
                <div class="market-validation-section">
                  <h4 class="blog-details__title mt-4"><i class="fas fa-thumbs-up mr-2"></i>Market
                    Validation</h4>
                  <p>Our project has undergone extensive market validation to ensure its viability and
                    potential for success. Key indicators of our market acceptance include:</p>
                  <ul>
                    <li class="list1"><strong>Customer Feedback:</strong> Positive feedback from
                      early adopters
                      and beta testers, highlighting the demand and satisfaction with our
                      solution.</li>
                    <li class="list2"><strong>Pre-orders and Subscriptions:</strong> A significant
                      number of
                      pre-orders and early subscriptions, demonstrating consumer interest and
                      market demand.</li>
                    <li class="list3"><strong>Partnerships:</strong> Strategic alliances with
                      industry leaders and
                      relevant organizations, further affirming our project's relevance and
                      potential impact.</li>
                    <li class="list4"><strong>Awards and Recognitions:</strong> Recognition from
                      industry experts
                      and institutions, acknowledging our innovative approach and contribution to
                      the sector.</li>
                    <!-- Add more points as needed -->
                  </ul>
                  <p>These validations from diverse market segments underscore our project's readiness
                    to meet and exceed industry expectations, ensuring a significant impact upon
                    launch.</p>
                </div>
                <div class="team-information-section">
                  <h4 class="blog-details__title mt-4"><i class="fas fa-users mr-2"></i>Team
                    Information</h4>
                  <p>Our project is powered by a team of dedicated professionals, each bringing a
                    unique set of skills and expertise to the table. Meet the core team members
                    leading our journey:</p>
                  <div class="team-member">
                    <h5>Jane Doe - CEO & Founder</h5>
                    <p>With over 10 years of experience in the tech industry, Jane has led several
                      successful startups from the ground up. She holds an MBA from Stanford and
                      is passionate about using technology to solve real-world problems.</p>
                  </div>
                  <div class="team-member">
                    <h5>John Smith - CTO</h5>
                    <p>John, our technical wizard, has 15 years of experience in software
                      development and product innovation. An MIT graduate, he specializes in AI
                      and machine learning, driving the technical vision of our project.</p>
                  </div>
                  <!-- Add more team members as needed -->
                </div>
                <div class="exit-strategy-section">
                  <h4 class="blog-details__title mt-4"><i class="fas fa-flag-checkered mr-2"></i>Exit
                    Strategy</h4>
                  <p>Understanding the importance of long-term planning and investor returns, our
                    project has outlined clear exit strategies to ensure sustainability and
                    profitability. These strategies are designed to offer flexibility, taking into
                    account the dynamic nature of our industry and market trends:</p>
                  <ul>
                    <li class="list1"><strong>Acquisition:</strong> We are open to acquisition by
                      larger companies looking to expand their portfolio with innovative solutions
                      like ours. Our team is continuously engaging with potential acquirers to
                      explore synergies.</li>
                    <li class="list2"><strong>Initial Public Offering (IPO):</strong> As our project
                      grows and meets specific financial milestones, we will consider going public
                      as a strategy to raise capital for further expansion while providing
                      liquidity to our investors.</li>
                    <li class="list3"><strong>Management Buyout (MBO):</strong> Depending on the
                      interest and capabilities of the management team, an MBO could be a viable
                      option, allowing the people who know the company best to own and direct its
                      future.</li>
                    <!-- Add more strategies as needed -->
                  </ul>
                  <p>Our commitment to transparency and investor returns is paramount. We are
                    dedicated to navigating the best path forward, ensuring the longevity and
                    success of our project while maximizing investor value.</p>
                </div>
              </div><!-- blog-details__content end -->
              <div class="blog-details__footer">
                <h4 class="caption">Share Tish Post</h4>
                <ul class="social__links">
                  <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#0"><i class="lab la-linkedin"></i></a></li>
                </ul>
              </div><!-- blog-details__footer end -->
            </div><!-- blog-details-wrapper end -->
            <div class="comments-area">
              <h3 class="title">2 comments</h3>
              <ul class="comments-list">
                <li class="single-comment">
                  <div class="single-comment__thumb">
                    <img src="{{ asset('assets/images/testimonial/1.jpg') }}" alt="image">
                  </div>
                  <div class="single-comment__content">
                    <h6 class="name">Monica Wagase</h6>
                    <span class="date">1 Hour ago</span>
                    <a href="#0" class="reply-btn"><i class="fa fa-share"></i></a>
                    <p>Ousto ante nibh et a turpis, aliquam phasellus hymenaeos, imperdiet coms
                      ciosqutincidunt a amet. Faucibus urna luctus, non suspendisse arcu nibh,
                      sollicitudin suspepurus. Amet vivamus etiam.</p>
                  </div>
                </li><!-- single-review end -->
                <li class="single-comment">
                  <div class="single-comment__thumb">
                    <img src="{{ asset('assets/images/testimonial/2.jpg') }}" alt="image">
                  </div>
                  <div class="single-comment__content">
                    <h6 class="name">David James</h6>
                    <span class="date">1 day ago</span>
                    <a href="#0" class="reply-btn"><i class="fa fa-share"></i></a>
                    <p>Ousto ante nibh et a turpis, aliquam phasellus hymenaeos, imperdiet coms
                      ciosqutincidunt a amet. Faucibus urna luctus, non suspendisse arcu nibh,
                      sollicitudin suspepurus. Amet vivamus etiam.</p>
                  </div>
                </li><!-- single-review end -->
              </ul>
            </div><!-- comments-area end -->
            <div class="comment-form-area">
              <h3 class="title">Live a Comment</h3>
              <form class="comment-form">
                <div class="row">
                  <div class="col-lg-6 form-group">
                    <input type="text" name="comment-name" id="comment-name" placeholder="Your Name"
                      class="form-control">
                  </div>
                  <div class="col-lg-6 form-group">
                    <input type="email" name="comment-email" id="comment-email" placeholder="Email Address"
                      class="form-control">
                  </div>
                  <div class="col-lg-12 form-group">
                    <input type="url" name="comment-url" id="comment-url" placeholder="Web Site" class="form-control">
                  </div>
                  <div class="col-lg-12 form-group">
                    <textarea name="comment-message" id="comment-message" placeholder="Write Comment"
                      class="form-control"></textarea>
                  </div>
                  <div class="col-lg-12">
                    <button type="submit" class="cmn-btn">Post Comment</button>
                  </div>
                </div>
              </form>
            </div><!-- comment-form-area end -->
          </div>
          <div class="col-lg-4 pl-lg-5">
            <div class="sidebar">
              <div class="widget">
                <form class="search-from">
                  <div class="custom-input-field">
                    <input type="text" name="ship-search_keyword" id="ship-search_keyword" placeholder="Keywords"
                      class="form-control">
                    <i class="fa fa-search"></i>
                  </div>
                </form>
              </div><!-- widget end -->
              <div class="widget">
                <h3 class="widget-title">Categories</h3>
                <ul class="category-list">
                  <li><a href="#0">SEO Expert</a></li>
                  <li><a href="#0">Digital Market</a></li>
                  <li><a href="#0">Marketing Expert</a></li>
                </ul>
              </div><!-- widget end-->
              <div class="widget">
                <h3 class="widget-title">Archive</h3>
                <ul class="category-list">
                  <li><a href="#0">SEO Expert</a></li>
                  <li><a href="#0">Digital Market</a></li>
                  <li><a href="#0">Marketing Expert</a></li>
                </ul>
              </div><!-- widget end-->
              <div class="widget">
                <h3 class="widget-title">Popular blog post</h3>
                <ul class="small-post-list">
                  <li class="small-post-single">
                    <div class="thumb"><img src="{{ asset('assets/images/blog/1.jpg') }}" alt="image"></div>
                    <div class="content">
                      <h6 class="post-title"><a href="blog-details.html"> Ullamcorper duis,
                          fermentum nulla. Suspendisse nec vestibulum odio</a></h6>
                      <a href="#0" class="date">December 15, 2019</a>
                    </div>
                  </li><!-- small-post-single end -->
                  <li class="small-post-single">
                    <div class="thumb"><img src="{{ asset('assets/images/blog/2.jpg') }}" alt="image"></div>
                    <div class="content">
                      <h6 class="post-title"><a href="blog-details.html">Erat dui consectetuer
                          portt malesua sed commodo consectetuer.</a></h6>
                      <a href="#0" class="date">December 15, 2019</a>
                    </div>
                  </li><!-- small-post-single end -->
                  <li class="small-post-single">
                    <div class="thumb"><img src="{{ asset('assets/images/blog/3.jpg') }}" alt="image"></div>
                    <div class="content">
                      <h6 class="post-title"><a href="blog-details.html">Olementum nunc eget magco
                          modo consectetuer diam orci </a></h6>
                      <a href="#0" class="date">December 15, 2019</a>
                    </div>
                  </li><!-- small-post-single end -->
                  <li class="small-post-single">
                    <div class="thumb"><img src="{{ asset('assets/images/blog/1.jpg') }}" alt="image"></div>
                    <div class="content">
                      <h6 class="post-title"><a href="blog-details.html">Venenatis elementum vel
                          tristique eu nunc ultrices elementum</a></h6>
                      <a href="#0" class="date">December 15, 2019</a>
                    </div>
                  </li><!-- small-post-single end -->
                </ul>
              </div><!-- widget end -->
              <div class="widget">
                <h3 class="widget-title">tags</h3>
                <div class="tag-list">
                  <a href="#0">SEO</a>
                  <a href="#0">Marketing</a>
                  <a href="#0">Digital</a>
                </div>
              </div><!-- widget end -->
            </div><!-- sidebar end -->
          </div>
        </div>
      </div>
    </section>
    <!-- project-info-section end -->
    <!-- footer section start -->
@include('entrepreneur.inc.footer')