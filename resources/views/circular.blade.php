
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
                                    <h1 class="banner-title">Circulars</h1>
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
                            <th scope="col">Sr No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Date</th>
                            <th scope="col">Download / View</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($circulars as $index=> $circular)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{ $circular->title }}</td>
                                <td>{{ \Carbon\Carbon::parse($circular->date)->format('d-m-Y') }}</td>
                                <td>
                                    @php
                                        $files = json_decode($circular->circular_file, true) ?? [];
                                    @endphp
                                    @foreach($files as $index => $fileUrl)
                                        <a href="{{ route('circular.download', [$circular->id, $index]) }}" target="_blank">
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
