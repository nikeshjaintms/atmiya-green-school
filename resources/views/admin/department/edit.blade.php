@extends('admin.layouts.app')
{{-- @if(Auth::guard('admin')->check()) --}}
@section('title','Admin Panel')

{{-- @endif --}}

@section('content-page')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Department</h3>
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
                        <a href="{{ route('admin.department.index')}}">Department</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit Department</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Department</div>
                        </div>
                        <form method="POST" action="{{ route('admin.department.update', $data->id ) }}" id="departmentForm">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Department<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" name="name" value="{{ $data->name}}" id="name" placeholder="Enter Department Name" required />
                                            @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <a href="{{ route('admin.department.index') }}" class="btn btn-danger">Cancel</a>
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
        $("#departmentForm").validate({
            onfocusout: function (element) {
                this.element(element); // Validate the field on blur
            },
            onkeyup: false, // Optional: Disable validation on keyup for performance
            rules: {
                name: {
                    required: true,
                    minlength: 3,
                    maxlength: 50,
                    unique:true
                },

            },
            messages: {
                name: {
                    required: "Please Enter Department Name",
                    minlength: "Please Enter Minimum 3 Characters",
                    maxlength: "Please Enter Maximum 50 Characters",
                    unique: "<span class='text-danger'>The Department is already has been taken</span>"

                },
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
