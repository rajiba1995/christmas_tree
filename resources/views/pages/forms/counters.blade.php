
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Counters & Markup</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Form Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Counters & Markup 
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
                    <h6 class="text-base mb-4 text-defaulttextcolor">Counters:</h6>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 lg:col-span-12 xl:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Checkbox Toggle Count</h5>
                                </div>
                                <div class="box-body">
                                <!-- Toggle -->
                                    <div class="flex justify-center mb-3">
                                        <div id="toggle-count" class="p-0.5 inline-block  rounded-sm">
                                        <label for="toggle-count-monthly" class="relative inline-block py-2 px-3">
                                            <span class="inline-block relative z-10 text-sm font-medium text-primary dark:text-primary cursor-pointer">
                                            Monthly
                                            </span>
                                            <input id="toggle-count-monthly" name="toggle-count" type="radio" class="absolute top-0 end-0 size-full border-transparent bg-transparent bg-none text-transparent rounded-sm cursor-pointer before:absolute before:inset-0 before:size-full before:rounded-sm focus:ring-offset-0 hover:!bg-primary/10 checked:dark:!bg-primary/10   checked:bg-primary/10  checked:focus:bg-primary/10 checked:focus:ring-0 checked:text-primary/10 checked:before:shadow-sm checked:bg-none focus:ring-transparent  dark:focus:ring-offset-transparent">
                                        </label>
                                        <label for="toggle-count-annual" class="relative inline-block py-2 px-3">
                                            <span class="inline-block relative z-10 text-sm font-medium text-primary cursor-pointer">
                                        Yearly
                                            </span>
                                            <input id="toggle-count-annual" name="toggle-count" type="radio" class="absolute top-0 end-0 size-full border-transparent bg-transparent bg-none text-transparent rounded-sm cursor-pointer before:absolute before:inset-0 before:size-full before:rounded-sm focus:ring-offset-0 hover:!bg-primary/10 checked:dark:!bg-primary/10  checked:bg-primary/10 checked:focus:bg-primary/10 checked:text-primary/10 checked:focus:ring-0 checked:before:shadow-sm checked:bg-none focus:ring-transparent  dark:focus:ring-offset-transparent" checked>
                                        </label>
                                        </div>
                                    </div>
                                    <!-- End Toggle -->

                                    <!-- Card Grid -->
                                    <div class="grid grid-cols-3 lg:items-center border border-defaultborder rounded-sm dark:border-defaultborder/10">
                                        <!-- Card -->
                                        <div class="flex flex-col p-4">
                                        <h5 class="text-gray-800 mb-1 sm:text-[1.2rem] text-[0.813rem] dark:text-white">Startup</h5>
                                        <div class="flex gap-x-1">
                                            <span class="text-md font-normal text-gray-800 dark:text-white">$</span>
                                            <p data-hs-toggle-count='{
                                                "target": "#toggle-count",
                                                "min": 19,
                                                "max": 29
                                            }' class="text-gray-800 font-semibold sm:text-3xl text-[1rem] dark:text-white">
                                            19
                                            </p>
                                        </div>
                                        </div>
                                        <!-- End Card -->
                                    
                                        <!-- Card -->
                                        <div class="flex flex-col p-4">
                                        <div class="flex justify-between">
                                            <h5 class="text-gray-800 mb-1 sm:text-[1.2rem] text-[0.813rem] dark:text-gray-200">Team</h5>
                                        </div>
                                        <div class="flex gap-x-1">
                                            <span class="text-md font-normal text-gray-800 dark:text-gray-200">$</span>
                                            <p data-hs-toggle-count='{
                                                "target": "#toggle-count",
                                                "min": 89,
                                                "max": 99
                                            }' class="text-gray-800 font-semibold sm:text-3xl text-[1rem] dark:text-gray-200">
                                            89
                                            </p>
                                        </div>
                                        </div>
                                        <!-- End Card -->
                                    
                                        <!-- Card -->
                                        <div class="flex flex-col p-4">
                                        <h5 class="text-gray-800 mb-1 sm:text-[1.2rem] text-[0.813rem] dark:text-gray-200">Enterprise</h5>
                                        <div class="flex gap-x-1">
                                            <span class="text-md font-normal text-gray-800 dark:text-gray-200">$</span>
                                            <p data-hs-toggle-count='{
                                                "target": "#toggle-count",
                                                "min": 129,
                                                "max": 149
                                            }' class="text-gray-800 font-semibold sm:text-3xl text-[1rem] dark:text-gray-200">
                                            129
                                            </p>
                                        </div>
                                        </div>
                                        <!-- End Card -->
                                    </div>
                                    <!-- End Card Grid -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-12 xl:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Switch Toggle Count</h5>
                                </div>
                                <div class="box-body">
                                    <!-- Toggle -->
                                    <div class="flex justify-center mb-4">
                                        <div>
                                            <label for="toggle-count-switch" class="inline-block p-2">
                                                <span class="inline-block text-sm text-gray-800 cursor-pointer dark:text-white">
                                                    Monthly
                                                </span>
                                            </label>
                                            <input id="toggle-count-switch" name="toggle-count-switch" type="checkbox" class="ti-switch checked:focus:!ring-0 checked:focus:!ring-white">
                                            <label for="toggle-count-switch" class="inline-block p-2">
                                                <span class="inline-block text-sm text-gray-800 cursor-pointer dark:text-white">
                                                    Yearly
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End Toggle -->

                                    <!-- Grid -->
                                    <div class="grid grid-cols-3 lg:items-center border border-gray-200 rounded-sm dark:border-white/10">
                                        <!-- Card -->
                                        <div class="flex flex-col p-4">
                                            <h5 class="text-gray-800 mb-1 sm:text-[1.2rem] text-[0.813rem] dark:text-white">Startup</h5>
                                            <div class="flex gap-x-1">
                                            <span class="text-md font-normal text-gray-800 dark:text-white">$</span>
                                            <p data-hs-toggle-count='{
                                                "target": "#toggle-count-switch",
                                                "min": 19,
                                                "max": 29
                                                }' class="text-gray-800 font-semibold sm:text-3xl text-[1rem] dark:text-white">
                                                19
                                            </p>
                                            </div>
                                        </div>
                                        <!-- End Card -->

                                        <!-- Card -->
                                        <div class="flex flex-col p-4">
                                            <div class="flex justify-between">
                                            <h5 class="text-gray-800 mb-1 sm:text-[1.2rem] text-[0.813rem] dark:text-white">Team</h5>
                                            </div>
                                            <div class="flex gap-x-1">
                                            <span class="text-md font-normal text-gray-800 dark:text-white">$</span>
                                            <p data-hs-toggle-count='{
                                                "target": "#toggle-count-switch",
                                                "min": 89,
                                                "max": 99
                                                }' class="text-gray-800 font-semibold sm:text-3xl text-[1rem] dark:text-white">
                                                89
                                            </p>
                                            </div>
                                        </div>
                                        <!-- End Card -->

                                        <!-- Card -->
                                        <div class="flex flex-col p-4">
                                            <h5 class="text-gray-800 mb-1 sm:text-[1.2rem] text-[0.813rem] dark:text-white">Enterprise</h5>
                                            <div class="flex gap-x-1">
                                            <span class="text-md font-normal text-gray-800 dark:text-white">$</span>
                                            <p data-hs-toggle-count='{
                                                "target": "#toggle-count-switch",
                                                "min": 129,
                                                "max": 149
                                                }' class="text-gray-800 font-semibold sm:text-3xl text-[1rem] dark:text-white">
                                                129
                                            </p>
                                            </div>
                                        </div>
                                        <!-- End Card -->
                                    </div>
                                    <!-- End Grid -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-1 -->
                    <h6 class="text-base mb-4 text-defaulttextcolor">Markup:</h6>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 lg:col-span-12 xl:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Basic Markup</h5>
                                </div>
                                <div class="box-body">
                                    <!-- Input Group -->
                                    <div id="hs-wrapper-for-copy" class="space-y-3">
                                        <input id="hs-content-for-copy" type="text" class="dark:placeholder:text-white/50 py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:ring-primary" placeholder="Enter Name">
                                    </div>

                                    <p class="mt-3 text-end">
                                        <button type="button" data-hs-copy-markup='{
                                            "targetSelector": "#hs-content-for-copy",
                                            "wrapperSelector": "#hs-wrapper-for-copy",
                                            "limit": 10
                                        }' id="hs-copy-content" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-full border border-dashed border-gray-200 bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary">
                                        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                        Add Name
                                        </button>
                                    </p>
                                    <!-- End Input Group -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-12 xl:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Select Markup</h5>
                                </div>
                                <div class="box-body">
                                    <div id="hs-wrapper-select-for-copy" class="space-y-3">
                                        <!-- Select -->
                                        <div id="hs-content-select-for-copy" class="relative">
                                        <select data-hs-select='{
                                            "placeholder": "Select option...",
                                            "toggleTag": "<button type=\"button\"></button>",
                                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-sm text-start text-sm focus:border-primary focus:ring-primary before:absolute before:inset-0 before:z-[1] dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary",
                                            "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-sm overflow-hidden overflow-y-auto dark:bg-bodybg dark:border-white/10",
                                            "optionClasses": "cursor-pointer py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-sm focus:outline-none focus:bg-gray-100 dark:bg-bodybg dark:hover:bg-bodybg dark:text-gray-200 dark:focus:bg-bodybg",
                                            "optionTemplate": "<div class=\"flex justify-between w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-4 text-primary\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div>"
                                            }'>
                                            <option value=""></option>
                                            <option>Name</option>
                                            <option>Email address</option>
                                            <option>Description</option>
                                            <option>User ID</option>
                                        </select>

                                        <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                            <svg class="flex-shrink-0 size-3.5 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg>
                                        </div>
                                        </div>
                                        <!-- End Select -->
                                    </div>

                                    <p class="mt-3 text-end">
                                        <button type="button" data-hs-copy-markup='{
                                                "targetSelector": "#hs-content-select-for-copy",
                                                "wrapperSelector": "#hs-wrapper-select-for-copy",
                                                "limit": 3
                                            }' id="hs-copy-select-content" class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-full border border-dashed border-gray-200 bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white/70 dark:hover:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-primary">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                            Add Option
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

@endsection

@section('scripts')
	
        @vite('resources/assets/js/markup.js')

@endsection
