
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Passwords</h5>
                            <nav>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                    href="javascript:void(0);"> Form Elements <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                                </a> </li>
                                <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                    href="javascript:void(0);">Passwords 
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
                    <h6 class="text-base mb-4 text-defaulttextcolor">Strong Password:</h6>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 lg:col-span-4">
                            <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Basic Strong Password</h5>
                            </div>
                            <div class="box-body">
                                <!-- Strong Password -->
                                <div class="flex">
                                    <div class="flex-1">
                                        <input type="password" id="hs-strong-password-base" class="dark:placeholder:text-white/50 py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-white/10" placeholder="Enter password">
                                        <div data-hs-strong-password='{
                                            "target": "#hs-strong-password-base",
                                            "stripClasses": "hs-strong-password:opacity-100 hs-strong-password-accepted:bg-success h-2 flex-auto rounded-full bg-primary/70 opacity-50 mx-1"
                                            }' class="flex mt-3 -mx-1"
                                        ></div>
                                    </div>
                                </div>
                                <!-- End Strong Password -->
                            </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Strong Password with API</h5>
                                </div>
                                <div class="box-body">
                                    <!-- Strong Password -->
                                    <div class="flex">
                                        <div class="relative flex-1">
                                            <input type="password" id="hs-strong-password-api-with-indicator-and-hint-in-popover" class="dark:placeholder:text-white/50 py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-white/10" placeholder="Enter password">
                                            <div id="hs-strong-password-api" class="hidden absolute z-10 w-full bg-white shadow-md rounded-sm p-4 dark:bg-bodybg dark:border dark:border-white/10 dark:divide-white/10">
                                                <div id="hs-strong-password-api-in-popover" data-hs-strong-password='{
                                                    "target": "#hs-strong-password-api-with-indicator-and-hint-in-popover",
                                                    "hints": "#hs-strong-password-api",
                                                    "stripClasses": "hs-strong-password:opacity-100 hs-strong-password-accepted:bg-success h-2 flex-auto rounded-full bg-primary/70 opacity-50 mx-1",
                                                    "mode": "popover",
                                                    "checksExclude": ["lowercase", "min-length"],
                                                    "specialCharactersSet": "&!@"
                                                }' class="flex mt-2 -mx-1">
                                                </div>
                                                <h4 class="mt-3 text-sm font-semibold text-gray-800 dark:text-white">
                                                Your password must contain:
                                                </h4>
                                                <ul class="space-y-1 text-sm text-gray-500 dark:text-white/70">
                                                    <li data-hs-strong-password-hints-rule-text="uppercase" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                                        <span class="hidden" data-check>
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                        </span>
                                                        <span data-uncheck>
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                        </span>
                                                        Should contain uppercase.
                                                    </li>
                                                    <li data-hs-strong-password-hints-rule-text="numbers" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                                        <span class="hidden" data-check>
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                        </span>
                                                        <span data-uncheck>
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                        </span>
                                                        Should contain numbers.
                                                    </li>
                                                    <li data-hs-strong-password-hints-rule-text="special-characters" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                                        <span class="hidden" data-check>
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                        </span>
                                                        <span data-uncheck>
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                        </span>
                                                        Should contain special characters (available chars: &!@).
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Strong Password -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Min Length Strong Password</h5>
                                </div>
                                <div class="box-body">
                                    <!-- Strong Password -->
                                    <div class="flex-1">
                                        <input type="password" id="hs-strong-password-with-minLength" class="dark:placeholder:text-white/50 py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-white/10" placeholder="Enter password">
                                        <div id="hs-strong-password-minLength" data-hs-strong-password='{
                                            "target": "#hs-strong-password-with-minLength",
                                            "stripClasses": "hs-strong-password:opacity-100 hs-strong-password-accepted:bg-success h-2 flex-auto rounded-full bg-primary/70 opacity-50 mx-1",
                                            "minLength": "8"
                                            }' class="flex mt-3 -mx-1">
                                        </div>
                                    </div>
                                    <!-- End Strong Password -->
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Strong Password Working with Popover</h5>
                                </div>
                                <div class="box-body">
                                    <!-- Strong Password -->
                                    <div class="flex">
                                        <div class="relative flex-1">
                                        <input type="password" id="hs-strong-password-with-indicator-and-hint-in-popover" class="dark:placeholder:text-white/50 py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-white/10" placeholder="Enter password">
                                        <div id="hs-strong-password-popover" class="hidden absolute z-10 w-full bg-white shadow-md rounded-sm p-4 dark:bg-bodybg dark:border dark:border-white/10 dark:divide-white/10">
                                            <div id="hs-strong-password-in-popover" data-hs-strong-password='{
                                                "target": "#hs-strong-password-with-indicator-and-hint-in-popover",
                                                "hints": "#hs-strong-password-popover",
                                                "stripClasses": "hs-strong-password:opacity-100 hs-strong-password-accepted:bg-success h-2 flex-auto rounded-full bg-primary/70 opacity-50 mx-1",
                                                "mode": "popover"
                                            }' class="flex mt-2 -mx-1">
                                            </div>
                                    
                                            <h4 class="mt-3 text-sm font-semibold text-gray-800 dark:text-white">
                                            Your password must contain:
                                            </h4>
                                    
                                            <ul class="space-y-1 text-sm text-gray-500 dark:text-white/70">
                                            <li data-hs-strong-password-hints-rule-text="min-length" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                </span>
                                                <span data-uncheck>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </span>
                                                Minimum number of characters is 6.
                                            </li>
                                            <li data-hs-strong-password-hints-rule-text="lowercase" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                </span>
                                                <span data-uncheck>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </span>
                                                Should contain lowercase.
                                            </li>
                                            <li data-hs-strong-password-hints-rule-text="uppercase" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                </span>
                                                <span data-uncheck>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </span>
                                                Should contain uppercase.
                                            </li>
                                            <li data-hs-strong-password-hints-rule-text="numbers" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                </span>
                                                <span data-uncheck>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </span>
                                                Should contain numbers.
                                            </li>
                                            <li data-hs-strong-password-hints-rule-text="special-characters" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                                <span class="hidden" data-check>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                                </span>
                                                <span data-uncheck>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </span>
                                                Should contain special characters.
                                            </li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- End Strong Password -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Strong Password With Indicator and Hints</h5>
                                </div>
                                <div class="box-body">
                                    <!-- Strong Password -->
                                    <div class="flex mb-2">
                                        <div class="flex-1">
                                        <input type="password" id="hs-strong-password-with-indicator-and-hint" class="dark:placeholder:text-white/50 py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-white/10" placeholder="Enter password">
                                        <div id="hs-strong-password" data-hs-strong-password='{
                                                "target": "#hs-strong-password-with-indicator-and-hint",
                                                "hints": "#hs-strong-password-hints",
                                                "stripClasses": "hs-strong-password:opacity-100 hs-strong-password-accepted:bg-success h-2 flex-auto rounded-full bg-primary/70 opacity-50 mx-1"
                                            }' class="flex mt-3 -mx-1"
                                        ></div>
                                        </div>
                                    </div>
                                    <div id="hs-strong-password-hints" class="">
                                        <div>
                                        <span class="text-sm text-gray-800 dark:text-gray-200">Level:</span>
                                        <span data-hs-strong-password-hints-weakness-text='["Empty", "Weak", "Medium", "Strong", "Very Strong", "Super Strong"]' class="text-sm font-semibold text-gray-800 dark:text-gray-200"></span>
                                        </div>

                                        <h4 class="my-2 text-sm font-semibold text-gray-800 dark:text-white">
                                        Your password must contain:
                                        </h4>

                                        <ul class="space-y-1 text-sm text-gray-500 dark:text-white/70">
                                        <li data-hs-strong-password-hints-rule-text="min-length" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                            <span class="hidden" data-check>
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                            </span>
                                            <span data-uncheck>
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                            </span>
                                            Minimum number of characters is 6.
                                        </li>
                                        <li data-hs-strong-password-hints-rule-text="lowercase" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                            <span class="hidden" data-check>
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                            </span>
                                            <span data-uncheck>
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                            </span>
                                            Should contain lowercase.
                                        </li>
                                        <li data-hs-strong-password-hints-rule-text="uppercase" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                            <span class="hidden" data-check>
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                            </span>
                                            <span data-uncheck>
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                            </span>
                                            Should contain uppercase.
                                        </li>
                                        <li data-hs-strong-password-hints-rule-text="numbers" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                            <span class="hidden" data-check>
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                            </span>
                                            <span data-uncheck>
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                            </span>
                                            Should contain numbers.
                                        </li>
                                        <li data-hs-strong-password-hints-rule-text="special-characters" class="hs-strong-password-active:text-success flex items-center gap-x-2">
                                            <span class="hidden" data-check>
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                            </span>
                                            <span data-uncheck>
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                            </span>
                                            Should contain special characters.
                                        </li>
                                        </ul>
                                    </div>
                                    <!-- End Strong Password -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <h6 class="text-base mb-4 text-defaulttextcolor">Toggle Password:</h6>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 lg:col-span-4">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Basic Toggle Password</h5>
                                </div>
                                <div class="box-body">
                                    <!-- Form Group -->
                                    <label class="block text-sm mb-2 dark:text-white">Password</label>
                                    <div class="relative">
                                    <input id="hs-toggle-password" type="password" class="dark:placeholder:text-white/50 py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:ring-primary" placeholder="Enter password" value="12345qwerty">
                                    <button type="button" data-hs-toggle-password='{
                                        "target": "#hs-toggle-password"
                                        }' class="absolute top-0 end-0 p-3.5 rounded-e-md dark:focus:outline-none dark:focus:ring-0 dark:shadow-none dark:focus:ring-transparent">
                                        <svg class="flex-shrink-0 size-3.5 text-textmuted" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
                                        <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
                                        <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/>
                                        <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"/>
                                        <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                                        <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"/>
                                        </svg>
                                    </button>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Checkbox Tooggle Password</h5>
                                </div>
                                <div class="box-body">
                                    <!-- Form Group -->
                                    <div class="mb-5">
                                        <label for="hs-toggle-password-with-checkbox" class="block text-sm mb-2 dark:text-white">Current password</label>
                                        <input id="hs-toggle-password-with-checkbox" type="password" class="form-check-inputdark:placeholder:text-white/50 py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:ring-primary" placeholder="Enter current password" value="12345qwerty">
                                        <!-- Checkbox -->
                                        <div class="flex mt-4">
                                            <input data-hs-toggle-password='{
                                                "target": "#hs-toggle-password-with-checkbox"
                                            }' id="hs-toggle-password-checkbox" type="checkbox" class="form-check-input mt-0.5 ">
                                            <label for="hs-toggle-password-checkbox" class="text-sm text-gray-500 ms-2 dark:text-white/70">Show password</label>
                                        </div>
                                        <!-- End Checkbox -->
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Multi Toggle</h5>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-5" data-hs-toggle-password-group>
                                        <!-- Form Group -->
                                        <label for="hs-toggle-password-multi-toggle-np" class="block text-sm mb-2 dark:text-white">New password</label>
                                        <div class="relative">
                                            <input id="hs-toggle-password-multi-toggle-np" type="password" class="dark:placeholder:text-white/50 py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:ring-primary" placeholder="Enter new password">
                                            <button type="button" data-hs-toggle-password='{
                                                "target": ["#hs-toggle-password-multi-toggle", "#hs-toggle-password-multi-toggle-np"]
                                            }' class="absolute top-0 end-0 p-3.5 rounded-e-md dark:focus:outline-none dark:focus:ring-0 dark:shadow-none dark:focus:ring-transparent">
                                            <svg class="flex-shrink-0 size-3.5 text-textmuted" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
                                                <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
                                                <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/>
                                                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"/>
                                                <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                                                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"/>
                                            </svg>
                                            </button>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <label for="hs-toggle-password-multi-toggle" class="block text-sm mb-2 dark:text-white">Current password</label>
                                        <div class="relative">
                                            <input id="hs-toggle-password-multi-toggle" type="password" class="dark:placeholder:text-white/50 py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:ring-primary" placeholder="Enter current password" value="12345qwerty">
                                            <button type="button" data-hs-toggle-password='{
                                                "target": ["#hs-toggle-password-multi-toggle", "#hs-toggle-password-multi-toggle-np"]
                                            }' class="absolute top-0 end-0 p-3.5 rounded-e-md dark:focus:outline-none dark:focus:ring-0 dark:shadow-none dark:focus:ring-transparent">
                                            <svg class="flex-shrink-0 size-3.5 text-textmuted" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
                                                <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
                                                <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/>
                                                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"/>
                                                <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                                                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"/>
                                            </svg>
                                            </button>
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <h6 class="text-base mb-4 text-defaulttextcolor">PIN Input:</h6>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Basic PIN Input</h5>
                                </div>
                                <div class="box-body">
                                    <div class="flex space-x-3" data-hs-pin-input>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] rtl:me-3  text-center border-gray-200 rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" data-hs-pin-input-item autofocus>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" data-hs-pin-input-item>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Placeholder PIN Input</h5>
                                </div>
                                <div class="box-body">
                                    <div class="flex space-x-3" data-hs-pin-input>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] rtl:me-3 text-center border-gray-200 rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Gray PIN Input</h5>
                                </div>
                                <div class="box-body">
                                    <div class="flex space-x-3" data-hs-pin-input>
                                        <input type="text" class="dark:placeholder:text-white/50 rtl:me-3 block w-[38px] text-center bg-gray-100 border-transparent rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-light dark:border-transparent dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center bg-gray-100 border-transparent rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-light dark:border-transparent dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center bg-gray-100 border-transparent rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-light dark:border-transparent dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center bg-gray-100 border-transparent rounded-md text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-light dark:border-transparent dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Underline PIN Input</h5>
                                </div>
                                <div class="box-body">
                                    <div class="flex space-x-3" data-hs-pin-input>
                                        <input type="text" class="dark:placeholder:text-white/50 block rtl:me-3 w-[38px] text-center bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-primary focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-white/10 dark:text-white dark:focus:ring-primary dark:focus:border-b-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-primary focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-white/10 dark:text-white dark:focus:ring-primary dark:focus:border-b-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-primary focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-white/10 dark:text-white dark:focus:ring-primary dark:focus:border-b-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-primary focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-white/10 dark:text-white dark:focus:ring-primary dark:focus:border-b-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Focus effect PIN Input</h5>
                                </div>
                                <div class="box-body">
                                    <div class="flex space-x-3" data-hs-pin-input>
                                        <input type="text" class="dark:placeholder:text-white/50 rtl:me-3 block w-[38px] text-center border-gray-200 rounded-md text-sm focus:scale-110 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm focus:scale-110 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm focus:scale-110 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm focus:scale-110 focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">PIN Input Type</h5>
                                </div>
                                <div class="box-body">
                                    <div class="flex space-x-3" data-hs-pin-input='{"availableCharsRE": "^[0-9]+$"}'>
                                        <input type="text" class="dark:placeholder:text-white/50 rtl:me-3 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">PIN Input Regex type</h5>
                                </div>
                                <div class="box-body">
                                    <div class="flex space-x-3" data-hs-pin-input='{"availableCharsRE": "^[0-3]+$"}'>
                                        <input type="text" class="dark:placeholder:text-white/50 block rtl:me-3 w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Masked</h5>
                                </div>
                                <div class="box-body">
                                    <div class="flex space-x-3" data-hs-pin-input='{"availableCharsRE": "^[0-3]+$"}'>
                                        <input type="text" class="dark:placeholder:text-white/50 block rtl:me-3 w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Show PIN code suggest on iOS keyboard</h5>
                                </div>
                                <div class="box-body">
                                    <div class="flex space-x-3" data-hs-pin-input>
                                        <input class="dark:placeholder:text-white/50 rtl:!ms-3 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" type="tel" placeholder="⚬" data-hs-pin-input-item autocomplete="one-time-code">
                                        <input class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" type="tel" placeholder="⚬" data-hs-pin-input-item>
                                        <input class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" type="tel" placeholder="⚬" data-hs-pin-input-item>
                                        <input class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" type="tel" placeholder="⚬" data-hs-pin-input-item>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Pin Input Disabled</h5>
                                </div>
                                <div class="box-body">
                                    <div class="flex space-x-3" data-hs-pin-input>
                                        <input type="text" class="dark:placeholder:text-white/50 rtl:me-3 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item disabled>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item disabled>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item disabled>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">Focus effect PIN Input</h5>
                                </div>
                                <div class="box-body space-y-4">
                                    <div class="flex space-x-3 flex-wrap gap-y-3" data-hs-pin-input>
                                        <input type="text" class="dark:placeholder:text-white/50 rtl:me-3 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>
                                    <div class="flex space-x-3 flex-wrap gap-y-3" data-hs-pin-input>
                                        <input type="text" class="dark:placeholder:text-white/50 rtl:me-3 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>
                                    <div class="flex space-x-3 flex-wrap gap-y-3" data-hs-pin-input>
                                        <input type="text" class="dark:placeholder:text-white/50 rtl:me-3 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block w-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <div class="box-header">
                                <h5 class="box-title">PIN Input Sizes</h5>
                                </div>
                                <div class="box-body space-y-4">
                                    <div class="flex space-x-3 flex-wrap gap-y-3" data-hs-pin-input>
                                        <input type="text" class="dark:placeholder:text-white/50 rtl:me-3 block size-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block size-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block size-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block size-[38px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>

                                    <div class="flex space-x-3 flex-wrap gap-y-3" data-hs-pin-input>
                                        <input type="text" class="dark:placeholder:text-white/50 rtl:me-3 block size-[46px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block size-[46px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block size-[46px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block size-[46px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>

                                    <div class="flex space-x-3 flex-wrap gap-y-3" data-hs-pin-input>
                                        <input type="text" class="dark:placeholder:text-white/50 rtl:me-3 block size-[62px] text-center border-gray-200 rounded-md text-lg [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block size-[62px] text-center border-gray-200 rounded-md text-lg [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block size-[62px] text-center border-gray-200 rounded-md text-lg [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                        <input type="text" class="dark:placeholder:text-white/50 block size-[62px] text-center border-gray-200 rounded-md text-lg [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:focus:ring-primary" placeholder="⚬" data-hs-pin-input-item>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

@endsection

@section('scripts')
	


@endsection
