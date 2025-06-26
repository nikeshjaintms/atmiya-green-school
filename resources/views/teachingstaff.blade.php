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
                                <h1 class="banner-title">Staff (Teaching)</h1>
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
                        <td>PRINCIPAL</td>
                        <td>Mr. Krishan Chandra Upadhyay</td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>TOTAL NO. OF TEACHERS</td>
                        <td>25</td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>PGT</td>
                        <td>00</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>TGT</td>
                        <td>06    </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>PRT</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>PTI</td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>LIBRARIAN</td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>OTHER TEACHER</td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>DETAILS OF SPECIAL EDUCATOR</td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>DETAILS OF COUNSELLOR AND WELNESS TEACHERS</td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>TEACHERS SECTION RATIO</td>
                        <td>1.5</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection
