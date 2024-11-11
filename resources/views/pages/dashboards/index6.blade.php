
@extends('layouts.master')

@section('styles')

        <!-- Jsvector Maps -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/jsvectormap/css/jsvectormap.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">HRM</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Dashboard <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">HRM 
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
                    <div class="xxl:col-span-5 xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box hrm-main-card primary">
                            <div class="box-body">
                                <div class="flex items-start">
                                <div class="me-4">
                                    <span class="avatar bg-primary !text-white">
                                    <i class="ri-group-line text-[1.25rem]"></i>
                                    </span>
                                </div>
                                <div class="flex-grow">
                                    <span class="font-medium text-[0.875rem] block mb-1">Total
                                    Employees</span>
                                    <h4 class="font-medium mb-1 text-[1.35rem]">22,124</h4>
                                    <p class="mb-0">
                                    <span class="badge bg-primary/10 text-primary">This Month</span>
                                    </p>
                                </div>
                                <div>
                                    <span class="text-[0.875rem] font-medium text-success">+1.03%</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box hrm-main-card danger">
                            <div class="box-body">
                                <div class="flex items-start">
                                <div class="me-4">
                                    <span class="avatar bg-danger !text-white">
                                    <i class="ri-user-add-line text-[1.35rem]"></i>
                                    </span>
                                </div>
                                <div class="flex-grow">
                                    <span class="font-medium text-[0.875rem] block mb-1">New Leads</span>
                                    <h4 class="font-medium mb-1 text-[1.25rem]">1,453</h4>
                                    <p class="mb-0">
                                    <span class="badge bg-danger/10 text-danger">This Month</span>
                                    </p>
                                </div>
                                <div>
                                    <span class="text-[0.875rem] font-medium text-success">+4.25%</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box hrm-main-card info">
                            <div class="box-body">
                                <div class="flex items-start">
                                <div class="me-4">
                                    <span class="avatar bg-info !text-white">
                                    <i class="ri-user-unfollow-line text-[1.35rem]"></i>
                                    </span>
                                </div>
                                <div class="flex-grow">
                                    <span class="font-medium text-[0.875rem] block mb-1">Employees In
                                    Leave</span>
                                    <h4 class="font-medium mb-1 text-[1.25rem]">528</h4>
                                    <p class="mb-0">
                                    <span class="badge bg-info/10 text-info">This Month</span>
                                    </p>
                                </div>
                                <div>
                                    <span class="text-[0.875rem] font-medium text-success">+0.36%</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box  hrm-main-card warning">
                            <div class="box-body">
                                <div class="flex items-start">
                                <div class="me-4">
                                    <span class="avatar bg-warning !text-white">
                                    <i class="ri-briefcase-line text-[1.35rem]"></i>
                                    </span>
                                </div>
                                <div class="flex-grow">
                                    <span class="font-medium text-[0.875rem] block mb-1">Total
                                    Clients</span>
                                    <h4 class="font-medium mb-1 text-[1.25rem]">8,289</h4>
                                    <p class="mb-0">
                                    <span class="badge bg-warning/10 text-warning">This Month</span>
                                    </p>
                                </div>
                                <div>
                                    <span class="text-[0.875rem] font-medium text-danger">-1.28%</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex flex-wrap items-center">
                                <div class="ltr:mr-3 rtl:ml-3 leading-none"> <span
                                    class="avatar inline-flex justify-center items-center rounded-full bg-primary-gradient !text-white">
                                    <i class="ti ti-package text-[1.2rem]"></i> </span> </div>
                                <div class="flex-1 font-medium">
                                    <div class="flex justify-between items-center mb-2">
                                    <p class="mb-0 text-gray-800 dark:text-white">Projects</p><span>85/120</span>
                                    </div>
                                    <div class="progress mb-4 mt-4 progress-style progress-sm">
                                    <div class="progress-bar bar-1 bg-primary-gradient" style="width: 80%" role="progressbar"
                                        aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                    </div> <a href="javascript:void(0);" class="text-gray-500 dark:text-white/70 text-xs flex">Full
                                    Details<i class="ri-arrow-right-s-line ltr:ml-2 rtl:mr-2 rtl:rotate-180"></i></a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex flex-wrap items-center">
                                <div class="ltr:mr-3 rtl:ml-3 leading-none"> <span
                                    class="avatar inline-flex justify-center items-center rounded-full bg-danger-gradient !text-white">
                                    <i class="ti ti-ticket text-[1.2rem]"></i> </span> </div>
                                <div class="flex-1 font-medium">
                                    <div class="flex justify-between items-center mb-2">
                                    <p class="mb-0 text-gray-800 dark:text-white">Open Tickets</p><span>350/390</span>
                                    </div>
                                    <div class="progress my-4 progress-style progress-sm">
                                    <div class="progress-bar bar-2  bg-danger-gradient" style="width: 45%" role="progressbar"
                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                                    </div><a href="javascript:void(0);" class="text-gray-500 dark:text-white/70 text-xs flex">Full
                                    Details<i class="ri-arrow-right-s-line ltr:ml-2 rtl:mr-2 rtl:rotate-180"></i></a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-7 xl:col-span-12 col-span-12">
                        <div class="box">
                        <div class="box-header justify-between ">
                            <div class="items-center flex">
                            <h4 class="box-title mb-2">Performance By Category</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Category Performance Analysis, Evaluating Performance Across Categories.</p>
                            </div>
                        </div>
                        <div class="box-body">
                            <div id="performanceReport"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-3 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                        <div class="box">
                        <div class="box-header ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Jobs Summery</h4>
                            <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden !z-[200]">
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Jobs Summary Report,Providing Insights Recent Activity.</p>
                            </div>
                        </div>
                        <div class="box-body !p-[1.8rem] !px-0">
                            <div id="jobsummery"></div>
                        </div>
                        <div class="box-footer">
                            <div class="grid grid-cols-12 gap-y-6">
                                <div class="xl:col-span-6 sm:col-span-6 col-span-6">
                                    <div class="flex items-start gap-3">
                                        <div>
                                            <span class="avatar avatar-rounded bg-primary/10 !text-primary">
                                                <i class="ri-user-follow-line text-[1.2rem]"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="block text-textmuted text-[0.925rem]">Published</span>
                                            <span class="block font-medium text-[1.2rem]">1,754</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 sm:col-span-6 col-span-6">
                                <div class="flex items-start justify-center gap-3">
                                    <div>
                                        <span class="avatar avatar-rounded bg-danger/10 !text-danger">
                                            <i class="ri-user-unfollow-line text-[1.2rem]"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="block text-textmuted text-[0.925rem]">Private</span>
                                        <span class="block font-medium text-[1.2rem]">634</span>
                                    </div>
                                </div>
                            </div>
                                <div class="xl:col-span-6 sm:col-span-6 col-span-6">
                                    <div class="flex items-start  gap-3">
                                        <div>
                                            <span class="avatar avatar-rounded bg-success/10 !text-success">
                                                <i class="ri-user-shared-line text-[1.2rem]"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="block text-textmuted text-[0.925rem]">Onhold</span>
                                            <span class="block font-medium text-[1.2rem]">878</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 sm:col-span-6 col-span-6">
                                <div class="flex items-start justify-center gap-3">
                                    <div>
                                        <span class="avatar avatar-rounded bg-info/10 !text-info">
                                            <i class="ri-lock-2-line text-[1.2rem]"></i>
                                        </span>
                                    </div>
                                    <div> 
                                        <span class="block text-textmuted text-[0.925rem]">Rejected</span>
                                        <span class="block font-medium text-[1.2rem]">470</span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                        <div class="box">
                        <div class="box-header !border-b !pb-3">
                            <div class=" flex justify-between">
                            <h4 class="box-title mb-2">Attendance</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Attendance Overview,Tracking Participation and Presence,Visualizing Attendance Data.</p>
                            </div>
                        </div>
                        <div class="box-body !p-0 attendance-table">
                            <div class="table-responsive">
                            <table class="table ti-custom-table-head whitespace-nowrap w-full">
                                <thead>
                                <tr>
                                    <th scope="col">S.no</th>
                                    <th scope="col">Employee</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Checkin</th>
                                    <th scope="col">Checkout</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td>1</td>
                                    <td>
                                    <div class="flex space-x-3 rtl:space-x-reverse w-full"> <img
                                        class="avatar avatar-sm rounded-sm" src="{{asset('build/assets/images/faces/1.jpg')}}"
                                        alt="Image Description">
                                        <div class="block w-full my-auto"> <span
                                            class="block font-medium text-[0.925rem]  truncate">Alice
                                            Rex</span> <span
                                            class="block text-[.8125rem]  text-textmuted !font-normal">alica12@gmail.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>Tester</td>
                                    <td><span
                                        class="whitespace-nowrap inline-block badge rounded-sm text-xs font-medium bg-success/10 text-success/80">Present</span>
                                    </td>
                                    <td>09:30 Am</td>
                                    <td>06:30 Pm</td>
                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                    <div class="hs-tooltip ti-main-tooltip"> <a href="javascript:void(0);"
                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                        <i class="ti ti-phone"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip" data-popper-placement="top"
                                            style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, -349px);">
                                            Call </span> </a> </div>
                                    <div class="hs-tooltip ti-main-tooltip"> <a href="javascript:void(0);"
                                        class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                        <i class="ti ti-message-circle"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip"> Chat </span> </a> </div>
                                    </td>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td>2</td>
                                    <td>
                                    <div class="flex space-x-3 rtl:space-x-reverse w-full"> <img
                                        class="avatar avatar-sm rounded-sm" src="{{asset('build/assets/images/faces/11.jpg')}}"
                                        alt="Image Description">
                                        <div class="block w-full my-auto"> <span
                                            class="block  font-medium text-[0.925rem]  truncate">Rehna
                                            Eni</span> <span
                                            class="block text-[.8125rem]  text-textmuted !font-normal">reha24@gmail.com
                                        </span> </div>
                                    </div>
                                    </td>
                                    <td>UI/UX Designer</td>
                                    <td><span
                                        class="whitespace-nowrap inline-block badge rounded-sm text-xs font-medium bg-success/10 text-success/80">Present</span>
                                    </td>
                                    <td>09:45 Am</td>
                                    <td>06:50 Pm</td>
                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                    <div class="hs-tooltip ti-main-tooltip"> <a href="javascript:void(0);"
                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                        <i class="ti ti-phone"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip"> Call </span> </a> </div>
                                    <div class="hs-tooltip ti-main-tooltip"> <a href="javascript:void(0);"
                                        class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                        <i class="ti ti-message-circle"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip" data-popper-placement="top"
                                            style="position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(887px, -278px);">
                                            Chat </span> </a> </div>
                                    </td>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td>3</td>
                                    <td>
                                    <div class="flex space-x-3 rtl:space-x-reverse w-full"> <img
                                        class="avatar avatar-sm rounded-sm" src="{{asset('build/assets/images/faces/16.jpg')}}"
                                        alt="Image Description">
                                        <div class="block w-full my-auto"> <span
                                            class="block  font-medium text-[0.925rem]  truncate">
                                            Bob Upt</span> <span
                                            class="block text-[.8125rem]  text-textmuted !font-normal">bobupt3@gmail.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>Backend</td>
                                    <td><span
                                        class="whitespace-nowrap inline-block badge rounded-sm text-xs font-medium bg-danger/10 text-danger/80">Absent</span>
                                    </td>
                                    <td>00:00 Am</td>
                                    <td>00:00 Pm</td>
                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                    <div class="hs-tooltip ti-main-tooltip"> <a href="javascript:void(0);"
                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                        <i class="ti ti-phone"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip"> Call </span> </a> </div>
                                    <div class="hs-tooltip ti-main-tooltip"> <a href="javascript:void(0);"
                                        class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                        <i class="ti ti-message-circle"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip"> Chat </span> </a> </div>
                                    </td>
                                </tr>
                                <tr class="border-b border-defaultborder dark:border-defaultborder/10">
                                    <td>4</td>
                                    <td>
                                    <div class="flex space-x-3 rtl:space-x-reverse w-full"> <img
                                        class="avatar avatar-sm rounded-sm" src="{{asset('build/assets/images/faces/17.jpg')}}"
                                        alt="Image Description">
                                        <div class="block w-full my-auto"> <span
                                            class="block  font-medium text-[0.925rem]  truncate">Charlie
                                            Davieson</span> <span
                                            class="block text-[.8125rem]  text-textmuted !font-normal">charlie@gmail.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>Team Lead</td>
                                    <td><span
                                        class="whitespace-nowrap inline-block badge rounded-sm text-xs font-medium bg-success/10 text-success/80">Present</span>
                                    </td>
                                    <td>10:00 Am</td>
                                    <td>07:00 Pm</td>
                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                    <div class="hs-tooltip ti-main-tooltip"> <a href="javascript:void(0);"
                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                        <i class="ti ti-phone"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip"> Call </span> </a> </div>
                                    <div class="hs-tooltip ti-main-tooltip"> <a href="javascript:void(0);"
                                        class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                        <i class="ti ti-message-circle"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip"> Chat </span> </a> </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                    <div class="flex space-x-3 rtl:space-x-reverse w-full"> <img
                                        class="avatar avatar-sm rounded-sm" src="{{asset('build/assets/images/faces/12.jpg')}}"
                                        alt="Image Description">
                                        <div class="block w-full my-auto"> <span
                                            class="block  font-medium text-[0.925rem]  truncate">Suzika
                                            Stallone</span> <span
                                            class="block text-[.8125rem]  text-textmuted !font-normal">suzika@gmail.com</span>
                                        </div>
                                    </div>
                                    </td>
                                    <td>UI Designer</td>
                                    <td><span
                                        class="whitespace-nowrap inline-block badge rounded-sm text-xs font-medium bg-success/10 text-success/80">Present</span>
                                    </td>
                                    <td>09:30 Am</td>
                                    <td>05:15 Pm</td>
                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                    <div class="hs-tooltip ti-main-tooltip"> <a href="javascript:void(0);"
                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                        <i class="ti ti-phone"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip"> Call </span> </a> </div>
                                    <div class="hs-tooltip ti-main-tooltip"> <a href="javascript:void(0);"
                                        class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                        <i class="ti ti-message-circle"></i> <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                            role="tooltip"> Chat </span> </a> </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                        <div class="box">
                        <div class="box-header ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Recruitment Pipeline</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Pipeline Summary, Look at Candidate Progress.</p>
                            </div>
                        </div>
                        <div class="box-body">
                            <ul class="mb-0">
                            <li class="mb-5">
                                <div class="flex items-center justify-between">
                                <div class="">
                                    <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                    <span class="avatar avatar-sm rounded-circle bg-primary/10 !text-primary"><i
                                        class="fe fe-file-text "></i></span> </a>
                                    <a href="javascript:void(0);" class="text-[0.875rem] font-medium"> Total
                                    Applications</a>
                                </div>
                                <div class="min-w-fit-content text-end"> <span class=" text-[1rem] font-medium"><span
                                        class="me-2 badge bg-primary/10 !text-[0.7rem] !text-primary">+12.2%</span>1,982</span>
                                </div>
                                </div>
                            </li>
                            <li class="mb-5">
                                <div class="flex items-center justify-between">
                                <div class="">
                                    <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                    <span class="avatar avatar-sm rounded-circle bg-danger/10 !text-danger"><i
                                        class="fe fe-user-plus "></i></span> </a>
                                    <a href="javascript:void(0);" class="text-[0.875rem] font-medium"> Recruited</a>
                                </div>
                                <div class="min-w-fit-content text-end"> <span class="text-[1rem] font-medium"><span
                                        class="me-2 badge bg-danger/10 !text-[0.7rem] !text-danger">-10.2%</span>982</span> </div>
                                </div>
                            </li>
                            <li class="mb-5">
                                <div class="flex items-center justify-between">
                                <div class="">
                                    <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                    <span class="avatar avatar-sm rounded-circle bg-success/10 !text-success"><i
                                        class="fe fe-file-plus "></i></span> </a>
                                    <a href="javascript:void(0);" class="text-[0.875rem] font-medium"> Short
                                    Listed</a>
                                </div>
                                <div class="min-w-fit-content text-end"> <span class="text-[1rem] font-medium"><span
                                        class="me-2 badge bg-success/10 !text-[0.7rem] !text-success">+9.2%</span>582</span> </div>
                                </div>
                            </li>
                            <li class="mb-6">
                                <div class="flex items-center justify-between">
                                <div class="">
                                    <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                    <span class="avatar avatar-sm rounded-circle bg-warning/10 !text-warning"><i
                                        class="fe fe-zap-off "></i></span> </a>
                                    <a href="javascript:void(0);" class="text-[0.875rem] font-medium">Rejected</a>
                                </div>
                                <div class="min-w-fit-content text-end"> <span class="text-[1rem] font-medium"><span
                                        class="me-2 badge bg-warning/10 !text-[0.7rem] !text-warning">+14.2%</span>395</span> </div>
                                </div>
                            </li>
                            <li class="mb-6">
                                <div class="flex items-center justify-between">
                                <div class="">
                                    <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                    <span class="avatar avatar-sm rounded-circle bg-danger/10 !text-danger"><i
                                        class="fe fe-slash "></i></span> </a>
                                    <a href="javascript:void(0);" class="text-[0.875rem] font-medium">Blocked</a>
                                </div>
                                <div class="min-w-fit-content text-end"> <span class="text-[1rem] font-medium"><span
                                        class="me-2 badge bg-danger/10 !text-[0.7rem] !text-danger">-0.62%</span>905</span> </div>
                                </div>
                            </li>
                            <li class="mb-6">
                                <div class="flex items-center justify-between">
                                <div class="">
                                    <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                    <span class="avatar avatar-sm rounded-circle bg-success/10 !text-success"><i
                                        class="fe fe-file-plus "></i></span> </a>
                                    <a href="javascript:void(0);" class="text-[0.875rem] font-medium"> Short
                                    Listed</a>
                                </div>
                                <div class="min-w-fit-content text-end"> <span class="text-[1rem] font-medium"><span
                                        class="me-2 badge bg-success/10  !text-[0.7rem] !text-success">+12.2%</span>582</span>
                                </div>
                                </div>
                            </li>
                            <li class="">
                                <div class="flex items-center justify-between">
                                <div class="">
                                    <a aria-label="anchor" href="javascript:void(0);" class="me-2">
                                    <span class="avatar avatar-sm rounded-circle bg-info/10 !text-info"><i
                                        class="fe fe-monitor "></i></span> </a>
                                    <a href="javascript:void(0);" class="text-[0.875rem] font-medium">Interviewed</a>
                                </div>
                                <div class="min-w-fit-content text-end"> <span class="text-[1rem] font-medium"><span
                                        class="me-2 badge bg-info/10 !text-[0.7rem] !text-info">+16.5%</span>145</span> </div>
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
                            <h4 class="box-title mb-2">Applicant Details</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Applicant Profile Overview, Comprehensive Details of Candidate,Visualizing Applicant Information.</p>
                            </div>
                        </div>
                        <div class="box-body p-0">
                            <div class="table-responsive">
                            <table class="table table-auto order-table ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                                <thead class="bg-light dark:bg-black/20">
                                <tr>
                                    <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox"
                                        id="checkboxNoLabel1" value="" aria-label="..."></th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Application ID</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Applicant Name</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Position Applied</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Date Of Application</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Email</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Work Experience</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Status</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox"
                                        id="checkboxNoLabel2" value="" aria-label="..."></th>
                                    <td> #SPT-011 </td>
                                    <td>
                                    <div class="flex items-center"> <span class="avatar avatar-sm me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"> </span>Mayor Kelly </div>
                                    </td>
                                    <td>System Administrator</td>
                                    <td>24,Nov 2024</td>
                                    <td> mayorkelly2341@gmail.com </td>
                                    <td>2+ Years</td>
                                    <td> <span class="badge bg-primary/10 !text-primary">New</span> </td>
                                    <td>
                                    <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm  ti-btn-success !border !border-success/20"><i
                                            class="ri-phone-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm  ti-btn-primary !border !border-primary/20"><i
                                            class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-danger !border !border-danger/20"><i
                                            class="ri-delete-bin-line"></i></a> </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox"
                                        id="checkboxNoLabel13" value="" aria-label="..." checked=""></th>
                                    <td> #SPT-012 </td>
                                    <td>
                                    <div class="flex items-center"> <span class="avatar avatar-sm me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"> </span>Andrew Garfield </div>
                                    </td>
                                    <td>Data and Analytics</td>
                                    <td>13,Dec 2024</td>
                                    <td>andrewgarfield45@gmail.com</td>
                                    <td> 3+ Years </td>
                                    <td> <span class="badge bg-success/10 !text-success">Interviewed</span> </td>
                                    <td>
                                    <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm  ti-btn-success !border !border-success/20"><i
                                            class="ri-phone-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm  ti-btn-primary !border !border-primary/20"><i
                                            class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-danger !border !border-danger/20"><i
                                            class="ri-delete-bin-line"></i></a> </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox"
                                        id="checkboxNoLabel4" value="" aria-label="..."></th>
                                    <td> #SPT-013 </td>
                                    <td>
                                    <div class="flex items-center"> <span class="avatar avatar-sm me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img"> </span>Simon Cowel </div>
                                    </td>
                                    <td>UX/UI Design</td>
                                    <td>10,Nov 2024</td>
                                    <td>simoncowel234@gmail.com</td>
                                    <td> Fresher </td>
                                    <td> <span class="badge bg-info/10 !text-info">Hired</span> </td>
                                    <td>
                                    <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm  ti-btn-success !border !border-success/20"><i
                                            class="ri-phone-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm  ti-btn-primary !border !border-primary/20"><i
                                            class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-danger !border !border-danger/20"><i
                                            class="ri-delete-bin-line"></i></a> </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox"
                                        id="checkboxNoLabel5" value="" aria-label="..." checked=""></th>
                                    <td> #SPT-014 </td>
                                    <td>
                                    <div class="flex items-center"> <span class="avatar avatar-sm me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"> </span>Mirinda Hers </div>
                                    </td>
                                    <td>Database Management</td>
                                    <td>16,Dec 2024</td>
                                    <td>mirindahers@gmail.com</td>
                                    <td>1 Year</td>
                                    <td> <span class="badge bg-warning/10 !text-warning">Under Review</span> </td>
                                    <td>
                                    <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm  ti-btn-success !border !border-success/20"><i
                                            class="ri-phone-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm  ti-btn-primary !border !border-primary/20"><i
                                            class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-danger !border !border-danger/20"><i
                                            class="ri-delete-bin-line"></i></a> </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox"
                                        id="checkboxNoLabel3" value="" aria-label="..." checked=""></th>
                                    <td> #SPT-015 </td>
                                    <td>
                                    <div class="flex items-center"> <span class="avatar avatar-sm me-2 avatar-rounded">
                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img"> </span>Jacob Smith </div>
                                    </td>
                                    <td>AI and Machine Learning</td>
                                    <td>22,Dec 2024</td>
                                    <td>jacobsmith@gmail.com</td>
                                    <td>5+ Years</td>
                                    <td> <span class="badge bg-danger/10 !text-danger"> rejected</span> </td>
                                    <td>
                                    <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm  ti-btn-success !border !border-success/20"><i
                                            class="ri-phone-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm  ti-btn-primary !border !border-primary/20"><i
                                            class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn ti-btn-sm ti-btn-danger !border !border-danger/20"><i
                                            class="ri-delete-bin-line"></i></a> </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="sm:flex items-center">
                            <div class="text-defaulttextcolor dark:text-defaulttextcolor/70">
                                Showing 5 Entries <i class="bi bi-arrow-right ms-2 font-medium"></i>
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
        <script src="{{asset('build/assets/hrmdashboard.js')}}"></script>
        
@endsection
