
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Courses</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Dashboard <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Courses 
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
                    <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6 xxl:gap-x-0">
                            <div class="xxl:col-span-12 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex flex-wrap items-stat gap-2">
                                    <div class="me-1"> <span class="avatar avatar-md bg-primary-gradient"> <i
                                            class="ti ti-wallet !text-[1.25rem] text-white"></i> </span> </div>
                                    <div class="flex-grow">
                                        <h5 class="block font-semibold text-[1.125rem]">$98,312</h5>
                                        <div class="flex justify-between items-center">
                                        <div class="text-[#8c9097]  text-[0.75rem]">YTD Earnings</div>
                                        </div>
                                    </div>
                                    <div class="text-success"><i
                                        class="ti ti-trending-up text-[1rem] me-1 align-middle inline-flex"></i>+2.02%</div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-12 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex flex-wrap gap-2 items-start">
                                    <div class="me-1"> <span class="avatar avatar-md bg-danger-gradient text-white"> <i
                                            class="ti ti-gift text-[1.25rem]"></i> </span> </div>
                                    <div class="flex-grow">
                                        <h5 class="block font-semibold text-[1.125rem] ">2,389</h5>
                                        <div class="flex justify-between items-center">
                                        <div class="text-[#8c9097]  text-[0.75rem]">Total Courses</div>
                                        </div>
                                    </div>
                                    <div class="text-success"><i
                                        class="ti ti-trending-up text-[1rem] me-1 align-middle inline-flex"></i>+0.89%</div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-12 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex flex-wrap gap-2 items-start">
                                    <div class="me-1"> <span class="avatar avatar-md bg-success-gradient text-white"> <i
                                            class="ti ti-users text-[1.25rem]"></i> </span> </div>
                                    <div class="flex-grow">
                                        <h5 class="block font-semibold text-[1.125rem] ">35,393</h5>
                                        <div class="flex justify-between items-center">
                                        <div class="text-[#8c9097]  text-[0.75rem]">Total Students</div>
                                        </div>
                                    </div>
                                    <div class="text-danger"><i
                                        class="ti ti-trending-down text-[1rem] me-1 align-middle inline-flex"></i>-0.24%</div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-12 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex flex-wrap gap-2 items-start">
                                    <div class="me-1"> <span class="avatar avatar-md bg-warning-gradient text-white"> <i
                                            class="ti ti-id text-[1.25rem]"></i> </span> </div>
                                    <div class="flex-grow">
                                        <h5 class="block font-semibold text-[1.125rem] ">573</h5>
                                        <div class="flex justify-between items-center">
                                        <div class="text-[#8c9097]  text-[0.75rem]">Total Instructors</div>
                                        </div>
                                    </div>
                                    <div class="text-danger"><i
                                        class="ti ti-trending-down text-[1rem] me-1 align-middle inline-flex"></i>-1.32%</div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
                            <div class="box">
                            <div class="box-header justify-between ">
                                <div class="items-center flex">
                                <h4 class="box-title mb-2"> Courses Completed</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Tracking Your Learning Milestones,  Reviewing Your Learning Achievements.</p>
                                </div>
                            </div>
                            <div class="box-body !pt-2 !pb-0 !px-0">
                                <div class="total-revenue !px-[1.25rem]">
                                <div>
                                    <h6 class="font-medium">1,117</h6>
                                    <label class="text-textmuted !text-[0.75rem]"><span class="bg-primary"></span>Year</label>
                                </div>
                                <div>
                                    <h6 class="font-medium">742</h6>
                                    <label class="text-textmuted !text-[0.75rem]"><span class="bg-danger"></span>Month</label>
                                </div>
                                <div>
                                    <h6 class="font-medium">259</h6>
                                    <label class="text-textmuted !text-[0.75rem]"><span class="bg-success"></span>Weak</label>
                                </div>
                                </div>
                                <div id="coursescompleted"></div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-5 col-span-12">
                            <div class="box">
                            <div class="box-header">
                                <div class="flex justify-between">
                                    <h4 class="box-title mb-2">Top Categories</h4>
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
                                    <p class="text-[.75rem] text-textmuted font-normal mb-0"> Identifying Most Popular Course Subjects,Analyzing Course Subjects.</p>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="flex flex-col">
                                <li class="p-0 mb-4 ti-list-group !border-0 "> <a href="javascript:void(0);" class="w-full">
                                    <div class="flex items-center"> <span
                                        class="avatar rounded-sm avatar-md bg-primary/10 !text-primary p-3"><i
                                            class="ri-dashboard-line text-[1.2rem] leading-none"></i></span>
                                        <div class="flex-auto ltr:ml-3 rtl:mr-3">
                                        <p class="text-[0.875rem] font-medium mb-0">UI / UX Design</p>
                                        <p class="text-xs text-textmuted mb-0">10,000 + Courses</p>
                                        </div>
                                        <div> <span class="text-[0.875rem] font-medium">$199.99</span> </div>
                                    </div>
                                    </a> </li>
                                <li class="p-0 mb-4 ti-list-group !border-0 "> <a href="javascript:void(0);" class="w-full">
                                    <div class="flex items-center"> <span
                                        class="avatar rounded-sm avatar-md bg-danger/10 !text-danger p-3"><i
                                            class="ri-advertisement-line text-[1.2rem] leading-none"></i></span>
                                        <div class="flex-auto ltr:ml-3 rtl:mr-3">
                                        <p class="text-[0.875rem] font-medium mb-0">Digital Marketing</p>
                                        <p class="text-xs text-textmuted mb-0">90 + Courses</p>
                                        </div>
                                        <div> <span class="text-[0.875rem] font-medium">$599.99</span> </div>
                                    </div>
                                    </a> </li>
                                <li class="p-0 mb-4 ti-list-group !border-0 "> <a href="javascript:void(0);" class="w-full">
                                    <div class="flex items-center"> <span
                                        class="avatar rounded-sm avatar-md bg-success/10 !text-success p-3"><i
                                            class="ri-code-box-line text-[1.2rem] leading-none"></i></span>
                                        <div class="flex-auto ltr:ml-3 rtl:mr-3">
                                        <p class="text-[0.875rem] font-medium mb-0">Web Development</p>
                                        <p class="text-xs text-textmuted mb-0">250 + Courses</p>
                                        </div>
                                        <div> <span class="text-[0.875rem] font-medium">$299.99</span> </div>
                                    </div>
                                    </a> </li>
                                <li class="p-0 mb-4 ti-list-group !border-0 "> <a href="javascript:void(0);" class="w-full">
                                    <div class="flex items-center"> <span
                                        class="avatar rounded-sm avatar-md bg-warning/10 !text-warning p-3"><i
                                            class="ri-bar-chart-2-line text-[1.2rem] leading-none"></i></span>
                                        <div class="flex-auto ltr:ml-3 rtl:mr-3">
                                        <p class="text-[0.875rem] font-medium mb-0">Stocks &amp; Trading</p>
                                        <p class="text-xs text-textmuted mb-0">100 + Courses</p>
                                        </div>
                                        <div> <span class="text-[0.875rem] font-medium">$999.99</span> </div>
                                    </div>
                                    </a> </li>
                                <li class="p-0 mb-4 ti-list-group !border-0 "> <a href="javascript:void(0);" class="w-full">
                                    <div class="flex items-center"> <span
                                        class="avatar rounded-sm avatar-md bg-danger/10 !text-danger p-3"><i
                                            class="ri-angularjs-line text-[1.2rem] leading-none"></i></span>
                                        <div class="flex-auto ltr:ml-3 rtl:mr-3">
                                        <p class="text-[0.875rem] font-medium mb-0">Angular Course</p>
                                        <p class="text-xs text-textmuted mb-0">300 + Courses</p>
                                        </div>
                                        <div> <span class="text-[0.875rem] font-medium">$399.99</span> </div>
                                    </div>
                                    </a> </li>
                                <li class="p-0 mb-0 ti-list-group !border-0 "> <a href="javascript:void(0);" class="w-full">
                                    <div class="flex items-center"> <span class="avatar rounded-sm avatar-md bg-info/10 !text-info p-3"><i
                                            class="ri-reactjs-line text-[1.2rem] leading-none"></i></span>
                                        <div class="flex-auto ltr:ml-3 rtl:mr-3">
                                        <p class="text-[0.875rem] font-medium mb-0">React Course</p>
                                        <p class="text-xs text-textmuted mb-0">150 + Courses</p>
                                        </div>
                                        <div> <span class="text-[0.875rem] font-medium">$599.99</span> </div>
                                    </div>
                                    </a> </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-7 col-span-12">
                            <div class="box overflow-hidden">
                            <div class="box-header !pb-3 !border-b !border-defaultborder dark:!border-defaultborder/10">
                                <div class=" flex justify-between">
                                <h4 class="box-title mb-2">My Courses</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Tracking Your Enrolled Learning Paths, Overview of Your Enrolled Courses.</p>
                                </div>
                            </div>
                            <div class="box-body coursetable !p-0">
                                <div class="table-responsive">
                                <table class="ti-custom-table  ti-custom-table-head whitespace-nowrap">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-start !py-3">Course Title</th>
                                        <th scope="col" class="text-start !py-3">Duration</th>
                                        <th scope="col" class="text-start !py-3">Type</th>
                                        <th scope="col" class="text-start !py-3">Instructor</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                        <th scope="row">
                                        <div class="flex items-center">
                                            <div class="me-2"> <span class="items-center"></span> </div>
                                            <div> ui/ux Designing </div>
                                        </div>
                                        </th>
                                        <td>3 Months</td>
                                        <td><span class="badge bg-primary/10 !text-primary">Full Time</span></td>
                                        <td>
                                        <div class="flex items-center">
                                            <div class="me-2"> <span class="avatar avatar-sm avatar-rounded !mb-0"> <img
                                                src="{{asset('build/assets/images/faces/2.jpg')}}" alt=""> </span> </div>
                                            <div class="font-medium">Sarah Taylor</div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                        <th scope="row">
                                        <div class="flex items-center">
                                            <div class="me-2"> <span class="items-center"></span> </div>
                                            <div> Project Management </div>
                                        </div>
                                        </th>
                                        <td>45 Days</td>
                                        <td><span class="badge bg-success/10 !text-success">Completed</span></td>
                                        <td>
                                        <div class="flex items-center">
                                            <div class="me-2"> <span class="avatar avatar-sm avatar-rounded !mb-0"> <img
                                                src="{{asset('build/assets/images/faces/11.jpg')}}" alt=""> </span> </div>
                                            <div class="font-medium">Jason Smith</div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                        <th scope="row">
                                        <div class="flex items-center">
                                            <div class="me-2"> <span class="items-center"></span> </div>
                                            <div> Python </div>
                                        </div>
                                        </th>
                                        <td>90 Days</td>
                                        <td><span class="badge bg-warning/10 !text-warning">Part Time</span></td>
                                        <td>
                                        <div class="flex items-center">
                                            <div class="me-2"> <span class="avatar avatar-sm avatar-rounded !mb-0"> <img
                                                src="{{asset('build/assets/images/faces/14.jpg')}}" alt=""> </span> </div>
                                            <div class="font-medium">Alex Perira</div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                        <th scope="row">
                                        <div class="flex items-center">
                                            <div class="me-2"> <span class="items-center"></span> </div>
                                            <div> Digital Marketing </div>
                                        </div>
                                        </th>
                                        <td>24 Days</td>
                                        <td><span class="badge bg-info/10 !text-info">Week End</span></td>
                                        <td>
                                        <div class="flex items-center">
                                            <div class="me-2"> <span class="avatar avatar-sm avatar-rounded !mb-0"> <img
                                                src="{{asset('build/assets/images/faces/8.jpg')}}" alt=""> </span> </div>
                                            <div class="font-medium">Kamala Singh</div>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                        <th scope="row">
                                        <div class="flex items-center">
                                            <div class="me-2"> <span class="items-center"></span> </div>
                                            <div> Full Stack Development </div>
                                        </div>
                                        </th>
                                        <td>6 Months</td>
                                        <td><span class="badge bg-danger/10 !text-danger">Stopped</span></td>
                                        <td>
                                        <div class="flex items-center">
                                            <div class="me-2"> <span class="avatar avatar-sm avatar-rounded !mb-0"> <img
                                                src="{{asset('build/assets/images/faces/4.jpg')}}" alt=""> </span> </div>
                                            <div class="font-medium">Jessica Leon</div>
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
                    <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="xl:col-span-6 md:col-span-6 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex justify-between items-center flex-wrap mb-3">
                                    <div class="min-w-fit-content mb-2"> <span
                                        class="avatar avatar-md bg-primary/10 !rounded-full !text-primary"> <i
                                        class="ri-group-line text-[1.2rem]"></i> </span> </div>
                                    <div id="totalusers">
                                    </div>
                                    </div>
                                    <div class="flex-grow-1">
                                    <p class="mb-0 text-[0.925rem] !text-textmuted">Total Users</p>
                                    <div class="flex justify-between items-center"> <span
                                        class="text-[1.2rem] font-medium">1,260</span>
                                        <span class="text-sm badge bg-success/10 text-success ms-1"><i
                                            class="ti ti-trending-up mx-1"></i>8.0%</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-6 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex justify-between items-center flex-wrap mb-3">
                                    <div class="min-w-fit-content mb-2"> <span
                                        class="avatar avatar-md br-5 bg-danger/10 !rounded-full !text-danger"> <i
                                        class="ri-timer-line text-[1.2rem]"></i> </span> </div>
                                    <div id="accesstime">
                                    </div>
                                    </div>
                                    <div class="flex-grow-1">
                                    <p class="mb-0 text-[0.925rem] !text-textmuted">Access Time</p>
                                    <div class="flex justify-between items-center"> <span class="text-[1.2rem] font-medium">43
                                        hrs</span>
                                        <span class="text-sm badge bg-danger/10 text-danger ms-1"><i
                                            class="ti ti-trending-down mx-1"></i>8.0%</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-6 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex justify-between items-center flex-wrap mb-3">
                                    <div class="min-w-fit-content mb-2"> <span
                                        class="avatar avatar-md bg-success/10 !rounded-full !text-success"> <i
                                            class="ri-wallet-2-line text-[1.2rem]"></i> </span> </div>
                                    <div id="totalearning">
                                    </div>
                                    </div>
                                    <div class="flex-grow-1">
                                    <p class="mb-0 text-[0.925rem] !text-textmuted">Total Earnings</p>
                                    <div class="flex justify-between items-center"> <span
                                        class="text-[1.2rem] font-medium">1,575</span>
                                        <span class="text-sm badge bg-success/10 text-success ms-1"><i
                                            class="ti ti-trending-up mx-1"></i>8.0%</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="xl:col-span-6 md:col-span-6 col-span-12">
                                <div class="box">
                                <div class="box-body">
                                    <div class="flex justify-between items-center flex-wrap mb-3">
                                    <div class="min-w-fit-content mb-2"> <span
                                        class="avatar avatar-md br-5 bg-warning/10 !rounded-full !text-warning"> <i
                                            class="ri-movie-line text-[1.2rem]"></i> </span> </div>
                                    <div id="totalvedio">
                                    </div>
                                    </div>
                                    <div class="flex-grow-1">
                                    <p class="mb-0 text-[0.925rem] !text-textmuted">Total Vedios</p>
                                    <div class="flex justify-between items-center"> <span class="text-[1.2rem] font-medium">13,575</span>
                                        <span class="text-sm badge bg-danger/10 text-danger ms-1"><i
                                            class="ti ti-trending-down mx-1"></i>8.0%</span>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-12 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title">Top Course Categories</div>
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
                            <div class="box-body sm:!ps-0 ps-3">
                                <div class="grid grid-cols-12">
                                <div class="col-span-12 sm:col-span-7">
                                    <div id="course-categories">
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-5">
                                    <div class="grid grid-cols-12 flex-nowrap mb-4">
                                    <div class="col-span-6"> <span class="text-[0.925rem] font-medium"><i
                                            class="bi bi-circle-fill me-2 text-[0.75rem]  font-medium text-primary"></i>Sales</span>
                                    </div>
                                    <div class="col-span-6 text-end"> <span class="text-primary !font-medium">31%</span> </div>
                                    </div>
                                    <div class="grid grid-cols-12 flex-nowrap mb-4">
                                        <div class="col-span-6"> <span class="text-[0.925rem] font-medium"><i
                                            class="bi bi-circle-fill me-2 text-[0.75rem]  text-warning"></i>Marketing</span> </div>
                                        <div class="col-span-6 text-end"> <span class="text-warning !font-medium">21%</span> </div>
                                    </div>
                                    <div class="grid grid-cols-12 flex-nowrap mb-4">
                                    <div class="col-span-6"> <span class="text-[0.925rem] font-medium"><i
                                            class="bi bi-circle-fill me-2 text-[0.75rem]  font-medium text-danger"></i>IT</span>
                                    </div>
                                    <div class="col-span-6 text-end"> <span class="text-danger !font-medium">15%</span> </div>
                                    </div>
                                    <div class="grid grid-cols-12 flex-nowrap mb-4">
                                    <div class="col-span-6"> <span class="text-[0.925rem] font-medium"><i
                                            class="bi bi-circle-fill me-2 text-[0.75rem]  font-medium text-info"></i>Consultancy</span>
                                    </div>
                                    <div class="col-span-6 text-end"> <span class="text-info !font-medium">10%</span> </div>
                                    </div>
                                    <div class="grid grid-cols-12 flex-nowrap">
                                    <div class="col-span-6"> <span class="text-[0.925rem] font-medium"><i
                                            class="bi bi-circle-fill me-2 text-[0.75rem]  font-medium text-success"></i>Finance</span>
                                    </div>
                                    <div class="col-span-6 text-end"> <span class="text-success !font-medium">23%</span> </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-12 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                            <div class="box-header flex justify-between">
                                <div class="box-title"> Upcoming Courses </div>
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
                            <div class="box-body">
                                <div class="grid grid-cols-12 xl:gap-y-0 gap-4">
                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-12">
                                    <div> <a href="javascript:void(0);"
                                        class="category-link !border-primary/20 bg-primary/10 !fill-primary text-center"> <svg
                                        xmlns="http://www.w3.org/2000/svg" class="category-svg" viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"></path>
                                        <path
                                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z">
                                        </path>
                                        </svg>
                                        <p class="text-[0.875rem] mb-1 text-default font-semibold text-defaulttextcolor">UI/UX
                                        Design</p><span class="text-[0.75rem] text-textmuted ">1000+
                                        Courses</span>
                                    </a> </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-12">
                                    <div> <a href="javascript:void(0);"
                                        class="category-link !border-danger/20 bg-danger/10 !fill-danger text-center"> <svg
                                        xmlns="http://www.w3.org/2000/svg" class="category-svg" enable-background="new 0 0 24 24"
                                        viewBox="0 0 24 24">
                                        <g>
                                            <rect fill="none" height="24" width="24"></rect>
                                        </g>
                                        <g>
                                            <g opacity=".3">
                                            <path
                                                d="M6.71,18.71c-0.28,0.28-2.17,0.76-2.17,0.76s0.47-1.88,0.76-2.17C5.47,17.11,5.72,17,6,17c0.55,0,1,0.45,1,1 C7,18.28,6.89,18.53,6.71,18.71z M7.41,10.83L5.5,10.01l1.97-1.97l1.44,0.29C8.34,9.16,7.83,10.03,7.41,10.83z M13.99,18.5 l-0.82-1.91c0.8-0.42,1.67-0.93,2.49-1.5l0.29,1.44L13.99,18.5z M19.99,4.01c0,0-3.55-0.69-8.23,3.99 c-1.32,1.32-2.4,3.38-2.73,4.04l2.93,2.93c0.65-0.32,2.71-1.4,4.04-2.73C20.68,7.56,19.99,4.01,19.99,4.01z M15,11 c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C17,10.1,16.1,11,15,11z">
                                            </path>
                                            </g>
                                            <g>
                                            <path
                                                d="M6,15c-0.83,0-1.58,0.34-2.12,0.88C2.7,17.06,2,22,2,22s4.94-0.7,6.12-1.88C8.66,19.58,9,18.83,9,18C9,16.34,7.66,15,6,15 z M6.71,18.71c-0.28,0.28-2.17,0.76-2.17,0.76s0.47-1.88,0.76-2.17C5.47,17.11,5.72,17,6,17c0.55,0,1,0.45,1,1 C7,18.28,6.89,18.53,6.71,18.71z M17.42,13.65L17.42,13.65c6.36-6.36,4.24-11.31,4.24-11.31s-4.95-2.12-11.31,4.24l-2.49-0.5 C7.21,5.95,6.53,6.16,6.05,6.63L2,10.69l5,2.14L11.17,17l2.14,5l4.05-4.05c0.47-0.47,0.68-1.15,0.55-1.81L17.42,13.65z M7.41,10.83L5.5,10.01l1.97-1.97l1.44,0.29C8.34,9.16,7.83,10.03,7.41,10.83z M13.99,18.5l-0.82-1.91 c0.8-0.42,1.67-0.93,2.49-1.5l0.29,1.44L13.99,18.5z M16,12.24c-1.32,1.32-3.38,2.4-4.04,2.73l-2.93-2.93 c0.32-0.65,1.4-2.71,2.73-4.04c4.68-4.68,8.23-3.99,8.23-3.99S20.68,7.56,16,12.24z M15,11c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2 S13.9,11,15,11z">
                                            </path>
                                            </g>
                                        </g>
                                        </svg>
                                        <p class="text-[0.875rem] mb-1 text-default font-semibold text-defaulttextcolor">Digital
                                        Marketing</p><span class="text-[0.75rem] text-textmuted ">90+
                                        Courses</span>
                                    </a> </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-12">
                                    <div> <a href="javascript:void(0);"
                                        class="category-link !border-success/20 bg-success/10 !fill-success text-center"> <svg
                                        xmlns="http://www.w3.org/2000/svg" class="category-svg" enable-background="new 0 0 24 24"
                                        viewBox="0 0 24 24" id="swatchbook">
                                        <path opacity="0.2"
                                            d="M9 22H5a3.003 3.003 0 0 1-3-3V5a3.003 3.003 0 0 1 3-3h4a3.003 3.003 0 0 1 3 3v14a3.003 3.003 0 0 1-3 3z">
                                        </path>
                                        <path opacity="0.4"
                                            d="m20.293 6.535-2.828-2.828a3.004 3.004 0 0 0-4.243 0l-1.229 1.228c0 .022.007.043.007.065v14c0 .027-.007.052-.008.08l8.301-8.302a3.004 3.004 0 0 0 0-4.243z">
                                        </path>
                                        <circle cx="7" cy="17" r="1" opacity="1"></circle>
                                        <path opacity="1"
                                            d="m19.065 12.007-7.073 7.072c0-.027.008-.052.008-.079a3.003 3.003 0 0 1-3 3h10a3.003 3.003 0 0 0 3-3v-4a3 3 0 0 0-2.935-2.993z">
                                        </path>
                                        </svg>
                                        <p class="text-[0.875rem] mb-1 text-default font-semibold text-defaulttextcolor">
                                        Development</p><span class="text-[0.75rem] text-textmuted ">250+
                                        Courses</span>
                                    </a> </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                        <div class="box-header ">
                            <div class="flex justify-between">
                            <h4 class="box-title mb-2">Course List</h4>
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
                            <p class="text-[.75rem] text-textmuted font-normal mb-0">Comprehensive Overview of Available Courses,A Comprehensive List of Learning Opportunities.</p>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table class="table table-auto order-table ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                                <thead class="bg-light dark:bg-black/20">
                                <tr>
                                    <th scope="col" class="text-start">S.No</th>
                                    <th scope="col" class="text-start">Course</th>
                                    <th scope="col" class="text-start">Instructor</th>
                                    <th scope="col" class="text-start">Classes</th>
                                    <th scope="col" class="text-start">Category</th>
                                    <th scope="col" class="text-start">Last Updated</th>
                                    <th scope="col" class="text-start">Students</th>
                                    <th scope="col" class="text-start">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                    <td> 1 </td>
                                    <td>
                                    <div class="flex items-center leading-none">
                                        <div class="me-2"> <span class="avatar avatar-xs "> <img
                                            src="{{asset('build/assets/images/nft-images/3.png')}}" alt="" class="!rounded-md"> </span> </div>
                                        <div>Ray Optics &amp; Optical Fibre Master Class</div>
                                    </div>
                                    </td>
                                    <td> Shin Opran </td>
                                    <td> 20 </td>
                                    <td><span class="badge bg-primary/10 !text-primary">Science</span></td>
                                    <td> 29-05-2024 </td>
                                    <td> 25 </td>
                                    <td>
                                    <div class="flex flex-row items-center !gap-2 text-[0.9375rem]"> <a aria-label="anchor"
                                        href="javascript:void(0);"
                                        class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary !border !border-primary/20 hover:text-white hover:border-primary"><i
                                            class="ri-pencil-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger !border !border-danger/20 hover:text-white hover:border-danger"><i
                                            class="ri-delete-bin-line"></i></a> </div>
                                    </td>
                                </tr>
                                <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                    <td> 2 </td>
                                    <td>
                                    <div class="flex items-center leading-none">
                                        <div class="me-2"> <span class="avatar avatar-xs"> <img
                                            src="{{asset('build/assets/images/nft-images/4.png')}}" alt="" class="!rounded-md"> </span> </div>
                                        <div>Master Linear Alzebra Medium Level</div>
                                    </div>
                                    </td>
                                    <td> Arya Neo </td>
                                    <td> 90 </td>
                                    <td><span class="badge bg-info/10 !text-info"> Mathematics</span></td>
                                    <td> 11-06-2024 </td>
                                    <td> 773 </td>
                                    <td>
                                    <div class="flex flex-row items-center !gap-2 text-[0.9375rem]"> <a aria-label="anchor"
                                        href="javascript:void(0);"
                                        class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary !border !border-primary/20 hover:text-white hover:border-primary"><i
                                            class="ri-pencil-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger !border !border-danger/20 hover:text-white hover:border-danger"><i
                                            class="ri-delete-bin-line"></i></a> </div>
                                    </td>
                                </tr>
                                <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                    <td> 3 </td>
                                    <td>
                                    <div class="flex items-center leading-none">
                                        <div class="me-2"> <span class="avatar avatar-xs"> <img
                                            src="{{asset('build/assets/images/nft-images/5.png')}}" alt="" class="!rounded-md"> </span> </div>
                                        <div>Learn How To Trade And Invest For-Absolute Beginners</div>
                                    </div>
                                    </td>
                                    <td> Sia Niu </td>
                                    <td> 161 </td>
                                    <td><span class="badge bg-danger/10 !text-danger"> Stocks &amp; Trading</span></td>
                                    <td> 10-06-2024 </td>
                                    <td> 51 </td>
                                    <td>
                                    <div class="flex flex-row items-center !gap-2 text-[0.9375rem]"> <a aria-label="anchor"
                                        href="javascript:void(0);"
                                        class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary !border !border-primary/20 hover:text-white hover:border-primary"><i
                                            class="ri-pencil-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger !border !border-danger/20 hover:text-white hover:border-danger"><i
                                            class="ri-delete-bin-line"></i></a> </div>
                                    </td>
                                </tr>
                                <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                    <td> 4 </td>
                                    <td>
                                    <div class="flex items-center leading-none">
                                        <div class="me-2"> <span class="avatar avatar-xs"> <img
                                            src="{{asset('build/assets/images/nft-images/6.png')}}" alt="" class="!rounded-md"> </span> </div>
                                        <div>Digital Marketing Course from Scratch</div>
                                    </div>
                                    </td>
                                    <td> Stuart George </td>
                                    <td> 115 </td>
                                    <td><span class="badge bg-success/10 !text-success">Marketing</span></td>
                                    <td> 21-06-2024 </td>
                                    <td> 1,189 </td>
                                    <td>
                                    <div class="flex flex-row items-center !gap-2 text-[0.9375rem]"> <a aria-label="anchor"
                                        href="javascript:void(0);"
                                        class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary !border !border-primary/20 hover:text-white hover:border-primary"><i
                                            class="ri-pencil-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger !border !border-danger/20 hover:text-white hover:border-danger"><i
                                            class="ri-delete-bin-line"></i></a> </div>
                                    </td>
                                </tr>
                                <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                    <td> 5 </td>
                                    <td>
                                    <div class="flex items-center leading-none">
                                        <div class="me-2"> <span class="avatar avatar-xs"> <img
                                            src="{{asset('build/assets/images/nft-images/7.png')}}" alt="" class="!rounded-md"> </span> </div>
                                        <div>Data Structures &amp; Algorithms For Beginners</div>
                                    </div>
                                    </td>
                                    <td> Boran Ray </td>
                                    <td> 30 </td>
                                    <td><span class="badge bg-warning/10 !text-warning">Programming</span></td>
                                    <td> 15-06-2024 </td>
                                    <td> 3,368 </td>
                                    <td>
                                    <div class="flex flex-row items-center !gap-2 text-[0.9375rem]"> <a aria-label="anchor"
                                        href="javascript:void(0);"
                                        class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary !border !border-primary/20 hover:text-white hover:border-primary"><i
                                            class="ri-pencil-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger !border !border-danger/20 hover:text-white hover:border-danger"><i
                                            class="ri-delete-bin-line"></i></a> </div>
                                    </td>
                                </tr>
                                <tr class="border-t border-defaultborder dark:border-defaultborder/10">
                                    <td> 6 </td>
                                    <td>
                                    <div class="flex items-center leading-none">
                                        <div class="me-2"> <span class="avatar avatar-xs"> <img
                                            src="{{asset('build/assets/images/nft-images/7.png')}}" alt="" class="!rounded-md"> </span> </div>
                                        <div>Css Zero to Hero Master Class</div>
                                    </div>
                                    </td>
                                    <td> Burak Oin </td>
                                    <td> 51 </td>
                                    <td><span class="badge bg-purplemain/10 !text-purplemain">UI/UX</span></td>
                                    <td> 22-06-2024 </td>
                                    <td> 252 </td>
                                    <td>
                                    <div class="flex flex-row items-center !gap-2 text-[0.9375rem]"> <a aria-label="anchor"
                                        href="javascript:void(0);"
                                        class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary !border !border-primary/20 hover:text-white hover:border-primary"><i
                                            class="ri-pencil-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                        class="ti-btn  ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger !border !border-danger/20 hover:text-white hover:border-danger"><i
                                            class="ri-delete-bin-line"></i></a> </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="sm:flex items-center">
                            <div class="text-defaulttextcolor dark:text-defaulttextcolor/70"> Showing 5 Entries <i
                                class="bi bi-arrow-right ms-2 font-semibold"></i> </div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                <ul class="ti-pagination mb-0">
                                    <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                    <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"> <a class="page-link !text-primary" href="javascript:void(0);"> next </a>
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
	
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        @vite('resources/assets/js/coursedashboard.js')

@endsection
