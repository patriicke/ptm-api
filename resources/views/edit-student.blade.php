<?php $page="add-student";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Add Students @endslot
    @slot('li_1') Student @endslot
    @slot('li_2') Add Students @endslot
@endcomponent	

<div class="row">
	<div class="col-sm-12">
		<div class="card comman-shadow">
			<div class="card-body">
				<form method="POST" action="{{ url('update-student') }}"  enctype="multipart/form-data">
					@csrf
                    <input class="form-control" type="hidden" required value="{{$student->id}}" name="student_id" >
					<div class="row">
						<div class="col-12">
							<h5 class="form-title student-info">Student Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
						</div>
						<div class="col-12 col-sm-4">  
							<div class="form-group local-forms">
								<label >Name <span class="login-danger">*</span></label>
								<input class="form-control" type="text" name="name" value="{{$student->name}}"  required placeholder="Enter First Name" >
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label >Gender <span class="login-danger">*</span></label>
								<select class="form-control select"  name="gender"  required>
									<option value="{{$student->gender}}">{{$student->gender}}</option>
									<option value="Female">Female</option>
									<option value="Male">Male</option>
									</select>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms calendar-icon">
								<label >Date Of Birth  <span class="login-danger">*</span></label>
								<input class="form-control" type="date"   value="{{$student->dob}}" name="dob" required  >
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>School <span class="login-danger">*</span></label>
								<select class="form-control select" name="school_id"  required> 
									<option value="{{$student->school}}">{{$student->schools->name}}</option>
									@foreach($schools as $school)
									<option value="{{$school->id}}">{{$school->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Parent <span class="login-danger">*</span></label>
								<select class="form-control select" name="parent_id"  required> 
									<option value="{{$student->parent}}">{{$student->parents->name}}</option>
									@foreach($parents as $parent)
									<option value="{{$parent->id}}">{{$parent->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label>Teacher <span class="login-danger">*</span></label>
								<select class="form-control select" name="teacher_id"  required> 
									<option value="{{$student->teacher}}">{{$student->teachers->name}}</option>
									@foreach($teachers as $teacher)
									<option value="{{$teacher->id}}">{{$teacher->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label >Roll #</label>
								<input class="form-control" type="text" name="roll_number"  value="{{$student->roll_number}}" required placeholder="Enter Roll Number" >
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label >Blood Group <span class="login-danger">*</span></label>
								<select class="form-control select"  name="blood_group" required>
									<option value="{{$student->blood_group}}">{{$student->blood_group}}</option>
									<option value="B+">B+</option>
									<option value="A+">A+</option>
									<option value="O+">O+</option>
									</select>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label >Religion <span class="login-danger">*</span></label>
								<select class="form-control select"  name="religion" required>
									<option value="{{$student->religion}}">{{$student->religion}}</option>
									<option value="Hindu">Hindu</option>
									<option value="Christian">Christian</option>
									<option value="Others">Others</option>
									</select>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label >E-Mail <span class="login-danger">*</span></label>
								<input class="form-control" type="text"  name="email"  value="{{$student->email}}" required placeholder="Enter Email Address" >
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label >Class <span class="login-danger">*</span></label>
								<select class="form-control select"  name="class">
									<option value="{{$student->class}}">{{$student->class}} </option>
									<option value="12">12</option>
									<option value="11">11</option>
									<option value="10">10</option>
									</select>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label >Section <span class="login-danger">*</span></label>
								<select class="form-control select"  name="section" required >
									<option value="{{$student->section}}">{{$student->section}} </option>
									<option value="B">B</option>
									<option value="A">A</option>
									<option value="C">C</option>
									</select>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label >Admission ID </label>
								<input class="form-control" type="text" value="{{$student->admission_id}}"  name="admission_id" required  placeholder="Enter Admission ID" >
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group local-forms">
								<label >Phone </label>
								<input class="form-control" type="text" name="phone" required  value="{{$student->phone}}" placeholder="Enter Phone Number" >
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="form-group students-up-files">
								<img src="{{URL::asset('images/student/'.$student->image) }}"  class=" mt-4 row" alt="" width="150px" height="150px">
								<label>Upload Student Photo (150px X 150px)</label>
								<div class="uplod">

									<label class="file-upload image-upbtn mb-0">
										Choose File <input type="file" name="image" required> 
									</label>
								</div>
							</div>
						</div>
						{{-- <div class="form-group local-forms">
							<label>Image <span class="login-danger">*</span></label>
							<input type="file" name="image" class="form-control @error('image') is-invalid @enderror" >
							@error('image')
							<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
							</span>
							@enderror
						<img src="{{URL::asset('images/principle/'.$principle->image) }}"  class=" mt-4 row" alt="" width="150px" height="150px">
						</div> --}}
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
