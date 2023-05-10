<?php $page = 'admins'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Admins
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Admins
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-sm-12">

            <div class="card card-table">
                <div class="card-body">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Admins</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                {{-- <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a> --}}
                                <a href="{{ url('add-admin') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    <div class="table-responsive">
                        <table id="admins-datatable"
                            class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#admins-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('admins') }}",
                },
                columns: [{
                        data: 'name',
                        title: 'Name',
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
                        orderable: false
                    }
                ]
            });
        });
    </script>
@endsection
