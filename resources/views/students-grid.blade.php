<?php $page="students-grid";?>
@extends('layout.mainlayout')
@section('content')     
@component('components.breadcrumb')                
    @slot('title') Students @endslot
    @slot('li_1') Student @endslot
    @slot('li_2') All Students @endslot
@endcomponent
<div class="row">
    <div class="col-sm-12">
    
        <div class="card card-table comman-shadow">
            <div class="card-body pb-0">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Students</h3>
                        </div>
                        <div class="col-auto text-end float-end ms-auto download-grp">
                            <a href="{{url('students')}}" class="btn btn-outline-gray me-2"><i class="feather-list"></i></a>
                            <a href="{{url('students-grid')}}" class="btn btn-outline-gray me-2 active"><i class="feather-grid "></i></a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <div class="student-pro-list">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="{{url('student-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('student-details')}}">Malynne</a></h5>
                                            <h6>Student</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="{{url('student-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('student-details')}}">Levell Scott</a></h5>
                                            <h6>Student</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="{{url('student-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('student-details')}}">Minnie</a></h5>
                                            <h6>Student</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="{{url('student-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('student-details')}}">Lois A</a></h5>
                                            <h6>Student</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="{{url('student-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('student-details')}}">Calvin</a></h5>
                                            <h6>Student</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="{{url('student-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('student-details')}}">Charles Dickens</a></h5>
                                            <h6>Student</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="{{url('student-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('student-details')}}">Joe Kelley</a></h5>
                                            <h6>Student</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 d-flex">
                            <div class="card">
                                <div class="card-body">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="{{url('student-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('student-details')}}">Charles Dickens</a></h5>
                                            <h6>Student</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>							
    </div>					
</div>
@endsection