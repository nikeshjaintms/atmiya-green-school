@extends('layouts.layout')
<!-- BANNER STRAT -->
@section('content')
<div class="banner">
    <div class="main-banner">
        <div class="banner-1"> <img src="{{asset('frontend/assets/images/admi_banner.jpg')}}" alt="Atmiya">
            <div class="banner-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-detail-inner align-center">
                                <h1 class="banner-title">ADMISSION PROCESS</h1>
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

<!--tab_content Start -->
<section class="ptb-80">
    <div class="container">
        <div class="product-detail-tab">
            <div class="row justify-content-md-center">
                <div class="col-lg-10">
                    <div class="banner-detail-inner align-center">
                        <h2>Admission Process</h2>
                        <p class="heding-detail"> The admission procedure at Atmiya is made simple and straight forward in order to ensure that all prospective students and their parents enjoy a stress free experience. </p>
                        <p><a target="_blank" href="{{asset('frontend/assets/cbseinfo/documentsandInformation/Addmission.pdf')}}">Download admission Process Documents</a></p>
                    </div>
                    <div class="addmision-process pt-30">
                        <div id="tabs">
                            <ul class="nav nav-tabs">
                                <li><a class="tab-Description selected" title="Description">Admissions</a></li>
                                <!--<li><a class="tab-Product-Tags" title="Product-Tags">2 Step</a></li>-->
                                <!--<li><a class="tab-Reviews" title="Reviews">3 Step</a></li>-->
                            </ul>
                        </div>
                        <div id="items">
                            <div class="tab_content">
                                <ul>
                                    <li>
                                        <div class="items-Description selected ">
                                            <div class="Description">
                                                <p>The parents are required to visit the School Admission Office, get full inquiry about the fees and curriculum, Student needs to appear entrance test, obtain the application form on non-refundable payment of Rs. 300/-, fill out the application form and submit the same along with the required documents on or before the stipulated date. </p>
                                                <br>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--tab_content End -->
@endsection
