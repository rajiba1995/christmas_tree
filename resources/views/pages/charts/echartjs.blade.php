
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">EChat</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Charts <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">EChat 
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Basic Line Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-basic-line" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Smoothed Line Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-smoothed-line" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Basic Area Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-basic-area" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Stacked Line Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-stacked-line" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Stacked Area Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-stacked-area" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Step Line Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-step-line" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Basic Bar Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-bar-basic" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Bar With Background Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-bar-background" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Style For a Single Bar Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-bar-single" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Water Fall Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-waterfall" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Bar With Negative Values Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-negative-values" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Bar With Labels Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-bar-labels" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Horizontal Bar Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-bar-horizontal" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Horizontal Stacked Bar Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-stacked-horizontal" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Pie Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-pie" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Doughnut Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-doughnut" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Basic Scatter Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-scatter" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Bubble Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-bubble" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Candlestick Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-candlestick" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Basic Radar Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-basic-radar" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Heatmap Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-heatmap" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Treemap Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-treemap" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Funnel Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-funnel" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Basic Gauge Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-gauge-basic" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Simple Graph Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-simple-graph" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Pictorial Chart</div>
                                </div>
                                <div class="box-body">
                                    <div id="echart-pictorial" class="echart-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Echarts JS -->
        <script src="{{asset('build/assets/libs/echarts/echarts.min.js')}}"></script>

        <!-- Internal Echarts JS -->
        @vite('resources/assets/js/echarts.js')


@endsection
