
@extends('layouts.master')

@section('styles')

        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

@endsection

@section('content')
        
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Check Out</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Ecommerce <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Check Out 
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

                    <div class="container-fluid">
                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-9 col-span-12">
                                <div class="box overflow-hidden">
                                    <div class="box-body !p-0  product-checkout">
                                        <nav class="md:flex justify-evenly !border-b !border-dashed border-defaultborder dark:border-defaultborder/10" aria-label="Tabs" role="tablist">
                                            <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active" id="order-tab" data-hs-tab="#order-tab-pane" aria-controls="order-tab-pane">
                                                <i class="ri-truck-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full hs-tab-active:bg-primary/10 bg-light !block"></i>Shipping
                                            </a>
                                            <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary" id="confirmed-tab" data-hs-tab="#confirm-tab-pane" aria-controls="confirm-tab-pane">
                                                <i class="ri-user-3-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full hs-tab-active:bg-primary/10 bg-light !block"></i>Personal Details
                                            </a>
                                            <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary" id="shipped-tab" data-hs-tab="#shipped-tab-pane" aria-controls="shipped-tab-pane">
                                                <i class="ri-bank-card-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full hs-tab-active:bg-primary/10 bg-light !block"></i>Payment
                                            </a>
                                            <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer dark:text-defaulttextcolor/70 !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary" id="delivered-tab" data-hs-tab="#delivery-tab-pane" aria-controls="delivery-tab-pane">
                                                <i class="ri-checkbox-circle-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full hs-tab-active:bg-primary/10 bg-light !block"></i>Confirmation
                                            </a>
                                        </nav>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active text-defaulttextcolor dark:!text-defaulttextcolor/70 !border-0 !p-0" id="order-tab-pane" aria-labelledby="order-tab" role="tabpanel"
                                                tabindex="0">
                                                <div class="p-6">
                                                    <p class="mb-1 font-semibold text-textmuted opacity-[0.5] text-[1.25rem]">01</p>
                                                    <div class="text-[0.9375rem] font-semibold sm:flex block items-center justify-between mb-4">
                                                        <div>Shipping Address :</div>
                                                        <div class="sm:mt-0 mt-2">
                                                            <a href="javascript:void(0);" class="ti-btn bg-primary text-white !py-1 !px-2 !text-[0.75rem]" data-hs-overlay="#modal-new-address"><i class="ri-add-line  align-middle text-[0.875rem] font-semibold inline-block"></i>Add New Address
                                                            </a>
                                                            <div id="modal-new-address" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                                                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                                                <div class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
                                                                    <div class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                                                                        <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">New Address</h6>
                                                                    <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#modal-new-address">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                                    </button>
                                                                    </div>
                                                                    <div class="p-4 overflow-y-auto">
                                                                        <div class="grid grid-cols-12 gap-6">
                                                                            <div class="xl:col-span-6 col-span-12">
                                                                                <label for="fullname-new" class="form-label">Full Name</label>
                                                                                <input type="text" class="form-control" id="fullname-new" placeholder="Full Name">
                                                                            </div>
                                                                            <div class="xl:col-span-6 col-span-12">
                                                                                <label for="email-new" class="form-label">Email</label>
                                                                                <input type="email" class="form-control" id="email-new" placeholder="email">
                                                                            </div>
                                                                            <div class="xl:col-span-6 col-span-12">
                                                                                <label for="phonenumber-new" class="form-label">Phone Number</label>
                                                                                <input type="number" class="form-control" id="phonenumber-new" placeholder="Phone">
                                                                            </div>
                                                                            <div class="xl:col-span-6 col-span-12">
                                                                                <label for="address-new" class="form-label">Address</label>
                                                                                <input type="text" class="form-control" id="address-new" placeholder="Address">
                                                                            </div>
                                                                            <div class="xl:col-span-12 col-span-12">
                                                                                <div class="grid grid-cols-12 gap-4">
                                                                                    <div class="xl:col-span-3 col-span-6">
                                                                                        <label for="pincode-new" class="form-label">Pincode</label>
                                                                                        <input type="number" class="form-control" id="pincode-new" placeholder="pincode">
                                                                                    </div>
                                                                                    <div class="xl:col-span-3 col-span-6">
                                                                                        <label for="city-new" class="form-label">City</label>
                                                                                        <input type="text" class="form-control" id="city-new" placeholder="City">
                                                                                    </div>
                                                                                    <div class="xl:col-span-3 col-span-6">
                                                                                        <label for="state-new" class="form-label">State</label>
                                                                                        <input type="text" class="form-control" id="state-new" placeholder="State">
                                                                                    </div>
                                                                                    <div class="xl:col-span-3 col-span-6">
                                                                                        <label for="country-new" class="form-label">Country</label>
                                                                                        <input type="text" class="form-control" id="country-new" placeholder="Country">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                                                                    <button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#modal-new-address">
                                                                        Close
                                                                    </button>
                                                                    <button type="button" class="ti-btn bg-primary text-white !font-medium">Save Adress</button>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-12 gap-4 !mb-4">
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control w-full !rounded-md" id="fullname-add" value="Json Taylor" placeholder="Name">
                                                                <label for="fullname-add" class="!text-[0.75rem] after:bg-white after:dark:bg-bodybg after:rounded-md after:inset-y-4 after:inset-x-[0.375rem]">Full Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-floating">
                                                                <input type="email" class="form-control  w-full !rounded-md" id="email-add" value="jsontaylor2413@gmail.com" placeholder="name@example.com">
                                                                <label for="email-add" class="!text-[0.75rem] after:bg-white after:dark:bg-bodybg after:rounded-md after:inset-y-4 after:inset-x-[0.375rem]">Email</label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-floating">
                                                                <input type="email" class="form-control is-valid  w-full !rounded-md" id="phoneno-add" value="(555) 555-1234" placeholder="1234-XX-XXXX">
                                                                <label for="phoneno-add" class="!text-[0.75rem] after:bg-white after:dark:bg-bodybg after:rounded-md after:inset-y-4 after:inset-x-[0.375rem]">Phone No</label>
                                                                <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                                    <svg class="h-5 w-5 text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-floating">
                                                                <textarea class="form-control  w-full !rounded-md" placeholder="Address Here" id="address-add">MIG-1-11,Monroe Street,Washington D.C,USA</textarea>
                                                                <label for="address-add" class="!text-[0.75rem] after:bg-white after:dark:bg-bodybg after:rounded-md after:inset-y-4 after:inset-x-[0.375rem]">Address</label>
                                                            </div>
                                                            <div class="form-check !flex items-center gap-2 !ps-0">
                                                                <input class="form-check-input form-checked-success w-full checked:bg-success checked:ring-success hover:checked:bg-success hover:checked:ring-success focus:checked:bg-success focus:checked:ring-success focus:ring-success focus:border-success" type="checkbox" value="" id="invalidCheck" required checked>
                                                                <label class="form-check-label text-success" for="invalidCheck">
                                                                    Same as Billing Address ?
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <div class="grid grid-cols-12 sm:gap-6 gap-5">
                                                                <div class="xl:col-span-3 col-span-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control is-valid  w-full !rounded-md" id="pincode-add" value="20071" placeholder="Name">
                                                                        <label for="pincode-add">Pin Code</label>
                                                                        <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                                            <svg class="h-5 w-5 text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="xl:col-span-3 col-span-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control  w-full !rounded-md" id="city-add" value="Georgetown" placeholder="Name">
                                                                        <label for="city-add">City</label>
                                                                    </div>
                                                                </div>
                                                                <div class="xl:col-span-3 col-span-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control  w-full !rounded-md" id="state-add" value="Washington, D.C" placeholder="Name">
                                                                        <label for="state-add">State</label>
                                                                    </div>
                                                                </div>
                                                                <div class="xl:col-span-3 col-span-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control  w-full !rounded-md" id="country-add" value="USA" placeholder="Name">
                                                                        <label for="country-add">Country</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-[0.9375rem] font-semibold mb-3 xl:col-span-12">Shipping Methods :</p>
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-check shipping-method-container border !border-defaultborder dark:!border-defaultborder/10 mb-0">
                                                                <div class="form-check-label">
                                                                <div class="sm:flex items-center justify-between">
                                                                    <div class="flex items-center  gap-x-2  !me-2">
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/21.png')}}" alt="" class="!h-12 !w-12">
                                                                        </span>
                                                                        <div class="shipping-partner-details ms-2 sm:me-5 me-0">
                                                                            <p class="mb-0 font-semibold">UPS</p>
                                                                            <p class="text-textmuted text-[0.6875rem] mb-0">Delivered By 24,Nov 2022</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="font-semibold sm:me-5 sm:pe-3 pe-0 me-0">
                                                                        $9.99
                                                                        <input id="shipping-method1" name="shipping-methods" type="radio" class="!ms-2 form-check-input !top-[1.5rem]" checked>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-check shipping-method-container border !border-defaultborder dark:!border-defaultborder/10 mb-0">
                                                                <div class="form-check-label">
                                                                <div class="sm:flex items-center justify-between">
                                                                    <div class="flex items-center gap-x-2d">
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/24.png')}}" alt="" class="!h-12 !w-12">
                                                                        </span>
                                                                        <div class="shipping-partner-details ms-2 sm:me-5 me-0">
                                                                            <p class="mb-0 font-semibold">USPS</p>
                                                                            <p class="text-textmuted text-[0.6875rem] mb-0">Delivered By 22,Nov 2022</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="font-semibold sm:me-5 sm:pe-3 pe-0 me-0">
                                                                        $10.49
                                                                        <input id="shipping-method2" name="shipping-methods" type="radio" class=" !ms-2 form-check-input !top-[1.5rem]" checked>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-check shipping-method-container border !border-defaultborder dark:!border-defaultborder/10 mb-0">
                                                                <div class="form-check-label">
                                                                <div class="sm:flex items-center justify-between">
                                                                    <div class="flex items-center gap-x-2">
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/22.png')}}" alt="" class="!h-12 !w-12">
                                                                        </span>
                                                                        <div class="shipping-partner-details ms-2 sm:me-5 me-0">
                                                                            <p class="mb-0 font-semibold">FedEx</p>
                                                                            <p class="text-textmuted text-[0.6875rem] mb-0">Delivered Tomorrow</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="font-semibold sm:me-5 sm:pe-3 pe-0 me-0">
                                                                        $12.29
                                                                        <input id="shipping-method3" name="shipping-methods" type="radio" class="!ms-2 form-check-input !top-[1.5rem]" checked>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-check shipping-method-container border !border-defaultborder dark:!border-defaultborder/10 mb-0">
                                                                <div class="form-check-label">
                                                                <div class="sm:flex items-center justify-between">
                                                                    <div class="flex items-center gap-x-2">
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/23.png')}}" alt="" class="!h-12 !w-12">
                                                                        </span>
                                                                        <div class="ms-2 shipping-partner-details sm:me-5 me-0">
                                                                            <p class="mb-0 font-semibold">DHL</p>
                                                                            <p class="text-textmuted text-[0.6875rem] mb-0">Delivered Today</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="font-semibold sm:me-5 sm:pe-3 pe-0 me-0">
                                                                        $18.99
                                                                        <input id="shipping-method4" name="shipping-methods" type="radio" class="form-check-input !ms-2  !top-[1.5rem]" checked>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-6 py-4 border-t border-dashed dark:border-defaultborder/10 sm:flex justify-end">
                                                    <button type="button" class="ti-btn ti-btn-success" id="personal-details-trigger">Personal Details<i class="ri-user-3-line ms-2 align-middle inline-block"></i></button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade !border-0 !p-0 text-defaulttextcolor dark:!text-defaulttextcolor/70 hidden" id="confirm-tab-pane" aria-labelledby="confirmed-tab"
                                                role="tabpanel"  tabindex="0">
                                                <div class="p-4">
                                                    <p class="mb-1 font-semibold text-textmuted opacity-[0.5] text-[1.25rem]">02</p>
                                                    <div class="text-[0.9375rem] font-semibold sm:flex block items-center justify-between mb-4">
                                                        <div>Personal Details :</div>
                                                    </div>
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <label for="firstname-personal" class="form-label">First Name</label>
                                                            <input type="text" class="form-control w-full !rounded-md" id="firstname-personal" placeholder="First Name" value="Json">
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <label for="lastname-personal" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control w-full !rounded-md" id="lastname-personal" placeholder="Last Name" value="Taylor">
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <label for="email-personal" class="form-label">Email</label>
                                                            <input type="email" class="form-control w-full !rounded-md" id="email-personal" placeholder="xyz@example.com" value="">
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <label for="phoneno-personal" class="form-label">Phone no</label>
                                                            <input type="text" class="form-control w-full !rounded-md" id="phoneno-personal" placeholder="(555)-555-1234" value="">
                                                        </div>
                                                        <div class="xxl:col-span-2 col-span-12">
                                                            <label for="pincode-personal" class="form-label">Pincode</label>
                                                            <input type="text" class="form-control w-full !rounded-md" id="pincode-personal" placeholder="200017" value="">
                                                        </div>
                                                        <div class="xxl:col-span-4 col-span-12">
                                                            <label for="choices-single-default" class="form-label">City</label>
                                                            <select class="form-control w-full !rounded-md" data-trigger name="choices-single-default" id="choices-single-default">
                                                                <option value="Choice 1">Georgetown</option>
                                                                <option value="Choice 2">Alexandria</option>
                                                                <option value="Choice 3">Rockville</option>
                                                                <option value="Choice 4">Frederick</option>
                                                            </select>
                                                        </div>
                                                        <div class="xxl:col-span-4 col-span-12">
                                                            <label for="choices-single-default1" class="form-label">State</label>
                                                            <select class="form-control w-full !rounded-md" data-trigger id="choices-single-default1">
                                                                <option value="Choice 1">Washington,D.C</option>
                                                                <option value="Choice 2">California</option>
                                                                <option value="Choice 3">Texas</option>
                                                                <option value="Choice 4">Alaska</option>
                                                            </select>
                                                        </div>
                                                        <div class="xxl:col-span-2 col-span-12">
                                                            <label for="country-personal" class="form-label">Country</label>
                                                            <input type="text" class="form-control w-full !rounded-md" id="country-personal" placeholder="Country" value="USA">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <label for="text-area" class="form-label">Address</label>
                                                            <textarea class="form-control w-full !rounded-md" id="text-area" rows="4"></textarea>
                                                            <div class="form-check !flex items-center gap-2 !ps-0">
                                                                <input class="form-check-input form-checked-success w-full checked:bg-success checked:ring-success hover:checked:bg-success hover:checked:ring-success focus:checked:bg-success focus:checked:ring-success focus:ring-success focus:border-success" type="checkbox" value="" id="invalidCheck1" required checked>
                                                                <label class="form-check-label text-success" for="invalidCheck">
                                                                    Same as Shipping Address Address ?
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-4 py-3 border-top border-block-start-dashed sm:flex justify-between">
                                                    <button type="button" class="ti-btn ti-btn-danger m-1" id="back-shipping-trigger"><i class="ri-truck-line me-2 align-middle inline-block"></i>Back To Shipping</button>
                                                    <button type="button" class="ti-btn ti-btn-success m-1" id="payment-trigger">Continue To Payment<i class="bi bi-credit-card-2-front align-middle ms-2 inline-block"></i></button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade !border-0 !p-0 hidden" id="shipped-tab-pane" aria-labelledby="shipped-tab" role="tabpanel"
                                                tabindex="0">
                                                <div class="p-4 text-defaulttextcolor dark:!text-defaulttextcolor/70">
                                                    <p class="mb-1 font-semibold text-textmuted opacity-[0.5] text-[1.25rem]">03</p>
                                                    <div class="text-[0.9375rem] font-semibold sm:flex block items-center justify-between mb-4">
                                                        <div>Payment Details :</div>
                                                    </div>
                                                    <div class="grid grid-cols-12 sm:gap-6">
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <div class="mb-4">
                                                                <label class="form-label">Delivery Address</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control !rounded-s-sm" placeholder="Address" aria-label="address" aria-describedby="payment-address" value="MIG-1-11,Monroe Street,Washington D.C,USA">
                                                                    <button type="button"  class="ti-btn ti-btn-primary border-defaultborder !rounded-s-none !mb-0" id="payment-address">Change</button>
                                                                </div>
                                                            </div>
                                                            <div class="box border dark:border-defaultborder/10 !shadow-none mb-4">
                                                                <div class="box-header">
                                                                    <div class="box-title">
                                                                        Payment Methods
                                                                    </div>
                                                                </div>
                                                                <div class="box-body">
                                                                    <div class="mb-4 sm:flex block " role="group" aria-label="Basic radio toggle button group">
                                                                        <input type="radio" class="btn-check " name="btnradio" id="btnradio1">
                                                                        <label class="w-full ti-btn ti-btn-outline-light !text-defaulttextcolor sm:!border-e-0 dark:!text-defaulttextcolor/70 dark:!border-defaultborder/10 hover:!bg-light !rounded-e-none" for="btnradio">C.O.D(Cash on delivery)</label>
                                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                                        <label class="w-full ti-btn ti-btn-outline-light !text-defaulttextcolor dark:!text-defaulttextcolor/70 sm:!border-e-0 dark:!border-defaultborder/10 hover:!bg-light sm:mt-0 mt-1 !rounded-none" for="btnradio">UPI</label>
                                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" checked>
                                                                        <label class="w-full ti-btn ti-btn-light !text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:!border-defaultborder/10 hover:!bg-light !rounded-s-none sm:mt-0 mt-1" for="btnradio">Credit/Debit Card</label>
                                                                    </div>
                                                                    <div class="grid grid-cols-12 gap-4">
                                                                        <div class="xl:col-span-12 col-span-12">
                                                                            <label for="payment-card-number" class="form-label">Card Number</label>
                                                                            <input type="text" class="form-control w-full !rounded-md" id="payment-card-number" placeholder="Card Number" value="1245 - 5447 - 8934 - XXXX">
                                                                        </div>
                                                                        <div class="xl:col-span-12 col-span-12">
                                                                            <label for="payment-card-name" class="form-label">Name On Card</label>
                                                                            <input type="text" class="form-control w-full !rounded-md" id="payment-card-name" placeholder="Name On Card" value="JSON TAYLOR">
                                                                        </div>
                                                                        <div class="xl:col-span-4 col-span-12">
                                                                            <label for="payment-cardexpiry-date" class="form-label">Expiration Date</label>
                                                                            <input type="text" class="form-control w-full !rounded-md" id="payment-cardexpiry-date" placeholder="MM/YY" value="08/2024">
                                                                        </div>
                                                                        <div class="xl:col-span-4 col-span-12">
                                                                            <label for="payment-cvv" class="form-label">CVV</label>
                                                                            <input type="text" class="form-control w-full !rounded-md" id="payment-cvv" placeholder="XXX" value="341">
                                                                        </div>
                                                                        <div class="xl:col-span-4 col-span-12">
                                                                            <label for="payment-security" class="form-label">O.T.P</label>
                                                                            <input type="text" class="form-control w-full !rounded-md" id="payment-security" placeholder="XXXXXX" value="183467">
                                                                            <label for="payment-security" class=" mt-1 !text-success !text-[0.6875rem]"><sup class="top-[0.4em]"><i class="ri-star-s-fill"></i></sup>Do not share O.T.P with anyone</label>
                                                                        </div>
                                                                        <div class="xl:col-span-12 col-span-12">
                                                                            <div class="form-check !flex items-center gap-2 !ps-0">
                                                                                <input class="form-check-input form-checked-success w-full checked:bg-success checked:ring-success hover:checked:bg-success hover:checked:ring-success focus:checked:bg-success focus:checked:ring-success focus:ring-success focus:border-success" type="checkbox" value="" id="payment-card-save" checked>
                                                                                <label class="form-check-label" for="payment-card-save">
                                                                                    Save this card
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer">
                                                                    <div class="grid grid-cols-12 gap-4">
                                                                        <p class="xl:col-span-12 col-span-12 text-[0.9375rem] font-semibold mb-1">Saved Cards :</p>
                                                                        <div class="xl:col-span-6 col-span-12">
                                                                            <div class="form-check payment-card-container border !border-defaultborder dark:!border-defaultborder/10 mb-0 leading-none">
                                                                                <div class="form-check-label">
                                                                                <div class="sm:flex block items-center justify-between">
                                                                                    <div class="me-2 flex items-center leading-none">
                                                                                        <span class="avatar avatar-md me-3">
                                                                                            <img src="{{asset('build/assets/images/ecommerce/19.png')}}" alt="">
                                                                                        </span>
                                                                                        <div class="saved-card-details">
                                                                                            <p class="mb-0 font-semibold">XXXX - XXXX - XXXX - 7646</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <input id="payment-card1" name="payment-cards" type="radio" class="form-check-input !top-[1.5rem]" checked>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-6 col-span-12">
                                                                            <div class="form-check payment-card-container border !border-defaultborder dark:!border-defaultborder/10  mb-0 leading-none">
                                                                                <div class="form-check-label">
                                                                                <div class="sm:flex block items-center justify-between">
                                                                                    <div class="me-2 leading-none flex items-center">
                                                                                        <span class="avatar avatar-md me-3">
                                                                                            <img src="{{asset('build/assets/images/ecommerce/20.png')}}" alt="">
                                                                                        </span>
                                                                                        <div class="saved-card-details">
                                                                                            <p class="mb-0 font-semibold">XXXX - XXXX - XXXX - 9556</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <input id="payment-card2" name="payment-cards" type="radio" class="form-check-input !top-[1.5rem]" checked>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-6 py-4 border-t border-dashed dark:border-defaultborder/10 sm:flex justify-between">
                                                    <button type="button" class="ti-btn ti-btn-danger m-1" id="back-personal-trigger"><i class="ri-user-3-line me-2 align-middle inline-block"></i>Back To Personal Info</button>
                                                    <button type="button" class="ti-btn ti-btn-success m-1" id="continue-payment-trigger">Continue Payment<i class="bi bi-credit-card-2-front align-middle ms-2 inline-block"></i></button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade !border-0 !p-0 hidden" id="delivery-tab-pane" aria-labelledby="delivered-tab" role="tabpanel"
                                                tabindex="0">
                                                <div class="p-[3rem] checkout-payment-success my-3">
                                                    <div class="mb-[2rem]">
                                                        <h5 class="text-success font-semibold text-[1.25rem]">Payment Successful...🤝</h5>
                                                    </div>
                                                    <div class="mb-[2rem] !inline-flex">
                                                        <img src="{{asset('build/assets/images/ecommerce/18.png')}}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="mb-6">
                                                        <p class="mb-1 text-[0.875rem]">You can track your order with Order Id <b>SPK#1FR</b> from <a class="link-success" href="javascript:void(0);"><u class="text-success">Track Order</u></a></p>
                                                        <p class="text-textmuted">Thankyou for shopping with us.</p>
                                                    </div>
                                                    <a href="{{url('products')}}" class="ti-btn bg-success text-white !font-medium">Continue Shopping<i class="bi bi-cart ms-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title me-1">Order Summary <span class="badge bg-primary/10 text-primary !border-b-0 !rounded-full">02</span></div>
                                    </div>
                                    <div class="box-body !p-0">
                                        <ul class="list-group mb-0 !border-0 !rounded-0">
                                            <li class="list-group-item p-4 !border-b !border-dashed !border-defaultborder dark:!border-defaultborder/10 !border-t-0 !border-s-0 !border-e-0">
                                                <div class="flex items-center flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-lg bg-light">
                                                            <img src="{{asset('build/assets/images/ecommerce/01.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">Flower Pot</p>
                                                        <p class="mb-0 text-textmuted text-[0.75rem]">Quantity : 2  <span class="badge bg-success/10 text-success mx-4">30% Off</span></p>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 text-end">
                                                            <a aria-label="anchor" href="javascript:void(0)">
                                                                <i class="ri-close-fill text-[1rem] text-textmuted"></i>
                                                            </a>
                                                        </p>
                                                        <p class="mb-0 text-[0.875rem] font-semibold">$189<span class="ms-1 rtl:me-1 text-textmuted text-[0.6875rem]"><s>$329</s></span></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item p-4 !border-b !border-dashed !border-defaultborder !border-s-0 !border-e-0 dark:!border-defaultborder/10 border-start-0 border-end-0">
                                                <div class="flex items-center flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-lg bg-light">
                                                            <img src="{{asset('build/assets/images/ecommerce/02.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">Wooden Chair</p>
                                                        <p class="mb-0 text-textmuted text-[0.75rem]">Quantity : 1  <span class="badge bg-success/10 text-success mx-4">10% Off</span></p>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 text-end">
                                                            <a aria-label="anchor" href="javascript:void(0)">
                                                                <i class="ri-close-fill text-[1rem] text-textmuted"></i>
                                                            </a>
                                                        </p>
                                                        <p class="mb-0 text-[0.875rem] font-semibold">$129<span class="ms-1 rtl:me-1 text-textmuted text-[0.6875rem]"><s>$139</s></span></p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                            <div class="flex items-center justify-between flex-wrap">
                                                <div class="text-[0.75rem] font-semibold bg-primary/10 text-primary px-2 py-1 rounded-full">SPRUKO25</div>
                                                <div class="text-success">COUPON APPLIED</div>
                                            </div>
                                        </div>
                                        <div class="p-4 border-b border-dashed dark:border-defaultborder/10">
                                            <div class="flex items-center justify-between mb-4">
                                                <div class="text-textmuted opacity-[0.7]">Sub Total</div>
                                                <div class="font-semibold text-[0.875rem]">$318</div>
                                            </div>
                                            <div class="flex items-center justify-between mb-4">
                                                <div class="text-textmuted opacity-[0.7]">Discount</div>
                                                <div class="font-semibold text-[0.875rem] text-success">10% - $31.8</div>
                                            </div>
                                            <div class="flex items-center justify-between mb-4">
                                                <div class="text-textmuted opacity-[0.7]">Delivery Charges</div>
                                                <div class="font-semibold text-[0.875rem] text-danger">- $29</div>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-textmuted opacity-[0.7]">Service Tax (18%)</div>
                                                <div class="font-semibold text-[0.875rem]">- $45.29</div>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <div class="flex items-center justify-between">
                                                <div class="text-[0.9375rem]">Total :</div>
                                                <div class="font-semibold text-[1rem] text-dark"> $1,387</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->
                    </div>

@endsection

@section('scripts')
	
        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- Internal Checkout JS -->
        @vite('resources/assets/js/checkout.js')

@endsection
