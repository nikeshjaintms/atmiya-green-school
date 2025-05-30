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
                                <h1 class="banner-title">CONTACT US</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER END -->
<section class="ptb-95" id="sub-banner">
    <div class="ser-feature-block">
        <div class="container">
            <div class="row ">
                <div class="col-xl-3 col-lg-3 col-md-12 col-12 p-0 mb-xs-30 border center-sm">
                    <div class=" ptb-30 addres">
                        <div class="add-icon">
                            <img src="{{asset('frontend/assets/images/addrs-icon.png')}}" alt="">
                        </div>
                        <div class="add-detail">
                            <div class="ser-title">"Maniba Campus"</div>
                            <div class="ser-subtitle">NH NO.8, Nr.Cable Bridge,Zadeshwar, Bhruch-392011</div>
                        </div>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-3 col-md-6 col-12 p-0 mb-xs-30 border center-sm">
                    <div class=" ptb-30 call">
                        <div class="call-icon">
                            <img src="{{asset('frontend/assets/images/call.png')}}" alt="">
                        </div>
                        <div class="call-detail">
                            <div class="ser-subtitle">+ 91 971499 4544</div>
                            <div class="ser-subtitle">+ 91 971499 4545 </div>
                            <div class="ser-subtitle">atmiya_school@yahoo.com</div>
                            <div class="ser-subtitle"> <a href="http://atmiyagreenschool.com/schoolinfrastructure.html">atmiyagreenschool.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12 p-0 mb-xs-30 border center-sm">
                    <div class=" ptb-30 time">
                        <div class="time-icon ">
                            <img src="{{asset('frontend/assets/images/time.png')}}" alt="">
                        </div>
                        <div class="time-detail">
                            <div class="ser-title">Monday – Saturday</div>
                            <div class="ser-title"></div>
                            <div class="ser-subtitle">8:00 AM – Open </div>
                            <div class="ser-subtitle">5:00 PM – Close</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-12 p-0 mb-xs-30 border">
                    <div class=" ptb-30 social">
                        <div class="footer_social align-center">
                            <ul class="social-icon">
                                <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                                <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                                <li><a title="Youtube" class="youtube"><i class="fa fa-youtube-square"> </i></a></li>
                                <li><a title="Instagram" class="instagram"><i class="fa fa-instagram"> </i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-80" id="sub-banner">
    <div class="container">
        <div class="em-background">
            <div class="row">
                <div class="col-12">
                    <div class="heading-part align-center mb-30">
                        <h2 class="main_title  heading">We Would Love To Hear From You!</h2>
                        <p class="c-sub">If you have any questions, please call us or fill in the form below and we will get back to you very soon.</p>
                    </div>
                </div>
            </div>
            <div class="main-form">
                <form action="{{route('admin.contact.store')}}" method="POST" name="contactForm" id="contactForm">
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
                        <div class="col-md-6 mb-30">
                            <input type="text"  placeholder="Your Name" value="{{old('name')}}" name="name">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-30">
                            <input type="tel"  placeholder="Your Number" value="{{old('phone')}}" name="phone" class="phone">
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-30">
                            <input type="email"  placeholder="Your Email" value="{{old('email')}}" name="email" id="email">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 mb-30">
                            <textarea  placeholder="Your Message" rows="3" cols="30"  name="message" >{{ old('message') }}</textarea>
                            @error('message')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="align-center">
                                <button type="submit" name="submit" class="btn btn-color">Submit</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


<section>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.53632154696!2d73.03931316971395!3d21.720724037481382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0212324335741%3A0x7dce15a66db2c86b!2sAtmiya%20Green%20School!5e0!3m2!1sen!2sin!4v1569914179542!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>
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

     $('#contactForm').validate({
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
