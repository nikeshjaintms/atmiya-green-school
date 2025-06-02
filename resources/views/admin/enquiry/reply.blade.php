@extends('admin.layouts.app')
{{-- @if(Auth::guard('admin')->check()) --}}
@section('title','Admin Panel')
{{-- @endif --}}

@section('content-page')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Reply to Contact</h3>
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
                        <a href="{{ route('admin.enquiry.index') }}">Enquiry</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <span>Reply</span>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">Original Message from {{ $enquiry->name }}</div>
                        <div class="card-body">
                            <p><strong>Email:</strong> {{ $enquiry->email }}</p>
                            <p><strong>Phone:</strong> {{ $enquiry->phone }}</p>
                            <p><strong>Message:</strong><br>{{ $enquiry->message }}</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('enquiry.respondToContact', $enquiry->id) }}" method="POST" id="replyEnquiryForm">
                                @csrf
                                <div class="form-group">
                                    <label for="response_message">Your Response</label>
                                    <textarea name="response_message" id="response_message" class="form-control" rows="6" required>{{ old('response_message', $enquiry->response_message) }}</textarea>
                                    @error('response_message')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-primary">Send Response</button>
                                    <a href="{{ route('admin.enquiry.index') }}" class="btn btn-danger">Cancel</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('footer-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
