
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

        <!-- noui Slider -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/nouislider/nouislider.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Range Slider</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Advanced Ui <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Range Slider 
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

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Default Range
                                    </div>
                                </div>
                                <div class="box-body">
                                    <input type="range" class="form-range" id="customRange1">
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Disabled Range
                                    </div>
                                </div>
                                <div class="box-body">
                                    <input type="range" class="form-range" id="disabledRange" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Range With Min and Max Values
                                    </div>
                                </div>
                                <div class="box-body">
                                    <input type="range" class="form-range" min="0" max="5" id="customRange2">
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Range With Steps
                                    </div>
                                </div>
                                <div class="box-body">
                                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <h6 class="mb-3">noUiSlider:</h6>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Default-Styling
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Fit Handles
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="slider-fit"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Rounded Styling
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="slider-round"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Square Styling
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="slider-square"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Color Picker Slider</div>
                                </div>
                                <div class="box-body">
                                    <div class="sliders" id="color1"></div>
                                    <div class="sliders" id="color2"></div>
                                    <div class="sliders" id="color3"></div>
                                    <div id="result"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Locking Sliders</div>
                                    </div>
                                    <div class="box-body">
                                        <div id="slider1"></div>
                                        <div id="slider1-span" class="my-1"></div>
                                        <div id="slider2"></div>
                                        <div id="slider2-span" class="my-1"></div>
                                        <div id="slider3"></div>
                                        <div id="slider3-span" class="my-1"></div>
                                        <button type="button" id="lockbutton" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary-full ltr:float-right rtl:float-left">Lock</button>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">Merging tooltips slider</div>
                                    </div>
                                    <div class="box-body">
                                        <div id="merging-tooltips"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="grid grid-cols-12">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">Non Linear Slider</div>
                                        </div>
                                        <div class="box-body">
                                            <div id="nonlinear"></div>
                                            <div id="lower-value" class="mt-5"></div>
                                            <div id="upper-value" class="mt-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">Sliding Handles Tooltips</div>
                                        </div>
                                        <div class="box-body">
                                            <div id="slider-hide"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-10 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Colored Connect Elements</div>
                                </div>
                                <div class="box-body">
                                    <div class="slider" id="color-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-2 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Slider Toggle</div>
                                </div>
                                <div class="box-body">
                                    <div id="slider-toggle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Toggle Movement By Clicking Pips</div>
                                </div>
                                <div class="box-body !pb-[3rem]">
                                    <div id="slider-pips"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Soft Limits</div>
                                </div>
                                <div class="box-body !pb-[3rem]">
                                    <div id="soft"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                    <!-- Start:: row-6 -->
                    <h6 class="mb-3">noUiSlider Colors:</h6>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Primary
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="primary-colored-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Secondary
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="secondary-colored-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Warning
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="warning-colored-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Info
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="info-colored-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Success
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="success-colored-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Danger
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="danger-colored-slider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-6 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

        <!-- noUiSlider JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>
        @vite('resources/assets/js/nouislider.js')

@endsection
