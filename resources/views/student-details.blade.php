<?php $page="student-details";?>
@extends('layout.mainlayout')
@section('content')     
@component('components.breadcrumb')                
    @slot('title') Student Details @endslot
    @slot('li_1') Student @endslot
    @slot('li_2') Student Details @endslot
@endcomponent	
					
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<div class="about-info">
					<h4>Profile <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h4>
				</div>
				<div class="student-profile-head">
					<div class="profile-bg-img">
						<img  src="{{ URL::asset('/assets/img/profile-bg.jpg')}}"  alt="Profile">
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="profile-user-box">
								<div class="profile-user-img">
									<img  src="{{ URL::asset('/images/student/'.$student->image.'')}}"  alt="Profile">
									{{-- <div class="form-group students-up-files profile-edit-icon mb-0">
										<div class="uplod d-flex">
											<label class="file-upload profile-upbtn mb-0">
												<i class="feather-edit-3"></i><input type="file">
											</label>
										</div>
									</div> --}}
								</div>
								<div class="names-profiles">
									<h4>{{$student->name}}</h4>
									{{-- <h5>Computer Science</h5> --}}
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 d-flex align-items-center">
							<div class="follow-group">
								<div class="students-follows">
									<h5>School</h5>
									<h4>{{$student->schools->name}}</h4>
								</div>
								<div class="students-follows">
									<h5>Teacher</h5>
									<h4>{{$student->teachers->name}}</h4>
								</div>
								<div class="students-follows">
									<h5>Parent</h5>
									<h4>{{$student->parents->name}}</h4>
								</div>
							</div>
							
						</div>
						<div class="col-md-2 profile-btn d-flex align-items-center text-end">
							<a href="{{url('/edit-student/'.$student->id.'')}}" class="btn btn-primary">
								Edit
							</a>
						</div>
						
					</div>
				</div>
			</div>	
			<div class="tab-content profile-tab-cont">
				
				<!-- Personal Details Tab -->
				<div class="tab-pane fade show active" id="per_details_tab">
				
					<!-- Personal Details -->
					<div class="row justify-content-center">
						<div class="col-lg-9">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title d-flex justify-content-between">
										<span>Personal Details</span> 
										{{-- <a class="edit-link" href="#"><i class="far fa-edit me-1"></i>Edit</a> --}}
									</h5>
									<div class="row">
										<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
										<p class="col-sm-9">{{$student->name}}</p>
									</div>
									<div class="row">
										<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of Birth</p>
										<p class="col-sm-9">{{$student->dob}}</p>
									</div>
									<div class="row">
										<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
										<p class="col-sm-9">{{$student->email}}</p>
									</div>
									<div class="row">
										<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
										<p class="col-sm-9">{{$student->phone}}</p>
									</div>
									<div class="row">
										<p class="col-sm-3 text-muted text-sm-end mb-0">Teacher</p>
										<p class="col-sm-9 mb-0">{{$student->teachers->name}}<br>
										{{-- Miami,<br>
										Florida - 33165,<br>
										United States.</p> --}}
									</div>
									<div class="row">
										<p class="col-sm-3 text-muted text-sm-end mb-0">Parent</p>
										<p class="col-sm-9 mb-0">{{$student->parents->name}}<br>
									</div>
								</div>
							</div>
							
						</div>

						{{-- <div class="col-lg-3">
							
							<!-- Account Status -->
							<div class="card">
								<div class="card-body">
									<h5 class="card-title d-flex justify-content-between">
										<span>Account Status</span>
										<a class="edit-link" href="#"><i class="far fa-edit me-1"></i> Edit</a>
									</h5>
									<button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
								</div>
							</div>
							<!-- /Account Status -->

							<!-- Skills -->
							<div class="card">
								<div class="card-body">
									<h5 class="card-title d-flex justify-content-between">
										<span>Skills </span> 
										<a class="edit-link" href="#"><i class="far fa-edit me-1"></i> Edit</a>
									</h5>
									<div class="skill-tags">
										<span>Html5</span>
										<span>CSS3</span>
										<span>WordPress</span>
										<span>Javascript</span>
										<span>Android</span>
										<span>iOS</span>
										<span>Angular</span>
										<span>PHP</span>
									</div>
								</div>
							</div>
							<!-- /Skills -->

						</div> --}}
					</div>
					<!-- /Personal Details -->

				</div>
				<!-- /Personal Details Tab -->
				
				<!-- Change Password Tab -->
				{{-- <div id="password_tab" class="tab-pane fade">
				
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Change Password</h5>
							<div class="row">
								<div class="col-md-10 col-lg-6">
									<form>
										<div class="form-group">
											<label>Old Password</label>
											<input type="password" class="form-control">
										</div>
										<div class="form-group">
											<label>New Password</label>
											<input type="password" class="form-control">
										</div>
										<div class="form-group">
											<label>Confirm Password</label>
											<input type="password" class="form-control">
										</div>
										<button class="btn btn-primary" type="submit">Save Changes</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
				<!-- /Change Password Tab -->
				
			</div>							
		</div>
		{{-- <div class="row">
			<div class="col-lg-4">
				<div class="student-personals-grp">
					<div class="card">
						<div class="card-body">
							<div class="heading-detail">
								<h4>Personal Details :</h4>
							</div>
							<div class="personal-activity">
								<div class="personal-icons">
									<i class="feather-user"></i>
								</div>
								<div class="views-personal">
									<h4>Name</h4>
									<h5>{{$student->name}}</h5>
								</div>
							</div>
							<div class="personal-activity">
								<div class="personal-icons">
									<img src="{{ URL::asset('/assets/img/icons/buliding-icon.svg')}}" alt="">
								</div>
								<div class="views-personal">
									<h4>Department </h4>
									<h5>Computer Science</h5>
								</div>
							</div>
							<div class="personal-activity">
								<div class="personal-icons">
									<i class="feather-phone-call"></i>
								</div>
								<div class="views-personal">
									<h4>Mobile</h4>
									<h5>{{$student->phone}}</h5>
								</div>
							</div>
							<div class="personal-activity">
								<div class="personal-icons">
									<i class="feather-mail"></i>
								</div>
								<div class="views-personal">
									<h4>Email</h4>
									<h5>{{$student->email}}</h5>
								</div>
							</div>
							<div class="personal-activity">
								<div class="personal-icons">
									<i class="feather-user"></i>
								</div>
								<div class="views-personal">
									<h4>Gender</h4>
									<h5>{{$student->gender}}</h5>
								</div>
							</div>
							<div class="personal-activity">
								<div class="personal-icons">
									<i class="feather-calendar"></i>
								</div>
								<div class="views-personal">
									<h4>Date of Birth</h4>
									<h5>{{$student->dob}}</h5>
								</div>
							</div>
							<div class="personal-activity">
								<div class="personal-icons">
									<i class="feather-italic"></i>
								</div>
								<div class="views-personal">
									<h4>Language</h4>
									<h5>English, French, Bangla</h5>
								</div>
							</div>
							<div class="personal-activity mb-0">
								<div class="personal-icons">
									<i class="feather-map-pin"></i>
								</div>
								<div class="views-personal">
									<h4>Address</h4>
									<h5>{{$student->address}}</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="student-personals-grp">
					<div class="card mb-0">
						<div class="card-body">
							<div class="heading-detail">
								<h4>Skills:</h4>
							</div>
							<div class="skill-blk">
								<div class="skill-statistics">
									<div class="skills-head">
										<h5>Photoshop</h5>
										<p>90%</p>
									</div>
									<div class="progress mb-0"  >
										<div class="progress-bar bg-photoshop" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="skill-statistics">
									<div class="skills-head">
										<h5>Code editor</h5>
										<p>75%</p>
									</div>
									<div class="progress mb-0"  >
										<div class="progress-bar bg-editor" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="skill-statistics mb-0">
									<div class="skills-head">
										<h5>Illustrator</h5>
										<p>95%</p>
									</div>
									<div class="progress mb-0"  >
										<div class="progress-bar bg-illustrator" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="student-personals-grp">
					<div class="card mb-0">
						<div class="card-body">
							<div class="heading-detail">
								<h4>About Me</h4>
							</div>
							<div class="hello-park">
								<h5>Hello I am Daisy Parks</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur officia deserunt mollit anim id est laborum.</p>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam  inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
							</div>
							<div class="hello-park">
								<h5>Education</h5>
								<div class="educate-year">
									<h6>2008 - 2009</h6>
									<p>Secondary Schooling at xyz school of secondary education, Mumbai.</p>
								</div>
								<div class="educate-year">
									<h6>2011 - 2012</h6>
									<p>Higher Secondary Schooling at xyz school of higher secondary education, Mumbai.</p>
								</div>
								<div class="educate-year">
									<h6>2012 - 2015</h6>
									<p>Bachelor of Science at Abc College of Art and Science, Chennai.</p>
								</div>
								<div class="educate-year">
									<h6>2015 - 2017</h6>
									<p class="mb-0">Master of Science at Cdm College of Engineering and Technology, Pune.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
	</div>
</div>					
				
@endsection