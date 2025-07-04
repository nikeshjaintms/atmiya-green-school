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
                        <form method="POST" action="{{ route('admin.circular.update', $data->id ) }}" id="circularForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                           <div class="card-body">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="driver_name">Title<span style="color: red">*</span></label>
                                             <input type="text" class="form-control" name="title" id="title" value="{{$data->title}}" placeholder="Enter title" required />
                                             @error('title')
                                             <div class="text-danger">{{ $message }}</div>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="driver_name">Circular Date<span style="color: red">*</span></label>
                                             <input type="date" class="form-control" name="date" id="date" value="{{$data->date}}" placeholder="Select Date" required />
                                             @error('date')
                                             <div class="text-danger">{{ $message }}</div>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="driver_name">Circular File <span style="color: red">*</span></label>
                                             <input
                                                     type="file"
                                                     class="form-control"
                                                     name="circular_file[]"
                                                     id="circular_file"
                                                     placeholder="Select Circular file"
                                                     accept=".pdf,.doc,.docx"
                                                     multiple
                                             />
                                             @if($data->circular_file)
                                                 @foreach(json_decode($data->circular_file) as $file)
                                                     @php
                                                         $extension = pathinfo($file, PATHINFO_EXTENSION);
                                                     @endphp

                                                     @if(in_array($extension, ['pdf', 'doc', 'docx']))
                                                         <a href="{{ asset($file) }}" target="_blank" class="d-block mt-2">
                                                             View File ({{ strtoupper($extension) }})
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
        $.validator.addMethod("extension", function(value, element, param) {
            if (this.optional(element)) {
                return true;
            }
            var fileName = element.value;
            var extension = fileName.split('.').pop().toLowerCase();
            return param.split('|').indexOf(extension) > -1;
        });

        $('#circularForm').validate({
            rules: {
                title: {
                    required: true,
                },
                'circular_file[]': {
                    extension: "pdf|doc|docx"
                },
                date: {
                    required: true,
                }

            },
            messages: {
                title: {
                    required: "Please enter a Title",
                },
               'circular_file[]': {
                    extension: "Only pdf,docx and doc files are allowed"
                },
                date: {
                    required: "Please Select a Date",
                }

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
