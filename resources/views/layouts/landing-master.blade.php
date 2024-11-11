<!DOCTYPE html>
<html lang="en" class="h-full" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed">

    <head>
  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="description" content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
        <meta name="keywords" content="laravel template, laravel, laravel admin, laravel admin template, dashboard, admin panel template, laravel framework, tailwind, admin template, laravel admin panel, admin, laravel dashboard, dashboard for laravel, admin panel for laravel, laravel tailwind, tailwind dashboard.">

		<!-- TITLE -->
        <title> Valex - Laravel Tailwind Admin Template </title>

        <!-- Favicon -->
        <link rel="icon" href="{{asset('build/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/iconfonts/icons.css')}}" rel="stylesheet">

        @include('layouts.components.landing.styles')
        
        <!-- APP CSS & APP SCSS -->
        @vite(['resources/sass/app.scss' ])

        @yield('styles')

    </head>

    <body class="landing-body">

        <!-- Switcher -->
        @include('layouts.components.landing.switcher')
        <!-- End switcher -->

        <div class="landing-page-wrapper relative">

            <!-- Main-Header -->
            @include('layouts.components.landing.main-header')
            <!-- End Main-Header -->

            <!-- Main-Sidebar -->
            @include('layouts.components.landing.main-sidebar')
            <!-- End Main-Sidebar -->

            <!-- Start::main-content -->
            <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">

                @yield('content')

            </div>
            <!-- End::main-content -->
                
        </div>
        <!--app-content closed-->

        @yield('modals')  

        <!-- SCRIPTS -->
        @include('layouts.components.landing.scripts')        
      
    </body> 

</html>
