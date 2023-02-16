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
    @include('../layout/components/mobile-menu')
    @include('../layout/components/top-bar')
    <div class="flex overflow-hidden">
        <!-- BEGIN: Side Menu -->
        @auth
        <nav class="side-nav">
            <ul>
                @foreach ($side_menu as $menuKey => $menu)
                    @if ($menu == 'devider')
                        <li class="side-nav__devider my-6"></li>
                    @else
                        <li>
                            <a href="{{ isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}" class="{{ $first_level_active_index == $menuKey ? 'side-menu side-menu--active' : 'side-menu' }}">
                                <div class="side-menu__icon">
                                    <i data-lucide="{{ $menu['icon'] }}"></i>
                                </div>
                                <div class="side-menu__title">
                                    {{ $menu['title'] }}
                                    @if (isset($menu['sub_menu']))
                                        <div class="side-menu__sub-icon {{ $first_level_active_index == $menuKey ? 'transform rotate-180' : '' }}">
                                            <i data-lucide="chevron-down"></i>
                                        </div>
                                    @endif
                                </div>
                            </a>
                            @if (isset($menu['sub_menu']))
                                <ul class="{{ $first_level_active_index == $menuKey ? 'side-menu__sub-open' : '' }}">
                                    @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                        <li>
                                            <a href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}" class="{{ $second_level_active_index == $subMenuKey ? 'side-menu side-menu--active' : 'side-menu' }}">
                                                <div class="side-menu__icon">
                                                    <i data-lucide="activity"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    {{ $subMenu['title'] }}
                                                    @if (isset($subMenu['sub_menu']))
                                                        <div class="side-menu__sub-icon {{ $second_level_active_index == $subMenuKey ? 'transform rotate-180' : '' }}">
                                                            <i data-lucide="chevron-down"></i>
                                                        </div>
                                                    @endif
                                                </div>
                                            </a>
                                            @if (isset($subMenu['sub_menu']))
                                                <ul class="{{ $second_level_active_index == $subMenuKey ? 'side-menu__sub-open' : '' }}">
                                                    @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                        <li>
                                                            <a href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}" class="{{ $third_level_active_index == $lastSubMenuKey ? 'side-menu side-menu--active' : 'side-menu' }}">
                                                                <div class="side-menu__icon">
                                                                    <i data-lucide="zap"></i>
                                                                </div>
                                                                <div class="side-menu__title">{{ $lastSubMenu['title'] }}</div>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
        @endauth
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <main>
                @include('partials._hero')
                @include('partials._features')
                @include('partials._services-offer')
                @include('../layout/components/footer')  
            </main>
        </div>
        <!-- END: Content -->
    </div>
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
