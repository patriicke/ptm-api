<?php $page="add-news";?>
@extends('layout.mainlayout')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Add News @endslot
    @slot('li_1') News @endslot
    @slot('li_2') Add News @endslot
@endcomponent	

<div class="row">
	<div class="col-sm-12">
	
		<div class="card">
			<div class="card-body">
				<form>
					<div class="row">
						<div class="col-12">
							<h5 class="form-title"><span>News Information</span></h5>
						</div>
						<div class="col-12 col-sm-6">  
							<div class="form-group local-forms">
								<label>Text <span class="login-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-12 col-sm-6">  
							<div class="form-group local-forms">
								<label>Image <span class="login-danger">*</span></label>
								<input type="file" class="form-control">
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