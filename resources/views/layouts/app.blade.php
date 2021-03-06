<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Sip Creative Galaxy</title>
    <meta name="description" content="All you need to know about SiP Creative Galaxy. What we do and who we are.">
    <meta property="og:title" content="sip creative galaxy">
    <meta property="og:description" content="All you need to know about SiP Creative Galaxy. What we do and who we are.">
    <meta name="keywords" content="SiP, Sip creative galaxy, creative, galaxy, storytelling, sstoryteller">

    <meta name="twitter:title" content="SiP Creative Galaxy">
    <meta name="twitter:description" content="All you need to know about SiP Creative Galaxy. What we do and who we are.">
    <meta name="author" content="">
    <meta name="google-site-verification" content="2zoVCXV7db8h7kPRHygGAaWrARm2gHTVl7bAczo7Ho8" />

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">

    <!-- Fontawesome
    ==================================================== -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script defer src="{{ asset('js/fontawesome/all.min.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

</head>

<body id="top">


<!-- preloader
================================================== -->
<div id="preloader"> {{--todo: make preloader--}}
    <div id="loader" class="dots-pulse">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
@include('layouts.header-guest')
@yield('content')

<!-- Java Script
================================================== -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
