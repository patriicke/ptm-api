<?php $page="add-subject";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Add Subject @endslot
    @slot('li_1') Subject @endslot
    @slot('li_2') Add Subject @endslot
@endcomponent	

<div class="row">
	<div class="col-sm-12">
	
		<div class="card">
			<div class="card-body">
				<form>
					<div class="row">
						<div class="col-12">
							<h5 class="form-title"><span>Subject Information</span></h5>
						</div>
						<div class="col-12 col-sm-4">  
							<div class="form-group local-forms">
								<label>Subject ID <span class="login-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-12 col-sm-4">  
							<div class="form-group local-forms">
								<label>Subject Name <span class="login-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-12 col-sm-4">  
							<div class="form-group local-forms">
								<label>Class <span class="login-danger">*</span></label>
								<input type="text" class="form-control">
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