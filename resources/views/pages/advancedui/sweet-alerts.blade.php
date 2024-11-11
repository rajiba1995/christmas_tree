
@extends('layouts.master')

@section('styles')

        <!-- Sweet Alert Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">

        <!-- Animate Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/animate.css/animate.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Sweet Alerts</h5>
                            <nav>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                    href="javascript:void(0);"> Advanced Ui <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                                </a> </li>
                                <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                    href="javascript:void(0);">Sweet Alerts 
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
                    <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header border-b-0">
                            <h5 class="box-title">Basic Sweetalert</h5>
                        </div>
                        <div class="box-body flex justify-center">
                            <button type="button" class="ti-btn ti-btn-primary show-example-btn" aria-label="Try me! Example: A basic message"
                            id="basic">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Danger Sweetalert</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary"
                            aria-label="Try me! Example: A modal with a title, an error icon, a text, and a footer"
                            id="error-sweetalert">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Image Sweetalert</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary"
                            aria-label="Try me! Example: A modal window with a long content inside" id="image-sweetalert">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Sweetalert With 3Buttons</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary" aria-label="Try me! Example: A dialog with three buttons"
                            id="sweetalert2">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Sweetalert With Animation</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary" aria-label="Try me!"
                            id="sweetalert3">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Sweetalert style 1</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary" aria-label="Try me! Example: A title with a text under"
                            id="sweetalert1">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Sweetalert style-2</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                            aria-label="Try me! Example: A custom positioned dialog" id="confirm-btn">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Sweetalert style-3</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                            aria-label="Try me! Example: A custom positioned dialog" id="sweetalert4">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Top-Right Sweetalert</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                            aria-label="Try me! Example: A custom positioned dialog" id="top-end">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Top-Left Sweetalert</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                            aria-label="Try me! Example: A custom positioned dialog" id="top-start">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Bottom-Left Sweetalert</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                            aria-label="Try me! Example: A custom positioned dialog" id="bottom-start">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Bottom-Right Sweetalert</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                            aria-label="Try me! Example: A custom positioned dialog" id="bottom-end">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">A message with customization</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                            aria-label="Try me! Example: A custom positioned dialog" id="customized-btn">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Timer Sweetalert</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary show-example-btn"
                            aria-label="Try me! Example: A message with auto close timer" id="timer-btn">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Ajax loader Sweetalert</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary show-example-btn" aria-label="Try me! Example: AJAX request"
                            id="ajax-btn">
                            Try me!
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Sweetalert JS -->
        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
        @vite('resources/assets/js/swetalert.js')

@endsection
