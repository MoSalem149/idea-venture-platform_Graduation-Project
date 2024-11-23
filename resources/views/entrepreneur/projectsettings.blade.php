@include('entrepreneur.inc.head')
    @include('entrepreneur.inc.header')
        <!-- header-section end  -->
        <!-- inner hero start -->
        <section class="inner-hero bg_img" data-background="{{ asset('assets/images/bg/bg-1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Create Project</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Entrepreneur</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <!-- Main content Start -->
        <div class="container light-style flex-grow-1 container-p-y pt-4 pb-5">
            <h4 class="font-weight-bold py-3 mb-4">Account settings</h4>
            <form action="{{ route('Projectdetails.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="users_id" value="{{ Auth::id() }}">
                <div class="card overflow-hidden">
                    <div class="row no-gutters row-bordered row-border-light">
                        <div class="col-md-3 pt-3">
                            <div class="list-group list-group-flush account-settings-links">

                                <a class="py-3 ml-4" data-toggle="list" href="#account-project-info"><i
                                        class="fas fa-project-diagram mr-2"></i>Project & Business Information</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">

                                <!-- Project and Business Information Section -->
                                <div class="tab-pane fade account-section" id="account-project-info">
                                    <h4 class="py-3 ml-4">Project and Business Information</h4>
                                    <div class="card-body">
                                        <!-- Project Information Fields -->
                                        <div class="form-group">
                                            <label for="ideatypes_id">Idea Type</label>
                                            <select class="form-control" id="ideatypes_id" name="ideatypes_id"
                                                required>
                                                @foreach ($ideatypes as $ideatype)
                                                    <option value="{{ $ideatype->id }}">{{ $ideatype->proj_type }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

										<div class="form-group">
                                            <label class="form-label">Project Name</label>
                                            <textarea class="form-control" rows="3" name="name" placeholder="Project Name"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Project Description and Vision</label>
                                            <textarea class="form-control" rows="3" name="description" placeholder="Describe your project and vision"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Market Analysis and Potential Impact</label>
                                            <textarea class="form-control" rows="3" name="market_analysis"
                                                placeholder="Provide market analysis and potential impact"></textarea>
                                        </div>
                                        <!-- Documentation and Proposal -->
                                        
                                        <div class="form-group">
                                            <label class="form-label">Business Plan</label>
                                            <input type="file" class="form-control" name="business_splan">
                                        </div>
                                        
                                        {{-- <div class="form-group">
                                            <label class="form-label">Business Plan</label>
                                            <div class="custom-file-upload">
                                                <input type="file" id="fileUpload" class="form-control-file"
                                                    name="business_splan" style="display: none;">
                                                    <button type="button" class="btn btn-primary"
                                                    onclick="document.getElementById('fileUpload').click();">Upload
                                                    Document</button>
                                            </div>
                                        </div> --}}

                                        <div class="form-group">
                                            <label class="form-label">Investment Proposal</label>
                                            <input type="file" class="form-control" name="investment_proposal">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label class="form-label"> Investment Proposal</label>
                                            <div class="custom-file-upload">
                                                <input type="file" id="fileUpload" class="form-control-file"
                                                    name="investment_proposal" style="display: none;">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="document.getElementById('fileUpload').click();">Upload
                                                    Document</button>
                                            </div>
                                        </div> --}}

                                        <div class="form-group">
                                            <label class="form-label">Pitch Deck</label>
                                            <input type="file" class="form-control" name="pitch_deck">
                                        </div> 
                                        <div class="form-group">
                                            <label class="form-label">Project Photo</label>
                                            <input type="file" class="form-control" name="photo">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label class="form-label">Pitch Deck</label>
                                            <div class="custom-file-upload">
                                                <input type="file" id="fileUpload" class="form-control-file"
                                                    name="pitch_deck" style="display: none;">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="document.getElementById('fileUpload').click();">Upload
                                                    Document</button>
                                            </div>
                                        </div> --}}
                                        <div class="form-group">
                                            <label class="form-label">Legal Documents (if applicable)</label>
                                            <input type="file" class="form-control" name="file_path">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label class="form-label">Legal Documents (if applicable)</label>
                                            <div class="custom-file-upload">
                                                <input type="file" id="fileUpload" class="form-control-file"
                                                    name="file_path" style="display: none;">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="document.getElementById('fileUpload').click();">Upload
                                                    Document</button>
                                            </div>
                                        </div> --}}
                                        <!-- Milestone and Roadmap -->
                                        <div class="form-group">
                                            <label class="form-label">Project Timeline and Goals</label>
                                            <textarea class="form-control" rows="3" name="project_timeline"
                                                placeholder="Outline the project timeline and goals"></textarea>
                                        </div>
                                        <!-- Financial Information -->
                                        <div class="form-group">
                                            <label class="form-label">Use of Funds and Budget Allocation</label>
                                            <textarea class="form-control" rows="3" name="use_of_funds_and_budget_allocation"
                                                placeholder="Detail the use of funds and budget allocation"></textarea>
                                        </div>
                                        <!-- Impact and Sustainability -->
                                        <div class="form-group">
                                            <label class="form-label">Alignment with ESG and Sustainability
                                                Factors</label>
                                            <textarea class="form-control" rows="3" name="alignment_with_esg"
                                                placeholder="Explain how your project aligns with ESG and sustainability factors"></textarea>
                                        </div>
                                        <!-- Market Validation -->
                                        <div class="form-group">
                                            <label class="form-label">Customer Feedback and Market Validation</label>
                                            <textarea class="form-control" rows="3" name="feedback"
                                                placeholder="Summarize customer feedback and any letters of intent (LOIs) from potential clients"></textarea>
                                        </div>
                                        <!-- Team Information -->
                                        <div class="form-group">
                                            <label class="form-label">Team Member Profiles and Experience</label>
                                            <textarea class="form-control" rows="3" name="team_info"
                                                placeholder="Describe your team members' profiles, qualifications, and experiences"></textarea>
                                        </div>
                                        <!-- investment need and req -->
                                        <div class="form-group">
                                            <label class="form-label">How Much Invest You Ask For</label>
                                            <textarea class="form-control" rows="3" name="invest_need"
                                                placeholder="DescribeHow Much Invest You Ask For"></textarea>
                                        </div>
                                        
                                        <!-- Demo or Prototype -->
                                        <div class="form-group">
                                            <label class="form-label">Access to Demo or Prototype</label>
                                            <textarea class="form-control" rows="3" name="proto_type"
                                                placeholder="Provide links or details on how to access the demo or prototype (if applicable)"></textarea>
                                        </div>
                                        <!-- References and Recommendations -->
                                        <div class="form-group">
                                            <label class="form-label">References and Recommendations</label>
                                            <textarea class="form-control" rows="3" name="refrence"
                                                placeholder="List endorsements from mentors, industry experts, or advisors"></textarea>
                                        </div>
                                        <!-- Exit Strategy -->
                                        <div class="form-group">
                                            <label class="form-label">Exit Strategy</label>
                                            <textarea class="form-control" rows="3" name="exit_strategy"
                                                placeholder="Describe potential exit plans, such as acquisition or IPO strategy"></textarea>
                                        </div>
                                        <!-- Contact Information -->
                                        <div class="form-group">
                                            <label class="form-label">Contact Information for Further Inquiries</label>
                                            <input type="text" class="form-control" name="contact_info"
                                                placeholder="Enter contact information">
                                        </div>
                                        <!-- Behavioral Insights -->
                                        <div class="form-group">
                                            <label class="form-label">Behavioral Insights</label>
                                            <textarea class="form-control" rows="3" name="behavioral_insights"
                                                placeholder="Provide user engagement data, feedback, and traction information"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-3 mb-4">
                        <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Main content End -->
        <!-- footer section start -->
       @include('entrepreneur.inc.footer')