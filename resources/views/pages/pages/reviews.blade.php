
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Review</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Pages <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Review 
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

                    <div class="container">
                        <!-- Start::row-1 -->
                        <div class="max-w-6xl mx-auto reviews-container">
                            <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-4">
                                                <span class="avatar avatar-md avatar-rounded me-4">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                </span>
                                                <div>
                                                    <p class="mb-0 font-semibold text-[.875rem] text-primary">Json Taylor</p>
                                                    <p class="mb-0 text-[.625rem] font-semibold text-textmuted">CEO OF NORJA</p>
                                                    <span class="text-warning block">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-fill"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <span class="text-textmuted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- 
                                                    <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary hs-tooltip ti-main-tooltip">Read More
                                                        <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center w-[200px] !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio
                                                    </span>
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-4">
                                                <span class="avatar avatar-md avatar-rounded me-4">
                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                </span>
                                                <div>
                                                    <p class="mb-0 font-semibold text-[.875rem] text-primary">Melissa Blue</p>
                                                    <p class="mb-0 text-[.625rem] font-semibold text-textmuted">MANAGER CHO</p>
                                                    <span class="text-warning block">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-fill"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <span class="text-textmuted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- 
                                                    <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary hs-tooltip ti-main-tooltip">Read More
                                                        <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center w-[200px] !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio
                                                    </span>
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-4">
                                                <span class="avatar avatar-md avatar-rounded me-4">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                </span>
                                                <div>
                                                    <p class="mb-0 font-semibold text-[.875rem] text-primary">Kiara Advain</p>
                                                    <p class="mb-0 text-[.625rem] font-semibold text-textmuted">CEO OF EMPIRO</p>
                                                    <span class="text-warning block">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <span class="text-textmuted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  --  <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary hs-tooltip ti-main-tooltip">Read More
                                                        <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center w-[200px] !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio
                                                    </span>
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-4">
                                                <span class="avatar avatar-md avatar-rounded me-4">
                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                </span>
                                                <div>
                                                    <p class="mb-0 font-semibold text-[.875rem] text-primary">Jhonson Smith</p>
                                                    <p class="mb-0 text-[.625rem] font-semibold text-textmuted">CHIEF SECRETARY MBIO</p>
                                                    <span class="text-warning block">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-fill"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <span class="text-textmuted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  --  <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary hs-tooltip ti-main-tooltip">Read More
                                                        <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center w-[200px] !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio
                                                    </span>
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-4">
                                                <span class="avatar avatar-md avatar-rounded me-4">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                </span>
                                                <div>
                                                    <p class="mb-0 font-semibold text-[.875rem] text-primary">Dwayne Stort</p>
                                                    <p class="mb-0 text-[.625rem] font-semibold text-textmuted">CEO ARMEDILLO</p>
                                                    <span class="text-warning block">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <span class="text-textmuted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  --  <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary hs-tooltip ti-main-tooltip">Read More
                                                        <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center w-[200px] !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio
                                                    </span>
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-4">
                                                <span class="avatar avatar-md avatar-rounded me-4">
                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                </span>
                                                <div>
                                                    <p class="mb-0 font-semibold text-[.875rem] text-primary">Jasmine Kova</p>
                                                    <p class="mb-0 text-[.625rem] font-semibold text-textmuted">AGGENT AMIO</p>
                                                    <span class="text-warning block">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-fill"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <span class="text-textmuted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  --  <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary hs-tooltip ti-main-tooltip">Read More
                                                        <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center w-[200px] !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio
                                                    </span>
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-4">
                                                <span class="avatar avatar-md avatar-rounded me-4">
                                                    <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                </span>
                                                <div>
                                                    <p class="mb-0 font-semibold text-[.875rem] text-primary">Dolph MR</p>
                                                    <p class="mb-0 text-[.625rem] font-semibold text-textmuted">CEO MR BRAND</p>
                                                    <span class="text-warning block">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <span class="text-textmuted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  --  <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary hs-tooltip ti-main-tooltip">Read More
                                                        <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center w-[200px] !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio
                                                    </span>
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-4">
                                                <span class="avatar avatar-md avatar-rounded me-4">
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                </span>
                                                <div>
                                                    <p class="mb-0 font-semibold text-[.875rem] text-primary">Brenda Simpson</p>
                                                    <p class="mb-0 text-[.625rem] font-semibold text-textmuted">CEO AIBMO</p>
                                                    <span class="text-warning block">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-fill"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <span class="text-textmuted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  --  <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary hs-tooltip ti-main-tooltip">Read More
                                                        <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center w-[200px] !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio
                                                    </span>
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-4">
                                                <span class="avatar avatar-md avatar-rounded me-4">
                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                </span>
                                                <div>
                                                    <p class="mb-0 font-semibold text-[.875rem] text-primary">Julia Sams</p>
                                                    <p class="mb-0 text-[.625rem] font-semibold text-textmuted">CHIEF SECRETARY BHOL</p>
                                                    <span class="text-warning block">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <span class="text-textmuted">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  --  <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary hs-tooltip ti-main-tooltip">Read More
                                                        <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center w-[200px] !text-xs !font-medium !text-white shadow-sm "
                                                        role="tooltip">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio
                                                    </span>
                                                    </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Page navigation">
                                <ul class="ti-pagination  mb-4 justify-end">
                                    <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Previous</a></li>
                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link active px-3 py-[0.375rem]" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--End::row-1 -->
                    </div>

@endsection

@section('scripts')
	


@endsection
