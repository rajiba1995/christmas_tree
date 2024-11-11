
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Invoice Details</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Invoice <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Invoice Details 
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
                                <div class="box-header md:flex block">
                                    <div class="h5 mb-0 sm:flex bllock items-center">
                                        <div class="avatar avatar-sm">
                                            <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="">
                                        </div>
                                        <div class="sm:ms-2 ms-0 sm:mt-0 mt-2">
                                            <div class="h6 font-semibold mb-0 ">SHOPPING INVOICE : <span class="text-primary">#8140-2099</span></div>
                                        </div>
                                    </div>
                                    <div class="ms-auto md:mt-0 mt-2">
                                        <button type="button" class="ti-btn !py-1 !px-2  text-white !text-[0.75rem] bg-secondary me-1" onclick="javascript:window.print();">Print<i class="ri-printer-line ms-1 align-middle inline-block"></i></button>
                                        <button type="button" class="ti-btn !py-1 !px-2 text-white !text-[0.75rem] bg-primary">Save As PDF<i class="ri-file-pdf-line ms-1 align-middle inline-block"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="grid grid-cols-12 sm:gap-x-6 gap-y-6">
                                                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                                    <p class="text-textmuted mb-2">
                                                        Billing From :
                                                    </p>
                                                    <p class="font-bold mb-1">
                                                        SPRUKO TECHNOLOGIES
                                                    </p>
                                                    <p class="mb-1 text-textmuted">
                                                        Mig-1-11,Manroe street
                                                    </p>
                                                    <p class="mb-1 text-textmuted">
                                                        Georgetown,Washington D.C,USA,200071
                                                    </p>
                                                    <p class="mb-1 text-textmuted">
                                                        sprukotrust.Valex@gmail.com
                                                    </p>
                                                    <p class="mb-1 text-textmuted">
                                                        (555) 555-1234
                                                    </p>
                                                    <p class="text-textmuted">For more information check for <a href="javascript:void(0);" class="text-primary font-semibold"><u>GSTIN</u></a> Details.</p>
                                                </div>
                                                <div class="xl:col-span-4 xl:flex hidden"></div>
                                                <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12 sm:ms-auto sm:mt-0 mt-4">
                                                    <p class="text-textmuted mb-2">
                                                        Billing To :
                                                    </p>
                                                    <p class="font-bold mb-1">
                                                        Json Taylor
                                                    </p>
                                                    <p class="text-textmuted mb-1">
                                                        Lig-22-1,20 Covington Place
                                                    </p>
                                                    <p class="text-textmuted mb-1">
                                                        New Castle,de, United States,19320
                                                    </p>
                                                    <p class="text-textmuted mb-1">
                                                        jsontaylor2134@gmail.com
                                                    </p>
                                                    <p class="text-textmuted">
                                                        +1 202-918-2132
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <p class="font-semibold text-textmuted mb-1">Invoice ID :</p>
                                            <p class="text-[.9375rem] mb-1">#SPK120219890</p>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <p class="font-semibold text-textmuted mb-1">Date Issued :</p>
                                            <p class="text-[.9375rem] mb-1">29,Nov 2022 - <span class="text-textmuted text-xs">12:42PM</span></p>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <p class="font-semibold text-textmuted mb-1">Due Date :</p>
                                            <p class="text-[.9375rem] mb-1">29,Dec 2022</p>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12">
                                            <p class="font-semibold text-textmuted mb-1">Due Amount :</p>
                                            <p class="text-[1rem] mb-1 font-semibold">$2,570.42</p>
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="table-responsive">
                                                <table class="table nowrap whitespace-nowrap border dark:border-defaultborder/10 mt-4 min-w-full">
                                                    <thead>
                                                        <tr>
                                                            <th scope="row" class="text-start">BRAND NAME</th>
                                                            <th scope="row" class="text-start">DESCRIPTION</th>
                                                            <th scope="row" class="text-start">QUANTITY</th>
                                                            <th scope="row" class="text-start">PRICE PER UNIT</th>
                                                            <th scope="row" class="text-start">TOTAL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                            <td>
                                                                <div class="font-semibold">
                                                                    Dapzem &amp; Co (Sweatshirt)
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-textmuted">
                                                                    Branded hoodie ethnic style
                                                                </div>
                                                            </td>
                                                            <td class="product-quantity-container">
                                                                2
                                                            </td>
                                                            <td>
                                                                $60
                                                            </td>
                                                            <td>
                                                                $120
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                            <td>
                                                                <div class="font-semibold">
                                                                    Denim Winjo (Jacket)
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-textmuted">
                                                                    Vintage pure leather Jacket
                                                                </div>
                                                            </td>
                                                            <td class="product-quantity-container">
                                                                1
                                                            </td>
                                                            <td>
                                                                $249
                                                            </td>
                                                            <td>
                                                                $249
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                            <td>
                                                                <div class="font-semibold">
                                                                    Jimmy Lolfiger (Winter Coat)
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-textmuted">
                                                                    Unisex jacket for men &amp; women
                                                                </div>
                                                            </td>
                                                            <td class="product-quantity-container">
                                                            1
                                                            </td>
                                                            <td>
                                                                $499
                                                            </td>
                                                            <td>
                                                                $499
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                            <td>
                                                                <div class="font-semibold">
                                                                    Blueberry &amp; Co
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-textmuted">
                                                                    Light colored sweater form blueberry
                                                                </div>
                                                            </td>
                                                            <td class="product-quantity-container">
                                                                3
                                                            </td>
                                                            <td>
                                                                $299
                                                            </td>
                                                            <td>
                                                                $897
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                            <td>
                                                                <div class="font-semibold">
                                                                    Denim Corporation
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-textmuted">
                                                                    Flap pockets denim jackets for men
                                                                </div>
                                                            </td>
                                                            <td class="product-quantity-container">
                                                                1
                                                            </td>
                                                            <td>
                                                                $599
                                                            </td>
                                                            <td>
                                                                $599
                                                            </td>
                                                        </tr>
                                                        <tr class="border border-defaultborder dark:border-defaultborder/10">
                                                            <td colspan="3"></td>
                                                            <td colspan="2">
                                                                <table class="table table-sm whitespace-nowrap mb-0 table-borderless w-full">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <p class="mb-0">Sub Total :</p>
                                                                            </th>
                                                                            <td>
                                                                                <p class="mb-0 font-semibold text-[.9375rem]">$2,364</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <p class="mb-0">Avail Discount :</p>
                                                                            </th>
                                                                            <td>
                                                                                <p class="mb-0 font-semibold text-[.9375rem]">$29.98</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <p class="mb-0">Coupon Discount <span class="text-success">(10%)</span> :</p>
                                                                            </th>
                                                                            <td>
                                                                                <p class="mb-0 font-semibold text-[.9375rem]">$236.40</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <p class="mb-0">Vat <span class="text-danger">(20%)</span> :</p>
                                                                            </th>
                                                                            <td>
                                                                                <p class="mb-0 font-semibold text-[.9375rem]">$472.80</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <p class="mb-0">Due Till Date :</p>
                                                                            </th>
                                                                            <td>
                                                                                <p class="mb-0 font-semibold text-[.9375rem]">$0</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <p class="mb-0 text-[.875rem]">Total :</p>
                                                                            </th>
                                                                            <td>
                                                                                <p class="mb-0 font-semibold text-[1rem] text-success">$2,570.42</p>
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
                                    <button type="button" class="ti-btn bg-success text-white">Download <i class="ri-download-2-line ms-1 align-middle"></i></button>
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
                                            <p class="text-[.875rem] font-semibold mb-4">
                                                Credit/Debit Card
                                            </p>
                                            <p class="mb-4">
                                                <span class="font-semibold text-textmuted text-[0.75rem]">Name On Card :</span> Json Taylor
                                            </p>
                                            <p class="mb-4">
                                                <span class="font-semibold text-textmuted text-[0.75rem]">Card Number :</span> 1234 5678 9087 XXXX
                                            </p>
                                            <p class="mb-4">
                                                <span class="font-semibold text-textmuted text-[0.75rem]">Total Amount :</span> <span class="text-success font-semibold text-[.875rem]">$2570.42</span>
                                            </p>
                                            <p class="mb-4">
                                                <span class="font-semibold text-textmuted text-[0.75rem]">Due Date :</span> 29,Dec 2022 - <span class="text-danger text-[0.75rem] font-semibold">30 days due</span>
                                            </p>
                                            <p class="mb-4">
                                                <span class="font-semibold text-textmuted text-[0.75rem]">Invoice Status : <span class="badge bg-warning/10 text-warning">Pending</span></span>
                                            </p>
                                            <div class="alert alert-success" role="alert">
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
	


@endsection
