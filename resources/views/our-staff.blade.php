@extends('layouts.layout')
<!-- BANNER STRAT -->
@section('content')
<div class="banner">
    <div class="main-banner">
        <div class="banner-1"> <img src="{{asset('frontend/assets/images/aboutus-b.png')}}" alt="Atmiya">
            <div class="banner-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-detail-inner align-center">
                                <h1 class="banner-title">OUR STAFF</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER END -->
<section class="ptb-95 admin" id="sub-banner"  >
    <div class="ser-feature-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-40 align-center">
                    <h2 class="ab-title">Administration</h2>
                </div>
            </div>
{{--            <div class="row m-0 ">--}}
{{--                <div class="col-lg-4 col-md-4 col-12 mb-40 mb-xs-30 ">--}}
{{--                    <div class="blog-item">--}}
{{--                        <div class="staff-img  ">--}}
{{--                            <img src="{{asset('frontend/assets/images/ad-staff1.jpg')}}" alt="Atmiya">--}}
{{--                        </div>--}}
{{--                        <div class="staff-detail mt-20">--}}
{{--                            <div class="staff-detail-inner">--}}
{{--                                <div class="staff-contant">--}}
{{--                                    <div class="staff-title">--}}
{{--                                        <h3>--}}
{{--                                            <a href="#">Mr. Krishan Upadhyay</a>--}}
{{--                                        </h3>--}}
{{--                                        <h5 class="desgi">Principal</h5>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="staff-desc">--}}
{{--                                        <p>--}}
{{--                                            It is rightly said that collapsing any nation does not require use of atomic bombs or the use of long range missiles.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                    <div class=" ptb-30 social">--}}
{{--                                        <div class="footer_social align-center">--}}
{{--                                            <ul class="social-icon">--}}
{{--                                                <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>--}}
{{--                                                <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>--}}
{{--                                                <li><a title="Youtube" class="youtube"><i class="fa fa-youtube-square"> </i></a></li>--}}
{{--                                                <li><a title="Instagram" class="instagram"><i class="fa fa-instagram"> </i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-4 col-12 mb-40 mb-xs-30">--}}
{{--                    <div class="blog-item">--}}
{{--                        <div class="staff-img  ">--}}
{{--                            <img src="{{asset('frontend/assets/images/ad-staff2.jpg')}}" alt="Atmiya">--}}
{{--                        </div>--}}
{{--                        <div class="staff-detail mt-20">--}}
{{--                            <div class="staff-detail-inner">--}}
{{--                                <div class="staff-contant">--}}
{{--                                    <div class="staff-title">--}}
{{--                                        <h3>--}}
{{--                                            <a href="#">Vaishali Solanki</a>--}}
{{--                                        </h3>--}}
{{--                                        <h5 class="desgi">Pre School In Charge Ponders</h5>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="staff-desc">--}}
{{--                                        <p>--}}
{{--                                            We at atmiya constantly adjust our sails of teaching techniques to face the sweeping winds of change in the arena of education.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                    <div class=" ptb-30 social">--}}
{{--                                        <div class="footer_social align-center">--}}
{{--                                            <ul class="social-icon">--}}
{{--                                                <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>--}}
{{--                                                <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>--}}
{{--                                                <li><a title="Youtube" class="youtube"><i class="fa fa-youtube-square"> </i></a></li>--}}
{{--                                                <li><a title="Instagram" class="instagram"><i class="fa fa-instagram"> </i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-4 col-12 mb-40 mb-xs-30 ">--}}
{{--                    <div class="blog-item">--}}
{{--                        <div class="staff-img">--}}
{{--                            <img src="{{asset('frontend/assets/images/ad-staff3.jpg')}}" alt="Atmiya">--}}
{{--                        </div>--}}
{{--                        <div class="staff-detail mt-20">--}}
{{--                            <div class="staff-detail-inner">--}}
{{--                                <div class="staff-contant">--}}
{{--                                    <div class="staff-title">--}}
{{--                                        <h3>--}}
{{--                                            <a href="#">Ms.Rinku Vasani</a>--}}
{{--                                        </h3>--}}
{{--                                        <h5 class="desgi">Campus Coordinator</h5>--}}
{{--                                        <span></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="staff-desc">--}}
{{--                                        <p>--}}
{{--                                            She serves as a sounding board for teachers to express opinions And concerns about the instructional materials.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                    <div class=" ptb-30 social">--}}
{{--                                        <div class="footer_social align-center">--}}
{{--                                            <ul class="social-icon">--}}
{{--                                                <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>--}}
{{--                                                <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>--}}
{{--                                                <li><a title="Youtube" class="youtube"><i class="fa fa-youtube-square"> </i></a></li>--}}
{{--                                                <li><a title="Instagram" class="instagram"><i class="fa fa-instagram"> </i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row m-0">
                @foreach($faculties as $faculty)
                    <div class="col-lg-4 col-md-4 col-12 mb-40 mb-xs-30">
                        <div class="blog-item">
                            <div class="staff-img">
                                <img src="{{ asset($faculty->profile ?? 'frontend/assets/images/default-staff.jpg') }}" height="360px" width="360px" alt="{{ $faculty->name }}">
                            </div>
                            <div class="staff-detail mt-20">
                                <div class="staff-detail-inner">
                                    <div class="staff-contant">
                                        <div class="staff-title">
                                            <h3>
                                                <a href="#">{{ $faculty->name }}</a>
                                            </h3>
                                            <h5 class="desgi">{{ $faculty->designation ?? $faculty->department }}</h5>
                                            <span></span>
                                        </div>
                                        <div class="staff-desc">
                                            <p>{{ $faculty->description }}</p>
                                        </div>
{{--                                        <div class="ptb-30 social">--}}
{{--                                            <div class="footer_social align-center">--}}
{{--                                                <ul class="social-icon">--}}
{{--                                                    @if(!empty($faculty->facebook))--}}
{{--                                                        <li><a href="{{ $faculty->facebook }}" target="_blank" title="Facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                                    @endif--}}
{{--                                                    @if(!empty($faculty->twitter))--}}
{{--                                                        <li><a href="{{ $faculty->twitter }}" target="_blank" title="Twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                                    @endif--}}
{{--                                                    @if(!empty($faculty->youtube))--}}
{{--                                                        <li><a href="{{ $faculty->youtube }}" target="_blank" title="Youtube" class="youtube"><i class="fa fa-youtube-square"></i></a></li>--}}
{{--                                                    @endif--}}
{{--                                                    @if(!empty($faculty->instagram))--}}
{{--                                                        <li><a href="{{ $faculty->instagram }}" target="_blank" title="Instagram" class="instagram"><i class="fa fa-instagram"></i></a></li>--}}
{{--                                                    @endif--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <hr>
        </div>
    </div>
</section>
<section  id="sub-banner"  class="facility">
    <div class="ser-feature-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-40 align-center">
                    <h2 class="ab-title">Faculty at Atmiya</h2>
                </div>
            </div>
            <hr>
        </div>
    </div>
</section>
<!--  Site Services Features Block Start  -->
<section class=" " id="school">
    <div  class="school-b" >
        <div class="item">
            <img src="{{asset('frontend/assets/images/Staff Banner-min.jpg')}}" alt="Atmiya" >
        </div>
    </div>
</section>
<!--  Site Services Features Block End  -->

<!-- SUB-BANNER START -->
<section class="pb-95" id="sub-banner"  >
    <div class="container" >
        <div class="sub-banner-block center-sm">
            <div class="row mlr_-20 mtb-60">
                <div class="col-lg-6 col-12 plr-20 about-details ">
                    <p class="introduction">Benjamin Franklin once said: “Tell me and I forget, teach me and I may remember, involve me and I learn</p>
                    <p class="introduction">In today’s increasingly creative world, new ideas are sprung nearly everyday. We try to adopt creative teaching learning approach to get our students engaged on a deeper level. .</p>
                    <div class="title">
                        <h5>We Offer:</h5>
                        <div>
                            <ul>
                                <li><img src="{{asset('frontend/assets/images/true.png')}}" alt="">  Well designed, spacious air conditioned class-room with classy furniture and large playground.</li>
                                <li><img src="{{asset('frontend/assets/images/true.png')}}" alt="">  Smart panels in all classrooms for creative learning and interactive atmosphere.</li>
                                <li><img src="{{asset('frontend/assets/images/true.png')}}" alt="">  Open-Ended Projects, Team Building, Field Work, Brain Storming, Role Play are some of the techniques we strive to implement towards creative approach.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 plr-20">
                    <div class="main-form">
                        <form action="{{route('admin.enquiry.store')}}" method="POST" name="enquiryForm" id="enquiryForm">
                            @csrf
                            @if(session('success'))
                                <div class="alert alert-success" id="success-alert">
                                    {{ session('success') }}
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function () {
                                        setTimeout(function () {
                                            const alert = document.getElementById("success-alert");
                                            if (alert) {
                                                alert.style.transition = "opacity 0.5s ease-out";
                                                alert.style.opacity = "0";
                                                setTimeout(() => alert.remove(), 500); // Remove from DOM after fade
                                            }
                                        }, 5000);
                                    });
                                </script>

                            @endif
                            <div class="row">
                                <div class="col-md-12 mb-30">
                                    <input type="text"  placeholder="Your Name" name="name" value="{{old('name')}}">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-30">
                                    <input type="tel"  placeholder="Your Number" name="phone" id="phone" value="{{old('phone')}}">
                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-30">
                                    <input type="email"  placeholder="Your Email" name="email" id="email" value="{{old('email')}}">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-30">
                                    <textarea  placeholder="Your Message" rows="3" cols="30" name="message">{{old('message')}}</textarea>
                                    @error('message')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div >
                                        <button type="submit" name="submit" class="btn btn-color">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</section>
    <br/>
@endsection

@section('footer_script')

    <script>
        $(document).ready(function(){
            $('input[name="phone"]').mask('0000000000');
        });
        $('#email').on('keydown', function (e) {
            if (e.which === 32) {
                e.preventDefault();
            }
        });
        $.validator.addMethod("regexEmail", function (value, element) {
            let regex = /^[a-zA-Z][a-zA-Z0-9]*@[a-zA-Z]+\.[a-zA-Z]{2,}$/;
            return this.optional(element) || regex.test(value);
        }, "Email must start with a letter, and contain only letters and digits before @. Domain and TLD must be letters only.");

        $('#enquiryForm').validate({
            errorClass: 'text-danger',
            rules: {
                name:{
                    required: true,
                },
                email: {
                    required: true,
                    regexEmail: true
                },
                phone:{
                    required: true,
                },
                message:{
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Name is required.",

                },

                email: {
                    required: "Email is required.",
                    regexEmail: "Please enter a valid email address."
                },
                phone: {
                    required: "Phone number is required.",

                },
                message: {
                    required: "Message is required.",

                },
            }
        });
    </script>
@endsection
