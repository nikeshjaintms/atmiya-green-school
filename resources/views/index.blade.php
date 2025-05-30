@extends('layouts.layout')
@section('content')
    <!-- BANNER STRAT -->
    <div class="banner">
        <div class="main-banner">
            <div class="banner-1"> <img src="{{asset('frontend/assets/images/banner1.jpg')}}" alt="Atmiya">
                <div class="banner-detail">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9 col-xs-8">
                                <div class="banner-detail-inner">
                                    <span class="slogan">Welcome to</span>
                                    <h1 class="banner-title">Atmiya Green School</h1>
                                    <span class="offer">Quality Education With Highly Touching Care</span>
                                </div>
                                <a class="btn" href="{{route('frontend.about')}}">READ MORE</a>
                                <a class="btn btn-color " href="{{route('frontend.contact')}}">Enroll Now</a>
                            </div>
                            <div class="col-sm-3 col-xs-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-1"> <img src="{{asset('frontend/assets/images/banner2.jpg')}}" alt="Atmiya">
                <div class="banner-detail">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9 col-xs-8">
                                <div class="banner-detail-inner">
                                    <span class="slogan">Welcome to</span>
                                    <h1 class="banner-title">Atmiya Green School</h1>
                                    <span class="offer">Intelligence Plus Character That Is The Goal Of True Education</span>
                                </div>
                                <a class="btn" href="{{route('frontend.about')}}">READ MORE</a>
                                <a class="btn btn-color " href="{{route('frontend.contact')}}">Enroll Now</a>
                            </div>
                            <div class="col-sm-3 col-xs-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-1"> <img src="{{asset('frontend/assets/images/banner3.jpg')}}" alt="Atmiya">
                <div class="banner-detail">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-9 col-xs-8">
                                <div class="banner-detail-inner">
                                    <span class="slogan">Welcome to</span>
                                    <h1 class="banner-title">Atmiya Green School</h1>
                                    <span class="offer">Better Education Better Life</span>
                                </div>
                                <a class="btn" href="{{route('frontend.about')}}">READ MORE</a>
                                <a class="btn btn-color " href="{{route('frontend.contact')}}">Enroll Now</a>
                            </div>
                            <div class="col-sm-3 col-xs-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER END -->

    <!-- CONTAIN START -->

    <!-- SUB-BANNER START -->
    <section class="ptb-95" id="sub-banner" style="background-image: url({{asset('frontend/assets/images/bg.jpg')}}">
        <div class="container">
            <div class="sub-banner-block center-sm">
                <div class="row mlr_-20">
                    <div class="col-lg-4 col-12 plr-20">
                        <div class="sub-banner sub-banner1">
                            <img alt="Atmiya" src="{{asset('frontend/assets/images/sub-banner1.png')}}">
                            <div class="sub-banner-detail">
                                <div class="sub-icon">
                                    <img src="{{asset('frontend/assets/images/subl1.png')}}" alt="">
                                </div>
                                <div class="sub-banner-title sub-banner-title-color">Enriching Experience</div>
                                <div class="sub-banner-subtitle">We strongly believe that learning in a calm, serene and welcoming
                                    ambience allows children...</div>
                                <a href="#"><i class="fa fa-greater-than"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 plr-20">
                        <div class="sub-banner sub-banner2">
                            <img alt="Atmiya" src="{{asset('frontend/assets/images/sub-banner2.png')}}">
                            <div class="sub-banner-detail">
                                <div class="sub-icon">
                                    <img src="{{asset('frontend/assets/images/subl2.png')}}" alt="">
                                </div>
                                <div class="sub-banner-title sub-banner-title-color">Holistic Development </div>
                                <div class="sub-banner-subtitle">We strongly believe that learning in a calm, serene and welcoming
                                    ambience allows children...</div>
                                <a href="#"><i class="fa fa-greater-than"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 plr-20">
                        <div class="sub-banner sub-banner3">
                            <img alt="Atmiya" src="{{asset('frontend/assets/images/sub-banner3.png')}}" >
                            <div class="sub-banner-detail">
                                <div class="sub-icon">
                                    <img src="{{asset('frontend/assets/images/subl3.png')}}" alt="">
                                </div>
                                <div class="sub-banner-title sub-banner-title-color">Skill Based Education</div>
                                <div class="sub-banner-subtitle">We strongly believe that learning in a calm, serene and welcoming
                                    ambience allows children...</div>
                                <a href="#"><i class="fa fa-greater-than"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mlr_-20 mtb-60">
                    <div class="col-lg-6 col-12 plr-20  intro">
                        <div class="headingg">
                            <div class="subhead">
                                <span class="slogan">Welcome to</span>
                                <h2 class="banner-title">Atmiya Green School</h2>
                            </div>
                        </div>

                        <p>Vitalised by vision, galvanised by mission and underpinned by values, we at Atmiya live and breathe the
                            philosophy that people matter and results count. We strive to champion an environment of honesty,
                            transparency, fairness and high moral standards.
                        </p>
                        <p>Atmiya aims to provide modern educational and pedagogical facilities and a clean and safe environment
                            that help in shaping the children's overall personality enabling them to develop a strong and confident
                            self-esteem to push themselves to their greatest potential.
                        </p>
                        <p>We believe that every child deserve the very best educational opportunities to blossom and shine, and
                            we seek to ensure that our pupils are equipped with skills required to successfully take their place
                            within the society and beyond. Consequently, we see academic success for our pupils as of equal
                            importance to their social and emotional growth. We look upon ourselves as the custodian of the tender,
                            young minds and strive to inculcate in them a sense of values, a sense of craving for knowledge, a sense
                            of commitment and a sense of respect for the intangible assets of ones culture.</p>
                        <a class="btn btn-color " href="{{route('frontend.about')}}">More About Us</a>
                    </div>
                    <div class="col-lg-6 col-12 plr-20">
                        <img src="{{asset('frontend/assets/images/sub-image.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SUB-BANNER END -->

    <!--  Site Services Features Block Start  -->
    <section class=" " id="school">
        <div class="school-b">
            <div class="item">
                <img src="{{asset('frontend/assets/images/school1.jpg')}}" alt="Atmiya">
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/images/school2.jpg')}}" alt="Atmiya">
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/images/school3.jpg')}}" alt="Atmiya">
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/images/school4.jpg')}}" alt="Atmiya">
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/images/school5.jpg')}}" alt="Atmiya">
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/images/school6.jpg')}}" alt="Atmiya">
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/images/school7.jpg')}}" alt="Atmiya">
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/images/school8.jpg')}}" alt="Atmiya">
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/images/school9.jpg')}}" alt="Atmiya">
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/images/school10.jpg')}}" alt="Atmiya">
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/images/school11.jpg')}}" alt="Atmiya">
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/images/school12.jpg')}}" alt="Atmiya">
            </div>
            <div class="item">
                <img src="{{asset('frontend/assets/images/school13.jpg')}}" alt="Atmiya">
            </div>
        </div>
    </section>
    <!--  Site Services Features Block End  -->
    <section class="ptb-95" id="sub-banner" style="background-image: url("{{asset('frontend/assets/images/bg.jpg')}}">

        <div class="ser-feature-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 al-center">
                        <div class="headingg">
                            <div class="subhead">
                                <span class="slogan">Our</span>
                                <h2 class="banner-title">Activities</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    @foreach($activities as $activity)
                    <div class="col-lg-6 col-md-6 col-12 p-0 mb-xs-30 service-box">
                        <div class="feature-box feature-box-1">
                            <div class="feature-icon11">
                                @foreach(json_decode($activity->activity_image_video) as $image)
                                    <img src="{{ $image }}"  height="369px" width="320px"	alt="Event Image" />
                                @endforeach

                            </div>
                            <div class="feature-detail">
                                <div class="ser-title">{{$activity->activity_name}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <section class="pb-95">
        <img src="{{asset('frontend/assets/images/Layer 22.jpg')}}" alt="">
    </section>

    <section class="pb-95 " id="sub-banner" style="background-image: url("{{asset('frontend/assets/images/bg.jpg')}}">
        <div class="our-c">
            <div class="ser-feature-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 al-center">
                            <div class="headingg">
                                <div class="subhead">
                                    <span class="slogan">Our</span>
                                    <h2 class="banner-title">Club Activities </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-blog-item" >
                        <div class="item" >
                            @foreach($club as $clubAct)
                            <div class="blog-item">
                                <div class="blog-media">
                                    @foreach(json_decode($clubAct->activity_image_video) as $media)
                                        @php
                                            $extension = pathinfo($media, PATHINFO_EXTENSION);
                                            $isVideo = in_array(strtolower($extension), ['mp4', 'webm', 'ogg']);
                                        @endphp

                                        @if($isVideo)
                                            <video width="537px" height="535px" controls>
                                                <source src="{{ $media }}" type="video/{{ $extension }}">
                                                Your browser does not support the video tag.
                                            </video>
                                        @else
                                            <img src="{{ $media }}" width="537px" height="535px" alt="Event Media" />
                                        @endif
                                    @endforeach


                                    <div class="post-datemonth">
                                        <span class="month">{{ \Carbon\Carbon::parse($clubAct->activity_date)->format(' F') }}</span>
                                        <span class="date"><b>{{ \Carbon\Carbon::parse($clubAct->activity_date)->format('j ') }}</b></span>
                                    </div>
                                    <div class="blog-effect"></div>
                                </div>
                                <div class="blog-detail mt-20">
                                    <div class="blog-detail-inner">
                                        <div class="blog-contant">
                                            <div class="blog-title">
                                                <h3>
                                                    <a href="#">{{$clubAct->activity_name}}</a>
                                                </h3>
                                            </div>
{{--                                            <div class="blog-desc">--}}
{{--                                                <p>--}}
{{--                                                    Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet,--}}
{{--                                                    euismod in, auctor ut, ligula.--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="post-info">--}}
{{--                                                <ul>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#"><i class="fa fa-user"></i> By Admin</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#"><i class="fa fa-thumbs-up"></i> 12 Like</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="#"><i class="fa fa-comment"></i>5 Comment</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="ennrolment  mt-30">
            <div class="container">
                <div class="row ">
                    <div class="col-12 align-center">
                        <div class="heading-part   mb-xs-15">
                            <h2 class="main_title">Enroll Your Child For 2023-2024</h2>
                        </div>
                        <a class="btn btn-color ">Enroll Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- Testimonials -->
    <section class="client-bg ptb-95" id="sub-banner">
        <div class="top-shadow">
            <img alt="Atmiya" src="{{asset('frontend/assets/images/top-shadow.png')}}">
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-12 ">
                    <div class="headingg">
                        <div class="subhead">
                            <span class="slogan">Our</span>
                            <h2 class="banner-title">Testimonials</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="client-main ">
                        <div class="client-inner align-center">
                            <div class="client">
                                <div class="item client-detail">
                                    <div class="client-img left-side mt-20">
                                        <img alt="Atmiya" src="{{asset('frontend/assets/images/tes1.png')}}">
                                    </div>
                                    <div class="quote right-side">
                                        <div class="quote1-img">

                                        </div>
                                        <p>I have observed that in your school the students are being given their status as deserved. The
                                            air conditioned classrooms, the lavish playgrounds, the nutritious food and pure drinking water
                                            show your love and care for the children.
                                        </p>
                                        <div class="quote2-img">
                                            <h4 class="sub-title client-title">--- Ms. Avantika Singh Aulakh ( IAS officer) </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item client-detail">
                                    <div class="client-img left-side mt-20">
                                        <img alt="Atmiya" src="{{asset('frontend/assets/images/tes3.png')}}">
                                    </div>
                                    <div class="quote right-side">
                                        <div class="quote1-img">

                                        </div>
                                        <p>I have observed that in your school the students are being given their status as deserved. The
                                            air conditioned classrooms, the lavish playgrounds. One day your students will bring pride and
                                            glory to the school and place you on the world map of education.
                                        </p>
                                        <div class="quote2-img">
                                            <h4 class="sub-title client-title">--- Mr. Vivek Chavan </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="item client-detail">
                                    <div class="client-img left-side mt-20">
                                        <img alt="Atmiya" src="{{asset('frontend/assets/images/tes2.png')}}">
                                    </div>
                                    <div class="quote right-side">
                                        <div class="quote1-img">

                                        </div>
                                        <p>“The most amazing thing about Atmiya School is how welcoming both the Management and the
                                            faculty are to any new student. I admitted my child in Atmiya in STD: II and he was made to feel
                                            a part of the school from the beginning. We have no concerns about our child, thanks to Atmiya.”
                                        </p>
                                        <div class="quote2-img">
                                            <h4 class="sub-title client-title">--- Mr. Nayan Patel </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="sub-banner">
        <div class="parent-choice pb-60">
            <div class="container">
                <div class="row pt-60">
                    <div class="col-12 ">
                        <div class="heading-part align-center  mb-30 mb-xs-15">
                            <h2 class="main_title">Parent Choose Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="counter">
                            <h2>09</h2>
                            <h3>Years of Experience</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="counter">
                            <h2>55</h2>
                            <h3>Qualified Teachers</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="counter">
                            <h2>447</h2>
                            <h3>Happy Children</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="counter">
                            <h2>95</h2>
                            <h3>Total Activities</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>


    <section>
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.53632154696!2d73.03931316971395!3d21.720724037481382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0212324335741%3A0x7dce15a66db2c86b!2sAtmiya%20Green%20School!5e0!3m2!1sen!2sin!4v1569914179542!5m2!1sen!2sin"
                width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>
@endsection
