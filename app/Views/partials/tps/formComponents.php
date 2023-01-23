	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">Form Components and Validations</h3>
						</div>
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" id="sample_form_name">
							<div class="card-body">
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Surname:</label>
										<input type="text" class="form-control" name="lastname" id="lastname" autocomplete="off" placeholder="Enter Surname" />
									</div>
									<div class="col-lg-6">
										<label>Firstname:</label>
										<input type="text" class="form-control" name="firstname" id="firstname" autocomplete="off" placeholder="Enter Firstname" />
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Phone Number:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">
													<i class="flaticon2-phone"></i>
												</span>
											</div>
											<input type="text" class="form-control" name="phonenumber" id="phonenumber" autocomplete="off" placeholder="Phone Number" />
										</div>
									</div>
									<div class="col-lg-6">
										<label>Email:</label>
										<input type="email" class="form-control" name="email" id="email" autocomplete="off" placeholder="Enter Email Address" />
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="col-form-label text-right col-lg-3 col-sm-12">Checkbox *</label>
										<div class="col-lg-9 col-md-9 col-sm-12">
											<div class="form-check pl-0 checkbox-inline">
												<label class="checkbox checkbox-outline">Tick me
												<input type="checkbox" name="checkbox" id="checkbox" />
												<span></span></label>
											</div>
											<span class="form-text text-muted">Please tick the checkbox</span>
										</div>
									</div>
									<div class="col-lg-6">
										<label class="col-form-label text-right col-lg-3 col-sm-12">Checkboxes *</label>
										<div class="col-lg-9 col-md-9 col-sm-12">
											<div class="form-check pl-0 checkbox-list">
												<label class="checkbox checkbox-outline">
												<input type="checkbox" name="checkboxes" />
												<span></span>Option 1</label>
												<label class="checkbox checkbox-outline">
												<input type="checkbox" name="checkboxes" />
												<span></span>Option 2</label>
												<label class="checkbox checkbox-outline">
												<input type="checkbox" name="checkboxes" />
												<span></span>Option 3</label>
											</div>
											<span class="form-text text-muted">Please select at lease 1 and maximum 2 options</span>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">Option Boxes *</label>
										<div class="col-lg-9 col-md-9 col-sm-12">
											<div class="form-check pl-0 radio-inline">
												<label class="radio radio-outline">
												<input type="checkbox" name="radios" />
												<span></span>Option 1</label>
												<label class="radio radio-outline">
												<input type="checkbox" name="radios" />
												<span></span>Option 2</label>
												<label class="radio radio-outline">
												<input type="radio" name="radios" />
												<span></span>Option 3</label>
											</div>
											<span class="form-text text-muted">Please select an option</span>
										</div>
									</div>
									<div class="col-lg-6">
										<label>Select *</label>
										<select class="form-control kt_select2_1" id="selectCountry" name="selectCountry">
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="CA">California</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Select Multiple</label>
										<select class="form-control select2 kt_select2_3" id="kt_select2_3" name="param" multiple="multiple">
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK" selected="selected">Alaska</option>
												<option value="HI">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="NV" selected="selected">Nevada</option>
												<option value="OR">Oregon</option>
												<option value="WA">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="MT" selected="selected">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NM">New Mexico</option>
												<option value="ND">North Dakota</option>
												<option value="UT">Utah</option>
												<option value="WY">Wyoming</option>
											</optgroup>
											<optgroup label="Central Time Zone">
												<option value="AL">Alabama</option>
												<option value="AR">Arkansas</option>
												<option value="IL">Illinois</option>
												
											</optgroup>
											<optgroup label="Eastern Time Zone">
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="IN">Indiana</option>
												
											</optgroup>
										</select>
									</div>
									<div class="col-lg-6">
										<label>Date</label>
										<div class="input-group date">
											<input type="text" class="form-control" id="kt_datepicker_2" name="sampledate" readonly="readonly" placeholder="Select date" />
											<div class="input-group-append">
												<span class="input-group-text">
													<i class="la la-calendar-check-o"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-6">
										<button type="reset" id="sample_button_id" class="btn btn-primary mr-2">Save</button>
										<button type="reset" class="btn btn-secondary">Cancel</button>
									</div>
									<div class="col-lg-6 text-right">
										<button type="reset" class="btn btn-danger">Delete</button>
									</div>
								</div>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card-->
					
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>

	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">Basic Form Layout</h3>
							<div class="card-toolbar">
								
							</div>
						</div>
						<!--begin::Form-->
						<form class="form">
							<div class="card-body">
								<div class="form-group">
									<label>Full Name:</label>
									<input type="email" class="form-control form-control-solid" placeholder="Enter full name" />
									<span class="form-text text-muted">Please enter your full name</span>
								</div>
								<div class="form-group">
									<label>Email address:</label>
									<input type="email" class="form-control form-control-solid" placeholder="Enter email" />
									<span class="form-text text-muted">We'll never share your email with anyone else</span>
								</div>
								<div class="form-group">
									<label>Subscription</label>
									<div class="input-group input-group-solid">
										<div class="input-group-prepend">
											<span class="input-group-text">$</span>
										</div>
										<input type="text" class="form-control form-control-solid" placeholder="99.9" />
									</div>
								</div>
								<div class="form-group">
									<label>Communication:</label>
									<div class="checkbox-list">
										<label class="checkbox">
										<input type="checkbox" />
										<span></span>Email</label>
										<label class="checkbox">
										<input type="checkbox" />
										<span></span>SMS</label>
										<label class="checkbox">
										<input type="checkbox" />
										<span></span>Phone</label>
									</div>
								</div>
								<!--begin: Code-->
								<div class="example-code mt-10">
									<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="example_code_html" role="tabpanel">
											<div class="example-highlight">
												<pre style="height:400px">

											</div>
										</div>
									</div>
								</div>
								<!--end: Code-->
							</div>
							<div class="card-footer">
								<button type="reset" class="btn btn-primary mr-2">Submit</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
						</form>
						<!--end::Form-->
					</div>
					
				</div>
				<div class="col-lg-6">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">Horizontal Form Layout</h3>
							<div class="card-toolbar">
								
							</div>
						</div>
						<!--begin::Form-->
						<form class="form">
							<div class="card-body">
								<h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Customer Info:</h3>
								<div class="mb-15">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Full Name:</label>
										<div class="col-lg-6">
											<input type="email" class="form-control" placeholder="Enter full name" />
											<span class="form-text text-muted">Please enter your full name</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Email address:</label>
										<div class="col-lg-6">
											<input type="email" class="form-control" placeholder="Enter email" />
											<span class="form-text text-muted">We'll never share your email with anyone else</span>
										</div>
									</div>
								</div>
								<h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Customer Account:</h3>
								<div class="mb-3">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Holder:</label>
										<div class="col-lg-6">
											<input type="email" class="form-control" placeholder="Enter full name" />
											<span class="form-text text-muted">Please enter your account holder</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Contact</label>
										<div class="col-lg-6">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="la la-chain"></i>
													</span>
												</div>
												<input type="text" class="form-control" placeholder="Phone number" />
											</div>
										</div>
									</div>
									<div class="form-group row align-items-center">
										<label class="col-lg-3 col-form-label">Communication:</label>
										<div class="col-lg-6">
											<div class="checkbox-inline">
												<label class="checkbox">
												<input type="checkbox" />
												<span></span>Email</label>
												<label class="checkbox">
												<input type="checkbox" />
												<span></span>SMS</label>
												<label class="checkbox">
												<input type="checkbox" />
												<span></span>Phone</label>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-6">
										<button type="reset" class="btn btn-success mr-2">Submit</button>
										<button type="reset" class="btn btn-secondary">Cancel</button>
									</div>
								</div>
							</div>
						</form>
						<!--end::Form-->
					</div>
					
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
	
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">Basic Form Layout</h3>
							<div class="card-toolbar">
								
							</div>
						</div>
						<!--begin::Form-->
						<form class="form">
							<div class="card-body">
								<div class="form-group">
									<label>Full Name:</label>
									<input type="email" class="form-control form-control-solid" placeholder="Enter full name" />
									<span class="form-text text-muted">Please enter your full name</span>
								</div>
								<div class="form-group">
									<label>Email address:</label>
									<input type="email" class="form-control form-control-solid" placeholder="Enter email" />
									<span class="form-text text-muted">We'll never share your email with anyone else</span>
								</div>
								<div class="form-group">
									<label>Subscription</label>
									<div class="input-group input-group-solid">
										<div class="input-group-prepend">
											<span class="input-group-text">$</span>
										</div>
										<input type="text" class="form-control form-control-solid" placeholder="99.9" />
									</div>
								</div>
								<div class="form-group">
									<label>Communication:</label>
									<div class="checkbox-list">
										<label class="checkbox">
										<input type="checkbox" />
										<span></span>Email</label>
										<label class="checkbox">
										<input type="checkbox" />
										<span></span>SMS</label>
										<label class="checkbox">
										<input type="checkbox" />
										<span></span>Phone</label>
									</div>
								</div>
								<!--begin: Code-->
								<div class="example-code mt-10">
									<ul class="example-nav nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-2x">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#example_code_html">HTML</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="example_code_html" role="tabpanel">
											<div class="example-highlight">
												<pre style="height:400px">

											</div>
										</div>
									</div>
								</div>
								<!--end: Code-->
							</div>
							<div class="card-footer">
								<button type="reset" class="btn btn-primary mr-2">Submit</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
						</form>
						<!--end::Form-->
					</div>
					
				</div>
				<div class="col-lg-6">
				<div class="card card-custom">
					<div class="card-header flex-wrap border-0 pt-6 pb-0">
						<div class="card-title">
							<h3 class="card-label">Local Datasource
							<span class="text-muted pt-2 font-size-sm d-block">Javascript array as data source</span></h3>
						</div>
						<div class="card-toolbar">
							<!--begin::Dropdown-->
							<div class="dropdown dropdown-inline mr-2">
								<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="svg-icon svg-icon-md">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
											<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>Export</button>
								<!--begin::Dropdown Menu-->
								<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
									<!--begin::Navigation-->
									<ul class="navi flex-column navi-hover py-2">
										<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="la la-print"></i>
												</span>
												<span class="navi-text">Print</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="la la-copy"></i>
												</span>
												<span class="navi-text">Copy</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="la la-file-excel-o"></i>
												</span>
												<span class="navi-text">Excel</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="la la-file-text-o"></i>
												</span>
												<span class="navi-text">CSV</span>
											</a>
										</li>
										<li class="navi-item">
											<a href="#" class="navi-link">
												<span class="navi-icon">
													<i class="la la-file-pdf-o"></i>
												</span>
												<span class="navi-text">PDF</span>
											</a>
										</li>
									</ul>
									<!--end::Navigation-->
								</div>
								<!--end::Dropdown Menu-->
							</div>
							<!--end::Dropdown-->
							<!--begin::Button-->
							<a href="#" class="btn btn-primary font-weight-bolder">
							<span class="svg-icon svg-icon-md">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<circle fill="#000000" cx="9" cy="15" r="6" />
										<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>New Record</a>
							<!--end::Button-->
						</div>
					</div>
					<div class="card-body">
						<!--begin: Search Form-->
						<!--begin::Search Form-->
						<div class="mb-7">
							<div class="row align-items-center">
								<div class="col-lg-9 col-xl-8">
									<div class="row align-items-center">
										<div class="col-md-12 my-2 my-md-0">
											<div class="input-icon">
												<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
												<span>
													<i class="flaticon2-search-1 text-muted"></i>
												</span>
											</div>
										</div>
										
										
									</div>
								</div>
								<div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
									<a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
								</div>
							</div>
						</div>
						<!--end::Search Form-->
						<!--end: Search Form-->
						<!--begin: Datatable-->
						<div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
						<!--end: Datatable-->
					</div>
				</div>
					
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
	
</div>