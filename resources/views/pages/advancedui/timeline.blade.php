
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Timeline 1</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Timeline <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Timeline 1 
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
                        <ul class="timeline list-none text-[0.813rem] text-defaulttextcolor">
                            <li>
                                <div class="timeline-time text-end">
                                <span class="date">FRIDAY</span>
                                <span class="time inline-block">02:31</span>
                                </div>
                                <div class="timeline-icon">
                                <a aria-label="anchor" href="javascript:void(0);"></a>
                                </div>
                                <div class="timeline-body">
                                    <div class="flex items-start timeline-main-content flex-wrap mt-0">
                                        <div class="avatar avatar-md online me-3 avatar-rounded md:mt-0 mt-6">
                                            <img alt="avatar" src="{{asset('build/assets/images/faces/4.jpg')}}">
                                        </div>
                                        <div class="flex-grow">
                                            <div class="flex items-center">
                                                <div class="sm:mt-0 mt-2">
                                                    <p class="mb-0 text-[.875rem] font-semibold">Emperio</p>
                                                    <p class="mb-0 text-textmuted">Project assigned by the manager all<span class="badge bg-primary/10 text-primary font-semibold mx-1">files</span>and<span class="badge bg-primary/10 text-primary font-semibold mx-1">folders</span>were included</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="ltr:float-right rtl:float-left badge !bg-light text-textmuted timeline-badge whitespace-nowrap">
                                                        24,Oct 2022
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-time text-end">
                                <span class="date">MONDAY</span>
                                <span class="time inline-block">08:47</span>
                                </div>
                                <div class="timeline-icon">
                                <a aria-label="anchor" href="javascript:void(0);"></a>
                                </div>
                                <div class="timeline-body">
                                    <div class="flex items-start timeline-main-content flex-wrap mt-0">
                                        <div class="avatar avatar-md online me-3 avatar-rounded md:mt-0 mt-6">
                                            <img alt="avatar" src="{{asset('build/assets/images/faces/15.jpg')}}">
                                        </div>
                                        <div class="flex-grow">
                                            <div class="flex items-center">
                                                <div class="sm:mt-0 mt-2">
                                                    <p class="mb-0 text-[.875rem] font-semibold">Dwayne Bero</p>
                                                    <p class="mb-0 text-textmuted">Admin and other team accepted your work request</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="ltr:float-right rtl:float-left badge !bg-light text-textmuted timeline-badge whitespace-nowrap">
                                                        30,Sep 2022
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-time text-end">
                                <span class="date">YESTERDAY</span>
                                <span class="time inline-block">18:43</span>
                                </div>
                                <div class="timeline-icon">
                                <a aria-label="anchor" href="javascript:void(0);"></a>
                                </div>
                                <div class="timeline-body">
                                    <div class="flex items-start timeline-main-content flex-wrap mt-0">
                                        <div class="avatar avatar-md online me-3 avatar-rounded md:mt-0 mt-6">
                                            <img alt="avatar" src="{{asset('build/assets/images/faces/11.jpg')}}">
                                        </div>
                                        <div class="flex-grow">
                                            <div class="flex items-center">
                                                <div class="sm:mt-0 mt-2">
                                                    <p class="mb-0 text-[.875rem] font-semibold">Alister Chuk</p>
                                                    <p class="mb-0 text-textmuted">Temporary data will be <span class="badge bg-danger/10 text-danger font-semibold mx-1">deleted</span> once dedicated time complated</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="ltr:float-right rtl:float-left badge !bg-light text-textmuted timeline-badge whitespace-nowrap">
                                                        11,Sep 2021
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-time text-end">
                                <span class="date">TODAY</span>
                                <span class="time inline-block">03:18</span>
                                </div>
                                <div class="timeline-icon">
                                <a aria-label="anchor" href="javascript:void(0);"></a>
                                </div>
                                <div class="timeline-body">
                                    <div class="flex items-start timeline-main-content flex-wrap mt-0">
                                        <div class="avatar avatar-md online me-3 avatar-rounded md:mt-0 mt-6">
                                            <img alt="avatar" src="{{asset('build/assets/images/faces/5.jpg')}}">
                                        </div>
                                        <div class="flex-grow">
                                            <div class="flex items-center">
                                                <div class="sm:mt-0 mt-2">
                                                    <p class="mb-0 text-[.875rem] font-semibold">Melissa Blue</p>
                                                    <p class="mb-0 text-textmuted">Approved date for sanction of loan is verified <i class="ri-checkbox-circle-line text-success ms-1 text-[1rem] align-middle"></i></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="ltr:float-right rtl:float-left badge !bg-light text-textmuted timeline-badge whitespace-nowrap">
                                                        18,Sep 2021
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-time text-end">
                                <span class="date">TODAY</span>
                                <span class="time inline-block">12:24</span>
                                </div>
                                <div class="timeline-icon">
                                <a aria-label="anchor" href="javascript:void(0);"></a>
                                </div>
                                <div class="timeline-body">
                                    <div class="flex items-start timeline-main-content flex-wrap mt-0">
                                        <div class="avatar avatar-md online me-3 avatar-rounded md:mt-0 mt-6">
                                            <img alt="avatar" src="{{asset('build/assets/images/faces/10.jpg')}}">
                                        </div>
                                        <div class="flex-grow">
                                            <div class="flex items-center">
                                                <div class="sm:mt-0 mt-2">
                                                    <p class="mb-0 text-[.875rem] font-semibold">Zack Slayer</p>
                                                    <p class="mb-0 text-textmuted">Social network accounts are at risk check your <span class="badge bg-success/10 text-success font-semibold mx-1">login</span> details</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="ltr:float-right rtl:float-left badge !bg-light text-textmuted timeline-badge whitespace-nowrap">
                                                        15,Sep 2021
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-time text-end">
                                <span class="date">TODAY</span>
                                <span class="time inline-block">04:11</span>
                                </div>
                                <div class="timeline-icon">
                                <a aria-label="anchor" href="javascript:void(0);"></a>
                                </div>
                                <div class="timeline-body">
                                    <div class="flex items-start timeline-main-content flex-wrap mt-0">
                                        <div class="avatar avatar-md online me-3 avatar-rounded md:mt-0 mt-6">
                                            <img alt="avatar" src="{{asset('build/assets/images/faces/2.jpg')}}">
                                        </div>
                                        <div class="flex-grow">
                                            <div class="flex items-center">
                                                <div class="sm:mt-0 mt-2">
                                                    <p class="mb-0 text-[.875rem] font-semibold">Monika Karen</p>
                                                    <p class="mb-0 text-textmuted">Changed the password of gmail 4 hrs ago. <span class="badge bg-secondary text-white">Update</span></p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="ltr:float-right rtl:float-left badge !bg-light text-textmuted timeline-badge whitespace-nowrap">
                                                        12,Sep 2021
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="timeline-loadmore-container text-center">
                        <button type="button" class="ti-btn ti-btn-info ti-btn-loader">
                            Loading
                            <span class="ti-spinner !h-4 !w-4" role="status"></span>
                        </button>
                        </div>
                    </div>

@endsection

@section('scripts')
	


@endsection
