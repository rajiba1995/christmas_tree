
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Analytics</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Dashboard <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Analytics 
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
                    <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="box !bg-primary overflow-hidden">
                            <div class="box-body !py-0">
                                <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-6 sm:col-span-6 col-span-6">
                                    <div class="box-body !px-0">
                                    <h6 class="mb-3 font-medium !text-white">Active Users</h6>
                                    <div class="flex items-center">
                                        <div class="me-3"> <span class="avatar rounded-full bg-white !text-primary text-xl p-3"><i
                                            class="ri-pulse-line leading-none"></i></span> </div>
                                        <div class="flex-1">
                                        <p class="text-2xl text-white font-medium">12,890</p>
                                        <p class="mb-0 text-xs text-white opacity-70">Currently active now</p>
                                        </div>
                                    </div>
                                    <p class="mt-3 !text-success">
                                        <i class="fe fe-trending-up me-1 !text-success"></i>12%
                                        <span class="fs-11">in last 7 days</span>
                                    </p>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 sm:col-span-6 col-span-6">
                                    <div class="box-body !p-0">
                                    <div id="activeusers"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="box">
                            <div class="box-header !pb-3 !border-b">
                                <div class="flex justify-between">
                                    <h4 class="box-title mb-2">Traffic Sources</h4>
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
                                    <p class="text-[.75rem] text-textmuted font-normal mb-0">Mapping Out Your Audience Acquisition.</p>
                                </div>
                            </div>
                            <div class="box-body !p-0">
                                <div class="overflow-auto">
                                <table class="ti-custom-table ti-custom-table-head">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="!py-4">Browser</th>
                                        <th scope="col" class="!py-4">Sessions</th>
                                        <th scope="col" class="!py-4">Traffic</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="">
                                        <div class="flex items-center">
                                            <div class="ltr:mr-2 rtl:ml-2"> <span
                                                class="avatar avatar-sm rounded-sm bg-primary/10 !text-primary p-1.5"><i
                                                class="ri-chrome-line text-xl leading-none"></i></span> </div>
                                            <p class="mb-1">Chrome</p>
                                        </div>
                                        </td>
                                        <td class="">20,937<i
                                            class="ri-arrow-up-s-fill ltr:ml-2 rtl:mr-2 text-base text-success my-auto"></i></td>
                                        <td class="">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-primary text-xs text-white text-center"
                                            role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                        <div class="flex items-center">
                                            <div class="ltr:mr-2 rtl:ml-2"> <span
                                                class="avatar avatar-sm rounded-sm bg-info/10 !text-info p-1.5"><i
                                                class="ri-safari-line text-xl leading-none"></i></span> </div>
                                            <p class="mb-1">Safari</p>
                                        </div>
                                        </td>
                                        <td class="">23,379<i
                                            class="ri-arrow-up-s-fill ltr:ml-2 rtl:mr-2 text-base text-success my-auto"></i></td>
                                        <td class="">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-info text-xs text-white text-center"
                                            role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                        <div class="flex items-center">
                                            <div class="ltr:mr-2 rtl:ml-2"> <span
                                                class="avatar avatar-sm rounded-sm bg-danger/10 !text-danger p-1.5"><i
                                                class="ri-opera-line text-xl leading-none"></i></span> </div>
                                            <p class="mb-1">Opera</p>
                                        </div>
                                        </td>
                                        <td class="">20,582<i
                                            class="ri-arrow-down-s-fill ltr:ml-2 rtl:mr-2 text-base text-danger my-auto"></i></td>
                                        <td class="">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-danger text-xs text-white text-center"
                                            role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                        <div class="flex items-center">
                                            <div class="ltr:mr-2 rtl:ml-2"> <span
                                                class="avatar avatar-sm rounded-sm bg-warning/10 !text-warning p-1.5"><i
                                                class="ri-firefox-line text-xl leading-none"></i></span> </div>
                                            <p class="mb-1">Firefox</p>
                                        </div>
                                        </td>
                                        <td class="">18,120<i
                                            class="ri-arrow-up-s-fill ltr:ml-2 rtl:mr-2 text-base text-success my-auto"></i></td>
                                        <td class="">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-warning text-xs text-white text-center"
                                            role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                        <div class="flex items-center">
                                            <div class="ltr:mr-2 rtl:ml-2"> <span
                                                class="avatar avatar-sm rounded-sm bg-success/10 !text-success p-1.5"><i
                                                class="ri-edge-line text-xl leading-none"></i></span> </div>
                                            <p class="mb-1">Edge</p>
                                        </div>
                                        </td>
                                        <td class="">11,352<i
                                            class="ri-arrow-up-s-fill ltr:ml-2 rtl:mr-2 text-base text-danger my-auto"></i></td>
                                        <td class="">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-success text-xs text-white text-center"
                                            role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                        <div class="flex items-center">
                                            <div class="ltr:mr-2 rtl:ml-2"> <span
                                                class="avatar avatar-sm rounded-sm bg-purplemain/10 !text-purplemain p-1.5"><i
                                                class="ri-ubuntu-line text-xl leading-none"></i></span> </div>
                                            <p class="mb-1">Ubuntu</p>
                                        </div>
                                        </td>
                                        <td class="">11,352<i
                                            class="ri-arrow-up-s-fill ltr:ml-2 rtl:mr-2 text-base text-danger my-auto"></i></td>
                                        <td class="">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-purplemain text-xs text-white text-center"
                                            role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                        <div class="flex items-center">
                                            <div class="ltr:mr-2 rtl:ml-2"> <span
                                                class="avatar avatar-sm rounded-sm bg-orangemain/10 !text-orangemain p-1.5"><i
                                                class="ri-google-line text-xl leading-none"></i></span> </div>
                                            <p class="mb-1">Google</p>
                                        </div>
                                        </td>
                                        <td class="">11,352<i
                                            class="ri-arrow-up-s-fill ltr:ml-2 rtl:mr-2 text-base text-danger my-auto"></i></td>
                                        <td class="">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-orangemain text-xs text-white text-center"
                                            role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                        <div class="flex items-center">
                                            <div class="ltr:mr-2 rtl:ml-2"> <span
                                                class="avatar avatar-sm rounded-sm bg-success/10 !text-success p-1.5"><i
                                                class="ri-drive-line text-xl leading-none"></i></span> </div>
                                            <p class="mb-1">Drive</p>
                                        </div>
                                        </td>
                                        <td class="">11,352<i
                                            class="ri-arrow-up-s-fill ltr:ml-2 rtl:mr-2 text-base text-danger my-auto"></i></td>
                                        <td class="">
                                        <div class="ti-main-progress h-2 bg-gray-200 dark:bg-black/20">
                                            <div class="ti-main-progress-bar bg-success text-xs text-white text-center"
                                            role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                            <div class="box-body !p-0">
                                <div class="flex items-start justify-between  p-5 !pb-2">
                                <div>
                                    <h6 class="font-medium mb-2 text-[1rem]">Bounce Rate</h6>
                                    <div class="flex items-center">
                                    <div class="me-3"> <span
                                        class="avatar !rounded-full bg-primary-gradient !text-primary text-xl p-3"><i
                                            class="ri-share-circle-line leading-none"></i></span> </div>
                                    <div class="flex-1">
                                        <p class="text-2xl font-medium">32.3%</p>
                                        <p class="mb-0 text-xx text-textmuted">Currently active now</p>
                                    </div>
                                    </div>
                                </div>
                                <span
                                            class=" text-[0.75rem] badge bg-success/10 text-success ms-2">+0.59<i
                                            class="ti ti-arrow-big-up-line ms-1 inline-flex"></i></span>
                                </div>
                                <div id="analytics-bouncerate" class="w-full"></div>
                            </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                            <div class="box-body !p-0">
                                <div class="flex items-start justify-between  p-5 !pb-2">
                                <div>
                                    <h6 class="font-medium mb-2 text-[1rem]">Live Visitors</h6>
                                    <div class="flex items-center">
                                    <div class="me-3"> <span
                                        class="avatar !rounded-full bg-success-gradient !text-success text-xl p-3"><i
                                            class="ri-group-line leading-none"></i></span> </div>
                                    <div class="flex-1">
                                        <p class="text-2xl font-medium">15,489</p>
                                        <p class="mb-0 text-xx text-textmuted">Currently active now</p>
                                    </div>
                                    </div>
                                </div>
                                <span
                                            class=" text-[0.75rem] text-danger badge bg-danger/10 ms-2">-11.29<i
                                            class="ti ti-arrow-big-down-line ms-1 inline-flex"></i></span>
                                </div>
                                <div id="analytics-visitors" class="w-full"></div>
                            </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                            <div class="box-body !p-0">
                                <div class="flex items-start justify-between  p-5 !pb-2">
                                <div>
                                    <h6 class="font-medium mb-2 text-[1rem]">Total Sessions</h6>
                                    <div class="flex items-center">
                                    <div class="me-3"> <span
                                        class="avatar !rounded-full bg-danger-gradient !text-danger text-xl p-3"><i
                                            class="ri-flag-2-line leading-none"></i></span> </div>
                                    <div class="flex-1">
                                        <p class="text-2xl font-medium">1,389</p>
                                        <p class="mb-0 text-xx text-textmuted">Currently active now</p>
                                    </div>
                                    </div>
                                </div>
                                <span
                                            class=" text-[0.75rem] text-success badge bg-success/10 ms-2">+1.29<i
                                            class="ti ti-arrow-big-up-line ms-1 inline-flex"></i></span>
                                </div>
                                <div id="analytics-sessions" class="w-full"></div>
                            </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 sm:col-span-6 col-span-12">
                            <div class="box overflow-hidden">
                            <div class="box-body !p-0">
                                <div class="flex items-start justify-between  p-5 !pb-2">
                                <div>
                                    <h6 class="font-medium mb-2 text-[1rem]">Page Views</h6>
                                    <div class="flex items-center">
                                    <div class="me-3"> <span
                                        class="avatar !rounded-full bg-warning-gradient !text-warning text-xl p-3"><i
                                            class="ri-eye-line leading-none"></i></span> </div>
                                    <div class="flex-1">
                                        <p class="text-2xl font-medium">2,359</p>
                                        <p class="mb-0 text-xx text-textmuted">Currently active now</p>
                                    </div>
                                    </div>
                                </div>
                                <span
                                            class=" text-[0.75rem] text-success badge bg-success/10 ms-2">+1.29<i
                                            class="ti ti-arrow-big-up-line ms-1 inline-flex"></i></span>
                                </div>
                                <div id="analytics-views" class="w-full"></div>
                            </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                            <div class="box-header ">
                                <div class="flex justify-between">
                                <h4 class="box-title mb-2">Session Overview</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Session Metrics Report, Providing Detailed Insights into Your Recent Activities</p>
                                </div>
                            </div>
                            <div class="box-body !p-0 !px-2">
                                <div id="sessionoverview"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-12 xl:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-header">
                                <div class="flex justify-between">
                                <h4 class="box-title mb-2">Device Overview</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Device Overview,Analyzing Your Device Activity.</p>
                                </div>
                            </div>
                            <div class="box-body !p-0 !py-4 overflow-hidden">
                                <div class="flex  justify-center">
                                <div id="sourcechart"></div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="grid grid-cols-12 gap-4">
                                <div class="xl:col-span-6 sm:col-span-6 col-span-12">
                                    <div class="py-3 px-4 flex border border-defaultborder dark:border-defaultborder/10 !rounded-md items-center flex-wrap gap-4">
                                    <div> <span class="avatar bg-primary/10 !fill-primary"> <svg xmlns="http://www.w3.org/2000/svg"
                                            height="24px" viewBox="0 0 24 24" width="24px">
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M7 4h9v14H7z" opacity=".3"></path>
                                            <path
                                            d="M15.5 1h-8C6.12 1 5 2.12 5 3.5v17C5 21.88 6.12 23 7.5 23h8c1.38 0 2.5-1.12 2.5-2.5v-17C18 2.12 16.88 1 15.5 1zm-4 21c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm4.5-4H7V4h9v14z">
                                            </path>
                                        </svg> </span> </div>
                                    <div> <span class="text-textmuted text-[0.925rem] mb-1 d-inline-block">Mobile </span>
                                        <div><span class="text-[1.25rem] font-medium">1,624</span> </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 sm:col-span-6 col-span-12 !p-0">
                                    <div class="py-3 px-4 flex border border-defaultborder dark:border-defaultborder/10 !rounded-md items-center flex-wrap gap-4">
                                    <div> <span class="avatar bg-danger/10 !fill-danger"> <svg xmlns="http://www.w3.org/2000/svg"
                                            height="24px" viewBox="0 0 24 24" width="24px">
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M3 4h18v12H3z" opacity=".3"></path>
                                            <path
                                            d="M21 2H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h7v2H8v2h8v-2h-2v-2h7c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H3V4h18v12z">
                                            </path>
                                        </svg> </span> </div>
                                    <div> <span class="text-textmuted text-[0.925rem] mb-1 d-inline-block">Desktop </span>
                                        <div><span class="text-[1.25rem] font-medium">1,267</span> </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 sm:col-span-6 col-span-12 !p-0">
                                    <div class="py-3 px-4 flex border  border-defaultborder dark:border-defaultborder/10 !rounded-md items-center flex-wrap gap-4">
                                    <div> <span class="avatar bg-success/10 !fill-success"> <svg xmlns="http://www.w3.org/2000/svg"
                                            height="24px" viewBox="0 0 24 24" width="24px">
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M4 5h16v11H4z" opacity=".3"></path>
                                            <path
                                            d="M20 18c1.1 0 1.99-.9 1.99-2L22 5c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2H0c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2h-4zM4 5h16v11H4V5zm8 14c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z">
                                            </path>
                                        </svg> </span> </div>
                                    <div> <span class="text-textmuted text-[0.925rem] mb-1 d-inline-block">Laptop </span>
                                        <div><span class="text-[1.25rem] font-medium">1,153</span> </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 sm:col-span-6 col-span-12 !p-0">
                                    <div class="py-3 px-4 flex border border-defaultborder dark:border-defaultborder/10 !rounded-md items-center flex-wrap gap-4">
                                    <div> <span class="avatar bg-info/10 !fill-info"> <svg xmlns="http://www.w3.org/2000/svg"
                                            height="24px" viewBox="0 0 24 24" width="24px">
                                            <path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M4.75 3h14.5v16H4.75z" opacity=".3"></path>
                                            <path
                                            d="M18 0H6C4.34 0 3 1.34 3 3v18c0 1.66 1.34 3 3 3h12c1.66 0 3-1.34 3-3V3c0-1.66-1.34-3-3-3zm-4 22h-4v-1h4v1zm5.25-3H4.75V3h14.5v16z">
                                            </path>
                                        </svg> </span> </div>
                                    <div> <span class="text-textmuted text-[0.925rem] mb-1 d-inline-block">Tablet </span>
                                        <div><span class="text-[1.25rem] font-medium">679</span> </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-12 xl:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex items-center justify-between">
                                <div>
                                    <h6 class="font-medium mb-2 text-[1rem]">Impressions</h6>
                                    <div class="flex items-center">
                                    <div class="me-4"> <span
                                        class="avatar bg-primary !text-white text-xl p-3"><i
                                            class="ri-thumb-up-line leading-none"></i></span> </div>
                                    <div class="flex-1">
                                        <p class="text-2xl font-medium">9,789</p>
                                    <span class="block  badge bg-success/10 !text-success text-[0.75rem]">+0.892 <i class="ti ti-trending-up ms-1"></i></span>
                                    </div>
                                    </div>
                                </div>
                                <div id="impressions"></div>
                                </div>
                            </div>
                            </div>
                            <div class="box">
                            <div class="box-body">
                                <div class="flex items-center justify-between">
                                <div>
                                    <h6 class="font-medium mb-2 text-[1rem]">Total Users</h6>
                                    <div class="flex items-center">
                                    <div class="me-4"> <span
                                        class="avatar bg-danger !text-white text-xl p-3"><i
                                            class="ri-group-3-line leading-none"></i></span> </div>
                                    <div class="flex-1">
                                        <p class="text-2xl font-medium">12,345</p>
                                    <span class="block  badge bg-danger/10 !text-danger text-[0.75rem]">-0.692 <i class="ti ti-trending-up ms-1"></i></span>
                                    </div>
                                    </div>
                                </div>
                                <div id="totalusers"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <div  class="flex justify-between">
                                <h4 class="box-title mb-2">Visitors By Channel</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Traffic Source Report,Summarizing Your Audience Acquisition Data,Tracking Audience Sources.</p>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table class="table table-auto order-table ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                                <thead class="bg-light dark:bg-black/20">
                                <tr class="">
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">S.no</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Channel</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Sessions</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Bounce Rate</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Avg Session Duration</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Target Reached</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Pages Per Session</th>
                                    <th scope="col" class="!border-defaultborder dark:!border-defaultborder/10">Action</th>
                                </tr>
                                </thead>
                                <tbody class="">
                                <tr class="">
                                    <td>1</td>
                                    <td>
                                    <div class="flex items-center"> <span class="avatar avatar-sm bg-primary/20 rounded-full p-2">
                                        <i class="ri-search-2-line text-base font-semibiold text-primary leading-none"></i>
                                        </span> <span class="ltr:ml-2 rtl:mr-2"> Organic Search </span> </div>
                                    </td>
                                    <td>782</td>
                                    <td>32.09%</td>
                                    <td>0 hrs : 0 mins : 32 secs</td>
                                    <td><span class="badge bg-primary/20 rounded-sm text-primary">278</span></td>
                                    <td>2.9</td>
                                    <td class="flex gap-2">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary !border !border-primary/20"><i class="ti ti-eye"></i></button>
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-info !border !border-info/20"><i class="ti ti-pencil"></i></button>
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">  <i class="ti ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>2</td>
                                    <td>
                                    <div class="flex items-center"> <span
                                        class="avatar avatar-sm bg-purplemain/20 rounded-full p-2"> <i
                                            class="ri-globe-line text-base font-semibiold text-purplemain leading-none"></i> </span>
                                        <span class="ltr:ml-2 rtl:mr-2"> Direct </span>
                                    </div>
                                    </td>
                                    <td>882</td>
                                    <td>39.38%</td>
                                    <td>0 hrs : 2 mins : 45 secs</td>
                                    <td><span class="badge bg-purplemain/20 !text-purplemain rounded-sm">782</span></td>
                                    <td>1.5</td>
                                    <td class="flex gap-2">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary !border !border-primary/20"><i class="ti ti-eye"></i></button>
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-info !border !border-info/20"><i class="ti ti-pencil"></i></button>
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">  <i class="ti ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>3</td>
                                    <td>
                                    <div class="flex items-center"> <span class="avatar avatar-sm bg-danger/20 rounded-full p-2">
                                        <i class="ri-share-forward-line text-base font-semibiold text-danger leading-none"></i>
                                        </span> <span class="ltr:ml-2 rtl:mr-2"> Referral </span> </div>
                                    </td>
                                    <td>322</td>
                                    <td>22.67%</td>
                                    <td>0 hrs : 38 mins : 28 secs</td>
                                    <td><span class="badge bg-danger/20 rounded-sm text-danger">622</span></td>
                                    <td>3.2</td>
                                    <td class="flex gap-2">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary !border !border-primary/20"><i class="ti ti-eye"></i></button>
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-info !border !border-info/20"><i class="ti ti-pencil"></i></button>
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">  <i class="ti ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>4</td>
                                    <td>
                                    <div class="flex items-center"> <span class="avatar avatar-sm bg-warning/20 rounded-full p-2">
                                        <i class="ri-reactjs-line text-base font-semibiold text-warning leading-none"></i> </span>
                                        <span class="ltr:ml-2 rtl:mr-2"> Social </span>
                                    </div>
                                    </td>
                                    <td>389</td>
                                    <td>25.11%</td>
                                    <td>0 hrs : 12 mins : 89 secs</td>
                                    <td><span class="badge bg-warning/20 rounded-sm text-warning">142</span></td>
                                    <td>1.4</td>
                                    <td class="flex gap-2">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary !border !border-primary/20"><i class="ti ti-eye"></i></button>
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-info !border !border-info/20"><i class="ti ti-pencil"></i></button>
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">  <i class="ti ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>5</td>
                                    <td>
                                    <div class="flex items-center"> <span class="avatar avatar-sm bg-info/20 rounded-full p-2"> <i
                                            class="ri-mail-line text-base font-semibiold text-info leading-none"></i> </span> <span
                                        class="ltr:ml-2 rtl:mr-2"> Email </span> </div>
                                    </td>
                                    <td>378</td>
                                    <td>23.79%</td>
                                    <td>0 hrs : 14 mins : 27 secs</td>
                                    <td><span class="badge bg-info/20 rounded-sm text-info">178</span></td>
                                    <td>1.6</td>
                                    <td class="flex gap-2">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary !border !border-primary/20"><i class="ti ti-eye"></i></button>
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-info !border !border-info/20"><i class="ti ti-pencil"></i></button>
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">  <i class="ti ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>6</td>
                                    <td>
                                    <div class="flex items-center"> <span class="avatar avatar-sm bg-success/20 rounded-full p-2">
                                        <i class="ri-bank-card-line text-base font-semibiold text-success leading-none"></i>
                                        </span> <span class="ltr:ml-2 rtl:mr-2"> Paid Search </span> </div>
                                    </td>
                                    <td>488</td>
                                    <td>28.77%</td>
                                    <td>0 hrs : 16 mins : 28 secs</td>
                                    <td><span class="badge bg-success/20 rounded-sm text-success">578</span></td>
                                    <td>2.5</td>
                                    <td class="flex gap-2">
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-primary !border !border-primary/20"><i class="ti ti-eye"></i></button>
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-info !border !border-info/20"><i class="ti ti-pencil"></i></button>
                                    <button class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">  <i class="ti ti-trash"></i></button>
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
        @vite('resources/assets/js/analyticsdashboard.js')

@endsection
