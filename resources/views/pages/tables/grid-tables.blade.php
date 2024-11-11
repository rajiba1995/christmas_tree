
@extends('layouts.master')

@section('styles')

        <link rel="stylesheet" href="{{asset('build/assets/libs/gridjs/theme/mermaid.min.css')}}">

@endsection

@section('content')
	

                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Grid Js</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Tabels <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Grid Js 
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
                        <div class="box custom-box">
                            <div class="box-header">
                                <div class="box-title">
                                    Basic Table
                                </div>
                            </div>
                            <div class="box-body">
                                <div id="grid-example1"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Table With Pagination
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="grid-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Table With Search
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="grid-search"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Table Sorting
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="grid-sorting"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Table Loading
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="grid-loading"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                    <!-- Start:: row-6 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Wide Table
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="grid-wide"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-6 -->

                    <!-- Start:: row-7 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Fixed Header
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="grid-header-fixed"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-7 -->

                    <!-- Start:: row-8 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Hidden Columns
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="grid-hidden-column"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-8 -->

@endsection

@section('scripts')
	
        <!-- Grid JS -->
        <script src="{{asset('build/assets/libs/gridjs/gridjs.umd.js')}}"></script>

        <!-- Internal Grid JS -->
        @vite('resources/assets/js/grid.js')

@endsection
