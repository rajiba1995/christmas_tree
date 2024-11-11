
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Product</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Ecommerce <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Product 
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
                    
                    <div>
                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-3 xl:col-span-4 lg:col-span-4 md:col-span-12 col-span-12">
                                <div class="box products-navigation-card">
                                    <div class="box-body !p-0">
                                        <div class="p-4 border-b dark:border-defaultborder/10">
                                            <p class="font-semibold mb-0  dark:text-white/50">CATEGORIES</p>
                                            <div class="px-2 py-4 pb-0">
                                                <div class="form-check !mb-2">
                                                    <input class="form-check-input !align-middle " type="checkbox" value=""
                                                        id="electronics">
                                                    <label class="form-check-label" for="electronics">
                                                        Electronics
                                                    </label>
                                                    <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">2,712</span>
                                                </div>
                                                <div class="form-check !mb-2">
                                                    <input class="form-check-input !align-middle" type="checkbox" value=""
                                                        id="Accesories">
                                                    <label class="form-check-label" for="Accesories">
                                                        Accesories
                                                    </label>
                                                    <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">536</span>
                                                </div>
                                                <div class="form-check !mb-2">
                                                    <input class="form-check-input !align-middle" type="checkbox" value="" id="clothing"
                                                        checked>
                                                    <label class="form-check-label" for="clothing">
                                                        Clothing
                                                    </label>
                                                    <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">18,289</span>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input !align-middle" type="checkbox" value="" id="fashion">
                                                    <label class="form-check-label" for="fashion">
                                                        Fashion
                                                    </label>
                                                    <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">3,453</span>
                                                </div>
                                                <div id="hs-show-hide-categories-heading"
                                                    class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="hs-show-hide-categories">
                                                    <div class="form-check mt-1 mb-2">
                                                        <input class="form-check-input !align-middle" type="checkbox" value=""
                                                            id="furniture">
                                                        <label class="form-check-label" for="furniture">
                                                            Furniture
                                                        </label>
                                                        <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">7,165</span>
                                                    </div>
                                                    <div class="form-check !mb-2">
                                                        <input class="form-check-input !align-middle" type="checkbox" value=""
                                                            id="footwear">
                                                        <label class="form-check-label" for="footwear">
                                                            Footwear
                                                        </label>
                                                        <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">5,964</span>
                                                    </div>
                                                    <div class="form-check !mb-2">
                                                        <input class="form-check-input !align-middle" type="checkbox" value=""
                                                            id="mobiles">
                                                        <label class="form-check-label" for="mobiles">
                                                            Mobiles
                                                        </label>
                                                        <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">2,123</span>
                                                    </div>
                                                </div>
                                                <a class="ecommerce-more-link text-success hs-collapse-toggle inline-flex items-center gap-x-2"
                                                    href="javascript:void(0);" id="hs-show-hide-categories"
                                                    data-hs-collapse="#hs-show-hide-categories-heading">
                                                    <span class="hs-collapse-open:hidden">MORE</span>
                                                    <span class="hs-collapse-open:block hidden">MORE</span>
                                                    <svg class="hs-collapse-open:rotate-180 w-2.5 h-2.5" width="16"
                                                        height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <p class="font-semibold mb-0  dark:text-white/50">BRANDS</p>
                                        <div class="px-2 py-4 pb-0">
                                            <div class="form-check !mb-2 ">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="Jimmy-Lolfiger"
                                                    checked>
                                                <label class="form-check-label" for="Jimmy-Lolfiger">
                                                    Jimmy Lolfiger
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">512</span>
                                            </div>
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="dapzem1"
                                                    checked>
                                                <label class="form-check-label" for="dapzem1">
                                                    Dapzem &amp; Co
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">2,186</span>
                                            </div>
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="denim-winjo1"
                                                    checked>
                                                <label class="form-check-label" for="denim-winjo1">
                                                    Denim Winjo
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">734</span>
                                            </div>
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value=""
                                                    id="Louie-Phillippe">
                                                <label class="form-check-label" for="Louie-Phillippe">
                                                    Louie Phillippe
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">16</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input !align-middle" type="checkbox" value=""
                                                    id="garage-clothing">
                                                <label class="form-check-label" for="garage-clothing">
                                                    Garage &amp;Co
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">1,432</span>
                                            </div>
                                            <div id="hs-show-hide-brands-heading"
                                                class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300"
                                                aria-labelledby="hs-show-hide-brands">
                                                <div class="form-check mt-1 mb-2">
                                                    <input class="form-check-input !align-middle" type="checkbox" value="" id="blueberry"
                                                        checked>
                                                    <label class="form-check-label" for="blueberry">
                                                        Blueberry &amp;Co
                                                    </label>
                                                    <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">257</span>
                                                </div>
                                                <div class="form-check !mb-2">
                                                    <input class="form-check-input !align-middle" type="checkbox" value=""
                                                        id="aus-polo-assn" checked>
                                                    <label class="form-check-label" for="aus-polo-assn">
                                                        Aus Polo Assn
                                                    </label>
                                                    <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">1,845</span>
                                                </div>
                                                <div class="form-check !mb-2">
                                                    <input class="form-check-input !align-middle" type="checkbox" value="" id="denim-corp"
                                                        checked>
                                                    <label class="form-check-label" for="denim-corp">
                                                        Denim Corp
                                                    </label>
                                                    <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">5,893</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link text-success hs-collapse-toggle inline-flex items-center gap-x-2"
                                                href="javascript:void(0);" id="hs-show-hide-brands"
                                                data-hs-collapse="#hs-show-hide-brands-heading">
                                                <span class="hs-collapse-open:hidden">MORE</span>
                                                <span class="hs-collapse-open:block hidden">MORE</span>
                                                <svg class="hs-collapse-open:rotate-180 w-2.5 h-2.5" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <p class="font-semibold mb-0  dark:text-white/50">PRICE</p>
                                        <div class="px-2 py-3 pb-0">
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="low">
                                                <label class="form-check-label" for="low">
                                                    $0 - $599
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">22,873</span>
                                            </div>
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="low1" checked>
                                                <label class="form-check-label" for="low1">
                                                    $599 - $1299
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">11,345</span>
                                            </div>
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="medium">
                                                <label class="form-check-label" for="medium">
                                                    $1,299 - $2,199
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">6,987</span>
                                            </div>
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="high">
                                                <label class="form-check-label" for="high">
                                                    $2,199 - $3,499
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">5,236</span>
                                            </div>
                                            <div class="form-check mb-4">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="high1">
                                                <label class="form-check-label" for="high1">
                                                    $3,499 &amp;Above
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">3,735</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 border-b dark:border-defaultborder/10">
                                        <p class="font-semibold mb-0  dark:text-white/50">DISCOUNT</p>
                                        <div class="px-2 py-3 pb-0">
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value=""
                                                    id="Jimmy-Lolfiger1">
                                                <label class="form-check-label" for="Jimmy-Lolfiger1">
                                                    0% - 20%
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">16,563</span>
                                            </div>
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="dapzem2">
                                                <label class="form-check-label" for="dapzem2">
                                                    20% - 40%
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">15,234</span>
                                            </div>
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="denim-winjo">
                                                <label class="form-check-label" for="denim-winjo">
                                                    40% - 60%
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">6,278</span>
                                            </div>
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value=""
                                                    id="Louie-Phillippe1" checked>
                                                <label class="form-check-label" for="Louie-Phillippe1">
                                                    60% - 80%
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">4,531</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input !align-middle" type="checkbox" value=""
                                                    id="garage-clothing1">
                                                <label class="form-check-label" for="garage-clothing1">
                                                    80% - 90%
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">2,405</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <p class="font-semibold mb-0  dark:text-white/50">SIZES</p>
                                        <div class="px-2 py-3 pb-0">
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="extra-small">
                                                <label class="form-check-label" for="extra-small">
                                                    Extra Small (XS)
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">23,156</span>
                                            </div>
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="small">
                                                <label class="form-check-label" for="small">
                                                    Small (SM)
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">15,632</span>
                                            </div>
                                            <div class="form-check !mb-2">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="medium1">
                                                <label class="form-check-label" for="medium1">
                                                    Medium (MD)
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">15,032</span>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input !align-middle" type="checkbox" value="" id="large" checked>
                                                <label class="form-check-label" for="large">
                                                    Large (L)
                                                </label>
                                                <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">7,154</span>
                                            </div>
                                            <div id="hs-show-hide-sizes-heading"
                                                class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300"
                                                aria-labelledby="hs-show-hide-sizes">
                                                <div class="form-check mt-1 mb-2">
                                                    <input class="form-check-input !align-middle" type="checkbox" value=""
                                                        id="extra-large">
                                                    <label class="form-check-label" for="extra-large">
                                                        Extra Large (XL)
                                                    </label>
                                                    <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">5,946</span>
                                                </div>
                                                <div class="form-check !mb-2">
                                                    <input class="form-check-input !align-middle" type="checkbox" value=""
                                                        id="double-extralarge">
                                                    <label class="form-check-label" for="double-extralarge">
                                                        XXL
                                                    </label>
                                                    <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">3,267</span>
                                                </div>
                                                <div class="form-check !mb-2">
                                                    <input class="form-check-input !align-middle" type="checkbox" value=""
                                                        id="triple-extralarge">
                                                    <label class="form-check-label" for="triple-extralarge">
                                                        XXL
                                                    </label>
                                                    <span class="badge bg-light text-textmuted ltr:float-right rtl:float-left">578</span>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link text-success hs-collapse-toggle inline-flex items-center gap-x-2"
                                                href="javascript:void(0);" id="hs-show-hide-sizes"
                                                data-hs-collapse="#hs-show-hide-sizes-heading">
                                                <span class="hs-collapse-open:hidden">MORE</span>
                                                <span class="hs-collapse-open:block hidden">MORE</span>
                                                <svg class="hs-collapse-open:rotate-180 w-2.5 h-2.5" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-9 xl:col-span-8 lg:col-span-8 md:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body">
                                    <div class="">
                                        <div class="hs-dropdown ti-dropdown">
                                        <button id="product-feature" type="button" class="ti-btn ti-btn-light hs-dropdown-toggle">
                                            Features
                                            <svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                        </button>
                                        <div class="hs-dropdown-menu w-72 hidden z-10  ti-dropdown-menu">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Featured
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Newest Items
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Low To High
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                High To Low
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Relevant
                                            </a>
                                        </div>
                                        </div>
                                        <a href="{{url('add-products')}}" class="ti-btn ti-btn-primary-full ltr:float-right rtl:float-left"><i class="ti ti-plus"></i>Add Product</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                        <div class="box product-card">
                                            <div class="box-body">
                                                <a href="{{url('product-details')}}" class="product-image">
                                                    <img src="{{asset('build/assets/images/ecommerce/09.jpg')}}" class="card-img mb-3 rounded-md"
                                                        alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a aria-label="anchor" href="{{url('wish-list')}}" class="wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-cart')}}" class="cart"><i
                                                            class="ri-shopping-cart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-details')}}" class="view"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                                <p
                                                    class="product-name font-semibold mb-0 flex items-center justify-between">
                                                    Dapzem &amp;Co<span class="ltr:float-right rtl:float-left text-warning text-xs">4.2<i
                                                            class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                                </p>
                                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Branded
                                                    hoodie ethnic style</p>
                                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                    <span>$229<span
                                                            class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$1,799</span></span><span
                                                        class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">72%
                                                        off</span>
                                                </p>
                                                <p
                                                    class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $229
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                        <div class="box product-card">
                                            <div class="box-body">
                                                <a href="{{url('product-details')}}" class="product-image">
                                                    <img src="{{asset('build/assets/images/ecommerce/01.jpg')}}" class="card-img mb-3 rounded-md"
                                                        alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a aria-label="anchor" href="{{url('wish-list')}}" class="wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-cart')}}" class="cart"><i
                                                            class="ri-shopping-cart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-details')}}" class="view"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                                <p
                                                    class="product-name font-semibold mb-0 flex items-center justify-between">
                                                    Denim Winjo<span class="ltr:float-right rtl:float-left text-warning text-xs">4.0<i
                                                            class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                                </p>
                                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Vintage
                                                    pure
                                                    leather Jacket</p>
                                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                    <span>$599<span
                                                            class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$2,499</span></span><span
                                                        class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">75%
                                                        off</span>
                                                </p>
                                                <p
                                                    class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $599
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                        <div class="box product-card">
                                            <div class="box-body">
                                                <a href="{{url('product-details')}}" class="product-image">
                                                    <img src="{{asset('build/assets/images/ecommerce/02.jpg')}}" class="card-img mb-3 rounded-md"
                                                        alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a aria-label="anchor" href="{{url('wish-list')}}" class="wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-cart')}}" class="cart"><i
                                                            class="ri-shopping-cart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-details')}}" class="view"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                                <p
                                                    class="product-name font-semibold mb-0 flex items-center justify-between">
                                                    Jimmy Lolfiger<span class="ltr:float-right rtl:float-left text-warning text-xs">4.5<i
                                                            class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                                </p>
                                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Unisex
                                                    jacket
                                                    for men &amp;women</p>
                                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                    <span>$1,199<span
                                                            class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$3,299</span></span><span
                                                        class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">62%
                                                        off</span>
                                                </p>
                                                <p
                                                    class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $1,199
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                        <div class="box product-card">
                                            <div class="box-body">
                                                <a href="{{url('product-details')}}" class="product-image">
                                                    <img src="{{asset('build/assets/images/ecommerce/03.jpg')}}" class="card-img mb-3 rounded-md"
                                                        alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a aria-label="anchor" href="{{url('wish-list')}}" class="wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-cart')}}" class="cart"><i
                                                            class="ri-shopping-cart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-details')}}" class="view"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                                <p
                                                    class="product-name font-semibold mb-0 flex items-center justify-between">
                                                    Bluberry Co.In<span class="ltr:float-right rtl:float-left text-warning text-xs">4.2<i
                                                            class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                                </p>
                                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Full
                                                    sleeve
                                                    white hoodie</p>
                                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                    <span>$349<span
                                                            class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$1,299</span></span><span
                                                        class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">60%
                                                        off</span>
                                                </p>
                                                <p
                                                    class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $349
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                        <div class="box product-card">
                                            <div class="box-body">
                                                <a href="{{url('product-details')}}" class="product-image">
                                                    <img src="{{asset('build/assets/images/ecommerce/04.jpg')}}" class="card-img mb-3 rounded-md"
                                                        alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a aria-label="anchor" href="{{url('wish-list')}}" class="wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-cart')}}" class="cart"><i
                                                            class="ri-shopping-cart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-details')}}" class="view"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                                <p
                                                    class="product-name font-semibold mb-0 flex items-center justify-between">
                                                    Aus
                                                    Polo Assn<span class="ltr:float-right rtl:float-left text-warning text-xs">4.5<i
                                                            class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                                </p>
                                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Snow
                                                    jacket
                                                    with low pockets</p>
                                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                    <span>$1,899<span
                                                            class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$3,799</span></span><span
                                                        class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">50%
                                                        off</span>
                                                </p>
                                                <p
                                                    class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $1,899
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                        <div class="box product-card">
                                            <div class="box-body">
                                                <a href="{{url('product-details')}}" class="product-image">
                                                    <img src="{{asset('build/assets/images/ecommerce/05.jpg')}}" class="card-img mb-3 rounded-md"
                                                        alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a aria-label="anchor" href="{{url('wish-list')}}" class="wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-cart')}}" class="cart"><i
                                                            class="ri-shopping-cart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-details')}}" class="view"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                                <p
                                                    class="product-name font-semibold mb-0 flex items-center justify-between">
                                                    BMW<span class="ltr:float-right rtl:float-left text-warning text-xs">4.1<i
                                                            class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                                </p>
                                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Ethnic
                                                    wear
                                                    jackets form BMW</p>
                                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                    <span>$1,499<span
                                                            class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$2,499</span></span><span
                                                        class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">38%
                                                        off</span>
                                                </p>
                                                <p
                                                    class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $1,499
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                        <div class="box product-card">
                                            <div class="box-body">
                                                <a href="{{url('product-details')}}" class="product-image">
                                                    <img src="{{asset('build/assets/images/ecommerce/06.jpg')}}" class="card-img mb-3 rounded-md"
                                                        alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a aria-label="anchor" href="{{url('wish-list')}}" class="wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-cart')}}" class="cart"><i
                                                            class="ri-shopping-cart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-details')}}" class="view"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                                <p
                                                    class="product-name font-semibold mb-0 flex items-center justify-between">
                                                    Denim Corporation<span class="ltr:float-right rtl:float-left text-warning text-xs">4.4<i
                                                            class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                                </p>
                                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Flap
                                                    pockets
                                                    denim jackets for men</p>
                                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                    <span>$299<span
                                                            class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$399</span></span><span
                                                        class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left text-[0.625rem]">35%
                                                        off</span>
                                                </p>
                                                <p
                                                    class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $299
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                        <div class="box product-card">
                                            <div class="box-body">
                                                <a href="{{url('product-details')}}" class="product-image">
                                                    <img src="{{asset('build/assets/images/ecommerce/07.jpg')}}" class="card-img mb-3 rounded-md"
                                                        alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a aria-label="anchor" href="{{url('wish-list')}}" class="wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-cart')}}" class="cart"><i
                                                            class="ri-shopping-cart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-details')}}" class="view"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                                <p
                                                    class="product-name font-semibold mb-0 flex items-center justify-between">
                                                    Pufa<span class="ltr:float-right rtl:float-left text-warning text-xs">3.8<i
                                                            class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                                </p>
                                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Ergonic
                                                    designed full sleeve coat</p>
                                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                    <span>$2,399<span
                                                            class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$5,699</span></span><span
                                                        class="badge bg-primary/10 text-primary ltr:float-right rtl:float-left text-[0.625rem]">72%
                                                        off</span>
                                                </p>
                                                <p
                                                    class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $2,399
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                        <div class="box product-card">
                                            <div class="box-body">
                                                <a href="{{url('product-details')}}" class="product-image">
                                                    <img src="{{asset('build/assets/images/ecommerce/08.jpg')}}" class="card-img mb-3 rounded-md"
                                                        alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a aria-label="anchor" href="{{url('wish-list')}}" class="wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-cart')}}" class="cart"><i
                                                            class="ri-shopping-cart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-details')}}" class="view"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                                <p
                                                    class="product-name font-semibold mb-0 flex items-center justify-between">
                                                    Louie Phillippe<span class="ltr:float-right rtl:float-left text-warning text-xs">4.0<i
                                                            class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                                </p>
                                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Ergonic
                                                    green
                                                    colored full sleeve jacket</p>
                                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                    <span>$1,899<span
                                                            class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$3,299</span></span><span
                                                        class="badge bg-primary/10 text-primary ltr:float-right rtl:float-left text-[0.625rem]">60%
                                                        off</span>
                                                </p>
                                                <p
                                                    class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $1,899
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                        <div class="box product-card">
                                            <div class="box-body">
                                                <a href="{{url('product-details')}}" class="product-image">
                                                    <img src="{{asset('build/assets/images/ecommerce/09.jpg')}}" class="card-img mb-3 rounded-md"
                                                        alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a aria-label="anchor" href="{{url('wish-list')}}" class="wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-cart')}}" class="cart"><i
                                                            class="ri-shopping-cart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-details')}}" class="view"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                                <p
                                                    class="product-name font-semibold mb-0 flex items-center justify-between">
                                                    Denim Corp<span class="ltr:float-right rtl:float-left text-warning text-xs">4.1<i
                                                            class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                                </p>
                                                <p class="product-description text-[.6875rem] text-textmuted mb-2">beautiful
                                                    brown colored snow jacket</p>
                                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                    <span>$2,499<span
                                                            class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$4,999</span></span><span
                                                        class="badge bg-primary/10 text-primary ltr:float-right rtl:float-left text-[0.625rem]">50%
                                                        off</span>
                                                </p>
                                                <p
                                                    class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $2,499
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                        <div class="box product-card">
                                            <div class="box-body">
                                                <a href="{{url('product-details')}}" class="product-image">
                                                    <img src="{{asset('build/assets/images/ecommerce/10.jpg')}}" class="card-img mb-3 rounded-md"
                                                        alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a aria-label="anchor" href="{{url('wish-list')}}" class="wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-cart')}}" class="cart"><i
                                                            class="ri-shopping-cart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-details')}}" class="view"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                                <p
                                                    class="product-name font-semibold mb-0 flex items-center justify-between">
                                                    Garage &amp;Co<span class="ltr:float-right rtl:float-left text-warning text-xs">4.3<i
                                                            class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                                </p>
                                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Full
                                                    sleeve
                                                    sweat shirt</p>
                                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                    <span>$249<span
                                                            class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$1,299</span></span><span
                                                        class="badge bg-primary/10 text-primary  ltr:float-right rtl:float-left text-[0.625rem]">70%
                                                        off</span>
                                                </p>
                                                <p
                                                    class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $249
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-4 sm:col-span-6 col-span-12">
                                        <div class="box product-card">
                                            <div class="box-body">
                                                <a href="{{url('product-details')}}" class="product-image">
                                                    <img src="{{asset('build/assets/images/ecommerce/11.jpg')}}" class="card-img mb-3 rounded-md"
                                                        alt="...">
                                                </a>
                                                <div class="product-icons">
                                                    <a aria-label="anchor" href="{{url('wish-list')}}" class="wishlist"><i
                                                            class="ri-heart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-cart')}}" class="cart"><i
                                                            class="ri-shopping-cart-line"></i></a>
                                                    <a aria-label="anchor" href="{{url('product-details')}}" class="view"><i
                                                            class="ri-eye-line"></i></a>
                                                </div>
                                                <p
                                                    class="product-name font-semibold mb-0 flex items-center justify-between">
                                                    Blueberry &amp;Co<span class="ltr:float-right rtl:float-left text-warning text-xs">4.0<i
                                                            class="ri-star-s-fill align-middle ms-1 inline-block"></i></span>
                                                </p>
                                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Light
                                                    colored
                                                    sweater form blueberry</p>
                                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between">
                                                    <span>$499<span
                                                            class="text-textmuted line-through ms-1 inline-block opacity-[0.6]">$799</span></span><span
                                                        class="badge bg-primary/10  text-primary ltr:float-right rtl:float-left text-[0.625rem]">32%
                                                        off</span>
                                                </p>
                                                <p
                                                    class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $499
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Pagination -->
                    <ul class="ti-pagination !px-3 !py-[0.375rem] !text-[1rem] !mb-4 flex justify-end">
                        <li class="page-item disabled">
                            <a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">3</a></li>
                        <li class="page-item">
                            <a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">Next</a>
                        </li>
                    </ul>
                    <!-- Pagination -->

@endsection

@section('scripts')
	
        <!-- noUiSlider JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>

        <!-- Internal Products JS -->
        <script src="{{asset('build/assets/products.js')}}"></script>

@endsection
