<?php $page="add-parent";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Add Parent @endslot
    @slot('li_1') Parents @endslot
    @slot('li_2') Add Parents @endslot
@endcomponent
<div class="row">
	<div class="col-sm-12">
		<form method="POST" action="{{ url('store-parent') }}">
			@csrf
		<div class="card">
			<div class="card-body">
				<form>
					<div class="row">
						<div class="col-12">
							<h5 class="form-title"><span>Basic Details</span></h5>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>First Name <span class="login-danger">*</span></label>
								<input type="text" class="form-control"  name="name"  required placeholder="Enter First Name">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Last Name <span class="login-danger">*</span></label>
								<input type="text" class="form-control"  name="last_name"  required placeholder="Enter Last Name">
							</div>
						</div>
						{{-- <div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Gender <span class="login-danger">*</span></label>
								<select class="form-control select" name="gender"  required> 
									<option value="">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Others">Others</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms calendar-icon">
								<label >Date Of Birth  <span class="login-danger">*</span></label>
								<input class="form-control" name="dob"  required  type="date"  >
							</div>
						</div> --}}
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Phone Number <span class="login-danger">*</span></label>
								<input type="text" class="form-control" name="phone"  required  placeholder="Enter Phone">
							</div>
						</div>
						<div class="col-12">
							<h5 class="form-title"><span>Login Details</span></h5>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Primary Email Address <span class="login-danger">*</span></label>
								<input type="email" name="email"  required class="form-control" placeholder="Enter Primary Mail Id">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Secondary Email Address <span class="login-danger">*</span></label>
								<input type="email" name="sec_email"  required class="form-control" placeholder="Enter Secondary Mail Id">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Password <span class="login-danger">*</span></label>
								<input type="text" class="form-control" name="password"  required placeholder="Enter Password">
							</div>
						</div>
						<div class="col-12">
							<h5 class="form-title"><span>Address</span></h5>
						</div>
						<div class="col-12">
							<div class="form-group local-forms">
							<label>Address <span class="login-danger">*</span></label>
								<input type="text" name="address"  required class="form-control" placeholder="Enter address">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>City <span class="login-danger">*</span></label>
								<input type="text" name="city"  required  class="form-control" placeholder="Enter City">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>State <span class="login-danger">*</span></label>
								<input type="text"  name="state"  required class="form-control" placeholder="Enter State">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Zip Code <span class="login-danger">*</span></label>
								<input type="text"  name="zip_code"  required class="form-control" placeholder="Enter Zip">
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Country <span class="login-danger">*</span></label>
								<input type="text" name="country"  required class="form-control" placeholder="Enter Country">
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
