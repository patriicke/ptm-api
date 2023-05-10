<?php $page="register";?>
@extends('layout.mainlayout-without-nav')
@section('content')	
	<div class="login-wrapper">
		<div class="container">
			<div class="loginbox">
				<div class="login-left">
					<img class="img-fluid" src="{{ URL::asset('/assets/img/login.png')}}" alt="Logo">
				</div>
				<div class="login-right">
					<div class="login-right-wrap">
						<h1>Sign Up</h1>
						<p class="account-subtitle">Enter details to create your account</p>
						
						<!-- Form -->
						<form action="{{ route('register.custom') }}" method="POST">
							@csrf
							<div class="form-group">
								<label >Username <span class="login-danger">*</span></label>
								<input type="text" placeholder="Name" id="name" class="form-control"
								name="name" value="{{old('name')}}">
								<span class="profile-views"><i class="fas fa-user-circle"></i></span>
								<div class="text-danger pt-2">
									@error('name')
										{{$message}}
									@enderror
								</div>
							</div>
							<div class="form-group">
								<label >Email <span class="login-danger">*</span></label>
								<input type="text" placeholder="Email" id="email_address" class="form-control"
								name="email" value="">
								<span class="profile-views"><i class="fas fa-envelope"></i></span>
								<div class="text-danger pt-2">
									@error('email')
										{{$message}}
									@enderror
								</div>
							</div>
							<div class="form-group pass-group">
								<label >Password <span class="login-danger">*</span></label>
								<input type="password" placeholder="Password" id="password" class="form-control pass-input"
								name="password" value="{{old('password')}}">
								<span class="profile-views feather-eye toggle-password"></span>
								<div class="text-danger pt-2">
									@error('password')
										{{$message}}
									@enderror
								</div>
							</div>
							<div class=" dont-have">Already Registered?  <a href="{{url('login')}}">Login</a></div>
							<div class="form-group mb-0">
								<button class="btn btn-primary btn-block" type="submit">Register</button>
							</div>
						</form>
						<!-- /Form -->
						
						<div class="login-or">
							<span class="or-line"></span>
							<span class="span-or">or</span>
						</div>
						
						<!-- Social Login -->
						<div class="social-login">
							<a href="#" ><i class="fab fa-google-plus-g"></i></a>
							<a href="#" ><i class="fab fa-facebook-f"></i></a>
							<a href="#" ><i class="fab fa-twitter"></i></a>
							<a href="#" ><i class="fab fa-linkedin-in"></i></a>
						</div>
						<!-- /Social Login -->
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection