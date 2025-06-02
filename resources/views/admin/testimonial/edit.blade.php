@extends('admin.layouts.app')
{{-- @if(Auth::guard('admin')->check()) --}}
@section('title','Admin Panel')

{{-- @endif --}}

@section('content-page')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Testimonial</h3>
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
                        <a href="{{ route('admin.testimonial.index')}}">Testimonial</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit Testimonial</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Testimonial</div>
                        </div>
                        <form method="POST" action="{{ route('admin.testimonial.update', $data->id ) }}" id="testimonialForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                           <div class="card-body">
                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Name<span style="color: red">*</span></label>
                                           <input type="text" class="form-control" value="{{ $data->name }}" name="name" id="name" placeholder="Enter Faculty Name" required />
                                            @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Role<span style="color: red">*</span></label>
                                            <select name="role" class="form-control" id="role" required>
                                                <option value="">Select Role</option>
                                                <option {{ $data->role == 'student' ? 'selected' : '' }} value="student">Student</option>
                                                <option {{ $data->role == 'parent' ? 'selected' : '' }} value="parent">Parent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Image<span style="color: red">*</span></label>
                                           <input type="file" class="form-control" name="profile_image" id="profile_image" placeholder="Upload Image" required />
                                            @if($data->profile_image)
                                                <img src="{{ asset($data->profile_image) }}" alt="Profile Image" class="img-thumbnail mt-2" style="max-width: 150px; mas-height: 150px;">
                                            @endif
                                            @error('profile_image')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Message<span style="color: red">*</span></label>
                                           <textarea class="form-control" name="message" id="message" placeholder="Enter Message" required >{{$data->message}}</textarea>
                                            @error('message')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Status<span style="color: red">*</span></label>
                                            <select name="status" class="form-control" id="status" required>
                                                <option value="">Select Status</option>
                                                <option {{ $data->status == 'active' ? 'selected' : '' }} value="active">Active</option>
                                                <option {{ $data->status == 'inactive' ? 'selected' : '' }} value="inactive">Inactive</option>
                                            </select>
                                            @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <a href="{{ route('admin.testimonial.index') }}" class="btn btn-danger">Cancel</a>
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
        $("#testimonialForm").validate({
            onfocusout: function (element) {
                this.element(element); // Validate the field on blur
            },
            onkeyup: false, // Optional: Disable validation on keyup for performance
            rules: {
                name: {
                    required: true,
                    minlength: 2,
                    unique:true
                },
                profile_image: {
                    extension: "jpg,jpeg,png,gif"
                },
                message: {
                    required: true,
                    minlength: 2
                },
                role: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please enter a name",
                    minlength: "Name must be at least 2 characters long",
                    unique: "<span class='text-danger'>The Testimonial name has already been taken</span>"
                },
                profile_image: {
                    extension: "Only jpg, jpeg, png, and gif files are allowed"
                },
                message: {
                    required: "Please enter a message",
                    minlength: "Message must be at least 2 characters long"
                },
                role: {
                    required: "Please select a role"
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
