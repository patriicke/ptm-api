<?php $page="add-principa";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Add Principle @endslot
    @slot('li_1') Principle @endslot
    @slot('li_2') Add Principle @endslot
@endcomponent	
<div class="row">
	<div class="col-sm-12">
	
		<div class="card comman-shadow">
			<div class="card-body">
				<form method="POST" action="{{ url('update-principle') }}" enctype="multipart/form-data">
					@csrf
                    <input class="form-control" type="hidden" required value="{{$principle->id}}" name="principle_id" >
                    
					<div class="row">
						<div class="col-12">
							<h5 class="form-title principa-info">Principle Information </h5>
						</div>
						<div class="col-12 col-sm-6">  
							<div class="form-group local-forms">
								<label >Name <span class="login-danger">*</span></label>
								<input class="form-control" type="text" required value="{{$principle->name}}" name="name" placeholder="Enter Name" >
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label >E-Mail <span class="login-danger">*</span></label>
								<input class="form-control" type="text" required value="{{$principle->email}}" name="email" placeholder="Enter Email Address" >
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label>School <span class="login-danger">*</span></label>
								<select class="form-control select" name="school_id"  required> 
									<option value="{{$principle->school}}">{{$principle->schools->name}}</option>
									@foreach($schools as $school)
									<option value="{{$school->id}}">{{$school->name}}</option>
									@endforeach
								</select>
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
						<img src="{{URL::asset('images/principle/'.$principle->image) }}"  class=" mt-4 row" alt="" width="150px" height="150px">
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Password </label>
								<input type="text" class="form-control" name="password"  placeholder="Leave empty if dont want to change">
							</div>
						</div>
						
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label >Monthly Fee <span class="login-danger">*</span></label>
								<input class="form-control" type="text" required value="{{$principle->monthly_fee}}" name="monthly_fee" placeholder="Enter Monthly Fee" >
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
