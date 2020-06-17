<?php
$ver = "?v=1.0.1";
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smile Planet Foundation</title>
    <!-- FAVICON LINK -->
    <link rel="shortcut icon" href="{{ url('images/icon.png') }}" type="image/x-icon">
    <!-- STYLESHEETS -->
    @include('layouts.scripts.css')

</head>
<body>
    <div class="page-wrapper">
        @include('layouts.loader')
        @include('includes.topnav')
        @yield('content')
        @include('layouts.footer')
    </div>

    @include('layouts.scripts.js')
</body>
</html>
