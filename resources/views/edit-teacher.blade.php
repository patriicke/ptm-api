<?php $page="add-teacher";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Edit Teachers @endslot
    @slot('li_1') Teachers @endslot
    @slot('li_2') Edit Teachers @endslot
@endcomponent
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<form method="POST" action="{{ url('update-teacher') }}">
					@csrf
					<input class="form-control" type="hidden" required value="{{$teacher->id}}" name="teacher_id" >
					<div class="row">
						<div class="col-12">
							<h5 class="form-title"><span>Basic Details</span></h5>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>School <span class="login-danger">*</span></label>
								<select class="form-control select" name="school_id"  required> 
									<option value="{{$teacher->school}}">{{$teacher->schools->name}}</option>
									@foreach($schools as $school)
									<option value="{{$school->id}}">{{$school->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						{{-- <div class="col-12 col-sm-4">  
							<div class="form-group local-forms">
								<label>Teacher ID <span class="login-danger">*</span></label>
								<input type="text" class="form-control" name="unique_id" value="{{$teacher->unique_id}}" required placeholder="Teacher ID">
							</div>
						</div> --}}
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Name <span class="login-danger">*</span></label>
								<input type="text" class="form-control"  name="name"  value="{{$teacher->name}}" required placeholder="Enter Name">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Last Name <span class="login-danger">*</span></label>
								<input type="text" class="form-control"  name="last_name"  value="{{$teacher->last_name}}" required placeholder="Enter Last Name">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Phone Number <span class="login-danger">*</span></label>
								<input type="text" class="form-control" name="phone"   value="{{$teacher->phone}}" required  placeholder="Enter Phone">
							</div>
						</div>
						{{-- <div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Gender <span class="login-danger">*</span></label>
								<select class="form-control select" name="gender"  required> 
									<option>Male</option>
									<option>Female</option>
									<option>Others</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms calendar-icon">
								<label >Date Of Birth  <span class="login-danger">*</span></label>
								<input class="form-control" name="dob"   value="{{$teacher->dob}}" required  type="date"  >
							</div>
						</div>
						
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms calendar-icon">
								<label>Joining Date <span class="login-danger">*</span></label>
								<input class="form-control" name="joining_date"  value="{{$teacher->joining_date}}" required  type="date"  >
							</div>
						</div>
						<div class="col-12 col-sm-4 local-forms">
							<div class="form-group">
								<label>Qualification <span class="login-danger">*</span></label>
								<input class="form-control" type="text" name="qualification"  value="{{$teacher->qualification}}" required placeholder="Enter Joining Date">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Experience <span class="login-danger">*</span></label>
								<input class="form-control" name="experience"  required type="text"  value="{{$teacher->experience}}" placeholder="Enter Experience">
							</div>
						</div> --}}
						<div class="col-12">
							<h5 class="form-title"><span>Login Details</span></h5>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Primary Email Address <span class="login-danger">*</span></label>
								<input type="email" name="email"  required class="form-control" value="{{$teacher->email}}" placeholder="Enter Primary Email Id">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Secondary Email Address<span class="login-danger">*</span></label>
								<input type="email" name="sec_email"  required class="form-control" value="{{$teacher->sec_email}}" placeholder="Enter Secondary Email Id">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Password</label>
								<input type="text" class="form-control" name="password" placeholder="Leave empty if dont want to change">
							</div>
						</div>
						<div class="col-12">
							<h5 class="form-title"><span>Address</span></h5>
						</div>
						<div class="col-12">
							<div class="form-group local-forms">
							<label>Address <span class="login-danger">*</span></label>
								<input type="text" name="address"  value="{{$teacher->address}}" required class="form-control" placeholder="Enter address">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>City <span class="login-danger">*</span></label>
								<input type="text" name="city"   value="{{$teacher->city}}" required  class="form-control" placeholder="Enter City">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>State <span class="login-danger">*</span></label>
								<input type="text"  name="state"  value="{{$teacher->state}}"  required class="form-control" placeholder="Enter State">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Zip Code <span class="login-danger">*</span></label>
								<input type="text"  name="zip_code" value="{{$teacher->zip_code}}"  required class="form-control" placeholder="Enter Zip">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Country <span class="login-danger">*</span></label>
								<input type="text" name="country"  value="{{$teacher->country}}"  required class="form-control" placeholder="Enter Country">
							</div>
						</div>
						<div class="col-12">
							<div class="student-submit">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>					
</div>					
@endsection
