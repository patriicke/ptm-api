<?php $page="update-parent";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Edit Parent @endslot
    @slot('li_1') Parents @endslot
    @slot('li_2') Edit Parent @endslot
@endcomponent
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<form method="POST" action="{{ url('update-parent') }}">
					@csrf
					<input class="form-control" type="hidden" required value="{{$parent->id}}" name="parent_id" >
					<div class="row">
						<div class="col-12">
							<h5 class="form-title"><span>Basic Details</span></h5>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Name <span class="login-danger">*</span></label>
								<input type="text" class="form-control"  name="name"  value="{{$parent->name}}" required placeholder="Enter Name">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Last Name <span class="login-danger">*</span></label>
								<input type="text" class="form-control"  name="last_name"  value="{{$parent->last_name}}" required placeholder="Enter Last Name">
							</div>
						</div>
						{{-- <div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Gender <span class="login-danger">*</span></label>
								<select class="form-control select" name="gender"  required> 
									<option value="{{$parent->gender}}">{{$parent->gender}}</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Others">Others</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms calendar-icon">
								<label >Date Of Birth  <span class="login-danger">*</span></label>
								<input class="form-control" name="dob"   value="{{$parent->dob}}" required  type="date"  >
							</div>
						</div> --}}
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Phone Number <span class="login-danger">*</span></label>
								<input type="text" class="form-control" name="phone"   value="{{$parent->phone}}" required  placeholder="Enter Phone">
							</div>
						</div>

						<div class="col-12">
							<h5 class="form-title"><span>Login Details</span></h5>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Primary Email Address <span class="login-danger">*</span></label>
								<input type="email" name="email"  required class="form-control" value="{{$parent->email}}" placeholder="Enter Primary Email Id">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Secondary Email Address<span class="login-danger">*</span></label>
								<input type="email" name="sec_email"  required class="form-control" value="{{$parent->sec_email}}" placeholder="Enter Secondary Email Id">
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
								<input type="text" name="address"  value="{{$parent->address}}" required class="form-control" placeholder="Enter address">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>City <span class="login-danger">*</span></label>
								<input type="text" name="city"   value="{{$parent->city}}" required  class="form-control" placeholder="Enter City">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>State <span class="login-danger">*</span></label>
								<input type="text"  name="state"  value="{{$parent->state}}"  required class="form-control" placeholder="Enter State">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Zip Code <span class="login-danger">*</span></label>
								<input type="text"  name="zip_code" value="{{$parent->zip_code}}"  required class="form-control" placeholder="Enter Zip">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Country <span class="login-danger">*</span></label>
								<input type="text" name="country"  value="{{$parent->country}}"  required class="form-control" placeholder="Enter Country">
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
