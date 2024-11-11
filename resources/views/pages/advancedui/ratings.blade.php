
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Ratings</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Advanced Ui <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Ratings 
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
                        <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                <div class="box-title">
                                        Basic Rater
                                </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[.875rem] mb-0 font-semibold">Show Some <span class="text-danger">❤</span> with rating :</p>
                                        <div id="rater-basic"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        5 star rater with steps
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[.875rem] mb-0 font-semibold">Dont forget to rate the product :</p>
                                        <div id="rater-steps"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Custom messages
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[.875rem] mb-0 font-semibold">Your rating is much appreciated👏 :</p>
                                        <div id="custom-messages"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Unlimited number of stars readOnly
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[.875rem] mb-0 font-semibold">Thanks for rating :</p>
                                        <div id="stars-unlimited"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        5 Star rater with custom isBusyText and simulated backend
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[.875rem] mb-0 font-semibold">Thanks for rating :</p>
                                        <div id="stars-busytext"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        On hover event
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[.875rem] mb-0 font-semibold">Please give your valuable rating :</p>
                                        <div class="flex flex-wrap items-center">
                                            <div id="stars-hover"></div>
                                            <span class="live-rating badge bg-success/10 text-success ms-4">
                                                1
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Clear/reset rater
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[.875rem] mb-0 font-semibold">Thank You so much for your support :</p>
                                        <div class="flex flex-wrap items-center">
                                            <div id="rater-reset"></div>
                                            <button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-danger !ms-4" id="rater-reset-button">
                                                <i class="ri-restart-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                <div class="box-title">
                                    Button
                                </div> 
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[.875rem] mb-0 font-semibold">Button example with star shapes :</p>
                                        <!-- Rating -->
                                        <div class="flex items-center">
                                            <button type="button" class="size-5 inline-flex justify-center items-center text-2xl rounded-full text-warning disabled:opacity-50 disabled:pointer-events-none dark:text-yellow-500">
                                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                            </button>
                                            <button type="button" class="size-5 inline-flex justify-center items-center text-2xl rounded-full text-warning disabled:opacity-50 disabled:pointer-events-none dark:text-yellow-500">
                                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                            </button>
                                            <button type="button" class="size-5 inline-flex justify-center items-center text-2xl rounded-full text-warning disabled:opacity-50 disabled:pointer-events-none dark:text-yellow-500">
                                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                            </button>
                                            <button type="button" class="size-5 inline-flex justify-center items-center text-2xl rounded-full text-warning disabled:opacity-50 disabled:pointer-events-none dark:text-yellow-500">
                                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                            </button>
                                            <button type="button" class="size-5 inline-flex justify-center items-center text-2xl rounded-full text-gray-300 hover:text-warning disabled:opacity-50 disabled:pointer-events-none dark:text-gray-600 dark:hover:text-yellow-500">
                                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                            </button>
                                        </div>
                                        <!-- End Rating -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Custom symbol with button
                                    </div> 
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[.875rem] mb-0 font-semibold">Custom symbol heart shapes with button :</p>
                                        <!-- Rating -->
                                        <div class="flex items-center">
                                            <button type="button" class="size-5 inline-flex justify-center items-center text-2xl rounded-full !text-danger disabled:opacity-50 disabled:pointer-events-none dark:text-danger">
                                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                            </svg>
                                            </button>
                                            <button type="button" class="size-5 inline-flex justify-center items-center text-2xl rounded-full !text-danger disabled:opacity-50 disabled:pointer-events-none dark:text-danger">
                                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                            </svg>
                                            </button>
                                            <button type="button" class="size-5 inline-flex justify-center items-center text-2xl rounded-full !text-danger disabled:opacity-50 disabled:pointer-events-none dark:text-danger">
                                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                            </svg>
                                            </button>
                                            <button type="button" class="size-5 inline-flex justify-center items-center text-2xl rounded-full !text-danger disabled:opacity-50 disabled:pointer-events-none dark:text-danger">
                                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                            </svg>
                                            </button>
                                            <button type="button" class="size-5 inline-flex justify-center items-center text-2xl rounded-full text-gray-300 hover:!text-danger disabled:opacity-50 disabled:pointer-events-none dark:text-gray-600 dark:hover:text-danger">
                                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                            </svg>
                                            </button>
                                        </div>
                                        <!-- End Rating -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Static
                                    </div> 
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between">
                                        <p class="text-[.875rem] mb-0 font-semibold">Static rating :</p>
                                        <!-- Rating -->
                                        <div class="flex items-center">
                                            <svg class="flex-shrink-0 size-5 text-warning dark:text-yellow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                            <svg class="flex-shrink-0 size-5 text-warning dark:text-yellow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                            <svg class="flex-shrink-0 size-5 text-warning dark:text-yellow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                            <svg class="flex-shrink-0 size-5 text-gray-300 dark:text-gray" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                            <svg class="flex-shrink-0 size-5 text-gray-300 dark:text-gray" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </div>
                                        <!-- End Rating -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Rate with emoji
                                    </div> 
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-col items-center justify-center content-center">
                                        <p class="text-[.875rem] mb-0 font-semibold">Did this answer your question?</p>
                                        <!-- Rate review -->
                                        <div class="text-center">
                                            <!-- Rating -->
                                            <div class="mt-2 flex justify-center items-center">
                                            <button type="button" class="size-10 inline-flex justify-center items-center text-2xl rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                😔
                                            </button>
                                            <button type="button" class="size-10 inline-flex justify-center items-center text-2xl rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                😐️
                                            </button>
                                            <button type="button" class="size-10 inline-flex justify-center items-center text-2xl rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                🤩
                                            </button>
                                            </div>
                                            <!-- End Rating -->
                                        </div>
                                        <!-- End Rate review -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Rate with thumb buttons
                                    </div> 
                                </div>
                                <div class="box-body">
                                    <div class="mt-2 flex justify-center items-center gap-x-2">
                                        <p class="text-[.875rem] mb-0 font-semibold">Was this page helpful?</p>
                                        <!-- Rating -->
                                        <div>
                                            <button type="button" class="py-2 px-3 mb-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-defaultborder dark:border-defaultborder/10 bg-white dark:bg-bodybg disabled:opacity-50 disabled:pointer-events-none">
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 10v12"/><path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z"/></svg>
                                            Yes
                                            </button>
                                            <button type="button" class="py-2 px-3 mb-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-defaultborder dark:border-defaultborder/10 bg-white dark:bg-bodybg disabled:opacity-50 disabled:pointer-events-none">
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 14V2"/><path d="M9 18.12 10 14H4.17a2 2 0 0 1-1.92-2.56l2.33-8A2 2 0 0 1 6.5 2H20a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.76a2 2 0 0 0-1.79 1.11L12 22h0a3.13 3.13 0 0 1-3-3.88Z"/></svg>
                                            No
                                            </button>
                                        </div>
                                        <!-- End Rating -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->

@endsection

@section('scripts')
	
        <!-- Rater JS -->
        <script src="{{asset('build/assets/libs/rater-js/index.js')}}"></script>

        <!-- Internal Ratings JS -->
        @vite('resources/assets/js/ratings.js')

@endsection
