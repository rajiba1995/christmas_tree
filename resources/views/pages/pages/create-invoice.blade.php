
@extends('layouts.master')

@section('styles')

        <!-- flatpickr Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Create Invoice</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Invoice <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Create Invoice 
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
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box">
                                <div class="box-header xxl:!flex !block">
                                    <div class="h5 mb-0 sm:flex block items-center">
                                        <div>
                                            <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="" class="w-10 h-10">
                                        </div>
                                        <div class="sm:ms-2 ms-0 sm:mt-0 mt-2">
                                            <input type="text" class="form-control !text-[.8rem] !py-1 !px-[0.8rem] !bg-light !rounded-md" placeholder="Invoice Title" value="INV TITLE">
                                        </div>
                                        <div class="mx-2">:</div>
                                        <div class="sm:mt-0">
                                            <input type="text" class="form-control !text-[.8rem] !py-1 !px-[0.8rem] !bg-light !rounded-md" placeholder="Invoice ID" value="INV ID">
                                        </div>
                                    </div>
                                    <div class="ms-auto xxl:!mt-0 !mt-2">
                                        <button type="button" class="ti-btn !py-1 !px-2 bg-primary text-white !text-[0.75rem] me-2">Save As PDF<i class="ri-file-pdf-line ms-1 align-middle inline-block"></i></button>
                                        <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-secondary me-2"><i class="bi bi-plus-lg"></i></button>
                                        <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-success me-2"><i class="bi bi-download"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                                    <p class="font-semibold mb-2">
                                                        Billing From :
                                                    </p>
                                                    <div class="grid grid-cols-12 col-span-12 gap-2">
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control w-full !rounded-md !bg-light" id="Company-Name" placeholder="Company Name" value="SPRUKO TECHNOLOGIES">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <textarea class="form-control w-full !rounded-md !bg-light" id="company-address" placeholder="Enter Address" rows="3"></textarea>
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control w-full !rounded-md !bg-light" id="company-mail" placeholder="Company Email" value="">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control w-full !rounded-md !bg-light" id="company-phone" placeholder="Phone Number" value="">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <textarea class="form-control w-full !rounded-md !bg-light" id="invoice-subject" placeholder="Subject" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 xl:flex hidden"></div>
                                                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12 sm:mt-0 mt-4">
                                                    <p class="font-semibold mb-2">
                                                        Billing To :
                                                    </p>
                                                    <div class="grid grid-cols-12 gap-2">
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control w-full !rounded-md !bg-light" id="customer-Name" placeholder="Customer Name" value="Json Taylor">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <textarea class="form-control w-full !rounded-md !bg-light" id="customer-address" placeholder="Enter Address" rows="3"></textarea>
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control w-full !rounded-md !bg-light" id="customer-mail" placeholder="Customer Email" value="">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control w-full !rounded-md !bg-light" id="customer-phone" placeholder="Phone Number" value="">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <input type="text" class="form-control w-full !rounded-md !bg-light" id="zip-code" placeholder="Zip Code" value="">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12 choices-control">
                                                            <p class="font-semibold mb-2 mt-2">
                                                                Currency :
                                                            </p>
                                                            <select class="form-control w-full !rounded-md !bg-light" data-trigger name="invoice-currency" id="invoice-currency">
                                                                <option value="">Select Currency</option>
                                                                <option value="Armani">USD - (United States Dollar)</option>
                                                                <option value="Lacoste">BHD - (Bahraini Dinar)</option>
                                                                <option value="Puma">KWD - (Kuwaiti Dinar)</option>
                                                                <option value="Spykar">CHF - (Swiss Franc)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <label for="invoice-number" class="form-label">Invoice ID</label>
                                            <input type="text" class="form-control w-full !rounded-md !bg-light" id="invoice-number" placeholder="Inv No" value="#SPK120219890">
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <label for="invoice-date-issued" class="form-label">Date Issued</label>
                                            <input type="text" class="form-control w-full !rounded-md !bg-light" id="invoice-date-issued" placeholder="Choose date">
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <label for="invoice-date-due" class="form-label">Due Date</label>
                                            <input type="text" class="form-control w-full !rounded-md !bg-light" id="invoice-date-due" placeholder="Choose date">
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <label for="invoice-due-amount" class="form-label">Due Amount</label>
                                            <input type="text" class="form-control w-full !rounded-md !bg-light" id="invoice-due-amount" placeholder="Enter Amount" value="$12,983.78">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="table-responsive">
                                                <table class="table whitespace-nowrap border dark:border-defaultborder/10 mt-3">
                                                    <thead>
                                                        <tr>
                                                            <th scope="row">PRODUCT NAME</th>
                                                            <th scope="row">DESCRIPTION</th>
                                                            <th scope="row" class="min-w-[120px]">QUANTITY</th>
                                                            <th scope="row">PRICE PER UNIT</th>
                                                            <th scope="row">TOTAL</th>
                                                            <th scope="row">ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                            <td>
                                                                <input type="text" class="form-control !w-auto !rounded-md !bg-light" placeholder="Enter Product Name">
                                                            </td>
                                                            <td>
                                                                <textarea rows="1" class="form-control !w-auto !rounded-md !bg-light" placeholder="Enter Description"></textarea>
                                                            </td>
                                                            <td class="invoice-quantity-container">
                                                                <div class="py-2 px-3 bg-light border border-gray-200 rounded-sm  dark:border-white/10" data-hs-input-number>
                                                                    <div class="w-full flex justify-between items-center gap-x-3">
                                                                    <div class="flex items-center gap-x-1.5">
                                                                        <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-bg-white  disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                                                        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                                                        </button>
                                                                        <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" type="text" value="0" data-hs-input-number-input>
                                                                        <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-bg-white  disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                                                        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                                                        </button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><input class="form-control !w-auto !rounded-md !bg-light" placeholder="" type="text" value="$60.00"></td>
                                                            <td><input class="form-control !w-auto !rounded-md !bg-light" placeholder="" type="text" value="$120.00"></td>
                                                            <td>
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-danger"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                            <td>
                                                                <input type="text" class="form-control !w-auto !rounded-md !bg-light" placeholder="Enter Product Name">
                                                            </td>
                                                            <td>
                                                                <textarea rows="1" class="form-control !w-auto !rounded-md !bg-light" placeholder="Enter Description"></textarea>
                                                            </td>
                                                            <td class="invoice-quantity-container">
                                                                <div class="py-2 px-3 bg-light border border-gray-200 rounded-sm  dark:border-white/10" data-hs-input-number>
                                                                    <div class="w-full flex justify-between items-center gap-x-3">
                                                                    <div class="flex items-center gap-x-1.5">
                                                                        <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-white  disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-decrement>
                                                                        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                                                                        </button>
                                                                        <input class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 dark:text-white" type="text" value="0" data-hs-input-number-input>
                                                                        <button type="button" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-white  disabled:pointer-events-none dark:bg-bodybg dark:border-white/10 dark:text-white dark:hover:bg-bodybg/80 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-input-number-increment>
                                                                        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                                                                        </button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><input class="form-control !w-auto !rounded-md !bg-light" placeholder="Enter Amount" type="text"></td>
                                                            <td><input class="form-control !w-auto !rounded-md !bg-light" placeholder="Enter Amount" type="text"></td>
                                                            <td>
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-danger"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="6" class="border-bottom-0"><a class="ti-btn ti-btn-light !font-medium" href="javascript:void(0);"><i class="bi bi-plus-lg"></i> Add Product</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"></td>
                                                            <td colspan="2">
                                                                <table class="table table-sm whitespace-nowrap mb-0 table-borderless dark:border-defaultborder/10">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <div class="font-semibold">Sub Total :</div>
                                                                            </th>
                                                                            <td>
                                                                                <input type="text" class="form-control w-full !rounded-md !bg-light invoice-amount-input" placeholder="Enter Amount" value="$1209.89">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <div class="font-semibold">Avail Discount :</div>
                                                                            </th>
                                                                            <td>
                                                                                <input type="text" class="form-control w-full !rounded-md !bg-light invoice-amount-input" placeholder="Enter Amount" value="$29.98">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <div class="font-semibold">Coupon Discount <span class="text-success">(10%)</span> :</div>
                                                                            </th>
                                                                            <td>
                                                                                <input type="text" class="form-control w-full !rounded-md !bg-light invoice-amount-input" placeholder="Enter Amount" value="$129.00">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <div class="font-semibold">Vat <span class="text-danger">(20%)</span> :</div>
                                                                            </th>
                                                                            <td>
                                                                                <input type="text" class="form-control w-full !rounded-md !bg-light invoice-amount-input" placeholder="Enter Amount" value="$258.00">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <div class="font-semibold">Due Till Date :</div>
                                                                            </th>
                                                                            <td>
                                                                                <input type="text" class="form-control w-full !rounded-md !bg-light invoice-amount-input" placeholder="Enter Amount" value="$0.00">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <div class="text-sm font-semibold">Total :</div>
                                                                            </th>
                                                                            <td>
                                                                                <input type="text" class="form-control w-full !rounded-md !bg-light invoice-amount-input" placeholder="Enter Amount" value="$1,071.89">
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <div>
                                                <label for="invoice-note" class="form-label">Note:</label>
                                                <textarea class="form-control w-full !rounded-md !bg-light" id="invoice-note" rows="3">Once the invoice has been verified by the accounts payable team and recorded, the only task left is to send it for approval before releasing the payment</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer text-end">
                                    <button type="button" class="ti-btn ti-btn-light sm:me-1 !mb-2 sm:!mb-0"><i class="ri-eye-line me-1 align-middle inline-block"></i>Preview</button>
                                    <button type="button" class="ti-btn bg-primary text-white !mb-0">Send Invoice <i class="ri-send-plane-2-line ms-1 align-middle inline-block"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Mode Of Payment
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check " name="btnradio" id="btnradio2">
                                                <label class="ti-btn ti-btn-outline-light dark:text-defaulttextcolor/70 dark:!border-defaultborder/10 !border-e-0  sm:mt-0 mt-1 !rounded-e-none hover:!bg-light " for="btnradio2">UPI</label>
                                                <input type="radio" class="btn-check " name="btnradio" id="btnradio3" checked>
                                                <label class="ti-btn ti-btn-light sm:mt-0 mt-1 dark:text-defaulttextcolor/70 dark:!border-defaultborder/10 !rounded-s-none hover:!bg-light" for="btnradio3">Credit/Debit Card</label>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <input type="text" class="form-control w-full !rounded-md !bg-light" placeholder="Card Holder Name">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <input type="text" class="form-control w-full !rounded-md !bg-light" id="invoice-payment-cardname" placeholder="Card Number" value="1234 5678 9087 XXXX">
                                            <label for="invoice-payment-cardname" class="form-label mb-0"><a class="text-danger text-[0.6875rem]" href="javascript:void(0);">Enter valid card number*</a></label>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <input type="text" class="form-control w-full !rounded-md !bg-light mb-2" placeholder="Enter OTP">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="alert alert-success !border-success/10" role="alert">
                                                Please Make sure to pay the invoice bill within 30 days.
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
        
        <!-- Date & Time Picker JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- Internal Create Invoice JS -->
        @vite('resources/assets/js/create-invoice.js')

@endsection