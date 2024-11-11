
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Order Details</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Ecommerce <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Order Details 
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
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header sm:flex justify-between">
                                            <div class="box-title mb-2 sm:mb-0 ">
                                                Order No - <span class="text-primary">#SPK-1023</span>
                                            </div>
                                            <div>
                                                <span class="bg-primary/10 p-2 text-primary rounded-sm">
                                                    Estimated delivery : 30,Nov 2022
                                                </span>
                                            </div>
                                        </div>
                                        <div class="box-body  !p-0">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap min-w-full">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="text-left">Item</th>
                                                            <th scope="col"class="text-left">Tracking No</th>
                                                            <th scope="col"class="text-left">Price</th>
                                                            <th scope="col"class="text-left">Quantity</th>
                                                            <th scope="col" class="text-left">Total Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border !border-s-0 !border-e-0 border-inherit border-solid dark:border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-4 flex items-center">
                                                                        <span class="avatar !mb-0 avatar-xxl">
                                                                            <img src="{{asset('build/assets/images/ecommerce/01.jpg')}}" class="!rounded-sm" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 text-[0.875rem] font-medium">
                                                                            <a href="javascript:void(0);">Flower Pot</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1">Dial Size:</span><span class="text-[#8c9097]">44mm</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1">Color:</span><span class="text-[#8c9097]">Metallic Black</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK1218153635</a></td>
                                                            <td>
                                                                <span class="fs-15 font-medium">$1,249</span>
                                                            </td>
                                                            <td>1</td>
                                                            <td>$1,249</td>
                                                        </tr>
                                                        <tr class="border !border-s-0 !border-e-0 border-inherit border-solid dark:border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-4 flex items-center">
                                                                        <span class="avatar !mb-0 avatar-xxl">
                                                                            <img src="{{asset('build/assets/images/ecommerce/02.jpg')}}" class="!rounded-sm" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 text-[0.875rem] font-medium">
                                                                            <a href="javascript:void(0);">Wooden Chair</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1">Size:</span><span class="text-[#8c9097]">Large</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1">Color:</span><span class="text-[#8c9097]">Grey<span class="badge bg-success text-white ms-3">In Offer</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascrpt:void(0);" class="text-primary">SPK3789423789</a></td>
                                                            <td>
                                                                <span class="fs-15 font-medium">$499</span>
                                                            </td>
                                                            <td>2</td>
                                                            <td>$998</td>
                                                        </tr>
                                                        <tr class="border !border-s-0 !border-e-0 border-inherit border-solid dark:border-defaultborder/10">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-4 flex items-center">
                                                                        <span class="avatar !mb-0 avatar-xxl">
                                                                            <img src="{{asset('build/assets/images/ecommerce/03.jpg')}}" class="!rounded-sm" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 text-[0.875rem] font-medium">
                                                                            <a href="javascript:void(0);">Denim Corporation Red Shoe</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1">Size:</span><span class="text-[#8c9097]">Large</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1">Color:</span><span class="text-[#8c9097]">Orange<span class="badge text-white bg-info ms-3">32% Off</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascrpt:void(0);" class="text-primary">SPK1120324532</a></td>
                                                            <td>
                                                                <span class="fs-15 font-medium">$799</span>
                                                            </td>
                                                            <td>1</td>
                                                            <td>$799</td>
                                                        </tr>
                                                        <tr class="border !border-s-0 !border-e-0 border-inherit border-solid dark:border-defaultborder/10">
                                                            <td colspan="2"></td>
                                                            <td colspan="2">
                                                                <div class="font-medium">Total Items :</div>
                                                            </td>
                                                            <td>
                                                                04
                                                            </td>
                                                        </tr>
                                                        <tr class="border !border-s-0 !border-e-0 border-inherit border-solid dark:border-defaultborder/10">
                                                            <td colspan="2"></td>
                                                            <td colspan="2">
                                                                <div class="font-medium">Sub Total :</div>
                                                            </td>
                                                            <td>
                                                                $3,100
                                                            </td>
                                                        </tr>
                                                        <tr class="border !border-s-0 !border-e-0 border-inherit border-solid dark:border-defaultborder/10">
                                                            <td colspan="2"></td>
                                                            <td colspan="2">
                                                                <div class="font-medium">Applied Coupon :</div>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success/10 text-success">SPKFIR</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="border !border-s-0 !border-e-0 border-inherit border-solid dark:border-defaultborder/10">
                                                            <td colspan="2"></td>
                                                            <td colspan="2">
                                                                <div class="font-medium">Delivery Fees :</div>
                                                            </td>
                                                            <td>
                                                                <span class="text-danger">+$29</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="border !border-s-0 !border-e-0 border-inherit border-solid dark:border-defaultborder/10">
                                                            <td colspan="2"></td>
                                                            <td colspan="2">
                                                                <div class="font-medium">Total Saved :</div>
                                                            </td>
                                                            <td>
                                                                <span class="text-[0.875rem] font-medium text-success">$3,799</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"></td>
                                                            <td colspan="2">
                                                                <div class="font-medium">Total Price :</div>
                                                            </td>
                                                            <td>
                                                                <span class="text-[1rem] font-medium">$3,129</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="box-footer border-t-0">
                                            <div class="btn-list float-right">
                                                <button class="ti-btn bg-primary text-white !py-1 !px-2 !font-[500]" onclick="javascript:window.print();"><i class="ri-printer-line me-1 align-middle d-inline-block"></i>Print</button>
                                                <button class="ti-btn bg-secondary text-white !py-1 !px-2 !font-[500]"><i class="ri-share-forward-line me-1 align-middle d-inline-block"></i>Share Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                User Details
                                            </div>
                                        </div>
                                        <div class="box-body !p-0">
                                            <div class="flex items-center border-b border-dashed dark:border-defaultborder/10 p-3 flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-lg avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <p class="mb-0">Json Taylor</p>
                                                    <p class="mb-0 text-[#8c9097] text-[0.75rem]">jsontaylor2135@gmail.com</p>
                                                </div>
                                                <div>
                                                    <span class="badge bg-primary/10 text-primary">Prime User</span>
                                                </div>
                                            </div>
                                            <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                                <div class="flex items-center justify-between mb-4">
                                                    <span class="text-[0.875rem] font-medium">Delivery address :</span>
                                                    <button class="ti-btn ti-btn-icon bg-primary ti-btn-sm text-white"><i class="ri-pencil-line"></i></button>
                                                </div>
                                                <p class="mb-2 text-[#8c9097]"><span class="font-medium text-defaulttextcolor dark:text-defaulttextcolor/70 inline-block !me-1">Landmark : </span>MIG-1-11</p>
                                                <p class="mb-2 text-[#8c9097]"><span class="font-medium text-defaulttextcolor dark:text-defaulttextcolor/70 inline-block !me-1">Street : </span>Monroe Street</p>
                                                <p class="mb-2 text-[#8c9097]"><span class="font-medium text-defaulttextcolor dark:text-defaulttextcolor/70 inline-block !me-1">City : </span>Georgetown</p>
                                                <p class="mb-2 text-[#8c9097]"><span class="font-medium text-defaulttextcolor dark:text-defaulttextcolor/70 inline-block !me-1">State : </span>Washington,D.C</p>
                                                <p class="mb-2 text-[#8c9097]"><span class="font-medium text-defaulttextcolor dark:text-defaulttextcolor/70 inline-block !me-1">Country : </span>USA</p>
                                                <p class="mb-0 text-[#8c9097]"><span class="font-medium text-defaulttextcolor dark:text-defaulttextcolor/70 inline-block !me-1">Zipcode : </span>200071</p>
                                            </div>
                                            <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                                <div class="mb-4">
                                                    <span class="text-[0.875rem] font-medium">Send updates to :</span>
                                                </div>    
                                                <p class="mb-2 text-[#8c9097]">
                                                    <span class="font-medium text-defaulttextcolor dark:text-defaulttextcolor/70 inline-block !me-1">Phone : </span>
                                                    (555)-0123-1210
                                                </p>
                                                <p class="mb-0 text-[#8c9097]">
                                                    <span class="font-medium text-defaulttextcolor dark:text-defaulttextcolor/70 inline-block !me-1">Email : </span>
                                                    jsontaylor2134@gmail.com
                                                </p>
                                            </div>
                                            <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                                <div class="mb-4">
                                                    <span class="text-[0.875rem] font-medium">Order Summary</span>
                                                </div>    
                                                <p class="mb-2 text-[#8c9097]">
                                                    <span class="font-medium text-defaulttextcolor dark:text-defaulttextcolor/70 inline-block !me-1">Ordered Date :</span>
                                                    24,Nov 2022
                                                </p>
                                                <p class="mb-2 text-[#8c9097]">
                                                    <span class="font-medium text-defaulttextcolor dark:text-defaulttextcolor/70 inline-block !me-1">Ordered Time :</span>
                                                    11:47AM
                                                </p>
                                                <p class="mb-0 text-[#8c9097]">
                                                    <span class="font-medium text-defaulttextcolor dark:text-defaulttextcolor/70 inline-block !me-1">Payment Interface :</span>
                                                    UPI
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box-footer">Total
                                            <span class="text-success">294 items</span> purchased upto now
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-12 col-span-12">
                            <div class="box">
                            <div class="box-header">
                                <div class="flex justify-between">
                                <h5 class="box-title">Order Tracking</h5>
                                <p class="font-medium mb-0 text-sm">#152632235822</p>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="order-track">
                                <div class="hs-accordion-group" data-hs-accordion-always-open>
                                    <div class="hs-accordion active" id="order-heading-one">
                                    <a href="javascript:void(0);"
                                        class="hs-accordion-toggle group pb-3 inline-flex items-center gap-x-3 w-full font-medium text-start transition"
                                        aria-controls="order-collapse-one">
                                        <div class="flex w-full mb-0">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <span class="text-danger">
                                            <i class="ri ri-shopping-bag-2-line text-sm"></i>
                                            </span>
                                        </div>
                                        <div class="sm:flex w-full justify-between">
                                            <p class="font-medium mb-0 text-sm">Order Placed</p>
                                            <p class="text-xs text-gray-500 dark:text-white/70">Nov 10, 2022</p>
                                        </div>
                                        </div>
                                    </a>
                                    <div id="order-collapse-one"
                                        class="space-y-3 hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="order-heading-one">
                                        <div class="text-xs">
                                        <p class="mb-0">Order placed successfully by <a href="javascript:void(0);"
                                            class="font-medium text-primary">Json Taylor</a></p>
                                        <span class="text-gray-500 dark:text-white/70">Nov 10, 2022, 15:36</span>
                                        </div>
                                        <div class="text-xs">
                                        <p class="mb-0">Your Order is ready to shipped from seller</p>
                                        <span class="text-gray-500 dark:text-white/70">Nov 11, 2022, 04:52</span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="hs-accordion active" id="order-heading-two">
                                    <a href="javascript:void(0);"
                                        class="hs-accordion-toggle group pb-3 inline-flex items-center gap-x-3 w-full font-medium text-start transition"
                                        aria-controls="order-collapse-two">
                                        <div class="flex w-full mb-0">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <span class="text-info">
                                            <i class="ri ri-gift-2-line text-sm"></i>
                                            </span>
                                        </div>
                                        <div class="sm:flex w-full justify-between">
                                            <p class="font-medium mb-0 text-sm ">Order Packed</p>
                                            <p class="text-xs text-gray-500 dark:text-white/70">Nov 10, 2022</p>
                                        </div>
                                        </div>
                                    </a>
                                    <div id="order-collapse-two"
                                        class="space-y-3 hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="order-heading-two">
                                        <div class="text-xs">
                                        <p class="mb-0">Order placed successfully packed by courier Patner</p>
                                        <span class="text-gray-500 dark:text-white/70">Nov 12, 2022, 5:40</span>
                                        </div>
                                        <div class="text-xs">
                                        <p class="mb-0">Your Order is ready to ship from courier Patner</p>
                                        <span class="text-gray-500 dark:text-white/70">Nov 12, 2022, 16:52</span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="hs-accordion active" id="order-heading-three">
                                    <a href="javascript:void(0);"
                                        class="hs-accordion-toggle group pb-3 inline-flex items-center gap-x-3 w-full font-medium text-start transition"
                                        aria-controls="order-collapse-three">
                                        <div class="flex w-full mb-0">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <span class="text-secondary">
                                            <i class="ri ri-truck-line text-sm"></i>
                                            </span>
                                        </div>
                                        <div class="sm:flex w-full justify-between">
                                            <p class="font-medium mb-0 text-sm ">Order Shipped</p>
                                            <p class="text-xs text-gray-500 dark:text-white/70">Nov 13, 2022</p>
                                        </div>
                                        </div>
                                    </a>
                                    <div id="order-collapse-three"
                                        class="space-y-3 hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                        aria-labelledby="order-heading-two">
                                        <div class="text-xs">
                                        <p class="mb-0">Arrived USA SGS Warehouse</p>
                                        <span class="text-gray-500 dark:text-white/70">Nov 12, 2022, 5:40</span>
                                        </div>
                                        <div class="text-xs">
                                        <p class="mb-0">Arrived in Hyderabad and expected Delivery is </p>
                                        <span class="text-gray-500 dark:text-white/70">Nov 12, 2022, 16:52</span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="hs-accordion active" id="order-heading-four">
                                    <a href="javascript:void(0);"
                                        class="group pb-3 inline-flex items-center gap-x-3 w-full font-medium text-start transition">
                                        <div class="flex w-full mb-0">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <span class="text-primary">
                                            <i class="ri ri-logout-box-r-line text-sm"></i>
                                            </span>
                                        </div>
                                        <div class="sm:flex w-full justify-between">
                                            <p class="font-medium mb-0 text-sm ">Order Is Out For Delivery</p>
                                            <p class="text-xs text-gray-500 dark:text-white/70">Nov 14, 2022</p>
                                        </div>
                                        </div>
                                    </a>
                                    </div>
                                    <div class="hs-accordion active" id="order-heading-five">
                                    <a href="javascript:void(0);" class="group inline-flex items-center gap-x-3 w-full font-medium text-start transition">
                                        <div class="flex w-full mb-0">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <span class="text-primary">
                                            <i class="ri ri-hand-heart-line text-sm"></i>
                                            </span>
                                        </div>
                                        <div class="sm:flex w-full justify-between">
                                            <p class="font-medium mb-0 text-sm ">Order Is Delivered</p>
                                            <p class="text-xs text-gray-500 dark:text-white/70">Nov 15, 2022</p>
                                        </div>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	


@endsection
