<?php $page="profile";?>
@extends('layout.mainlayout')
 
@section('content')     
@component('components.breadcrumb')                
    @slot('title') Profile @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Profile @endslot
@endcomponent 
					
	<div class="row">
		<div class="col-md-12">
			<div class="profile-header">
				<div class="row align-items-center">
					<div class="col-auto profile-image">
						<a href="#">
							<img class="rounded-circle" src="{{ URL::asset('images/'.((Auth::user()->type == 'superadmin')?'admin':Auth::user()->type).'/'.Auth::user()->image)}}" alt="User Image" class="avatar-img rounded-circle">
						</a>
					</div>
					<div class="col ms-md-n2 profile-user-info">
						<h4 class="user-name mb-0">{{Auth::user()->name}}</h4>
						<h6 class="text-muted">{{Auth::user()->gender}}</h6>
						<div class="user-Location"><i class="fas fa-map-marker-alt"></i> {{Auth::user()->address}}</div>
						{{-- <div class="about-text">Lorem ipsum dolor sit amet.</div> --}}
					</div>
					<div class="col-auto profile-btn">

						<a href="{{url('/edit-'.((Auth::user()->type == 'superadmin'?'admin':Auth::user()->type)).'/'.Auth::user()->id.'')}}" class="btn btn-primary">
							Edit
						</a>
					</div>
				</div>
			</div>
			<div class="profile-menu">
				<ul class="nav nav-tabs nav-tabs-solid">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
					</li>
					{{-- <li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
					</li> --}}
				</ul>
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
										<p class="col-sm-9">{{Auth::user()->name}}</p>
									</div>
									<div class="row">
										<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of Birth</p>
										<p class="col-sm-9">{{Auth::user()->dob}}</p>
									</div>
									<div class="row">
										<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
										<p class="col-sm-9">{{Auth::user()->email}}</p>
									</div>
									<div class="row">
										<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
										<p class="col-sm-9">{{Auth::user()->phone}}</p>
									</div>
									<div class="row">
										<p class="col-sm-3 text-muted text-sm-end mb-0">Address</p>
										<p class="col-sm-9 mb-0">{{Auth::user()->address}}<br>
										{{-- Miami,<br>
										Florida - 33165,<br>
										United States.</p> --}}
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
	</div>
@endsection
