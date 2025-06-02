@extends('admin.layouts.app')
{{-- @if(Auth::guard('admin')->check()) --}}
@section('title','Admin Panel')

{{-- @endif --}}

@section('content-page')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">User</h3>
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
                        <a href="{{ route('admin.setting.index')}}">User</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a href="#">Add Faculty</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
{{--                        <div class="card-header">--}}
{{--                            <div class="card-title">Add Faculty</div>--}}
{{--                        </div>--}}

                        <form method="POST" action="{{ route('admin.setting.update' , $data->id) }}" id="facultyForm" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Name<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}" placeholder="Enter  Name"  />
                                            @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Email<span style="color: red">*</span></label>
                                            <input type="email" class="form-control" name="email" id="email" value="{{$data->email}}" placeholder="Enter Email"  />
                                            @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Update password<span style="color: red">*</span></label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Designation"  />
                                            @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <a href="{{ route('admin.setting.edit') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-script')

    <script>
        $(document).ready(function(){
            $('input[name="phone"]').mask('0000000000');
        });
        $('#email').on('keydown', function (e) {
            if (e.which === 32) {
                e.preventDefault();
            }
        });
        $.validator.addMethod("regexEmail", function (value, element) {
            let regex = /^[a-zA-Z][a-zA-Z0-9]*@[a-zA-Z]+\.[a-zA-Z]{2,}$/;
            return this.optional(element) || regex.test(value);

        }, "Email must start with a letter, and contain only letters and digits before @. Domain and TLD must be letters only.");

        $('#contactForm').validate({
            errorClass: 'text-danger',
            rules: {
                name:{
                    required: true,
                },
                email: {
                    required: true,
                    regexEmail: true
                },

            },
            messages: {
                name: {
                    required: "Name is required.",

                },
                email: {
                    required: "Email is required.",
                    regexEmail: "Please enter a valid email address."
                },

            }
        });
    </script>
@endsection
