@extends('admin.layouts.app')
{{-- @if(Auth::guard('admin')->check()) --}}
@section('title','Admin Panel')

{{-- @endif --}}

@section('content-page')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Magazine</h3>
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
                        <a href="{{ route('admin.magazine.index')}}">Magazine</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Add Magazine</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add Magazine</div>
                        </div>
                        <form method="POST" action="{{ route('admin.magazine.store') }}" id="magazineForm" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Magazine Name<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Select Magazine Name"  multiple/>
                                            @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Published Date<span style="color: red">*</span></label>
                                            <input type="date" class="form-control" name="published_at" id="published_at" placeholder="Select Date"  />
                                            @error('published_at')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Magazine File<span style="color: red">*</span></label>
                                           <input type="file" class="form-control" name="magazine_pdf[]" id="magazine_pdf" placeholder="Select Magazine file" value="{{ old('magazine_pdf[]') }}"  multiple/>
                                            @error('magazine_pdf[]')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <a href="{{ route('admin.magazine.index') }}" class="btn btn-danger">Cancel</a>
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
        $('#magazineForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2,
                    unique:true
                },
                published_at:{
                    required: true,
                },

                'magazine_pdf[]': {
                    required: true,
                    extension: "pdf"
                },

            },
            messages: {
                name: {
                    required: "Please enter a name",
                    unique: "<span class='text-danger'>The Magazine name has already been taken</span>"
                },
                published_at:{
                   required: "Please Select A date",
                },
                'magazine_pdf[]': {
                    required: "Please upload a file",
                    extension: "Only pdf files",
                },

            },
            errorElement: 'span',
            errorClass: 'text-danger',
            highlight: function (element, errorClass) {
                $(element).addClass("is-invalid");
            },
            unhighlight: function (element, errorClass) {
                $(element).removeClass("is-invalid");
            }
            });
    });
</script>
@endsection
