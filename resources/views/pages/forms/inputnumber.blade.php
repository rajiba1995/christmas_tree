
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Input Number</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Form Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Input Number 
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
                    <div class="col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Basic Input Number</h5>
                        </div>
                        <div class="box-body">
                            <!-- Input Number -->
                            <div class="py-2 px-3 bg-gray-100 rounded-sm dark:bg-bodybg" data-hs-input-number>
                            <div class="w-full flex justify-between items-center gap-x-5">
                                <div class="grow">
                                <input class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white" type="text" value="1" data-hs-input-number-input>
                                </div>
                                <div class="flex justify-end items-center gap-x-1.5">
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                    <i class="ri-subtract-line"></i>
                                </button>
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                    <i class="ri-add-line"></i>
                                </button>
                                </div>
                            </div>
                            </div>
                            <!-- End Input Number -->
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title"> Input style 01</h5>
                        </div>
                        <div class="box-body">
                            <!-- Input Number -->
                            <div class="py-2 px-3 bg-gray-100 rounded-sm dark:bg-bodybg" data-hs-input-number>
                            <div class="w-full flex justify-between items-center gap-x-5">
                                <div class="grow">
                                <span class="block text-xs text-gray-500 dark:text-white/70">
                                    Select quantity
                                </span>
                                <input class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white" type="text" value="1" data-hs-input-number-input>
                                </div>
                                <div class="flex justify-end items-center gap-x-1.5">
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                    <i class="ri-subtract-line"></i>
                                </button>
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                    <i class="ri-add-line"></i>
                                </button>
                                </div>
                            </div>
                            </div>
                            <!-- End Input Number -->
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Buttons vertically stacked</h5>
                        </div>
                        <div class="box-body">
                            <!-- Input Number -->
                            <div class="bg-white border border-gray-200 rounded-sm dark:bg-bodybg dark:border-white/10" data-hs-input-number>
                            <div class="w-full flex justify-between items-center gap-x-1 overflow-hidden">
                                <div class="grow py-2 px-3">
                                <span class="block text-xs text-gray-500 dark:text-white/70">
                                    Select quantity
                                </span>
                                <input class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white" type="text" value="1" data-hs-input-number-input>
                                </div>
                                <div class="flex flex-col -gap-y-px divide-y divide-gray-200 border-s border-gray-200 dark:divide-white/10 dark:border-white/10">
                                <button type="button" class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-se-lg bg-gray-50 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bodybg/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                </button>
                                <button type="button" class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-lg bg-gray-50 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bodybg/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                </button>
                                </div>
                            </div>
                            </div>
                            <!-- End Input Number -->
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Buttons horizontally stacked</h5>
                        </div>
                        <div class="box-body">
                            <!-- Input Number -->
                            <div class="bg-white border border-gray-200 rounded-sm dark:bg-bodybg dark:border-white/10" data-hs-input-number>
                            <div class="w-full flex justify-between items-center gap-x-1 overflow-hidden">
                                <div class="grow py-2 px-3">
                                <input class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white" type="text" value="1" data-hs-input-number-input>
                                </div>
                                <div class="flex items-center -gap-y-px divide-x divide-gray-200 border-s border-gray-200 dark:divide-white/10 dark:border-white/10">
                                <button type="button" class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium last:rounded-e-sm bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bodybg/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                </button>
                                <button type="button" class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium last:rounded-e-sm bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bodybg/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                </button>
                                </div>
                            </div>
                            </div>
                            <!-- End Input Number -->
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Mini Input</h5>
                        </div>
                        <div class="box-body">
                            <!-- Input Number -->
                            <div class="py-2 px-3 inline-block bg-white border border-gray-200 rounded-sm dark:bg-bodybg dark:border-white/10" data-hs-input-number>
                            <div class="flex items-center gap-x-1.5">
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                <i class="ri-subtract-line"></i>
                                </button>
                                <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" type="text" value="0" data-hs-input-number-input>
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                <i class="ri-add-line"></i>
                                </button>
                            </div>
                            </div>
                            <!-- End Input Number -->
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Pricing seats example</h5>
                        </div>
                        <div class="box-body">
                            <!-- Input Number -->
                            <div class="py-2 px-3 bg-white border border-gray-200 rounded-sm dark:bg-bodybg dark:border-white/10" data-hs-input-number>
                            <div class="w-full flex flex-wrap justify-between items-center gap-x-3">
                                <div>
                                <span class="block font-medium text-sm text-gray-800 dark:text-white">
                                    Additional seats
                                </span>
                                <span class="block text-xs text-gray-500 dark:text-white/70">
                                    $39 monthly
                                </span>
                                </div>
                                <div class="flex items-center gap-x-1.5">
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                </button>
                                <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" type="text" value="0" data-hs-input-number-input>
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                </button>
                                </div>
                            </div>
                            </div>
                            <!-- End Input Number -->
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Input disabled</h5>
                        </div>
                        <div class="box-body">
                            <!-- Input Number -->
                            <div class="py-2 px-3 bg-white border border-gray-200 rounded-sm dark:bg-bodybg dark:border-white/10" data-hs-input-number>
                            <div class="w-full flex justify-between items-center gap-x-3">
                                <input class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white" type="text" value="10" data-hs-input-number-input disabled>
                                <div class="flex justify-end items-center gap-x-1.5">
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                </button>
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                </button>
                                </div>
                            </div>
                            </div>
                            <!-- End Input Number -->
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Button disabled</h5>
                        </div>
                        <div class="box-body">
                            <!-- Input Number -->
                            <div class="py-2 px-3 bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 rounded-sm " data-hs-input-number="">
                            <div class="w-full flex justify-between items-center gap-x-3">
                                <input class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white" type="text" value="10" data-hs-input-number-input="">
                                <div class="flex justify-end items-center gap-x-1.5">
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800" disabled="">
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    </svg>
                                </button>
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800" disabled="">
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                    </svg>
                                </button>
                                </div>
                            </div>
                            </div>
                            <!-- End Input Number -->
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xl:col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Validation states</h5>
                        </div>
                        <div class="box-body">
                            <!-- Input Number -->
                            <div class="py-2 px-3 bg-white border border-danger rounded-sm dark:bg-bodybg" data-hs-input-number>
                            <div class="w-full flex justify-between items-center gap-x-3">
                                <div class="relative w-full">
                                <input id="hs-validation-name-error" class="w-full p-0 pe-7 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white" type="text" value="10" data-hs-input-number-input aria-describedby="hs-validation-name-error-helper">
                                <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none">
                                    <svg class="flex-shrink-0 size-4 text-danger" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" x2="12" y1="8" y2="12"/><line x1="12" x2="12.01" y1="16" y2="16"/></svg>
                                </div>
                                </div>
                                <div class="flex justify-end items-center gap-x-1.5">
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                </button>
                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                </button>
                                </div>
                            </div>
                            </div>
                            <!-- End Input Number -->

                            <p class="text-sm text-danger mt-2" id="hs-validation-name-error-helper">Out of limit</p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-1 -->

@endsection

@section('scripts')
	


@endsection
