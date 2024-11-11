
@extends('layouts.master')

@section('styles')

        <!-- Color Picker Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                        <div class="my-auto">
                            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Ecommerce</h5>
                            <nav>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                    href="javascript:void(0);"> Dashboard <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                                </a> </li>
                                <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                    href="javascript:void(0);">Ecommerce 
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

                    <!-- row -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex">
                                <div>
                                    <p class="font-medium mb-1 text-textmuted">Total Orders</p>
                                    <h4 class="mb-0 font-medium">$18,645</h4>
                                </div>
                                <div class="avatar avatar-lg rounded-md  ms-auto">
                                    <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-primary-gradient"> <i
                                        class="bi bi-cart-check text-[1.2rem] !text-white"></i> </div>
                                </div>
                                </div>
                                <div class="flex mt-2"> <span class="badge !text-primary !text-xs bg-primary/10 !rounded-full">+24% <i
                                    class="fe fe-arrow-down !text-[0.75rem]"></i></span> <a href="javascript:void(0);"
                                    class="text-textmuted ms-auto underline mt-auto">view more</a> </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex">
                                <div>
                                    <p class="font-medium mb-1 text-textmuted">Total Expenses</p>
                                    <h4 class="mb-0 font-medium">$73,579</h4>
                                </div>
                                <div class="avatar avatar-lg rounded-md ms-auto">
                                    <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-danger-gradient"> <i
                                        class="bi bi-currency-dollar text-[1.2rem] !text-white"></i> </div>
                                </div>
                                </div>
                                <div class="flex mt-2"> <span class="badge  bg-danger/10 !text-danger !text-xs !rounded-full">+10% <i
                                    class="fe fe-arrow-up !text-[0.75rem]"></i></span> <a href="javascript:void(0);"
                                    class="text-textmuted  ms-auto underline mt-auto">view more</a> </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex">
                                <div>
                                    <p class="font-medium mb-1 text-textmuted">Total Sales</p>
                                    <h4 class="mb-0 font-medium">$34,876</h4>
                                </div>
                                <div class="avatar avatar-lg rounded-md  ms-auto">
                                    <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-success-gradient"> <i
                                        class="bi bi-archive text-[1.2rem] !text-white"></i> </div>
                                </div>
                                </div>
                                <div class="flex mt-2"> <span class="badge !text-success !text-xs bg-success/10 !rounded-full">+0.26% <i
                                    class="fe fe-arrow-down !text-[0.75rem]"></i></span> <a href="javascript:void(0);"
                                    class="text-textmuted  ms-auto underline mt-auto">view more</a> </div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-body">
                                <div class="flex">
                                <div>
                                    <p class="font-medium text-textmuted mb-1">Total Products</p>
                                    <h4 class="mb-0 font-medium">26,231</h4>
                                </div>
                                <div class="avatar avatar-lg rounded-md ms-auto">
                                    <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-warning-gradient"> <i
                                        class="bi bi-handbag text-[1.2rem] !text-white"></i> </div>
                                </div>
                                </div>
                                <div class="flex mt-2"> <span class="badge bg-warning/10 !text-warning  !text-xs !rounded-full">+06% <i
                                    class="fe fe-arrow-down !text-[0.75rem]"></i></span> <a href="javascript:void(0);"
                                    class="text-textmuted  ms-auto underline mt-auto">view more</a> </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row closed -->

                    <!-- row opened -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 md:col-span-12 col-span-12">
                            <div class="box overflow-hidden">
                            <div class="box-body !p-0">
                                <div class="box-header !border-b-0 !pb-0">
                                <div class="flex justify-between">
                                    <h4 class="box-title mb-2">Recent Orders</h4>
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
                                    <p class="text-[.75rem] text-textmuted font-normal mb-0">Tracking Your Latest Shopping Adventures.</p>
                                </div>
                                </div>
                                <div class="">
                                    <ul class="pt-4">
                                        <li class="px-4">
                                            <div class="mb-6">
                                                <div class="flex items-center">
                                                    <a href="javascript:void(0);"><span class="avatar avatar-md br-5 bg-primary/10 !text-primary  me-3"><i class="fe fe-box"></i></span></a>
                                                    <div class="w-full">
                                                        <a href="javascript:void(0);"><h6 class="mb-2 mt-1 text-[0.925rem] font-medium text-default">Fashion</h6></a>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 90%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <p class="mb-3 fs-13 text-textmuted">
                                                            <i class="fe fe-arrow-up-right mx-1 text-success brround"></i>93.0%
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="px-4">
                                            <div class="mb-6">
                                                <div class="flex">
                                                    <a href="javascript:void(0);"><span class="avatar avatar-md br-5 bg-danger/10 !text-danger me-3"><i class="fe fe-home"></i></span></a>
                                                    <div class="w-full">
                                                        <a href="javascript:void(0);"><h6 class="mb-2 mt-1 text-[0.925rem] font-medium text-default">Home Furniture</h6></a>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated !bg-danger" style="width: 80%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <p class="mb-3 fs-13 text-textmuted">
                                                            <i class="fe fe-arrow-up-right mx-1 text-success brround"></i>80.5%
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="px-4">
                                            <div class="mb-6">
                                                <div class="flex">
                                                    <a href="javascript:void(0);"><span class="avatar avatar-md br-5 bg-success/10 !text-success me-3"><i class="fe fe-layers"></i></span></a>
                                                    <div class="w-full">
                                                        <a href="javascript:void(0);"><h6 class="mb-2 mt-1 text-[0.925rem] font-medium text-default">Groceries</h6></a>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated !bg-success" style="width: 60%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto my-auto">
                                                        <p class="mb-3 fs-13 text-textmuted">
                                                            <i class="fe fe-arrow-up-right mx-1 text-success brround"></i>60.7%
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="px-4">
                                        <div class="mb-5">
                                            <div class="flex">
                                                <a href="javascript:void(0);"><span class="avatar avatar-md br-5 bg-info/10 !text-info me-3"><i class="fe fe-tv"></i></span></a>
                                                <div class="w-full">
                                                    <a href="javascript:void(0);"><h6 class="mb-2 mt-1 text-[0.925rem] font-medium text-default">Electronics</h6></a>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated !bg-info" style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                                <div class="ms-auto my-auto">
                                                    <p class="mb-3 fs-13 text-textmuted">
                                                        <i class="fe fe-arrow-up-right mx-1 text-success brround"></i>60.7%
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="px-4">
                                        <div class="mb-5">
                                            <div class="flex">
                                                <a href="javascript:void(0);"><span class="avatar avatar-md br-5 bg-warning/10 !text-warning me-3"><i class="fe fe-target"></i></span></a>
                                                <div class="w-full">
                                                    <a href="javascript:void(0);"><h6 class="mb-2 mt-1 text-[0.925rem] font-medium text-default">Toys & Games</h6></a>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated !bg-warning" style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                                <div class="ms-auto my-auto">
                                                    <p class="mb-3 fs-13 text-textmuted">
                                                        <i class="fe fe-arrow-up-right mx-1 text-success brround"></i>60.7%
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    </ul>
                                </div>   
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 md:col-span-12 col-span-12">
                            <div class="box">
                            <div class="box-header !border-b-0 !pb-0">
                                <div class="flex justify-between">
                                <h4 class="box-title mb-2">Earnings</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Unlock Insights, Uncover Opportunities with Every Graph,Track Your Rewards with Clarity and Precision.</p>
                                </div>
                            </div>
                            <div class="box-body !pb-0">
                                <div id="earnings"></div>
                            </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 md:col-span-12 col-span-12">
                            <div class="box overflow-hidden">
                            <div class="box-header">
                                <div class="flex justify-between">
                                <h4 class="box-title mb-2">Sales By Category</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Sales Performance of all states in the
                                    United States.</p>
                                </div>
                            </div>
                            <div class="box-body">
                                <div id="salesDonut"></div>
                            </div>
                            <div class="box-body !p-0">
                                <div class="grid grid-cols-12 border-t border-t-dashed border-defaultborder dark:border-defaultborder/10">
                                <div class="col-span-4 p-0">
                                    <div class="ps-4 py-3 pe-3 text-center border-e border-e-dashed border-defaultborder dark:border-defaultborder/10"> <span
                                        class="text-textmuted text-[0.813rem] mb-1 crm-lead-legend mobile d-inline-block">Electronics
                                    </span>
                                    <div><span class="text-md font-medium text-[1.2rem]">7,724</span> </div>
                                    </div>
                                </div>
                                <div class="col-span-4 p-0">
                                    <div class="p-3 text-center border-e border-e-dashed border-defaultborder dark:border-defaultborder/10"> <span
                                        class="text-textmuted text-[0.813rem] mb-1 crm-lead-legend desktop d-inline-block">Women's
                                    </span>
                                    <div><span class="text-md font-medium text-[1.2rem]">4,987</span></div>
                                    </div>
                                </div>
                                <div class="col-span-4 p-0">
                                    <div class="p-3 text-center"> <span
                                        class="text-textmuted text-[0.813rem] mb-1 crm-lead-legend laptop d-inline-block">Men's </span>
                                    <div><span class="text-md font-medium text-[1.2rem]">8,093</span> </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row closed -->

                    <!-- row opened -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 md:col-span-6 col-span-12">
                            <div class="box">
                            <div class="box-header">
                                <div class="flex items-center justify-between">
                                <h4 class="box-title mb-2">Recent Activities</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Sales Performance of all states in the
                                    United States.</p>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="mb-0 recent-activity">
                                <li class="list-item  !mt-0">
                                    <div class="flex">
                                    <div class="avatar p-1 avatar-md !rounded-full bg-primary/10 min-w-fit-content"> <span
                                        class="avatar avatar-sm  !mb-0 bg-primary-gradient min-w-fit-content !rounded-full cover-image"><i
                                            class="bi bi-briefcase text-[14px] leading-none"></i></span> </div>
                                    <div class="ms-3 flex-grow">
                                        <p class="mb-0 text-[.875rem] font-medium ">Nile Robetz mentioned a jogh in post</p><span
                                        class="clearfix"></span>
                                        <small class="text-textmuted text-[0.75rem] ">Uploaded a new post</small> <span
                                        class="clearfix"></span>
                                    </div>
                                    </div>
                                </li>
                                <li class="list-item ">
                                    <div class="flex">
                                    <div class="avatar p-1 avatar-md !rounded-full bg-danger/10 min-w-fit-content"> <span
                                        class="avatar avatar-sm  !mb-0 bg-danger-gradient min-w-fit-content !rounded-full cover-image"><i
                                            class="bi bi-brightness-high text-[14px] leading-none"></i></span> </div>
                                    <div class="ms-3 flex-grow">
                                        <p class="mb-0 text-[.875rem] font-medium ">Always look on the bright side of life</p><span
                                        class="clearfix"></span>
                                        <small class="text-textmuted text-[0.75rem]">Look at the Life</small> <span
                                        class="clearfix"></span>
                                    </div>
                                    </div>
                                </li>
                                <li class="list-item ">
                                    <div class="flex">
                                    <div class="avatar p-1 avatar-md !rounded-full bg-success/10 min-w-fit-content"> <span
                                        class="avatar avatar-sm  !mb-0 bg-success-gradient min-w-fit-content !rounded-full cover-image"><i
                                            class="bi bi-peace text-[14px] leading-none"></i></span> </div>
                                    <div class="ms-3 flex-grow">
                                        <p class="mb-0 text-[.875rem] font-medium ">Peace on earth a wonderful width</p><span
                                        class="clearfix"></span> <small class="text-textmuted text-[0.75rem]">Wonderful earth gives a
                                        peace</small> <span class="clearfix"></span>
                                    </div>
                                    </div>
                                </li>
                                <li class="list-item ">
                                    <div class="flex">
                                    <div
                                        class="avatar p-1 avatar-md !rounded-full bg-warning/10 box-shadow-warning min-w-fit-content">
                                        <span
                                        class="avatar avatar-sm  !mb-0 bg-warning-gradient min-w-fit-content !rounded-full cover-image"><i
                                            class="bi bi-clock-history text-[14px] leading-none"></i></span>
                                    </div>
                                    <div class="ms-3 flex-grow">
                                        <p class="mb-0 text-[.875rem] font-medium ">A brief history of creation </p><span
                                        class="clearfix"></span> <small class="text-textmuted text-[0.75rem]">Create your own
                                        history</small> <span class="clearfix"></span>
                                    </div>
                                    </div>
                                </li>
                                <li class="list-item ">
                                    <div class="flex">
                                    <div class="avatar p-1 avatar-md !rounded-full bg-info/10 min-w-fit-content"> <span
                                        class="avatar avatar-sm  !mb-0 bg-info-gradient min-w-fit-content !rounded-full cover-image"><i
                                            class="bi bi-brightness-high text-[14px] leading-none"></i></span> </div>
                                    <div class="ms-3 flex-grow">
                                        <p class="mb-0 text-[.875rem] font-medium ">Always look on the bright side of life</p><span
                                        class="clearfix"></span>
                                        <small class="text-textmuted text-[0.75rem]">Look at the Life</small> <span
                                        class="clearfix"></span>
                                    </div>
                                    </div>
                                </li>
                                <li class="list-item !mb-0">
                                    <div class="flex">
                                    <div class="avatar p-1 avatar-md !rounded-full bg-purplemain/10 min-w-fit-content"> <span
                                        class="avatar avatar-sm  !mb-0 bg-purple-gradient  min-w-fit-content !rounded-full cover-image"><i
                                            class="bi bi-briefcase text-[14px] leading-none"></i></span> </div>
                                    <div class="ms-3 flex-grow">
                                        <p class="mb-0 text-[.875rem] font-medium ">Nile Robetz mentioned a jogh in post</p><span
                                        class="clearfix"></span>
                                        <small class="text-textmuted text-[0.75rem] ">Uploaded a new post</small> <span
                                        class="clearfix"></span>
                                    </div>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                            <div class="box">
                            <div class="box-header">
                                <div class="flex items-center justify-between">
                                <h4 class="box-title mb-2">Top Customers</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Appreciating Our Most Loyal Customers
                                    Our Client Base.</p>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="flex flex-col">
                                <li class="p-0 mb-5 ti-list-group !border-0 text-gray-800 dark:text-white"> <a
                                    href="javascript:void(0);" class="w-full">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-top justify-center">
                                        <div class="ltr:mr-2 rtl:ml-2"> <img src="{{asset('build/assets/images/faces/12.jpg')}}"
                                            alt="Image Description" class="avatar avatar-md !rounded-full"> </div>
                                        <div>
                                            <p class="mb-0 text-[.875rem] font-medium ">Emma Wilson</p>
                                            <p class="mb-0 text-[.8125rem] text-textmuted flex font-normal"> 15 Purchases </p>
                                        </div>
                                        </div>
                                        <div> <span class="text-[0.9375rem] font-medium">$1,835</span> </div>
                                    </div>
                                    </a> </li>
                                <li class="p-0 mb-5 ti-list-group !border-0 text-gray-800 dark:text-white"> <a
                                    href="javascript:void(0);" class="w-full">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-top justify-center">
                                        <div class="ltr:mr-2 rtl:ml-2"> <img src="{{asset('build/assets/images/faces/15.jpg')}}"
                                            alt="Image Description" class="avatar avatar-md !rounded-full"> </div>
                                        <div>
                                            <p class="mb-0 text-[.875rem] font-medium ">Robert Lewis</p>
                                            <p class="mb-0 text-[.8125rem] text-textmuted flex font-normal"> 18 Purchases </p>
                                        </div>
                                        </div>
                                        <div> <span class="text-[0.9375rem] font-medium">$2,415</span> </div>
                                    </div>
                                    </a> </li>
                                <li class="p-0 mb-5 ti-list-group !border-0 text-gray-800 dark:text-white"> <a
                                    href="javascript:void(0);" class="w-full">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-top justify-center">
                                        <div class="ltr:mr-2 rtl:ml-2"> <img src="{{asset('build/assets/images/faces/5.jpg')}}"
                                            alt="Image Description" class="avatar avatar-md !rounded-full"> </div>
                                        <div>
                                            <p class="mb-0 text-[.875rem] font-medium ">Angelina Hose</p>
                                            <p class="mb-0 text-[.8125rem] text-textmuted flex font-normal"> 21 Purchases </p>
                                        </div>
                                        </div>
                                        <div> <span class="text-[0.9375rem] font-medium">$2,341</span> </div>
                                    </div>
                                    </a> </li>
                                <li class="p-0 mb-5 ti-list-group !border-0 text-gray-800 dark:text-white"> <a
                                    href="javascript:void(0);" class="w-full">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-top justify-center">
                                        <div class="ltr:mr-2 rtl:ml-2"> <img src="{{asset('build/assets/images/faces/15.jpg')}}"
                                            alt="Image Description" class="avatar avatar-md !rounded-full"> </div>
                                        <div>
                                            <p class="mb-0 text-[.875rem] font-medium ">Hugh Jackma</p>
                                            <p class="mb-0 text-[.8125rem] text-textmuted flex font-normal"> 20 Purchases </p>
                                        </div>
                                        </div>
                                        <div> <span class="text-[0.9375rem] font-medium">$2,341</span> </div>
                                    </div>
                                    </a> </li>
                                <li class="p-0 mb-5 ti-list-group !border-0 text-gray-800 dark:text-white"> <a
                                    href="javascript:void(0);" class="w-full">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-top justify-center">
                                        <div class="ltr:mr-2 rtl:ml-2"> <img src="{{asset('build/assets/images/faces/17.jpg')}}"
                                            alt="Image Description" class="avatar avatar-md !rounded-full"> </div>
                                        <div>
                                            <p class="mb-0 text-[.875rem] font-medium ">Samantha Sam</p>
                                            <p class="mb-0 text-[.8125rem] text-textmuted flex font-normal"> 24 Purchases </p>
                                        </div>
                                        </div>
                                        <div> <span class="text-[0.9375rem] font-medium">2,624</span> </div>
                                    </div>
                                    </a> </li>
                                <li class="p-0 mb-0 ti-list-group !border-0 text-gray-800 dark:text-white"> <a
                                    href="javascript:void(0);" class="w-full">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-top justify-center">
                                        <div class="ltr:mr-2 rtl:ml-2"> <img src="{{asset('build/assets/images/faces/10.jpg')}}"
                                            alt="Image Description" class="avatar avatar-md !rounded-full"> </div>
                                        <div>
                                            <p class="mb-0 text-[.875rem] font-medium ">Bickle Bob</p>
                                            <p class="mb-0 text-[.8125rem] text-textmuted flex font-normal"> 12 Purchases</p>
                                        </div>
                                        </div>
                                        <div> <span class="text-[0.9375rem] font-medium">1,100</span> </div>
                                    </div>
                                    </a> </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                            <div class="box">
                            <div class="box-header">
                                <div class="flex justify-between flex-wrap">
                                <h4 class="box-title mb-2">Top Product Categories</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Leading Product Categories: Where Trends Meet Demand.</p>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="flex items-center avatar-before primary mb-5 flex-wrap gap-2"> <span
                                    class="avatar avatar-md stat-avatar rounded-circle fs-18 bg-primary/10 !text-primary min-w-fit-content">
                                    <i class="bi bi-diagram-3 text-[1.35rem]"></i> </span>
                                <div class="ms-3 flex-grow">
                                    <p class="mb-0 text-[.875rem] font-medium ">Women's Clothing</p><span class="clearfix"></span>
                                    <small class="text-textmuted text-[0.813rem]">Differnt types of clothing</small>
                                </div>
                                <div> <span class="badge !font-normal bg-primary/10 !text-primary text-dark p-2"><i
                                        class="bi bi-circle-fill text-[0.5rem] me-1 !text-primary"></i>42 available</span> </div>
                                </div>
                                <div class="flex items-center avatar-before danger mb-5 flex-wrap gap-2"> <span
                                    class="avatar avatar-md stat-avatar rounded-circle fs-18 bg-danger/10 !text-danger min-w-fit-content">
                                    <i class="bi bi-cart3 text-[1.35rem]"></i> </span>
                                <div class="ms-3 flex-grow">
                                    <p class="mb-0 text-[.875rem] font-medium ">Home Decoration</p><span class="clearfix"></span>
                                    <small class="text-textmuted text-[0.813rem]">Furnitures,gadgets etc..</small>
                                </div>
                                <div> <span class="badge !font-normal bg-danger/10 !text-danger text-dark p-2"><i
                                        class="bi bi-circle-fill text-[0.5rem] me-1 text-danger"></i>80 available</span> </div>
                                </div>
                                <div class="flex items-center avatar-before warning mb-5 flex-wrap gap-2"> <span
                                    class="avatar avatar-md stat-avatar rounded-circle fs-18 bg-warning/10 !text-warning min-w-fit-content">
                                    <i class="bi bi-cast text-[1.35rem]"></i> </span>
                                <div class="ms-3 flex-grow">
                                    <p class="mb-0 text-[.875rem] font-medium ">Phones and Tablets</p><span class="clearfix"></span>
                                    <small class="text-textmuted text-[0.813rem]">All models of phones</small>
                                </div>
                                <div> <span class="badge !font-normal bg-warning/10 !text-warning text-dark p-2"><i
                                        class="bi bi-circle-fill text-[0.5rem] me-1 text-warning"></i>60 available</span> </div>
                                </div>
                                <div class="flex items-center avatar-before indigo mb-5 flex-wrap gap-2"> <span
                                    class="avatar avatar-md stat-avatar rounded-circle fs-18 bg-success/10 !text-success min-w-fit-content">
                                    <i class="bi bi-bag-check text-[1.35rem]"></i> </span>
                                <div class="ms-3 flex-grow">
                                    <p class="mb-0 text-[.875rem] font-medium ">Electronics</p><span class="clearfix"></span> <small
                                    class="text-textmuted text-[0.813rem]">Related to all Electronics</small>
                                </div>
                                <div> <span class="badge !font-normal bg-success/10 !text-success text-dark p-2"><i
                                        class="bi bi-circle-fill text-[0.5rem] me-1 text-success"></i>70 available</span> </div>
                                </div>
                                <div class="flex items-center avatar-before info mb-5 flex-wrap gap-2"> <span
                                    class="avatar avatar-md stat-avatar rounded-circle fs-18 bg-info/10 !text-info min-w-fit-content">
                                    <i class="bi bi-house-door text-[1.35rem]"></i> </span>
                                <div class="ms-3 flex-grow">
                                    <p class="mb-0 text-[.875rem] font-medium ">Home Appliances </p><span class="clearfix"></span>
                                    <small class="text-textmuted text-[0.813rem]">Furnitures,gadgets etc..</small>
                                </div>
                                <div> <span class="badge !font-normal bg-info/10 !text-info text-dark p-2"><i
                                        class="bi bi-circle-fill text-[0.5rem] me-1 text-info"></i>80 available</span> </div>
                                </div>
                                <div class="flex items-center avatar-before danger mb-0 flex-wrap gap-2"> <span
                                    class="avatar avatar-md stat-avatar rounded-circle fs-18 bg-purplemain/10 !text-purplemain min-w-fit-content">
                                    <i class="bi bi-basket text-[1.35rem]"></i> </span>
                                <div class="ms-3 flex-grow">
                                    <p class="mb-0 text-[.875rem] font-medium ">Fashion Ware </p><span class="clearfix"></span>
                                    <small class="text-textmuted text-[0.813rem]">Furnitures,gadgets etc..</small>
                                </div>
                                <div> <span class="badge !font-normal bg-purplemain/10 !text-purplemain text-dark p-2"><i
                                        class="bi bi-circle-fill text-[0.5rem] me-1 text-purplemain"></i>46 available</span> </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                            <div class="box">
                            <div class="box-header">
                                <div class="flex justify-between">
                                <h4 class="box-title mb-2">Top Countries By Sales</h4>
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
                                <p class="text-[.75rem] text-textmuted font-normal mb-0">Global Sales Leaders: Top Countries Driving Revenue.</p>
                                </div>
                            </div>
                            <div class="box-body">
                                <ul class="mb-0 list-unstyled top-countries">
                                <li>
                                    <div class="flex justify-between items-center">
                                    <div class="flex items-center lh-1"> <span class="avatar avatar-xs me-2"> <img
                                            src="{{asset('build/assets/images/flags/canada_flag.jpg')}}" alt=""> </span> <span
                                        class="mb-0 text-[.875rem] font-medium ">Canada</span> </div>
                                    <div class=" font-medium"><span class="badge bg-success/10 text-success font-normal me-3"><i
                                            class="ti ti-trending-up text-success me-1"></i>0.78%</span>6,192</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex justify-between items-center">
                                    <div class="flex items-center lh-1"> <span class="avatar avatar-xs me-2"> <img
                                            src="{{asset('build/assets/images/flags/french_flag.jpg')}}" alt=""> </span> <span
                                        class="mb-0 text-[.875rem] font-medium ">France</span> </div>
                                    <div class=" font-medium"><span class="badge bg-success/10 text-success font-normal me-3"><i
                                            class="ti ti-trending-up text-success me-1"></i>0.12%</span>5,932</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex justify-between items-center">
                                    <div class="flex items-center lh-1"> <span class="avatar avatar-xs me-2"> <img
                                            src="{{asset('build/assets/images/flags/spain_flag.jpg')}}" alt=""> </span> <span
                                        class="mb-0 text-[.875rem] font-medium ">spain</span> </div>
                                    <div class=" font-medium"><span class="badge bg-danger/10 text-danger font-normal me-3"><i
                                            class="ti ti-trending-down text-danger me-1"></i>0.54%</span>5,383</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex justify-between items-center">
                                    <div class="flex items-center lh-1"> <span class="avatar avatar-xs me-2"> <img
                                            src="{{asset('build/assets/images/flags/argentina_flag.jpg')}}" alt=""> </span> <span
                                        class="mb-0 text-[.875rem] font-medium ">Argentina</span> </div>
                                    <div class=" font-medium"><span class="badge bg-success/10 text-success font-normal me-3"><i
                                            class="ti ti-trending-up text-success me-1"></i>0.25%</span>4,825</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex justify-between items-center">
                                    <div class="flex items-center lh-1"> <span class="avatar avatar-xs me-2"> <img
                                            src="{{asset('build/assets/images/flags/uae_flag.jpg')}}" alt=""> </span> <span
                                        class="mb-0 text-[.875rem] font-medium ">Uae</span> </div>
                                    <div class=" font-medium"><span class="badge bg-success/10 text-success font-normal me-3"><i
                                            class="ti ti-trending-up text-success me-1"></i>0.56%</span>4,527</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex justify-between items-center">
                                    <div class="flex items-center lh-1"> <span class="avatar avatar-xs me-2"> <img
                                            src="{{asset('build/assets/images/flags/germany_flag.jpg')}}" alt=""> </span> <span
                                        class="mb-0 text-[.875rem] font-medium ">Germany</span> </div>
                                    <div class=" font-medium"><span class="badge bg-danger/10 text-danger font-normal me-3"><i
                                            class="ti ti-trending-down text-danger me-1"></i>0.04%</span>4,501</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex justify-between items-center">
                                    <div class="flex items-center lh-1"> <span class="avatar avatar-xs me-2"> <img
                                            src="{{asset('build/assets/images/flags/mexico_flag.jpg')}}" alt=""> </span> <span
                                        class="mb-0 text-[.875rem] font-medium ">Mexico</span> </div>
                                    <div class=" font-medium"><span class="badge bg-danger/10 text-danger font-normal me-3"><i
                                            class="ti ti-trending-down text-danger me-1"></i>0.47%</span>4,252</div>
                                    </div>
                                </li>
                                <li class="!mb-0">
                                    <div class="flex justify-between items-center">
                                    <div class="flex items-center lh-1"> <span class="avatar avatar-xs me-2"> <img
                                            src="{{asset('build/assets/images/flags/china_flag.jpg')}}" alt=""> </span> <span
                                        class="mb-0 text-[.875rem] font-medium ">China</span> </div>
                                    <div class=" font-medium"><span class="badge bg-danger/10 text-danger font-normal me-3"><i
                                            class="ti ti-trending-down text-danger me-1"></i>0.47%</span>4,252</div>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row close -->

                    <!-- row opened -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xxl:col-span-12">
                            <div class="box">
                            <div class="box-header">
                                <div class="flex justify-between">
                                <div class="box-title"> Order Summary </div>
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
                                <p class="text-[.75rem] mb-0 text-textmuted font-normal">An order is an investor's instructions to a
                                broker or brokerage firm to purchase or sell</p>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                <table
                                    class="table table-auto order-table ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                                    <thead class="bg-light dark:bg-black/20">
                                    <tr>
                                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Product
                                        Name</th>
                                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Transaction
                                        Id</th>
                                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Price</th>
                                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Rating</th>
                                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Date</th>
                                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Sales</th>
                                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Status</th>
                                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Payment
                                        method</th>
                                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Actions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                        <div class="flex items-center">
                                            <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                                src="{{asset('build/assets/images/ecommerce/01.jpg')}}" alt="" class="rounded-1"> </span> </div>
                                            <div class="fs-14">Yellow Flower Pot</div>
                                        </div>
                                        </td>
                                        <td> <span class="fw-semibold">#1234-4567</span> </td>
                                        <td> $1,299.99 </td>
                                        <td> 5.0 <span class="text-textmuted text-[0.75rem]">(90 Mem)</span> <i class="fa fa-star text-warning text-[0.75rem]"></i> </td>
                                        <td> <span class="">02-03-2024</span> </td>
                                        <td> <span class="">350</span> </td>
                                        <td> <span class="badge bg-success/10 !text-success">Delivered</span> </td>
                                        <td> <span class="">Cash On Delivery</span> </td>
                                        <td>
                                        <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20 btn-wave waves-effect waves-light"> <i
                                                class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-danger !border-danger/20 btn-wave waves-effect waves-light"> <i
                                                class="ri-delete-bin-7-line"></i> </a> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <div class="flex items-center">
                                            <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                                src="{{asset('build/assets/images/ecommerce/02.jpg')}}" alt="" class="rounded-1"> </span> </div>
                                            <div class="fs-14">Wooden Chair</div>
                                        </div>
                                        </td>
                                        <td> <span class="fw-semibold">#1902-9883</span> </td>
                                        <td> $99.99 </td>
                                        <td> 4.5 <span class="text-textmuted text-[0.75rem]">(50 Mem)</span> <i class="fa fa-star text-warning text-[0.75rem]"></i> </td>
                                        <td> <span class="">02-03-2024</span> </td>
                                        <td> <span class="">121</span> </td>
                                        <td> <span class="badge bg-danger/10 !text-danger">cancelled</span> </td>
                                        <td> <span class="">Cash On Delivery</span> </td>
                                        <td>
                                        <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20 btn-wave waves-effect waves-light"> <i
                                                class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-danger !border-danger/20 btn-wave waves-effect waves-light"> <i
                                                class="ri-delete-bin-7-line"></i> </a> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <div class="flex items-center">
                                            <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                                src="{{asset('build/assets/images/ecommerce/03.jpg')}}" alt="" class="rounded-1"> </span> </div>
                                            <div class="fs-14">Beautiful boys shoes</div>
                                        </div>
                                        </td>
                                        <td> <span class="fw-semibold">#1962-9033</span> </td>
                                        <td> $199.99 </td>
                                        <td> 3.3 <span class="text-textmuted text-[0.75rem]">(52 Mem)</span> <i class="fa fa-star text-warning text-[0.75rem]"></i> </td>
                                        <td> <span class="">03-02-2024</span> </td>
                                        <td> <span class="">243</span> </td>
                                        <td> <span class="badge bg-primary/10 !text-primary">Shipped</span> </td>
                                        <td> <span class="">Cash On Delivery</span> </td>
                                        <td>
                                        <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20 btn-wave waves-effect waves-light"> <i
                                                class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-danger !border-danger/20 btn-wave waves-effect waves-light"> <i
                                                class="ri-delete-bin-7-line"></i> </a> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <div class="flex items-center">
                                            <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                                src="{{asset('build/assets/images/ecommerce/04.jpg')}}" alt="" class="rounded-1"> </span> </div>
                                            <div class="fs-14">Black color head set</div>
                                        </div>
                                        </td>
                                        <td> <span class="fw-semibold">#8745-1232</span> </td>
                                        <td> $79.00 </td>
                                        <td> 4.0 <span class="text-textmuted text-[0.75rem]">(15 Mem)</span> <i class="fa fa-star text-warning text-[0.75rem]"></i> </td>
                                        <td> <span class=""> 01-03-2024</span> </td>
                                        <td> <span class="">325</span> </td>
                                        <td> <span class="badge bg-warning/10 !text-warning">Pending</span> </td>
                                        <td> <span class="">Online</span> </td>
                                        <td>
                                        <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20 btn-wave waves-effect waves-light"> <i
                                                class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-danger !border-danger/20 btn-wave waves-effect waves-light"> <i
                                                class="ri-delete-bin-7-line"></i> </a> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <div class="flex items-center">
                                            <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                                src="{{asset('build/assets/images/ecommerce/05.jpg')}}" alt="" class="rounded-1"> </span> </div>
                                            <div class="fs-14">Black color lens camera</div>
                                        </div>
                                        </td>
                                        <td> <span class="fw-semibold">#1734-9743</span> </td>
                                        <td> $199.99 </td>
                                        <td> 4.8 <span class="text-textmuted text-[0.75rem]">(20 Mem)</span> <i class="fa fa-star text-warning text-[0.75rem]"></i> </td>
                                        <td> <span class="">03-03-2024</span> </td>
                                        <td> <span class="">172</span> </td>
                                        <td> <span class="badge bg-success/10 !text-success">Delivered</span> </td>
                                        <td> <span class="">Online</span> </td>
                                        <td>
                                        <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20 btn-wave waves-effect waves-light"> <i
                                                class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-danger !border-danger/20 btn-wave waves-effect waves-light"> <i
                                                class="ri-delete-bin-7-line"></i> </a> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <div class="flex items-center">
                                            <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                                src="{{asset('build/assets/images/ecommerce/06.jpg')}}" alt="" class="rounded-1"> </span> </div>
                                            <div class="fs-14">college bag for women</div>
                                        </div>
                                        </td>
                                        <td> <span class="fw-semibold">#1802-9883</span> </td>
                                        <td> $39.99 </td>
                                        <td> 5.0 <span class="text-textmuted text-[0.75rem]">(60 Mem)</span> <i class="fa fa-star text-warning text-[0.75rem]"></i> </td>
                                        <td> <span class="">02-03-2024</span> </td>
                                        <td> <span class="">267</span> </td>
                                        <td> <span class="badge bg-danger/10 !text-danger">cancelled</span> </td>
                                        <td> <span class="">Cash On Delivery</span> </td>
                                        <td>
                                        <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20 btn-wave waves-effect waves-light"> <i
                                                class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-danger !border-danger/20 btn-wave waves-effect waves-light"> <i
                                                class="ri-delete-bin-7-line"></i> </a> </div>
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
                    <!-- /row -->

@endsection

@section('scripts')
	
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

@endsection
