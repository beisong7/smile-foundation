<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smile Planet Foundation</title>
    <!-- FAVICON LINK -->
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <!-- STYLESHEETS -->
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/bootstrap-theme.min.css') }}">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/font-awesome/css/font-awesome.min.css') }}"/>
    <!-- MAGNIFIC LIGHT BOX -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/magnific/magnific-popup.css') }}">
    <!-- CAROUSEL STYLE LINK -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/owl-carousel/carousel.css') }}">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}


</head>
<body>

    @include('includes.topnav')
    @yield('content')
    @include('layouts.script')
</body>
</html>
