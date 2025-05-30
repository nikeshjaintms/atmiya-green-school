@extends('layouts.layout')
<!-- BANNER STRAT -->
@section('content')
<div class="banner">
    <div class="main-banner">
        <div class="banner-1"> <img src="{{asset('frontend/assets/images/event-banner-1.png')}}" alt="Atmiya">
            <div class="banner-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-8">
                            <div class="banner-detail-inner">
                                <h1 class="banner-title">EVENTS</h1>
                                <!-- <img src="images/down-aarow.png" alt="Atmiya"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER END -->

    <!-- CONTAIN START -->

    <section class="pb-95" id="sub-banner"  style="background-image: url({{asset('frontend/assets/images/bg.jpg')}});">
        <div class="our-c">
            <div class="ser-feature-block">
                <div class="container">
                    <div class="row m-0">
                        @foreach($events as $event)


                        <div class="col-lg-6 col-md-6 col-12 p-0 mb-xs-30 service-box">
                            <div class="blog-item">
                                <h2>{{$event->title}}</h2>
                                <div class="blog-media">
                                    @foreach(json_decode($event->event_images) as $image)
                                        <img src="{{ $image }}"  height="369px" width="320px"	alt="Event Image" />
                                    @endforeach
                                    <div class="blog-effect"></div>
                                </div>
                                <div class="blog-detail mt-20">
                                    <div class="blog-detail-inner">
                                        <div class="blog-contant">
                                            <div class="blog-desc">
                                                <div class=" ptb-30">
                                                    <div class="date">
                                                        <span>10<sup>th</sup></span>
                                                        <h5>{{ \Carbon\Carbon::parse($event->event_date)->format('j F Y') }}</h5>
                                                    </div>
                                                    <!--<div class="place-name">-->
                                                    <!--  <h6>08:00 AM - 05:00 PM</h6>-->
                                                    <!--  <div class="ser-title">"Maniba Campus ,NH NO.8, Nr.Cable Bridge,</div>-->
                                                    <!--  <div class="ser-subtitle">Zadeshwar, Bhruch-392011</div>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
