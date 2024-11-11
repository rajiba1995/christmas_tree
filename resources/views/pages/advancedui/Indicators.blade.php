
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Indicators</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Advanced Ui <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Indicators 
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
                        <div class="col-span-12 lg:col-span-4">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Basic Legend Indicator</h5>
                                </div>
                                <div class="box-body">
                                    <div class="inline-flex items-center">
                                        <span class="w-2 h-2 inline-block bg-gray-500 dark:bg-white/80 rounded-full me-2"></span>
                                        <span class="text-gray-600 dark:text-textmuted">Legend indicator</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Color variations Legend Indicator</h5>
                                </div>
                                <div class="box-body">
                                    <div class="grid gap-y-2">
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-black/20 rounded-full me-2 dark:bg-white"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Dark</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-gray-500 rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Gray</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-red-600 rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Red</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-yellow-600 rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Yellow</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-green-600 rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Green</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-blue-600 rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Blue</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-indigo-600 rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Indigo</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-purple-600 rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Purple</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-pink-600 rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Pink</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-light rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Light</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-4">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Template Color variations Legend Indicator</h5>
                                </div>
                                <div class="box-body">
                                    <div class="grid gap-y-2">
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-primary rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Primary</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-secondary rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Secondary</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-warning rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Warning</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-success rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Success</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-info rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Info</span>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <span class="w-2 h-2 inline-block bg-danger rounded-full me-2"></span>
                                            <span class="text-gray-600 dark:text-textmuted">Danger</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

@endsection

@section('scripts')
	


@endsection
