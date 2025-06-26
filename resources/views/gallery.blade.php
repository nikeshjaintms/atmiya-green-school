@extends('layouts.layout')
<!-- BANNER STRAT -->
@section('content')
<div class="banner">
    <div class="main-banner">
        <div class="banner-1"> <img src="{{asset('frontend/assets/images/gallery-img.png')}}" alt="Atmiya">
            <div class="banner-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-detail-inner align-center">
                                <h1 class="banner-title">ATMIYA GREEN GALLERY</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER END -->

<!-- CONTAIN START -->
@php
    $allImages = [];
    foreach ($activities as $activity) {
        $images = json_decode($activity->activity_image_video);
        if ($images) {
            foreach ($images as $img) {
                $allImages[] = $img;
            }
        }
    }
@endphp
<section class="ptb-95 pb-180 g-img" id="sub-banner">
    <div class="container">
        @foreach(array_chunk($allImages, 3) as $chunk)
            <div class="row mb-20">
                @foreach($chunk as $image)
                    <div class="col-lg-4 col-md-6 col-12 mb-30">
                        <img src="{{ $image }}" class="img-fluid" alt="Event Image" style="height: 300px; width: 100%; object-fit: cover;">
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</section>


<!-- CONTAIN END -->
@endsection
