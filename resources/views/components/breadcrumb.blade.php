					 
	<!-- Page Header -->
	@if(!Route::is(['index','add-invoice','edit-invoice','bank-settings','invoices-settings','invoice-grid','invoices','invoices-paid','invoices-overdue','invoices-cancelled','invoices-draft','invoices-recurring']))
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h3 class="page-title">{{ $title }}</h3>
				<ul class="breadcrumb">
				@if(Route::is(['add-department']))	
					<li class="breadcrumb-item"><a href="{{url('departments')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['add-department']))	
					<li class="breadcrumb-item"><a href="{{url('departments')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				
				@if(Route::is(['add-events']))	
					<li class="breadcrumb-item"><a href="{{url('event')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				
				@if(Route::is(['add-exam']))	
					<li class="breadcrumb-item"><a href="{{url('exam')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				
				@if(Route::is(['add-expenses']))	
					<li class="breadcrumb-item"><a href="{{url('expenses')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				
				@if(Route::is(['add-fees']))	
					<li class="breadcrumb-item"><a href="{{url('fees')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				
				@if(Route::is(['add-fees-collection']))	
					<li class="breadcrumb-item"><a href="{{url('fees-collections')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				
				@if(Route::is(['add-holiday']))	
					<li class="breadcrumb-item"><a href="{{url('holiday')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['add-room']))	
					<li class="breadcrumb-item"><a href="{{url('hostel')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['add-salary']))	
					<li class="breadcrumb-item"><a href="{{url('salary')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['add-sports']))	
					<li class="breadcrumb-item"><a href="{{url('sports')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is('add-student'))	
					<li class="breadcrumb-item"><a href="{{url('students')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is('student-details'))	
					<li class="breadcrumb-item"><a href="{{url('students')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is('add-parent'))	
					<li class="breadcrumb-item"><a href="{{url('parents')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is('edit-parent'))	
					<li class="breadcrumb-item"><a href="{{url('parents')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is('add-school'))	
					<li class="breadcrumb-item"><a href="{{url('schools')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is('add-principle'))	
					<li class="breadcrumb-item"><a href="{{url('principles')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				{{-- @if(Route::is('add-school'))	
					<li class="breadcrumb-item"><a href="{{url('schools')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif --}}
				@if(Route::is(['add-subject']))	
					<li class="breadcrumb-item"><a href="{{url('subjects')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['add-teacher']))	
					<li class="breadcrumb-item"><a href="{{url('teachers')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['add-time-table']))	
					<li class="breadcrumb-item"><a href="{{url('time-table')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['add-transport']))	
					<li class="breadcrumb-item"><a href="{{url('transport')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['blank-page','components','compose','data-tables','form-basic-inputs','form-horizontal','form-input-groups',
				'form-mask','form-validation','form-vertical','inbox','profile','student-dashboard','tables-basic','teacher-dashboard']))	
					<li class="breadcrumb-item"><a href="{{url('dashboard')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['edit-department']))	
					<li class="breadcrumb-item"><a href="{{url('departments')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['edit-events']))	
					<li class="breadcrumb-item"><a href="{{url('event')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['edit-exam']))	
					<li class="breadcrumb-item"><a href="{{url('exam')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['edit-fees']))	
					<li class="breadcrumb-item"><a href="{{url('fees')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['edit-room']))	
					<li class="breadcrumb-item"><a href="{{url('hostel')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['edit-sports']))	
					<li class="breadcrumb-item"><a href="{{url('sports')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['edit-student']))	
					<li class="breadcrumb-item"><a href="{{url('students')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['edit-subject']))	
					<li class="breadcrumb-item"><a href="{{url('subjects')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['edit-teacher']))	
					<li class="breadcrumb-item"><a href="{{url('teachers')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['edit-time-table']))	
					<li class="breadcrumb-item"><a href="{{url('time-table')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['edit-transport']))	
					<li class="breadcrumb-item"><a href="{{url('transport')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(Route::is(['teacher-details']))	
					<li class="breadcrumb-item"><a href="{{url('teachers')}}" >{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				@if(!Route::is('add-department','add-events','add-exam','add-expenses','add-fees','add-fees-collection','add-holiday',
				'add-room','add-salary','add-sports','add-student','add-subject','add-teacher','add-time-table','add-transport',
				'blank-page','components','compose','data-tables','edit-department','edit-events','edit-exam','edit-fees','edit-room',
				'edit-sports','edit-student','edit-subject','edit-teacher','edit-time-table','edit-transport','form-basic-inputs',
				'form-horizontal','form-input-groups','form-mask','form-validation','form-vertical','inbox','profile','student-dashboard','student-details',
				'tables-basic','teacher-dashboard','teacher-details','add-parent','edit-parent','add-principle','edit-principle','add-school','edit-school'))	
				@if (Auth::user()->type == 'principle')
				<li class="breadcrumb-item"><a href="{{url('principle-dashboard')}}" >{{ $li_1 }}</a></li>					
				@else
				<li class="breadcrumb-item"><a href="{{url('dashboard')}}" >{{ $li_1 }}</a></li>					
				@endif
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				@endif
				</ul>
			</div>
		</div>
	</div>
	@endif

	
	@if(Route::is(['index'])) 
	<!-- Page Header -->
	<div class="page-header">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-sub-header">
					<h3 class="page-title">{{ $title }}</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('dashboard')}}">{{ $li_1 }}</a></li>
						<li class="breadcrumb-item active">{{ $li_2 }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	@endif

	@if(Route::is(['add-invoice','edit-invoice']))
	
	<div class="page-header invoices-page-header">
		<div class="row align-items-center">
			<div class="col">
				<ul class="breadcrumb invoices-breadcrumb">
					<li class="breadcrumb-item invoices-breadcrumb-item">
						<a href="{{url('invoices')}}">
							<i class="fas fa-chevron-left"></i> Back to Invoice List
						</a>
					</li>
				</ul>
			</div>
			<div class="col-auto">
				<div class="invoices-create-btn">
					<a class="invoices-preview-link" href="#" data-bs-toggle="modal" data-bs-target="#invoices_preview"><i class="fas fa-eye"></i> Preview</a>
					<a  href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices_details" class="btn delete-invoice-btn">
						Delete Invoice
					</a>
					<a href="#" data-bs-toggle="modal" data-bs-target="#save_invocies_details" class="btn save-invoice-btn">
						Save Draft
					</a>
				</div>
			</div>
		</div>
	</div>
	
	@endif
	@if(Route::is(['bank-settings','invoices-settings']))
	
	<div class="page-header">
		<div class="row">
			<div class="col">
				<h3 class="page-title">{{ $title }}</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('dashboard')}}">{{ $li_1 }}</a>
					</li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				</ul>
			</div>
		</div>
	</div>
	
	@endif
	@if(Route::is(['invoice-grid','invoices']))
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h3 class="page-title">{{ $title }}</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('dashboard')}}">{{ $li_1 }}</a></li>
					<li class="breadcrumb-item active">{{ $li_2 }}</li>
				</ul>
			</div>
		</div>
	</div>
	@endif
	@if(Route::is(['invoices-paid','invoices-overdue','invoices-cancelled','invoices-draft','invoices-recurring']))
	<div class="page-header">
	<div class="row align-items-center">
		<div class="col">
			<h3 class="page-title">{{ $title }}</h3>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{url('dashboard')}}">{{ $li_1 }}</a></li>
				<li class="breadcrumb-item"><a href="{{url('invoices')}}">{{ $li_2 }}</a></li>
				<li class="breadcrumb-item active">{{ $li_3 }}</li>
			</ul>
		</div>
		<div class="col-auto">
			<a href="{{url('invoices')}}" class="invoices-links active">
				<i class="feather feather-list"></i>
			</a>
			<a href="{{url('invoice-grid')}}" class="invoices-links">
				<i class="feather feather-grid"></i>
			</a>
		</div>
	</div>
	</div>
	@endif
	<!-- /Page Header -->

				