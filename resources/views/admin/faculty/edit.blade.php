@extends('admin.layouts.app')
{{-- @if(Auth::guard('admin')->check()) --}}
@section('title','Admin Panel')

{{-- @endif --}}

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
                        <a href="#">Edit Faculty</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Faculty</div>
                        </div>
                        <form method="POST" action="{{ route('admin.faculty.update', $data->id ) }}" id="facultyForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                           <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Department<span style="color: red">*</span></label>
                                            <select class="form-control" name="department_id" id="department_id" required>
                                                <option value="">Select Department</option>
                                                @foreach ($departments as $department)
                                                    <option {{ $department->id == $data->department_id ? 'selected' : '' }} value="{{ $department->id }}">{{ $department->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('department_id')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Faculty Name<span style="color: red">*</span></label>
                                           <input type="text" class="form-control" value="{{ $data->name }}" name="name" id="name" placeholder="Enter Faculty Name" required />
                                            @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Profile<span style="color: red">*</span></label>
                                           <input type="file" class="form-control" name="profile" id="profile" placeholder="Upload Profile" />
                                            @error('profile')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <img src="{{ asset($data->profile) }}" alt="Profile Image" class="img-thumbnail mt-2" style="max-width: 150px;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Designation<span style="color: red">*</span></label>
                                           <input type="text" class="form-control" value="{{ $data->designation }}" name="designation" id="designation" placeholder="Enter Designation" required />
                                            @error('designation')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Description<span style="color: red">*</span></label>
                                           <textarea class="form-control" name="description" id="description" placeholder="Enter Description" required >{{ $data->description }}</textarea>
                                            @error('description')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <a href="{{ route('admin.faculty.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-script')
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

<script>
    $(document).ready(function () {
        $.validator.addMethod("extension", function(value, element, param) {
            if (this.optional(element)) {
                return true;
            }
            var fileName = element.value;
            var extension = fileName.split('.').pop().toLowerCase();
            return param.split('|').indexOf(extension) > -1;
        });
        $("#facultyForm").validate({
            onfocusout: function (element) {
                this.element(element); // Validate the field on blur
            },
            onkeyup: false, // Optional: Disable validation on keyup for performance
            rules: {
                department_id: {
                    required: true
                },
                name: {
                    required: true,
                    minlength: 2,
                    unique:true
                },
                profile: {
                    extension: "jpg,jpeg,png,gif"
                },
                designation: {
                    required: true,
                    minlength: 2
                },
                description: {
                    required: true,
                    minlength: 10
                },
            },
            messages: {
                department_id: {
                    required: "Please select a department"
                },
                name: {
                    required: "Please enter a name",
                    minlength: "Name must be at least 2 characters long",
                    unique: "<span class='text-danger'>The faculty name has already been taken</span>"
                },
                profile: {
                    extension: "Only jpg, jpeg, png, and gif files are allowed"
                },
                designation: {
                    required: "Please enter a designation",
                    minlength: "Designation must be at least 2 characters long"
                },
                description: {
                    required: "Please enter a description",
                    minlength: "Description must be at least 10 characters long"
                }
            },
            errorClass: "text-danger",
            errorElement: "span",
            highlight: function (element) {
                $(element).addClass("is-invalid");
            },
            unhighlight: function (element) {
                $(element).removeClass("is-invalid");
            },
            submitHandler: function (form) {
                // Handle successful validation here
                form.submit();
            }
        });
    });
</script>
@endsection
