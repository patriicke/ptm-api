<?php $page="subjects";?>
@extends('layout.mainlayout')
@section('content')     
@component('components.breadcrumb')                
    @slot('title') Schools Data  @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Schools Data @endslot
@endcomponent		
{{-- @component('components.student-search') 	
@endcomponent	 --}}
<div class="row">
	<div class="col-sm-12">
		
		<div class="card card-table">
			<div class="card-body">


				<ul class="nav nav-pills navtab-bg nav-justified col-6">
					<li class="nav-item">
							<a href="#teachers" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
								Teachers
							</a>
					</li>
					<li class="nav-item">
							<a href="#parents" data-bs-toggle="tab" aria-expanded="true" class="nav-link ">
									Parents
							</a>
					</li>
					<li class="nav-item">
							<a href="#students" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
								Students 
							</a>
					</li>
			</ul>
			<div class="tab-content">
				<div  class="tab-pane show active" id="teachers">
			
				<div class="table-responsive">
					<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
						<thead class="student-thread">
							<tr>
							
								<th>ID</th>
								<th>UserName</th>
								<th>Email</th>
								<th>Phone</th>
								<th>About</th>
								<th >Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
							
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
			<div  class="tab-pane" id="parents">
			
				<div class="table-responsive">
					<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
						<thead class="student-thread">
							<tr>
							
								<th>ID</th>
								<th>UserName</th>
								<th>Email</th>
								<th>Phone</th>
								<th>About</th>
								<th >Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
								<td>ABC</td>
								<td>abc@gmail.com</td>
								<td>1234567890</td>
								<td>Something</td>
								<td>
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
				<div  class="tab-pane" id="students">
			
					
					<div class="table-responsive">
						<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
							<thead class="student-thread">
								<tr>
									
									<th>ID</th>
									<th>Name</th>
									<th>Grade</th>
									
									<th >Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Jeffrey Wong</td>							
									<td>10 A</td>							
									
									<td >
										<div >
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
									<td>Jeffrey Wong</td>							
									<td>10 A</td>							
									
									<td >
										<div >
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
									<td>Jeffrey Wong</td>							
									<td>10 A</td>							
									
									<td >
										<div >
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
									<td>Jeffrey Wong</td>							
									<td>10 A</td>							
									
									<td >
										<div >
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
									<td>Jeffrey Wong</td>							
									<td>10 A</td>							
									
									<td >
										<div >
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
									<td>Jeffrey Wong</td>							
									<td>10 A</td>							
									
									<td >
										<div >
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
									<td>Jeffrey Wong</td>							
									<td>10 A</td>							
									
									<td >
										<div >
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
									<td>8</td>
									<td>Jeffrey Wong</td>							
									<td>10 A</td>							
									
									<td >
										<div >
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
									<td>9</td>
									<td>Jeffrey Wong</td>							
									<td>10 A</td>							
									
									<td >
										<div >
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
									<td>10</td>
									<td>Jeffrey Wong</td>							
									<td>10 A</td>							
									
									<td >
										<div >
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
			</div>
			</div>							
		</div>					
	</div>					
@endsection
