
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Product List</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Ecommerce <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Product List 
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
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Products List
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive mb-4">
                                        <table class="ti-custom-table text-nowrap table-bordered min-w-full">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="!text-left rtl:text-right border-b !border-defaultborder dark:!border-defaulttextcolor/10">
                                                        <input class="form-check-input check-all" type="checkbox" id="all-products" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col" class="text-left rtl:text-right border-b">Product</th>
                                                    <th scope="col" class="text-left rtl:text-right border-b">Category</th>
                                                    <th scope="col" class="text-left rtl:text-right border-b">Price</th>
                                                    <th scope="col" class="text-left rtl:text-right border-b">Stock</th>
                                                    <th scope="col" class="text-left rtl:text-right border-b">Gender</th>
                                                    <th scope="col" class="text-left rtl:text-right border-b">Seller</th>
                                                    <th scope="col" class="text-left rtl:text-right border-b">Published</th>
                                                    <th scope="col" class="text-left rtl:text-right border-b">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product1" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md ">
                                                                    <img src="{{asset('build/assets/images/ecommerce/01.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">
                                                                Flower pot
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                Decoration
                                                    </td>
                                                    <td>$1,299</td>
                                                    <td>283</td>
                                                    <td>Male,Female</td>
                                                    <td>Apilla.co.in</td>
                                                    <td>24,Nov 2022 - 04:42PM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-info hover:text-white hover:border-info"><i
                                                            class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave product-btn !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product2" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md ">
                                                                    <img src="{{asset('build/assets/images/ecommerce//02')}}.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">
                                                                Plastic chair
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Furniture
                                                    </td>
                                                    <td>$799</td>
                                                    <td>98</td>
                                                    <td>Male,Female</td>
                                                    <td>Donzo Company</td>
                                                    <td>18,Nov 2022 - 06:53AM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-info hover:text-white hover:border-info"><i
                                                            class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave product-btn !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product3" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md ">
                                                                    <img src="{{asset('build/assets/images/ecommerce/03.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">
                                                                Leather shoe
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    Fashion
                                                    </td>
                                                    <td>$349</td>
                                                    <td>1,293</td>
                                                    <td>Male,Female</td>
                                                    <td>SlowTrack Company</td>
                                                    <td>21,Oct 2022 - 11:36AM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-info hover:text-white hover:border-info"><i
                                                            class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave product-btn !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product4" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md ">
                                                                    <img src="{{asset('build/assets/images/ecommerce/04.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">
                                                            Redme Headset
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                Electronics
                                                    </td>
                                                    <td>$189</td>
                                                    <td>322</td>
                                                    <td>Male,Female</td>
                                                    <td>WoodHill.co.in</td>
                                                    <td>16,Oct 2022 - 12:45AM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-info hover:text-white hover:border-info"><i
                                                            class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave product-btn  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product5" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md ">
                                                                    <img src="{{asset('build/assets/images/ecommerce/05.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">
                                                                30inch lens Camera
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    Electronics
                                                    </td>
                                                    <td>$2,499</td>
                                                    <td>194</td>
                                                    <td>Male,Female</td>
                                                    <td>Watches.co.in</td>
                                                    <td>12,Aug 2022 - 11:21AM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-info hover:text-white hover:border-info"><i
                                                            class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave product-btn !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product6" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md ">
                                                                    <img src="{{asset('build/assets/images/ecommerce/06.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">
                                                            Women college bag
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        Bags
                                                    </td>
                                                    <td>$899</td>
                                                    <td>267</td>
                                                    <td>Female</td>
                                                    <td>Watches.co.in</td>
                                                    <td>05,Sep 2022 - 10:14AM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-info hover:text-white hover:border-info"><i
                                                            class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave product-btn !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product7" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md ">
                                                                    <img src="{{asset('build/assets/images/ecommerce/07.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">
                                                                HP laptop
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    Electronics
                                                    </td>
                                                    <td>$499</td>
                                                    <td>143</td>
                                                    <td>Male,Female</td>
                                                    <td>Louie Philippe</td>
                                                    <td>18,Nov 2022 - 14:35PM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-info hover:text-white hover:border-info"><i
                                                            class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave product-btn !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product8" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md ">
                                                                    <img src="{{asset('build/assets/images/ecommerce/08.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">
                                                                Smart watch
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    Watches
                                                    </td>
                                                    <td>$999</td>
                                                    <td>365</td>
                                                    <td>Male</td>
                                                    <td>Kohino.zaps.com</td>
                                                    <td>27,Nov 2022 - 05:12AM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-info hover:text-white hover:border-info"><i
                                                            class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave product-btn !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product9" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md ">
                                                                    <img src="{{asset('build/assets/images/ecommerce/09.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">
                                                                13pixel Camera
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    Electronics
                                                    </td>
                                                    <td>$1,499</td>
                                                    <td>257</td>
                                                    <td>Male,Female</td>
                                                    <td>Apple Corporation</td>
                                                    <td>29,Nov 2022 - 16:32PM</td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-info hover:text-white hover:border-info"><i
                                                            class="ri-pencil-line"></i></a>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave product-btn  !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="flex items-center sm:justify-between justify-center flex-wrap">
                                        <nav aria-label="..." class="mb-4">
                                            <ul class="ti-pagination ">
                                                <li class="page-item disabled">
                                                    <a class="page-link  px-3 py-[0.375rem]">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                                <li class="page-item " aria-current="page">
                                                    <a class="page-link active px-3 py-[0.375rem]" href="javascript:void(0);">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <button class="ti-btn ti-btn-danger-full text-white !font-[500] m-1">Delete All</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Internal Product-Details JS -->
        @vite('resources/assets/js/product-list.js')

@endsection
