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
				<form method="POST" action="{{ url('store-principle') }}"  enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-12">
							<h5 class="form-title principa-info">Principle Information </h5>
						</div>
						<div class="col-12 col-sm-6">  
							<div class="form-group local-forms">
								<label >Name <span class="login-danger">*</span></label>
								<input class="form-control" type="text" required name="name" placeholder="Enter Name" >
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label >E-Mail <span class="login-danger">*</span></label>
								<input class="form-control" type="text" required name="email" placeholder="Enter Email Address" >
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label>School <span class="login-danger">*</span></label>
								<select class="form-control select" name="school_id"  required> 
									@foreach($schools as $school)
									<option value="{{$school->id}}">{{$school->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-6">  
							<div class="form-group local-forms">
								<label>Image <span class="login-danger">*</span></label>
								<input type="file" name="image" id="image" required class="form-control @error('image') is-invalid @enderror" required>
								@error('image')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
							@enderror
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Password <span class="login-danger">*</span></label>
								<input type="text" class="form-control" name="password"  required placeholder="Enter Password">
							</div>
						</div>
						
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label >Monthly Fee <span class="login-danger">*</span></label>
								<input class="form-control" type="text" required name="monthly_fee" placeholder="Enter Monthly Fee" >
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
