<?php $page="teachers-grid";?>
@extends('layout.mainlayout')
@section('content')     
@component('components.breadcrumb')                
    @slot('title') Teachers @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Teachers @endslot
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
                            <h3 class="page-title">Teachers</h3>
                        </div>
                        <div class="col-auto text-end float-end ms-auto download-grp">
                            <a href="{{url('teachers')}}" class="btn btn-outline-gray me-2"><i class="feather-list"></i></a>
                            <a href="{{url('teachers-grid')}}" class="btn btn-outline-gray me-2 active"><i class="feather-grid "></i></a>
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
                                            <a href="{{url('teacher-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{URL::asset('/assets/img/profiles/avatar-06.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('teacher-details')}}">Malynne</a></h5>
                                            <h6>Teacher</h6>
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
                                            <a href="{{url('teacher-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{URL::asset('/assets/img/profiles/avatar-04.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('teacher-details')}}">Levell Scott</a></h5>
                                            <h6>Teacher</h6>
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
                                            <a href="{{url('teacher-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{URL::asset('/assets/img/profiles/avatar-03.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('teacher-details')}}">Minnie</a></h5>
                                            <h6>Teacher</h6>
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
                                            <a href="{{url('teacher-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('teacher-details')}}">Lois A</a></h5>
                                            <h6>Teacher</h6>
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
                                            <a href="{{url('teacher-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{URL::asset('/assets/img/profiles/avatar-08.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('teacher-details')}}">Calvin</a></h5>
                                            <h6>Teacher</h6>
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
                                            <a href="{{url('teacher-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{URL::asset('/assets/img/profiles/avatar-09.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('teacher-details')}}">Charles Dickens</a></h5>
                                            <h6>Teacher</h6>
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
                                            <a href="{{url('teacher-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{URL::asset('/assets/img/profiles/avatar-10.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('teacher-details')}}">Joe Kelley</a></h5>
                                            <h6>Teacher</h6>
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
                                            <a href="{{url('teacher-details')}}">
                                                <img class="img-fluid" alt="Students Info" src="{{URL::asset('/assets/img/profiles/avatar-08.jpg')}}">
                                            </a>
                                        </div>
                                        <div class="student-content pb-0">												
                                            <h5><a href="{{url('teacher-details')}}">Charles Dickens</a></h5>
                                            <h6>Teacher</h6>
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