
		<!-- jQuery -->
        <script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
		
		<!-- Bootstrap JS -->
        <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		
		<!-- Feather Icon JS -->
        <script src="{{ URL::asset('assets/plugins/feather/feather.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{ URL::asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
        
        <script src="{{ URL::asset('/assets/plugins/moment/moment.min.js')}}"></script>
        <script src="{{ URL::asset('/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Select JS -->
		<script src="{{ URL::asset('assets/plugins/select2/select2.min.js')}}"></script>
		
		<!-- Datepicker Core JS -->
		<script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
	
		<!-- Summernote JS -->
		<script src="{{ URL::asset('assets/plugins/summernote/summernote-lite.min.js')}}"></script>
	
		<!-- DataTables JS -->
		
        <script src="{{ URL::asset('/assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script> 
		<script src="{{ URL::asset('/assets/plugins/datatables/js/datatables.min.js')}}"></script>    
     
		@if(Route::is(['form-validation']))
		<!-- Form Validation JS -->
		<script src="{{ URL::asset('/assets/js/pages/form-validation.js')}}"></script>
		@endif
		@if(Route::is(['seo-settings']))
		<script src="{{ URL::asset('assets/js/bootstrap-tagsinput.js')}}"></script>
		@endif
		@if(Route::is(['form-mask']))
		<!-- Masked  JS -->
		<script src="{{ URL::asset('assets/js/jquery.maskedinput.js')}}"></script>
		<script src="{{ URL::asset('assets/js/mask.js')}}"></script>
		@endif
		@if(Route::is(['student-dashboard','teacher-dashboard']))
		<!-- Simple calendar css -->
		<script src="{{ URL::asset('/assets/plugins/simple-calendar/jquery.simple-calendar.js')}}"></script>
		<script src="{{ URL::asset('/assets/js/calander.js')}}"></script>
		<script src="{{ URL::asset('/assets/js/circle-progress.min.js')}}"></script>
		@endif
		@if(Route::is(['event']))
		<!-- Full canlendar css -->
		<script src="{{ URL::asset('/assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/fullcalendar/jquery.fullcalendar.js')}}"></script>
		@endif
		@if(Route::is(['others-settings','add-blog','edit-blog']))
		<!-- ckeditor JS -->
		<script src="{{ URL::asset('/assets/js/ckeditor.js')}}"></script>
		@endif
		@if(Route::is(['index','student-dashboard','teacher-dashboard','principle-dashboard','chart-apex']))
		 <!-- Chart JS -->
		<script src="{{ URL::asset('/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/js/pages/chart-data.js')}}"></script>
		@endif
		@if(Route::is(['chart-c3']))
		<script src="{{ URL::asset('/assets/plugins/c3/d3.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/c3/c3.min.js')}}"></script>
    	<script src="{{ URL::asset('/assets/plugins/c3/chart-datac3.js')}}"></script>
		@endif
		@if(Route::is(['chart-flot']))
		<script src="{{ URL::asset('/assets/plugins/flot/jquery.flot.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/flot/jquery.flot.pie.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/flot/chart-dataflot.js')}}"></script>
		@endif
		@if(Route::is(['chart-js']))
		<script src="{{ URL::asset('/assets/plugins/chartjs/chart.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/chartjs/chart-datachart.js')}}"></script>
		@endif
		@if(Route::is(['chart-morris']))
		<script src="{{ URL::asset('/assets/plugins/morris/raphael.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/morris/morris.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/morris/chart-datamorris.js')}}"></script>
		@endif
		@if(Route::is(['chart-peity']))
		<script src="{{ URL::asset('/assets/plugins/peity/jquery.peity.min.js')}}"></script>
    	<script src="{{ URL::asset('/assets/plugins/peity/chart-datapeity.js')}}"></script>
		@endif
		@if(Route::is(['clipboard']))
		<script src="{{ URL::asset('/assets/plugins/dragula/dragula.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/clipboard/clipboard.js')}}"></script>
		@endif
		@if(Route::is(['drag-drop']))
		<script src="{{ URL::asset('/assets/plugins/dragula/dragula.min.js')}}"></script>
    	<script src="{{ URL::asset('/assets/plugins/dragula/drag-drop.min.js')}}"></script>
		@endif
		@if(Route::is(['counter']))
		 <!-- Clipboard JS -->
		<script src="{{ URL::asset('/assets/plugins/counterup/jquery.counterup.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/counterup/jquery.waypoints.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/counterup/jquery.missofis-countdown.js')}}"></script>
		@endif
		@if(Route::is(['form-wizard']))
		<script src="{{ URL::asset('/assets/plugins/icons/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>  
        <script src="{{ URL::asset('/assets/plugins/icons/twitter-bootstrap-wizard/prettify.js')}}"></script> 
        <script src="{{ URL::asset('/assets/plugins/icons/twitter-bootstrap-wizard/form-wizard.js')}}"></script>
		@endif
		@if(Route::is(['horizontal-timeline']))       
		<!-- Timeline JS -->
		<script src="{{ URL::asset('/assets/js/horizontal-timeline.js')}}"></script>   
		@endif
		@if(Route::is(['lightbox']))
		<script src="{{ URL::asset('/assets/plugins/icons/lightbox/glightbox.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/icons/lightbox/lightbox.js')}}"></script>
		@endif
		@if(Route::is(['notification']))
		<script src="{{ URL::asset('/assets/plugins/alertify/alertify.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/alertify/custom-alertify.min.js')}}"></script>
		@endif
		@if(Route::is(['rangeslider']))
		<script src="{{ URL::asset('/assets/plugins/ion-rangeslider/ion.rangeSlider.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/ion-rangeslider/custom-rangeslider.js')}}"></script>
		@endif
		@if(Route::is(['rating']))
		<script src="{{ URL::asset('/assets/plugins/raty/jquery.raty.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/raty/custom.raty.js')}}"></script>
		@endif
		@if(Route::is(['scrollbar']))
		<script src="{{ URL::asset('/assets/plugins/icons/scrollbar/scrollbar.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/icons/scrollbar/custom-scroll.js')}}"></script>
		@endif
		@if(Route::is(['stickynote']))
		<script src="{{ URL::asset('/assets/plugins/icons/stickynote/jquery-ui.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/icons/stickynote/sticky.js')}}"></script>
		@endif
		@if(Route::is(['sweetalerts']))
		<script src="{{ URL::asset('/assets/plugins/icons/sweetalert/sweetalert2.all.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/icons/sweetalert/sweetalerts.min.js')}}"></script>
		@endif
		@if(Route::is(['toastr']))
		<script src="{{ URL::asset('/assets/plugins/icons/toastr/toastr.min.js')}}"></script>
		<script src="{{ URL::asset('/assets/plugins/icons/toastr/toastr.js')}}"></script>
		@endif
		<!-- Custom JS -->
		<script  src="{{ URL::asset('assets/js/app.min.js')}}"></script>
		
			
		
		 
