<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container-fluid ">
			<!--begin::Notice-->
			<div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
				<div class="alert-icon">
					<span class="svg-icon svg-icon-primary svg-icon-xl"><!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Tools/Compass.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24"/>
								<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"/>
								<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"/>
							</g>
						</svg><!--end::Svg Icon-->
					</span>	
				</div>
				<div class="alert-text">
					DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.
					<br/>For more info see <a class="font-weight-bold" href="https://datatables.net/" target="_blank">the official home</a> of the plugin.
				</div>
			</div>
			<!--end::Notice-->

			<div class="row">
				<div class="col-lg-6">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">Score Entry Form</h3>
                            <!-- <h3 class="card-title text-right">Select Courses and Grades</h3> -->
						</div>
                        
						<!--begin::Form-->
						<form class="form">
							<div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <label>Select Programme *</label>
                                                <select class="form-control kt_select2_1" id="programme" name="programme">
                                                    <option selected value="AK"></option>  
                                                    <option value="AK">BSc</option>
                                                    <option value="HI">MSc</option>
                                                    <option value="HI">PGd</option>
                                                    <option value="HI">PhD</option>
                                                    <option value="HI">PostDoc</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Academic Session *</label>
                                                <select class="form-control kt_select2_1" id="academicsession" name="academicsession">
                                                    <option selected value="AK"></option>  
                                                    <option value="AK">2010/2011</option>
                                                    <option value="HI">2011/2012</option>
                                                    <option value="CA">2012/1013</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Select Department *</label>
                                                <select class="form-control kt_select2_1" id="departmentcode" name="departmentcode">
                                                    <option selected value="AK"></option>  
                                                    <option value="AK">AGY</option>
                                                    <option value="HI">KAU</option>
                                                    <option value="CA">TRE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <label>Select Semester *</label>
                                                <select class="form-control kt_select2_1" id="semester" name="semester">
                                                    <option selected value="AK"></option>  
                                                    <option value="AK">1</option>
                                                    <option value="HI">2</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Select Course Code *</label>
                                                <select class="form-control kt_select2_1" id="coursecode" name="coursecode">
                                                    <option selected value="AK"></option>  
                                                    <option value="AK">AGY</option>
                                                    <option value="HI">KAU</option>
                                                    <option value="CA">TRE</option>
                                                </select>
                                            </div>
                                            <!-- <div class="col-lg-4">
                                                <label>Enter Lecturer's Name *</label>
                                                <input type="text" class="form-control" id="matricno" name="matricno" placeholder="Course Lecturer" />
                                            </div> -->
                                            <div class="col-lg-4">
                                                <label>Course Unit *</label>
                                                    <select class="form-control kt_select2_1" id="courseUnit" name="courseUnit">
                                                    <option selected value="AK">Course Unit</option>  
                                                    <option value="AK">6</option>
                                                    <option value="HI">5</option>
                                                    <option value="AK">4</option>
                                                    <option value="HI">3</option>
                                                    <option value="AK">2</option>
                                                    <option value="HI">1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="table table-hover">
                                        <table id="assessment1" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th width="10%" scope="col">S/N</th>
                                                    <th width="20%" scope="col">Matric No</th>
                                                    <th width="55%" scope="col">Class List</th>
                                                    <th width="15%" scope="col">Enter Score</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Tiger Nixon Garrett Tiger</td>
                                                    <td class="text-right"><input type="text" id="row-1-ass1" name="row-1-ass1" class="form-control" value="61"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Garrett Winters Garrett Tiger</td>
                                                    <td class="text-right"><input type="text" id="row-2-ass1" name="row-2-ass1" class="form-control" value="61"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Ashton Cox Garrett Tiger</td>
                                                    <td class="text-right"><input type="text" id="row-3-ass1" name="row-3-ass1" class="form-control" value="61"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Cedric Kelly Garrett Tiger</td>
                                                    <td class="text-right"><input type="text" id="row-4-ass1" name="row-4-ass1" class="form-control" value="61"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Airi Satou Garrett Tiger</td>
                                                    <td class="text-right"><input type="text" id="row-5-ass1" name="row-5-ass1" class="form-control" value="61"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Brielle Williamson Garrett Tiger</td>
                                                    <td class="text-right"><input type="text" id="row-6-ass1" name="row-6-ass1" class="form-control" value="61"></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Jennifer Chang Garrett Tiger</td>
                                                    <td class="text-right"><input type="text" id="row-7-ass1" name="row-7-ass1" class="form-control" value="61"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Quinn Flynn Garrett Tiger</td>
                                                    <td class="text-right"><input type="text" id="row-7-ass1" name="row-7-ass1" class="form-control" value="61"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Charde Marshall Garrett Tiger</td>
                                                    <td class="text-right"><input type="text" id="row-7-ass1" name="row-7-ass1" class="form-control" value="61"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Haley Kennedy Garrett Tiger</td>
                                                    <td class="text-right"><input type="text" id="row-2-ass1" name="row-7-ass1" class="form-control" value="61"></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                <th width="10%" scope="col">S/N</th>
                                                    <th width="20%" scope="col">Matric No</th>
                                                    <th width="55%" scope="col">Class List</th>
                                                    <th width="15%" scope="col">Enter Score</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>								
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-6">
										<button type="reset" class="btn btn-primary mr-2">Save</button>
									</div>
									<div class="col-lg-6 text-right">
										<button type="reset" class="btn btn-danger">Reset</button>
									</div>
								</div>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card-->
				</div>

				<div class="col-lg-6">
					<!--begin::Card-->
					<div class="card card-custom gutter-b">
						<div class="card-header flex-wrap py-3">
							<div class="card-title">
								<h3 class="card-label">
									Students Result Table
								</h3>
							</div>
							<div class="card-toolbar">
								<!--begin::Dropdown-->
								<div class="dropdown dropdown-inline mr-2">
									<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M3,16 L5,16 C5.55227475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"/>
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"/>
												</g>
											</svg><!--end::Svg Icon-->
										</span>		Export
									</button>

									<!--begin::Dropdown Menu-->
									<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi flex-column navi-hover py-2">
											<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
												Choose an option:
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon"><i class="la la-print"></i></span>
													<span class="navi-text">Print</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon"><i class="la la-copy"></i></span>
													<span class="navi-text">Copy</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon"><i class="la la-file-excel-o"></i></span>
													<span class="navi-text">Excel</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon"><i class="la la-file-text-o"></i></span>
													<span class="navi-text">CSV</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon"><i class="la la-file-pdf-o"></i></span>
													<span class="navi-text">PDF</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
									<!--end::Dropdown Menu-->
								</div>
								<!--end::Dropdown-->

							</div>
						</div>
						<div class="card-body">
							<!--begin: Datatable-->
							<table class="table table-bordered table-checkable" id="kt_datatable">
								<thead>
									<tr>
										<th>S/N</th>
                                        <th>Matric No:</th>
										<th>Session</th>
										<th>Semester</th>
                                        <th>Course</th>
                                        <th>Scores</th>
									</tr>
								</thead>
							
								<tbody>
									<tr>
										<td>1</td>
										<td>64616-103</td>
										<td>Klocko, Koelpin and Nikolaus</td>
                                        <td>AGE</td>
                                        <td>AGE</td>
                                        <td>80</td>
									</tr>
									<tr>
										<td>7</td>
										<td>43074-105</td>
										<td>Klocko, Koelpin and Nikolaus</td>
                                        <td>CSC</td>
                                        <td>AGE</td>
                                        <td>60</td>
									</tr>
									<tr>
										<td>8</td>
										<td>76328-333</td>
										<td>Klocko, Koelpin and Nikolaus</td>
                                        <td>SOS</td>
                                        <td>AGE</td>
                                        <td>75</td>
									</tr>										
								</tbody>
							</table>
							<!--end: Datatable-->
						</div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <button type="reset" class="btn btn-primary mr-2">Generate Transcript</button>
                                </div>
                            </div>
                        </div>
					</div>
					<!--end::Card-->
				</div>
			</div>

		</div>
		<!--end::Container-->
	</div>
<!--end::Entry-->