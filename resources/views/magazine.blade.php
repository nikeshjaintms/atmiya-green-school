
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
                                <h1 class="banner-title">School Magazine</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER END -->
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
                    @foreach($magazines as $index=> $magazine)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{ $magazine->name }}</td>
                            <td>
                                @php
                                    $files = json_decode($magazine->magazine_pdf, true) ?? [];
                                @endphp
                                @foreach($files as $index => $fileUrl)
                                    <a href="{{ route('magazine.download', [$magazine->id, $index]) }}" target="_blank">
                                        Download File
                                    </a>
                                    <br>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div>
</section>
@endsection
