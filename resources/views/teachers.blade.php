<?php $page = 'teachers'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Teachers
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Teachers
        @endslot
    @endcomponent
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    {{-- @component('components.student-search')   
@endcomponent				 --}}
    <div class="row">
        <div class="col-sm-12">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="card card-table">
                <div class="card-body">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Teachers</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                {{-- <a href="{{url('teachers')}}" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
								<a href="{{url('teachers-grid')}}" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a> --}}
                                <a href="javascript:void(0);" class="btn btn-outline-primary me-2 btn-csv"><i class="fas fa-download"></i>
                                    Download CSV</a>
                                <a href="javascript:void(0);" class="btn btn-outline-primary me-2 btn-excel"><i class="fas fa-download"></i>
                                    Download Excel</a>
                                <a href="{{ url('add-teacher') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    <div class="table-responsive">
                        <table id="teachers-datatable" class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var table;
        $(document).ready(function() {
            table = $('#teachers-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('teachers') }}",
                },
                columns: [
                    // {
                    //     data: 'unique_id',
                    //     title: 'Unique Identity',
                    // },
                    {
                        data: 'name',
                        title: 'Name',
                    },
                    {
                        data: 'last_name',
                        title: 'Last Name',
                    },
                    {
                        data: 'email',
                        title: 'Email',
                    },
                    {
                        data: 'sec_email',
                        title: 'Secondary Email',
                    },{
                        data: 'address',
                        title: 'Address',
                    },{
                        data: 'city',
                        title: 'City',
                    },{
                        data: 'state',
                        title: 'State',
                    },
                    {
                        data: 'zip_code',
                        title: 'Zip Code',
                    },
                    {
                        data: 'country',
                        title: 'Country',
                    },
                    {
                        data: 'action',
                        title: 'Actions',
                        orderable: false
                    }
                ],
                dom: 'Bfrtip',
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
