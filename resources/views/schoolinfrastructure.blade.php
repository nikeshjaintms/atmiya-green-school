
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
                                <h1 class="banner-title">School Infrastructure</h1>
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
<section class="pb-95" id="sub-banner" >
    <div class="ser-feature-block">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Information</th>
                        <th scope="col">Details</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>TOTAL  CAMPUS AREA OF THE SCHOOL (IN SQ.M.)</td>
                        <td>8300 SQ.M.</td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>NO. AND SIZE OF THE CLASS ROOMS (IN SQ.M.)</td>
                        <td>18 CLASSROOMS EACH 46 SQ.M.</td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ.M.)</td>
                        <td>5 LABS EACH 46 SQ.M.</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>INTERNET FACILITY (Y/N)</td>
                        <td>YES</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>NO. OF GIRLS TOILETS</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>NO. OF BOYS TOILETS</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL</td>
                        <td><a href="https://www.youtube.com/watch?v=jSTPUpg8tQA" target="_blank">Click Here</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection
