@extends('admin.layouts.app')
@section('title', 'Admin Panel')
@section('content-page')
    <div class="container">
        <div class="page-inner">
           <div class="page-header">
                <h3 class="fw-bold mb-3">Faculty</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.faculty.index')}}">Faculty</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Add Faculty</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.faculty.index') }}" class="btn btn-rounded btn-primary float-end"> <i
                                    class="fas fa-angle-left"></i> Back</a>
                            <h4 class="card-title">Faculty Detailed</h4>
                        </div>
                        <div class="card-body">

                                <div class="d-flex row">
                                    <div class="col-md-4">
                                        <span class="fw-bold" style="font-size: 15px">Name: </span>
                                        <span style="font-size: 15px">{{ $faculty->name }}</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="fw-bold" style="font-size: 15px">Department:</span>
                                        <span style="font-size: 15px">{{ $faculty->department }}</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="fw-bold" style="font-size: 15px">Designation:</span>
                                        <span style="font-size: 15px">{{ $faculty->designation }}</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="fw-bold" style="font-size: 15px">Description:</span>
                                        <span style="font-size: 15px">{{ $faculty->description }}</span>
                                    </div>



                                    <div class="col-md-4">
                                        <span class="fw-bold" style="font-size: 15px">Image:</span><br>
                                        <img src="{{ asset($faculty->profile) }}" alt="" style="width: 100px; height: 100px;">
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 @endsection
