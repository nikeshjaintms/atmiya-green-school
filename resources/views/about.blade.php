@extends('layouts.layout')
<!-- BANNER STRAT -->
@section('content')


<div class="banner">
    <div class="main-banner">
        <div class="banner-1"> <img src="{{asset('frontend/assets/images/aboutus-b.png')}}" alt="">
            <div class="banner-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-detail-inner align-center">
                                <h1 class="banner-title">ABOUT US</h1>
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

<!-- SUB-BANNER START -->
<section class="ptb-95" id="sub-banner"  >
    <div class="container" >
        <div class="sub-banner-block center-sm">
            <div class="row mlr_-20 mtb-60">
                <div class="col-lg-6 col-12 plr-20">
                    <img src="{{asset('frontend/assets/images/about-img.png')}}" alt="">
                </div>
                <div class="col-lg-6 col-12 plr-20 about-details ">
                    <h3 class="about-q">"Success comes to those who work hard and stays with those, who don't rest on the laurels of the past" </h3>
                    <p class="introduction">Atmiya green school is a citadel of learning set for academic pursuits and harmonious development of the individual. Lying in the lap of uncontaminated, natural, lush green surroundings and far from the madding crowds, savoring the spacious, serene and savvy solitude, Atmiya is a veritable abode of peace and tranquility catering to the learning processes and inner pursuits. The school caters to all kinds of students irrespective of their caste, creed, religion, and community.</p>
                    <h3 class="name">Mr.Pravinbhai Kachhadiya </h3>
                    <h5 class="desgi">Managing Director</h5>
                    <span></span>
                    <p class="desg2">Chairman of Gujarat Rajya Shala Sanchalak Maha Mandal</p>
                    <p class="desg2">Ex-Member of Gujarat Sec.& Higher Sec. Education Board</p>
                </div>
            </div>
            <hr>
            <div class="row mlr_-20 mtb-60">
                <div class="col-lg-6 col-12 plr-20 about-details ">
                    <h3 class="about-q">Our Mission</h3>
                    <p class="introduction">We, in active partnership with parents, prepare our students for the 21st century by engaging them in meaningful learning experiences that meet the highest educational and ethical standards and nurture curiosity and creativity through an inspiring, broad and engaging curriculum. Our children are challenged and encouraged to contribute and succeed as productive and responsible global citizens.</p>
                </div>
                <div class="col-lg-6 col-12 plr-20">
                    <img src="{{asset('frontend/assets/images/about-img1.png')}}" alt="">
                </div>
            </div>
            <div class="row mlr_-20 mtb-60">
                <div class="col-lg-6 col-12 plr-20">
                    <img src="{{asset('frontend/assets/images/about-img1.png')}}">
                </div>
                <div class="col-lg-6 col-12 plr-20 about-details ">
                    <h3 class="about-q">Our Vision</h3>
                    <p class="introduction">To turn every Atmiyan into an academically excellent, physically fit, mentally strong, globally
                        competitive, and technologically literate, intellectually sound, morally upright, socially, useful and spiritually motivated citizen through quality education.</p>
                </div>
            </div>
            <div class="row mlr_-20 mtb-60">
                <div class="col-lg-6 col-12 plr-20 about-details ">
                    <h3 class="about-q">Goals and Objectives </h3>
                    <p class="introduction">To enhance self-esteem and realization of one's own worth through a happy, caring, enriching and
                        secure environment</p>
                    <div class="title">
                        <h5>To develop an awareness of self and self-confidence</h5>
                        <div>
                            <ul>
                                <li><img src="{{asset('frontend/assets/images/true.png')}}" alt="">  To develop self-discipline</li>
                                <li><img src="{{asset('frontend/assets/images/true.png')}}" alt="">  To develop sensitivity</li>
                                <li><img src="{{asset('frontend/assets/images/true.png')}}" alt="">  To develop self-esteem</li>
                                <li><img src="{{asset('frontend/assets/images/true.png')}}" alt="">  To develop acceptable behaviour</li>
                                <li><img src="{{asset('frontend/assets/images/true.png')}}" alt="">  To develop cooperation</li>
                            </ul>
                        </div>
                    </div>
                    <p class="introduction">To provide a secure, congenial and intellectually stimulating environment that nurtures individual development and positive thinking. </p>
                </div>
                <div class="col-lg-6 col-12 plr-20">
                    <img src="{{asset('frontend/assets/images/about-img2.jpg')}}" alt="">
                </div>
            </div>
            <hr>
        </div>
    </div>
</section>
<!-- SUB-BANNER END -->
<!--  Site Services Features Block End  -->
<section class="pb-95" id="sub-banner" >
    <div class="ser-feature-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-center">
                    <h2 class="ab-title">Salient Features</h2>
                </div>
            </div>
            <div class="row m-0 ">
                <div class="col-lg-6 col-md-6 col-12 p-0 mb-xs-30 service-box border-right">
                    <div class="feature-box feature-box-1">
                        <!--<div class="feature-icon11">-->
                        <!--  <img src="images/Vector Smart Object-6.png">-->
                        <!--</div>-->
                        <div class="feature-detail">
                            <div class="ser-title">Warm Up Period</div>
                            <div class="ser-subtitle">We provide 30 minutes warm up class every Thursday where students are being taught Mass Drill exercise, Aerobics, Yoga, and Stretching Exercise, etc. It boosts the energy level of
                                students and helps them for proper blood circulation.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 p-0 mb-xs-30 service-box">
                    <div class="feature-box feature-box-1">
                        <!--<div class="feature-icon11">-->
                        <!--  <img src="images/song.png">-->
                        <!--</div>-->
                        <div class="feature-detail">
                            <div class="ser-title">Field Trips</div>
                            <div class="ser-subtitle">Field trips provide authentic, hands-on, experiential learning opportunities where students can connect what they are learning in classroom, in a real-world context. Maximizing the learning requires thoughtful work done before and after the trip.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-lg-6 col-md-6 col-12 p-0 mb-xs-30 service-box border-right">
                    <div class="feature-box feature-box-1">
                        <!--<div class="feature-icon11">-->
                        <!--  <img src="images/Vector-Smart-Object1.png">-->
                        <!--</div>-->
                        <div class="feature-detail">
                            <div class="ser-title">Celebrations </div>
                            <div class="ser-subtitle">IMP Days, Festivals, Colour days, Season days, etc.
                                Important days like World Environment Day, Teachers’ Day, Hindi Diwas, Rakshabandhan, Children’s Day, etc. are celebrated to teach students the importance of that specific day in our life. Festivals are celebrated to make them learn values of different religions and how to re-spect it. It also makes them understand how to celebrate life and enjoy at its fullest.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 p-0 mb-xs-30 service-box">
                    <div class="feature-box feature-box-1">
                        <!--<div class="feature-icon11">-->
                        <!--  <img src="images/Vector Smart Object-4.png">-->
                        <!--</div>-->
                        <div class="feature-detail">
                            <div class="ser-title">Annual Day</div>
                            <div class="ser-subtitle">Every 3-year school celebrates its Annual Day. It is an evening of entertainment where stu-dents showcase their talents in different fields. Even parents get an opportunity to watch their children performing on the stage. </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-lg-6 col-md-6 col-12 p-0 mb-xs-30 service-box border-right">
                    <div class="feature-box feature-box-1">
                        <!--<div class="feature-icon11">-->
                        <!--  <img src="images/Vector Smart Object-3.png">-->
                        <!--</div>-->
                        <div class="feature-detail">
                            <div class="ser-title">Prayer Timings</div>
                            <div class="ser-subtitle">Mornings should always begin with a prayer which soothes their mind. Prayers instill positive thinking and good morals in them. Even our students recite Geeta shloka every morning.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 p-0 mb-xs-30 service-box">
                    <div class="feature-box feature-box-1">
                        <!--<div class="feature-icon11">-->
                        <!--  <img src="images/Vector Smart Object-2.png">-->
                        <!--</div>-->
                        <div class="feature-detail">
                            <div class="ser-title">Picnics</div>
                            <div class="ser-subtitle">Picnic helps foster better mental health. It helps to develop stronger bonds and foster warmth, protection and love as well as emotions of belongings. It inculcates cultural understanding, Empathy and compassion, social skills, confidence and communication.  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--- Testimonials -->
<section class="pb-95" id="sub-banner">
    <div class="container">
        <div class="row ">
            <div class="col-12 ">
                <div class="row">
                    <div class="col-lg-12 align-center">
                        <h2 class="ab-title">Testimonials</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="client-main ">
                    <div class="client-inner align-center">
                        <div>
                            @foreach($testimonials as $testimonial)


                            <div class="item client-detail">
                                <div class="client-img left-side mt-20">
                                    <img alt="Atmiya" src="{{asset($testimonial->profile_image)}}" width="120" height="120" >
                                </div>
                                <div class="review ">
                                    <p>{{$testimonial->message}}
                                    </p>
                                    <div class="quote2-img">
                                        <h4 class="review-name">{{$testimonial->name}} </h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
