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
                                <h1 class="banner-title">Academics</h1>
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
                        <th scope="col">Description</th>
                        <th scope="col">Download / View</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>FEE STRUCTURE OF SCHOOL </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/Fees Structure.pdf')}}" target="_blank">Download</a></td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>ANNUAL ACADEMIC CALANDER  </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/Yearly Planner.pdf')}}" target="_blank">Download</a></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS  </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/PTA.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>LAST THREE-YEAR RESULT OF THE BOARD EXAMINATION AS PERAPPLICABLILITY  </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/Last 3 Years Result.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC) </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/SMC.PDF')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>COPY OF THE Teacher's Details</td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/staff statement.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection
