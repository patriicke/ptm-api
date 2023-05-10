<?php $page="edit-news";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
    @slot('title') Edit News @endslot
    @slot('li_1') News @endslot
    @slot('li_2') Edit News @endslot
@endcomponent

<div class="row">
	<div class="col-sm-12">

		<div class="card">
			<div class="card-body">
				<form action="{{url('update-news')}}" method="post" enctype="multipart/form-data">
					@csrf
					<input class="form-control" type="hidden" required value="{{$news->id}}" name="news_id" >
					{{-- @method('PUT') --}}
					<div class="row">
						<div class="col-12">
							<h5 class="form-title"><span>News Information</span></h5>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label>Text <span class="login-danger">*</span></label>
								<input type="text" maxlength="20" name="msg" class="form-control @error('msg') is-invalid @enderror" placeholder="Enter push notification text here"  value="{{$news->msg}}"  required>
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
								<input type="file" name="image" class="form-control @error('image') is-invalid @enderror" >
								@error('image')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
								@enderror
							<img src="{{URL::asset('images/news/'.$news->image) }}"  class=" mt-4 row" alt="" width="150px" height="150px">
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group local-forms">
								<label>School <span class="login-danger">*</span></label>
								<select class="form-control select" name="school_id"  required> 
									<option value="{{$news->school}}">{{$news->schools->name}}</option>
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
									<option value="{{$news->assign_to}}">{{$news->assign_to}}</option>
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
