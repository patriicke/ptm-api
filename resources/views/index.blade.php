<?php $page="index";?>
@extends('layout.mainlayout')
@section('content')     
@component('components.breadcrumb')                
    @slot('title') Welcome {{Auth::user()->name}}! @endslot
    @slot('li_1') Home @endslot
	@slot('li_2') {{Auth::user()->type}} @endslot
@endcomponent 	
		

	<div class="row">
		<div class="col-md-12 col-lg-6">

			<!-- Revenue Chart -->
			<div class="card card-chart">
				<div class="card-header">
					<div class="row align-items-center">
						<div class="col-6">
							<h5 class="card-title">Overview</h5>
						</div>
						<div class="col-6">
							<ul class="chart-list-out">
								
								<li><span class="circle-red"></span>Revenue</li>
								<li><span class="circle-blue"></span>Teacher</li>
								<li><span class="circle-green"></span>Parents</li>								
								<li><span class="circle-orange"></span>Principle </li>
								<li><span class="circle-pink"></span>Student</li>
								{{-- <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li> --}}
							</ul>                                       
						</div>
					</div>						
				</div>
				<div class="card-body">
					<div id="apexcharts-area"></div>
				</div>
			</div>
			<!-- /Revenue Chart -->
			
		</div>
		
		<div class="col-md-12 col-lg-6">
		
			<!-- Student Chart -->
			<div class="card card-chart">
				<div class="card-header">
					<div class="row align-items-center">
						<div class="col-6">
							<h5 class="card-title">Number of Students</h5>
						</div>
						<div class="col-6">
							<ul class="chart-list-out">
								<li><span class="circle-blue"></span>Girls</li>
								<li><span class="circle-green"></span>Boys</li>
								<li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
							</ul>                                       
						</div>
					</div>									
				</div>
				<div class="card-body">
					<div id="bar"></div>
				</div>
			</div>
			<!-- /Student Chart -->							
		</div>	
	</div>

	<div class="row">
		<div class="col-xl-12 d-flex">						
			<!-- Star Students -->
			<div class="card flex-fill student-space comman-shadow">
				<div class="card-header d-flex align-items-center">
					<h5 class="card-title">Schools</h5>

				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="datatable table table-stripped">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Address </th>
									<th>City</th>
									<th>State </th>
									<th>Zip code </th>
									<th>Country</th>
									<th> Action</th>
								</tr>
							</thead>
							<tbody>
							
								<tr>
									<td>1</td>
									<td><a href="{{url('school-data')}}"> Malynne </a></td>
									<td>P.O. Box: 41, Gaborone</td>
									<td>ABC</td>
									<td>CA</td>
									<td>91</td>
									<td>USA</td>
									<td >
										<div class="">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-student')}}" class="btn btn-sm bg-danger-light">
												<i class="feather-edit"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td><a href="{{url('school-data')}}">Tiger Nixon</a></td>
									<td>911 Deer Ridge Drive</td>
									<td>ABC</td>
									<td>CA</td>
									<td>91</td>
									<td>USA</td>
									<td >
										<div class="">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-student')}}" class="btn btn-sm bg-danger-light">
												<i class="feather-edit"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td><a href="{{url('school-data')}}">Minnie</a></td>
									<td>Rruga E Kavajes, Condor Center</td>
									<td>ABC</td>
									<td>CA</td>
									<td>91</td>
									<td>USA</td>
									<td >
										<div class="">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-student')}}" class="btn btn-sm bg-danger-light">
												<i class="feather-edit"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td><a href="{{url('school-data')}}">Tiger Nixon</a></td>
									<td>3979 Ashwood Drive, Omaha</td>
									<td>ABC</td>
									<td>CA</td>
									<td>91</td>
									<td>USA</td>
									<td >
										<div class="">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-student')}}" class="btn btn-sm bg-danger-light">
												<i class="feather-edit"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>5</td>
									<td><a href="{{url('school-data')}}">Kozma  Tatari</a></td>
									<td>911 Deer Ridge Drive</td>
									<td>ABC</td>
									<td>CA</td>
									<td>91</td>
									<td>USA</td>
									<td >
										<div class="">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-student')}}" class="btn btn-sm bg-danger-light">
												<i class="feather-edit"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>6</td>
									<td><a href="{{url('school-data')}}">Tiger Nixon</a></td>
									<td>4771 Oral Lake Road, Golden Valley</td>
									<td>ABC</td>
									<td>CA</td>
									<td>91</td>
									<td>USA</td>
									<td >
										<div class="">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-student')}}" class="btn btn-sm bg-danger-light">
												<i class="feather-edit"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>7</td>
									<td><a href="{{url('school-data')}}">Tiger Nixon</a></td>
									<td>911 Deer Ridge Drive</td>
									<td>ABC</td>
									<td>CA</td>
									<td>91</td>
									<td>USA</td>
									<td >
										<div class="">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-student')}}" class="btn btn-sm bg-danger-light">
												<i class="feather-edit"></i>
											</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- /Star Students -->							
		</div>

	
	</div>

	

@endsection