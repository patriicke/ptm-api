<?php $page="add-principa";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Add school @endslot
    @slot('li_1') school @endslot
    @slot('li_2') Add school @endslot
@endcomponent	
<div class="row">
	<div class="col-sm-12">
		<div class="card comman-shadow">
			<div class="card-body">
				<form method="POST" action="{{ url('update-school') }}">
					@csrf
                    <input class="form-control" type="hidden" required value="{{$school->id}}" name="school_id" >
					<div class="row">
						<div class="col-12">
							<h5 class="form-title principa-info">Edit School Information <span></span></h5>
						</div>
						<div class="col-12 col-sm-6">  
							<div class="form-group local-forms">
								<label >School  Name <span class="login-danger">*</span></label>
								<input class="form-control" type="text" value="{{$school->name}}" required name="name" placeholder="Enter School Name" >
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label >Address <span class="login-danger">*</span></label>
								<input class="form-control" type="text" required value="{{$school->address}}" name="address" placeholder="Enter Address " >
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label >City <span class="login-danger">*</span></label>
								<input class="form-control" type="text"  required value="{{$school->city}}" name="city" placeholder="Enter City Name " >
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label >State <span class="login-danger">*</span></label>
								<input class="form-control" type="text" required value="{{$school->state}}" name="state" placeholder="Enter City Name " >
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms ">
								<label >Zipcode  <span class="login-danger">*</span></label>
								<input class="form-control " type="text" required value="{{$school->zip_code}}" name="zip_code" placeholder="Enter Zipcode" >
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label >Country <span class="login-danger">*</span></label>
								<input class="form-control" type="text" required value="{{$school->country}}" name="country" placeholder="Enter Country" >
							</div>
						</div>
						<div class="col-12">
							<div class="principa-submit">
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
