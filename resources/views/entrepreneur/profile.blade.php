@include('entrepreneur.inc.head')

		<!-- header-section start  -->
		@include('entrepreneur.inc.header')
		<!-- header-section end  -->
		<!-- inner hero start -->
		<section class="inner-hero bg_img" data-background="{{ asset('assets/images/bg/bg-1.jpg') }}">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h2 class="page-title">Profile Page</h2>
						<ul class="page-breadcrumb">
							<li><a href="{{ route('entrehome') }}">Home</a></li>
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
			<div class="card overflow-hidden">
				<div class="row no-gutters row-bordered row-border-light">
					<div class="col-md-3 pt-3">
						<div class="list-group list-group-flush account-settings-links">
							<a class="py-3 ml-4 active" data-toggle="list" href="#account-general"><i
									class="fas fa-cog mr-2"></i>General</a>
							<a class="py-3 ml-4" data-toggle="list" href="#account-change-password"><i
									class="fas fa-lock mr-2"></i>Change password</a>
							<a class="py-3 ml-4" data-toggle="list" href="#account-info"><i class="fas fa-user mr-2"></i>Info</a>
							<a class="py-3 ml-4" data-toggle="list" href="#account-social-links"><i
									class="fas fa-link mr-2"></i>Social links</a>
							<a class="py-3 ml-4" data-toggle="list" href="#account-notifications"><i
									class="fas fa-bell mr-2"></i>Notifications</a>
							<a class="py-3 ml-4" data-toggle="list" href="#account-project-info"><i
									class="fas fa-project-diagram mr-2"></i>Project & Business Information</a>
						</div>
					</div>
					<div class="col-md-9">
						<div class="tab-content">
							<div class="tab-pane fade active show account-section" id="account-general">
								<h4 class="py-3 ml-4">General</h4>
								<div class="card-body media align-items-center">
									<img src="{{ asset('assets/images/profile-photo/avatar1.png') }}" alt class="d-block ui-w-80" />
									<div class="media-body ml-4">
										<label class="btn btn-outline-primary">
											Upload new photo
											<input type="file" class="account-settings-fileinput" />
										</label>
										&nbsp;
										<button type="button" class="btn btn-default md-btn-flat">
											Reset
										</button>
										<div class="text-light small mt-1">
											Allowed JPG, GIF or PNG. Max size of 800K
										</div>
									</div>
								</div>
								<hr class="border-light m-0" />
								<div class="card-body">
									<div class="form-group">
										<label class="form-label">Username</label>
										<input type="text" class="form-control mb-1" value="" placeholder="Enter your username" />
									</div>
									<div class="form-group">
										<label class="form-label">Name</label>
										<input type="text" class="form-control" value="" placeholder="Enter your name" />
									</div>
									<div class="form-group">
										<label class="form-label">E-mail</label>
										<input type="text" class="form-control mb-1" value="" placeholder="Enter your email" />
									</div>
									<div class="form-group">
										<label class="form-label">Company</label>
										<input type="text" class="form-control" value="" placeholder="Enter your company name" />
									</div>
								</div>
							</div>
							<div class="tab-pane fade account-section" id="account-change-password">
								<h4 class="py-3 ml-4">Change password</h4>
								<div class="card-body pb-2">
									<div class="form-group">
										<label class="form-label">Current password</label>
										<input type="password" class="form-control" placeholder="Enter your current password" />
									</div>
									<div class="form-group">
										<label class="form-label">New password</label>
										<input type="password" class="form-control" placeholder="Enter your new password" />
									</div>
									<div class="form-group">
										<label class="form-label">Repeat new password</label>
										<input type="password" class="form-control" placeholder="repeat your new password" />
									</div>
								</div>
							</div>
							<div class="tab-pane fade account-section" id="account-info">
								<h4 class="py-3 ml-4">Info</h4>
								<div class="card-body pb-2">
									<div class="form-group">
										<label class="form-label">Bio</label>
										<textarea class="form-control" rows="5" placeholder="Enter your bio"></textarea>
									</div>
									<div class="form-group">
										<label class="form-label">Birthday</label>
										<input type="text" class="form-control" value="" placeholder="Enter your birthday" />
									</div>
									<div class="form-group">
										<label class="form-label">Gender</label>
										<select class="custom-select form-control">
											<option value="Select your Gender">
												Select your Gender
											</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label">Country</label>
										<select class="custom-select form-control">
											<option value="Enter your country">
												Select your country
											</option>
											<option value="Egypt">Egypt</option>
											<option value="USA">USA</option>
											<option value="Canada">Canada</option>
											<option value="UK">UK</option>
											<option value="Germany">Germany</option>
											<option value="France">France</option>
										</select>
									</div>
								</div>
								<hr class="border-light m-0" />
								<div class="card-body pb-2">
									<h6 class="mb-4">Contacts</h6>
									<div class="form-group">
										<label class="form-label">Phone</label>
										<input type="text" class="form-control" value="" placeholder="Enter your phone number" />
									</div>
									<div class="form-group">
										<label class="form-label">Website</label>
										<input type="text" class="form-control" value="" placeholder="Enter your website url" />
									</div>
									<div class="form-group">
										<label class="form-label">Zip code</label>
										<input type="text" class="form-control" value="" placeholder="Enter your zip code" />
									</div>
								</div>
								<hr class="border-light m-0" />
								<div class="card-body pb-2">
									<h6 class="mb-4">Education</h6>
									<div class="form-group">
										<label class="form-label">University</label>
										<input type="text" class="form-control" value="" placeholder="Enter your university name" />
									</div>
									<div class="form-group">
										<label class="form-label">Field</label>
										<input type="text" class="form-control" value="" placeholder="Enter your field" />
									</div>
									<div class="form-group">
										<label class="form-label">Degree</label>
										<input type="text" class="form-control" value="" placeholder="Enter your degree" />
									</div>
								</div>
							</div>
							<div class="tab-pane fade account-section" id="account-social-links">
								<h4 class="py-3 ml-4">Social links</h4>
								<div class="card-body pb-2">
									<div class="form-group">
										<label class="form-label">Twitter</label>
										<input type="text" class="form-control" value="" placeholder="Enter your twitter username" />
									</div>
									<div class="form-group">
										<label class="form-label">Facebook</label>
										<input type="text" class="form-control" value="" placeholder="Enter your facebook link" />
									</div>
									<div class="form-group">
										<label class="form-label">Google</label>
										<input type="text" class="form-control" value="" placeholder="Enter your google business" />
									</div>
									<div class="form-group">
										<label class="form-label">LinkedIn</label>
										<input type="text" class="form-control" value="" placeholder="Enter your linkedIn link" />
									</div>
								</div>
							</div>
							<div class="tab-pane fade account-section" id="account-notifications">
								<h4 class="py-3 ml-4">Notifications</h4>
								<div class="card-body pb-2">
									<h6 class="mb-4">Activity</h6>
									<div class="form-group">
										<label class="switcher">
											<input type="checkbox" class="switcher-input" checked />
											<span class="switcher-indicator">
												<span class="switcher-yes"></span>
												<span class="switcher-no"></span>
											</span>
											<span class="switcher-label">Email me when someone comments on my
												article</span>
										</label>
									</div>
									<div class="form-group">
										<label class="switcher">
											<input type="checkbox" class="switcher-input" checked />
											<span class="switcher-indicator">
												<span class="switcher-yes"></span>
												<span class="switcher-no"></span>
											</span>
											<span class="switcher-label">Email me when someone answers on my forum
												thread</span>
										</label>
									</div>
									<div class="form-group">
										<label class="switcher">
											<input type="checkbox" class="switcher-input" />
											<span class="switcher-indicator">
												<span class="switcher-yes"></span>
												<span class="switcher-no"></span>
											</span>
											<span class="switcher-label">Email me when someone follows me</span>
										</label>
									</div>
								</div>
								<hr class="border-light m-0" />
								<div class="card-body pb-2">
									<h6 class="mb-4">Application</h6>
									<div class="form-group">
										<label class="switcher">
											<input type="checkbox" class="switcher-input" checked />
											<span class="switcher-indicator">
												<span class="switcher-yes"></span>
												<span class="switcher-no"></span>
											</span>
											<span class="switcher-label">News and announcements</span>
										</label>
									</div>
									<div class="form-group">
										<label class="switcher">
											<input type="checkbox" class="switcher-input" />
											<span class="switcher-indicator">
												<span class="switcher-yes"></span>
												<span class="switcher-no"></span>
											</span>
											<span class="switcher-label">Weekly product updates</span>
										</label>
									</div>
									<div class="form-group">
										<label class="switcher">
											<input type="checkbox" class="switcher-input" checked />
											<span class="switcher-indicator">
												<span class="switcher-yes"></span>
												<span class="switcher-no"></span>
											</span>
											<span class="switcher-label">Weekly blog digest</span>
										</label>
									</div>
								</div>
							</div>
							<!-- Project and Business Information Section -->
							<div class="tab-pane fade account-section" id="account-project-info">
								<h4 class="py-3 ml-4">Project and Business Information</h4>
								<div class="card-body">
									<!-- Project Information Fields -->
									<div class="form-group">
										<label class="form-label">Project Description and Vision</label>
										<textarea class="form-control" rows="3" placeholder="Describe your project and vision"></textarea>
									</div>
									<div class="form-group">
										<label class="form-label">Market Analysis and Potential Impact</label>
										<textarea class="form-control" rows="3"
											placeholder="Provide market analysis and potential impact"></textarea>
									</div>
									<!-- Documentation and Proposal -->
									<div class="form-group">
										<label class="form-label">Business Plan, Investment Proposal, and Pitch
											Deck</label>
										<div class="custom-file-upload">
											<input type="file" id="fileUpload" class="form-control-file" style="display: none;">
											<button type="button" class="btn btn-primary"
												onclick="document.getElementById('fileUpload').click();">Upload
												Document</button>
										</div>
									</div>
									<div class="form-group">
										<label class="form-label">Legal Documents (if applicable)</label>
										<div class="custom-file-upload">
											<input type="file" id="fileUpload" class="form-control-file" style="display: none;">
											<button type="button" class="btn btn-primary"
												onclick="document.getElementById('fileUpload').click();">Upload
												Document</button>
										</div>
									</div>
									<!-- Milestone and Roadmap -->
									<div class="form-group">
										<label class="form-label">Project Timeline and Goals</label>
										<textarea class="form-control" rows="3"
											placeholder="Outline the project timeline and goals"></textarea>
									</div>
									<!-- Financial Information -->
									<div class="form-group">
										<label class="form-label">Use of Funds and Budget Allocation</label>
										<textarea class="form-control" rows="3"
											placeholder="Detail the use of funds and budget allocation"></textarea>
									</div>
									<!-- Impact and Sustainability -->
									<div class="form-group">
										<label class="form-label">Alignment with ESG and Sustainability Factors</label>
										<textarea class="form-control" rows="3"
											placeholder="Explain how your project aligns with ESG and sustainability factors"></textarea>
									</div>
									<!-- Market Validation -->
									<div class="form-group">
										<label class="form-label">Customer Feedback and Market Validation</label>
										<textarea class="form-control" rows="3"
											placeholder="Summarize customer feedback and any letters of intent (LOIs) from potential clients"></textarea>
									</div>
									<!-- Team Information -->
									<div class="form-group">
										<label class="form-label">Team Member Profiles and Experience</label>
										<textarea class="form-control" rows="3"
											placeholder="Describe your team members' profiles, qualifications, and experiences"></textarea>
									</div>
									<!-- Legal and Compliance Documents -->
									<div class="form-group">
										<label class="form-label">Legal and Compliance Documents</label>
										<div class="custom-file-upload">
											<input type="file" id="fileUpload" class="form-control-file" style="display: none;">
											<button type="button" class="btn btn-primary"
												onclick="document.getElementById('fileUpload').click();">Upload
												Document</button>
										</div>
									</div>
									<!-- Demo or Prototype -->
									<div class="form-group">
										<label class="form-label">Access to Demo or Prototype</label>
										<textarea class="form-control" rows="3"
											placeholder="Provide links or details on how to access the demo or prototype (if applicable)"></textarea>
									</div>
									<!-- References and Recommendations -->
									<div class="form-group">
										<label class="form-label">References and Recommendations</label>
										<textarea class="form-control" rows="3"
											placeholder="List endorsements from mentors, industry experts, or advisors"></textarea>
									</div>
									<!-- Exit Strategy -->
									<div class="form-group">
										<label class="form-label">Exit Strategy</label>
										<textarea class="form-control" rows="3"
											placeholder="Describe potential exit plans, such as acquisition or IPO strategy"></textarea>
									</div>
									<!-- Contact Information -->
									<div class="form-group">
										<label class="form-label">Contact Information for Further Inquiries</label>
										<input type="text" class="form-control" placeholder="Enter contact information">
									</div>
									<!-- Behavioral Insights -->
									<div class="form-group">
										<label class="form-label">Behavioral Insights</label>
										<textarea class="form-control" rows="3"
											placeholder="Provide user engagement data, feedback, and traction information"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-right mt-3 mb-4">
					<button type="button" class="btn btn-primary">Save changes</button>&nbsp;
					<button type="button" class="btn btn-default">Cancel</button>
				</div>
			</div>
		</div>
		<!-- Main content End -->
@include('entrepreneur.inc.footer')