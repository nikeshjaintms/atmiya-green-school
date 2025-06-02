@extends('admin.layouts.app')
{{-- @if(Auth::guard('admin')->check()) --}}
@section('title','Admin Panel')

{{-- @endif --}}

@section('content-page')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Activity</h3>
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
                        <a href="{{ route('admin.activity.index')}}">Activity</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit Activity</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Activity</div>
                        </div>
                        <form method="POST" action="{{ route('admin.activity.update', $data->id ) }}" id="departmentForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="activity_category_id">Activity Category Name <span style="color: red">*</span></label>
                                            <select class="form-control" name="activity_category_id" id="activity_category_id" required>
                                                <option value="">Select Activity Category</option>
                                                @foreach($activityCategories as $category)
{{--                                                    <option value="{{ $category->activity_category_id }}"--}}
{{--                                                        {{ $data->activity_category_id == $category->id? 'selected' : '' }}>--}}
{{--                                                        {{ $category->activity_category_name }}--}}
{{--                                                    </option>--}}
                                                    <option value="{{ $category->id }}" {{ $category->id == old('activity_category_id', $data->activity_category_id) ? 'selected' : '' }}>
                                                        {{ $category->activity_category_name }}
                                                    </option>

                                                @endforeach
                                            </select>
                                            @error('activity_category_id')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Activity Name<span style="color: red">*</span></label>
                                            <input type="text" class="form-control" name="activity_name" id="activity_name" placeholder="Enter Activity  Name"  value="{{$data->activity_name}}" required />
                                            @error('activity_name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Activity Date</label>
                                            <input type="date" class="form-control" name="activity_date" id="activity_date" placeholder="Enter Activity  Name"  value="{{$data->activity_date}}" />
                                            @error('activity_date')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="activity_image_video">Activity Image/Video
                                                <span style="color: red">*</span>
                                            </label>

                                            <input
                                                type="file"
                                                class="form-control"
                                                name="activity_image_video[]"
                                                id="activity_image_video"
                                                placeholder="Select Image or Video"
                                                multiple
                                                accept="image/*,video/*"
                                            />

                                            @error('activity_image_video.*')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- Show existing files if any --}}
                                        @if(!empty($data->activity_image_video))
                                            @php
                                                $mediaFiles = json_decode($data->activity_image_video, true);
                                            @endphp

                                            <div class="col-md-6 mt-3">
                                                <div class="row">
                                                    @foreach($mediaFiles as $file)
                                                        <div class="col-md-3 mb-3 text-center">
                                                            @if(Str::contains($file, ['.jpg', '.jpeg', '.png', '.gif', '.svg']))
                                                                <img src="{{ $file }}" alt="image" class="img-fluid" style="max-height: 220px;">
                                                            @elseif(Str::contains($file, ['.mp4', '.mov', '.avi', '.wmv']))
                                                                <video controls style="max-height: 500px; width: 500%;">
                                                                    <source src="{{ $file }}" type="video/mp4">
                                                                    Your browser does not support the video tag.
                                                                </video>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <a href="{{ route('admin.activity.index') }}" class="btn btn-danger">Cancel</a>
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
        $("#departmentForm").validate({
            onfocusout: function (element) {
                this.element(element); // Validate the field on blur
            },
            onkeyup: false, // Optional: Disable validation on keyup for performance
            rules: {
                activity_category_id: {
                    required: true,

                },
                activity_name: {
                    required: true,
                    unique:true
                },
                activity_date: {
                    required: false,

                },
                activity_image_video: {
                    required: true,

                }
            },
            messages: {
                activity_category_id: {
                    required: "Please enter a Activity Category name",
                    minlength: "Department name must be at least 2 characters long",

                },
                activity_name: {
                    required: "Please enter a Activity name",
                    minlength: "Department name must be at least 2 characters long",
                    unique: "<span class='text-danger'>The Activity Category name has already been taken</span>"
                },
                activity_image_video: {
                    required: "Please Select a Activity image or video",

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
