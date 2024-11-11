<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

    <head>
  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="description" content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
        <meta name="keywords" content="laravel template, laravel, laravel admin, laravel admin template, dashboard, admin panel template, laravel framework, tailwind, admin template, laravel admin panel, admin, laravel dashboard, dashboard for laravel, admin panel for laravel, laravel tailwind, tailwind dashboard.">

		<!-- TITLE -->
        <title> Valex - Laravel Tailwind Admin Template </title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('build/assets/images/brand-logos/favicon.ico')}}">
    
        <!-- Authentication JS -->
        @vite('resources/assets/js/authentication-main.js')

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/iconfonts/icons.css')}}" rel="stylesheet">

        <!-- Simplebar Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/simplebar/simplebar.min.css')}}">

        <!-- Color Picker Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">

        <!-- Simplebar Css -->
        <link id="style" href="{{asset('build/assets/libs/simplebar/simplebar.min.css" rel="stylesheet')}}">

        <!-- Swiper Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

        <!-- APP CSS & APP SCSS -->
        @vite(['resources/sass/app.scss'])

        @yield('styles')

    </head>

	<body class="bg-white dark:!bg-bodybg">

        <!-- Start Switcher -->
        @include('layouts.components.custom-switcher')
        <!-- End Switcher -->

        @yield('content')

        @yield('scripts')
    
    </body>
    
</html>    
