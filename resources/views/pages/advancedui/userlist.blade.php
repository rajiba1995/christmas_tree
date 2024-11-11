
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">User List</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Advanced Ui <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">User List 
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
                    <div class="box">
                        <div class="box-header border-none">
                            <div class="flex justify-between">
                                <div>
                                    <div class="box-title pb-0">USERS TABLE</div>
                                    <p class="text-xs text-gray-500 font-normal">Example of Valex Simple Table. <a href=""
                                            class="text-black dark:text-white">Learn more</a></p>
                                </div>
                                <div class="hs-dropdown ti-dropdown">
                                    <a class="!py-2" href="javascript:void(0);" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots align-middle ms-1 inline-block"></i>
                                    </a>
                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden" aria-labelledby="dropdownMenuLink">
                                        <li class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li class="whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                class="ti-dropdown-item" href="javascript:void(0);">Another
                                                action</a></li>
                                        <li class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered whitespace-nowrap min-w-full">
                                    <thead>
                                        <tr class="!border-defaultborder dark:!border-defaultborder/10">
                                            <th scope="col" class="border-b  dark:border-defaultborder/10 text-start">User
                                                photo</th>
                                            <th scope="col"
                                                class="border border-defaultborder dark:border-defaultborder/10 text-start">
                                                Name</th>
                                            <th scope="col"
                                                class="border border-defaultborder dark:border-defaultborder/10 text-start">
                                                Created</th>
                                            <th scope="col"
                                                class="border border-defaultborder dark:border-defaultborder/10 text-start">
                                                Status</th>
                                            <th scope="col"
                                                class="border border-defaultborder dark:border-defaultborder/10 text-start">
                                                Email</th>
                                            <th scope="col"
                                                class="border border-defaultborder dark:border-defaultborder/10 text-start">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <tr class="!border-defaultborder dark:!border-defaultborder/10">
                                            <td class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"
                                                class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                <img alt="avatar" class="!rounded-full avatar-md avatar"
                                                    src="{{asset('build/assets/images/faces/1.jpg')}}">
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Megan
                                                Peters</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                08/06/2021</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"
                                                class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span
                                                    class="badge bg-primary/10 !text-primary">Active</span></td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"
                                                class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                    href="javascript:void(0);">mila@kunis.com</a></td>
                                            <td class="	whitespace-nowrap text-sm font-medium">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                        class="ti-btn ti-btn-sm hs-tooltip-toggle flex items-center justify-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-primary text-white hover:bg-primary disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                        <i class="las la-search"></i>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                            Search
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                        class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-info text-white hover:bg-info disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                        <i class="las la-pen"></i>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                            Edit
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                        class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-danger text-white hover:bg-danger disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                        <i class="las la-trash"></i>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                            Delete
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="!border-defaultborder dark:!border-defaultborder/10">
                                            <td class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"
                                                class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                <img alt="avatar" class="!rounded-full avatar-md avatar"
                                                    src="{{asset('build/assets/images/faces/2.jpg')}}">
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">George
                                                Clooney</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                12/06/2021</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span
                                                    class="badge bg-primary/10 !text-primary">Active</span></td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                    href="javascript:void(0);">marlon@brando.com</a></td>
                                                    <td class="	whitespace-nowrap text-sm font-medium">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle flex items-center justify-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-primary text-white hover:bg-primary disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-search"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Search
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-info text-white hover:bg-info disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-pen"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-danger text-white hover:bg-danger disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                        </tr>
                                        <tr class="!border-defaultborder dark:!border-defaultborder/10">
                                            <td
                                                class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                <img alt="avatar" class="!rounded-full avatar-md avatar"
                                                    src="{{asset('build/assets/images/faces/13.jpg')}}">
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Ryan
                                                Gossling</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                14/06/2021</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span
                                                    class="badge bg-danger/10 !text-danger">Banned</span></td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"
                                                class="	whitespace-nowrap text-end text-sm font-medium"><a
                                                    href="javascript:void(0);">jack@nicholson</a></td>
                                                    <td class="	whitespace-nowrap text-sm font-medium">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle flex items-center justify-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-primary text-white hover:bg-primary disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-search"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Search
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-info text-white hover:bg-info disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-pen"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-danger text-white hover:bg-danger disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                        </tr>
                                        <tr class="!border-defaultborder dark:!border-defaultborder/10">
                                            <td
                                                class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                <img alt="avatar" class="!rounded-full avatar-md avatar"
                                                    src="{{asset('build/assets/images/faces/1.jpg')}}">
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"> Emma
                                                Watson</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                16/06/2021</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span
                                                    class="badge bg-warning/10 !text-warning !text-warning">Pending</span>
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                    href="javascript:void(0);">jack@nicholsonm</a></td>
                                                    <td class="	whitespace-nowrap text-sm font-medium">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle flex items-center justify-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-primary text-white hover:bg-primary disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-search"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Search
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-info text-white hover:bg-info disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-pen"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-danger text-white hover:bg-danger disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                        </tr>
                                        <tr class="!border-defaultborder dark:!border-defaultborder/10">
                                            <td
                                                class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                <img alt="avatar" class="!rounded-full avatar-md avatar"
                                                    src="{{asset('build/assets/images/faces/12.jpg')}}">
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Mila
                                                Kunis</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                18/06/2021</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span
                                                    class="badge bg-secondary/10 !text-primary">In Active</span></td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                    href="javascript:void(0);">mila@kunis.com</a></td>
                                                    <td class="	whitespace-nowrap text-sm font-medium">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle flex items-center justify-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-primary text-white hover:bg-primary disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-search"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Search
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-info text-white hover:bg-info disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-pen"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-danger text-white hover:bg-danger disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                        </tr>
                                        <tr class="!border-defaultborder dark:!border-defaultborder/10">
                                            <td
                                                class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                <img alt="avatar" class="!rounded-full avatar-md avatar"
                                                    src="{{asset('build/assets/images/faces/4.jpg')}}">
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Phil
                                                Watson</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                23/06/2021</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span
                                                    class="badge bg-primary/10 !text-primary">Active</span></td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                    href="javascript:void(0);">phil@watson.com</a></td>
                                                    <td class="	whitespace-nowrap text-sm font-medium">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle flex items-center justify-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-primary text-white hover:bg-primary disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-search"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Search
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-info text-white hover:bg-info disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-pen"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-danger text-white hover:bg-danger disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                        </tr>
                                        <tr class="!border-defaultborder dark:!border-defaultborder/10">
                                            <td
                                                class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                <img alt="avatar" class="!rounded-full avatar-md avatar"
                                                    src="{{asset('build/assets/images/faces/5.jpg')}}">
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Sonia
                                                Robertson</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                25/06/2021</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span
                                                    class="badge bg-primary/10 !text-primary">Active</span></td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                    href="javascript:void(0);">robertson@sonia.com</a></td>
                                                    <td class="	whitespace-nowrap text-sm font-medium">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle flex items-center justify-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-primary text-white hover:bg-primary disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-search"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Search
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-info text-white hover:bg-info disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-pen"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-danger text-white hover:bg-danger disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                        </tr>
                                        <tr class="!border-defaultborder dark:!border-defaultborder/10">
                                            <td
                                                class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                <img alt="avatar" class="!rounded-full avatar-md avatar"
                                                    src="{{asset('build/assets/images/faces/7.jpg')}}">
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Adam
                                                Hamilton</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                31/06/2021</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span
                                                    class="badge bg-warning/10 !text-warning !text-warning">Pending</span>
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                    href="javascript:void(0);">mila@kunis.com</a></td>
                                                    <td class="	whitespace-nowrap text-sm font-medium">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle flex items-center justify-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-primary text-white hover:bg-primary disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-search"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Search
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-info text-white hover:bg-info disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-pen"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-danger text-white hover:bg-danger disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                        </tr>
                                        <tr class="!border-defaultborder dark:!border-defaultborder/10">
                                            <td
                                                class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                <img alt="avatar" class="!rounded-full avatar-md avatar"
                                                    src="{{asset('build/assets/images/faces/9.jpg')}}">
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Leah
                                                Morgan</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                02/07/2021</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span
                                                    class="badge bg-warning/10 !text-warning !text-warning">Pending</span>
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                    href="javascript:void(0);">morganleah@.com</a></td>
                                                    <td class="	whitespace-nowrap text-sm font-medium">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle flex items-center justify-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-primary text-white hover:bg-primary disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-search"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Search
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-info text-white hover:bg-info disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-pen"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-danger text-white hover:bg-danger disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                        </tr>
                                        <tr class="!border-defaultborder dark:!border-defaultborder/10">
                                            <td
                                                class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                <img alt="avatar" class="!rounded-full avatar-md avatar"
                                                    src="{{asset('build/assets/images/faces/11.jpg')}}">
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Amelia
                                                McDonald</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                08/07/2021</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span
                                                    class="badge bg-primary/10 !text-primary">Active</span></td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                    href="javascript:void(0);">amelia23@kunis.com</a></td>
                                                    <td class="	whitespace-nowrap text-sm font-medium">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle flex items-center justify-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-primary text-white hover:bg-primary disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-search"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Search
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-info text-white hover:bg-info disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-pen"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-danger text-white hover:bg-danger disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                        </tr>
                                        <tr class="!border-defaultborder dark:!border-defaultborder/10">
                                            <td
                                                class="	whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                <img alt="avatar" class="!rounded-full avatar-md avatar"
                                                    src="{{asset('build/assets/images/faces/17.jpg')}}">
                                            </td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">Paul
                                                Molive</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                12/07/2021</td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><span
                                                    class="badge bg-danger/10 !text-danger">Banned</span></td>
                                            <td class="	whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><a
                                                    href="javascript:void(0);">paul45@kunis.com</a></td>
                                                    <td class="	whitespace-nowrap text-sm font-medium">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle flex items-center justify-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-primary text-white hover:bg-primary disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-search"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Search
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-info text-white hover:bg-info disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-pen"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="ti-btn ti-btn-sm hs-tooltip-toggle inline-flex items-center gap-x-2 text-sm font-semibold rounded-sm border border/10 bg-danger text-white hover:bg-danger disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <i class="las la-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <nav aria-label="Page  navigation">
                            <ul class="ti-pagination !mb-4 justify-end">
                                <li class="page-item disabled">
                                    <a class="page-link px-3 py-[0.375rem]">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link px-3 py-[0.375rem]"
                                        href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                        href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link px-3 py-[0.375rem]"
                                        href="javascript:void(0);">3</a></li>
                                <li class="page-item">
                                    <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- End Pagination -->
                    </div>

@endsection

@section('scripts')
	


@endsection
