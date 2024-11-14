<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="light">

    <head>
  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="description" content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
        <meta name="keywords" content="laravel template, laravel, laravel admin, laravel admin template, dashboard, admin panel template, laravel framework, tailwind, admin template, laravel admin panel, admin, laravel dashboard, dashboard for laravel, admin panel for laravel, laravel tailwind, tailwind dashboard.">

		<!-- TITLE -->
        <title>@yield('title', 'Valex - Laravel Tailwind Admin Template')</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('build/assets/images/brand-logos/favicon.ico')}}">

        <!-- Main Theme Js -->
        <script src="{{asset('build/assets/main.js')}}"></script>

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/iconfonts/icons.css')}}" rel="stylesheet">
      
        <!-- APP CSS & APP SCSS -->
        @vite(['resources/sass/app.scss' ])

        @include('layouts.components.styles')
        @yield('styles')
        @livewireStyles
    </head>

    <body class="">

        <!-- Switcher -->
        @include('layouts.components.switcher')
        <!-- End switcher -->

        <!-- Loader -->
        <div id="loader">
            <img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
        </div>
        <!-- Loader -->

        <div class="page">

            <!-- Main-Header -->
            @include('layouts.components.main-header')
            <!-- End Main-Header -->

            <!-- Country-selector modal -->
            @include('layouts.components.modal')
            <!-- End Country-selector modal -->

            <!--Main-Sidebar-->
            @include('layouts.components.main-sidebar')
            <!-- End Main-Sidebar-->

            <!-- Start::content  -->
            <div class="content">
                <!-- Start::main-content -->
                <div class="main-content">
                    <div class="box custom-box mt-2 mb-0">
                        @if(session()->has('message'))
                            <div class="alert alert-success bg-green-500 text-white p-4 rounded-md mb-4">
                                {{ session('message') }}
                            </div>
                        @endif

                        @if(session()->has('error'))
                            <div class="alert alert-danger bg-red-500 text-white p-4 rounded-md mb-4">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if(session()->has('message'))
                            <div class="alert alert-success !border-success/10 flex items-center" role="alert" id="success-alert">
                                <svg class="sm:flex-shrink-0 me-2 fill-success" xmlns="http://www.w3.org/2000/svg"
                                    height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                    <path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
                                    <path
                                        d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
                                </svg>
                                <div>
                                    {{ session('message') }}
                                </div>
                            </div>
                        @endif
                    
                        @if(session('success'))
                        <div class="alert alert-success !border-success/10 flex items-center" role="alert" id="success-alert">
                            <svg class="sm:flex-shrink-0 me-2 fill-success" xmlns="http://www.w3.org/2000/svg"
                                height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                <path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
                            </svg>
                            <div>
                               {{session('success')}}
                            </div>
                        </div>
                        @elseif(session('warning'))
                        <div class="alert alert-warning flex items-center" role="alert" id="warning-alert">
                            <svg class="sm:flex-shrink-0 me-2 fill-warning" xmlns="http://www.w3.org/2000/svg"
                                enable-background="new 0 0 24 24" height="1.5rem" viewBox="0 0 24 24"
                                width="1.5rem" fill="#000000">
                                <g>
                                    <rect fill="none" height="24" width="24" />
                                </g>
                                <g>
                                    <g>
                                        <g>
                                            <path d="M12,5.99L19.53,19H4.47L12,5.99 M12,2L1,21h22L12,2L12,2z" />
                                            <polygon points="13,16 11,16 11,18 13,18" />
                                            <polygon points="13,10 11,10 11,15 13,15" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div>
                              {{session('warning')}}
                            </div>
                        </div>
                        @elseif(session('error'))
                        <div class="alert alert-danger flex items-center" role="alert" id="error-alert">
                            <svg class="sm:flex-shrink-0 me-2 fill-danger" xmlns="http://www.w3.org/2000/svg"
                                enable-background="new 0 0 24 24" height="1.5rem" viewBox="0 0 24 24"
                                width="1.5rem" fill="#000000">
                                <g>
                                    <rect fill="none" height="24" width="24" />
                                </g>
                                <g>
                                    <g>
                                        <g>
                                            <path
                                                d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z" />
                                            <rect height="6" width="2" x="11" y="7" />
                                            <rect height="2" width="2" x="11" y="15" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div>
                            {{session('error')}}
                            </div>
                        </div>
                        @endif
                    </div>
                    @yield('content')
                </div>
            </div>
            <!-- End::content  -->

            <!-- Footer opened -->
            @include('layouts.components.footer')
            <!-- End Footer -->

            @yield('modals')  

        </div>

        <!-- SCRIPTS -->
        @include('layouts.components.scripts')

        <!-- Sticky JS -->
        <script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- Custom-Switcher JS -->
        @vite('resources/assets/js/custom-switcher.js')

        <!-- APP JS-->
		@vite('resources/js/app.js')       

        
        <!-- END SCRIPTS -->
        @livewireScripts
    </body> 

</html>
