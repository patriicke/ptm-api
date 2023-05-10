

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

        <!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/all.min.css')}}">
		<!-- Feather CSS -->
 		<link rel="stylesheet" href="{{url('assets/plugins/feather/feather.css')}}">
		 <!-- Select2 css -->
		 <link href="{{ URL::asset('/assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />	
		 <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
        <!-- Summernote css -->
    	<link href="{{ URL::asset('/assets/plugins/summernote/summernote-lite.css')}}" rel="stylesheet" type="text/css" />
		<!-- DataTables CSS -->
		<link rel="stylesheet" href="{{url('assets/plugins/datatables/css/jquery.dataTables.min.css')}}">
		
		@if(Route::is(['event']))
		<!-- Full canlendar css -->
		<link href="{{ URL::asset('/assets/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
		@endif
		@if(Route::is(['student-dashboard','teacher-dashboard']))
		<!-- Simple calendar css -->
		<link href="{{ URL::asset('/assets/plugins/simple-calendar/simple-calendar.css')}}" rel="stylesheet" type="text/css" />
		@endif
		@if(Route::is(['seo-settings']))
		<link href="{{ URL::asset('/assets/css/bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css" />
		@endif
        @if(Route::is(['others-settings','add-blog','edit-blog']))
		<link rel="stylesheet" href="{{url('assets/css/ckeditor.css')}}">
		@endif
		@if(Route::is(['chart-c3']))
		<link rel="stylesheet" href="{{url('assets/plugins/c3/c3.min.css')}}">
		@endif
		@if(Route::is(['drag-drop']))
		<link rel="stylesheet" href="{{url('/assets/plugins/dragula/dragula.min.css')}}">
		@endif
		@if(Route::is(['form-wizard']))
		<link rel="stylesheet" href="{{url('assets/plugins/icons/twitter-bootstrap-wizard/form-wizard.css')}}">
		@endif
		@if(Route::is(['icon-feather']))
		<link rel="stylesheet" href="{{url('assets/plugins/icons/feather/feather.css')}}">
		@endif
		<link rel="stylesheet" href="{{url('assets/plugins/icons/ionic/ionicons.css')}}">
		<link rel="stylesheet" href="{{url('assets/plugins/icons/flags/flags.css')}}">
		<link rel="stylesheet" href="{{url('assets/plugins/icons/material/materialdesignicons.css')}}">
		<link rel="stylesheet" href="{{url('assets/plugins/icons/pe7/pe-icon-7.css')}}">
		<link rel="stylesheet" href="{{url('assets/plugins/icons/simpleline/simple-line-icons.css')}}">
		<link rel="stylesheet" href="{{url('assets/plugins/icons/themify/themify.css')}}">
		<link rel="stylesheet" href="{{url('assets/plugins/icons/typicons/typicons.css')}}">
		<link rel="stylesheet" href="{{url('assets/plugins/icons/weather/weathericons.css')}}">
		@if(Route::is(['lightbox']))
		<link rel="stylesheet" href="{{url('assets/plugins/icons/lightbox/glightbox.min.css')}}">
		@endif
		@if(Route::is(['notification']))
		<link rel="stylesheet" href="{{url('assets/plugins/alertify/alertify.min.css')}}">
		@endif
		@if(Route::is(['rangeslider']))
		<link rel="stylesheet" href="{{url('assets/plugins/ion-rangeslider/ion.rangeSlider.min.css')}}">
		@endif
		@if(Route::is(['scrollbar']))
		<link rel="stylesheet" href="{{url('assets/plugins/icons/scrollbar/scroll.min.css')}}">
		@endif
		@if(Route::is(['stickynote']))
		<link rel="stylesheet" href="{{url('assets/plugins/icons/stickynote/sticky.css')}}">
		@endif
		@if(Route::is(['toastr']))
		<link rel="stylesheet" href="{{url('assets/plugins/icons/toastr/toatr.css')}}">
		@endif
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css')}}">
