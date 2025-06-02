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
                        <a href="{{ route('admin.event.index')}}">Event</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit Event</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Event</div>
                        </div>
                        <form method="POST" action="{{ route('admin.event.update', $data->id ) }}" id="eventForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Title<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" value="{{ $data->title }}" name="title" id="title" placeholder="Enter Title" required/>
                                            @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Event Date<span style="color: red">*</span></label>
                                            <input type="date" class="form-control"
                                                   value="{{ $data->event_date ? \Carbon\Carbon::parse($data->event_date)->format('Y-m-d') : '' }}"
                                                   name="event_date" id="event_date"
                                                   placeholder="Select Date" required/>

                                            @error('event_date')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Image<span style="color: red">*</span></label>
                                            <input type="file" class="form-control" name="event_images[]" id="event_images" placeholder="Upload Image" required multiple/>
                                            @if($data->event_images)
                                                @foreach(json_decode($data->event_images) as $eventImage)
                                                    <img src="{{ asset($eventImage) }}" alt="event_images" class="img-thumbnail mt-2" style="max-width: 150px; mas-height: 150px;">
                                                @endforeach
                                            @endif
                                            @error('event_images[]')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">description<span style="color: red">*</span></label>
                                            <textarea class="form-control" name="description" id="description" placeholder="Enter description" required>{{$data->description}}</textarea>
                                            @error('description')
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
            $("#eventForm").validate({
                onfocusout: function (element) {
                    this.element(element); // Validate the field on blur
                },
                onkeyup: false, // Optional: Disable validation on keyup for performance
                rules: {
                    title: {
                        required: true,

                        unique: true
                    },
                   ' event_images[]': {
                        extension: "jpg,jpeg,png,gif"
                    },
                    description: {
                        required: true,
                        minlength: 2
                    },
                    event_date: {
                        required: true,
                    },
                },
                messages: {
                    title: {
                        required: "Please enter a name",
                        minlength: "Name must be at least 2 characters long",
                        unique: "<span class='text-danger'>The Event name has already been taken</span>"
                    },
                   ' event_images[]': {
                        extension: "Only jpg, jpeg, png, and gif files are allowed"
                    },
                    description: {
                        required: "Please enter a message",
                        minlength: "Message must be at least 2 characters long"
                    },
                    event_date: {
                        required: "Please select a Date"
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
