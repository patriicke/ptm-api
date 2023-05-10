<?php $page="students";?>
@extends('layout.mainlayout')
@section('content')     
@component('components.breadcrumb')                
    @slot('title') Students @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') All Students @endslot
@endcomponent
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

	<div class="row">
		<div class="col-sm-12">
			<div class="card card-table">
				<div class="card-body">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Students</h3>
							</div>
							<div class="col-auto text-end float-end ms-auto download-grp">
								{{-- <a href="{{url('students')}}" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
								<a href="{{url('students-grid')}}" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a> --}}
								{{-- <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a> --}}
                                <a href="javascript:void(0);" class="btn btn-outline-primary me-2 btn-csv"><i class="fas fa-download"></i>
                                    Download CSV</a>
                                <a href="javascript:void(0);" class="btn btn-outline-primary me-2 btn-excel"><i class="fas fa-download"></i>
                                    Download Excel</a>
								<a href="{{url('add-student')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
							</div>
                            
						</div>
					</div>
					<!-- /Page Header -->
					<div class="table-responsive">
						<table id="students-datatable" class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
						</table>
					</div>
				</div>
			</div>							
		</div>					
	</div>	
	<script>
        var table;
        $(document).ready(function() {
            table = $('#students-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('students') }}",
                },
                columns: [
                    {
                        data: 'name',
                        title: 'Name',
                    },
                    {
                        data: 'gender',
                        title: 'Gender',
                    },
                    {
                        data: 'dob',
                        title: 'Date of Birth',
                    },
                    {
                        data: 'schools',
                        title: 'School',
                        render:function(data,row,type){
                            return data.name;
                        }                    
                    },{
                        data: 'parents',
                        title: 'Parent',
                        render:function(data,row,type){
                            return data.name;
                        }                    
                    },{
                        data: 'teachers',
                        title: 'Teacher',
                        render:function(data,row,type){
                            return data.name;
                        }                    
                    },
                    
                    {
                        data: 'email',
                        title: 'Email',
                    },
                    {
                        data: 'phone',
                        title: 'Phone',
                    },
                    {
                        data: 'action',
                        title: 'Actions',
                        orderable: false,
                        // render:function(data,row,type){
                        //     var btn = ' <a href="' . url("edit-student") + '/' + data+id + '" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a></div>'
                        //     btn += ' <a href="' + url("edit-student") + '/' + data+id + '" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a></div>';
                        //     return btn;

                        // }
                    }
                ],dom: 'Bfrtip',
                buttons: [
                        { 
                extend: 'csv',
                className: 'd-none',
                title:$('h3').text(),
                exportOptions: {
                    columns: ':visible:not(:last-child)' 
                    }
                        } ,{ 
                    extend: 'excel',
                    text: window.csvButtonTrans,
                    title:$('h3').text(),
                title:'excel',

                className: 'd-none',
                    exportOptions: {
                    columns: ':visible:not(:last-child)' 
                    }
                        }
                    
                ]
            });
            $(".btn-csv").on("click", function() {
                table.button( '.buttons-csv' ).trigger();
            });
            $(".btn-excel").on("click", function() {
                table.button( '.buttons-excel' ).trigger();
            });
        });
    </script>			
@endsection
