<?php $page="news";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')
    @slot('title') News  @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') News @endslot
@endcomponent
{{-- @component('components.news-search')
@endcomponent	 --}}
	<div class="row">
		<div class="col-sm-12">

			<div class="card card-table">
				<div class="card-body">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								{{-- <h3 class="page-title">News</h3> --}}
							</div>
							<div class="col-auto text-end float-end ms-auto download-grp">
{{--								<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>--}}
								<a href="{{url('/add-news')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="table-responsive">
						<table class="table border-0 star-news table-hover table-center mb-0 table-striped" id="news_table">
							<thead class="news-thread">
								<tr>

									<th>#</th>
									<th>Image</th>
									<th>Title</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
					   $('#news_table').DataTable({

								   processing: true,
								   serverSide: true,
									ajax: "{{url('/news')}}",
								   // language: {
								   // 		paginate: {
								   // 				// remove previous & next text from pagination
								   // 				previous: 'Previous',
								   // 				next: 'Next'
								   // 		}
								   // },
								   columns: [
										   {
												   data: 'id',
												   render: function(data, type, row, meta) {
														   return meta.row + meta.settings._iDisplayStart + 1;
												   }
										   },
										   {
												   data: 'image',
												   name: 'image'
										   },
										   {
												   data: 'msg',
												   name: 'msg',

										   },


										   {
												   data: 'actions'
										   }
								   ],
								//    columnDefs: [{
								//    				// For Responsive

								//    				className: 'control',
								//    				orderable: false,
								//    				responsivePriority: 2,
								//    				targets: 0,
								//    				render: function(data, type, full, meta) {
								//    						return ''
								//    				}
								//    		},

								//    ],
								//    drawCallback: function(settings) {
								// 		   feather.replace();
								//    },
						   })
				   });
				   function on_delete(id) {
            if (confirm("Delete record?") == true) {
                var id = id;
                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('/destroy-news') }}",
                    data: {
						"_token": "{{ csrf_token() }}",
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {
                        var oTable = $('#news_table').dataTable();
                        oTable.fnDraw(false);
                    }
                });
            }
        }

		// function on_delete(id) {

		// 	Swal.fire({
		// 		title: 'Are you sure?',
		// 		icon: 'warning',
		// 		showCancelButton: true,
		// 		confirmButtonText: 'Yes, delete it!',
		// 		customClass: {
		// 			confirmButton: 'btn btn-primary',
		// 			cancelButton: 'btn btn-outline-danger ms-1'
		// 		},
		// 		buttonsStyling: false
		// 	}).then(function (result) {
		// 		if (result.value) {
		// 			$.ajax({
		// 				type: "DELETE",
		// 				url:"{{ url('add-news') }}"+"/"+id,
		// 				data: {
		// 					"_token": "{{ csrf_token() }}"
		// 				},
		// 				success: function (data) {

		// 					toastr.success("News deleted successfully.","Success",{closeButton:!0,tapToDismiss:!1,ltr:'ltr'})
		// 					// window.location.reload();
		// 					$('#news_table').DataTable().ajax.reload();
		// 				},
		// 				error:function(data){
		// 					toastr.error("Something went wrong.","Error",{closeButton:!0,tapToDismiss:!1,ltr:'ltr'})
		// 				}
		// 			});

		// 		} else if (result.dismiss === Swal.DismissReason.cancel) {
		// 			Swal.fire({
		// 				title: 'Cancelled',
		// 				icon: 'error',
		// 				timer: 2000,
		// 				showConfirmButton: false,

		// 			})
		// 		}
		// 	})

		// }
   </script>
@endsection

@section('script')

	{{-- <script>
		 $(document).ready(function() {
						$('#news_table').DataTable({

									processing: true,
									serverSide: true,
									 ajax: "{{url('/news')}}",
									// language: {
									// 		paginate: {
									// 				// remove previous & next text from pagination
									// 				previous: 'Previous',
									// 				next: 'Next'
									// 		}
									// },
									columns: [
											{
													data: 'id',
													render: function(data, type, row, meta) {
															return meta.row + meta.settings._iDisplayStart + 1;
													}
											},
											{
													data: 'image',
													name: 'image'
											},
											{
													data: 'msg',
													name: 'msg',

											},


											{
													data: 'actions'
											}
									],
									// columnDefs: [{
									// 				// For Responsive

									// 				className: 'control',
									// 				orderable: false,
									// 				responsivePriority: 2,
									// 				targets: 0,
									// 				render: function(data, type, full, meta) {
									// 						return ''
									// 				}
									// 		},

									// ],
									drawCallback: function(settings) {
											feather.replace();
									},
							})
					});
         function on_delete(id) {

             Swal.fire({
                 title: 'Are you sure?',
                 icon: 'warning',
                 showCancelButton: true,
                 confirmButtonText: 'Yes, delete it!',
                 customClass: {
                     confirmButton: 'btn btn-primary',
                     cancelButton: 'btn btn-outline-danger ms-1'
                 },
                 buttonsStyling: false
             }).then(function (result) {
                 if (result.value) {
                     $.ajax({
                         type: "DELETE",
                         url:"{{ url('add-news') }}"+"/"+id,
                         data: {
                             "_token": "{{ csrf_token() }}"
                         },
                         success: function (data) {

                             toastr.success("News deleted successfully.","Success",{closeButton:!0,tapToDismiss:!1,ltr:'ltr'})
                             // window.location.reload();
                             $('#news_table').DataTable().ajax.reload();
                         },
                         error:function(data){
                             toastr.error("Something went wrong.","Error",{closeButton:!0,tapToDismiss:!1,ltr:'ltr'})
                         }
                     });

                 } else if (result.dismiss === Swal.DismissReason.cancel) {
                     Swal.fire({
                         title: 'Cancelled',
                         icon: 'error',
                         timer: 2000,
                         showConfirmButton: false,

                     })
                 }
             })

         }
	</script> --}}
@endsection
