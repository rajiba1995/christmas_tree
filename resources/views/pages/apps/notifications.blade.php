
@extends('layouts.master')

@section('styles')

        <!-- Notifications Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/awesome-notifications/style.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Notification</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Apps <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Notification 
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
                    <div class="col-span-12 lg:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Basic Notification</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary" id="basic">Basic Notification</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Async Notification With Error Message</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary" id="async-error">Async Notification</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Async Notification With Success Message</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary" id="async-success">Async Notification</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">PopUp Notification</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary" id="popup">Notification</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 lg:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Info Notification</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn  ti-btn-info" id="info">Info Notification</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Success Notification</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn  ti-btn-success" id="success">Success Notification</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Warning Notification</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-warning" id="warning">Warning Notification</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Error Notification</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-danger" id="error">Error Notification</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 lg:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Confirmation Notification</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn  ti-btn-secondary" id="confirm">Notification</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Async Block With Error Notification</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary" id="async">Notification</button>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Async Block With Success Notification</h5>
                        </div>
                        <div class="box-body text-center">
                            <button type="button" class="ti-btn ti-btn-primary" id="async-block">Notification</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-3 -->

@endsection

@section('scripts')
	
        <!-- Rating JS -->
        <script src="{{asset('build/assets/libs/awesome-notifications/index.var.js')}}"></script>
        @vite('resources/assets/js/notifications.js')

@endsection
