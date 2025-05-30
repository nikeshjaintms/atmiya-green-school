<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Atmiya Green School - Bharuch</title>
    <!-- SEO Meta
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
    ================================================== -->

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/fotorama.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/responsive.css')}}">
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('frontend/assets/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/assets/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/assets/images/apple-touch-icon-114x114.png')}}">


</head>

<body class="homepage home">
<div class="se-pre-con"></div>
<div class="main">
</div>

@include('layouts.header')
@yield('content')
@include('layouts.footer')
@include('layouts.footer_script')
@yield('footer_script')

</body>
</html>
