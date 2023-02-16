<!DOCTYPE html>
<!--
Template Name: Smileville Dental Services - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $dark_mode ? 'dark' : '' }}{{ $color_scheme != 'default' ? ' ' . $color_scheme : '' }}">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('build/assets/images/logo.svg') }}" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Smileville Dental Services admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Smileville Dental Services Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    

    @yield('head')

    <!-- BEGIN: CSS Assets-->
    @vite('resources/css/app.css')
    <!-- END: CSS Assets-->
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.tailwindcss.com"></script>
<script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
<!-- END: Head -->

<body class="py-5 md:py-0">
    @yield('content')
    @include('../layout/components/dark-mode-switcher')
    @include('../layout/components/main-color-switcher')

    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
    @vite('resources/js/app.js')
    <!-- END: JS Assets-->

    @yield('script')

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>






























































{{-- @extends('../layout/' . $layout)

@section('subhead')
    <title>Add Patient</title>
@endsection

@section('subcontent') --}}
    {{-- @include('partials._hero') --}}
    {{-- @include('partials._features') --}}
{{-- @endsection --}}







{{-- @extends('../layout/' . $layout)

@section('subhead')
    <title>Home - Smileville Dental Services</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        @include('partials._hero')
        @include('partials._features')
    </div>
@endsection --}}
