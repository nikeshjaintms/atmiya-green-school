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
<section class="ptb-95 g-img" id="sub-banner">
    <div class="container align-center" >
        @foreach($activities as $activity)
        <div class="row mb-20">
            <div class="col-lg-4 col-md-4 col-12  plr-20 mb-30">
                @foreach(json_decode($activity->activity_image_video) as $image)
                    <img src="{{ $image }}"  height="535px" width="537px"	alt="Event Image" />
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- CONTAIN END -->
@endsection
