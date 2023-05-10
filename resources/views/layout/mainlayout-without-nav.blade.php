<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        @if(Route::is(['login']))
		<title>Parent Teacher Mobile  - Login</title>
		@endif
		@if(Route::is(['forgot-password']))
		<title>Parent Teacher Mobile - Forgot Password</title>
	    @endif
	    @if(Route::is(['register']))
		<title>Parent Teacher Mobile  - Register</title>
		@endif
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/img/parent_teacher_mobile_logo.png')}}">
    @include('layout.partials.head')
	
	@include('layout.partials.footer-scripts')

  </head>
  <body>
  <!-- Main Wrapper -->
  <div class="main-wrapper login-body">
		@yield('content')
	</div>
<!-- /Main Wrapper -->

 </body>
</html>