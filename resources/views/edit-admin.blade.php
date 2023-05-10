<?php $page="update-admin";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Edit Admin @endslot
    @slot('li_1') Admins @endslot
    @slot('li_2') Edit Admin @endslot
@endcomponent
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<form method="POST" action="{{ url('update-admin') }}" enctype="multipart/form-data">
					@csrf
					<input class="form-control" type="hidden" required value="{{$admin->id}}" name="admin_id" >
					<div class="row">
						<div class="col-12">
							<h5 class="form-title"><span>Basic Details</span></h5>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Name <span class="login-danger">*</span></label>
								<input type="text" class="form-control"  name="name"  value="{{$admin->name}}" required placeholder="Enter Name">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Gender <span class="login-danger">*</span></label>
								<select class="form-control select" name="gender"  required> 
									<option value="{{$admin->gender}}">{{$admin->gender}}</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms calendar-icon">
								<label >Date Of Birth  <span class="login-danger">*</span></label>
								<input class="form-control" name="dob"   value="{{$admin->dob}}" required  type="date"  >
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Phone Number <span class="login-danger">*</span></label>
								<input type="text" class="form-control" name="phone"   value="{{$admin->phone}}" required  placeholder="Enter Phone">
							</div>
						</div>
						<div class="form-group local-forms">
							<label>Image <span class="login-danger">*</span></label>
							<input type="file" name="image" class="form-control @error('image') is-invalid @enderror" >
							@error('image')
							<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
							</span>
							@enderror
						<img src="{{URL::asset('images/admin/'.$admin->image) }}"  class=" mt-4 row" alt="" width="150px" height="150px">
						</div>
						<div class="col-12">
							<h5 class="form-title"><span>Login Details</span></h5>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Email ID <span class="login-danger">*</span></label>
								<input type="email" name="email"  required class="form-control" value="{{$admin->email}}" placeholder="Enter Mail Id">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Password </label>
								<input type="text" class="form-control" name="password"  placeholder="Leave empty if dont want to change">
							</div>
						</div>
						<div class="col-12">
							<h5 class="form-title"><span>Address</span></h5>
						</div>
						<div class="col-12">
							<div class="form-group local-forms">
							<label>Address <span class="login-danger">*</span></label>
								<input type="text" name="address"  value="{{$admin->address}}" required class="form-control" placeholder="Enter address">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>City <span class="login-danger">*</span></label>
								<input type="text" name="city"   value="{{$admin->city}}" required  class="form-control" placeholder="Enter City">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>State <span class="login-danger">*</span></label>
								<input type="text"  name="state"  value="{{$admin->state}}"  required class="form-control" placeholder="Enter State">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Zip Code <span class="login-danger">*</span></label>
								<input type="text"  name="zip_code" value="{{$admin->zip_code}}"  required class="form-control" placeholder="Enter Zip">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Country <span class="login-danger">*</span></label>
								<input type="text" name="country"  value="{{$admin->country}}"  required class="form-control" placeholder="Enter Country">
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
