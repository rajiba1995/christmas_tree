
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Breadcrumb</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Breadcrumb 
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
                    <div class="col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Basic Breadcrumb</h5>
                        </div>
                        <div class="box-body">
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-sm">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                Home
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                </a>
                            </li>
                            <li class="text-sm">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                App Center
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                </a>
                            </li>
                            <li class="text-sm text-gray-500 dark:text-white/70 hover:text-primary truncate" aria-current="page">
                                Application
                            </li>
                            </ol>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Breadcrumb Style-1</h5>
                        </div>
                        <div class="box-body">
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-sm">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                Home
                                <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-white/10 rtl:rotate-180"></i>
                                </a>
                            </li>
                            <li class="text-sm">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                App Center
                                <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-white/10 rtl:rotate-180"></i>
                                </a>
                            </li>
                            <li class="text-sm text-gray-500 dark:text-white/70 hover:text-primary truncate" aria-current="page">
                                Application
                            </li>
                            </ol>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Basic Breadcrumb-style-2</h5>
                        </div>
                        <div class="box-body">
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-smtext-primary hover:text-primary dark:text-primary">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                Home
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-300 dark:text-white/10 mx-2" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round" />
                                </svg>
                                </a>
                            </li>

                            <li class="text-smtext-primary hover:text-primary dark:text-primary">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                App Center
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-300 dark:text-white/10 mx-2" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round" />
                                </svg>
                                </a>
                            </li>

                            <li class="text-sm text-gray-500 dark:text-white/70 hover:text-primary truncate" aria-current="page">
                                Application
                            </li>
                            </ol>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Breadcrumb-style-3 </h5>
                        </div>
                        <div class="box-body">
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-sm">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                <svg class="flex-shrink-0 ltr:mr-3 rtl:ml-3 h-4 w-4 text-primary hover:text-primary dark:text-primary" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                                Home
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                </a>
                            </li>
                            <li class="text-sm">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                App Center
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                </a>
                            </li>
                            <li class="text-sm text-gray-500 dark:text-white/70 hover:text-primary truncate" aria-current="page">
                                Application
                            </li>
                            </ol>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Breadcrumb With Icons </h5>
                        </div>
                        <div class="box-body">
                            <ol class="flex items-center whitespace-nowrap min-w-0 pb-2">
                            <li class="text-sm">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                <svg class="flex-shrink-0 ltr:mr-3 rtl:ml-3 h-4 w-4 text-primary hover:text-primary dark:text-primary" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                                Home
                                </a>
                            </li>
                            </ol>
                            <ol class="flex items-center whitespace-nowrap min-w-0 pb-2">
                            <li class="text-sm">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                <svg class="flex-shrink-0 ltr:mr-3 rtl:ml-3 h-4 w-4 text-primary hover:text-primary dark:text-primary" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                                Home
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                </a>
                            </li>
                            <li class="text-sm">
                                <a class="flex items-center text-gray-500 dark:text-white/70 hover:text-primary" href="javascript:void(0);">
                                Library
                                </a>
                            </li>
                            </ol>
                            <ol class="flex items-center whitespace-nowrap min-w-0 pb-2">
                            <li class="text-sm">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                <svg class="flex-shrink-0 ltr:mr-3 rtl:ml-3 h-4 w-4 text-primary hover:text-primary dark:text-primary" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                                Home
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                </a>
                            </li>
                            <li class="text-sm">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary" href="javascript:void(0);">
                                Library
                                <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-300 dark:text-white/10 rtl:rotate-180"
                                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                </a>
                            </li>
                            <li class="text-sm">
                                <a class="flex items-center text-gray-500 dark:text-white/70 hover:text-primary" href="javascript:void(0);">
                                Data
                                </a>
                            </li>
                            </ol>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-1 -->

@endsection

@section('scripts')
	


@endsection
