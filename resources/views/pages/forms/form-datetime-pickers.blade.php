
@extends('layouts.master')

@section('styles')

        <!-- FlatPickr CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Date & Timepickers</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Form Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Date & Timepickers 
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
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Basic Date picker
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text  text-[#8c9097]"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control !border-s-0" id="date" placeholder="Choose date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Date picker With Time
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-[#8c9097]"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control !border-s-0" id="datetime" placeholder="Choose date with time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Human Friendly dates
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-[#8c9097]"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control !border-s-0" id="humanfrienndlydate" placeholder="Human friendly dates">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Date range picker
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-[#8c9097]"> <i class="ri-calendar-line"></i> </div>
                                            <input type="text" class="form-control !border-s-0" id="daterange" placeholder="Date range picker">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Basic Time picker
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-[#8c9097]"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control !border-s-0" id="timepikcr" placeholder="Choose time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Time Pickr with 24hr Format
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-[#8c9097]"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control !border-s-0" id="timepickr1" placeholder="Choose time in 24hr format">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Time Picker with Limits
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-[#8c9097]"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control !border-s-0" id="limittime" placeholder="choose time min 16:00 to max 22:30">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        DateTimePicker with Limited Time Range
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-text text-[#8c9097]"> <i class="ri-time-line"></i> </div>
                                            <input type="text" class="form-control !border-s-0" id="limitdatetime" placeholder="date with time limit from 16:00 to 22:00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Date Picker with week numbers
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group mb-0">
                                                <div class="input-group">
                                                    <div class="input-group-text text-[#8c9097]"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" class="form-control !border-s-0" id="weeknum" placeholder="Choose date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Inline Time Picker
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control" id="inlinetime" placeholder="Choose time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Preloading time
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group mb-0">
                                                <div class="input-group">
                                                    <div class="input-group-text text-[#8c9097]"> <i class="ri-time-line"></i> </div>
                                                    <input type="text" class="form-control" id="pretime" placeholder="Preloading time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Inline Calendar
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group overflow-auto">
                                        <input type="text" class="form-control" id="inlinecalendar" placeholder="Choose date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

@endsection

@section('scripts')
	
        <!-- Date & Time Picker JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        @vite('resources/assets/js/date&time_pickers.js')

@endsection
