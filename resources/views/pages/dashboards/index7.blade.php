
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Projects</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Dashboard <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Projects 
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
                    <div class="xxl:col-span-9 xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-4 lg:col-span-4 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="">
                                <div class="flex justify-between  mb-1">
                                    <span class="avatar avatar-md icon-1 bg-primary">
                                    <i class="ti ti-file-check text-[1.25rem] text-white"></i>
                                    </span>
                                    <span class="text-[1rem] mb-0 font-medium">Complete Projects</span>
                                </div>
                                </div>
                                <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-[1.5rem] font-medium mb-0 flex items-center">12,432
                                    </span>
                                    <span
                                    class="badge bg-success/20 text-success py-1 !rounded-full font-medium ltr:mr-1 rtl:ml-1">1.35%</span>
                                    <span class="text-[0.75rem] text-textmuted">Increases Today</span>
                                </div>
                                <div id="compltedprojects"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 lg:col-span-4 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="">
                                <div class="flex justify-between  mb-1">
                                    <span class="avatar avatar-md icon-1 bg-danger">
                                    <i class="ti ti-briefcase text-[1.25rem] text-white"></i>
                                    </span>
                                    <span class="text-[1rem] mb-0 font-medium">Overdue Projects</span>
                                </div>
                                </div>
                                <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-[1.5rem] font-medium mb-0 flex items-center">1,463
                                    </span>
                                    <span
                                    class="badge bg-danger/20 text-danger py-1 !rounded-full font-medium ltr:mr-1 rtl:ml-1">1.65%</span>
                                    <span class="text-[0.75rem] text-textmuted">Increases Today</span>
                                </div>
                                <div id="overdueprojects"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 lg:col-span-4 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="">
                                <div class="flex justify-between  mb-1">
                                    <span class="avatar avatar-md icon-1 bg-success">
                                    <i class="ti ti-chart-pie-2 text-[1.25rem] text-white"></i>
                                    </span>
                                    <span class="text-[1rem] mb-0 font-medium">Pending Projects</span>
                                </div>
                                </div>
                                <div class="flex items-center justify-between">
                                <div>
                                    <span class="text-[1.5rem] font-medium mb-0 flex items-center">16,363
                                    </span>
                                    <span
                                    class="badge bg-success/20 text-success py-1 !rounded-full font-medium ltr:mr-1 rtl:ml-1">0.75%</span>
                                    <span class="text-[0.75rem] text-textmuted">Increases Today</span>
                                </div>
                                <div id="pendingprojects"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-7 col-span-12">
                            <div class="box">
                            <div class="box-header ">
                                <div class="flex justify-between">
                                <h4 class="box-title mb-2">Projects Analysis</h4>
                                <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                    class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Project Performance Dashboard,
                                    Monitoring Project Metrics.</p>
                                </div>
                            </div>
                            <div class="box-body !pb-0">
                                <div id="projectsanalysis"></div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-5 col-span-12">
                            <div class="box">
                            <div class="box-header ">
                                <div class="justify-between flex">
                                <h4 class="box-title mb-2">Upcoming Events</h4>
                                <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                    class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Upcoming Events, Previewing Scheduled
                                    Activities.</p>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="overflow-auto">
                                <nav class="flex space-x-1 rtl:space-x-reverse justify-between mb-6" aria-label="Tabs"
                                    role="tablist"> <button type="button"
                                    class="hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-[0.925rem] leading-none font-medium text-center bg-light text-defaulttextcolor rounded-sm hover:text-defaulttextcolor dark:bg-light dark:text-white/70 dark:hover:text-gray-300 active"
                                    id="mon-item-1" data-hs-tab="#mon-1" aria-controls="mon-1" role="tab"> <span
                                        class="block mb-1">09</span> <span class="block mb-0 opacity-70 text-xs">Mon</span>
                                    </button> <button type="button"
                                    class="hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-[0.925rem] leading-none font-medium text-center bg-light text-defaulttextcolor rounded-sm hover:text-defaulttextcolor dark:bg-light dark:text-white/70 dark:hover:text-gray-300"
                                    id="tue-item-2" data-hs-tab="#tue-2" aria-controls="tue-2" role="tab"> <span
                                        class="block mb-1">10</span> <span class="block mb-0 opacity-70 text-xs">Tue</span>
                                    </button> <button type="button"
                                    class="hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-[0.925rem] leading-none font-medium text-center bg-light text-defaulttextcolor rounded-sm hover:text-defaulttextcolor dark:bg-light dark:text-white/70 dark:hover:text-gray-300"
                                    id="wed-item-2" data-hs-tab="#wed-2" aria-controls="wed-2" role="tab"> <span
                                        class="block mb-1">11</span> <span class="block mb-0 opacity-70 text-xs">Wed</span>
                                    </button> <button type="button"
                                    class="hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-[0.925rem] leading-none font-medium text-center bg-light text-defaulttextcolor rounded-sm hover:text-defaulttextcolor dark:bg-light dark:text-white/70 dark:hover:text-gray-300"
                                    id="thu-item-2" data-hs-tab="#thu-2" aria-controls="thu-2" role="tab"> <span
                                        class="block mb-1">12</span> <span class="block mb-0 opacity-70 text-xs">Thu</span>
                                    </button> <button type="button"
                                    class="hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-[0.925rem] leading-none font-medium text-center bg-light text-defaulttextcolor rounded-sm hover:text-defaulttextcolor dark:bg-light dark:text-white/70 dark:hover:text-gray-300"
                                    id="fri-item-2" data-hs-tab="#fri-2" aria-controls="fri-2" role="tab"> <span
                                        class="block mb-1">13</span> <span class="block mb-0 opacity-70 text-xs">Fri</span>
                                    </button> <button type="button"
                                    class="hidden sm:block hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-[0.925rem] leading-none font-medium text-center bg-light text-defaulttextcolor rounded-sm hover:text-defaulttextcolor dark:bg-light dark:text-white/70 dark:hover:text-gray-300"
                                    id="sat-item-2" data-hs-tab="#sat-2" aria-controls="sat-2" role="tab"> <span
                                        class="block mb-1">14</span> <span class="block mb-0 opacity-70 text-xs">Sat</span>
                                    </button> <button type="button"
                                    class="hidden sm:block hs-tab-active:text-white hs-tab-active:bg-primary dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white p-2 sm:p-3 w-full text-[0.925rem] leading-none font-medium text-center bg-light text-defaulttextcolor rounded-sm hover:text-defaulttextcolor dark:bg-light dark:text-white/70 dark:hover:text-gray-300"
                                    id="sun-item-2" data-hs-tab="#sun-2" aria-controls="sun-2" role="tab"> <span
                                        class="block mb-1">15</span> <span class="block mb-0 opacity-70 text-xs">Sun</span>
                                    </button> </nav>
                                <div class="pt-2">
                                    <div id="mon-1" class="" role="tabpanel" aria-labelledby="mon-item-1">
                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Meeting with client</p>
                                            <p class="mb-0 text-textmuted">Video Conference</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Lunch with team members</p>
                                            <p class="mb-0 text-textmuted">Dolores Ait Labore Sit</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">General board meeting</p>
                                            <p class="mb-0 text-textmuted">Golden PArk</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Create New Registration Page</p>
                                            <p class="mb-0 text-textmuted">2UA Project</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    </div>
                                    <div id="tue-2" class="hidden" role="tabpanel" aria-labelledby="tue-item-2">
                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Meeting with client</p>
                                            <p class="mb-0 text-textmuted">Video Conference</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Lunch with team members</p>
                                            <p class="mb-0 text-textmuted">Dolores Ait Labore Sit</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">General board meeting</p>
                                            <p class="mb-0 text-textmuted">Golden PArk</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Create New Registration Page</p>
                                            <p class="mb-0 text-textmuted">2UA Project</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    </div>
                                    <div id="wed-2" class="hidden" role="tabpanel" aria-labelledby="wed-item-2">
                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Meeting with client</p>
                                            <p class="mb-0 text-textmuted">Video Conference</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Lunch with team members</p>
                                            <p class="mb-0 text-textmuted">Dolores Ait Labore Sit</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">General board meeting</p>
                                            <p class="mb-0 text-textmuted">Golden PArk</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Create New Registration Page</p>
                                            <p class="mb-0 text-textmuted">2UA Project</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    </div>
                                    <div id="thu-2" class="hidden" role="tabpanel" aria-labelledby="thu-item-2">
                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Meeting with client</p>
                                            <p class="mb-0 text-textmuted">Video Conference</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Lunch with team members</p>
                                            <p class="mb-0 text-textmuted">Dolores Ait Labore Sit</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">General board meeting</p>
                                            <p class="mb-0 text-textmuted">Golden PArk</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Create New Registration Page</p>
                                            <p class="mb-0 text-textmuted">2UA Project</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    </div>
                                    <div id="fri-2" class="hidden" role="tabpanel" aria-labelledby="fri-item-2">
                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Meeting with client</p>
                                            <p class="mb-0 text-textmuted">Video Conference</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Lunch with team members</p>
                                            <p class="mb-0 text-textmuted">Dolores Ait Labore Sit</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">General board meeting</p>
                                            <p class="mb-0 text-textmuted">Golden PArk</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Create New Registration Page</p>
                                            <p class="mb-0 text-textmuted">2UA Project</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    </div>
                                    <div id="sat-2" class="hidden" role="tabpanel" aria-labelledby="sat-item-2">
                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Meeting with client</p>
                                            <p class="mb-0 text-textmuted">Video Conference</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Lunch with team members</p>
                                            <p class="mb-0 text-textmuted">Dolores Ait Labore Sit</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">General board meeting</p>
                                            <p class="mb-0 text-textmuted">Golden PArk</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Create New Registration Page</p>
                                            <p class="mb-0 text-textmuted">2UA Project</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    </div>
                                    <div id="sun-2" class="hidden" role="tabpanel" aria-labelledby="sun-item-2">
                                    <ul class="list-unstyled mb-0 upcoming-events-list">
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Meeting with client</p>
                                            <p class="mb-0 text-textmuted">Video Conference</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>9:00am - 10:00am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Lunch with team members</p>
                                            <p class="mb-0 text-textmuted">Dolores Ait Labore Sit</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>12:00pm - 12:45am</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">General board meeting</p>
                                            <p class="mb-0 text-textmuted">Golden PArk</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4:00pm - 5:30pm</span>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="ti-list-group !border-0 p-0 w-full">
                                        <div class="sm:flex justify-between w-full">
                                            <div class="flex-auto">
                                            <p class="mb-0 text-[0.925rem] font-medium">Create New Registration Page</p>
                                            <p class="mb-0 text-textmuted">2UA Project</p>
                                            </div>
                                            <div> <span class="text-textmuted inline-flex"><i
                                                class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>5:00pm - 5:45pm</span>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-12 md:col-span-6 col-span-12">
                            <div class="box !bg-primary !text-white">
                            <div class="box-body !p-0">
                                <div class="flex relative p-5 !pb-0">
                                <div class="flex-1">
                                    <div class="flex items-center mb-1">
                                    <p class="mb-0 font-medium text-base !text-white">Total Clients</p><span
                                        class="badge rounded-sm bg-gray-100 text-gray-500 py-1 ltr:ml-2 rtl:mr-2">High</span>
                                    </div>
                                    <p class="mb-0 font-medium"> <span class=" !text-white ltr:mr-1 rtl:ml-1">Tasks:</span>
                                    <span class="opacity-60 !text-white">112 / 369</span>
                                    </p>
                                </div>
                                <div class="ltr:ml-2 rtl:mr-2 min-w-fit">
                                    <div class="avatar bg-white/20 text-white ring-transparent p-3"><i
                                        class="ri-group-2-line text-2xl leading-none"></i></div>
                                </div> <a aria-label="anchor" href="{{url('index7')}}" class="absolute h-full w-full top-0 left-0"></a>
                                </div>
                                <div class="flex justify-between items-center p-5 !pb-0">
                                <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                    class="inline-block avatar avatar-sm !rounded-full ring-0" src="{{asset('build/assets/images/faces/11.jpg')}}"
                                    alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full ring-0"
                                    src="{{asset('build/assets/images/faces/15.jpg')}}" alt="Image Description"> <img
                                    class="inline-block avatar avatar-sm !rounded-full ring-0" src="{{asset('build/assets/images/faces/16.jpg')}}"
                                    alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full ring-0"
                                    src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description"> <span
                                    class="inline-flex items-center justify-center avatar avatar-sm !rounded-full bg-white/20 border-2 border-white/20 ring-0">
                                    <span class="font-medium text-white leading-none">9+</span> </span> </div>
                                <div class="ltr:ml-1 rtl:mr-1 min-w-fit"> <a href="javascript:void(0);"
                                    class="ltr:mr-2 rtl:ml-2 opacity-60 text-[0.925rem] text-white inline-flex"><i
                                        class="ri-attachment-2 ltr:mr-1 rtl:ml-1 text-[0.925rem] "></i>3</a> <a
                                    href="javascript:void(0);" class="opacity-60 text-[0.925rem] text-white inline-flex"><i
                                        class="ri-chat-3-line ltr:mr-1 rtl:ml-1 text-[0.925rem]"></i>29</a> </div>
                                </div>
                                <div id="totalclients" class="pe-2"></div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-12 md:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                            <div class="box-body !p-0">
                                <div class="px-4 pt-4">
                                <div class="hs-dropdown ti-dropdown float-end">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                    class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                <div class="flex items-center mb-3"> <span
                                    class="avatar avatar-md stat-avatar !rounded-full bg-primary/10 !text-primary me-2">
                                    <i class="bi bi-bar-chart text-[1.25rem]"></i> </span>
                                    <p class="mb-0 box-title flex-grow">Tasks Overview</p>
                                </div> <span class="text-[1.25rem] font-medium">$8,889</span> <span
                                    class="text-[0.75rem] text-success ms-1"><i class="ti ti-trending-up mx-1"></i>5.5%</span>
                                </div>
                                <div id="totalRevenue">
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-3 col-span-12">
                        <div class="box">
                        <div class="box-header flex justify-between">
                            <div>
                            <h4 class="box-title mb-2">On Going Tasks</h4>
                            <div>
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Ongoing Tasks Overview, Monitoring
                                Activities.</p>
                            </div>
                            </div>
                            <button class="!py-1 !px-2 ti-btn ti-btn-primary">View All</button>
                        </div>
                        <div class="box-body">
                            <ul class="list-unstyled mb-0">
                            <li class="ti-list-group mb-4 !border-0 !p-0 w-full">
                                <div class="flex w-full">
                                <div class="ltr:mr-3 rtl:ml-3">
                                    <div class="flex"> <input type="checkbox" checked class="form-check-input mt-0.5"
                                        id="hs-default-checkbox"> </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-1">
                                    <h5 class="mb-0 text-[0.875rem] font-medium">Designing a landing
                                        page
                                    </h5>
                                    <div class="hs-dropdown ti-dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                    <div class="flex items-center justify-between">
                                    <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/1.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image Description"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/15.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/21.jpg')}}" alt="Image Description"> </div> <span
                                        class="text-textmuted flex text-xs"><i
                                        class="ri-time-line ltr:mr-1 rtl:ml-1 my-auto "></i>10-04-23</span>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="ti-list-group mb-4 !border-0 !p-0 w-full">
                                <div class="flex w-full">
                                <div class="ltr:mr-3 rtl:ml-3">
                                    <div class="flex"> <input type="checkbox" class="form-check-input mt-0.5"
                                        id="hs-default-checkbox2"> </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-1">
                                    <h5 class="mb-0 text-[0.875rem] font-medium">Fixing Responsive
                                        Issues
                                    </h5>
                                    <div class="hs-dropdown ti-dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                    <div class="flex items-center justify-between">
                                    <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/15.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/21.jpg')}}" alt="Image Description"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/13.jpg')}}"
                                        alt="Image Description"> <span
                                        class="inline-flex items-center justify-center avatar avatar-sm  !rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">9+</span> </span>
                                    </div> <span class="text-textmuted flex text-xs"><i
                                        class="ri-time-line ltr:mr-1 rtl:ml-1 my-auto "></i>10-04-23</span>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="ti-list-group mb-4 !border-0 !p-0 w-full">
                                <div class="flex w-full">
                                <div class="ltr:mr-3 rtl:ml-3">
                                    <div class="flex"> <input type="checkbox" checked class="form-check-input mt-0.5"
                                        id="hs-default-checkbox3"> </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-1">
                                    <h5 class="mb-0 text-[0.875rem] font-medium">Fixing Bugs</h5>
                                    <div class="hs-dropdown ti-dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                    <div class="flex items-center justify-between">
                                    <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/12.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/21.jpg')}}" alt="Image Description"> </div> <span
                                        class="text-textmuted flex text-xs"><i
                                        class="ri-time-line ltr:mr-1 rtl:ml-1 my-auto "></i>10-04-23</span>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="ti-list-group mb-4 !border-0 !p-0 w-full">
                                <div class="flex w-full">
                                <div class="ltr:mr-3 rtl:ml-3">
                                    <div class="flex"> <input type="checkbox" class="form-check-input mt-0.5"
                                        id="hs-default-checkbox4"> </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-1">
                                    <h5 class="mb-0 text-[0.875rem] font-medium">Fixing Javascript
                                        Issues
                                    </h5>
                                    <div class="hs-dropdown ti-dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                    <div class="flex items-center justify-between">
                                    <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/13.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Image Description"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/7.jpg')}}"
                                        alt="Image Description"> </div> <span class="text-textmuted flex text-xs"><i
                                        class="ri-time-line ltr:mr-1 rtl:ml-1 my-auto "></i>10-04-23</span>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="ti-list-group mb-0 !border-0 !p-0 w-full">
                                <div class="flex w-full">
                                <div class="ltr:mr-3 rtl:ml-3">
                                    <div class="flex"> <input type="checkbox" checked class="form-check-input mt-0.5"
                                        id="hs-default-checkbox5"> </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-1">
                                    <h5 class="mb-0 text-[0.875rem] font-medium">Adding New Pages
                                    </h5>
                                    <div class="hs-dropdown ti-dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fe fe-more-horizontal text-[0.8rem]"></i>
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
                                    <div class="flex items-center justify-between">
                                    <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/17.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/11.jpg')}}" alt="Image Description"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/21.jpg')}}"
                                        alt="Image Description"> </div> <span class="text-textmuted flex text-xs"><i
                                        class="ri-time-line ltr:mr-1 rtl:ml-1 my-auto "></i>10-04-23</span>
                                    </div>
                                </div>
                                </div>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 col-span-12">
                        <div class="box">
                        <div class="box-header !pb-3 !border-b">
                            <div class=" flex justify-between">
                            <h4 class="box-title mb-2">On Going Projects</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Ongoing Projects Summary, A Comprehensive
                                Look at Active Initiatives.</p>
                            </div>
                        </div>
                        <div class="box-body !p-0">
                            <div class="overflow-auto">
                            <table class="table ti-custom-table-head w-full">
                                <thead>
                                <tr>
                                    <th scope="col" class="text-center ">Member</th>
                                    <th scope="col" class="">Member Id</th>
                                    <th scope="col" class="">Role</th>
                                    <th scope="col" class="">Hours</th>
                                    <th scope="col" class="">Status</th>
                                    <th scope="col" class="">Tasks</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td class="leading-none ">
                                    <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3"> <span class="avatar avatar-md"><img
                                            src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img" class="!rounded-full"></span> </div>
                                        <div class="flex-1">
                                        <h6 class="font-medium text-[0.925rem]">Richard Dom</h6> <span
                                            class="text-xs text-textmuted">richarddom1116@demo.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="!text-primary">#HD1245</td>
                                    <td class="">Team Leader</td>
                                    <td class="">31h<span class="ltr:ml-2 rtl:mr-2 text-textmuted ">/ 36h</span></td>
                                    </td>
                                    <td class=" text-[0.925rem]"><span
                                        class="badge leading-none bg-primary/10 !text-primary rounded-sm py-1">Online</span></td>
                                    <td class=""> <span class="text-[0.925rem] font-medium">143</span>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td class="leading-none ">
                                    <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3"> <span class="avatar avatar-md"><img
                                            src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img" class="!rounded-full"></span> </div>
                                        <div class="flex-1">
                                        <h6 class="font-medium text-[0.925rem]">Jennifer Tab</h6> <span
                                            class="text-xs text-textmuted">jenny258@demo.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="!text-primary">#HD1258</td>
                                    <td class="">Project Manager</td>
                                    <td class="">11h<span class="ltr:ml-2 rtl:mr-2 text-textmuted ">/ 20h</span></td>
                                    <td class=" text-[0.925rem]"><span
                                        class="badge leading-none bg-primary/10 !text-primary rounded-sm py-1">Online</span></td>
                                    <td class=""> <span class="text-[0.925rem] font-medium">186</span> </td>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td class="leading-none ">
                                    <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3"> <span class="avatar avatar-md"><img
                                            src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img" class="!rounded-full"></span> </div>
                                        <div class="flex-1">
                                        <h6 class="font-medium text-[0.925rem]">Nikki Jey</h6> <span
                                            class="text-xs text-textmuted">nikkiJ141@demo.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="!text-primary">#HD1375</td>
                                    <td class="">UI Developer</td>
                                    <td class="">20h<span class="ltr:ml-2 rtl:mr-2 text-textmuted ">/ 22h</span></td>
                                    </td>
                                    <td class=" text-[0.925rem]"><span
                                        class="badge leading-none bg-danger/10 !text-danger rounded-sm py-1">Offline</span></td>
                                    <td class=""> <span class="text-[0.925rem] font-medium">652</span>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td class="leading-none ">
                                    <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3"> <span class="avatar avatar-md"><img
                                            src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img" class="!rounded-full"></span> </div>
                                        <div class="flex-1">
                                        <h6 class="font-medium text-[0.925rem]">Arifa Zed</h6> <span
                                            class="text-xs text-textmuted">arifaZ@demo.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="!text-primary">#HD1648</td>
                                    <td class="">Web Developer</td>
                                    <td class="">83h<span class="ltr:ml-2 rtl:mr-2 text-textmuted ">/ 83h</span></td>
                                    </td>
                                    <td class=" text-[0.925rem]"><span
                                        class="badge leading-none bg-primary/10 !text-primary rounded-sm py-1">Online</span></td>
                                    <td class=""> <span class="text-[0.925rem] font-medium">752</span>
                                </tr>
                                <tr>
                                    <td class="leading-none ">
                                    <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3"> <span class="avatar avatar-md"><img
                                            src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img" class="!rounded-full"></span> </div>
                                        <div class="flex-1">
                                        <h6 class="font-medium text-[0.925rem]">Xiong Yu</h6> <span
                                            class="text-xs text-textmuted">xingzing444@demo.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="!text-primary">#HD1249</td>
                                    <td class="">Team Member</td>
                                    <td class="">51h<span class="ltr:ml-2 rtl:mr-2 text-textmuted ">/ 62h</span></td>
                                    </td>
                                    <td class=" text-[0.925rem]"><span
                                        class="badge leading-none bg-danger/10 !text-danger rounded-sm py-1">Offline</span></td>
                                    <td class=""> <span class="text-[0.925rem] font-medium">268</span>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 col-span-12">
                        <div class="box">
                        <div class="box-header ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Recent Activity</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Insightful Activity, Understanding Recent
                                Activities.</p>
                            </div>
                        </div>
                        <div class="box-body">
                            <ul class="project-list mb-0">
                            <li class="">
                                <div class=""> <i class="task-icon border-primary"></i>
                                <div class="flex">
                                    <h6 class="font-medium mb-0 !text-[0.875rem]">Task Finished</h6> <span
                                    class="font-medium text-textmuted text-[0.75rem] ms-auto my-auto">09 July 2021</span>
                                </div>
                                <p class="text-textmuted text-[0.75rem]">Adam Berry finished task on <a href="javascript:void(0)"
                                    class="font-medium text-primary"> AngularJS Template</a> </p>
                                </div>
                            </li>
                            <li class="">
                                <div class=""> <i class="task-icon border-danger"></i>
                                <div class="flex">
                                    <h6 class="font-medium mb-0 !text-[0.875rem]">New Comment</h6> <span
                                    class="font-medium text-textmuted text-[0.75rem] ms-auto my-auto">05 July 2021</span>
                                </div>
                                <p class="text-textmuted text-[0.75rem]">Victoria commented on Project <a
                                    href="javascript:void(0)" class="font-medium text-primary"> AngularJS Template</a> </p>
                                </div>
                            </li>
                            <li class="">
                                <div class=""> <i class="task-icon  border-success"></i>
                                <div class="flex">
                                    <h6 class="font-medium mb-0 !text-[0.875rem]">Task Overdue</h6> <span
                                    class="font-medium text-textmuted text-[0.75rem] ms-auto my-auto">29 June 2021</span>
                                </div>
                                <p class="text-textmuted text-[0.75rem]">Petey Cruiser finished <a href="javascript:void(0)"
                                    class="font-medium text-primary"> Integrated management</a> </p>
                                </div>
                            </li>
                            <li class="">
                                <div class=""> <i class="task-icon  border-info"></i>
                                <div class="flex">
                                    <h6 class="font-medium mb-0 !text-[0.875rem]">Task Finished</h6> <span
                                    class="font-medium text-textmuted text-[0.75rem] ms-auto my-auto">09 July 2021</span>
                                </div>
                                <p class="text-textmuted text-[0.75rem]">Adam Berry finished task on <a href="javascript:void(0)"
                                    class="font-medium text-primary"> AngularJS Template</a> </p>
                                </div>
                            </li>
                            <li class="">
                                <div class=""> <i class="task-icon  border-warning"></i>
                                <div class="flex">
                                    <h6 class="font-medium mb-0 !text-[0.875rem]">Task Finished</h6> <span
                                    class="font-medium text-textmuted text-[0.75rem] ms-auto my-auto">09 July 2021</span>
                                </div>
                                <p class="text-textmuted text-[0.75rem]">Adam Berry finished task on <a href="javascript:void(0)"
                                    class="font-medium text-primary"> Project Management</a> </p>
                                </div>
                            </li>
                            <li class="!mb-0">
                                <div class=""> <i class="task-icon border-purplemain"></i>
                                <div class="flex">
                                    <h6 class="font-medium mb-0 !text-[0.875rem]">New Comment</h6> <span
                                    class="font-medium text-textmuted text-[0.75rem] ms-auto my-auto">05 July 2021</span>
                                </div>
                                <p class="text-textmuted text-[0.75rem] mb-0">Victoria commented on Project <a
                                    href="javascript:void(0)" class="font-medium text-primary"> AngularJS Template</a> </p>
                                </div>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12">
                        <div class="box">
                        <div class="box-header ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Project Summary</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Project Analysis, Evaluating Project
                                Performance,Key Points from Project Analysis.</p>
                            </div>
                        </div>
                        <div class="box-body project-table">
                            <div class="table-responsive">
                            <table
                                class="table table-auto order-table ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                                <thead class="bg-light dark:bg-black/20">
                                <tr class="">
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">S.no</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Project Title</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Assigned Team</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Tasks</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Progress</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Status</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Due Date</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Action</th>
                                </tr>
                                </thead>
                                <tbody class="">
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td>1</td>
                                    <td> <span class="text-sm text-gray-800 dark:text-white font-semibold">Home Page</span> </td>
                                    <td>
                                    <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/13.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/17.jpg')}}" alt="Image Description"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/9.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/21.jpg')}}" alt="Image Description"> </div>
                                    </td>
                                    <td>110<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 180</span>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="w-2/3">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-primary text-xs text-white text-center"
                                            role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </div>
                                        <div class="ltr:ml-2 rtl:mr-2">25%</div>
                                    </div>
                                    </td>
                                    <td><span
                                        class="truncate whitespace-nowrap inline-block badge !rounded-full text-xs font-medium bg-primary/10 text-primary">In
                                        Progress</span> </td>
                                    <td>14-04-2024</td>
                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                    <a href="javascript:void(0);"
                                    class="m-0 relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-primary !border !border-primary/20">
                                    <i class="ti ti-eye"></i> </a>
                                    <a href="javascript:void(0);"
                                    class="customer-edit m-0  relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-info !border !border-info/20">
                                    <i class="ti ti-pencil"></i> </a>
                                    <a href="javascript:void(0);"
                                    class="m-0 relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-danger !border !border-danger/20">
                                    <i class="ti ti-trash"></i> </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td>2</td>
                                    <td> <span class="text-sm text-gray-800 dark:text-white font-semibold">Landing Design</span>
                                    </td>
                                    <td>
                                    <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/8.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/6.jpg')}}" alt="Image Description"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/21.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image Description"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/4.jpg')}}"
                                        alt="Image Description"> </div>
                                    </td>
                                    <td>95<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 100</span>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="w-2/3">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar !bg-danger text-xs text-white text-center"
                                            role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </div>
                                        <div class="ltr:ml-2 rtl:mr-2">90%</div>
                                    </div>
                                    </td>
                                    <td><span
                                        class="truncate whitespace-nowrap inline-block badge !rounded-full text-xs font-medium bg-danger/10 text-danger">Rejected</span>
                                    </td>
                                    <td>20-04-2024</td>
                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                    <a href="javascript:void(0);"
                                    class="m-0 relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-primary !border !border-primary/20">
                                    <i class="ti ti-eye"></i> </a>
                                    <a href="javascript:void(0);"
                                    class="customer-edit m-0  relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-info !border !border-info/20">
                                    <i class="ti ti-pencil"></i> </a>
                                    <a href="javascript:void(0);"
                                    class="m-0 relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-danger !border !border-danger/20">
                                    <i class="ti ti-trash"></i> </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td>3</td>
                                    <td> <span class="text-sm text-gray-800 dark:text-white font-semibold">New Template
                                        Design</span> </td>
                                    <td>
                                    <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/13.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/12.jpg')}}" alt="Image Description"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/12.jpg')}}"
                                        alt="Image Description"> </div>
                                    </td>
                                    <td>0<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 50</span>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="w-2/3">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-warning text-xs text-white text-center"
                                            role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </div>
                                        <div class="ltr:ml-2 rtl:mr-2">50%</div>
                                    </div>
                                    </td>
                                    <td><span
                                        class="truncate whitespace-nowrap inline-block badge !rounded-full text-xs font-medium bg-warning/10 text-warning">Pending</span>
                                    </td>
                                    <td>29-04-2024</td>
                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                    <a href="javascript:void(0);"
                                    class="m-0 relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-primary !border !border-primary/20">
                                    <i class="ti ti-eye"></i> </a>
                                    <a href="javascript:void(0);"
                                    class="customer-edit m-0  relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-info !border !border-info/20">
                                    <i class="ti ti-pencil"></i> </a>
                                    <a href="javascript:void(0);"
                                    class="m-0 relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-danger !border !border-danger/20">
                                    <i class="ti ti-trash"></i> </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td>4</td>
                                    <td> <span class="text-sm text-gray-800 dark:text-white font-semibold">HR Management Template
                                        Design</span> </td>
                                    <td>
                                    <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/10.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/1.jpg')}}" alt="Image Description"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/21.jpg')}}"
                                        alt="Image Description"> <span
                                        class="inline-flex items-center justify-center avatar avatar-sm  !rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">2+</span> </span>
                                    </div>
                                    </td>
                                    <td>30<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 70</span>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="w-2/3">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar !bg-info text-xs text-white text-center"
                                            role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </div>
                                        <div class="ltr:ml-2 rtl:mr-2">40%</div>
                                    </div>
                                    </td>
                                    <td><span
                                        class="truncate whitespace-nowrap inline-block badge !rounded-full text-xs font-medium bg-primary/10 text-primary">In
                                        Progress</span> </td>
                                    <td>18-04-2024</td>
                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                    <a href="javascript:void(0);"
                                    class="m-0 relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-primary !border !border-primary/20">
                                    <i class="ti ti-eye"></i> </a>
                                    <a href="javascript:void(0);"
                                    class="customer-edit m-0  relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-info !border !border-info/20">
                                    <i class="ti ti-pencil"></i> </a>
                                    <a href="javascript:void(0);"
                                    class="m-0 relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-danger !border !border-danger/20">
                                    <i class="ti ti-trash"></i> </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td>5</td>
                                    <td> <span class="text-sm text-gray-800 dark:text-white font-semibold">Designing New
                                        Template</span> </td>
                                    <td>
                                    <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/11.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/13.jpg')}}" alt="Image Description"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/4.jpg')}}"
                                        alt="Image Description"> <span
                                        class="inline-flex items-center justify-center avatar avatar-sm  !rounded-full bg-gray-100 border-2 border-gray-200 dark:bg-black/20 dark:border-white/10">
                                        <span class="font-medium text-gray-500 leading-none dark:text-white/70">3+</span> </span>
                                    </div>
                                    </td>
                                    <td>120<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 120</span>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="w-2/3">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar !bg-success text-xs text-white text-center"
                                            role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </div>
                                        <div class="ltr:ml-2 rtl:mr-2">100%</div>
                                    </div>
                                    </td>
                                    <td><span
                                        class="truncate whitespace-nowrap inline-block badge !rounded-full text-xs font-medium bg-success/10 text-success">Completed</span>
                                    </td>
                                    <td>02-04-2024</td>
                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                    <a href="javascript:void(0);"
                                    class="m-0 relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-primary !border !border-primary/20">
                                    <i class="ti ti-eye"></i> </a>
                                    <a href="javascript:void(0);"
                                    class="customer-edit m-0  relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-info !border !border-info/20">
                                    <i class="ti ti-pencil"></i> </a>
                                    <a href="javascript:void(0);"
                                    class="m-0 relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-danger !border !border-danger/20">
                                    <i class="ti ti-trash"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td> <span class="text-sm text-gray-800 dark:text-white font-semibold">Documentation
                                        Project</span> </td>
                                    <td>
                                    <div class="flex -space-x-2 rtl:space-x-reverse"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/13.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/16.jpg')}}" alt="Image Description"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/17.jpg')}}"
                                        alt="Image Description"> <img class="inline-block avatar avatar-sm !rounded-full"
                                        src="{{asset('build/assets/images/faces/7.jpg')}}" alt="Image Description"> <img
                                        class="inline-block avatar avatar-sm !rounded-full" src="{{asset('build/assets/images/faces/5.jpg')}}"
                                        alt="Image Description"> </div>
                                    </td>
                                    <td>40<span class="ltr:ml-1 rtl:mr-1 text-gray-500 dark:text-white/70 opacity-70">/ 80</span>
                                    </td>
                                    <td>
                                    <div class="flex items-center">
                                        <div class="w-2/3">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-primary text-xs text-white text-center"
                                            role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </div>
                                        <div class="ltr:ml-2 rtl:mr-2">50%</div>
                                    </div>
                                    </td>
                                    <td><span
                                        class="truncate whitespace-nowrap inline-block badge !rounded-full text-xs font-medium bg-primary/10 text-primary">In
                                        Progress</span> </td>
                                    <td>05-04-2024</td>
                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                    <a href="javascript:void(0);"
                                        class="m-0 relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-primary !border !border-primary/20">
                                        <i class="ti ti-eye"></i> </a>
                                    <a href="javascript:void(0);"
                                        class="customer-edit m-0  relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-info !border !border-info/20">
                                        <i class="ti ti-pencil"></i> </a>
                                    <a href="javascript:void(0);"
                                        class="m-0 relative w-8 h-8 ti-btn  p-0 transition-none focus:outline-none ti-btn-soft-danger !border !border-danger/20">
                                        <i class="ti ti-trash"></i> </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="sm:flex items-center">
                            <div class="text-defaulttextcolor dark:text-defaulttextcolor/70">
                                Showing 5 Entries <i class="bi bi-arrow-right ms-2 font-semibold"></i>
                            </div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                <ul class="ti-pagination mb-0">
                                    <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0);">
                                        Prev
                                    </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link !text-primary" href="javascript:void(0);">
                                        next
                                    </a>
                                    </li>
                                </ul>
                                </nav>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

@endsection

@section('scripts')
	
        <!-- Preline JS -->
        <script src="{{asset('build/assets/libs/preline/preline.js')}}"></script>

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- CRM-Dashboard -->
        @vite('resources/assets/js/projectsdashboard.js')

@endsection
