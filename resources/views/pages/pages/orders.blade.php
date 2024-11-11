
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Orders</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Ecommerce <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Orders 
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

                    <div class="grid grid-cols-12 gap-x-6 mx-auto">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body flex items-center flex-wrap">
                                    <div class="flex-grow"> <span
                                            class="mb-0 text-[0.875rem] text-textmuted">Total number of
                                            orders placed upto now : <span
                                                class="font-semibold text-success">28</span></span> </div>
                                    <div class="hs-dropdown ti-dropdown"> <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-light sm:!m-0 !mb-3 !gap-0 !font-medium dark:text-defaulttextcolor/70"
                                            aria-expanded="false"> Sort By<i
                                                class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i> </a>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                    href="javascript:void(0);">Date</a></li>
                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                    href="javascript:void(0);">Price</a></li>
                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                    href="javascript:void(0);">Category</a></li>
                                        </ul>
                                    </div>
                                    <div class="flex items-center ms-2" role="search"> <input
                                            class="form-control !rounded-sm me-2 dark:text-defaulttextcolor/70"
                                            type="search" placeholder="Search" aria-label="Search"> <button
                                            class="ti-btn ti-btn-primary-full dark:text-defaulttextcolor/70 !mb-0"
                                            type="submit">Search</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                        <div class="">
                                            <span class="text-sm font-semibold">Order Id</span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">#25256</span>
                                        </div>
                                        <div class="">
                                            <span class="fs-14 font-semibold">Ordered Date </span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">12,November</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                        <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                            <img src="{{asset('build/assets/images/ecommerce/01.jpg')}}" alt="product"
                                                class=" w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                            <div class="flex justify-between w-full">
                                                <div class="product-details space-y-1">
                                                    <h5 class="text-lg font-semibold">Green Flower Pot</h5>
                                                    <p class="font-medium text-sm">Delivery Address : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs  font-normal">
                                                            2nd street,houston texas,united states.</span>
                                                    </p>
                                                    <p class="font-medium text-sm">Delivery Dated : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                            25 November</span>
                                                    </p>
                                                    <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status :
                                                        </span><a class="text-info hover:underline"
                                                            href="{{url('order-details')}}">Packed</a></div>
                                                </div>
                                                <div class="flex space-x-2 rtl:space-x-reverse">
                                                    <h5 class="text-base font-semibold text-gray-500 dark:text-white/70">
                                                        $699</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="javascript:void(0);" class="ti-btn m-0 py-2 px-3 ti-btn-danger">
                                        Cancel Order
                                    </a>
                                    <a href="{{url('products')}}"
                                        class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-primary">
                                        Shop Similar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                        <div class="">
                                            <span class="text-sm font-semibold">Order Id</span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">#12852</span>
                                        </div>
                                        <div class="">
                                            <span class="fs-14 font-semibold">Ordered Date </span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">13,November</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                        <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                            <img src="{{asset('build/assets/images/ecommerce/02.jpg')}}" alt="product"
                                                class=" w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                            <div class="flex justify-between w-full">
                                                <div class="product-details space-y-1">
                                                    <h5 class="text-lg font-semibold">Modern Wooden chair</h5>
                                                    <p class="font-medium text-sm">Delivery Address : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs  font-normal">
                                                            2nd street,houston texas,united states.</span>
                                                    </p>
                                                    <p class="font-medium text-sm">Delivery Dated : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                            26 November</span>
                                                    </p>
                                                    <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status :
                                                        </span><a class="text-primary hover:underline"
                                                            href="{{url('order-details')}}">Ordered</a></div>
                                                </div>
                                                <div class="flex space-x-2 rtl:space-x-reverse">
                                                    <h5 class="text-base font-semibold text-gray-500 dark:text-white/70">
                                                        $599</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="javascript:void(0);" class="ti-btn m-0 py-2 px-3 ti-btn-danger">
                                        Cancel Order
                                    </a>
                                    <a href="{{url('products')}}"
                                        class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-primary">
                                        Shop Similar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                        <div class="">
                                            <span class="text-sm font-semibold">Order Id</span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">#58584</span>
                                        </div>
                                        <div class="">
                                            <span class="fs-14 font-semibold">Ordered Date </span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">11,November</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                        <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                            <img src="{{asset('build/assets/images/ecommerce/03.jpg')}}" alt="product"
                                                class=" w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                            <div class="flex justify-between w-full">
                                                <div class="product-details space-y-1">
                                                    <h5 class="text-lg font-semibold">Red Boys shoes </h5>
                                                    <p class="font-medium text-sm">Delivery Address : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs  font-normal">
                                                            2nd street,houston texas,united states.</span>
                                                    </p>
                                                    <p class="font-medium text-sm">Delivery Dated : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                            21 November</span>
                                                    </p>
                                                    <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status :
                                                        </span><a class="text-danger hover:underline"
                                                            href="{{url('order-details')}}">Cancelled</a></div>
                                                </div>
                                                <div class="flex space-x-2 rtl:space-x-reverse">
                                                    <h5 class="text-base font-semibold text-gray-500 dark:text-white/70">
                                                        $399</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="{{url('products')}}"
                                        class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-primary">
                                        Back To Shop
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                        <div class="">
                                            <span class="text-sm font-semibold">Order Id</span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">#25465</span>
                                        </div>
                                        <div class="">
                                            <span class="fs-14 font-semibold">Ordered Date </span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">10,November</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                        <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                            <img src="{{asset('build/assets/images/ecommerce/04.jpg')}}" alt="product"
                                                class=" w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                            <div class="flex justify-between w-full">
                                                <div class="product-details space-y-1">
                                                    <h5 class="text-lg font-semibold">Black Head set</h5>
                                                    <p class="font-medium text-sm">Delivery Address : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs  font-normal">
                                                            2nd street,houston texas,united states.</span>
                                                    </p>
                                                    <p class="font-medium text-sm">Delivered On : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                            12 November ,5:51pm</span>
                                                    </p>
                                                    <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status :
                                                        </span><a class="text-success hover:underline"
                                                            href="{{url('order-details')}}">Delivered</a></div>
                                                </div>
                                                <div class="flex space-x-2 rtl:space-x-reverse">
                                                    <h5 class="text-base font-semibold text-gray-500 dark:text-white/70">
                                                        $245</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="javascript:void(0);" class="ti-btn m-0 py-2 px-3 ti-btn-info">
                                        Rate product
                                    </a>
                                    <a href="{{url('products')}}"
                                        class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-primary">
                                        Shop Similar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                        <div class="">
                                            <span class="text-sm font-semibold">Order Id</span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">#25465</span>
                                        </div>
                                        <div class="">
                                            <span class="fs-14 font-semibold">Ordered Date </span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">15,November</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                        <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                            <img src="{{asset('build/assets/images/ecommerce/06.jpg')}}" alt="product"
                                                class=" w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                            <div class="flex justify-between w-full">
                                                <div class="product-details space-y-1">
                                                    <h5 class="text-lg font-semibold">Stylish bag for women </h5>
                                                    <p class="font-medium text-sm">Delivery Address : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs  font-normal">
                                                            2nd street,houston texas,united states.</span>
                                                    </p>
                                                    <p class="font-medium text-sm">Delivered Date : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                            25 November </span>
                                                    </p>
                                                    <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status :
                                                        </span><a class="text-secondary hover:underline"
                                                            href="{{url('order-details')}}">Shipped</a></div>
                                                </div>
                                                <div class="flex space-x-2 rtl:space-x-reverse">
                                                    <h5 class="text-base font-semibold text-gray-500 dark:text-white/70">
                                                        $245</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="javascript:void(0);" class="ti-btn m-0 py-2 px-3 ti-btn-danger">
                                        Cancel Order
                                    </a>
                                    <a href="{{url('products')}}"
                                        class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-primary">
                                        Shop Similar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-4 lg:col-span-6">
                            <div class="box">
                                <div class="box-header">
                                    <div class="flex justify-between">
                                        <div class="">
                                            <span class="text-sm font-semibold">Order Id</span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">#25465</span>
                                        </div>
                                        <div class="">
                                            <span class="fs-14 font-semibold">Ordered Date </span>
                                            <span class="block text-xs text-gray-500 dark:text-white/70">08,November</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                        <div class="sm:flex space-x-3 rtl:space-x-reverse">
                                            <img src="{{asset('build/assets/images/ecommerce/07.jpg')}}" alt="product"
                                                class=" w-24 h-24 rounded-sm bg-gray-100 dark:bg-black/20 p-2">
                                            <div class="flex justify-between w-full">
                                                <div class="product-details space-y-1">
                                                    <h5 class="text-lg font-semibold">Hp Laptop </h5>
                                                    <p class="font-medium text-sm">Delivery Address : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs  font-normal">
                                                            2nd street,houston texas,united states.</span>
                                                    </p>
                                                    <p class="font-medium text-sm">Delivered Date : <span
                                                            class="text-gray-500 dark:text-white/70 text-xs font-normal">
                                                            20 November </span>
                                                    </p>
                                                    <div><span class="font-medium text-sm ltr:mr-2 rtl:ml-2">Status :
                                                        </span><a class="text-warning hover:underline"
                                                            href="{{url('order-details')}}">Out For Delivery</a></div>
                                                </div>
                                                <div class="flex space-x-2 rtl:space-x-reverse">
                                                    <h5 class="text-base font-semibold text-gray-500 dark:text-white/70">
                                                        $299</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="javascript:void(0);" class="ti-btn m-0 py-2 px-3 ti-btn-danger">
                                        Cancel Order
                                    </a>
                                    <a href="{{url('products')}}"
                                        class="ltr:float-right rtl:float-left ti-btn m-0 py-2 px-3 ti-btn-primary">
                                        Shop Similar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="ti-pagination !px-3 !py-[0.375rem] !text-[1rem] !mb-4 float-right">
                            <li class="page-item disabled">
                                <a
                                    class="page-link !px-3 !py-[0.375rem] !rounded-tl-sm !rounded-bl-sm rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link !px-3 !py-[0.375rem]" href="#">1</a></li>
                            <li class="page-item"><a class="page-link !px-3 !py-[0.375rem] active" href="#">2</a></li>
                            <li class="page-item"><a class="page-link !px-3 !py-[0.375rem]" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link !px-3 !py-[0.375rem] !rounded-tr-sm !rounded-br-sm rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm"
                                    href="#">Next</a>
                            </li>
                        </ul>
                    </div>

@endsection

@section('scripts')
	


@endsection
