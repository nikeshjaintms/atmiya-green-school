
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
                                <h1 class="banner-title">Documents and information</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                        <td>COPIES OF AFFILIATION LETTER/UPGRADATION LETTER AND RECENT EXTENSTION OF AFFILIATION,IF ANY </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/AffiliationLetter.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>COPY OF NO OBJECTION CERTIFICATE(NOC),ISSUED,IF APPLICABLE,BY THE STATE GOVERNMENT  </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/001NOC.pdf')}}" target="_blank">Download</a></td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT, 2009, AND IT'S RENEWAL IF APPLICABLE </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/Recognitioncertificate.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/4. Buildind Safety.PDF')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COPETENT AUTHORITY  </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/Firesafety.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>COPIES OF VALID WATER HEALTH AND SANITATION CERTIFICATES  </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/6. H & S.PDF')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>COPIES OF SOCIETY/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE, AS PER APPLICABLE </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/003TrustCertificate.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>COPY OF THE DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATION OR SELF CERTIFICATION BY SCHOOL  </td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/DEO-CERTIFICATESUBMITTEDBYTHESCHOOLFORAFFILIATION.pdf')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>COPY OF THE Details of Counsellor and Wellness Teacher</td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/Sapna Nayak-Counselor.PDF')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>COPY OF THE Land Certificate</td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/10.LandCertificate.PDF')}}" target="_blank">Download</a></td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Details of Special Educator</td>
                        <td><a href="{{asset('frontend/assets/cbseinfo/documentsandInformation/Dharmesh Vyas-Special Educator.pdf')}}" target="_blank">Download</a></td>

                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection
