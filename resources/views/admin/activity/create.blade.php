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
                        <a href="#">Add Activity</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Add Activity</div>
                        </div>
                        <form method="POST" action="{{ route('admin.activity.store') }}" id="activityForm" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="activity_category_id">Activity Category Name <span style="color: red">*</span></label>
                                            <select class="form-control" name="activity_category_id" id="activity_category_id" required>
                                                <option value="">Select Activity Category</option>
                                                @foreach($activityCategories as $category)
                                                    <option value="{{ $category->id }}" {{ old('activity_category_id') == $category->id ? 'selected' : '' }}>{{ $category->activity_category_name }}
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
                                            <input type="text" class="form-control" name="activity_name" id="activity_name" placeholder="Enter Activity  Name" value="{{ old('activity_name') }}" required />
                                            @error('activity_name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Activity Date</label>
                                            <input type="date" class="form-control" name="activity_date" id="activity_date" placeholder="Enter Activity  Name" value="{{ old('activity_date') }}"  />
                                            @error('activity_date')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="driver_name">Activity Image/Video<span style="color: red">*</span></label>
                                            <input type="file" class="form-control" name="activity_image_video[]" id="activity_image_video" value="{{ old('activity_image_video') }}" placeholder="Select Image or video" required multiple  accept="image/*,video/*"  />
                                            @error('activity_image_video[]')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
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
        $('#activityForm').validate({
            rules: {
                activity_category_id: {
                    required: true,
                },
                activity_name: {
                    required: true,
                },
                activity_date: {
                    required: false,
                },
                "activity_image_video[]": {
                    required: true,
                    extension: "jpg|jpeg|png|gif|mp4|svg|mov|avi|wmv",

                }
            },
            messages: {
                activity_category_id: {
                    required: "Please enter a Activity Category name",
                    minlength: "Activity Category name must be at least 2 characters long",

                },
                activity_name: {
                    required: "Please enter a Activity name",
                    minlength: "Activity Category name must be at least 2 characters long",
                },
                "activity_image_video[]": {
                    required: "Please Select a Activity image or video",
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
