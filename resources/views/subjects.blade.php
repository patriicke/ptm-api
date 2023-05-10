<?php $page="subjects";?>
@extends('layout.mainlayout')
@section('content')     
@component('components.breadcrumb')                
    @slot('title') Subjects  @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Subjects @endslot
@endcomponent		
@component('components.student-search') 	
@endcomponent	
	<div class="row">
		<div class="col-sm-12">
		
			<div class="card card-table">
				<div class="card-body">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Subjects</h3>
							</div>
							<div class="col-auto text-end float-end ms-auto download-grp">
								<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
								<a href="{{url('add-subject')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="table-responsive">
						<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
							<thead class="student-thread">
								<tr>
									<th>
										<div class="form-check check-tables">
											<input class="form-check-input" type="checkbox"  value="something">
										</div>
									</th>
									<th>ID</th>
									<th>Name</th>
									<th>Class</th>
									<th class="text-end">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="form-check check-tables">
											<input class="form-check-input" type="checkbox"  value="something">
										</div>
									</td>
									<td>PRE2209</td>
									<td>
										<h2>
											<a>Mathematics</a>
										</h2>
									</td>
									<td>5</td>
									<td class="text-end">
										<div class="actions">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-subject')}}" class="btn btn-sm bg-danger-light">
												<i class="feather-edit"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check check-tables">
											<input class="form-check-input" type="checkbox"  value="something">
										</div>
									</td>
									<td>PRE2213</td>
									<td>
										<h2>
											<a>History</a>
										</h2>
									</td>
									<td>6</td>
									<td class="text-end">
										<div class="actions">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-subject')}}" class="btn btn-sm bg-danger-light">
												<i class="feather-edit"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check check-tables">
											<input class="form-check-input" type="checkbox"  value="something">
										</div>
									</td>
									<td>PRE2143</td>
									<td>
										<h2>
											<a>Science</a>
										</h2>
									</td>
									<td>3</td>
									<td class="text-end">
										<div class="actions">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-subject')}}" class="btn btn-sm bg-danger-light">
												<i class="feather-edit"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check check-tables">
											<input class="form-check-input" type="checkbox"  value="something">
										</div>
									</td>
									<td>PRE2431</td>
									<td>
										<h2>
											<a>Geography</a>
										</h2>
									</td>
									<td>8</td>
									<td class="text-end">
										<div class="actions">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-subject')}}" class="btn btn-sm bg-danger-light">
												<i class="feather-edit"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check check-tables">
											<input class="form-check-input" type="checkbox"  value="something">
										</div>
									</td>
									<td>PRE1534</td>
									<td>
										<h2>
											<a>Botony</a>
										</h2>
									</td>
									<td>9</td>
									<td class="text-end">
										<div class="actions">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-subject')}}" class="btn btn-sm bg-danger-light">
												<i class="feather-edit"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check check-tables">
											<input class="form-check-input" type="checkbox"  value="something">
										</div>
									</td>
									<td>PRE2153</td>
									<td>
										<h2>
											<a>English</a>
										</h2>
									</td>
									<td>4</td>
									<td class="text-end">
										<div class="actions">
											<a href="#" class="btn btn-sm bg-success-light me-2">
												<i class="feather-eye"></i>
											</a>
											<a href="{{url('edit-subject')}}" class="btn btn-sm bg-danger-light">
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
		</div>					
	</div>					
@endsection
