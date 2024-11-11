
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/classic.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/monolith.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Color Pickers</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Form Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Color Pickers 
                            </a> </li>
                        </ol>
                        </nav>
                    </div>

                    <div class="flex xl:my-auto right-content align-items-center">
                        <div class="pe-1 xl:mb-0">
                        <button type="button" class="ti-btn ti-btn-info-full text-white ti-btn-icon me-2 btn-b !mb-0">
                            <i class="mdi mdi-filter-variant"></i>
                        </button>
                        </div>
                        <div class="pe-1 xl:mb-0">
                        <button type="button" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0">
                            <i class="mdi mdi-star"></i>
                        </button>
                        </div>
                        <div class="pe-1 xl:mb-0">
                        <button type="button" class="ti-btn ti-btn-warning-full text-white  ti-btn-icon me-2 !mb-0">
                            <i class="mdi mdi-refresh"></i>
                        </button>
                        </div>
                        <div class="xl:mb-0">
                        <div class="hs-dropdown ti-dropdown">
                            <button class="ti-btn ti-btn-primary-full text-white dropdown-toggle !mb-0" type="button" id="dropdownMenuDate"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            14 Aug 2019 <i class="bi bi-chevron-down text-[.6rem] font-semibold"></i>
                            </button>
                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden !z-[100]" aria-labelledby="dropdownMenuDate">
                            <li><a class="ti-dropdown-item" href="javascript:void(0);">2015</a></li>
                            <li><a class="ti-dropdown-item" href="javascript:void(0);">2016</a></li>
                            <li><a class="ti-dropdown-item" href="javascript:void(0);">2017</a></li>
                            <li><a class="ti-dropdown-item" href="javascript:void(0);">2018</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title"> Tailwind colorpicker </h5>
                                </div>
                                <div class="box-body">
                                    <input type="color" class="p-1 h-10 w-10 block bg-white border border-gray-200 cursor-pointer rounded-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10" id="hs-color-input" value="#5a66f1" title="Choose your color">
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title"> Color Picker </h5>
                                </div>
                                <div class="box-body">
                                    <div class="">
                                        <div class="flex justify-between">
                                            <div>
                                                <div class="theme-container"></div>
                                                <div class="pickr-container text-center"></div>
                                            </div>
                                            <div>
                                                <div class="theme-container1"></div>
                                                <div class="pickr-container1 text-center"></div>
                                            </div>
                                            <div>
                                                <div class="theme-container2"></div>
                                                <div class="pickr-container2 text-center"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
        
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

        <!-- Color Picker JS -->
        @vite('resources/assets/js/color-picker.js')

@endsection
