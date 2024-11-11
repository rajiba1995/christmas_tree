
@extends('layouts.master')

@section('styles')

        <!-- Jsvector Maps -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/jsvectormap/css/jsvectormap.min.css')}}">

@endsection

@section('content')
                
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">CRM</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Dashboard <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">CRM 
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

                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 xxl:col-span-4 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="md:col-span-6 lg:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box ">
                            <div class="box-body">
                                <div class="">
                                <div class="flex justify-between">
                                    <div>
                                    <span class="text-[.875rem] font-medium">Total Deals</span>
                                    <span class="text-[1.5rem] font-medium flex items-center">12,432
                                    </span>
                                    </div>
                                    <span class="avatar avatar-md bg-primary/10 mb-2 icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-primary" width="32" height="32"
                                        fill="#000000" viewBox="0 0 256 256">
                                        <path
                                        d="M224,118.31V200a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V118.31h0A191.14,191.14,0,0,0,128,144,191.08,191.08,0,0,0,224,118.31Z"
                                        opacity="0.2"></path>
                                        <path
                                        d="M104,112a8,8,0,0,1,8-8h32a8,8,0,0,1,0,16H112A8,8,0,0,1,104,112ZM232,72V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V72A16,16,0,0,1,40,56H80V48a24,24,0,0,1,24-24h48a24,24,0,0,1,24,24v8h40A16,16,0,0,1,232,72ZM96,56h64V48a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8ZM40,72v41.62A184.07,184.07,0,0,0,128,136a184,184,0,0,0,88-22.39V72ZM216,200V131.63A200.25,200.25,0,0,1,128,152a200.19,200.19,0,0,1-88-20.36V200H216Z">
                                        </path>
                                    </svg>
                                    </span>
                                </div>
                                </div>
                                <div class="flex justify-between items-end">
                                <div>
                                    <span class="text-[0.75rem] text-textmuted">This Month</span>
                                </div>
                                <div>
                                    <span class="text-success  flex items-center fs-12 me-0 ms-2 mb-0"><i
                                        class="ri-arrow-left-up-line fs-12"></i>+2.5%</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="md:col-span-6 lg:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box ">
                            <div class="box-body">
                                <div class="">
                                <div class="flex justify-between">
                                    <div>
                                    <span class="text-[.875rem] font-medium">Page Customers</span>
                                    <span class="text-[1.5rem] font-medium flex items-center">4,432
                                    </span>
                                    </div>
                                    <span class="avatar avatar-md bg-danger/10 mb-2 icon-4">
                                    <svg class="svg-danger" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        fill="#000000" viewBox="0 0 256 256">
                                        <path d="M136,108A52,52,0,1,1,84,56,52,52,0,0,1,136,108Z" opacity="0.2"></path>
                                        <path
                                        d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                                        </path>
                                    </svg>
                                    </span>
                                </div>
                                </div>
                                <div class="flex justify-between items-end">
                                <div>
                                    <span class="text-[0.75rem] text-textmuted">This Month</span>
                                </div>
                                <div>
                                    <span class="text-success  flex items-center fs-12 me-0 ms-2 mb-0"><i
                                        class="ri-arrow-left-up-line fs-12"></i>+2.5%</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="md:col-span-6 lg:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box ">
                            <div class="box-body">
                                <div class="">
                                <div class="flex justify-between">
                                    <div>
                                    <span class="text-[.875rem] font-medium">Conversion Ratio</span>
                                    <span class="text-[1.5rem] font-medium flex items-center">$15,162
                                    </span>
                                    </div>
                                    <span class="avatar avatar-md bg-info/10 icon-2">
                                    <svg class="svg-info" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                                        viewBox="0 0 256 256">
                                        <path d="M128,72v56H24V72Zm0,56v56H232V128Z" opacity="0.2"></path>
                                        <path
                                        d="M240,128v56a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V80H32v48a8,8,0,0,1-16,0V72a8,8,0,0,1,8-8H128a8,8,0,0,1,8,8V176h88V128a8,8,0,0,1,16,0Z">
                                        </path>
                                    </svg>
                                    </span>
                                </div>
                                </div>
                                <div class="flex justify-between items-end">
                                <div>
                                    <span class="text-[0.75rem] text-textmuted">This Month</span>
                                </div>
                                <div>
                                    <span class="text-danger  flex items-center fs-12 me-0 ms-2 mb-0"><i
                                        class="ri-arrow-left-up-line fs-12"></i>+2.5%</span>
                                </div>
                                </div>
                            </div>

                            </div>
                        </div>
                        <div class="md:col-span-6 lg:col-span-6 xl:col-span-6 col-span-12">
                            <div class="box ">
                            <div class="box-body">
                                <div class="">
                                <div class="flex justify-between">
                                    <div>
                                    <span class="text-[.875rem] font-medium">Total Revenue</span>
                                    <span class="text-[1.5rem] font-medium flex items-center">$22,432
                                    </span>
                                    </div>
                                    <span class="avatar avatar-md bg-success/10 mb-2 icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-success" width="32" height="32"
                                        fill="#000000" viewBox="0 0 256 256">
                                        <path
                                        d="M16,152H48v56H16a8,8,0,0,1-8-8V160A8,8,0,0,1,16,152ZM204,56a28,28,0,0,0-12,2.71h0A28,28,0,1,0,176,85.29h0A28,28,0,1,0,204,56Z"
                                        opacity="0.2"></path>
                                        <path
                                        d="M230.33,141.06a24.43,24.43,0,0,0-21.24-4.23l-41.84,9.62A28,28,0,0,0,140,112H89.94a31.82,31.82,0,0,0-22.63,9.37L44.69,144H16A16,16,0,0,0,0,160v40a16,16,0,0,0,16,16H120a7.93,7.93,0,0,0,1.94-.24l64-16a6.94,6.94,0,0,0,1.19-.4L226,182.82l.44-.2a24.6,24.6,0,0,0,3.93-41.56ZM16,160H40v40H16Zm203.43,8.21-38,16.18L119,200H56V155.31l22.63-22.62A15.86,15.86,0,0,1,89.94,128H140a12,12,0,0,1,0,24H112a8,8,0,0,0,0,16h32a8.32,8.32,0,0,0,1.79-.2l67-15.41.31-.08a8.6,8.6,0,0,1,6.3,15.9ZM164,96a36,36,0,0,0,5.9-.48,36,36,0,1,0,28.22-47A36,36,0,1,0,164,96Zm60-12a20,20,0,1,1-20-20A20,20,0,0,1,224,84ZM164,40a20,20,0,0,1,19.25,14.61,36,36,0,0,0-15,24.93A20.42,20.42,0,0,1,164,80a20,20,0,0,1,0-40Z">
                                        </path>
                                    </svg>
                                    </span>
                                </div>
                                </div>
                                <div class="flex justify-between items-end">
                                <div>
                                    <span class="text-[0.75rem] text-textmuted">This Month</span>
                                </div>
                                <div>
                                    <span class="text-success   flex items-center fs-12 me-0 ms-2 mb-0"><i
                                        class="ri-arrow-left-up-line fs-12"></i>+2.5%</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="md:col-span-12 lg:col-span-12 xl:col-span-12 col-span-12">
                            <div class="box">
                            <div class="box-header">
                                <div class="box-title">Lead By Source</div>
                            </div>
                            <div class="box-body">
                                <div class="flex items-center justify-between flex-wrap">
                                <div class="">
                                    <div class="flex items-start">
                                    <div class="me-3"> <span class="avatar avatar-rounded bg-primary-gradient !text-white"> <i
                                            class="ti ti-device-mobile !text-[1.3rem]"></i> </span> </div>
                                    <div> <span class="block mb-1 text-textmuted">Mobile</span>
                                        <h6 class="font-semibold mb-0 text-[1.2rem]">2,981</h6>
                                    </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex items-start">
                                    <div class="me-3"> <span class="avatar avatar-rounded bg-danger-gradient !text-white"> <i
                                            class="ti ti-device-desktop !text-[1.3rem]"></i> </span> </div>
                                    <div> <span class="block mb-1 text-textmuted">Desktop</span>
                                        <h6 class="font-semibold mb-0 text-[1.2rem]">2,981</h6>
                                    </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex items-start">
                                    <div class="me-3"> <span class="avatar avatar-rounded bg-info-gradient !text-white"> <i
                                            class="ti ti-device-laptop !text-[1.3rem]"></i> </span> </div>
                                    <div> <span class="block mb-1 text-textmuted">Laptop</span>
                                        <h6 class="font-semibold mb-0 text-[1.2rem]">2,981</h6>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12 xxl:col-span-5 col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Revenue Analytics</h4>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Another action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            </div>
                            <div>
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Revenue Analytics Solutions, empowering Decision-Making.</p>
                            </div>
                        </div>
                        <div class="box-body">
                            <div id="revenue"></div>
                        </div>
                        </div>
                    </div>
                    <div class="xl:col-span-12  xxl:col-span-3 col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Total Deals</h4>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Another action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            </div>
                            <div>
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">A Comprehensive Look at Your Total Transactions.</p>
                            </div>
                        </div>
                        <div class="box-body !p-0">
                            <div id="leadbysouce"></div>
                        </div>
                        <div class="box-footer !p-0">
                            <div class="flex">
                            <div
                                class="flex-1 px-4 py-5 text-center border-e !border-e-defaultborder dark:!border-e-defaultborder/10">
                                <p class="text-[0.9rem] mb-1  text-textmuted">Total Leads</p><span
                                class="text-[1rem] font-medium">1,289</span>
                                <span class="badge bg-success/10 !text-success ms-2"><i
                                    class="ti ti-arrow-up-right mg-e-3"></i>5.08%</span>
                            </div>
                            <div class="flex-1 px-4 py-5 text-center">
                                <p class="text-[0.9rem] mb-1 text-textmuted">Leads to Deals Rate</p><span
                                class="text-[1rem] font-medium">+12.08%</span> <span
                                class="badge bg-danger/10 !text-danger ms-2"><i
                                    class="ti ti-arrow-down-right mg-e-3"></i>3.64%</span>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End::page-header -->
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 xxl:col-span-3 col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <div class=" flex justify-between">
                            <h4 class="box-title mb-2">Tasks</h4>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Another action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            </div>
                            <div>
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Task management helps to Simplifying Your Workflow.</p>
                            </div>
                        </div>
                        <div class="box-body todo-tab">
                            <nav
                            class="sm:flex justify-between flex-wrap bg-light rounded-sm transition p-2 dark:bg-black/20 dark:hover:bg-black/20"
                            aria-label="Tabs" role="tablist">
                            <a class="w-full sm:w-auto hs-tab-active:bg-primary hs-tab-active:text-white dark:hs-tab-active:bg-light dark:hs-tab-active:text-defaulttextcolor/70 dark:hs-tab-active:!bg-primary py-[0.35rem] px-[0.65rem] inline-flex items-center gap-2 bg-transparent text-[0.813rem] text-defaulttextcolor hover:text-textmuted font-medium rounded-sm hover:hover:text-primary dark:text-white/70 dark:hover:text-white active"
                                href="javascript:void(0);" id="segment-item-1" data-hs-tab="#segment-1" aria-controls="segment-1">
                                All Tasks
                            </a>
                            <a class="w-full sm:w-auto hs-tab-active:bg-primary hs-tab-active:text-white dark:hs-tab-active:bg-light dark:hs-tab-active:text-defaulttextcolor/70 dark:hs-tab-active:!bg-primary py-[0.35rem] px-[0.65rem] inline-flex items-center gap-2 bg-transparent text-[0.813rem] text-defaulttextcolor hover:text-textmuted font-medium rounded-sm hover:hover:text-primary dark:text-white/70 dark:hover:text-white"
                                href="javascript:void(0);" id="segment-item-1" data-hs-tab="#segment-1" aria-controls="segment-1">
                                Today
                            </a>
                            <a class="w-full sm:w-auto hs-tab-active:bg-primary hs-tab-active:text-white dark:hs-tab-active:bg-light dark:hs-tab-active:text-defaulttextcolor/70 dark:hs-tab-active:!bg-primary py-[0.35rem] px-[0.65rem] inline-flex items-center gap-2 bg-transparent text-[0.813rem] text-defaulttextcolor hover:text-textmuted font-medium rounded-sm hover:hover:text-primary dark:text-white/70 dark:hover:text-white"
                                href="javascript:void(0);" id="segment-item-1" data-hs-tab="#segment-1" aria-controls="segment-1">
                                Upcoming
                            </a>
                            <a class="w-full sm:w-auto hs-tab-active:bg-primary hs-tab-active:text-white dark:hs-tab-active:bg-light dark:hs-tab-active:text-defaulttextcolor/70 dark:hs-tab-active:!bg-primary py-[0.35rem] px-[0.65rem] inline-flex items-center gap-2 bg-transparent text-[0.813rem] text-defaulttextcolor hover:text-textmuted font-medium rounded-sm hover:hover:text-primary dark:text-white/70 dark:hover:text-white"
                                href="javascript:void(0);" id="segment-item-1" data-hs-tab="#segment-1">
                                Completed
                            </a>
                            </nav>
                            <div class="panel panel-primary !mt-5">
                            <div class="tab-content">
                                <div class="tab-pane border-0 active show" id="segment-1" role="tabpanel"
                                aria-labelledby="segment-item-1">
                                <div class="todolist mb-4 flex">
                                    <div class="mb-4 form-check  me-2"> <input type="checkbox" class="form-check-input"> </div>
                                    <div class="flex-1">
                                    <div class="flex items-start justify-between">
                                        <p class="mb-0 text-[0.913rem] font-medium">Added New Customers</p>
                                        <div class=""> <a href="javascript:void(0);" class="text-danger op-7 mg-e-6"
                                            data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i
                                            class="fe fe-trash text-[0.913rem] font-medium"></i></a> </div>
                                    </div>
                                    <p class="text-textmuted mb-1 fs-13">Invi sadip takimata</p>
                                    <div class="flex-between"> <span class="text-textmuted text-[0.75rem] leading-none"><i
                                            class="bi bi-calendar4-event me-2 !text-[0.65rem]"></i>18-05-22</span> <span
                                        class="badge badge-sm !rounded-full float-end !text-primary bg-primary/10">Progress</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="todolist mb-5 flex">
                                    <div class="mb-4 form-check  me-2"> <input type="checkbox" class="form-check-input" checked="">
                                    </div>
                                    <div class="flex-1">
                                    <div class="flex items-start justify-between">
                                        <p class="mb-0 text-[0.913rem] font-medium">Sales Accounting</p>
                                        <div class=""> <a href="javascript:void(0);" class="text-danger op-7 mg-e-6"
                                            data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i
                                            class="fe fe-trash text-[0.913rem] font-medium"></i></a> </div>
                                    </div>
                                    <p class="text-textmuted mb-1 fs-13">Eos dolor ea</p>
                                    <div class="flex-between"> <span class="text-textmuted text-[0.75rem] leading-none"><i
                                            class="bi bi-calendar4-event me-2 !text-[0.65rem]"></i>05-10-22</span> <span
                                        class="badge badge-sm !rounded-full float-end !text-success bg-success/10">Completed</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="todolist mb-4 flex">
                                    <div class="mb-4 form-check  me-2"> <input type="checkbox" class="form-check-input"> </div>
                                    <div class="flex-1">
                                    <div class="flex items-start justify-between">
                                        <p class="mb-0 text-[0.913rem] font-medium">Meeting with Sales Team</p>
                                        <div class=""> <a href="javascript:void(0);" class="text-danger op-7 mg-e-6"
                                            data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i
                                            class="fe fe-trash text-[0.913rem] font-medium"></i></a> </div>
                                    </div>
                                    <p class="text-textmuted mb-1 fs-13">Nonumy erat ipsum ut ipsum</p>
                                    <div class="flex-between"> <span class="text-textmuted text-[0.75rem] leading-none"><i
                                            class="bi bi-calendar4-event me-2 !text-[0.65rem]"></i>15-03-22</span> <span
                                        class="badge badge-sm !rounded-full float-end !text-danger bg-danger/10">not
                                        Started</span> </div>
                                    </div>
                                </div>
                                <div class="todolist flex">
                                    <div class="mb-4 form-check me-2"> <input type="checkbox" class="form-check-input" checked="">
                                    </div>
                                    <div class="flex-1">
                                    <div class="flex items-start justify-between">
                                        <p class="mb-0 text-[0.913rem] font-medium">Customers Meeting</p>
                                        <div class=""> <a href="javascript:void(0);" class="text-danger op-7 mg-e-6"
                                            data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" aria-label="Delete"><i
                                            class="fe fe-trash text-[0.913rem] font-medium"></i></a> </div>
                                    </div>
                                    <p class="text-textmuted mb-1 fs-13">Sed labore ut sed</p>
                                    <div class="flex-between"> <span class="text-textmuted text-[0.75rem] leading-none"><i
                                            class="bi bi-calendar4-event me-2 !text-[0.65rem]"></i>15-03-22</span> <span
                                        class="badge badge-sm !rounded-full float-end !text-success bg-success/10">completed</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-12 xxl:col-span-6">
                        <div class="box">
                        <div class="box-header !pb-3 !border-b border-defaultborder dark:border-defaultborder/10 ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Deals Overview</h4>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Another action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            
                            </div>
                            <div>
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Visualizing Your Deal Landscape and Evaluating Your Opportunities.</p>
                            </div>
                        </div>
                        <div class="box-body !p-0">
                            <div class="overflow-auto">
                            <table class="ti-custom-table ti-custom-table-head">
                                <thead>
                                <tr>
                                    <th scope="col" class="text-center">Lead</th>
                                    <th scope="col" class="text-center">Lead Source</th>
                                    <th scope="col" class="w-[18%]">Probability</th>
                                    <th scope="col" class="">Amount</th>
                                    <th scope="col" class="">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="leading-none !text-gray-800 dark:!text-white">
                                    <div class="flex space-x-3 rtl:space-x-reverse text-start"> <img
                                        class="avatar avatar-md !rounded-full" src="{{asset('build/assets/images/faces/15.jpg')}}"
                                        alt="Image Description">
                                        <div class="block my-auto">
                                        <p class="block text-[0.913rem] font-semibold !mb-2 text-gray-800 dark:text-white">
                                            Socrates
                                            Itumay</p><span
                                            class="block text-xs text-textmuted !font-normal my-auto  min-w-[180px]">socratesitumay@gmail.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="">Online store</td>
                                    <td>
                                    <div class="flex items-center gap-2">
                                        <div>60%</div>
                                        <div class="progress progress-xs  course-status-progress progress-animate"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped !bg-primary w-3/5"></div>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="">$54,900</td>
                                    <td class=" text-sm"><span
                                        class="badge leading-none bg-primary/10 text-primary rounded-sm">Qualified</span></td>
                                </tr>
                                <tr>
                                    <td class="leading-none !text-gray-800 dark:!text-white">
                                    <div class="flex space-x-3 rtl:space-x-reverse text-start"> <img
                                        class="avatar avatar-md !rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}"
                                        alt="Image Description">
                                        <div class="block my-auto">
                                        <p class="block text-[0.913rem] font-semibold !mb-3 text-gray-800 dark:text-white">Json
                                            Taylor
                                        </p><span
                                            class="block text-xs text-textmuted !font-normal my-auto">jsontaylor2416@gmail.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="">Online store</td>
                                    <td>
                                    <div class="flex items-center gap-2">
                                        <div>70%</div>
                                        <div class="progress progress-xs  course-status-progress progress-animate"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped !bg-danger w-3/4"></div>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="">$16,800</td>
                                    <td class=" text-sm"><span
                                        class="badge leading-none bg-warning/10 text-warning rounded-sm">Review</span></td>
                                </tr>
                                <tr>
                                    <td class="leading-none !text-gray-800 dark:!text-white">
                                    <div class="flex space-x-3 rtl:space-x-reverse text-start"> <img
                                        class="avatar avatar-md !rounded-full" src="{{asset('build/assets/images/company-logos/7.png')}}"
                                        alt="Image Description">
                                        <div class="block my-auto">
                                        <p class="block text-[0.913rem] font-semibold mb-3 text-gray-800 dark:text-white">Inferno
                                            Tech
                                            Et.</p><span
                                            class="block text-xs text-textmuted !font-normal my-auto">InfernoTech@gmail.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="">External Link</td>
                                    <td>
                                    <div class="flex items-center gap-2">
                                        <div>53%</div>
                                        <div class="progress progress-xs course-status-progress progress-animate me-2"
                                        aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped !bg-warning w-[38%]"></div>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="">$12,000</td>
                                    <td class=" text-sm"><span
                                        class="badge leading-none bg-success/10 text-success rounded-sm">Closed Won</span></td>
                                </tr>
                                <tr>
                                    <td class="leading-none !text-gray-800 dark:!text-white">
                                    <div class="flex space-x-3 rtl:space-x-reverse text-start"> <img
                                        class="avatar avatar-md !rounded-full" src="{{asset('build/assets/images/faces/17.jpg')}}"
                                        alt="Image Description">
                                        <div class="block my-auto">
                                        <p class="block text-[0.913rem] font-semibold mb-3 text-gray-800 dark:text-white">Andrew
                                            Garfield</p><span
                                            class="block text-xs text-textmuted !font-normal my-auto">andrewgarfield@gmail.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="">External Link</td>
                                    <td>
                                    <div class="flex items-center gap-2">
                                        <div>100%</div>
                                        <div class="progress progress-xs course-status-progress progress-animate me-2"
                                        aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped !bg-info w-[100%]"></div>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="">$16,800</td>
                                    <td class=" text-sm"><span class="badge leading-none bg-danger/10 text-danger rounded-sm">Closed
                                        Lost</span></td>
                                </tr>
                                <tr>
                                    <td class="leading-none !text-gray-800 dark:!text-white">
                                    <div class="flex space-x-3 rtl:space-x-reverse text-start"> <img
                                        class="avatar avatar-md !rounded-full" src="{{asset('build/assets/images/company-logos/8.png')}}"
                                        alt="Image Description">
                                        <div class="block my-auto">
                                        <p class="block text-[0.913rem] font-semibold mb-3 text-gray-800 dark:text-white">Jack
                                            Pvt.Ltd
                                        </p><span
                                            class="block text-xs text-textmuted !font-normal my-auto">JackTech@gmail.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="">Online store</td>
                                    <td>
                                    <div class="flex items-center gap-2">
                                        <div>60%</div>
                                        <div class="progress progress-xs course-status-progress progress-animate me-2"
                                        aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-striped !bg-success w-[50%]"></div>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="">$12,000</td>
                                    <td class=" text-sm"><span
                                        class="badge leading-none bg-success/10 text-success rounded-sm">Closed Won</span></td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-12 xxl:col-span-3">
                        <div class="box overflow-hidden">
                        <div class="box-header !pb-3 ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Deal Status</h4>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Another action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            
                            </div>
                            <div>
                            <p class="text-[.75rem] text-textmuted font-normal mb-0"> Evaluating Your Deals Status,Assessing Your Deal Pipeline.</p>
                            </div>
                        </div>
                        <div class="box-body !p-0">
                            <ul class="list-group mb-0 !p-0 daily-statistics">
                            <li class="list-group-item !border-b !border-t !border-defaultborder dark:!border-defaultborder/10 px-4 py-[0.9rem] hover:bg-light">
                                <div class="flex items-center">
                                <div>
                                    <p class="mb-1 text-[0.913rem] text-textmuted">Total Deals</p>
                                    <div class="flex items-center">
                                    <h6 class="font-medium mb-0">2,042</h6>
                                    <span class="badge bg-primary/10 !mb-0 !text-[0.7rem] ms-3 !text-primary">+12.5%</span>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <div id="line-graph1"></div>
                                    <a href="javascript:void(0);"
                                    class="text-[0.75rem] mt-1 font-normal text-textmuted float-end inline-flex">
                                    <span>See more  <i class="ms-1 fe fe-arrow-right text-[0.75rem]"></i></span>
                                    </a>
                                </div>
                                </div>
                            </li>
                            <li class="list-group-item !border-b !border-defaultborder dark:!border-defaultborder/10 px-4 py-[0.9rem] hover:bg-light">
                                <div class="flex items-center">
                                <div>
                                    <p class="mb-1 text-[0.913rem] text-textmuted">Pending Deals</p>
                                    <div class="flex items-center">
                                    <h6 class="font-medium mb-0">948</h6>
                                    <span class="badge bg-danger/10 !mb-0 !text-[0.7rem] ms-3 !text-danger">-10.5%</span>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <div id="line-graph2"></div>
                                    <a href="javascript:void(0);"
                                    class="text-[0.75rem] mt-1 font-normal text-textmuted float-end inline-flex">
                                    <span>See more  <i class="ms-1 fe fe-arrow-right text-[0.75rem]"></i></span>
                                    </a>
                                </div>
                                </div>
                            </li>
                            <li class="list-group-item !border-b !border-defaultborder dark:!border-defaultborder/10 px-4 py-[0.9rem] hover:bg-light">
                                <div class="flex items-center">
                                <div>
                                    <p class="mb-1 text-[0.913rem] text-textmuted">Success Deals</p>
                                    <div class="flex items-center">
                                    <h6 class="font-medium mb-0">12,042</h6>
                                    <span class="badge bg-success/10 !mb-0 !text-[0.7rem] ms-3 !text-success">+11.5%</span>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <div id="line-graph3"></div>
                                    <a href="javascript:void(0);"
                                    class="text-[0.75rem] mt-1 font-normal text-textmuted float-end inline-flex">
                                    <span>See more  <i class="ms-1 fe fe-arrow-right text-[0.75rem]"></i></span>
                                    </a>
                                </div>
                                </div>
                            </li>
                            <li class="list-group-item !border-b !border-defaultborder dark:!border-defaultborder/10 px-4 py-[0.9rem] hover:bg-light">
                                <div class="flex items-center">
                                <div>
                                    <p class="mb-1 text-[0.913rem] text-textmuted">Upcomming Deals</p>
                                    <div class="flex items-center">
                                    <h6 class="font-medium mb-0">3,678</h6>
                                    <span class="badge bg-purplemain/10 !mb-0 !text-[0.7rem] ms-3 !text-purplemain">+12.5%</span>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <div id="line-graph4"></div>
                                    <a href="javascript:void(0);"
                                    class="text-[0.75rem] mt-1 font-normal text-textmuted float-end inline-flex">
                                    <span>See more  <i class="ms-1 fe fe-arrow-right text-[0.75rem]"></i></span>
                                    </a>
                                </div>
                                </div>
                            </li>
                            <li class="list-group-item px-4 !border-defaultborder dark:!border-defaultborder/10 py-[0.9rem] hover:bg-light">
                                <div class="flex items-center">
                                <div>
                                    <p class="mb-1 !text-[0.913rem] text-textmuted">Rejected Deals</p>
                                    <div class="flex items-center">
                                    <h6 class="font-medium mb-0">11,442</h6>
                                    <span class="badge bg-warning/10 !mb-0 !text-[0.7rem] ms-3 !text-warning">+15.5%</span>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <div id="line-graph5"></div>
                                    <a href="javascript:void(0);"
                                    class="text-[0.75rem] mt-1 font-normal text-textmuted float-end inline-flex">
                                    <span>See more  <i class="ms-1 fe fe-arrow-right text-[0.75rem]"></i></span>
                                    </a>
                                </div>
                                </div>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                        <div class="box-header ">
                            <div class="flex justify-between">
                            <div class="box-title"> Top Deals </div>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Another action</a></li>
                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                    href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </div>
                            </div>
                            <p class="text-[.75rem] mb-0 text-textmuted font-normal"> A Closer Look at Your Prime Engagement,Understanding Your Most Prominent Engagement</p>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table
                                class="table table-auto order-table ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                                <thead class="bg-light dark:bg-black/20">
                                <tr>
                                    <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">S.No </th>
                                    <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Deal </th>
                                    <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Sales Rep
                                    </th>
                                    <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Mail</th>
                                    <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Amount</th>
                                    <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Status</th>
                                    <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Location
                                    </th>
                                    <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Sales Cycle
                                    </th>
                                    <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td> <span> 01 </span> </td>
                                    <td> <span class="font-medium"> Xenon Tech. Ed.</span> </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                            src="{{asset('build/assets/images/faces/15.jpg')}}" alt=""> </span> </div>
                                        <div class="fs-14">Simon Cowall</div>
                                    </div>
                                    </td>
                                    <td> mayorkelly@gmail.com </td>
                                    <td> <span class="font-medium fs-14">$4320.29</span> </td>
                                    <td> <span class="badge bg-primary/10 !text-primary">Hot Leads</span> </td>
                                    <td>
                                    <div class="d-inline-flex align-items-center"> <i
                                        class="ri-map-pin-line text-textmuted fs-10"></i> <span class="ms-1">Germany</span> </div>
                                    </td>
                                    <td> <span>43 Days</span> </td>
                                    <td>
                                    <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20"><i
                                            class="ri-download-2-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-info !border-info/20"><i class="ri-edit-line"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span> 02 </span> </td>
                                    <td> <span class="font-medium">Ideal IT Sol.</span> </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                            src="{{asset('build/assets/images/faces/4.jpg')}}" alt=""> </span> </div>
                                        <div class="fs-14">Meisha Kerr</div>
                                    </div>
                                    </td>
                                    <td> andrewgarfield@gmail.com </td>
                                    <td> <span class="font-medium fs-14">$6745.99</span> </td>
                                    <td> <span class="badge bg-info/10 !text-info">New Leads</span> </td>
                                    <td>
                                    <div class="d-inline-flex align-items-center"> <i
                                        class="ri-map-pin-line text-textmuted fs-10"></i> <span class="ms-1">Canada</span> </div>
                                    </td>
                                    <td> <span>45 Days</span> </td>
                                    <td>
                                    <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20"><i
                                            class="ri-download-2-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-info !border-info/20"><i class="ri-edit-line"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span> 03 </span> </td>
                                    <td> <span class="font-medium">Inferno Xo</span> </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                            src="{{asset('build/assets/images/faces/5.jpg')}}" alt=""> </span> </div>
                                        <div class="fs-14">Jessica</div>
                                    </div>
                                    </td>
                                    <td> simoncowel234@gmail.com </td>
                                    <td> <span class="font-medium fs-14">$1176.89</span> </td>
                                    <td> <span class="badge bg-danger/10 !text-danger">Lost Leads</span> </td>
                                    <td>
                                    <div class="d-inline-flex align-items-center"> <i
                                        class="ri-map-pin-line text-textmuted fs-10"></i> <span class="ms-1">Singapore</span>
                                    </div>
                                    </td>
                                    <td> <span>50 Days</span> </td>
                                    <td>
                                    <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20"><i
                                            class="ri-download-2-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-info !border-info/20"><i class="ri-edit-line"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span> 04 </span> </td>
                                    <td> <span class="font-medium">Myami Group &amp; Tech.</span> </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                            src="{{asset('build/assets/images/faces/6.jpg')}}" alt=""> </span> </div>
                                        <div class="fs-14">Amanda B</div>
                                    </div>
                                    </td>
                                    <td> mirindahers@gmail.com </td>
                                    <td> <span class="font-medium fs-14">$1899.99</span> </td>
                                    <td> <span class="badge bg-primary/10 !text-primary">Hot Leads</span> </td>
                                    <td>
                                    <div class="d-inline-flex align-items-center"> <i
                                        class="ri-map-pin-line text-textmuted fs-10"></i> <span class="ms-1">USA</span> </div>
                                    </td>
                                    <td> <span>55 Days</span> </td>
                                    <td>
                                    <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20"><i
                                            class="ri-download-2-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-info !border-info/20"><i class="ri-edit-line"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span> 05 </span> </td>
                                    <td> <span class="font-medium">Mevengo Tech Et Sed</span> </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                            src="{{asset('build/assets/images/faces/11.jpg')}}" alt=""> </span> </div>
                                        <div class="fs-14">Jason Stathman</div>
                                    </div>
                                    </td>
                                    <td> jacobsmith@gmail.com </td>
                                    <td> <span class="font-medium fs-14">$1867.29</span> </td>
                                    <td> <span class="badge bg-warning/10 !text-warning">Warm Leads</span> </td>
                                    <td>
                                    <div class="d-inline-flex align-items-center"> <i
                                        class="ri-map-pin-line text-textmuted fs-10"></i> <span class="ms-1">Europe</span> </div>
                                    </td>
                                    <td> <span>30 Days</span> </td>
                                    <td>
                                    <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20"><i
                                            class="ri-download-2-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-info !border-info/20"><i class="ri-edit-line"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span> 06 </span> </td>
                                    <td> <span class="font-medium">Lackme Info Et.</span> </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                            src="{{asset('build/assets/images/faces/13.jpg')}}" alt=""> </span> </div>
                                        <div class="fs-14">Khabib Hussain</div>
                                    </div>
                                    </td>
                                    <td> Hussain@gmail.com </td>
                                    <td> <span class="font-medium fs-14">$2439.99</span> </td>
                                    <td> <span class="badge bg-success/10 !text-success">Cold Leads</span> </td>
                                    <td>
                                    <div class="d-inline-flex align-items-center"> <i
                                        class="ri-map-pin-line text-textmuted fs-10"></i> <span class="ms-1">Canada</span> </div>
                                    </td>
                                    <td> <span>35 Days</span> </td>
                                    <td>
                                    <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20"><i
                                            class="ri-download-2-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-info !border-info/20"><i class="ri-edit-line"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="box-footer !pt-0 !border-t-0">
                            <nav aria-label="Page navigation mb-2">
                            <ul class="ti-pagination justify-center sm:justify-end">
                                <li class="page-item disabled">
                                <a class="page-link px-3 py-[0.375rem]">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                <li class="page-item active"><a class="page-link px-3 py-[0.375rem]"
                                    href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                                <li class="page-item">
                                <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                                </li>
                            </ul>
                            </nav>
                        </div>
                        </div>
                    </div>
                    </div>

@endsection

@section('scripts')
	
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- JSVector Maps JS -->
        <script src="{{asset('build/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>

        <!-- JSVector Maps MapsJS -->
        <script src="{{asset('build/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>
        @vite('resources/assets/js/us-merc-en.js')

        <!-- CRM-Dashboard -->
        @vite('resources/assets/js/crmdashboard.js')

@endsection
