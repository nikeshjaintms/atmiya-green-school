@extends('admin.layouts.app')
{{-- @if(Auth::guard('admin')->check()) --}}
@section('title','Admin Panel')

{{-- @endif --}}

@section('content-page')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Circular</h3>
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
                        <a href="{{ route('admin.circular.index')}}">Circular</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit Circular</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Circular</div>
                        </div>
                        <form method="POST" action="{{ route('admin.circular.update', $data->id ) }}" id="testimonialForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                           <div class="card-body">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="driver_name">Circular File<span style="color: red">*</span></label>
                                             <input type="file" class="form-control" name="circular_file[]" id="circular_file" placeholder="Select Circular file" value="{{$data->circular_file}}" required multiple/>
                                             @if($data->circular_file)
                                                 @foreach(json_decode($data->circular_file) as $file)
                                                     @php
                                                         $extension = pathinfo($file, PATHINFO_EXTENSION);
                                                     @endphp

                                                     @if(in_array($extension, ['jpg', 'jpeg', 'png']))
                                                         <img src="{{ asset($file) }}" alt="circular_file" class="img-thumbnail mt-2" style="max-width: 150px; max-height: 150px;">
                                                     @elseif(in_array($extension, ['pdf', 'doc', 'docx']))
                                                         <a href="{{ asset($file) }}" target="_blank" class="d-block mt-2">
                                                              View File  ({{ strtoupper($extension) }})
                                                         </a>
                                                     @endif
                                                 @endforeach
                                             @endif
                                             @error('circular_file')
                                             <div class="text-danger">{{ $message }}</div>
                                             @enderror
                                         </div>
                                     </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <a href="{{ route('admin.circular.index') }}" class="btn btn-danger">Cancel</a>
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
                    unique: "<span class='text-danger'>The faculty name has already been taken</span>"
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
