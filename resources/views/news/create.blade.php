<?php $page="add-news";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Add News @endslot
    @slot('li_1') News @endslot
    @slot('li_2') Add News @endslot
@endcomponent	
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> --}}

<div class="row">
	<div class="col-sm-12">
	
		<div class="card">
			<div class="card-body">
				<form action="{{url('store-news')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-12">
							<h5 class="form-title"><span>News Information</span></h5>
						</div>
						<div class="col-12 col-sm-6">  
							<div class="form-group local-forms">
								<label>Text <span class="login-danger">*</span></label>
								<input type="text" maxlength="20" class="form-control @error('msg') is-invalid @enderror" name="msg" placeholder="Enter push notification text here" value="{{ Request::old('text') }}" required>
								@error('msg')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
						@enderror
							</div>
						</div>
						<div class="col-12 col-sm-6">  
							<div class="form-group local-forms">
								<label>Image <span class="login-danger">*</span></label>
								<input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required>
								@error('image')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
							@enderror
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label>School <span class="login-danger">*</span></label>
								<select class=" form-control" name="school_id">
									<option value="">select school</option>
									<option value="0">All Schools</option>
									@foreach($schools as $school)
									<option value="{{$school->id}}">{{$school->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label>Assign To <span class="login-danger">*</span></label>
								<select class="form-control select" name="assign_to"  required> 
									<option value="">assign news</option>
									<option value="teacher">Teacher</option>
									<option value="student">Student</option>
								</select>
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