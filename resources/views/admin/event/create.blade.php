@extends('admin.layouts.app')
{{-- @if(Auth::guard('admin')->check()) --}}
@section('title','Admin Panel')

{{-- @endif --}}

@section('content-page')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Event</h3>
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
                        <a href="{{ route('admin.testimonial.index')}}">Event</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Add Event</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add Event</div>
                        </div>
                        <form method="POST" action="{{ route('admin.event.store') }}" id="eventForm" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Title<span style="color: red">*</span></label>
                                           <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}" placeholder="Enter title" required />
                                            @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Event Date<span style="color: red">*</span></label>
                                            <input type="date" class="form-control" name="event_date" value="{{old('event_date')}}" id="event_date" placeholder="Select Date" required />
                                            @error('event_date')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Description<span style="color: red">*</span></label>
                                            <textarea class="form-control" name="description"  id="description" placeholder="Enter Message" required >{{old('description')}}</textarea>
                                            @error('description')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Image<span style="color: red">*</span></label>
                                           <input type="file"  class="form-control" name="event_images[]" id="event_images" placeholder="Upload Image"   required multiple />

                                            @error('event_images[]')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <a href="{{ route('admin.event.index') }}" class="btn btn-danger">Cancel</a>
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

        $('#eventForm').validate({
            rules: {
                title: {
                    required: true,
                    minlength: 2,
                    // unique:true
                },
               "event_images[]": {
                    required: true,
                    extension: "jpg|jpeg|png|gif"
                },
                description: {
                    required: true,
                },
                event_date: {
                    required: true,
                },

            },
            messages: {
                title: {
                    required: "Please enter a title",
                    minlength: "Name must be at least 2 characters long",
                    unique: "<span class='text-danger'>The Event name has already been taken</span>"
                },
               "event_images[]": {
                    required: "Please upload a  image",
                    extension: "Only jpg, jpeg, png, and gif files are allowed"
                },
                description: {
                    required: "Please enter a description",
                },
                event_date: {
                    required: "Please select a date"
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
