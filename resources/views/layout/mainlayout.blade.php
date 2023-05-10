<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        {{-- @if(!Route::is(['students','students-grid','student-details','add-student','edit-student','teachers','teacher-details','add-teacher','edit-teacher','departments','edit-department','add-department','subjects','add-subject','edit-subject','fees-collections','expenses','salary','add-fees-collection','add-expenses','add-salary','holiday','fees','exam','event','time-table','library','error-404','blank-page','sports','hostel','transport','components','form-basic-inputs','form-input-groups','form-horizontal','form-vertical','form-mask','form-validation','tables-basic','data-tables','add-books','add-events','add-exam','add-fees','add-holiday','add-room','add-sports','add-time-table','add-transport','compose','edit-events','edit-exam','edit-fees','edit-room','edit-sports','edit-time-table','edit-transport','inbox','profile']))
		<title> Parent Teacher Mobile - Dashboard</title>
		@endif --}}
		@if(Route::is(['index','school-data']))
		<title> Parent Teacher Mobile - Dashboard</title>
		@endif
		@if(Route::is(['students','add-student','edit-student','students-grid']))
		<title> Parent Teacher Mobile - Students</title>
		@endif
		@if(Route::is(['student-details']))
		<title> Parent Teacher Mobile - Student Details</title>
		@endif
		@if(Route::is(['teachers','add-teacher','edit-teacher']))
		<title> Parent Teacher Mobile - Teachers</title>
		@endif
		@if(Route::is(['parents','add-parent','edit-parent']))
		<title> Parent Teacher Mobile - Parents</title>
		@endif
		@if(Route::is(['principle','add-principl','edit-principl']))
		<title> Parent Teacher Mobile - principle</title>
		@endif
		@if(Route::is(['schools','add-school','edit-school']))
		<title> Parent Teacher Mobile - School</title>
		@endif
		@if(Route::is(['teacher-details']))
		<title> Parent Teacher Mobile - Teacher Details</title>
		@endif
		@if(Route::is(['departments','edit-department','add-department']))
		<title> Parent Teacher Mobile - Departments</title>
		@endif
		@if(Route::is(['subjects','add-subject','edit-subject']))
		<title> Parent Teacher Mobile - Subjects</title>
		@endif
		@if(Route::is(['fees-collections']))
		<title> Parent Teacher Mobile - Fees Collections</title>
		@endif
		@if(Route::is(['expenses','add-expenses']))
		<title> Parent Teacher Mobile - Expenses</title>
		@endif
		@if(Route::is(['salary','add-salary']))
		<title> Parent Teacher Mobile - Salary</title>
		@endif
		@if(Route::is(['add-fees-collection','fees']))
		<title> Parent Teacher Mobile - Fees</title>
		@endif
		@if(Route::is(['holiday','event']))
		<title> Parent Teacher Mobile - Holiday</title>
		@endif
		@if(Route::is(['exam']))
		<title> Parent Teacher Mobile - Exam</title>
		@endif
		@if(Route::is(['time-table']))
		<title> Parent Teacher Mobile - Time Table</title>
		@endif
		@if(Route::is(['library']))
		<title> Parent Teacher Mobile - Library</title>
		@endif
		@if(Route::is(['error-404']))
		<title> Parent Teacher Mobile - Error 404</title>
		@endif
		@if(Route::is(['blank-page']))
		<title> Parent Teacher Mobile - Blank Page</title>
		@endif
		@if(Route::is(['sports']))
		<title> Parent Teacher Mobile - Sports</title>
		@endif
		@if(Route::is(['hostel']))
		<title> Parent Teacher Mobile - Hostel</title>
		@endif
		@if(Route::is(['transport']))
		<title> Parent Teacher Mobile - Transport</title>
		@endif
		@if(Route::is(['components']))
		<title> Parent Teacher Mobile - Components</title>
		@endif
		@if(Route::is(['form-basic-inputs']))
		<title> Parent Teacher Mobile - Basic Inputs</title>
		@endif
		@if(Route::is(['form-input-groups']))
		<title> Parent Teacher Mobile - Form Input Groups</title>
		@endif
		@if(Route::is(['form-horizontal']))
		<title> Parent Teacher Mobile - Horizontal Form</title>
		@endif
		@if(Route::is(['form-vertical']))
		<title> Parent Teacher Mobile - Vertical Form</title>
		@endif
		@if(Route::is(['form-mask']))
		<title> Parent Teacher Mobile - Form Mask</title>
		@endif
		@if(Route::is(['form-validation']))
		<title> Parent Teacher Mobile - Form Validation</title>
		@endif
		@if(Route::is(['tables-basic']))
		<title> Parent Teacher Mobile - Tables Basic</title>
		@endif
		@if(Route::is(['data-tables']))
		<title> Parent Teacher Mobile - Data Tables</title>
		@endif
		@if(Route::is(['add-books']))
		<title> Parent Teacher Mobile - Books</title>
		@endif
		@if(Route::is(['add-events']))
		<title> Parent Teacher Mobile - Events</title>
		@endif
		@if(Route::is(['add-exam']))
		<title> Parent Teacher Mobile - Exam</title>
		@endif
		@if(Route::is(['add-fees']))
		<title> Parent Teacher Mobile - Fees</title>
		@endif
		@if(Route::is(['add-holiday']))
		<title> Parent Teacher Mobile - Holiday</title>
		@endif
		@if(Route::is(['add-room']))
		<title> Parent Teacher Mobile - Hostel</title>
		@endif
		@if(Route::is(['add-sports']))
		<title> Parent Teacher Mobile - Sports</title>
		@endif
		@if(Route::is(['add-time-table']))
		<title> Parent Teacher Mobile - Time Table</title>
		@endif
		@if(Route::is(['add-transport']))
		<title> Parent Teacher Mobile - Transport</title>
		@endif
		@if(Route::is(['compose']))
		<title> Parent Teacher Mobile - Compose</title>
		@endif
		@if(Route::is(['edit-events']))
		<title> Parent Teacher Mobile - Events</title>
		@endif
		@if(Route::is(['edit-exam']))
		<title> Parent Teacher Mobile - Exam</title>
		@endif
		@if(Route::is(['edit-fees']))
		<title> Parent Teacher Mobile - Fees</title>
		@endif
		@if(Route::is(['edit-room']))
		<title> Parent Teacher Mobile - Hostel</title>
		@endif
		@if(Route::is(['edit-sports']))
		<title> Parent Teacher Mobile - Sports</title>
		@endif
		@if(Route::is(['edit-time-table']))
		<title> Parent Teacher Mobile - Time Table</title>
		@endif
		@if(Route::is(['edit-transport']))
		<title> Parent Teacher Mobile - Transport</title>
		@endif
		@if(Route::is(['inbox']))
		<title> Parent Teacher Mobile - Inbox</title>
		@endif
		@if(Route::is(['profile']))
		<title> Parent Teacher Mobile - Profile</title>
		@endif
		<!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/parent_teacher_mobile_logo.png')}}">
    @include('layout.partials.head')
	
  </head>
	
  @if(Route::is(['error-404']))
  <body class="error-page">
  @endif

  <body>
  <!-- Main Wrapper -->
<div class="main-wrapper">
	@if(!Route::is(['error-404'])) 
	@include('layout.partials.header')
	@include('layout.partials.nav')
	@include('layout.partials.footer-scripts')
	<!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

				@yield('content')
			</div>
    @if(Route::is(['components','data-tables','departments','event','exam','expenses','fees','fees-collections','form-basic-inputs',
	'form-horizontal','form-input-groups','form-mask','form-validation','form-vertical','holiday','hostel','library','index','salary','sports',
	'student-dashboard','student-details','students','subjects','tables-basic','teacher-dashboard','teacher-details','teachers','time-table','transport',
	'icon-weather','icon-fontawesome','icon-ionic','icon-material','icon-pe7','icon-simpleline','icon-themify','icon-typicon','icon-feather','icon-flag',
	'accordions','alerts','avatar','badges','cards','buttons','carousel','chart-apex','chart-c3','chart-flot','chart-js','chart-morris',
	'chart-peity','clipboard','counter','drag-drop','form-wizard','grid','horizontal-timeline','images','lightbox','media','modal',
	'notification','offcanvas','placeholders','popover','progress','rangeslider','scrollbar','rating','ribbon','spinner','spinners','stickynote',
	'students-grid','sweetalerts','tab','teachers-grid','text-editor','timeline','toastr','tooltip','typography','video']))  
		@include('layout.partials.footer')	
    @endif			
		</div>
	<!-- /Page Wrapper -->
	@endif
	@if(Route::is(['error-404'])) 
	@yield('content')
	@endif
</div>
<!-- /Main Wrapper -->

 </body>
</html>