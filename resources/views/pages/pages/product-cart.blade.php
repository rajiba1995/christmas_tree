
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Cart</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Ecommerce <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Cart 
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
                    <div class="grid grid-cols-12 sm:gap-x-6 gap-0">
                        <div class="xxl:col-span-9 col-span-12">
                            <div class="box" id="cart-container-delete">
                                <div class="box-header">
                                    <div class="box-title">
                                        Cart Items
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered whitespace-nowrap min-w-full">
                                            <thead>
                                                <tr>
                                                    <th scope="row" class="text-start">
                                                        Product Name
                                                    </th>
                                                    <th scope="row" class="text-start">
                                                        Price
                                                    </th>
                                                    <th scope="row" class="text-start">
                                                        Quantity
                                                    </th>
                                                    <th scope="row" class="text-start">
                                                        Total
                                                    </th>
                                                    <th scope="row" class="text-start">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border border-inherit border-solid dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-4">
                                                                <span class="avatar avatar-xxl bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/01.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1 text-[0.875rem] font-semibold">
                                                                    <a href="javascript:void(0);">Flower Pot(plastic)</a>
                                                                </div>
                                                                <div class="mb-1 flex items-center align-middle">
                                                                    <span class="me-1">Size:</span><span class="font-semibold text-textmuted">Large</span>
                                                                </div>
                                                                <div class="mb-1 flex items-center align-middle">
                                                                    <span class="me-1">Color:</span><span class="font-semibold text-textmuted">Grey<span class="badge bg-success/10 text-success ms-4">In Offer</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-semibold text-[0.875rem]">
                                                            $459
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="py-2 px-3" data-hs-input-number>
                                                            <div class="w-full">
                                                            <div class="flex items-center gap-x-1.5">
                                                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                                                </button>
                                                                <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" type="text" value="0" data-hs-input-number-input>
                                                                <button type="button" class="size-6 inline-flex justify-center items-center text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                                                </button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-[0.875rem] font-semibold">
                                                            $918
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="{{url('wish-list')}}" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-success text-white !font-medium me-1">
                                                                    <i class="ri-heart-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Add To Wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip ltr:[--placement:left] rtl:[--placement:right]">
                                                                <a href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-danger text-white !font-medium btn-delete">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Remove From cart
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border border-inherit border-solid dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxl bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/02.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1 text-[0.875rem] font-semibold">
                                                                    <a href="javascript:void(0);">Wooden Chair</a>   
                                                                </div>
                                                                <div class="mb-1 flex items-center align-middle">
                                                                    <span class="me-1">Size:</span><span class="font-semibold text-textmuted">Medium</span>
                                                                </div>
                                                                <div class="mb-1 flex items-center align-middle">
                                                                    <span class="me-1">Color:</span><span class="font-semibold text-textmuted">Blue<span class="badge bg-secondary text-white ms-4">25% discount</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-semibold text-[0.875rem]">
                                                            $129
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="py-2 px-3" data-hs-input-number>
                                                            <div class="w-full">
                                                            <div class="flex items-center gap-x-1.5">
                                                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                                                </button>
                                                                <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" type="text" value="0" data-hs-input-number-input>
                                                                <button type="button" class="size-6 inline-flex justify-center items-center text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                                                </button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-[0.875rem] font-semibold">
                                                            $129
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="{{url('wish-list')}}" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-success text-white !font-medium me-1">
                                                                    <i class="ri-heart-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Add To Wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip ltr:[--placement:left] rtl:[--placement:right]">
                                                                <a href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-danger text-white !font-medium btn-delete">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Remove From cart
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border border-inherit border-solid dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxl bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/03.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1 text-[0.875rem] font-semibold">
                                                                    <a href="javascript:void(0);">Leather Shoe</a>
                                                                </div>
                                                                <div class="mb-1 flex items-center align-middle">
                                                                    <span class="me-1">Size:</span><span class="font-semibold text-textmuted">44mm dial</span>
                                                                </div>
                                                                <div class="mb-1 flex items-center align-middle">
                                                                    <span class="me-1">Color:</span><span class="font-semibold text-textmuted">Bronze<span class="badge bg-success/10 text-success ms-4">On Offer</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-semibold text-[0.875rem]">
                                                            $249
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="py-2 px-3" data-hs-input-number>
                                                            <div class="w-full">
                                                            <div class="flex items-center gap-x-1.5">
                                                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                                                </button>
                                                                <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" type="text" value="0" data-hs-input-number-input>
                                                                <button type="button" class="size-6 inline-flex justify-center items-center text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                                                </button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-[0.875rem] font-semibold">
                                                            $498
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="{{url('wish-list')}}" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-success text-white !font-medium me-1">
                                                                    <i class="ri-heart-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Add To Wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip ltr:[--placement:left] rtl:[--placement:right]">
                                                                <a href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-danger text-white !font-medium btn-delete">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Remove From cart
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border border-inherit border-solid dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxl bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/04.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1 text-[0.875rem] font-semibold">
                                                                    <a href="javascript:void(0);">Samsong Headset</a>
                                                                </div>
                                                                <div class="mb-1 flex items-center align-middle">
                                                                    <span class="me-1">Size:</span><span class="font-semibold text-textmuted">Medium</span>
                                                                </div>
                                                                <div class="mb-1 flex items-center align-middle">
                                                                    <span class="me-1">Color:</span><span class="font-semibold text-textmuted">Light Pink<span class="badge text-success bg-success/10 ms-4">On Offer</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-semibold text-[0.875rem]">
                                                            $249
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="py-2 px-3" data-hs-input-number>
                                                            <div class="w-full">
                                                            <div class="flex items-center gap-x-1.5">
                                                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                                                </button>
                                                                <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" type="text" value="0" data-hs-input-number-input>
                                                                <button type="button" class="size-6 inline-flex justify-center items-center text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                                                </button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-[0.875rem] font-semibold">
                                                            $498
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="{{url('wish-list')}}" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-success text-white !font-medium me-1">
                                                                    <i class="ri-heart-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Add To Wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip ltr:[--placement:left] rtl:[--placement:right]">
                                                                <a href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-danger text-white !font-medium btn-delete">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Remove From cart
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border border-inherit border-solid dark:border-defaultborder/10">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-3">
                                                                <span class="avatar avatar-xxl bg-light">
                                                                    <img src="{{asset('build/assets/images/ecommerce/05.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1 text-[0.875rem] font-semibold">
                                                                    <a href="javascript:void(0);">10mm lens Camera</a>
                                                                </div>
                                                                <div class="mb-1 flex items-center align-middle">
                                                                    <span class="me-1">Size:</span><span class="font-semibold text-textmuted">Large</span>
                                                                </div>
                                                                <div class="mb-1 flex items-center align-middle">
                                                                    <span class="me-1">Color:</span><span class="font-semibold text-textmuted">Green</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="font-semibold text-[0.875rem]">
                                                            $1,299
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="py-2 px-3" data-hs-input-number>
                                                            <div class="w-full">
                                                            <div class="flex items-center gap-x-1.5">
                                                                <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                                                </button>
                                                                <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" type="text" value="0" data-hs-input-number-input>
                                                                <button type="button" class="size-6 inline-flex justify-center items-center text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                                                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                                                </button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-[0.875rem] font-semibold">
                                                            $1,299
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <a href="{{url('wish-list')}}" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-success text-white !font-medium me-1">
                                                                    <i class="ri-heart-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Add To Wishlist
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip ltr:[--placement:left] rtl:[--placement:right]">
                                                                <a href="javascript:void(0);" class="hs-tooltip-toggle ti-btn ti-btn-icon bg-danger text-white !font-medium btn-delete">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                    <span
                                                                        class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                        role="tooltip">
                                                                        Remove From cart
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="box !hidden" id="cart-empty-cart">
                                <div class="box-header">
                                    <div class="box-title">
                                        Empty Cart
                                    </div>
                                </div>
                                <div class="box-body flex items-center justify-center">
                                    <div class="cart-empty text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-muted" width="24" height="24" viewbox="0 0 24 24"><path d="M18.6 16.5H8.9c-.9 0-1.6-.6-1.9-1.4L4.8 6.7c0-.1 0-.3.1-.4.1-.1.2-.1.4-.1h17.1c.1 0 .3.1.4.2.1.1.1.3.1.4L20.5 15c-.2.8-1 1.5-1.9 1.5zM5.9 7.1 8 14.8c.1.4.5.8 1 .8h9.7c.5 0 .9-.3 1-.8l2.1-7.7H5.9z"/><path d="M6 10.9 3.7 2.5H1.3v-.9H4c.2 0 .4.1.4.3l2.4 8.7-.8.3zM8.1 18.8 6 11l.9-.3L9 18.5z"/><path d="M20.8 20.4h-.9V20c0-.7-.6-1.3-1.3-1.3H8.9c-.7 0-1.3.6-1.3 1.3v.5h-.9V20c0-1.2 1-2.2 2.2-2.2h9.7c1.2 0 2.2 1 2.2 2.2v.4z"/><path d="M8.9 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-1 2.2-2.2 2.2zm0-3.5c-.7 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.8 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3zM18.6 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-.9 2.2-2.2 2.2zm0-3.5c-.8 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.7 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3z"/></svg>
                                        <h3 class="font-bold mb-1 text-[1.75rem]">Your Cart is Empty</h3>
                                        <h5 class="mb-4 text-[1.25rem]">Add some items to make me happy :)</h5>
                                        <a href="javascript:void(0);" class="ti-btn bg-primary text-white !font-medium m-4" data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="p-4 border-b dark:border-defaultborder/10 block">
                                    <div class="alert alert-primary text-center" role="alert">
                                        <span class="text-defaulttextcolor">Sale Ends in</span> <span class="font-semibold text-[0.875rem] text-primary ms-1">18 Hours : 32 Minutes</span>
                                    </div>
                                </div>
                                <div class="box-body !p-0">
                                    <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                        <p class="mb-2 font-semibold">Delivery:</p>
                                        <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check dark:border-defaultborder/10 " name="btnradio" id="btnradio1">
                                            <label class="ti-btn ti-btn-outline-light !text-defaulttextcolor dark:hover:!bg-light dark:text-defaulttextcolor/70 !border-e-0 dark:!border-defaultborder/10 !rounded-e-none !font-medium" for="btnradio1">Free Delivery</label>
                                            <input type="radio" class="btn-check active active:bg-light" name="btnradio" id="btnradio2" checked>
                                            <label class="ti-btn ti-btn-light dark:!border-defaultborder/10  dark:text-defaulttextcolor/70 dark:hover:!bg-light !font-medium !rounded-s-none" for="btnradio2">Express Delivery</label>
                                        </div>
                                        <p class="mb-0 mt-2 text-[0.75rem] text-textmuted">Delivered by 24,Nov 2022</p>
                                    </div>
                                    <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm !rounded-s-sm  !border-e-0 dark:border-defaultborder/10" placeholder="Coupon Code" aria-label="coupon-code" aria-describedby="coupons">
                                            <button type="button" class="ti-btn !bg-primary !text-white !font-medium !rounded-s-none !mb-0" id="coupons">Apply</button>
                                        </div>
                                        <a href="javascript:void(0);" class="text-[0.75rem] text-success">10% off on first purchase</a>
                                    </div>
                                    <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="text-textmuted opacity-[0.7]">Sub Total</div>
                                            <div class="font-semibold text-[0.875rem]">$1,299</div>
                                        </div>
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="text-textmuted opacity-[0.7]">Discount</div>
                                            <div class="font-semibold text-[0.875rem] text-success">10% - $129</div>
                                        </div>
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="text-textmuted opacity-[0.7]">Delivery Charges</div>
                                            <div class="font-semibold text-[0.875rem] text-danger">- $49</div>
                                        </div>
                                        <div class="flex items-center justify-between mb-4">
                                            <div class="text-textmuted opacity-[0.7]">Service Tax (18%)</div>
                                            <div class="font-semibold text-[0.875rem]">- $169</div>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="text-textmuted opacity-[0.7]">Total :</div>
                                            <div class="font-semibold text-[0.875rem] text-primary"> $1,387</div>
                                        </div>
                                    </div>
                                    <div class="p-4 grid">
                                        <a href="{{url('check-out')}}" class="ti-btn bg-primary  text-white !font-medium !mb-2">Proceed To Checkout</a>
                                        <a href="{{url('products')}}" class="ti-btn bg-light  !font-medium">continue Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Sweetalerts JS -->
        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Internal Cart JS -->
        @vite('resources/assets/js/cart.js')
        
@endsection
