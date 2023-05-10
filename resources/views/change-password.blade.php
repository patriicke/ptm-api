<?php $page="change-password";?>
@extends('layout.mainlayout')
@section('content')	
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
<div class="login-wrapper">

	<div class="container">
		<div class="loginbox">
			<div class="login-left">
				<img class="img-fluid" src="{{ URL::asset('/assets/img/login.png')}}" alt="Logo">
			</div>
			<div class="login-right">
				<div class="login-right-wrap">
					<h1>Change Password</h1>
					<p class="account-subtitle">Let Us Help You</p>
					
					<!-- Form -->
					{{-- <form action="login">
						<div class="form-group">
							<label >Enter your registered email address <span class="login-danger">*</span></label>
							<input class="form-control" type="text" >
							<span class="profile-views"><i class="fas fa-envelope"></i></span>
						</div>
						<div class="form-group">
							<button class="btn btn-primary btn-block" type="submit">Reset My Password</button>
						</div>
						<div class="form-group mb-0">
							<button class="btn btn-primary primary-reset btn-block" type="submit">Login</button>
						</div>
					</form> --}}
					<form action="{{ url('change/password') }}" method="post" id="changePasswordForm">
						<div class="modal-body">
							@csrf
							<input type="hidden" name="user_id" value="{{ Auth::id() }}" />
							<div class="form-group">
								<label>Old Password:</label>
								<input type="password" name="oldPassword"  id="oldPassword"
									class="form-control form-control-solid" required placeholder="Enter old password" />
							</div>
							<div class="form-group">
								<label>New Password:</label>
								<input type="password" name="password" id="password"
									class="form-control form-control-solid" required placeholder="Enter new password" />
							</div>
							<div class="form-group">
								<label>Confirm Password:</label>
								<input type="password" name="cpassword" id="cpassword"
									class="form-control form-control-solid" required placeholder="Confirm Password" />
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" id="submitPasChange" class="btn btn-primary mr-2">Change</button>
						</div>
					</form>
					<!-- /Form -->
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection