<?php $page = 'login'; ?>
@extends('layout.mainlayout-without-nav')
@section('content')
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" style="height: 100%;	border-radius: 8px 25px 25px 8px;"
                        src="{{ URL::asset('assets/img/parent_teacher_mobile_logo.png') }}" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Welcome To Parent Teacher Mobile</h1>
                        {{-- <p class="account-subtitle">Need an account?  <a href="{{url('register')}}">Sign Up</a></p> --}}
                        <h2>Sign in</h2>

                        <!-- Form -->
                        <form method="POST" action="{{ url('login') }}">
                            @csrf
                            <div class="form-group">
                                <label>Username <span class="login-danger">*</span></label>
                                <input type="text" placeholder="Email" id="Email" class="form-control" name="email"
                                    value="">
                                <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                <div class="text-danger pt-2">
                                </div>
                            </div>
                            <div class="form-group pass-group">
                                <label>Password <span class="login-danger">*</span></label>
                                <input type="password" placeholder="Password" id="password"
                                    class="form-control pass-input " name="password" value="">
                                <span class="profile-views feather-eye toggle-password"></span>
                            </div>
							<div class="text-danger">
								@if (session()->has('invalidCredentials'))
									<div class="alert alert-danger">
										{{ session()->get('invalidCredentials') }}
									</div>
								@endif
							</div>
                            <div class="forgotpass">
                                <div class="remember-me">
                                    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                        <input type="checkbox" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <a href="{{ url('forgot-password') }}">Forgot Password?</a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
