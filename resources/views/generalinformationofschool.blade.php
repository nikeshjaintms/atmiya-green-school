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
                                <h1 class="banner-title">General Information</h1>
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
<!--  Site Services Features Block End  -->
<section class="pb-95 pb-180" id="sub-banner" >
    <div class="ser-feature-block">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Sr No</th>
                        <th scope="col">Information</th>
                        <th scope="col">Details</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>NAME OF THE SCHOOL </td>
                        <td>ATMIYA GREEN SCHOOL</td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>AFFILIATION NO</td>
                        <td>430460</td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>SCHOOL CODE</td>
                        <td>11401</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>COMPLETE ADDRESS WITH PIN CODE</td>
                        <td>MANIBA CAMPUS, NH NO. 8,NR.CABLE BRIDGE,ZADESHWAR, BHARUCH,392011 GUJARAT.
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>PRINCIPAL NAME & QUALIFICATION</td>
                        <td>MR. KRISHAN CHANDRA UPADHYAY</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>SCHOOL MAIL ID </td>
                        <td>atmiya_school@yahoo.com</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>CONTACT NO </td>
                        <td>9714994544/45</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection
