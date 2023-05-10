<?php $page = 'subjects'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Schools
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Schools
        @endslot
    @endcomponent
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>

    {{-- @component('components.student-search')
    @endcomponent --}}
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
                                {{-- <h3 class="page-title">Schools</h3> --}}
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                <a href="javascript:void(0);" class="btn btn-outline-primary me-2 btn-download"><i class="fas fa-download"></i>
                                    Download</a>
                                <a href="{{ url('add-school') }}" class="btn btn-primary"><i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    <div class="table-responsive">
                        <table id="schools-datatable"
                            class=" table border-0 star-student table-hover table-center mb-0 datatable table-striped">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var table;
        $(document).ready(function() {
            table = $('#schools-datatable').DataTable({
                processing: true,
                serverSide: true,
                
                ajax: {
                    url: "{{ url('schools') }}",
                },
                columns: [{
                        data: 'name',
                        title: 'Name',

                    },
                    {
                        data: 'address',
                        title: 'Address',
                    },
                    {
                        data: 'city',
                        title: 'City',
                    },
                    {
                        data: 'state',
                        title: 'State',
                    },{
                        data: 'country',
                        title: 'Country',
                    },
                    {
                        data: 'zip_code',
                        title: 'Zip Code',
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
                        }
                    
                ]

            });

            if ({{ (Auth::user()->type == 'superadmin') ? 'true' : 'false' }}) {
                
                $(".btn-download").on("click", function() {
                table.button( '.buttons-csv' ).trigger();
            });
            }else{
                
            $(".btn-download").addClass('d-none');

            }
            
        });
    </script>
@endsection
