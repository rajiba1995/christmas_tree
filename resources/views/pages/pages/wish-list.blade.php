
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Wishlist</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Ecommerce <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Wishlist 
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
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-body sm:flex items-center justify-between">
                                <div class="text-[.9375rem] mb-2 sm:mb-0">Total <span class="badge bg-success text-white">12</span> products are wishlisted</div>
                                <div class="flex" role="search">
                                    <input class="form-control form-control-sm me-2 !rounded-sm" type="search" placeholder="Search" aria-label="Search">
                                    <button class="ti-btn !py-1 !px-2 !text-[0.75rem] !mb-0 !font-medium ti-btn-light" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box product-card">
                            <div class="box-body">
                                <a href="javascript:void(0)" class="product-image">
                                    <img src="{{asset('build/assets/images/ecommerce/01.jpg')}}" class="card-img mb-3 rounded-sm !w-full" alt="...">
                                </a>
                                <div class="product-icons"> <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-fill"></i></a> </div>
                                <p class="product-name font-semibold mb-0 flex items-center justify-between">Flower Pot<span class="ltr:float-right rtl:float-left text-warning text-xs">4.2<i class="ri-star-s-fill align-middle ms-1"></i></span></p>
                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Branded hoodie ethnic style</p>
                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between"><span>$229<span class="text-textmuted line-through ms-1 opacity-[0.6] inline-block">$1,799</span></span><span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left !text-[.625rem]">72% off</span></p>
                                <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $229
                                </p>
                            </div>
                            <div class="box-footer text-center ">
                                <a href="{{url('product-cart')}}" class="ti-btn ti-btn-primary m-1 !font-medium"><i class="ri-shopping-cart-2-line me-1 align-middle inline-block "></i>Move To Cart</a>
                                <a href="{{url('product-details')}}" class="ti-btn ti-btn-success m-1 !font-medium"><i class="ri-eye-line me-1 align-middle inline-block "></i>View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box product-card">
                            <div class="box-body">
                                <a href="javascript:void(0);" class="product-image">
                                    <img src="{{asset('build/assets/images/ecommerce/02.jpg')}}" class="card-img mb-3 rounded-sm !w-full" alt="...">
                                </a>
                                <div class="product-icons"> <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-fill"></i></a> </div>
                                <p class="product-name font-semibold mb-0 flex items-center justify-between">Wooden Chair<span class="ltr:float-right rtl:float-left text-warning text-xs">4.0<i class="ri-star-s-fill align-middle ms-1"></i></span></p>
                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Vintage pure leather Jacket</p>
                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between"><span>$599<span class="text-textmuted line-through ms-1 opacity-[0.6] inline-block">$2,499</span></span><span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left !text-[.625rem]">75% off</span></p>
                                <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $599</p>
                            </div>
                            <div class="box-footer text-center ">
                                <a href="{{url('product-cart')}}" class="ti-btn ti-btn-primary m-1 !font-medium"><i class="ri-shopping-cart-2-line me-1 align-middle inline-block "></i>Move To Cart</a>
                                <a href="{{url('product-details')}}" class="ti-btn ti-btn-success m-1 !font-medium"><i class="ri-eye-line me-1 align-middle inline-block "></i>View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box product-card">
                            <div class="box-body">
                                <a href="javascript:void(0);" class="product-image">
                                    <img src="{{asset('build/assets/images/ecommerce/03.jpg')}}" class="card-img mb-3 rounded-sm !w-full" alt="...">
                                </a>
                                <div class="product-icons"> <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-fill"></i></a> </div>
                                <p class="product-name font-semibold mb-0 flex items-center justify-between">Jimmy LRed Shoe<span class="ltr:float-right rtl:float-left text-warning text-xs">4.5<i class="ri-star-s-fill align-middle ms-1"></i></span></p>
                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Unisex jacket for men &amp; women</p>
                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between"><span>$1,199<span class="text-textmuted line-through ms-1 opacity-[0.6] inline-block">$3,299</span></span><span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left !text-[.625rem]">62% off</span></p>
                                <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $1,199</p>
                            </div>
                            <div class="box-footer text-center ">
                                <a href="{{url('product-cart')}}" class="ti-btn ti-btn-primary m-1 !font-medium"><i class="ri-shopping-cart-2-line me-1 align-middle inline-block "></i>Move To Cart</a>
                                <a href="{{url('product-details')}}" class="ti-btn ti-btn-success m-1 !font-medium"><i class="ri-eye-line me-1 align-middle inline-block "></i>View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box product-card">
                            <div class="box-body">
                                <a href="javascript:void(0);" class="product-image">
                                    <img src="{{asset('build/assets/images/ecommerce/04.jpg')}}" class="card-img mb-3 rounded-sm !w-full" alt="...">
                                </a>
                                <div class="product-icons"> <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-fill"></i></a> </div>
                                <p class="product-name font-semibold mb-0 flex items-center justify-between">Bluberry Blutooth<span class="ltr:float-right rtl:float-left text-warning text-xs">4.2<i class="ri-star-s-fill align-middle ms-1"></i></span></p>
                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Full sleeve white hoodie</p>
                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between"><span>$349<span class="text-textmuted line-through ms-1 opacity-[0.6] inline-block">$1,299</span></span><span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left !text-[.625rem]">60% off</span></p>
                                <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $349</p>
                            </div>
                            <div class="box-footer text-center ">
                                <a href="{{url('product-cart')}}" class="ti-btn ti-btn-primary m-1 !font-medium"><i class="ri-shopping-cart-2-line me-1 align-middle inline-block "></i>Move To Cart</a>
                                <a href="{{url('product-details')}}" class="ti-btn ti-btn-success m-1 !font-medium"><i class="ri-eye-line me-1 align-middle inline-block "></i>View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box product-card">
                            <div class="box-body">
                                <a href="javascript:void(0);" class="product-image">
                                    <img src="{{asset('build/assets/images/ecommerce/05.jpg')}}" class="card-img mb-3 rounded-sm !w-full" alt="...">
                                </a>
                                <div class="product-icons"> <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-fill"></i></a> </div>
                                <p class="product-name font-semibold mb-0 flex items-center justify-between">10mm lens Camera<span class="ltr:float-right rtl:float-left text-warning text-xs">4.5<i class="ri-star-s-fill align-middle ms-1"></i></span></p>
                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Snow jacket with low pockets</p>
                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between"><span>$1,899<span class="text-textmuted line-through ms-1 opacity-[0.6] inline-block">$3,799</span></span><span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left !text-[.625rem]">50% off</span></p>
                                <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $1,899</p>
                            </div>
                            <div class="box-footer text-center ">
                                <a href="{{url('product-cart')}}" class="ti-btn ti-btn-primary m-1 !font-medium"><i class="ri-shopping-cart-2-line me-1 align-middle inline-block "></i>Move To Cart</a>
                                <a href="{{url('product-details')}}" class="ti-btn ti-btn-success m-1 !font-medium"><i class="ri-eye-line me-1 align-middle inline-block "></i>View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box product-card">
                            <div class="box-body">
                                <a href="javascript:void(0);" class="product-image">
                                    <img src="{{asset('build/assets/images/ecommerce/06.jpg')}}" class="card-img mb-3 rounded-sm !w-full" alt="...">
                                </a>
                                <div class="product-icons"> <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-fill"></i></a> </div>
                                <p class="product-name font-semibold mb-0 flex items-center justify-between">Ladies Bag<span class="ltr:float-right rtl:float-left text-warning text-xs">4.1<i class="ri-star-s-fill align-middle ms-1"></i></span></p>
                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Ethnic wear jackets form BMW</p>
                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between"><span>$1,499<span class="text-textmuted line-through ms-1 opacity-[0.6] inline-block">$2,499</span></span><span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left !text-[.625rem]">38% off</span></p>
                                <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $1,499</p>
                            </div>
                            <div class="box-footer text-center ">
                                <a href="{{url('product-cart')}}" class="ti-btn ti-btn-primary m-1 !font-medium"><i class="ri-shopping-cart-2-line me-1 align-middle inline-block "></i>Move To Cart</a>
                                <a href="{{url('product-details')}}" class="ti-btn ti-btn-success m-1 !font-medium"><i class="ri-eye-line me-1 align-middle inline-block "></i>View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box product-card">
                            <div class="box-body">
                                <a href="javascript:void(0);" class="product-image">
                                    <img src="{{asset('build/assets/images/ecommerce/07.jpg')}}" class="card-img mb-3 rounded-sm !w-full" alt="...">
                                </a>
                                <div class="product-icons"> <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-fill"></i></a> </div>
                                <p class="product-name font-semibold mb-0 flex items-center justify-between">HP Laptop<span class="ltr:float-right rtl:float-left text-warning text-xs">4.4<i class="ri-star-s-fill align-middle ms-1"></i></span></p>
                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Flap pockets denim jackets for men</p>
                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between"><span>$299<span class="text-textmuted line-through ms-1 opacity-[0.6] inline-block">$399</span></span><span class="badge bg-secondary/10 text-secondary ltr:float-right rtl:float-left !text-[.625rem]">35% off</span></p>
                                <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $299</p>
                            </div>
                            <div class="box-footer text-center ">
                                <a href="{{url('product-cart')}}" class="ti-btn ti-btn-primary m-1 !font-medium"><i class="ri-shopping-cart-2-line me-1 align-middle inline-block "></i>Move To Cart</a>
                                <a href="{{url('product-details')}}" class="ti-btn ti-btn-success m-1 !font-medium"><i class="ri-eye-line me-1 align-middle inline-block "></i>View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box product-card">
                            <div class="box-body">
                                <a href="javascript:void(0);" class="product-image">
                                    <img src="{{asset('build/assets/images/ecommerce/08.jpg')}}" class="card-img mb-3 rounded-sm !w-full" alt="...">
                                </a>
                                <div class="product-icons"> <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-fill"></i></a> </div>
                                <p class="product-name font-semibold mb-0 flex items-center justify-between">Boys Watch<span class="ltr:float-right rtl:float-left text-warning text-xs">3.8<i class="ri-star-s-fill align-middle ms-1"></i></span></p>
                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Ergonic designed full sleeve coat</p>
                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between"><span>$2,399<span class="text-textmuted line-through ms-1 opacity-[0.6] inline-block">$5,699</span></span><span class="badge bg-primary/10 text-primary ltr:float-right rtl:float-left !text-[.625rem]">72% off</span></p>
                                <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $2,399</p>
                            </div>
                            <div class="box-footer text-center ">
                                <a href="{{url('product-cart')}}" class="ti-btn ti-btn-primary m-1 !font-medium"><i class="ri-shopping-cart-2-line me-1 align-middle inline-block "></i>Move To Cart</a>
                                <a href="{{url('product-details')}}" class="ti-btn ti-btn-success m-1 !font-medium"><i class="ri-eye-line me-1 align-middle inline-block "></i>View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box product-card">
                            <div class="box-body">
                                <a href="javascript:void(0);" class="product-image">
                                    <img src="{{asset('build/assets/images/ecommerce/09.jpg')}}" class="card-img mb-3 rounded-sm !w-full" alt="...">
                                </a>
                                <div class="product-icons"> <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-fill"></i></a> </div>
                                <p class="product-name font-semibold mb-0 flex items-center justify-between">Louie Phillippe Camera<span class="ltr:float-right rtl:float-left text-warning text-xs">4.0<i class="ri-star-s-fill align-middle ms-1"></i></span></p>
                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Ergonic green colored full sleeve jacket</p>
                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between"><span>$1,899<span class="text-textmuted line-through ms-1 opacity-[0.6] inline-block">$3,299</span></span><span class="badge bg-primary/10 text-primary ltr:float-right rtl:float-left !text-[.625rem]">60% off</span></p>
                                <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $1,899</p>
                            </div>
                            <div class="box-footer text-center ">
                                <a href="{{url('product-cart')}}" class="ti-btn ti-btn-primary m-1 !font-medium"><i class="ri-shopping-cart-2-line me-1 align-middle inline-block "></i>Move To Cart</a>
                                <a href="{{url('product-details')}}" class="ti-btn ti-btn-success m-1 !font-medium"><i class="ri-eye-line me-1 align-middle inline-block "></i>View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box product-card">
                            <div class="box-body">
                                <a href="javascript:void(0);" class="product-image">
                                    <img src="{{asset('build/assets/images/ecommerce/10.jpg')}}" class="card-img mb-3 rounded-sm !w-full" alt="...">
                                </a>
                                <div class="product-icons"> <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-fill"></i></a> </div>
                                <p class="product-name font-semibold mb-0 flex items-center justify-between">Denim Headset<span class="ltr:float-right rtl:float-left text-warning text-xs">4.1<i class="ri-star-s-fill align-middle ms-1"></i></span></p>
                                <p class="product-description text-[.6875rem] text-textmuted mb-2">beautiful brown colored snow jacket</p>
                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between"><span>$2,499<span class="text-textmuted line-through ms-1 opacity-[0.6] inline-block">$4,999</span></span><span class="badge bg-primary/10 text-primary ltr:float-right rtl:float-left !text-[.625rem]">50% off</span></p>
                                <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $2,499</p>
                            </div>
                            <div class="box-footer text-center ">
                                <a href="{{url('product-cart')}}" class="ti-btn ti-btn-primary m-1 !font-medium"><i class="ri-shopping-cart-2-line me-1 align-middle inline-block "></i>Move To Cart</a>
                                <a href="{{url('product-details')}}" class="ti-btn ti-btn-success m-1 !font-medium"><i class="ri-eye-line me-1 align-middle inline-block "></i>View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box product-card">
                            <div class="box-body">
                                <a href="javascript:void(0);" class="product-image">
                                    <img src="{{asset('build/assets/images/ecommerce/11.jpg')}}" class="card-img mb-3 rounded-sm !w-full" alt="...">
                                </a>
                                <div class="product-icons"> <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-fill"></i></a> </div>
                                <p class="product-name font-semibold mb-0 flex items-center justify-between">Ladies Handbag<span class="ltr:float-right rtl:float-left text-warning text-xs">4.3<i class="ri-star-s-fill align-middle ms-1"></i></span></p>
                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Full sleeve sweat shirt</p>
                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between"><span>$249<span class="text-textmuted line-through ms-1 opacity-[0.6] inline-block">$1,299</span></span><span class="badge bg-primary/10 text-primary ltr:float-right rtl:float-left !text-[.625rem]">70% off</span></p>
                                <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $249</p>
                            </div>
                            <div class="box-footer text-center ">
                                <a href="{{url('product-cart')}}" class="ti-btn ti-btn-primary m-1 !font-medium"><i class="ri-shopping-cart-2-line me-1 align-middle inline-block "></i>Move To Cart</a>
                                <a href="{{url('product-details')}}" class="ti-btn ti-btn-success m-1 !font-medium"><i class="ri-eye-line me-1 align-middle inline-block "></i>View Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <div class="box product-card">
                            <div class="box-body">
                                <a href="javascript:void(0);" class="product-image">
                                    <img src="{{asset('build/assets/images/ecommerce/12.jpg')}}" class="card-img mb-3 rounded-sm !w-full" alt="...">
                                </a>
                                <div class="product-icons"> <a aria-label="anchor" href="javascript:void(0);" class="wishlist btn-delete"><i class="ri-close-fill"></i></a> </div>
                                <p class="product-name font-semibold mb-0 flex items-center justify-between">Wooden Stool<span class="ltr:float-right rtl:float-left text-warning text-xs">4.0<i class="ri-star-s-fill align-middle ms-1"></i></span></p>
                                <p class="product-description text-[.6875rem] text-textmuted mb-2">Light colored sweater form blueberry</p>
                                <p class="mb-1 font-semibold text-[1rem] flex items-center justify-between"><span>$499<span class="text-textmuted line-through ms-1 opacity-[0.6] inline-block">$799</span></span><span class="badge bg-primary/10 text-primary ltr:float-right rtl:float-left !text-[.625rem]">32% off</span></p>
                                <p class="text-[.6875rem] text-success font-semibold mb-0 flex items-center">
                                    <i class="ti ti-discount-2 text-[1rem] me-1"></i>Offer Price $499</p>
                            </div>
                            <div class="box-footer text-center ">
                                <a href="{{url('product-cart')}}" class="ti-btn ti-btn-primary m-1 !font-medium"><i class="ri-shopping-cart-2-line me-1 align-middle inline-block "></i>Move To Cart</a>
                                <a href="{{url('product-details')}}" class="ti-btn ti-btn-success m-1 !font-medium"><i class="ri-eye-line me-1 align-middle inline-block "></i>View Product</a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!--End::row-1 -->

                    <nav aria-label="Page navigation" class="">
                        <ul class="ti-pagination flex ltr:float-right rtl:float-left mb-4 rounded-sm text-[1rem]">
                            <li class="page-item disabled">
                                <a class="page-link !py-[0.375rem] !px-[0.75rem]" href="javascript:void(0);">
                                    Previous
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link !py-[0.375rem] !px-[0.75rem]"  href="javascript:void(0);">1</a></li>
                            <li class="page-item "><a class="page-link !py-[0.375rem] !px-[0.75rem]" href="javascript:void(0);">2</a></li>
                            <li class="page-item "><a class="page-link !py-[0.375rem] !px-[0.75rem]" href="javascript:void(0);">3</a></li>
                            <li class="page-item">
                                <a class="page-link !text-primary !py-[0.375rem] !px-[0.75rem]" href="javascript:void(0);">
                                    next
                                </a>
                            </li>
                        </ul>
                    </nav>

@endsection

@section('scripts')
	
        <!-- Sweetalerts JS -->
        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Wishlist JS -->
        @vite('resources/assets/js/wishlist.js')

@endsection
